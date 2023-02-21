<?php
#DATOS DEL SERVIDOR LOCALHOST
$server = "localhost";
$user = "root";
$pass ="g)P[GveuFJIyQClG";
$database = "cmortez";

try{
    $pdo = new PDO("mysql:host=$server;dbname=$database", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch (PDOException $e){
    echo "Error: " .$e ->getMessage();
    die();
}