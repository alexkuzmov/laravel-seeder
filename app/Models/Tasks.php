<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    
    public function users(){
        return $this->belongsTo('\App\Models\Users', 'creator_id');
    }
    
    public function comments(){
        return $this->hasMany('App\Models\Comments', 'task_id');
    }
}
