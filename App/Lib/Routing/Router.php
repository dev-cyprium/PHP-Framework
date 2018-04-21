<?php
  namespace App\Lib\Routing;

  class Router
  {
    const ROUTER_BASE_PATH = ABSPATH . "/App/Routes";

    protected $routes;

    public function __construct()
    {
      $this->routes = [];
      $this->parseRoutes();
    }

    protected function parseRoutes()
    {
      $vars = ["route" => new Route($this)];
      extract($vars);
      require_once self::ROUTER_BASE_PATH . "/web.php";
    }

    public function addRoute(Route $route)
    {
      array_push($this->routes, $route);
    }
  }
