<?php

require_once './Model/TodoList.php';
require_once './BusinessLogic/RemoveTodoList.php';
require_once './BusinessLogic/ShowTodoList.php';
require_once './BusinessLogic/AddTodoList.php';

addTodoList("Belajar PHP Dasar");
addTodoList("Belajar PHP OOP");
addTodoList("Belajar PHP Database");
addTodoList("Belajar PHP Web");
addTodoList("Belajar PHP Unit test");

showTodoList();

removeTodoList(3);

showTodoList();

removeTodoList(2);

showTodoList();

$success = removeTodoList(4);

var_dump($success);
