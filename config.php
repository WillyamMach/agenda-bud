<?php
    $mysql = new mysqli('localhost', 'localhost:3306', '', 'db_agenda');
    $mysql->set_charset('utf8');
    
    if(!$mysql){
        echo "Banco não conectado";
    }

    