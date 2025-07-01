<?php

namespace TodoApp\Config;

use PDO;
use PDOException;

require_once __DIR__.'\config_db.php';    

class Database{
    // private static $tasks = [];
    // private static $host = "localhost";
    // private static $db = "todo_app";
    // private static $user = "root";
    // private static $pass = "";
    private static $pdo = null;

    public static function connect(){
        if (self::$pdo === null) {
            $dsn = "mysql:host=".DB_HOST.";dbname=".DB_NAME;
            try {
                self::$pdo = new PDO($dsn,DB_USER,DB_PASS);
                self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e){
                if(str_contains($e->getMessage(), 'Unknow database'))
                {
                    echo "<h3 style='color:red;'>La base de datos <strong>".DB_NAME."</strong> no existe</h3>";
                    echo "<p><a href'/todo-app/create_db.php'> Crear base de datos automaticamente</a></p>";
                }
                else{
                    die ("Error en la conexión: " . $e->getMessage());
                }
            }
        }
        return self::$pdo;
    }
    // public static function getTasks(){
    //     // return self::$tasks;
    //     session_start();
    //     return isset($_SESSION['tasks']) ? $_SESSION['tasks'] : [];
    // }

    // public static function addTask($task){
    //     //self::$tasks[] = $task;
    //     session_start();
    //     if(!isset($_SESSION['tasks'])){
    //         $_SESSION['tasks'] = [];
    //     }
    //     $_SESSION['tasks'][] = $task;
    // }
}
?> 