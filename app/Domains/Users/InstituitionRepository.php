<?php
/**
 * Created by PhpStorm.
 * User: ramon
 * Date: 06/09/16
 * Time: 01:25
 */

namespace AcademicDirectory\Domains\Users;

use Artesaos\Warehouse\AbstractCrudRepository;

class InstituitionRepository extends AbstractCrudRepository
{

    protected $modelClass = Instituition::class;

    public function getPUCRSId()
    {
        return $this->newQuery()->where('initials', '=', 'PUCRS')->first()->id;
    }

}