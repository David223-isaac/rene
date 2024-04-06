<?php 
class conexion {
	public $url="localhost";
	public $usuario = "root";
	public $password= "";
	public $base="seguridad"; 
	public $conexion="";
	public $sentencia=""; 


	private function abrirConexion(){
		$this->conexion=new mysqli($this->url,$this->usuario,$this->password,$this->base); 

	}
	private function cerrarConexion(){
		$this->conexion->close(); 
	}

	public function ejecutarSentencia(){
		$this->abrirConexion();
		$this->conexion->query($this->sentencia);
		$this->cerrarConexion();
		

	}

	public function obtenerSentencia(){
		$this->abrirConexion(); 
		return $this->conexion->query($this->sentencia); 
	}




}


?>