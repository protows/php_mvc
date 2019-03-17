<?php
namespace project\name1\models;
use project\models\Model;

if(!defined('PROJECT_ACCESS'))exit('Access Denied!');

class User extends Model{
  public function __construct(){
    parent::__construct();
  }

  public function get(){
    return 'test2 from get()';
  }

}
