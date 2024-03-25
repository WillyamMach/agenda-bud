<?php 
    require 'config.php';
    require 'mostrarDados.php';

    $id = null;
    $nome = null;
    $endereco = null;
    $cidade = null;
    $estado = null;
    $email = null;
    $telefone = null;

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        
        foreach($infoDb as $info){
            if($id === $info['inf_id']){
                $nome = $info['inf_nome'];
                $endereco = $info['inf_endereco'];
                $cidade = $info['inf_cidade'];
                $estado = $info['inf_estado'];
                $email = $info['inf_email'];
                $telefone = $info["concat('(',substr(inf_telefone,1,2),') ',substr(inf_telefone,3,5),'-',substr(inf_telefone,8))"];
            }
        }
    }

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
                    <form action="editaAtualizaDados.php" method="POST">                
                        <input type="hidden" name="id" value="<?php echo $id;?>" />

                        <div class="campoNome">
                            <label for="nome">Nome *</label>
                            <input type="text" name="nome" id="nome" value="<?php echo $nome; ?>" placeholder="Seu Nome" required/>
                        </div>
                        <div class="campoNome">
                            <label for="endereco">Endereço *</label>
                            <input type="text" name="endereco" id="endereco" value="<?php echo $endereco; ?>" placeholder="Seu Endereço" required/>
                        </div>
                        <div class="campoNome">
                            <label for="cidade">Cidade *</label>
                            <input type="text" name="cidade" id="cidade" value="<?php echo $cidade; ?>" placeholder="Sua Cidade" required/>
                        </div>  
                        <div class="campoNome">
                            <label for="estado">Estado *</label>
                            <input type="text" name="estado" id="estado" value="<?php echo $estado; ?>" placeholder="Seu Estado" required/>
                        </div>
                        <div class="campoNome">
                            <label for="email">E-mail *</label>
                            <input type="email" name="email" id="email" value="<?php echo $email; ?>" placeholder="exemplo@email.com" required/>
                        </div>
                        <div class="campoNome">
                            <label for="telefone">Telefone *</label><label></label>
                            <input type="tel" name="telefone" id="telefone" value="<?php echo $telefone; ?>"
                            placeholder="(47)99999-0000" onkeyup="somenteNumeros(this)" onkeydown="adicionarMascara()" minlength="11" maxlength="17" required/>
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
                        <td class="colunasDados"><?php echo $info["concat('(',substr(inf_telefone,1,2),') ',substr(inf_telefone,3,5),'-',substr(inf_telefone,8))"]?></td>
                        <td class="colunasDados">
                            <a href="index.php?id=<?php echo $info['inf_id'];?>"><button class="botaoEditar">Editar</button></a>         
                        </td>    
                        <form action="deletarDados.php?id=<?php echo $info['inf_id'] ?>" method="POST" >
                            <td class="colunasDados">
                                <input type="hidden" name="id" value="<?php echo $info['inf_id'] ?>" />
                                <button class="botaoRemover" onclick="return confirm('Confirmar Delete?')";>Remover</button>         
                            </td> 
                        </form> 
                    </tr>
                    <?php endforeach ?>
                </table>
            </div>
        </section>  
    </div>

    <script src="js/index.js"></script>
</body>
</html>
