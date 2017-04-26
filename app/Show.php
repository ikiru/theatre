<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Showtype;
use App\Schoolyear;
use App\Publisher;
use App\Rolelist;
use App\Castlist;
use App\Techrolelist;
use App\School;
use App\Auth;

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
    'updated_at',
    'castlist_id',
    'rolelist_id',
    'techrolelist_id'
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

  /**
   * Get the Castlist for the model.
   */
  public function castlist()
  {
      return $this->hasMany(Castlist::class);
  }

  /**
   * Get the Rolelist for the model.
   */
  public function rolelist()
  {
      return $this->hasMany(Rolelist::class);
  }

  /**
   * Get the Techrolelist for the model.
   */
  public function techrolelist()
  {
      return $this->hasMany(Techrolelist::class);
  }

  /**
   * Get the User that owns the model.
   */
  public function user()
  {
      return $this->belongsTo(User::class);
  }

  /**
   * Get the School that owns the model.
   */
  public function school()
  {
      return $this->belongsTo(School::class);
  }

  /**
   * Get the Rolelist for the model.
   */
  public function rolelists()
  {
      return $this->hasMany(Rolelist::class);
  }
}
