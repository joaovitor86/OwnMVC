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
  public function textbox($params = array())
  {
    $add = '';
    foreach($params as $key => $val)
    {
      if($val === 'required')
      {
        $add .= 'required ';
      }
      else
      {
        $add .= ''.$key.'="'.$val.'" ';
      }
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

  /**
   * [combobox description]
   * @param  array  $params [description]
   * @return [type]         [description]
   */
  public function combobox($params = array(), $options = array())
  {
    $adicionais = '';
    foreach($params as $key => $val)
    {
      $adicionais .= ''.$key.'="'.$val.'" ';
    }

    $select_options = '';
    foreach ($options as $key => $val)
    {
      $select_options .= '<option value="'.$key.'">'.$val.'</option>';
    }

    return "<select " . trim($adicionais) . ">".trim($select_options)."</select>";
  }

  /**
   * [button description]
   * @param  array  $params [description]
   * @return [type]         [description]
   */
  public function button($params = array())
  {
    $add = '';
    foreach ($add as $key => $value)
    {
      $add .= ''.$key.'="'.$value.'" ';
    }

    return "<button " . trim($add). "></button>";
  }

  /**
   * [input_hidden description]
   * @param  string $name  [description]
   * @param  string $value [description]
   * @return [type]        [description]
   */
  public function input_hidden($name = '', $value = '')
  {
    return $this->textbox(array(
      'type' => 'hidden',
      'name' => $name,
      'id' => $name,
      'value' => $value
    ));
  }

  /**
   * [checkbox description]
   * @param  array  $params [description]
   * @param boolean $brAtEnd [description]
   * @return [type]         [description]
   */
  public function checkbox($params = array(), $brAtEnd = false)
  {
    $add = '';
    $label = '';
    foreach ($params as $key => $value)
    {
      if($key === 'label')
      {
        $label .= $value;
      }
      elseif($value === 'checked')
      {
        $add .= 'checked ';
      }
      else
      {
        $add .= ''.$key.'="'.$value.'" ';
      }
    }
    return "<label><input type=\"checkbox\" " . trim($add). "> ".$label."</label>" . ($brAtEnd==true ? "<br>" : "");
  }

  /**
   * [radiobox description]
   * @param  array  $params [description]
   * @param boolean $brAtEnd [description]
   * @return [type]         [description]
   */
  public function radiobox($params = array(), $brAtEnd = false)
  {
    $add = '';
    $label = '';
    foreach ($params as $key => $value)
    {
      if($key === 'label')
      {
        $label .= $value;
      }
      elseif($value === 'checked')
      {
        $add .= 'checked ';
      }
      else
      {
        $add .= ''.$key.'="'.$value.'" ';
      }
    }
    return "<label><input type=\"radio\" " . trim($add). "> ".$label."</label>" . ($brAtEnd==true ? "<br>" : "");
  }

}
