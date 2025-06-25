<?php
class Database{
    private static $task = [];

    public static function getTask(){
        return self::$task;
    }

    public static function addTask($task){
        self::$task[] = $task;
    }
}

?> 