<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'name',
        'roll',
        'class',
        'section',
        'group',
    ];

protected $table = 'students';

}