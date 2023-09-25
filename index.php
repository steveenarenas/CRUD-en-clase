
<?php
    include("Conexion.php");
    $conn = getConexion();
    $query = "SELECT * FROM aprendiz";
    $registros = mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link href="CSS/style.css" rel="stylesheet">
    <title>CRUD Basico</title>
</head>
<body>
    <div class="users-form">
        <h1>Registrar Aprendices</h1>
        <form action="Registrar.php" method="POST">
            <input type="text" name="txtDocumento" placeholder="Documento">
            <input type="text" name="txtNombre" placeholder="Nombres">
            <input type="text" name="txtApellido" placeholder="Apellidos">
            <input type="email" name="txtCorreo" placeholder="Email">
            <input type="submit" name="btnEnviar" value="Enviar">
        </form>
    </div>

    <div class="users-table">
        <h2>Aprendices registrados</h2>
        <table>
            <thead>
                <tr>
                    <th>DOCUMENTO</th>
                    <th>NOMBRES</th>
                    <th>APELLIDOS</th>
                    <th>CORREO</th>
                    <th colspan="2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_array($registros)): ?>
                    <tr>
                        <th><?=$row['Documento']?></th>
                        <th><?=$row['Nombre']?></th>
                        <th><?=$row['Apellido']?></th>
                        <th><?=$row['Correo']?></th>
                        <th><a href="Actualizar.php?id=<?=$row['Documento']?>" class="users-table--edit">Editar</a></th>
                        <th><a href="Eliminar.php?id=<?=$row['Documento']?>" class="users-table--delete" >Eliminar</a></th>
                    </tr>
                <?php endwhile;?>
            </tbody>
        </table>
    </div>

</body>

</html>