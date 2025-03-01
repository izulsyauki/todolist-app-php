<?php

require_once './View/ViewAddTodoList.php';
require_once './BusinessLogic/AddTodoList.php';
require_once './BusinessLogic/ShowTodoList.php';

addTodoList("Belajar PHP Dasar");
addTodoList("Belajar PHP OOP");
addTodoList("Belajar PHP Web");

viewAddTodoList();

showTodoList();
