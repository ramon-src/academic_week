<?php
namespace AcademicDirectory\Domains\Events;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class EventSchedule extends Model
{
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'local', 'init_hour', 'end_hour', 'max_people', 'event_schedule_id', 'lecture_id'
    ];

    public function lectures(){
        return $this->hasMany('AcademicDirectory\Domains\Events\LectureDay');
    }

    public function event(){
        return $this->belongsTo('AcademicDirectory\Domains\Events\Event');
    }
}