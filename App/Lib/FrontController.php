<?php
  namespace App\Lib;

  use App\Lib\Routing\Router;
  use App\Lib\Exceptions\BaseException;

  class FrontController implements FrontControllerInterface
  {
    protected $controller;
    protected $router;

    public function __construct()
    {
      $this->router = new Router;
      $this->parseUri();
    }

    protected function parseUri()
    {
      $path = trim(parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH), '/');
      try {
        $this->router->matchRoute($path);
      } catch (BaseException $e) {
        echo "Route not found";
      }

    }

    public function setController($controller)
    {

    }

    public function setAction($action)
    {

    }

    public function setParams(array $params)
    {

    }

    public function run()
    {

    }
  }
