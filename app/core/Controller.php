<?php
defined('BASE_PATH') OR exit('Sai pra lá jacaré!');

class controller
{
	// Métodos protegidos
	protected $db; 			# instância do databse
	protected $tools;		# instância do tools
	protected $session; # instância do session
	protected $forms;		# instância do forms

	/**
	 * [__construct description]
	 */
	public function __construct()
	{
		global $config;

		// Instância do tools
		$this->tools = new Tools();
		$this->db = $this->tools->pdoConnection(); # realiza a conexão caso a mesma não esteja ativa

		// Instância do Session
		$this->session = new Session();

		// Instância do forms
		$this->forms = new Forms();
	}

	/**
	 * [loadView description]
	 * @param  [type] $viewName [description]
	 * @param  array  $viewData [description]
	 * @return [type]           [description]
	 */
	public function loadView($viewName, $viewData = array())
	{
		extract($viewData);
		include APP_PATH . 'views/'.$viewName.'.phtml';
	}

	/**
	 * [loadTemplate description]
	 * @param  [type] $viewName [description]
	 * @param  array  $viewData [description]
	 * @return [type]           [description]
	 */
	public function loadTemplate($viewName, $viewData = array())
	{
		extract($viewData);
		include APP_PATH . TEMPLATEBASE;
	}

	/**
	 * [loadViewInTemplate description]
	 * @param  [type] $viewName [description]
	 * @param  array  $viewData [description]
	 * @return [type]           [description]
	 */
	public function loadViewInTemplate($viewName, $viewData = array())
	{
		extract($viewData);
		include APP_PATH . 'views/'.$viewName.'.phtml';
	}
}
