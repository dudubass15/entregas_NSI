<?php
class cadastroController extends controller {

	public function index() {
		$dados = array();

		$cadastro = new cadastros();

		$this->loadTemplate('home', $dados);
	}

	

}

?>