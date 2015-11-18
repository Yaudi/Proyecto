<?php
class Celula{
	private $idCelula;
	private	$nombreCelula;
	private	$ubicacionCelula;
	

	function Celula($idCelula, $nombreCelula, $ubicacionCelula){
		$this->setIdCelula($idCelula);
		$this->setNombreCelula($nombreCelula);
		$this->setUbicacionCelula($ubicacionCelula);
	}


	public function setIdCelula($idCelula) {
		$this->idCelula = $idCelula;
	}
	public function getIdCelula() {
		return $this->idCelula;
	}

	public function setNombreCelula($nombreCelula) {
		$this->nombreCelula = $nombreCelula;
	}
	public function getNombreCelula() {
		return $this->nombreCelula;
	}
	public function setUbicacionCelula($ubicacionCelula) {
		$this->ubicacionCelula = $ubicacionCelula;
	}
	public function getUbicacionCelula() {
		return $this->ubicacionCelula;
	}

}



?>