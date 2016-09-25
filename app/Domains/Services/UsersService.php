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
    protected $user;

    public function __construct($userRepository)
    {
        $this->user = $userRepository;
    }

    public function isAdmin()
    {
        return $this->user->isAdmin(Auth::id());
    }
}