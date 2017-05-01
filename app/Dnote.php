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
    'movement',
    'characterization_note',
    'taking_direction_note',
    'vocal_note',
    'movement_note',
    'reading_note',
    'note',
    'school_id',
    'user_id'


  ];


}
