<?php

require_once "./Entity/Todolist.php";
require_once "./Service/TodolistService.php";
require_once "./Repository/TodolistRepository.php";

use Entity\TodoList;
use Repository\TodolistRepositoryImpl;
use Service\TodolistServiceimpl;

function testShowTodolist() {

    $todolistRepository = new TodolistRepositoryImpl();
    $todolistRepository->todolist[1] = new TodoList("Arga");

    $todolistService = new TodolistServiceimpl($todolistRepository);

    $todolistService->showTodolist();

}

function testAddTodolist(): void {
    $todolistRepository = new TodolistRepositoryImpl();

    $todolistService = new TodolistServiceimpl($todolistRepository);
    $todolistService->addTodolist("Coba-coba");
    $todolistService->addTodolist("Arga");
    $todolistService->addTodolist("Satya");
    $todolistService->addTodolist("Mulyono");

    $todolistService->showTodolist();
}

function testRemoveTodolist(): void {
    $todolistRepository = new TodolistRepositoryImpl();

    $todolistService = new TodolistServiceimpl($todolistRepository);
    $todolistService->addTodolist("Coba-coba");
    $todolistService->addTodolist("Arga");
    $todolistService->addTodolist("Satya");
    $todolistService->addTodolist("Mulyono");

    $todolistService->showTodolist();
    $todolistService->removeTodolist(1);

    $todolistService->showTodolist();
}
testRemoveTodolist();