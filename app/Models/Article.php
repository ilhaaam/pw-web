<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Article extends Model
{
    public $table = 'pweb_articles';

    public $dates = [ 'created_at', 'updated_at' ];

    public $fillable = [ 'author', 'title', 'content', 'category', 'slug' ];

    public function color( $type )
    {
        $colors = [
            'update' => 'primary',
            'maintenance' => 'danger',
            'event' => 'success',
            'contest' => 'warning',
            'other' => 'default',
            'guide' => 'info'
        ];
        return $colors[$type];
    }

    public function author( $author )
    {
        $user = User::find( $author );
        return ( $user ) ? $user->truename : 'Unknown';
    }

}
