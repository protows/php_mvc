<?php
namespace project\controllers;
use project\controllers\MainController;

if(!defined('PROJECT_ACCESS'))exit('Access Denied!');

class HomeController extends MainController{
  public function __construct(){
    parent::__construct();
  }

  public function index(){
    echo 'Hello world!';
  }

  public function about(){
    echo 'this is about page!';
  }

  public function f($a, $b){
    echo $a. '<br />';
    echo $b. '<br />';
  }

}
