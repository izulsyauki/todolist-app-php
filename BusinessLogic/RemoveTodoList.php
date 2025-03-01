<?php

/**
 * Menghapus todo dari list
 */

function removeTodoList(int $number): bool
{
    global $todoList;

    if ($number > sizeof($todoList)) {
        return false;
    }

    for ($i = $number; $i <= sizeof($todoList); $i++) {
        if ($i == sizeof($todoList)) {
            unset($todoList[$i]);
        } else {
            $todoList[$i] = $todoList[$i + 1];
        }
    }

    return true;
}
