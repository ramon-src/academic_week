<?php

namespace AcademicDirectory\Domains\Users;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class UsersLecture extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'lecture_id'
    ];

    public function user()
    {
        return $this->hasOne('AcademicDirectory\Domains\Users\User');
    }

    public function lecture()
    {
        return $this->hasOne('AcademicDirectory\Domains\Lectures\Lecture');
    }
}
