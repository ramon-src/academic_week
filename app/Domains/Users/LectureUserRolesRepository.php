<?php
/**
 * Created by PhpStorm.
 * User: ramon
 * Date: 06/09/16
 * Time: 01:25
 */

namespace AcademicDirectory\Domains\Users;

use Artesaos\Warehouse\AbstractCrudRepository;

class LectureUserRolesRepository extends AbstractCrudRepository
{

    protected $modelClass = LectureUserRole::class;

    public function saveByType($user_lecture_id, $type)
    {
        $LectureRole = app()->make(LectureRoles::class)->newQuery()->where('name', '=', $type)->first();
        return $this->newQuery()->updateOrCreate(['user_lecture_id' => $user_lecture_id, 'role_id' => $LectureRole->id]);
    }

    public function deleteByType($user_lecture_id, $type)
    {
        $LectureRole = app()->make(LectureRoles::class)->newQuery()->where('name', '=', $type)->first();
        return $this->newQuery()->where('user_lecture_id', '=', $user_lecture_id)->where('role_id', '=', $LectureRole->id)->delete();
    }


}