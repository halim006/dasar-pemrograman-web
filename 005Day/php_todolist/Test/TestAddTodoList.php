<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";


addTodoList("halim");
addTodoList("sumbogo");
addTodoList("nambah 1");

var_dump($todoList);
