<?php
namespace App\Controller;

use Cake\ORM\TableRegistry;

class AdminController extends AppController
{
    public function index() {
        $this->Apply = TableRegistry::get('Apply');
        $Apply = $this->Apply->find()->all();
        $Apply = $Apply->toArray();
        $this->set('names', $Apply);
    }
    
    public function login() {
    }
}
