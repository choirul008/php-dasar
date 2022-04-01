<?php

require_once "helper/Input.php";
require_once "Bussineslogic/addToDoList.php";
require_once "Model/todolist.php";

function viewAdd()
{
    echo "TAMBAH TODO" . PHP_EOL;

    $todo = input("Todo (x untuk batal)  ");

    if($todo == "x"){
        echo "Batal Menambah Todo" ;//batal
    } else {
        addToDoList($todo);
    }
}