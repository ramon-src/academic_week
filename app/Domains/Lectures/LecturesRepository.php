<?php
/**
 * Created by PhpStorm.
 * User: ramon
 * Date: 06/09/16
 * Time: 01:25
 */

namespace AcademicDirectory\Domains\Lectures;

use Artesaos\Warehouse\AbstractCrudRepository;

class LecturesRepository extends AbstractCrudRepository
{

    protected $modelClass = Lecture::class;

    public function limitOfSubscribers($lecture_id)
    {
        return $this->newQuery()->where("id", "=", $lecture_id)->select(['max_people'])->get();
    }


}