<?php
class homes extends model {

	public function getLista() {
		$array = array();

		$sql = "SELECT * FROM controle_entrega";

		$qry = $this->db->query($sql);

		if ($qry->rowCount() > 0) {
			$array = $qry->fetchAll();
		}

		return $array;
	}

	public function add($tipoentrega, $ronda, $condominio, $status) {
		
		$sql = "INSERT INTO controle_entrega (data, tipoentrega, ronda, condominio, status)";
		$sql.= "VALUE (NOW(), '$tipoentrega', '$ronda', '$condominio', '$status')";
		$this->db->query($sql);
	}

	public function del($id) {

		$sql = "INSERT INTO tabela_geral (data, tipoentrega, ronda, condominio, colaborador, status) 
				SELECT data, tipoentrega, ronda, condominio, colaborador, status FROM controle_entrega";
		$this->db->query($sql);

		$sql = "DELETE FROM controle_entrega WHERE id = $id";
		$this->db->query($sql);
	}

}

?>