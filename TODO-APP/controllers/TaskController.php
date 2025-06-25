<?php 
require_once "models/Task.php";

class TaskController {

    public function index() {
        $tasks = Task::getAllTasks();

        require_once "views/tasks_view.php";
    }

    public function addTask(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['task'])) {

            $task = new Task($_POST['task']);
            $task->save();
        }

        header('Location: index.php');
    }
}
?>