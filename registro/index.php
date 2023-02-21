<?php
include_once "register.php";

include_once "datos.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- DATATABLE -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.4/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"/>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.4/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.4/js/responsive.bootstrap4.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register||</title>
</head>
<body>
    <div class="container">
        <?php
            if(isset($errors) && count($errors) > 0){
                foreach($errors as $error_msg){
                    echo '<div class="alert alert-danger">'.$error_msg.'</div>';
                }
            }
            if(isset($alertEmail) && !empty($alertEmail)){
                echo '<div class="alert alert-warning">'.$alertEmail.'</div>';
            }
            if(isset($success)){
                echo '<div class="alert alert-success">'.$success.'</div>';
            }
        ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <!-- <div class="mb-3">
                <label for="inputUser" class="form-label">Usuario</label>
                <input type="text" id="inputUser" name="usuario" class="form-control" aria-describedby="emailHelp">
        </div> -->
            <div class="mb-3">
                <label for="inputEmail" class="form-label">Correo Electronico</label>
                <input type="email" id="inputEmail" name="email" class="form-control" aria-describedby="emailHelp" value="<?php echo ($valEmail??'');?>">
                <?php 
                    echo '<div class="alertMessage">'.($message1??'').'</div';
                ?>
            </div>
            <div class="mb-3">
                <label for="inputPass" class="form-label">Contraseña</label>
                <input type="password" id="inputPass" name="password" class="form-control" value="<?php echo ( $valPassword??''); ?>">
                <?php 
                    echo ($message2??'');
                ?>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" name="" id="check1" class="form-check-input">
                <label for="check1" class="form-check-label">Check me out</label>
            </div>
            <button type="submit" name="submit" id="submit" class="btn btn-primary">Entregar</button>
        </form>

        <table class="table" id="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Usuario</th>
                    <th>Email</th>
                    <th>Contraseña</th>
                </tr>
            </thead>
        </table>
    </div>
</body>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
      <script src="js/main.js"></script> 
</html>