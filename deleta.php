<?php 
    require 'config.php';

    if($_SERVER["REQUEST_METHOD"] === 'POST'){
        $deletaDados = ("DELETE FROM tb_informacoes WHERE inf_id= $id");
        $preparaRemove = $mysql->prepare($deletaDados);
        $preparaRemove->execute();

        header("Location: index.php");
    }