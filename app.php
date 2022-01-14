<?php

use Repository\TodolistRepositoryImpl;
use Service\TodolistServiceimpl;
use View\TodolistView;

require_once "Entity/Todolist.php";
require_once "Helper/InputHelper.php";
require_once "Repository/TodolistRepository.php";
require_once "Service/TodolistService.php";
require_once "View/TodolistView.php";
require_once "Config/Database.php";

echo "Aplikasi Todolist" . PHP_EOL;

$connection = \Config\Database::getConnection();

$todolistRepository = new TodolistRepositoryImpl($connection);
$todolistService = new TodolistServiceimpl($todolistRepository);
$todolistView = new TodolistView($todolistService);

$todolistView->showTodolist();