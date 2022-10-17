<?php
session_start();
require_once "conexion.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>estamos finos</title>
</head>
<body>
    <div>
        <table>
            <thead>
                <?php
                $usuario1 = $_POST['email'];
                $consulta = "SELECT * FROM ttarea WHERE correoElec = '$usuario1'";
                $resultado = mysqli_query($conection,$consulta);
                ?>
                <th>Titulo de Tarea</th>
                <th>Contenido</th>
            </thead>
            <tbody>
                <?php while ($filas = mysqli_fetch_assoc($resultado)){
                ?>
                <tr>
                    <td><?php echo $filas['tituloTarea']?></td>
                    <td><?php echo $filas['contenidoTarea']?></td>
                    <td>
                        <a href="">Editar</a>
                        <a href="">Eliminar</a>
                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>



    <a href="cerrar_session.php">Cerrar session</a>
    
</body>
</html>