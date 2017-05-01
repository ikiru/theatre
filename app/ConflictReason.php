<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class ConflictReason extends Model
{
  /**
   * Get the Conflicts for the model.
   */
  public function conflicts()
  {
      return $this->hasMany(Conflicts::class);
  }
}
