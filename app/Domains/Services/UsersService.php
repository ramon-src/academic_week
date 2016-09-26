<?php
/**
 * Created by PhpStorm.
 * User: ramon
 * Date: 10/09/16
 * Time: 19:53
 */

namespace AcademicDirectory\Domains\Services;
use Illuminate\Support\Facades\Auth;

class UsersService
{
    protected $userRepository;

    public function __construct($userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function isAdmin()
    {
        return $this->userRepository->isAdmin(Auth::id());
    }

}