<?php

namespace AcademicDirectory\Domains\Users;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Role extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    public function scopeGetDefaultId($query)
    {
        return $query->where('name', '=', 'Default')->first()->id;
    }

    public function scopeGetAdminId($query)
    {
        return $query->where('name', '=', 'Administrador')->first()->id;
    }

    public function users()
    {
        return $this->belongsTo('AcademicDirectory\Domains\Users\User');
    }
}
