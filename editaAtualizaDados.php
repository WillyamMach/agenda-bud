<?php 
    require "config.php";
    
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $endereco = $_POST['endereco'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $telefoneMask = str_replace(array("-", "(", ")", " ", "a"), '', $telefone);
        
        // reaproveitando o POST para utilizar update e insert
        if($id){
            
            $query = ("UPDATE tb_informacoes SET inf_nome = '$nome', inf_endereco = '$endereco', inf_cidade = '$cidade', inf_estado = '$estado', inf_email = '$email', inf_telefone = '$telefoneMask' WHERE inf_id = $id");
        } else { 
            $query = ("INSERT INTO tb_informacoes (inf_nome, inf_endereco, inf_cidade, inf_estado, inf_email, inf_telefone) VALUES ('$nome', '$endereco', '$cidade', '$estado', '$email', $telefoneMask)");
        }

        $resultado = $mysql->prepare($query);
        $resultado->execute();  

        header("Location: index.php");

    }
?>