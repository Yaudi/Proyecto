<?php
class Miembro{
	private	$cedulaMiembro;
	private	$nombreMiembro;
	private $apellidosMiembro;
	private $anioNacimientoMiembro;
	private $procedenciaMiembro;
	private $telefonoMiembro;
	private $estadoCivilMiembro;
	private $nivelTeologicoMiembro;
	private $clasificacionMiembro;
	private $tipoMiembro;
	private $idCelula;
	
	function Miembro($cedulaMiembro, $nombreMiembro, $apellidosMiembro, $anioNacimientoMiembro, $procedenciaMiembro, $telefonoMiembro, $estadoCivilMiembro, $nivelTeologicoMiembro, $clasificacionMiembro, $tipoMiembro, $idCelula){
		$this->setCedulaMiembro($cedulaMiembro);
		$this->setNombreMiembro($nombreMiembro);
		$this->setApellidosMiembro($apellidosMiembro);
		$this->setAnioNacimientoMiembro($anioNacimientoMiembro);
		$this->setProcedenciaMiembro($procedenciaMiembro);
		$this->setTelefonoMiembro($telefonoMiembro);
		$this->setEstadoCivilMiembro($estadoCivilMiembro);
		$this->setNivelTeologicoMiembro($nivelTeologicoMiembro);
		$this->setClasificacionMiembro($clasificacionMiembro);
		$this->setTipoMiembro($tipoMiembro);
		$this->setIdCelula($idCelula);
	}


	public function setCedulaMiembro($cedula) {
		$this->cedulaMiembro = $cedula;
	}
	public function getCedulaMiembro() {
		return $this->cedulaMiembro;
	}

	public function setNombreMiembro($nombreMiembro) {
		$this->nombreMiembro = $nombreMiembro;
	}
	public function getNombreMiembro() {
		return $this->nombreMiembro;
	}
	
	public function setApellidosMiembro($apellidosMiembro) {
		$this->apellidosMiembro = $apellidosMiembro;
	}
	public function getApellidosMiembro() {
		return $this->apellidosMiembro;
	}
	
	public function setAnioNacimientoMiembro($anioNacimientoMiembro) {
		$this->anioNacimientoMiembro = $anioNacimientoMiembro;
	}
	public function getAnioNacimientoMiembro() {
		return $this->anioNacimientoMiembro;
	}

	public function setProcedenciaMiembro($procedenciaMiembro) {
		$this->procedenciaMiembro = $procedenciaMiembro;
	}
	public function getProcedenciaMiembro() {
		return $this->procedenciaMiembro;
	}
	
	public function setTelefonoMiembro($telefonoMiembro) {
		$this->telefonoMiembro = $telefonoMiembro;
	}
	public function getTelefonoMiembro() {
		return $this->telefonoMiembro;
	}
	
	public function setEstadoCivilMiembro($estadoCivilMiembro) {
		$this->estadoCivilMiembro = $estadoCivilMiembro;
	}
	public function getEstadoCivilMiembro() {
		return $this->estadoCivilMiembro;
	}
	
	public function setNivelTeologicoMiembro($nivelTeologicoMiembro) {
		$this->nivelTeologicoMiembro = $nivelTeologicoMiembro;
	}
	public function getNivelTeologicoMiembro() {
		return $this->nivelTeologicoMiembro;
	}
	
	public function setClasificacionMiembro($clasificacionMiembro) {
		$this->clasificacionMiembro = $clasificacionMiembro;
	}
	public function getClasificacionMiembro() {
		return $this->clasificacionMiembro;
	}
	
	public function setTipoMiembro($tipoMiembro) {
		$this->tipoMiembro = $tipoMiembro;
	}
	public function getTipoMiembro() {
		return $this->tipoMiembro;
	}
	public function setIdCelula($idCelula) {
		$this->idCelula = $idCelula;
	}
	public function getIdCelula() {
		return $this->idCelula;
	}
}
?>