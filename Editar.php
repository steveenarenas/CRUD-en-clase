<?php
	include("Conexion.php");
    $conn = getConexion();
    
	$doc=$_POST['txtDocumento'];
	$nom=$_POST['txtNombre'];
	$ape=$_POST['txtApellido'];
	$email=$_POST['txtCorreo'];
	$query = "UPDATE aprendiz SET Nombre='$nom',Apellido='$ape',Correo='$email' WHERE Documento='$doc'";
    $resultado = mysqli_query($conn,$query);
    if ($resultado) {
    	Header("Location:index.php");
    }
?>