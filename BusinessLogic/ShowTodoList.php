<?php

/**
 * Menampilkan todo di list
 */
function showTodoList()
{
    global $todoList;

    echo "TODOLIST" . PHP_EOL;

    foreach ($todoList as $number => $values) {
        echo "$number. $values" . PHP_EOL;
    }
}
