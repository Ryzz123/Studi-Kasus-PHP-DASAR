<?php
require_once "../Model/TodoList.php";
require_once "../BusineesLogic/AddTodoList.php";

addTodoList("Ryzz");
addTodoList("Febry");
addTodoList("Ananda");

var_dump($todoList);