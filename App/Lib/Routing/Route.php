<?php
  namespace App\Lib\Routing;

  class Route
  {
    private $router;

    private $method;
    private $path;
    private $controller;
    private $action;

    public function __construct(Router $router)
    {
      $this->router = $router;
    }


    // TODO: check for sequance chain [get -> to -> act]
    public function get($path)
    {
      $this->method = 'get';
      $this->path = $path;
      return $this;
    }

    public function to($controller)
    {
      $this->controller = $controller;
      return $this;
    }

    public function act($action)
    {
      $this->action = $action;
      $this->router->addRoute($this);
    }

    public function getMethod() { return $this->method; }
    public function getController() { return $this->controller; }
    public function getAction() { return $this->action; }
  }
