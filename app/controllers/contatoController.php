<?php
defined('BASE_PATH') OR exit('Sai pra lá jacaré!');

class contatoController extends controller
{

  public function __construct()
  {
    parent::__construct();
  }// __construct

  public function index()
  {
    $dados = array(
      'isSlider' => false,
      'success' => false
    );

    $this->loadTemplate('contato', $dados);
  }// index

  public function enviar()
  {
    extract($_POST);

    if(count($_POST) === 4)
    {
      $dados = array(
        'isSlider' => false,
        'success' => true,
        'dadosContato' => array(
          'nome' => $nome,
          'telefone' => $telefone,
          'email' => $email,
          'mensagem' => $mensagem,
        ),
      );
      $this->loadTemplate('contato', $dados);
    }
    else
    {
      $this->tools->navigate("/contato/");
    }

  }// enviar

}
