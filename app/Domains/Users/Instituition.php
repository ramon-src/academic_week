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

    public function users()
    {
        return $this->belongsTo('AcademicDirectory\Domains\Users\User');
    }

    public function events()
    {
        return $this->belongsTo('AcademicDirectory\Domains\Events\Event');
    }
}
