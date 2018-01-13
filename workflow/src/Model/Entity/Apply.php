<?php
namespace App\Model\Entity;
use Cake\ORM\Entity;

class Apply extends Entity
{
    protected $_accessible = [
        '*' => true, //①
        'id' => false,
    ];
}