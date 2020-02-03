<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    public function users(){
        return $this->belongsTo('\App\Models\Users', 'creator_id');
    }
    
    public function tasks(){
        return $this->belongsTo('App\Models\Tasks', 'task_id');
    }
}
