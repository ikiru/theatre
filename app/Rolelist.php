<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Castlist;
use App\Show;
use App\Auth;

class Rolelist extends Model
{
  protected $fillable = [

    'name',
    'user_id',
    'school_id',
    'show_id'
  ];

  /**
   * Get the Show record associated with the model.
   */
  public function Show()
  {
      return $this->hasOne(Show::class);
  }
}
