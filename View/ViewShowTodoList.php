<?php

    // View/tampilan daftar-daftar todolist yang sudah ditambah atau dihapus

    require_once __DIR__ . "/../Model/Todolist.php";
    require_once __DIR__ . "/../BussinesLogic/ShowTodoList.php";
    require_once __DIR__ . "/../View/ViewAddTodolist.php";
    require_once __DIR__ . "/../View/ViewRemoveTodolist.php";
    require_once __DIR__ . "/../Helper/Input.php";

    function viewShowTodolist() {
        while(true) {
            showTodoList();

            echo "===========================" . PHP_EOL;
            echo "MENU" . PHP_EOL;
            echo "1. Tambah Todo" . PHP_EOL;
            echo "2. Hapus Todo" . PHP_EOL;
            echo "x. Keluar" . PHP_EOL;
            echo "===========================" . PHP_EOL;

            $pilihan = input("Pilih");

            if( $pilihan == "1" ) {
                viewAddTodolist();
            }else if( $pilihan == "2" ) {
                viewRemoveTodolist();
            }else if( $pilihan == "x" ) {
                break;
            }else{
                echo "=====WARNING!! PILIHAN TIDAK DIMENGERTI!!=====" . PHP_EOL;
            }
        }

        echo "Sampai Jumpa Kembali!" . PHP_EOL;
    }


?>