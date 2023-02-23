<?php
require_once 'config/db.php';
class usuarios {
    
    public $user = [
        'Jose',
        'manuel123',
        'ortez532@.gmail.com'
    ];

   public $nomb = 'carlos';
   public $usuario = 'manuel123';
   public $email = 'ortezcarlos532@gmail.com';

    public function usuar(): void {

        echo 'Bienvenido';
    }
}
