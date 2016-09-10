<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RegisterFunctionalTest extends TestCase
{

    public function testInputWithoutPucSelected()
    {
        $this->visit('registrar')
            ->seeElement('input', ['id'=>'rg'])
            ->seeElement('input', ['id'=>'name'])
            ->seeElement('input', ['id'=>'email'])
            ->seeElement('input', ['id'=>'password'])
            ->seeElement('input', ['id'=>'password-confirm']);
    }

    public function testSeeAllInputsAndPucSelectedToShowRegistryNumber()
    {
        $this->visit('registrar')
            ->check('puc_checkbox')
            ->seeElement('input', ['id'=>'registry_number'])
            ->seeElement('input', ['id'=>'rg'])
            ->seeElement('input', ['id'=>'name'])
            ->seeElement('input', ['id'=>'email'])
            ->seeElement('input', ['id'=>'password'])
            ->seeElement('input', ['id'=>'password-confirm']);
    }
    
}
