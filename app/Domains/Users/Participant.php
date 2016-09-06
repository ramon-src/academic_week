<?php
/**
 * Created by PhpStorm.
 * User: ramon
 * Date: 06/09/16
 * Time: 01:31
 */

namespace AcademicDirectory\App\Domains\Users;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    protected $fillable = [
        'rg', 'active'
    ];

    public function user()
    {
        return $this->belongsTo('AcademicDirectory\Domains\Users\User');
    }
}
