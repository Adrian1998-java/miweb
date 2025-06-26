<?php

namespace TodoApp\Config;

class Database{
    private static $tasks = [];

    public static function getTasks(){
        // return self::$tasks;
        session_start();
        return isset($_SESSION['tasks']) ? $_SESSION['tasks'] : [];
    }

    public static function addTask($task){
        //self::$tasks[] = $task;
        session_start();
        if(!isset($_SESSION['tasks'])){
            $_SESSION['tasks'] = [];
        }
        $_SESSION['tasks'][] = $task;
    }
}

?> 