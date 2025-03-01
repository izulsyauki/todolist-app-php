<?php

require_once './model/TodoList.php';
require_once './BusinessLogic/AddTodoList.php';
require_once './BusinessLogic/ShowTodoList.php';

addTodoList("Belajar PHP Dasar");
addTodoList("Belajar PHP OOP");
addTodoList("Belajar PHP Database");
addTodoList("Belajar PHP Web");

// var_dump($todoList);
showTodoList();
