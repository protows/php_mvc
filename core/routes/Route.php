<?php
namespace project\routes;

use \project\helpers\HttpHelper;

if(!defined('PROJECT_ACCESS'))exit('Access Denied!');
class Route{
  private $_config;

  public function __construct(){
      $this->_config = array();
  }

  public function setConfig($config){
    $this->_config = $config;
  }

  public function load(){
    $segments = HttpHelper::getSegments();
    $segmentStr =  implode('/', $segments);

    for($i = 0; $i < count($this->_config); $i++){
      if($_SERVER['REQUEST_METHOD'] == $this->_config[$i]['method']){
        $uri = trim($this->_config[$i]['uri'], '/');
        if(count($segments) !== substr_count($uri,'/')+1){
          continue;
        }

        $uri = str_replace('#','(.+)', $uri);

        if(preg_match('#^'.$uri.'$#', $segmentStr)){

          for($j = 0; $j < count($this->_config[$i]['regex']); $j++){
            $segment = $segments[$this->_config[$i]['regex'][$j]['segment']];
            
            $rule = $this->_config[$i]['regex'][$j]['rule'];
            if(preg_match($rule, $segment) == 0){
              continue 2;
            }
          }
            $run = trim($this->_config[$i]['run'], '/');

            if(strpos($run, '$') !== false){
              $run = preg_replace('#^'.$uri.'$#', $run, $segmentStr);
            }
            //echo $run; exit();
            $this->loadController();
        }
      }
    }
  }

  public function loadController(){

  }



}
