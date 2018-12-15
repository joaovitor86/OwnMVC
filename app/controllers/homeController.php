<?php
defined('BASE_PATH') OR exit('Sai pra lá jacaré!');

class homeController extends controller
{

  public function __construct()
  {
    parent::__construct();
    $this->home = new Home();
  }// __construct

  public function index()
  {
    $dados = array(
      'isSlider' => true
    );

    $this->loadTemplate('home', $dados);
  }// index

}
