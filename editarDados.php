<?php 
    require "config.php";
    
    $editaDados = ("UPDATE tb_informacoes SET inf_nome = '$nome', inf_endereco = '$endereco', inf_cidade = '$cidade', inf_estado = '$estado', inf_email = '$email', inf_telefone = '$telefone' WHERE inf_id = $id");
    $resultado = $mysql->prepare($editaDados);
    $resultado->execute();  

    header("Location: index.php?id=$_GET['$id']");
?>