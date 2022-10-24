<?php
require_once __DIR__ .  "/../Helper/Input.php";
require_once __DIR__ .  "/../BusineesLogic/RemoveTodoList.php";

function viewRemoveTodoList()
{
    echo "MENGHAPUS TODO" . PHP_EOL;

    $pilihan = input("Nomor (x Untuk Batlakn)");

    if ($pilihan == "x") {
        echo "Batal Mnghapus Todo" . PHP_EOL;
    } else {
        $succes = removeTodoList($pilihan);

        if ($succes) {
            echo "Sukses Menghapus Todo nomo $pilihan" . PHP_EOL;
        } else {
            echo "Gagal Menghapus Todo NO $pilihan" . PHP_EOL;
        }
    }
}