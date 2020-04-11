<?php
require_once "conexion.php";
if ($php_response["msg"]=="OK"){
	$u_exiten = mysqli_query($conexion, "SELECT * FROM usuarios");
	if (mysqli_num_rows($u_exiten) > 0 ){
		$php_response['obser']= "los usaurios ya existen ";

	}else{

		$email = "camilopino@gmail.com";
		$nombre="camilo";
		$password =md5("1234");
		$fecha_nacimiento = "1993/03/17";
		$crear = $conexion->prepare("INSERT INTO usuarios (email, nombre, password, fecha_nacimiento) VALUES (?,?,?,?)");
		$crear->bind_param("ssss", $email, $nombre, $password, $fecha_nacimiento);
		$crear->execute();

		$email = "cristian@gmail.com";
		$nombre="cristian ";
		$password =md5("1234");
		$fecha_nacimiento = "1993/03/17";
		$crear->bind_param("ssss", $email, $nombre, $password, $fecha_nacimiento);
		$crear->execute();

	}
	$cumple = date('Y/m/d',strtotime("1982/07/08"));




}
