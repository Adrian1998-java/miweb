<?php

class Libro 
{
    protected $titulo;
    protected $autor;
    protected $anioPublicacion;
    
    public function __construct($titulo, $autor, $anioPublicacion)
    {
        $this-> titulo = $titulo;
        $this-> autor = $autor;
        $this-> anioPublicacion = $anioPublicacion;
    }

    public function mostrarInfo()
    {
        echo "Titulo: {$this-> titulo} , Autor: {$this-> autor}, Anio de publicacion: {$this-> anioPublicacion}<br>";
    }

    public function getTitulo(){
        return $this-> titulo;
    }
    public function getAutor(){
        return $this-> autor;
    }
    public function getAnioPublicacion(){
        return $this-> anioPublicacion;
    }
    
    public function setTitulo($titulo){
        $this-> titulo = $titulo;
    }
    public function setAutor($autor){
        $this-> autor = $autor;
    }
    public function setAnioPublicacion($anioPublicacion){
        $this-> anioPublicacion = $anioPublicacion;
    }
}

?>