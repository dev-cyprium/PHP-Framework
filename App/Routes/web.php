<?php
  /*
    All application routes are defined in this file.
    $route object is a router object which can be used to
    define application routes.
  */

  $route->get('/')->to('IndexController')->act('index');
  $route->get('/foo')->to('IndexController')->act('foo');
