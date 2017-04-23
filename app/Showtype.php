<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Shows;

class Showtype extends Model
{
  protected $fillable = [
    'name'
  ];
  /**
   * Get the Shows for the model.
   */
  public function Shows()
  {
      return $this->hasMany(Shows::class);
  }
  /**
   * Get the Shows for the model.
   */
  // public function Shows()
  // {
  //     return $this->hasMany Shows::class);
  // }
}
