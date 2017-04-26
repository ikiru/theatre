<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Rolelist;

class Castlist extends Model
{
  protected $fillable = [
    'name',
    'show_id',
    'user_id',
    'school_id',
    'created_at',
    'updated_at',
    'rolelist_id'
  ];

  /**
   * Get the Rolelist that owns the model.
   */
  public function rolelist()
  {
      return $this->belongsTo(Rolelist::class);
  }

  /**
   * Get the Rolelist record associated with the model.
   */
  public function Rolelist()
  {
      return $this->hasOne(Rolelist::class);
  }
}
