<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    protected $redirectTo = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Show the application login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function getLogin()
    {
        pagetitle( [ trans( 'main.login' ), settings( 'server_name' ) ] );
        return view('front.auth.login');
    }

    /**
     * Handle a login request to the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postLogin( Request $request )
    {
        $this->validate($request, [
            'username' => 'required', 'password' => 'required',
        ]);

        // If the class is using the ThrottlesLogins trait, we can automatically throttle
        // the login attempts for this application. We'll key this by the username and
        // the IP address of the client making these requests into this application.
        $throttles = $this->isUsingThrottlesLoginsTrait();

        if ($throttles && $this->hasTooManyLoginAttempts($request)) {
            return $this->sendLockoutResponse($request);
        }

        if (Auth::attempt(['name' => strtolower($request->username), 'password' => strtolower($request->username) . $request->password], $request->has('remember'))) {
            return $this->handleUserWasAuthenticated($request, $throttles);
        }

        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.
        if ($throttles) {
            $this->incrementLoginAttempts($request);
        }

        return redirect()->back()
            ->withInput($request->only($this->loginUsername(), 'remember'))
            ->withErrors([
                $this->loginUsername() => $this->getFailedLoginMessage(),
            ]);
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postRegister( Request $request )
    {
        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
        }
        
        Auth::login($this->create( $request->all() ));

        $coins = intval( settings( 'registration_coin' ) );
        if ($coins > 0) {
            $acc = User::where( 'name', $request->username )->first();
            if ($acc) {
                DB::statement(" call usecash( $acc->ID, 1 ,0 ,1 ,0 ,$coins ,1 ,@error ) ");
            }
        }

        flash()->success( trans( 'main.reg_complete' ) );
        return redirect()->back();
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => 'required|alpha_num|min:4|max:255|unique:users,name',
            'email' => 'required|email|max:255',
            'password' => 'required|alpha_num|confirmed|min:6',
            'truename' => 'required|string|min:4|max:255',
            'pin' => 'required|numeric|min:4',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'ID' => ( User::all()->count() > 0 ) ? User::orderBy( 'ID', 'desc' )->first()->ID + 16 : 1024,
            'name' => strtolower($data['username']),
            'email' => $data['email'],
            'idnumber' => $data['pin'],
            'truename' => $data['truename'],
            'passwd' => Hash::make(strtolower($data['username']).$data['password']),
            'passwd2' => base64_encode(strtolower($data['username']).$data['password']),
            'qq' => $_SERVER['REMOTE_ADDR'],
        ]);
    }
}
