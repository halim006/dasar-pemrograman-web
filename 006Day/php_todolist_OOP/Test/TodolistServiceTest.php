<?php

require_once __DIR__ . "/../Entity/TodoList.php";
require_once __DIR__ . "/../Repository/TodolistRepository.php";
require_once __DIR__ . "/../Service/TodolistService.php";

use Entity\TodoList;
use Service\TodolistServiceImpl;
use Repository\TodolistRepositoryImpl;


function testShowTodolist(): void
{
    $todolistRepository = new TodolistRepositoryImpl();
    $todolistRepository->todolist[1] = new TodoList("test 1");
    $todolistRepository->todolist[2] = new TodoList("test 2");
    $todolistRepository->todolist[3] = new TodoList("ada");
    $todolistService = new TodolistServiceImpl($todolistRepository);

    $todolistService->showTodolist();
}

function testAddTodolist(): void
{
    $todolistRepository = new TodolistRepositoryImpl();

    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistService->addTodolist("Todo 1");
    $todolistService->addTodolist("Todo 2");
    $todolistService->showTodolist();

}function testRemoveTodolist(): void
{
    $todolistRepository = new TodolistRepositoryImpl();

    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistService->addTodolist("Todo 1");
    $todolistService->addTodolist("Todo 2");
    $todolistService->addTodolist("Todo 3");
    $todolistService->addTodolist("Todo 4");
    $todolistService->showTodolist();

    $todolistService->removeTodolist(2);
    $todolistService->showTodolist();
    $todolistService->removeTodolist(5);
    $todolistService->showTodolist();
}

testRemoveTodolist();



