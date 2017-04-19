<?php

namespace App;

use App\State;

use Illuminate\Database\Eloquent\Model;


class Donor extends Model
{
  public function state()
  {
    return $this->belongsTo('state');

  }
}
