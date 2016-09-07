<?php
/**
 * Created by PhpStorm.
 * User: ramon
 * Date: 06/09/16
 * Time: 01:25
 */

namespace AcademicDirectory\App\Domains\Users;

use Artesaos\Warehouse\BaseRepository;

class DefaultUserRepository extends BaseRepository
{

    protected $modelClass = User::class;

    public function create($data)
    {
    }

}