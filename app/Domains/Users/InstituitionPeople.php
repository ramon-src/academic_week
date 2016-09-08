<?php

namespace AcademicDirectory\Domains\Users;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class InstituitionPeople extends Model
{
    use Notifiable;
protected $table='instituition_people';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'instituition_id', 'person_id', 'registry_number'
    ];

}
