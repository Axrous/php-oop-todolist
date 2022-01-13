<?php

namespace Service {

    use Entity\TodoList;
    use Repository\TodolistRepository;

interface TodolistService{

        function showTodolist():void;

        function addTodolist(string $todo): void;
        
        function removeTodolist(int $number): void;
    }

    class TodolistServiceimpl implements TodolistService {

        private TodolistRepository $todolistRepository;
        
        public function __construct(TodolistRepository $todolistRepository)
        {
            $this->todolistRepository = $todolistRepository;
        }

        function showTodolist(): void
        {
            echo "TODOLIST" . PHP_EOL;
            $todolist = $this->todolistRepository->findAll();
            foreach ($todolist as $number => $value) {
                echo "$number. ". $value->getTodo() . PHP_EOL;
            }
        }

        function addTodolist(string $todo): void
        {
            $todolist = new TodoList($todo);
            $this->todolistRepository->save($todolist);

            echo "SUKSES MENAMBAHKAN TODOLIST" . PHP_EOL;
        }

        function removeTodolist(int $number): void
        {
            if($this->todolistRepository->remove($number)) {
                echo "BERHASIL MENGHAPUS TODOLIST" . PHP_EOL;
            } else {
                echo "GAGAL MENGAHAPUS TODOLIST" . PHP_EOL;
            }
        }
    }
}