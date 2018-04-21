<?php
  namespace App\Lib\Routing;

  use App\Lib\Exceptions\BaseException;

  class Router
  {
    const ROUTER_BASE_PATH = ABSPATH . "/App/Routes";

    protected $routes;

    public function __construct()
    {
      $this->routes = [];
      $this->parseRoutes();
    }

    public function matchRoute($path)
    {
      throw new BaseException("Error Processing Request", 1);
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
