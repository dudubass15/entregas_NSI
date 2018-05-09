<?php
class homeController extends controller {

	public function index() {
		$dados = array();

		$home = new homes();

		// if (isset($_POST['pesquisar']) && !empty($_POST['pesquisar'])) {
		// 	$ronda = addslashes($_POST['pesquisar']);
		// } else {
		// 	$ronda ='';
		// }

		$dados['lista_view'] = $home->getLista();

		$this->loadTemplate('home', $dados);
	}

	public function geral(){
		$dados = array();

		$home = new homes();

		$dados['geral_lista'] = $home->getListaGeral();

		$this->loadTemplate('home_geral', $dados);
	}

	public function add() {
		$dados = array();

		$home = new homes();

		if (isset($_POST['tipoentrega']) && !empty($_POST['tipoentrega'])) {
			$tipoentrega = addslashes($_POST['tipoentrega']);
			$ronda = addslashes($_POST['ronda']);
			$condominio = addslashes($_POST['condominio']);
			$status = addslashes($_POST['status']);

			$home = new homes();
			$home->add($tipoentrega, $ronda, $condominio, $status);

			header('Location: '.URL.'/home');
		}

		$this->loadTemplate('home_add', $dados);
	}

	public function del($id) {
		$home = new homes();

		$home->del($id);

		header('Location: '.URL.'/home');
	}

	public function deletar($id) {
		$home = new homes();

		$home->deletar($id);

		header('Location: '.URL.'/home/geral');
	}

}

?>