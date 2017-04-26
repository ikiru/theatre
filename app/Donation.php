<?php

namespace App;

use App\Donationtype;
use Illuminate\Database\Eloquent\Model;


class Donation extends Model
{
  protected $fillable = [
    'name',
    'date',
    'donationtype_id',
    'notes',
    'donationreciept',
    'user_id',
    'school_id'
  ];

  /**
   * Get the Donationtype that owns the model.
   */
  public function donationtype()
  {
      return $this->belongsTo(Donationtype::class);
  }
}
