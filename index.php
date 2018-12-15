<?php
ob_start();
session_start();

include 'config.php';

spl_autoload_register(function ($className) {
  // Verifica se é um controller
  if(strpos($className, 'Controller') > -1)
  {
    // Verifica se existe o arquivo do controller
    if(file_exists(APP_PATH .'controllers/'.$className.'.php'))
    {
      require_once APP_PATH . 'controllers/'.$className.'.php';
    }
    else
    {
      // Caso não exista o arquivo, retorna error 404
      $tools = new Tools();
      $tools->error404();
    }
  }
  // Verifica se é um model e se o arquivo existe
  elseif(file_exists(APP_PATH . 'models/'.$className.'.php'))
  {
    require_once APP_PATH . 'models/'.$className.'.php';
  }
  // Verifica se é um core e se o arquivo existe
  elseif(file_exists(APP_PATH . 'core/'.$className.'.php'))
  {
    require_once APP_PATH . 'core/'.$className.'.php';
  }
});

date_default_timezone_set(TIMEZONE);

// Core
$OwnMVC = new OwnMVC();
$OwnMVC->execute_and_run();
