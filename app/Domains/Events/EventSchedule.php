<?php
namespace AcademicDirectory\Domains\Events;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class EventSchedule extends Model
{
    use Notifiable;
    public $table = 'event_schedule';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'date', 'description', 'event_id'
    ];

    public function lectures(){
        return $this->hasMany('AcademicDirectory\Domains\Events\LectureDay');
    }

    public function event(){
        return $this->belongsTo('AcademicDirectory\Domains\Events\Event');
    }
}