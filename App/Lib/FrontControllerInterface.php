<?php
  namespace App\Lib;

  /**
   * Used for representing a front controller
   * which is a controller responsible for
   * the entry point of a web application.
   */
  interface FrontControllerInterface
  {
    public function setController($controller);
    public function setAction($action);
    public function setParams(array $params);
    public function run();
  }
