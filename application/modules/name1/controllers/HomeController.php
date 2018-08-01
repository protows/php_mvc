<?php
namespace project\name1\controllers;
use project\controllers\MainController;

if(!defined('PROJECT_ACCESS'))exit('Access Denied!');

class HomeController extends MainController{
  public function __construct(){
    parent::__construct();
  }

  public function f($a, $b){
    echo 'It\'s Module';
    echo 'a: '. $a. '<br />';
    echo $b. '<br />';
  }

}
