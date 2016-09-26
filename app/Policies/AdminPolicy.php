<?php

namespace AcademicDirectory\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;

use AcademicDirectory\Domains\Users\UserRepository;

class AdminPolicy
{
    use HandlesAuthorization;

    protected $user;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->user = $userRepository;
    }

    public function before($user, $ability)
    {
        $user_id = $user->id;
        if ($this->user->isAdmin($user_id) || $this->user->isRoot($user_id)) {
            return true;
        }
    }

}
