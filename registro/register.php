<?php
include_once "config/db.php";
    

if(isset($_POST['submit'])){
    if(isset($_POST['email'], $_POST['password']) && !empty($_POST['email']) && !empty($_POST['password'])){
        
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);

        $option = array("cost"=>4);
        $hash = password_hash($password, PASSWORD_BCRYPT, $option);

        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $sql = "SELECT * FROM usuarios where usuario = :pemail";
            $script = $pdo->prepare($sql);
            $sqlEmal = ['pemail' => $email];
            $script->execute($sqlEmal);

            if($script->rowCount() == 0){
                if(strlen($password) >= 6){
                    $nameUse = strstr($email, '@', true);
                    $userType = 1;

                    $sql = "INSERT INTO usuarios (usuario, email, contraseña) values (:puser, :pemail, :ppasword)";
                    try{
                        $handle = $pdo->prepare($sql);
                        $sqlParams = [
                            ':puser' => $nameUse,
                            'pemail' => $email,
                            'ppasword' => $hash
                        ];

                        $handle->execute($sqlParams);
                        $success = 'Usuario creado con exitos';
                        // header("Location: index.php");
                        header ("Cache-Control: no-cache, must-revalidate");
                    }catch(PDOExection $e){
                        $errors[] = $e->getMessage();
                    }
                }else{
                    $valEmail = $email;
                    $valPassword = $password;
                    $alertMessage = 'Ingresar almenos 6 caracteres en';
                }
            }else{
                $alertEmail = 'El correo ya se encuentra registrado';
            }
        }else{
            $valEmail = '';
            $valPassword = $password;
            $errors[] = 'Porfavor ingrese un correo Electronico';
        }
    }
    else{
        if(!isset($_POST['email']) || empty(['email'])){
          $message1 = 'Porfavor ingrese un correo Electronico';  
        }else{
            $valEmail = $_POST['email'];
        }if(!isset($_POST['password']) || empty($_POST['password'])){
            $message2 = '<div class="alert alert-danger" role="alert">Porfavor ingrese una contraseña</div>';
        }else{
            $valPassword = $_POST['password'];
        }
    }
}