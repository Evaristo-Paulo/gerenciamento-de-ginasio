<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function users (){
        return $this->belongsToMany('App\User', 'role_users', 'role_id', 'user_id');
    }
}
