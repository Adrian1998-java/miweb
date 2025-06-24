<?php
//clase abstracta
abstract class Figura{
    abstract public function Area();
}

//Subclase concreta 
class Cuadrado extends Figura{
    //propiedad 
    private $lado;

    public function __construct($lado){
        $this-> lado = $lado;
    }

    public function Area(){

        return $this->lado * $this-> lado;
    }

}

class Rectangulo extends Figura{
    private $base;
    private $altura;

    public function __construct($base, $altura){
        $this-> base = $base;
        $this-> altura = $altura;
    }

    public function Area(){
        return $this-> base * $this-> altura;
    }

}

$cuadro = new Cuadrado(5);
echo "El area del cuadrado es: ". $cuadro-> Area();

echo "<br>";
$rectangulo = new Rectangulo(5, 10);
echo "El area del rectangulo es: ". $rectangulo-> Area();


?>