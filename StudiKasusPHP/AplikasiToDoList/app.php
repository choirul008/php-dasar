<?php

require_once "Model/todolist.php";
require_once "helper/Input.php";
require_once "Bussineslogic/addToDoList.php";
require_once "Bussineslogic/showTodoList.php";
require_once "Bussineslogic/removeToDoList.php";
require_once "view/viewAdd.php";
require_once "view/viewRemove.php";
require_once "view/viewShow.php";




echo "Aplikasi TodoList" . PHP_EOL;

viewShow();


