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

	// public function getChaveirosInfo($id) {
	// 	$array = array();

	// 	$sql = "SELECT * FROM chaveiro WHERE id = $id";
	// 	$qry = $this->db->query($sql);

	// 	if ($qry->rowCount() > 0) {
	// 		$array = $qry->fetch();
	// 	}

	// 	return $array;
	// }

	public function add($tipoentrega, $ronda, $condominio, $status) {
		
		$sql = "INSERT INTO controle_entrega (data, tipoentrega, ronda, condominio, status)";
		$sql.= "VALUE (NOW(), '$tipoentrega', '$ronda', '$condominio', '$status')";
		$this->db->query($sql);
	}

	public function del($id) {
		$sql = "DELETE FROM controle_entrega WHERE id = $id";
		$this->db->query($sql);
	}

}

?>