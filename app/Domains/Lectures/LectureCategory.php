<?php

namespace AcademicDirectory\Domains\Lectures;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class LectureCategory extends Model
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

    public function scopeGetLecturesId($query)
    {
        return $query->where('name', '=', 'Palestras')->first()->id;
    }

    public function scopeGetCoursesId($query)
    {
        return $query->where('name', '=', 'Cursos')->first()->id;
    }

    public function lecture()
    {
        return $this->belongsToMany('AcademicDirectory\Domains\Lectures\Lecture');
    }
}
