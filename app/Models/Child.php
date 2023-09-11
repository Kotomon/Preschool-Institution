<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    protected $connection = 'mysql';
    protected $table = 'child_table';
    protected $primaryKey ='id';
    protected $fillable = [
    'last_name',
    'first_name',
    'patronymic',
    'birthdate',
    'photo',
    'group',
    'social_and_emotional_development',
    'motor_skills',
    'coordination',
    'readiness_to_learn',
    'speech_development',
    'interaction_with_other_children',
    'classes_in_english',
    'recommendations',
    'comment'
    ];
}
