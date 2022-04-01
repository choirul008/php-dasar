<?php

require_once "view/viewShow.php";
require_once "view/viewAdd.php";
require_once "view/viewRemove.php";
require_once "Bussineslogic/removeToDoList.php";
require_once "Bussineslogic/addToDoList.php";
require_once "Bussineslogic/showToDoList.php";
require_once "Model/todolist.php";


addToDoList("Choirul");
addToDoList("Anam");
addToDoList("Paijo");
addToDoList("Budi");
addToDoList("Programmner");
addToDoList("PHP dasar");

showToDoList();

viewRemove();

showToDoList();