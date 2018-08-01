<?php
namespace project\controllers;

if(!defined('PROJECT_ACCESS'))exit('Access Denied!');

class Controller {
  private $_variables;
  public function __construct(){
    $this->_variables = array();
  }

  public function data($titleVariable, $valueVariable){
      $this->_variables[] = array(
        'title' => $titleVariable,
        'value' => $valueVariable,
      );
  }
    public function display($titleView){
      $titleModule = $this->titleModule();
      for($i=0; $i < count($this->_variables); $i++){
        ${$this->_variables[$i]['title']} = $this->_variables[$i]['value'];
      }

      if($titleModule !== false){
        $pathView ='application/modules/' .$titleModule. '/views/' .$titleView. '.php';
        if(file_exists($pathView)){
          require_once($pathView);
          return true;
        }
      }
      $pathView ='application/views/' . $titleView . '.php';
      if(file_exists($pathView)){
        require_once($pathView);
        return true;
      }
      return false;
    }

    public function titleModule(){
      return false;
    }
}
