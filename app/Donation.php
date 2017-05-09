<?php

namespace App;

use App\Donor;
use App\Donationtype;
use Illuminate\Database\Eloquent\Model;
use Nuwave\Lighthouse\Support\Traits\RelayConnection;

class Donation extends Model
{
  protected $fillable = [
    'name',
    'date',
    'donationtype_id',
    'note',
    'has_receipt',
    'upload_receipt',
    'value',
    'donor_id',
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

  /**
   * Get the Donor that owns the model.
   */
  public function Donor()
  {
      return $this->belongsTo(Donor::class);
  }
}
