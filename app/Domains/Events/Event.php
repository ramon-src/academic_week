<?php
namespace AcademicDirectory\Domains\Events;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Event extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'active', 'instituition_id'
    ];

    public function minDateFormatted()
    {
        return getDayAndMonth($this->schedule()->min('date'));
    }
    public function maxDateFormatted()
    {
        return getDayAndMonth($this->schedule()->max('date'));
    }

    public function instituition()
    {
        return $this->hasOne('AcademicDirectory\Domains\Users\Instituition');
    }

    public function schedule()
    {
        return $this->hasMany('AcademicDirectory\Domains\Events\EventSchedule');
    }

    public function subscribers()
    {
        return $this->hasMany('AcademicDirectory\Domains\Events\EventSubscribers');
    }
}