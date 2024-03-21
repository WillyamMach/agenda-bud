<?php 
    include 'config.php';
    require 'functions.php';
    require 'redirecionar.php';

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="css/styles.css">
    <!-- fonte -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <!-- ionicon -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <title>Agenda - Buddemeyer</title>
</head>
<body>  
    <div class="layout">
        <section class="dadosInputSection">
            <form action="redirecionar.php" method="POST">
                <div class="campoNome">
                    <label for="nome">Nome *</label>
                    <input type="text" name="nome" id="nome" placeholder="Seu Nome" required/>
                </div>
                <div class="campoNome">
                    <label for="endereco">Endereço *</label>
                    <input type="text" name="endereco" id="endereco" placeholder="Seu Endereço" required/>
                </div>
                <div class="campoNome">
                    <label for="cidade">Cidade *</label>
                    <input type="text" name="cidade" id="cidade" placeholder="Sua Cidade" required/>
                </div>  
                <div class="campoNome">
                    <label for="estado">Estado *</label>
                    <input type="text" name="estado" id="estado" placeholder="Seu Estado" required/>
                </div>
                <div class="campoNome">
                    <label for="email">E-mail *</label>
                    <input type="email" name="email" id="email" placeholder="exemplo@email.com" required/>
                </div>
                <div class="campoNome">
                    <label for="telefone">Telefone *</label>
                    <input type="tel" name="telefone" id="telefone" placeholder="99 99999-9999" required/>
                </div>
                <input class="campoSalvar" type="submit" value="Salvar">
            </form>
        </section>   
        <section class="agendaSection"> 
            <h2  class="agendaTitulo">Agenda</h2>
            <div class="agendaInfoDiv">
                <table style="tabela">
                    <tr class="colunasTabela" >
                        <th>Nome</th>
                        <th>Endereço</th>
                        <th>Estado</th>
                        <th>Cidade</th>
                        <th>E-mail</th>
                        <th>Telefone</th> 
                        <th>Editar</th>
                        <th>Remover</th>                                 
                    </tr>
                    <?php foreach($infoDb as $info) : ?>
                    <tr>
                        <td class="colunasDados"><?php echo $info['inf_nome']?></td>
                        <td class="colunasDados"><?php echo $info['inf_endereco']?></td>
                        <td class="colunasDados"><?php echo $info['inf_cidade']?></td>
                        <td class="colunasDados"><?php echo $info['inf_estado']?></td>
                        <td class="colunasDados"><?php echo $info['inf_email']?></td>
                        <td class="colunasDados"><?php echo $info['inf_telefone']?></td>
                        <td class="colunasDados"><input type="submit" name="edita" value="Editar" class="botaoEditar"></td>
                        <form action="deleta.php" method="POST">
                            <td class="colunasDados"><input type="submit" name="remove" value="Remover" class="botaoRemover"/></td> 
                        </form> 
                    </tr>
                    <?php endforeach ?>
                </table>
            </div>
        </section>  
    </div>

</body>
</html>
