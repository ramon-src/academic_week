<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RegistrationTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testVisitRegistrationForm()
    {
        $this->visitRoute('web.inscricao')
            ->see('RG')
            ->see('Nome')
            ->see('Email')
            ->see('Senha')
            ->see('Confirme sua Senha');
    }

    public function testSuccessDefaultUserRegistration(){

    }
}
