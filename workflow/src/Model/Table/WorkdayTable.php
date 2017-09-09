<?php
namespace App\Model\Table;

use Cake\ORM\Table;

class WorkdayTable extends Table
{
    public function initialize(array $config)
    {
        $this->setTable('workday');
    }
}
