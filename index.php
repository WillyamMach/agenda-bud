<?php 
    require 'config.php';
    require 'mostrarDados.php';
    

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
                    <form action="inserirDados.php" method="POST">
                        <?php foreach ($infoDb as $info) : ?>
                            <input type="hidden" name="id" value="<?php echo $info['inf_id'] ?>" />
                        <?php endforeach ?>
                        <div class="campoNome">
                            <label for="nome">Nome *</label>
                            <input type="text" name="nome" id="nome" value="" placeholder="Seu Nome" required/>
                        </div>
                        <div class="campoNome">
                            <label for="endereco">Endereço *</label>
                            <input type="text" name="endereco" id="endereco" value="" placeholder="Seu Endereço" required/>
                        </div>
                        <div class="campoNome">
                            <label for="cidade">Cidade *</label>
                            <input type="text" name="cidade" id="cidade" value="" placeholder="Sua Cidade" required/>
                        </div>  
                        <div class="campoNome">
                            <label for="estado">Estado *</label>
                            <input type="text" name="estado" id="estado" value="" placeholder="Seu Estado" required/>
                        </div>
                        <div class="campoNome">
                            <label for="email">E-mail *</label>
                            <input type="email" name="email" id="email" value="" placeholder="exemplo@email.com" required/>
                        </div>
                        <div class="campoNome">
                            <label for="telefone">Telefone *</label>
                            <input type="tel" name="telefone" id="telefone" value="" placeholder="99 99999-9999" required/>
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
                        <?php $id = $info['inf_id']; ?>
                        <td class="colunasDados"><?php echo $info['inf_nome']?></td>
                        <td class="colunasDados"><?php echo $info['inf_endereco']?></td>
                        <td class="colunasDados"><?php echo $info['inf_cidade']?></td>
                        <td class="colunasDados"><?php echo $info['inf_estado']?></td>
                        <td class="colunasDados"><?php echo $info['inf_email']?></td>
                        <td class="colunasDados"><?php echo $info['inf_telefone']?></td>
                        <form action="editarDados.php?id=<?php echo $info['inf_id'] ?>" method="post">
                            <td class="colunasDados">
                                <input type="hidden" name="id" value="<?php echo $info['inf_id']?>">
                                <input type="hidden" name="nome" value="<?php echo $info['inf_nome']?>">
                                <input type="hidden" name="endereco" value="<?php echo $info['inf_endereco']?>">
                                <input type="hidden" name="cidade" value="<?php echo $info['inf_cidade']?>">
                                <input type="hidden" name="estado" value="<?php echo $info['inf_estado']?>">
                                <input type="hidden" name="email" value="<?php echo $info['inf_email']?>">
                                <input type="hidden" name="telefone" value="<?php echo $info['inf_telefone']?>">
                                
                                <button class="botaoEditar">Editar</button>
                            </td>
                        </form>
                        <form action="deletarDados.php?id=<?php echo $info['inf_id'] ?>" method="POST" >
                            <td class="colunasDados">
                                <input type="hidden" name="id"  value="<?php echo $info['inf_id'] ?>" />
                                <button class="botaoRemover" onclick="return confirm('Tem certeza que deseja deletar este registro?')";>Remover</button>         
                            </td> 
                        </form> 
                    </tr>
                    <?php endforeach ?>
                </table>
            </div>
        </section>  
    </div>

<script src="js/botaoremover.js"></script>
</body>
</html>
