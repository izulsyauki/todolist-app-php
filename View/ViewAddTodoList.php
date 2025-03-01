<?php

require_once __DIR__ .  '/../Helper/Input.php';
require_once __DIR__ . '/../BusinessLogic/AddTodoList.php';
require_once __DIR__ . '/../model/TodoList.php';

function viewAddTodoList()
{
    echo "MENAMBAHKAN TODO" . PHP_EOL;

    $todo = input("Todo (x untuk batal)");

    if ($todo == "x") {
        echo "Batal menambahkan todo" . PHP_EOL;
    } else {
        addTodoList($todo);
    }
}
