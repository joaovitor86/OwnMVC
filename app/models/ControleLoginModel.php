<?php
defined('BASE_PATH') OR exit('Sai pra lá jacaré!');

class ControleLoginModel extends model
{
  /**
   * [checkIsLoggedIn description]
   * @return [type] [description]
   */
  public function checkIsLoggedIn()
  {
    if($this->session->checkStatus('lgadmin'))
    {
      return true;
    }
    else
    {
      return false;
    }
  }
}
