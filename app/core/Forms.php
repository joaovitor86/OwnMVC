<?php
defined('BASE_PATH') OR exit('Sai pra lá jacaré!');

class Forms
{
  /**
   * [form_init description]
   * @param  string $name     [description]
   * @param  string $id       [description]
   * @param  string $action   [description]
   * @param  string $method   [description]
   * @param  string $cssClass [description]
   * @return [type]           [description]
   */
  public function form_init($name = '', $id = '', $action = '', $method = 'post', $cssClass = '')
  {
    return "<form name=\"{$name}\" id=\"{$id}\" action=\"{$action}\" method=\"{$method}\" class=\"{$cssClass}\">";
  }

  /**
   * [form_close description]
   * @return [type] [description]
   */
  public function form_close()
  {
    return "</form>";
  }

  /**
   * [input description]
   * @param  array  $params [description]
   * @return [type]         [description]
   */
  public function input($params = array())
  {
    $add = '';
    foreach($params as $key => $val)
    {

      $add .= ''.$key.'="'.$val.'" ';
    }
    return "<input " . trim($add) . ">";
  }

  /**
   * [textarea description]
   * @param  array  $params [description]
   * @return [type]         [description]
   */
  public function textarea($params = array())
  {
    $add = '';
    foreach($params as $key => $val)
    {
      $add .= ''.$key.'="'.$val.'" ';
    }
    return "<textarea " . trim($add) . "></textarea>";
  }

  public function combobox($params = array(), $selects = array())
  {
    $add = '';
    foreach($params as $key => $val)
    {
      $add .= ''.$key.'="'.$val.'" ';
    }
    return "<textarea " . trim($add) . "></textarea>";
  }

}
