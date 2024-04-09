<?php
require_once "connection.php";

class Pelicula extends Conexion
{

    public function insertar()
    {
        $nom = $_POST['nombre'];
        $apel = $_POST['apellido'];
        $edad = $_POST['edad'];
        // Preparar la sentencia SQL con placeholders
        $this->sentencia = "INSERT INTO usuarios VALUES (null, ?, ?, ?)";
        // Ejecutar la sentencia preparada con los parámetros correspondientes
        $this->ejecutarSentencia(array($nom, $apel, $edad));
    }

    public function consultar()
    {
        $this->sentencia = "SELECT * FROM usuarios";
        return $this->obtenerSentencia();
    }

    public function eliminar()
    {
        $id = $_POST['id'];

        // Preparar la sentencia SQL con placeholders
        $this->sentencia = "DELETE FROM usuarios WHERE id=$id";

        // Ejecutar la sentencia preparada con el parámetro correspondiente
        // return $this->ejecutarSentencia(array($id));
    }

    public function modificar()
    {
        // $idm = $_POST['idm'];
        $nombrem = $_POST['nombrem'];
        $apellidom = $_POST['apellidom'];
        $edadm = $_POST['edadm'];

        // Preparar la sentencia SQL con placeholders
        $this->sentencia = "UPDATE usuarios SET nombre=$nombrem, apellido=$apellidom, edad=$edadm WHERE id=?";

        // Ejecutar la sentencia preparada con los parámetros correspondientes
        // return $this->ejecutarSentencia(array($nombrem, $apellidom, $edadm, $idm));
    }

}
