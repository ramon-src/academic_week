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
}
