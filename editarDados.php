<?php 

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $endereco = $_POST['endereco'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $editaDados = prepare("UPDATE tb_informacoes SET inf_nome = '$nome', inf_endereco = '$endereco', inf_cidade = '$cidade', inf_estado = '$estado', inf_email = '$email', inf_telefone = '$telefone' WHERE inf_id = $id ");

        header("Location: index.php");
    }
?>