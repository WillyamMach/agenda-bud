<?php 
    require 'config.php';

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $endereco = $_POST['endereco'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];

        $inserirDados = ("INSERT INTO tb_informacoes (inf_nome, inf_endereco, inf_cidade, inf_estado, inf_email, inf_telefone) VALUES ('$nome', '$endereco', '$cidade', '$estado', '$email', $telefone)");
        $resultado = $mysql->prepare($inserirDados);
        $resultado->execute();      

        header("Location: index.php");     

    }

    


