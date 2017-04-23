<?php

namespace App;

use App\User;
use App\School;
use App\District;

use Illuminate\Database\Eloquent\Model;


class State extends Model
{
  public function users()
  {
    return $this->hasMany('user');

  }

  public function schools()
  {
    return $this->hasMany('school');

  }

  public function districts()
  {
    return $this->hasMany('district');

  }

  public function donors()
  {
    return $this->hasMany('donor');

  }
  
  public function venues()
  {
    return $this->hasMany('venue');

  }

  public function states()
  {
    return $this->hasMany('state');

  }
}
