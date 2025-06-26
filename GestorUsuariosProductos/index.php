<?php


require_once "src/usuarios/Usuario.php";
require_once "src/productos/Producto.php";

use App\usuarios\Usuario as User;
use App\productos\Producto as product;

//Creamos Users, productos y los almacenamos
$user1 = new User("Adrian");
$product1 = new product("Tortitas");
$user2 = new User("Lorena");
$product2 = new product("Caramelos");
$user3 = new User("Javier");
$product3 = new product("Empanadas");

$listUsers = [$user1, $user2, $user3];
$listProduct = [$product1, $product2, $product3];

foreach($listUsers as $u){
    echo $u-> saludar();
    echo "<br>";
}
foreach($listProduct as $p){
    echo $p-> mostrar();
    echo "<br>";
}

