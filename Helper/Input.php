<?php

    // Logic untuk mengambil data yang diinput oleh user
    function input(string $info): string {
        echo "$info : ";
        $result = fgets(STDIN);
        return trim($result);
    }

?>