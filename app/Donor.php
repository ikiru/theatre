<?php

namespace App;

use App\State;
use App\Donation;
use Illuminate\Database\Eloquent\Model;


class Donor extends Model
{

    protected $fillable = [
      'business_name',
      'address',
      'city',
      'state_id',
      'zip',
      'phone',
      'donor_id',
      'is_active',
      'created_at',
      'updated_at',
      'notes',
      'email',
      'user_id',
      'firstname',
      'lastname'

    ];


  public function state()
  {
    return $this->belongsTo('state');

  }

  /**
   * Get the Donations for the model.
   */
  public function Donations()
  {
      return $this->hasMany(Donations::class);
  }
}
