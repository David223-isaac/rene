<?php

require_once("connection.php");

class pelicula extends conexion {

	public function insertar(){
		 
		$nom= $_POST['nombre']; 
		$apel= $_POST['apellido']; 
		$edad= $_POST['edad'];
		$this->sentencia="INSERT INTO usuarios VALUES (null, '$nom','$apel', '$edad')";
		$this->ejecutarSentencia(); 	

	}

	public function consultar(){
	$this->sentencia = "SELECT * FROM usuarios";  
		return $this->obtenerSentencia(); 
	}

	public function eliminar(){
	$id= $_POST['id']; 
	//$nom= $_POST['nombre'];
		$this->sentencia="DELETE FROM usuarios WHERE id='$id'";
		return $this->obtenerSentencia(); 
	}
	public function modificar(){
	$idm= $_POST['idm'];
	$nombrem= $_POST['nombrem'];
	$apellidom= $_POST['apellidom'];
	$edadm= $_POST['edadm']; 
	//$nom= $_POST['nombre'];
		$this->sentencia="UPDATE usuarios SET nombre='$nombrem', apellido='$apellidom', edad='$edadm' WHERE id='$idm'";
		return $this->obtenerSentencia(); 
	}

}

?>