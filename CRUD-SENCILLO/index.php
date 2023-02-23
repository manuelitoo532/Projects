<?php
require_once 'config/db.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $titulo = isset($_POST['titulo']) ? $_REQUEST['titulo'] : null;
    $autor = isset($_POST['autor']) ? $_REQUEST['autor'] : null;
    $disponible = isset($_POST['disponible']) ? $_REQUEST['disponible'] : null;


    $insert = $pdo->prepare('INSERT INTO libros (titulo, autor, disponible) VALUES (:titulo, :autor, :disponible)');
    // Ejecuta INSERT con los datos
    $insert->execute(
        array(
            'titulo' => $titulo,
            'autor' => $autor,
            'disponible' => $disponible
        )
    );
    header('Location: leer.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>

</head>
<body>
    <form method="post">
        <p>
            <label for="Titulo">Titulo</label>
            <input type="text" name="titulo" id="titulo">
        </p>
        <p>
            <label for="Autor">Autor</label>
            <input type="text" name="autor" id="Autor">
        </p>
        <p>
            <div>Disponible</div>
            <input type="radio" name="disponible" id="si-disponible">
            <label for="si-disponible">Si</label>

            <input type="radio" name="disponible" id="no-disponible">
            <label for="no-disponible">Ni</label>
        </p>
        <p>
            <input type="submit" value="Guardar">
        </p>
    </form>
</body>
</html>



<!-- 
// $consulta = $pdo->prepare('select * from note;');
// $consulta->execute();

// $result = $consulta->fetchAll();
// foreach ( $result as $position => $resultado){
//     echo $resultado['title'];
    
// }

// //insert into 
// $insert = $pdo->prepare('INSERT INTO note(id, title, content) VALUES (:id, :title, :content)');

// $insert->execute(
//     array(
//     'id' => 1,
//     'title'	=> 'javascript',
//     'content'	=> 'Aprendiendo JavaScript'
//     )
// );

// $usuario->usuar();
// $usuario = new usuarios();

// echo $usuario->user[0] . '<br/>';
// echo $usuario->user[1]. '<br/>';
// echo $usuario->user[2]. '<br/>'; -->
