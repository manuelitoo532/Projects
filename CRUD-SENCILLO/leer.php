<?php
require_once 'config/db.php';

$sql = $pdo->prepare("SELECT * FROM libros;");

$sql->execute();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leer</title>



    <style>
        table{
            border-collapse: collapse;
            width: 100%;
        }
        table td{
            border: 1px solid orange;
            text-align: center;
            padding: 1.3rem;
        }
        .button{
            border-radius: .5rem;
            color: white;
            background-color: orange;
            padding: 1rem;
            text-decoration: none;
        }
    </style>
</head>
<body>
<table>
        <tr>
            <th>Codigo</th>
            <th>Titulo</th>
            <th>Autor</th>
            <th>Disponible?</th>
        </tr>

        <?php foreach ($sql as $clave => $valor): ?>
        <tr>
            <td><?= $valor['codigo']; ?></td>
            <td><?= $valor['titulo']; ?></td>
            <td><?= $valor['autor']; ?></td>
            <td><?= $valor['disponible'] ? 'Si' : 'No'; ?></td>
            <td><a href="modificar.php?codigo=<?= $valor['codigo'] ?>" class="button">Modificar</a></td>
            <td><a href="borrar.php?codigo=<?= $valor['codigo'] ?>" class="button">Borrar</a></td>
        </tr>

        <?php endforeach; ?>
    </table>
</body>
</html>