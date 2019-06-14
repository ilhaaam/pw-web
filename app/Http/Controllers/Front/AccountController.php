<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AccountController extends Controller
{
    public function __construct()
    {
        $this->middleware( 'auth' );
    }

    public function getSettings()
    {
        pagetitle( [ trans( 'main.settings' ), settings( 'server_name' ) ] );
        return view( 'front.account.index' );
    }

    public function postEmail( Request $request )
    {
        $validator = Validator::make( $request->all(), [
            'email_address' => 'required|email|max:255',
            'email_pass' => 'required|current_pass|max:255'
        ]);

        if ( $validator->fails() )
        {
            return redirect( 'account/settings#email' )
                ->withErrors( $validator )
                ->withInput();
        }

        $user = Auth::user();
        $user->email = $request->email_address;
        $user->save();
        flash()->success( trans( 'main.settings_saved' ) );
        return redirect( 'account/settings#email' );
    }

    public function postPassword( Request $request )
    {
        $validator = Validator::make( $request->all(), [
            'current_password' => 'required|current_pass|max:255',
            'new_password' => 'required|confirmed|min:6',
            'password_pin' => 'required|current_pin|numeric'
        ]);


        if ( $validator->fails() )
        {
            return redirect( 'account/settings#password' )
                ->withErrors( $validator )
                ->withInput();
        }

        $user = Auth::user();
        $user->passwd = Hash::make( $user->name . $request->new_password );
        $user->save();
        flash()->success( trans( 'main.settings_saved' ) );
        return redirect( 'account/settings#password' );
    }

    public function postPin( Request $request )
    {
        $validator = Validator::make( $request->all(), [
            'current_pin' => 'required|current_pin|max:10',
            'new_pin' => 'required|min:4',
            'pin_password' => 'required|current_pass|max:255'
        ]);


        if ( $validator->fails() )
        {
            return redirect( 'account/settings#pin' )
                ->withErrors( $validator )
                ->withInput();
        }

        $user = Auth::user();
        $user->idnumber = $request->new_pin;
        $user->save();
        flash()->success( trans( 'main.settings_saved' ) );
        return redirect( 'account/settings#pin' );
    }
}
