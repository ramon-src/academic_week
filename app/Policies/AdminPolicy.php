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
        if ($this->user->isAdmin($user->id)) {
            return true;
        }
    }

}
