<?php
namespace project\name1\controllers;
use project\controllers\MainController;

if(!defined('PROJECT_ACCESS'))exit('Access Denied!');

class HomeController extends MainController{
  public function __construct(){
    parent::__construct();
  }

  public function titleModule(){
    return 'name1';
  }

  public function f($a, $b){
    // echo 'It\'s Module';
    // echo 'a: '. $a. '<br />';
    // echo $b. '<br />';
    $this->data('a', $a);
    $this->data('b', $b);
    $this->display('f');
  }

}
