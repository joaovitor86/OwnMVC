<?php
defined('BASE_PATH') OR exit('Sai pra lá jacaré!');

class Funcionarios extends model
{

  private $table = "funcionarios_tb";

  public function getFuncionarios()
  {
    $retorno  = array();
    $consulta = "SELECT * FROM funcionarios_tb";
    $stmt = $this->db->query("SELECT * FROM funcionarios_tb");

    $retorno = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $retorno;
  } // getFuncionarios()
}
