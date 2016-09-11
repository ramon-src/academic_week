<?php

namespace AcademicDirectory\Domains\Users;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'password', 'active', 'role_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function scopeActive($query)
    {
        return $query->where('active', '=', true);
    }

    public function person()
    {
        return $this->hasOne('AcademicDirectory\Domains\People\People');
    }

    public function role()
    {
        return $this->hasOne('AcademicDirectory\Domains\Users\Role');
    }
}
