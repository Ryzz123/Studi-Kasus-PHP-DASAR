<?php
require_once "../View/ViewAddTodoList.php";
require_once "../BusineesLogic/AddTodoList.php";
require_once "../BusineesLogic/ShowTodoList.php";

addTodoList("Ryzz");
addTodoList("Febri");
addTodoList("Ananda");
addTodoList("Coding");
addTodoList("Fullstack");

viewAddTodoList();

showTodoList();

viewAddTodoList();

showTodoList();