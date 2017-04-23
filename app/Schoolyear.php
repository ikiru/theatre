<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Shows;

class Schoolyear extends Model
{
  protected $fillable = [
    'name'
  ];

  /**
   * Get the models for the model.
   */
/**
 * Get the Users for the model.
 */
public function Users()
{
    return $this->hasMany(Users::class);
}

/**
 * Get the Shows for the model.
 */
public function Shows()
{
    return $this->hasMany(Shows::class);
}
}
