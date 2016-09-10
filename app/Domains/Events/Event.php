<?php
/**
 * Created by PhpStorm.
 * User: ramon
 * Date: 10/09/16
 * Time: 19:24
 */

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

    public function instituition(){
        return $this->hasOne('AcademicDirectory\Domains\Users\Instituition');
    }
}