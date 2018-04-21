<?php
  namespace App\Lib\Exceptions;

  use Exception;
  
  class BaseException extends Exception
  {
    public abstract function message();

  }
