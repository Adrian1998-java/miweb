<?php
//Registrar una función anónima como autoload
spl_autoload_register(function($class)
{
    //Definir el prefijo
    $prefix = "TodoApp\\";
    //Definir la ruta base
    $base_dir = __DIR__ . '/src/';
    //longitud para coincidencias
     $len = strlen($prefix);
     //Verificar la clase que se quiere cargar
     if(strncmp($prefix, $class, $len) !== 0)
     {
        return; //No es la clase que estamos buscando
     }
    // Extraer del namespace despues del prefijo
    $relative_class = substr($class, $len);

    $file = $base_dir . str_replace('\\', '/', $relative_class).'.php';

    //Si existe el archivo, se añade
    if(file_exists($file)){
        require $file;
    }
});

// require_once "src/controllers/TaskController.php";

use TodoApp\Controllers\TaskController;

$controller  = new TaskController();

$controller->handleRequest();

// $action = isset($_GET['action']) ? $_GET['action'] : 'index';

// switch($action)
// {
//     case 'add':
//         $controller->addTask();
//         break;
//     default: 
//         $controller->index();
//         break;
// }

