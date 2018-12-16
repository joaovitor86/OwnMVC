<?php
defined('BASE_PATH') OR exit('Sai pra lá jacaré!' . __FILE__);

class model
{
  protected $db;
  protected $tools;
  protected $session;
  protected $forms;

  /**
   * [__construct description]
   */
  public function __construct()
  {
    global $config;

    $this->tools = new Tools();
    $this->db = $this->tools->pdoConnection();

    $this->session = new Session();

    $this->forms = new Forms();
  }
}
