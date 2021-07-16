<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    public function skills()
    {
        return $this->belongsToMany(Skill::class, 'teacherskills');
    }
    public function skillsList()
    {
        $list = [];
        foreach ($this->skills as  $skill) {
            $list[] = $skill->name;
        } 
        return $list;
    }
}
