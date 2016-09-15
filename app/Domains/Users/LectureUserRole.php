<?php

namespace AcademicDirectory\Domains\Users;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class LectureUserRole extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'role_id', 'user_lecture_id'
    ];

    public function user()
    {
        return $this->hasOne('AcademicDirectory\Domains\Users\UsersLecture');
    }

    public function role()
    {
        return $this->hasOne('AcademicDirectory\Domains\Users\LectureRoles');
    }
}
