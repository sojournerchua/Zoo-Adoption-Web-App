<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdoptRequest extends Model
{
  protected $fillable = [
      'email', 'animalid',
  ];

}
