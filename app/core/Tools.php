<?php
class Tools
{
  protected $db;

  public function navigate(string $url = "")
  {
    return header("Location: " . $url);
  }

  public function error404()
  {
    return "<p><small>404</small>Que coisa mais estranha!</p>";
  }

  public function noinject($sql)
  {
    $sql = preg_replace(sql_regcase("/(from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/"), "" ,$sql); // remove palavras que contenham sintaxe sql
    $sql = trim($sql); // limpa espaços vazios
    $sql = strip_tags($sql); // tira tags html e php
    $sql = addslashes($sql); //  adiciona barras invertidas a um string
    return $sql;
  }

  public function pdoConnection()
  {
    global $config;
    
    try
    {
      $this->db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
      $this->db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
      $this->db->exec("set names utf8");
    }
    catch (Exception $e)
    {
      $htmlTemplate = '<!DOCTYPE html><html lang="en" dir="ltr"><head><meta charset="utf-8"><title></title></head><body><table><tr><td width="100px">Código</td><td>!codigo!</td></tr><tr><td>Classe</td><td>!classe!</td></tr><tr><td>Descrição</td><td>!descricao!</td></tr></table></body></html>';
      if($e->getCode() !== null || $e->getCode() !== 0)
      {
        die(str_replace("!codigo!", $e->getCode(), str_replace("!classe!", get_class($this), str_replace("!descricao!", $e->getMessage(), $htmlTemplate))));
      }
    }
    finally
    {
      return $this->db;
    }
  }

}
