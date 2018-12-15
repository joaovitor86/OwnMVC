<?php
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
