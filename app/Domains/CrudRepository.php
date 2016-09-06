<?php

/**
 * Created by PhpStorm.
 * User: ramon
 * Date: 06/09/16
 * Time: 02:25
 */
interface CrudRepository
{
    public function create();
    public function edit();
    public function delete();
}