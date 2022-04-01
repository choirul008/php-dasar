<?php

require_once "helper/Input.php";
require_once "Model/todolist.php";
require_once "Bussineslogic/removeToDoList.php";
require_once "Bussineslogic/addToDoList.php";
require_once "Bussineslogic/showToDoList.php";

function viewRemove()
{
    echo "MENGHAPUS TODO" . PHP_EOL;
    $pilihan = input("Nomor (x untuk batalkan) ");
    if($pilihan == "x"){
        echo "Batal Hapus Todo";
    } else {
    $success = removeToDoList($pilihan);

    if ($success) {
        echo "Berhasil Menghapus todo nomor $pilihan" . PHP_EOL;
    } else {
        echo "Hapus todo GAGAL nomor $pilihan" . PHP_EOL;
        }
    }
}

