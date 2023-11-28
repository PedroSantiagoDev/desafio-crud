<?php

namespace app\controllers;

use app\interfaces\ControllerInterface;
use app\models\activerecord\Delete;
use app\models\activerecord\FindBy;
use app\models\activerecord\Insert;
use app\models\activerecord\Update;
use app\models\Task as TaskModel;
use Exception;

class Task implements ControllerInterface
{
    public string $view;
    public array $data = [];

    public function index(array $args)
    {
        $this->view = "create.php";
        $this->data = [
            "title" => "Create Task",
            "style" => "tasks-style.css"
        ];
    }

    public function edit(array $args): void
    {
        $task = (new TaskModel)->execute(new FindBy(field: "id", value: $args[0], fields: "id, title, description"));

        if (!$task) {
            throw new Exception("Tarefa não encontrada");
        }

        $this->view = "edit.php";
        $this->data = [
            "title" => "Edit Task",
            "style" => "tasks-style.css",
            "task" => $task
        ];
    }

    public function show(array $args)
    {
        $task = (new TaskModel)->execute(new FindBy(field: "id", value: $args[0], fields: "id, title, description"));

        if (!$task) {
            throw new Exception("Tarefa não encontrada");
        }

        $this->view = "delete.php";
        $this->data = [
            "title" => "Delete Task",
            "style" => "delete-style.css",
            "task" => $task
        ];
    }

    public function update(array $args)
    {
        $task = new TaskModel;

        $task->title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_SPECIAL_CHARS);
        $task->description = filter_input(INPUT_POST, "description", FILTER_SANITIZE_SPECIAL_CHARS);

        $task->execute(new Update(field: "id", value: $args[0]));

        return redirect("/");
    }

    public function store()
    {
        $task = new TaskModel;

        $task->title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_SPECIAL_CHARS);
        $task->description = filter_input(INPUT_POST, "description", FILTER_SANITIZE_SPECIAL_CHARS);

        $task->execute(new Insert);

        return redirect("/");
    }

    public function destroy(array $args)
    {
        $task = new TaskModel;
        $task->execute(new Delete(field: "id", value: $args[0]));
        return redirect("/");
    }
}
