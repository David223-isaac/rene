<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Usuarios</title>
	</head>

	<style type="text/css">
	*{
			border: 0;
			margin: 0;
			box-sizing: border-box;
	}
	table{

		text-align: center;
		padding: 0.5rem;
		margin: 0.5rem;
		height: 90%;
		width: 90%;
		align-items: center;
	}
	/*table tr:nth-child(odd){
		background-color: yellow;
	}
	table tr:nth-child(even){
		background-color: cyan;
	}*/
	#reg{
		margin-left: auto;
		margin-right: auto;
		height: 50%;
		width: 50%;
		text-align: center;
		border-color: solid red 2px;
		background-color:  #FCBF1E; 
		border-radius: 15px; 
		border:  solid black 2px;

	}
	.base{
		text-align: center;
		align-items: center;
		
	}
	.forma1{
		margin-left: auto;
		margin-right: auto;
		height: 50%;
		width: 50%;
		height: 100%;
		width: 100%;

	}
	section{
		text-align: center;
		display: inline;
	}
	#eliminar{
		margin-left: auto;
		margin-right: auto;
		height: 50%;
		width: 50%;
		background-color: #0BA01B;
		text-align: center;
		border-radius: 15px;
		border:  solid black 2px;
	}
	.modificaru{
		margin-left: auto;
		margin-right: auto;
		background-color: #5AD57F;
		text-align: center;
		border-radius: 15px;
		height: 50%;
		width: 50%;
		border:  solid black 2px;

	}
	header{
		height: 80px;
		background-color: #264B41;
	}
	input{
		border-radius: 8px;
		background-color: black;
		color:  white;
		border: solid 4px white;
	}
	input:hover {
		background-color: darkred;
		transition-duration: 2s;
		height: 30px;
	}
	h1{
		color: #FFF808;
		text-align: center;
	}
	table {
		text-align: center;
		margin-left: auto;
		margin-right: auto;
	width: 100%;
	border: 1px solid #000;
	}
	th, td {
	background-color: #D4AF37;
	width: 25%;
	text-align: center;
	vertical-align: top;
	border: 1px solid #000;
	border-collapse: collapse;
	padding: 0.3em;
	caption-side: bottom;
	}
	caption {
	padding: 0.3em;
	}
	body{
		background-color: #509B87;
		text-align: center;
	}
		
	</style>
	<body>
	<header>
	<h1> SISTEMA DE GESTIÓN DE USUARIOS</h1>
	</header>

	<br>
	<br>

	<section>
	<div class="forma1">
	<form id="reg" action="" method="post">
	<h2>Registro de usuarios</h2>
	<br> 
	<input type="text" name="nombre" placeholder="nombre" required>*<br><br>
	<input type="text" name="apellido" placeholder="apellido" required>*<br><br>
	<input type="text" name="edad" placeholder="edad" required>*<br><br>
	<br>
	<input type="submit" name="boton" value="guardar">
	<br> 
	<br>
	<?php
	if(isset($_POST['boton'])){
		require_once("sentencias.php");
		$obj=new pelicula(); 
		$obj->insertar(); 
		echo "<span> Los datos han sido ingresados</span>";
		header("Location: index.php");
	}
	?>
	</form>
	<br>
	</div>
	<br>

	<div class="eliminaru">
	<form id="eliminar" action="" method="post">
	<h2>Eliminación de usuarios</h2>
	<br> 
	<input type="number" name="id" placeholder="id" required>*<br><br>
	<input type="text" name="nombre" placeholder="nombre" required>*<br><br>
	<br>
	<input type="submit" name="boton2" value="Eliminar">
	<br>
	<?php
	if(isset($_POST['boton2'])){
		require_once("sentencias.php");
		$obj=new pelicula(); 
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
	<form id="modificar" action="" method="post">
	<h2>Modificación de usuarios</h2>
	<br> 
	<input type="text" name="idm" placeholder="id" required>*<br><br>
	<input type="text" name="nombrem" placeholder="nuev. nombre" required>*<br><br>
	<input type="text" name="apellidom" placeholder="nuev. apellido" required>*<br><br>
	<input type="text" name="edadm" placeholder="nuev. edad" required>*<br><br>
	<br>
	<input type="submit" name="boton3" value="guardar">
	<?php
	if(isset($_POST['boton3'])){
		require_once("sentencias.php");
		$obj=new pelicula(); 
		$obj->modificar(); 
		echo "<span> Los datos han sido eliminados </span>";
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
	<table>
	<h2>ESTADO ACTUAL DE LA TABLA</h2>
	<th>Id</th>
	<th>Nombre</th>
	<th>Apellidos</th>
	<th>Edad</th>
	<?php 
	require_once("sentencias.php");
	$obj = new pelicula(); 
	$res = $obj->consultar(); 
	while($fila=$res->fetch_assoc()){
		echo "<tr>"; 
		echo "<td>".$fila["id"]."</td>";
		echo "<td>".$fila["nombre"]."</td>"; 
		echo "<td>".$fila["apellido"]."</td>"; 
		echo "<td>".$fila["edad"]."</td>"; 
		echo "<tr>"; 
	}
	?>
	</div>
	</table>
	</body>
</html>

