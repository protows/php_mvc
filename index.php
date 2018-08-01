<?php
namespace project\index;
use \project\core\Project;
use \project\routes\Route;
use \project\helpers\HttpHelper;
define('PROJECT_ACCESS', true);

require_once('application/configs/configs.php');
require_once('core/Project.php');
require_once('core/routes/Route.php');
// print_r( $_SERVER['REQUEST_URI']); echo '</br>';
//   print_r(explode('?', $_SERVER['REQUEST_URI'])); exit();

$project = new Project();
$project->setConfig($config);
$project->loadHelpers();
$project->loadLibreries();
$project->loadControllers();


$route = new Route();
$route->setConfig($config['route']);
if(!$route->load()){
  echo 'error 404';
  exit();
}
