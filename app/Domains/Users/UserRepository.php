<?php
/**
 * Created by PhpStorm.
 * User: ramon
 * Date: 06/09/16
 * Time: 01:25
 */

namespace AcademicDirectory\Domains\Users;

use Artesaos\Warehouse\AbstractCrudRepository;

class UserRepository extends AbstractCrudRepository
{

    protected $modelClass = User::class;

    public function isAdmin($id)
    {
        $User = $this->newQuery()->where('id', '=', $id)->first();
        $Role = app()->make(Role::class)->newQuery()->where('name', '=', 'Administrador')->first();
        return $User->role_id == $Role->id;
    }

    public function isRoot($id)
    {
        $User = $this->newQuery()->where('id', '=', $id)->first();
        $Role = app()->make(Role::class)->newQuery()->where('name', '=', 'Root')->first();
        return $User->role_id == $Role->id;
    }

    public function getAllByRg($rg){
        return $this->newQuery()->where('rg', '=', $rg)->get();
    }

}