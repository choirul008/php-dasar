<?php

require_once "Model/todolist.php";
require_once "Bussineslogic/removeToDoList.php";
require_once "Bussineslogic/addToDoList.php";
require_once "Bussineslogic/showToDoList.php";

addToDoList("Choirul");
addToDoList("Anam");
addToDoList("Keren");
addToDoList("Paijo");
addToDoList("Budi");

showToDoList();

removeToDoList(3);
showToDoList();
