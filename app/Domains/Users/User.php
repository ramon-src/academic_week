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
        'name', 'email', 'password', 'active',
        'rg', 'instituition_register', 'phone', 'role_id', 'instituition_id'
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

    public function role()
    {
        return $this->hasOne('AcademicDirectory\Domains\Users\Role');
    }

    public function instituition()
    {
        return $this->hasOne('AcademicDirectory\Domains\Users\Instituition');
    }
}
