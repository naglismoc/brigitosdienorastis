<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    // public function courseModules()
    // {
    //     // return $this->hasMany(Checkin::class);
    //    return $this->belongsTo('App\Models\Coursemodule', 'course_id', 'id');
    // }
    public function modules()
    {
        return $this->belongsToMany(Skill::class, 'coursemodules');
    }
    public function modulesList()
    {
        $list = [];
        foreach ($this->modules as  $skill) {
            $list[] = $skill->name;
        } 
        return $list;
    }
    use HasFactory;
}
