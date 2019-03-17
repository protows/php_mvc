<?php
if(!defined('PROJECT_ACCESS'))exit('Access Denied!');
$config = array();

$config['db']['host'] = 'localhost';
$config['db']['port'] = '3306';
$config['db']['username'] = 'root';
$config['db']['password'] = '';
$config['db']['database'] = 'test';
$config['db']['charset'] = 'utf8';

$config['load']['controllers'] = array('MainController');
$config['load']['helpers'] = array('HttpHelper');

$config['route'][] = array(
  'uri' => '',
  'method' => 'GET',
  'run' => 'HomeController/about2',
  'module' => false,
  'regex' => array(),
);

$config['route'][] = array(
  'uri' => 'about',
  'run' => 'HomeController/about',
  'method' => 'GET',
  'module' => false,
  'regex' => array(),
);

$config['route'][] = array(
  'uri' => 'aaa/#/bbb/#/dfghj',
  'run' => 'name1/HomeController/f/$1/$2',
  'method' => 'GET',
  'module' => true,
  'regex' => array(
    array(
      'segment' => 1,
      'rule' => '/^[0-9]{1,2}$/',
    ),
    array(
      'segment' => 3,
      'rule' => '/^[a-z]{3}$/',
    ),

  ),
);
