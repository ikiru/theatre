<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class VocalSkill extends Model
{
  /**
   * Get the User for the model.
   */
  public function Users()
  {
      return $this->hasMany(User::class);
  }

  /**
   * Get the Audform for the model.
   */
  public function Audforms()
  {
      return $this->hasMany(Audform::class);
  }
}
