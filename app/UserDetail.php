<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{

      protected $table = 'user_details';

    
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','facebook_id','nickname','team','group','generation','come_event'
    ];


}
