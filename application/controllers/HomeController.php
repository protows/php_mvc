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
    $this->data('ttt', 'dfgh');
    $this->display('about');
  }

  public function f($a, $b){
    $this->data('a', $a);
    $this->data('b', $b);
    $this->display('f');
  }

}
