<?php
/*| Defining base path
  | -----
  | We use the constant ABSPATH in the project to be able to get to
  | every route in the perspective from the project root.
  |*/
  define('ABSPATH', dirname(dirname(__FILE__)));

/*|
  | Including autoloader
  | -----
  | The autoloader script is responsible for loading all
  | classes in the project.
  |*/
  include_once __DIR__ . "/../bootstrap/autoload.php";


  use App\Lib\FrontController;
  $instance = new FrontController();
  var_dump($instance);
