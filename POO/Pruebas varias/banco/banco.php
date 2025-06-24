<?php

class CuentaBancaria{
    protected $titular;
    protected $saldo;

    public function __construct($titular, $saldo = 0){
        $this-> titular = $titular;
        $this-> saldo = $saldo;
    }

    public function depositar($cantidad)
    {
        $this-> saldo += $cantidad;
        echo "Se ha depositado {$cantidad} en la cuenta de {$this-> titular}.<br>";
    }

    public function retirar($cantidad)
    {
        if ($cantidad > $this-> saldo){
            echo "No tienes suficiente saldo para retirar esa cantidad <br>";
            }else{
                $this-> saldo -= $cantidad;
                echo "Se ha retirado {$cantidad} de la cuenta de {$this-> titular}.<br>";
            }
    }

    public function mostrarSaldo()
    {
        echo "El saldo de la cuenta es: {$this-> saldo} <br>";
    }
}


?>