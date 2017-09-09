<?php
namespace App\Model\Table;

use Cake\ORM\Table;

class ApplyTable extends Table
{
    public function initialize(array $config)
    {
        $this->setTable('apply');
    }
}
