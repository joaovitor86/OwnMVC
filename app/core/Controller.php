<?php
class controller
{
	protected $db;
	protected $tools;
	protected $session;

	public function __construct()
	{
		global $config;

		$this->tools = new Tools();
		$this->db = $this->tools->pdoConnection();

		$this->session = new Session();
	}

	public function loadView($viewName, $viewData = array())
	{
		extract($viewData);
		include APP_PATH . 'views/'.$viewName.'.phtml';
	}

	public function loadTemplate($viewName, $viewData = array())
	{
		extract($viewData);
		include APP_PATH . TEMPLATEBASE;
	}

	public function loadViewInTemplate($viewName, $viewData = array())
	{
		extract($viewData);
		include APP_PATH . 'views/'.$viewName.'.phtml';
	}
}
