<?php

require_once "./Entity/Todolist.php";
require_once "./Service/TodolistService.php";
require_once "./Repository/TodolistRepository.php";
require_once "./Config/Database.php";

use Entity\TodoList;
use Repository\TodolistRepositoryImpl;
use Service\TodolistServiceimpl;

function testShowTodolist() {

    $connection = \Config\Database::getConnection();

    $todolistRepository = new TodolistRepositoryImpl($connection);
    $todolistService = new TodolistServiceimpl($todolistRepository);

    $todolistService->showTodolist();

}

function testAddTodolist(): void {

    $connection = \Config\Database::getConnection();
    $todolistRepository = new TodolistRepositoryImpl($connection);

    $todolistService = new TodolistServiceimpl($todolistRepository);
    $todolistService->addTodolist("Coba-coba");
    $todolistService->addTodolist("Arga");
    $todolistService->addTodolist("Satya");
    $todolistService->addTodolist("Mulyono");

    // $todolistService->showTodolist();
}

function testRemoveTodolist(): void {

    $connection = \Config\Database::getConnection();

    $todolistRepository = new TodolistRepositoryImpl($connection);

    $todolistService = new TodolistServiceimpl($todolistRepository);

    echo $todolistService->removeTodolist(5) . PHP_EOL;
    echo $todolistService->removeTodolist(1) . PHP_EOL;
    echo $todolistService->removeTodolist(3) . PHP_EOL;

    
}


testShowTodolist();