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

  /**
   * Get the venue that owns the model.
   */
  public function venue()
  {
      return $this->belongsTo(Venue::class);
  }

  /**
   * Get the trank that owns the model.
   */
  public function trank()
  {
      return $this->belongsTo(Trank::class);
  }

  /**
   * Get the tpostion that owns the model.
   */
  public function tpostion()
  {
      return $this->belongsTo(Tpostion::class);
  }

  /**
   * Get the Tpoint that owns the model.
   */
  public function Tpoint()
  {
      return $this->belongsTo(Tpoint::class);
  }

  /**
   * Get the Tlength that owns the model.
   */
  public function Tlength()
  {
      return $this->belongsTo(Tlength::class);
  }

  /**
   * Get the Tcatagory that owns the model.
   */
  public function Tcatagory()
  {
      return $this->belongsTo(Tcatagory::class);
  }

  /**
   * Get the School that owns the model.
   */
  public function School()
  {
      return $this->belongsTo(School::class);
  }

  /**
   * Get the Publisher that owns the model.
   */
  public function Publisher()
  {
      return $this->belongsTo(Publisher::class);
  }

  /**
   * Get the Donor that owns the model.
   */
  public function Donor()
  {
      return $this->belongsTo(Donor::class);
  }
}
