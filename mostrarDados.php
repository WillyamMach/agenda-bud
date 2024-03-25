<?php 
    require 'config.php';

    $resultado = $mysql->query("SELECT inf_id, inf_nome, inf_endereco, inf_cidade, inf_estado, inf_email, concat('(',substr(inf_telefone,1,2),') ',substr(inf_telefone,3,5),'-',substr(inf_telefone,8)) FROM tb_informacoes");
    $infoDb = $resultado->fetch_all(MYSQLI_ASSOC);

 ?>