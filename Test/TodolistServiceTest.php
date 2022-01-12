<?php

require_once "./Entity/Todolist.php";
require_once "./Service/TodolistService.php";
require_once "./Repository/TodolistRepository.php";

use Repository\TodolistRepositoryImpl;
use Service\TodolistServiceimpl;

function testShowTodolist() {

    $todolistRepository = new TodolistRepositoryImpl();
    $todolistService = new TodolistServiceimpl($todolistRepository);

    $todolistService->showTodolist();

}

testShowTodolist();