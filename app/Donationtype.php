<?php

namespace App;

use App\Donnation;
use Illuminate\Database\Eloquent\Model;


class Donationtype extends Model
{
  protected $fillable = [

    'name'
  ];

/**
 * Get the Donations for the model.
 */
public function donations()
{
    return $this->hasMany(Donations::class);
}

}
