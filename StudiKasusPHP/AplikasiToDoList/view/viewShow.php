<?php


require_once "helper/Input.php";
require_once "Model/todolist.php";
require_once "Bussineslogic/removeToDoList.php";
require_once "Bussineslogic/addToDoList.php";
require_once "Bussineslogic/showToDoList.php";

function viewShow()
{
    while (true) {
    showToDoList();

    echo "Menu" .PHP_EOL;
    echo "1. Tambah Todo" . PHP_EOL;
    echo "2. Hapus Todo" . PHP_EOL;
    echo "x. Keluar" . PHP_EOL;

    $pilihan = input("Pilih");

    if($pilihan == "1") {
        viewAdd();
    } else if ($pilihan == "2") {
        viewRemove();
    } else if ($pilihan == "x") {
        break ;//keluar
    } else {
        echo "Pilihan tidak diketahui" . PHP_EOL;
        }
    }

    echo " Bye.. Bye.. " . PHP_EOL;
}