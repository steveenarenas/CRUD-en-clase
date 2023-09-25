<?php
    include("Conexion.php");
    $doc = $_GET['id'];
    $conn = getConexion();
    $query = "DELETE FROM aprendiz WHERE Documento='$doc'";
    $resultado = mysqli_query($conn,$query);
    if ($resultado) {
    	Header("Location:index.php");
    }
?>