<?php

require_once './View/ViewShowTodoList.php';
require_once './BusinessLogic/AddTodoList.php';

addTodoList("Belajar PHP Dasar");
addTodoList("Belajar PHP OOP");
addTodoList("Belajar PHP Web");
viewShowTodoList();
