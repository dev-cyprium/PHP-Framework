<?php
  /*
    All application routes are defined in this file.
  */

  $route->get('/')->to('IndexController')->act('index');
  $route->get('/foo')->to('IndexController')->act('foo');
