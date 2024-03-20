<?php
    $mysql = new mysqli('localhost', 'root@localhost', '', 'db_agenda');
    $mysql->set_charset('utf8');
    
    if(!$mysql){
        echo "Banco não conectado";
    }

    