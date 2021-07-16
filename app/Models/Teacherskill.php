<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacherskill extends Model
{
    public function skills()
    {
        // return $this->hasMany(Checkin::class);
       return $this->belongsTo('App\Models\Skill', 'skill_id', 'id');
    }
    use HasFactory;
}
