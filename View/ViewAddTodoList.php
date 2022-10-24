<?php
require_once __DIR__ .  "/../Model/TodoList.php";
require_once __DIR__ .  "/../BusineesLogic/AddTodoList.php";
require_once __DIR__ .  "/../Helper/Input.php";

function viewAddTodoList() {
    echo "MENAMBAH TODO" . PHP_EOL;

    $todo = input("Todo (x untuk Batal)");

    if($todo == "x") {
        echo "Gagal Menambah Todo" . PHP_EOL;
    } else {
        addTodoList($todo);
    }
}