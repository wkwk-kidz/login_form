<?php

namespace MyApp\Controller;

class Index extends \MyApp\Controller{

  public function run(){
    if(!$this->isLoggedIn()){
      //login
      header('Location: ' . SITE_URL . '/login.php');
      exit;
    }

    //getusersInfo
    $userModel = new \MyApp\Model\User();
    $this->setValues('users', $userModel->findAll());
  }
}
