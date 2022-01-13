<?php

namespace View {

    use Service\TodolistService;
    use Helper\inputHelper;

    class TodolistView {
        
        private TodolistService $todolistService;

        public function __construct( TodolistService $todolistService)
        {
            $this->todolistService = $todolistService;
        }

        function showTodolist(): void {


            while (true) {
                $this->todolistService->showTodoList();

                echo "MENU" . PHP_EOL;
                echo "1. Tambah" . PHP_EOL;
                echo "2. Hapus" . PHP_EOL;
                echo "x . Keluar" . PHP_EOL;
            
                $pilihan = inputHelper::input("Pilih Angka");
                if($pilihan == "1"){
                    $this->addTodolist();
                } else if($pilihan == "2") {
                    $this->removeTodolist();
                } else if($pilihan == "x") {
                    break;
                } else {
                    echo "Pilih nu aya goblog." . PHP_EOL;
                }
            }
            echo "Sampai jumpa lagi";
        }

        function addTodolist(): void{
            echo "MENAMBAHKAN TODO" . PHP_EOL;

            $todo = inputHelper::input("Todo (x jika ingin batal) ");
        
            if ($todo == "x") {
                echo "Batal menambah todo" . PHP_EOL;
            } else {
                $this->todolistService->addTodolist($todo);
            }
        }

        function removeTodolist() :void{
            echo 'MENGHAPUS TODO' . PHP_EOL;

    $number =inputHelper::input("No. Todo (x untuk keluar");

    if($number == "x") {
        echo "Batal menghapus todo";
    } else {
        $this->todolistService->removeTodoList( $number);
    }
        }
    }
}