<?php

namespace Repository {

    use Entity\TodoList;

    interface TodolistRepository {
        function save(TodoList $todolist): void;

        function remove(int $number): bool;

        function findAll(): array;

    }

    class TodolistRepositoryImpl implements TodolistRepository {

        private array $todolist = array();

        function save(TodoList $todoList): void {

        }

        function remove(int $number): bool {
            return true;
        }

        function findAll():array {
            return $this->todolist;
        }
    }

}