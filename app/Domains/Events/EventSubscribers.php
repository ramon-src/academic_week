<?php
namespace AcademicDirectory\Domains\Events;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class EventSubscribers extends Model
{
    use Notifiable;
    protected $table = 'events_subscribers';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'event_id', 'user_id', 'active'
    ];

    public function user(){
        return $this->hasOne('AcademicDirectory\Domains\Users\User');
    }

    public function event(){
        return $this->hasOne('AcademicDirectory\Domains\Events\Event');
    }
}