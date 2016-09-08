<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use AcademicDirectory\Domains\Users\DefaultUserRepository;

class RegistrationTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testRegisterDefaultUser()
    {
        $defaultUserRepository = \Mockery::mock('AcademicDirectory\Domains\Users\DefaultUserRepository');
        $defaultUserRepository->create(
            [
                'email'=>'rodrigo@gmail.com',
                'password'=>'12345',
                'rg'=>'87987546',
                'name'=>'Rodrigo',
            ]
        );
        $this->seeInDatabase('users', [
            'email' => 'rodrigo@gmail.com',
        ]);
        $this->seeInDatabase('people', [
            'name' => 'Rodrigo',
        ]);
    }
}
