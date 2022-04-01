<?php

require_once "Model/todolist.php";
require_once "Bussineslogic/addToDoList.php";

addToDoList("Choirul");
addToDoList("Anam");
addToDoList("Keren");

var_dump($todolist);