<?php
defined('BASE_PATH') OR exit('Sai pra lá jacaré!');

class Forms
{

  public function form_init($name = '', $id = '', $action = '', $method = 'post', $cssClass = '')
  {
    return "<form name=\"{$name}\" id=\"{$id}\" action=\"{$action}\" method=\"{$method}\" class=\"{$cssClass}\">";
  }

  public function form_close()
  {
    return "</form>";
  }

  public function input($params = array())
  {
    $add = '';
    foreach($params as $key => $val)
    {
      
      $add .= ''.$key.'="'.$val.'" ';
    }
    return "<input " . trim($add) . ">";
  }

  public function textarea($params = array())
  {
    $add = '';
    foreach($params as $key => $val)
    {
      $add .= ''.$key.'="'.$val.'" ';
    }
    return "<textarea " . trim($add) . "></textarea>";
  }

}
