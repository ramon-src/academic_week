<?php
namespace AcademicDirectory\Domains\Lectures;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Lecture extends Model
{
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'subject', 'description', 'local', 'init_hour', 'end_hour',
        'max_people', 'event_schedule_id', 'lecture_category_id'
    ];

    public function category(){
        return $this->hasOne('AcademicDirectory\Domains\Lectures\LectureCategory', 'lecture_category_id', 'id');
    }

    public function users(){
        return $this->hasMany('AcademicDirectory\Domains\Users\UsersLecture');
    }
    
    public function event_schedule(){
        return $this->belongsTo('AcademicDirectory\Domains\Events\EventSchedule');
    }
}