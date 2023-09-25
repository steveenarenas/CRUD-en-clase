<?php
    include("Conexion.php");
    $doc = $_GET['id'];
    $conn = getConexion();
    $query = "SELECT * FROM aprendiz WHERE Documento='$doc'";
    $registro = mysqli_query($conn,$query);
    $row = mysqli_fetch_array($registro);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="css/style.css" rel="stylesheet">
        <title>Editar Aprendiz</title>
        
    </head>
    <body>
        <h2> Actualizar Aprendiz</h2>
        <div class="users-form">
            <form action="Editar.php" method="POST">
                <input type="text" name="txtDocumento" value="<?=$doc ?>">
                <input type="text" name="txtNombre" placeholder="Nombres" value="<?=$row['Nombre']?>">
                <input type="text" name="txtApellido" placeholder="Apellidos" value="<?=$row['Apellido']?>">
                <input type="text" name="txtCorreo" placeholder="Email" value="<?=$row['Correo']?>">
                <input type="submit" value="Actualizar">
            </form>
            <a href="index.php">Atras</a>
        </div>
    </body>
</html>