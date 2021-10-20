<?php

    // View/tampilan hapus Todolist

    require_once __DIR__ . "/../Helper/Input.php";
    require_once __DIR__ . "/../BussinesLogic/RemoveTodolist.php";


    function viewRemoveTodolist() {
        echo "MENGHAPUS TODO" . PHP_EOL;
        
        $pilihan = input("Nomor Todo yang akan dihapus (x untuk batalkan) ");

        if( $pilihan == "x" ) {
            echo "=====ALERT!! ANDA MEMILIH BATAL MENGHAPUS=====" . PHP_EOL;
        } else {
            $succes = removeTodoList($pilihan);

            if($succes) {
                echo "=====ALERT!! SUKSES MENGHAPUS TODO NOMOR $pilihan======" . PHP_EOL;
            } else {
                echo "=====ALERT!! GAGAl MENGHAPUS TODO NOMOR $pilihan======" . PHP_EOL;
            }
        } 
    }

?>