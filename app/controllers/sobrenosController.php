<?php
defined('BASE_PATH') OR exit('Sai pra lá jacaré!');

class sobrenosController extends controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
		$dados = array(
			'isSlider' => false,
			'success' => false
		);

		$this->loadTemplate('sobre-nos', $dados);
    }
}
