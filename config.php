<?php
    $mysql = new mysqli('localhost', 'root@localhost', '', 'db_agenda');
    if(!$mysql){
        echo "Banco não conectado";
    }

    