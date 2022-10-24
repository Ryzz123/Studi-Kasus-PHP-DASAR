<?php
require_once __DIR__ . "/Model/TodoList.php";
require_once __DIR__ . "/BusineesLogic/ShowTodoList.php";
require_once __DIR__ . "/BusineesLogic/AddTodoList.php";
require_once __DIR__ . "/BusineesLogic/RemoveTodoList.php";
require_once __DIR__ . "/View/ViewShowTodoList.php";
require_once __DIR__ . "/View/ViewAddTodoList.php";
require_once __DIR__ . "/View/ViewRemoveTodoList.php";
require_once __DIR__ . "/Helper/Input.php";

echo "Aplikasi Todolist" . PHP_EOL;

viewShowTodoList();