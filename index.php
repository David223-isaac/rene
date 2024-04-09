<?php
    use App\sentencias;
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Usuarios</title>
<link rel="stylesheet" href="./styles.css">
</head>
<body>
<header>
    <h1>SISTEMA DE GESTIÓN DE USUARIOS</h1>
</header>
<br>
<br>
<section>
<div class="forma1">
<img class="ImgRegistrar" src="https://cdn-icons-png.flaticon.com/512/6877/6877544.png" alt="img">
<form id="reg" action="" method="post">
    <h2>Registro de usuarios</h2>
    <br>
    <input type="text" name="nombre" placeholder="nombre" required>*<br><br>
    <input type="text" name="apellido" placeholder="apellido" required>*<br><br>
    <input type="text" name="edad" placeholder="edad" required>*<br><br>
    <br>
    <input type="submit" name="boton" value="Guardar">
    <br>
    <br>
    <?php
    if (isset($_POST['boton'])){
        $obj=new Pelicula();
        $obj->insertar();
        echo "<span> Los datos han sido ingresados</span>";
    }
    ?>
</form>
<br>
</div>
<br>
<div class="eliminaru">
<img class="ImgRegistrar" src="https://cdn-icons-png.flaticon.com/512/2150/2150535.png" alt ="img">
<form id="eliminar" action="" method="post">
    <h2>Eliminación de usuarios</h2>
    <br>
    <input type="number" name="id" placeholder="id" required>*<br><br>
    <input type="text" name="nombre" placeholder="nombre" required>*<br><br>
    <br>
    <input type="submit" name="boton2" value="Eliminar">
    <br>
    <?php
    if (isset($_POST['boton2'])){
        $obj=new Pelicula();
        $obj->eliminar();
        echo "<span> Los datos han sido eliminados </span>";
        header("Location: index.php");
    }
    ?>
    <br>
</form>
<br>
</div>
<br>
<div class="modificaru">
<img class="ImgRegistrar" src="https://cdn-icons-png.flaticon.com/512/2808/2808392.png" alt="img">
<form id="modificar" action="" method="post">
    <h2>Modificación de usuarios</h2>
    <br>
    <input type="text" name="idm" placeholder="id" required>*<br><br>
    <input type="text" name="nombrem" placeholder="nuev. nombre" required>*<br><br>
    <input type="text" name="apellidom" placeholder="nuev. apellido" required>*<br><br>
    <input type="text" name="edadm" placeholder="nuev. edad" required>*<br><br>
    <br>
    <input type="submit" name="boton3" value="Guardar">
    <?php
    if (isset($_POST['boton3'])){
        $obj=new Pelicula();
        $obj->modificar();
        echo "<span> Los datos han sido modificados </span>";
        header("Location: index.php");
    }
    ?>
    <br>
    <br>
</form>
</div>
</section>
<br>
<div class="base">
<img class="ImgRegistrar" src="https://cdn-icons-png.flaticon.com/512/9977/9977386.png" alt="img">
<table>
<caption>Description: This table displays user information</caption>
    <h2>ESTADO ACTUAL DE LA TABLA</h2>
    <th>Id</th>
    <th>Nombre</th>
    <th>Apellidos</th>
    <th>Edad</th>
    <?php
    define("TD_END", "</td>");
    $obj = new Pelicula();
    $res = $obj->consultar();
    while ($fila=$res->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$fila["id"]. TD_END;
        echo "<td>".$fila["nombre"]. TD_END;
        echo "<td>".$fila["apellido"]. TD_END;
        echo "<td>".$fila["edad"]. TD_END;
        echo "<tr>";
    }
    ?>
</div>
</table>
</body>
</html>
