<?php
class Conexion
{
    public $url = "localhost";
    public $usuario = "root";
    public $password = "";
    public $base = "seguridad";
    public $conexion = "";
    public $sentencia = "";

    private function abrirConexion()
    {
        $this->conexion = new mysqli($this->url, $this->usuario, $this->password, $this->base);
    }

    private function cerrarConexion()
    {
        $this->conexion->close();
    }

    public function ejecutarSentencia($parametros = array())
    {
        $this->abrirConexion();
        // Preparar la sentencia con placeholders
        $stmt = $this->conexion->prepare($this->sentencia);

        // Verificar si la preparación de la sentencia fue exitosa
        if ($stmt) {
            // Vincular parámetros a la sentencia preparada
            if (!empty($parametros)) {
                $tipos = str_repeat('s', count($parametros)); // asume todos los parámetros son strings
                $stmt->bind_param($tipos, ...$parametros);
            }
            
            // Ejecutar la sentencia preparada
            $stmt->execute();
            $this->cerrarConexion();
        } else {
            // Si hay un error en la preparación de la sentencia
            echo "Error al preparar la sentencia: " . $this->conexion->error;
        }
    }

    public function obtenerSentencia($parametros = array())
    {
        $this->abrirConexion();
        // Preparar la sentencia con placeholders
        $stmt = $this->conexion->prepare($this->sentencia);

        // Verificar si la preparación de la sentencia fue exitosa
        if ($stmt) {
            // Vincular parámetros a la sentencia preparada
            if (!empty($parametros)) {
                $tipos = str_repeat('s', count($parametros)); // asume todos los parámetros son strings
                $stmt->bind_param($tipos, ...$parametros);
            }
            
            // Ejecutar la sentencia preparada
            $stmt->execute();

            // Obtener el resultado
            $resultado = $stmt->get_result();

            // Cerrar la conexión y retornar el resultado
            $this->cerrarConexion();
            return $resultado;
        } else {
            // Si hay un error en la preparación de la sentencia
            echo "Error al preparar la sentencia: " . $this->conexion->error;
            return false;
        }
    }
}

class Pelicula extends Conexion
{
    public function insertar()
    {
        // Your insert logic here
        $this->sentencia = "INSERT INTO usuarios VALUES (null, ?, ?, ?)";
        $this->ejecutarSentencia([$nom, $apel, $edad]); // Assuming $nom, $apel, and $edad are defined
    }
}

