<?php
defined('BASE_PATH') OR exit('Sai pra lá jacaré!');

class controller
{
	// Métodos protegidos
	protected $db; 			# instância do databse
	protected $tools;		# instância do tools
	protected $session; # instância do session
	protected $forms;		# instância do forms

	// Método construtor da classe
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

	// Método de carregamento simples de uma view + dados
	public function loadView($viewName, $viewData = array())
	{
		extract($viewData);
		include APP_PATH . 'views/'.$viewName.'.phtml';
	}

	// Método de carregamento de template + dados
	// template esse que foi configurado lá no config.php
	public function loadTemplate($viewName, $viewData = array())
	{
		extract($viewData);
		include APP_PATH . TEMPLATEBASE;
	}

	// Método de carregamento de uma view dentro de um template, similar ao método
	// loadView
	public function loadViewInTemplate($viewName, $viewData = array())
	{
		extract($viewData);
		include APP_PATH . 'views/'.$viewName.'.phtml';
	}
}
