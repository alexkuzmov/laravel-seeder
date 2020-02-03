<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    
    public function tasks(){
        return $this->hasMany('App\Models\Tasks', 'creator_id');
    }
    
    public function comments(){
        return $this->hasMany('App\Models\Comments', 'creator_id');
    }
}
