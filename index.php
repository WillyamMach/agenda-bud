<?php 
    require 'config.php';
    require 'functions.php';

    // $mysql = new Agenda();
    // $mysql->exibirBanco();


?>

<!DOCTYPE html>
<html lang="en">
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
        <h1>Agenda Buddemeyer</h1>
        <section class="dadosInputSection">
            <form>
                <div class="campoNome">
                    <label>Nome *</label>
                    <input type="text" placeholder="Seu Nome" required/>
                </div>

                <div class="campoNome">
                    <label>Endereço *</label>
                    <input type="text" placeholder="Seu Endereço" required/>
                </div>
                <div class="campoNome">
                    <label>Cidade *</label>
                    <input type="text" placeholder="Sua Cidade" required/>
                </div>  
                <div class=" campoNome">
                    <label>Estado *</label>
                    <input type="text" placeholder="Seu Estado" required/>
                </div>
                <div class="campoNome">
                    <label>E-mail *</label>
                    <input type="email" placeholder="exemplo@email.com" required/>
                </div>
                <div class="campoNome">
                    <label for="">Telefone *</label>
                    <input type="tel" name="telefone" placeholder="99 99999-9999" required/>
                </div>
                <input class="campoSalvar" type="submit" value="Salvar">
            </form>
        </section>
            
        <section class="agendaSection"> 
            <h2  class="agendaTitulo">Agenda</h2>
            <div class="pesquisaAgendaDiv">
                <label for="pesquisa"><ion-icon name="search"></ion-icon></label>
                <input type="text" name="pesquisa" id="pesquisa">
            </div>
            <div class="agendaInfoDiv">
                <table style="designColuna tabela">
                    <tr class="designColuna colunasTabela" >
                        <th >Nome</th>
                        <th >Endereço</th>
                        <th >Estado</th>
                        <th >Cidade</th>
                        <th >E-mail</th>
                        <th >Telefone</th> 
                                                                  
                    </tr>
                    <tr class="designColuna colunasDados">
                        <td>will</td>
                        <td>rua antunares</td>
                        <td>Santa Catarina</td>
                        <td>Sao Bento do sul</td>
                        <td>willyamamachado@wil.com</td>
                        <td>4798883-3333</td>
                        <td><button class="botaoEditar">Editar</button></td>
                        <td><button class="botaoRemover">Remover</button></td>            
                    </tr>
                    <tr class="colunasDados">
                        <td>will</td>
                        <td>rua antunares</td>
                        <td>Santa Catarina</td>
                        <td>Sao Bento do sul</td>
                        <td>4798883-3333</td>
                        <td><button class="botaoEditar">Editar</button></td>
                        <td><button class="botaoRemover">Remover</button></td>            
                    </tr>
                </table>
            </div>
        </section>  
    </div>

</body>
</html>
