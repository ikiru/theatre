<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Showtype;
use App\Schoolyear;
use App\Publisher;

class Show extends Model
{
  protected $fillable = [
    'name',
    'playwrite',
    'publisher_id',
    'venue_id',
    'showtype_id',
    'royality',
    'schoolyear_id',
    'showstartdate',
    'showenddate',
    'rehearstartdate',
    'rehearenddate',
    'note',
    'user_id',
    'school_id',
    'created_at',
    'updated_at'
  ];

  /**
   * Get the Showtype that owns the model.
   */
  public function Showtype()
  {
      return $this->belongsTo(Showtype::class);
  }

  /**
   * Get the Schoolyear that owns the model.
   */
  public function Schoolyear()
  {
      return $this->belongsTo(Schoolyear::class);
  }

  /**
   * Get the Publishers that owns the model.
   */
  public function Publishers()
  {
      return $this->belongsTo(Publishers::class);
  }
}
