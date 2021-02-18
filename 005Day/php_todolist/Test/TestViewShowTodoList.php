<?php

require_once "../View/ViewShowTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("halim");
addTodoList("sumbogo");
addTodoList("microvac");
addTodoList("eko");

viewShowTodoList();
