<?php
class model
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
}
