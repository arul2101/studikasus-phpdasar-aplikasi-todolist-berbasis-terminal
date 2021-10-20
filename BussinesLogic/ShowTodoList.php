<?php

    // Logic Untuk Menampilkan Todolist
    function showTodoList() {
        global $todolist;

        echo "===========================" . PHP_EOL;
        echo "TODOLIST : " . PHP_EOL;

        foreach( $todolist as $number => $value ) {
            echo "$number. $value" . PHP_EOL;
        }
    }

?>