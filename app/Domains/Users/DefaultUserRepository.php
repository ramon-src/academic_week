<?php
/**
 * Created by PhpStorm.
 * User: ramon
 * Date: 06/09/16
 * Time: 01:25
 */

namespace AcademicDirectory\Domains\Users;

use Artesaos\Warehouse\AbstractCrudRepository;

class DefaultUserRepository extends AbstractCrudRepository
{

    protected $modelClass = User::class;


    public function create(array $data = [])
    {
        $data['role_id'] = Role::getDefaultId();
        $data['password'] = bcrypt($data['password']);
        return parent::create($data);
    }

}