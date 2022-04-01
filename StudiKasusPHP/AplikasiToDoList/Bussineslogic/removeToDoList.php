<?php

//Menghapus to do list

function removeToDoList(int $number): bool
{
    global $todolist;
    
    if ($number > sizeof($todolist)) {
        return false;
    } 

    for ($i = 1; $i < sizeof($todolist); $i++) {
        $todolist[$i] = $todolist[$i + 1];
    }
    unset($todolist[sizeof($todolist)]);

    return true;
}