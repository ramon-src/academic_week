<?php
/**
 * Created by PhpStorm.
 * User: ramon
 * Date: 06/09/16
 * Time: 01:25
 */

namespace AcademicDirectory\Domains\People;

use Artesaos\Warehouse\AbstractCrudRepository;

class PeopleRepository extends AbstractCrudRepository
{

    protected $modelClass = People::class;


}