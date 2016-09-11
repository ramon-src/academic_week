<?php

namespace AcademicDirectory\Domains\People;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class People extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'rg', 'user_id'
    ];

    public function user()
    {
        return $this->hasOne('AcademicDirectory\Domains\Users\User');
    }

    public function scopeInstituition()
    {
        return $this->instituitions()->first();
    }

    public function instituitionIdIfHasLink()
    {
        $instituition_people = $this->instituitions()->first();
        return ($instituition_people) ? $instituition_people->instituition_id : $instituition_people;
    }

    public function instituitions()
    {
        return $this->hasMany('AcademicDirectory\Domains\Users\InstituitionPeople', 'person_id', 'id');
    }
}
