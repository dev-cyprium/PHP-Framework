<?php
spl_autoload_register(function ($namespace) {
  $t = explode('\\', $namespace);
  $class_name = end($t);
  if(!class_exists($class_name, false)) {
    $transformed = str_replace('\\', '/', $namespace);
    $path = ABSPATH . "/" . $transformed . ".php";
    var_dump($path);
    require $path;
  }
});
