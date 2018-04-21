<?php
spl_autoload_register(function ($class) {
  $transformed = str_replace('\\', '/', $class);
  $path = ABSPATH . "/" . $transformed . ".php";
  require $path;
});
