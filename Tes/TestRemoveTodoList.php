<?php
require_once "../Model/TodoList.php";
require_once "../BusineesLogic/AddTodoList.php";
require_once "../BusineesLogic/ShowTodoList.php";
require_once "../BusineesLogic/RemoveTodoList.php";

addTodoList("Ryzz");
addTodoList("Ananda");
addTodoList("Lubis");
addTodoList("Budi");
addTodoList("Joko");

showTodoList();

removeTodoList(3);

showTodoList();

removeTodoList(2);

showTodoList();

$succes = removeTodoList(4);
var_dump($succes);

showTodoList();