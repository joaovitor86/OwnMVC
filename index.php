<?php
ob_start();
session_start();

require 'config.php';

spl_autoload_register(function ($class) {
  if(strpos($class, 'Controller') > -1)
  {
    if(file_exists(APP_PATH . 'controllers/'.$class.'.php'))
    {
      require_once APP_PATH . 'controllers/'.$class.'.php';
    }
    else
    {
      //die("<p><small>404</small>Que coisa mais estranha!</p>");
      $tools = new Tools();
      $tools->error404();
    }
  }
  elseif(file_exists(APP_PATH . 'models/'.$class.'.php'))
  {
    require_once APP_PATH . 'models/'.$class.'.php';
  }
  elseif(file_exists(APP_PATH . 'core/'.$class.'.php'))
  {
    require_once APP_PATH . 'core/'.$class.'.php';
  }
});

date_default_timezone_set(TIMEZONE);

// Core
$core = new Core();
$core->run();
