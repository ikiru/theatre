<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Dnote extends Model
{
  protected $fillable = [
    'show_id',
    'audition_id',
    'reading',
    'characterization',
    'taking_direction',
    'vocal',
    'movements',
    'characterization_note',
    'taking_direction_notes',
    'vocal_notes',
    'movements_notes',
    'Notes',
    'school_id',
    'user_id', 
    'created_at',
    'updated_at'

  ]
}
