<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../BusinessLogic/RemoveTodoList.php";


addTodoList("halim");
addTodoList("sumbogo");
addTodoList("Joko");

showTodoList();

removeTodoList(2);

showTodoList();

removeTodoList(1);

showTodoList();

$success = removeTodoList(4);
var_dump($success);

showTodoList();