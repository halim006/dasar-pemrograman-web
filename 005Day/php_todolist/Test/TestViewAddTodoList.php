<?php

require_once "../View/ViewAddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("halim");
addTodoList("sumbogo");
addTodoList("nambah 1");

viewAddTodoList();

showTodoList();

viewAddTodoList();

showTodoList();