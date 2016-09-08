<?php
/**
 * Created by PhpStorm.
 * User: ramon
 * Date: 06/09/16
 * Time: 01:25
 */

namespace AcademicDirectory\App\Domains\Users;

use Artesaos\Warehouse\AbstractCrudRepository;

class DefaultUserRepository extends AbstractCrudRepository
{

    protected $modelClass = User::class;

    public function create($data)
    {
        $user = parent::create($data);
        $data['user_id'] = $user->id;
        parent::update(Participant::class, $data);
    }

}