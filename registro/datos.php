<?php
include_once "config/db.php";

$sql = "SELECT * FROM usuarios";
$st = $pdo->query($sql);

if($st){
    $rs = $st->fetchAll(PDO::FETCH_FUNC, fn($id_user, $usuario, $email, $password) => [$id_user, $usuario, $email, $password]);
    echo json_encode([
        'data' => $rs,
    ]);
}else{
    var_dump($pdo->errorInfo());
    // die;
}