<?php
	include("Conexion.php");
    $conn = getConexion();
    
	$doc=$_POST['txtDocumento'];
	$nom=$_POST['txtNombre'];
	$ape=$_POST['txtApellido'];
	$email=$_POST['txtCorreo'];
	$query = "INSERT INTO aprendiz(Documento,Nombre,Apellido,Correo) VALUES ('$doc','$nom','$ape','$email')";
    $resultado = mysqli_query($conn,$query);
    if ($resultado) {
    	Header("Location:index.php");
    }
?>