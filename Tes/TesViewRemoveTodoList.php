<?php
require_once "../View/ViewRemoveTodoList.php";
require_once "../Model/TodoList.php";
require_once "../BusineesLogic/AddTodoList.php";
require_once "../BusineesLogic/ShowTodoList.php";

addTodoList("Ryzz");
addTodoList("Febri");
addTodoList("Ananda");
addTodoList("Coding");
addTodoList("Fullstack");

showTodoList();

viewRemoveTodoList();

showTodoList();
