<?php
defined('BASE_PATH') OR exit('Sai pra lá jacaré!');

class adminController extends controller
{
  protected $controleLogin;

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->controleLogin = new ControleLoginModel();

    if(!$this->controleLogin->checkIsLoggedIn())
    {
      $this->tools->navigate('/admin/login/');
    }

    $this->loadView('admin/admin');
  }

  public function login()
  {
    $this->loadView('admin/login');
  }
}
