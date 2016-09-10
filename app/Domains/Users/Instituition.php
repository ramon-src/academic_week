<?php

namespace AcademicDirectory\Domains\Users;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Instituition extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'initials'
    ];

    public function scopeGetPucrsId($query)
    {
        return $query->where('initials', '=', 'PUCRS')->first()->id;
    }

    public function people()
    {
        return $this->hasMany('AcademicDirectory\Domains\People\InstituitionPeople', 'instituition_id', 'id');
    }
}
