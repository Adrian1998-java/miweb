<?php
// clase Padre
class animal{
    public function comer(){
        echo "El animal come";
    }
}
// Clase hija 
class Perro extends Animal {
    public function comer(){
        echo "El perro come";
    }
    public function ladrar(){
        echo "El perro esta ladrando: guau guau guau ";
    }
}

$perro = new Perro();
$perro->comer();
echo "<br>";
$perro->ladrar();



?>