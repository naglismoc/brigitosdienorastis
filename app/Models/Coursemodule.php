<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coursemodule extends Model
{
    
    use HasFactory;
    public function modules()
    {
        // return $this->hasMany(Checkin::class);
       return $this->belongsTo('App\Models\Skill', 'skill_id', 'id');
    }
}
