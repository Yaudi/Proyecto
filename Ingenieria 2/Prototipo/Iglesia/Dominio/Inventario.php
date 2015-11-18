<?php
class Inventario{
	private $nombreInventario;
	private	$modeloInventario;
	private	$marcaInventario;
	private $estadoInventario;
	private $cantidadInventario;
	private $descripcionInventario;
	private $serieInventario;

	function Inventario($nombreInventario, $modeloInventario, $marcaInventario, $estadoInventario, $cantidadInventario, $descripcionInventario, $serieInventario){
		$this->setNombreInventario($nombreInventario);
		$this->setModeloInventario($modeloInventario);
		$this->setMarcaInventario($marcaInventario);
		$this->setEstadoInventario($estadoInventario);
		$this->setCantidadInventario($cantidadInventario);
		$this->setDescripcionInventario($descripcionInventario);
		$this->setSerieInventario($serieInventario);
	}


	public function setNombreInventario($nombreInventario) {
		$this->nombreInventario = $nombreInventario;
	}
	public function getNombreInventario() {
		return $this->nombreInventario;
	}

	public function setModeloInventario($modeloInventario) {
		$this->modeloInventario = $modeloInventario;
	}
	public function getModeloInventario() {
		return $this->modeloInventario;
	}
	public function setMarcaInventario($marcaInventario) {
		$this->marcaInventario = $marcaInventario;
	}
	public function getMarcaInventario() {
		return $this->marcaInventario;
	}
	public function setEstadoInventario($estadoInventario) {
		$this->estadoInventario = $estadoInventario;
	}
	public function getEstadoInventario() {
		return $this->estadoInventario;
	}
	public function setCantidadInventario($cantidadInventario) {
		$this->cantidadInventario = $cantidadInventario;
	}
	public function getCantidadInventario() {
		return $this->cantidadInventario;
	}
	public function setDescripcionInventario($descripcionInventario) {
		$this->descripcionInventario = $descripcionInventario;
	}
	public function getDescripcionInventario() {
		return $this->descripcionInventario;
	}
	public function setSerieInventario($serieInventario) {
		$this->serieInventario = $serieInventario;
	}
	public function getSerieInventario() {
		return $this->serieInventario;
	}
}
?>