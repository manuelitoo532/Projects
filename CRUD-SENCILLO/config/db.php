<?php 
    $server = 'localhost';
    $user = 'root';
    $pass = 'g)P[GveuFJIyQClG';
    $dbname = 'cmortez';

   try{
    $pdo = new PDO("mysql:host=$server;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Success";
   }catch(PDOException $e){
    echo "Error: " .$e ->getMessage();
   }
?>