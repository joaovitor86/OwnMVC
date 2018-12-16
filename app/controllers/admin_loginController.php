<?php
defined('BASE_PATH') OR exit('Sai pra lá jacaré!');

class admin_loginController extends controller
{
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $dados = array();
    $this->loadView('admin/login', $dados);
  }
}
