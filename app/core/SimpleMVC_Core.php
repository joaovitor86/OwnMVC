<?php
include 'Controller.php';

class SimpleMVC_Core extends Controller
{
	public function execute_and_run()
	{
		$url = explode("index.php", $_SERVER["PHP_SELF"]);
		$url = end($url);
		$params = array();

		if(!empty($url))
		{
			$url = explode('/', $url);
			array_shift($url);
			$currentController = $url[0].'Controller';
			array_shift($url);

			if(isset($url[0]))
			{
				$currentAction = $url[0];
				array_shift($url);
			}
			else
			{
				$currentAction = 'index';
			}

			if(count($url) > 0)
			{
				$params = $url;
			}
		}
		else
		{
			$currentController = 'homeController';
			$currentAction = 'index';
		}

		if(class_exists($currentController))
		{
			$c = new $currentController();
			call_user_func_array(array($c, $currentAction), $params);
		}
		else
		{
			include_once '404.phtml';
		}
	}
}
