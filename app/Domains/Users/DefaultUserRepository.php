<?php
/**
 * Created by PhpStorm.
 * User: ramon
 * Date: 06/09/16
 * Time: 01:25
 */

namespace AcademicDirectory\App\Domains\Users;

use AcademicDirectory\App\Domains\CrudRepository;

class DefaultUserRepository implements CrudRepository
{

    public function create($data)
    {
        $user = User::create($data);
        $data['user_id'] = $user->id;
        Participant::create($data);
    }

    public function edit()
    {

    }
    
    public function delete()
    {

    }

}