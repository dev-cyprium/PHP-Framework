<?php

$uri = urldecode(
  parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);
/*
  If we have a public PHP file available,
  we need to stop the bootstrap process.
  TODO: test this!
*/
if($uri !== '/' && file_exists(__DIR__.'/public'.$uri)) {
  return false;
}

require_once __DIR__.'/Public/index.php';
