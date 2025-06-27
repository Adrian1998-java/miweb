<?php

namespace TodoApp\Config;

use PDO;
use PDOException;

class Database{
    private static $tasks = [];

    private static $host = "localhost";
    private static $db = "todo_app";
    private static $user = "root";
    private static $pass = "";
    private static $pdo = null;

    public static function connect(){
        if(self::$pdo === null)
        {
            $dns = "mysql:host=" . self::$host . "; dbname=" . self::$db;
            try{
                self::$pdo = new PDO($dns, self::$user, self::$pass);
                self::$pdo->setAttribute(PDO::ATTR_ERRORMODE, PDO::ERROMODE_EXCEPTION);
            } catch(PDOException $e) {
                die ("Error en la conexión: " . $e-> getMessage());
            }
        }

        return self::$pdo;

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
}
?> 