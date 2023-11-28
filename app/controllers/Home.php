<?php

namespace app\controllers;

use app\interfaces\ControllerInterface;
use app\models\activerecord\FindAll;
use app\models\Task;

class Home implements ControllerInterface
{
    public array $data = [];
    public string $view;

    public function index(array $args)
    {
        $tasks = (new Task)->execute(new FindAll(fields: "id, title, description"));
        $this->view = "home.php";
        $this->data = [
            "title" => "Tasks",
            "style" => "home-style.css",
            "tasks" => $tasks
        ];
    }

    public function edit(array $args)
    {
        // TODO: Implement edit() method.
    }

    public function show(array $args)
    {
        // TODO: Implement show() method.
    }

    public function update(array $args)
    {
        // TODO: Implement update() method.
    }

    public function store()
    {
        // TODO: Implement store() method.
    }

    public function destroy(array $args)
    {
        // TODO: Implement destroy() method.
    }
}
