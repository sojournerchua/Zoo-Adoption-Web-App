<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $fillable = [
        'name', 'type', 'image', 'dob', 'description', 'state',
    ];
}
