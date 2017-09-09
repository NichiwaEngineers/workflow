<?php
namespace App\Controller;

use Cake\ORM\TableRegistry;

class TestController extends AppController
{
    public function index() {
      $this->User = TableRegistry::get('User');
      $users = $this->User->find()->all();
      var_dump($users);
    }
}
