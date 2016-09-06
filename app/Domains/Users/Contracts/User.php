<?php

namespace AcademicDirectory\App\Domains\Users\Contracts;

interface User
{
    public function create();
    public function edit();
    public function delete();

}