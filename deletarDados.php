<?php 
    require ("config.php");

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];

        
        $deletarDados = ("DELETE FROM tb_informacoes WHERE inf_id = $id");
        $resultado = $mysql->prepare($deletarDados);
        $resultado->execute();   

        header("Location: index.php");     
    }

     