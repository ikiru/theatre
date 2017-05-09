<?php

namespace App;

use App\State;
use App\District;
use App\School;


use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Nuwave\Lighthouse\Support\Traits\RelayConnection;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'role_id',
        'email',
        'avatar',
        'password',
        'remember_token',
        'created_at',
        'updated_at',
        'firstname',
        'lastname',
        'address',
        'city',
        'state_id',
        'zip',
        'phone',
        'district_id',
        'school_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function state()
    {
      return $this->belongsTo(State::class);

    }

    public function district()
    {
      return $this->belongsTo(District::class);

    }

    public function School()
    {
      return $this->belongsTo(School::class);

    }
}
