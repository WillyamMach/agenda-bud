<?php 
    $resultado = $mysql->query("SELECT inf_id, inf_nome, inf_endereco, inf_cidade, inf_estado, inf_email, inf_telefone FROM tb_informacoes");
    $infoDb = $resultado->fetch_all(MYSQLI_ASSOC);

 ?>
