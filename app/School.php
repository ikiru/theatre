<?php

namespace App;

use App\State;
use App\District;

use Illuminate\Database\Eloquent\Model;


class School extends Model
{
  protected $fillable = [

  ];
  public function district()
  {
    return $this->belongsTo(District::class);

  }

  public function state()
  {
    return $this->belongsTo(State::class);

  }
}
