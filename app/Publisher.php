<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// IDEA : Complete list of plays by publishers https://www.musicals101.com/alphinde.htm

class Publisher extends Model
{
  protected $fillable = [
    'name'
  ];

  /**
   * Get the Publishers for the model.
   */
  public function shows()
  {
      return $this->hasMany(shows::class);
  }
}
