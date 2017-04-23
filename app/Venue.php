<?php

namespace App;

use App\States;
use Illuminate\Database\Eloquent\Model;


class Venue extends Model
{
  protected $fillable = [
    'name',
    'address',
    'city',
    'state_id',
    'zip',
    'phone',
    'website',
    'email',
    'in_district',
    'created_at',
    'updated_at',
    'user_id'
  ];


  public function state()
  {
    return $this->belongsTo(State::class);

  }

}
