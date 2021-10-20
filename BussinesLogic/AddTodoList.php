<?php

    // Logic untuk menambahkan Todolist
    function addTodoList() {
        global $todolist;
        
        $number = sizeof($todolist) + 1;

        $todolist[$number] = $todo;
    }

?>