<?php

require_once "./Entity/Todolist.php";
require_once "./Helper/InputHelper.php";
require_once "./Repository/TodolistRepository.php";
require_once "./Service/TodolistService.php";
require_once "./View/TodolistView.php";

use Entity\TodoList;
use Repository\TodolistRepositoryImpl;
use Service\TodolistServiceimpl;
use View\TodolistView;

function testViewShowTodolist(): void {

    $todolistRepository = new TodolistRepositoryImpl();
    $todolistService = new TodolistServiceimpl($todolistRepository);
    $todolistView = new TodolistView($todolistService);

    $todolistService->addTodolist("Arga");
    $todolistService->addTodolist("Satya");
    $todolistService->addTodolist("Mulyono");

    $todolistView->showTodolist();
}
function testViewAddTodolist(): void {

    $todolistRepository = new TodolistRepositoryImpl();
    $todolistService = new TodolistServiceimpl($todolistRepository);
    $todolistView = new TodolistView($todolistService);

    $todolistService->addTodolist("Arga");
    $todolistService->addTodolist("Satya");
    $todolistService->addTodolist("Mulyono");

    $todolistView->addTodolist();

    $todolistService->showTodolist();
}

function testViewremoveTodolist(): void {

    $todolistRepository = new TodolistRepositoryImpl();
    $todolistService = new TodolistServiceimpl($todolistRepository);
    $todolistView = new TodolistView($todolistService);

    $todolistService->addTodolist("Arga");
    $todolistService->addTodolist("Satya");
    $todolistService->addTodolist("Mulyono");
    
    $todolistView->showTodolist();

    $todolistView->removeTodolist();

    $todolistService->showTodolist();
}

testViewRemoveTodolist();