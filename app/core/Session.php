<?php
defined('BASE_PATH') OR exit('Sai pra lá jacaré!');

class Session
{
  protected $db;
  protected $tools;

  public function __construct()
  {
    if(session_status() === PHP_SESSION_NONE)
    {
      session_start();
    }

    global $config;

    $this->tools = new Tools();
    $this->db = $this->tools->pdoConnection();

    $this->setValue(array(
      'name' => 'MySystemSession',
      'value' => md5(uniqid())
    ));
  }// __construct()

  public function checkStatus($name)
  {
    if(isset($_SESSION[$name]))
    {
      return true;
    }
    else
    {
      return false;
    }
  }// checkStatus()

  public function getValue($name)
  {
    if($this->checkStatus($name) === true)
    {
      return $_SESSION[$name];
    }
    else
    {
      return false;
    }
  }// getValue()

  public function setValue($params)
  {
    if(is_array($params))
    {
      if($this->checkStatus($params['name']) === false)
      {
        $_SESSION[$params['name']] = $params['value'];

        return $_SESSION[$params['name']];
      }
      else
      {
        return false;
      }
    }// setValue()
  }

  public function unsetValue($name)
  {
    if($this->checkStatus($name) === true)
    {
      session_unset($name);

      return true;
    }
    else
    {
      return false;
    }
  }// unsetValue()

  /*
  // Set/store value in session
  $sess->SetValue([
  'name' => $name,
  'value' => $value,
]);

//deleting/unset the session
$sess->UnsetValue($name);
*/

}
