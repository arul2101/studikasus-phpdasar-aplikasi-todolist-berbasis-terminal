<?php

    require_once __DIR__ . "/Model/Todolist.php";
    require_once __DIR__ . "/BussinesLogic/ShowTodoList.php";
    require_once __DIR__ . "/BussinesLogic/AddTodoList.php";
    require_once __DIR__ . "/BussinesLogic/RemoveTodoList.php";
    require_once __DIR__ . "/View/ViewShowTodoList.php";
    require_once __DIR__ . "/View/ViewAddTodoList.php";
    require_once __DIR__ . "/View/ViewRemoveTodoList.php";
    require_once __DIR__ . "/Helper/Input.php";

    echo "===========================" . PHP_EOL;
    echo "SELAMAT DATANG DI APLIKASI TODOLIST!!" . PHP_EOL;

    // Menjalankan fungsi ViewShowTodoList
    viewShowTodoList();

?>