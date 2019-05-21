<?php
    require_once("controller/controllerAnuncios.php");
    require_once("model/veiculoClass.php");
    require_once("model/clienteClass.php");

    if(isset($_GET['id_anuncio'])) {
        $id_anuncio = $_GET['id_anuncio'];
    }
   
    // Pegando o Cliente Logado
    if(!isset($_SESSION))session_start();

    if(isset($_POST['logout'])){
        echo "Sucesso";
        $boolean = false;
        session_destroy();
    }
   
    if(isset($_SESSION['cliente'])){
        $cliente = unserialize($_SESSION['cliente']);
        $boolean = true;
    }
    
    $controllerAnuncios = new ControllerAnuncios();
    $listaAnuncios = $controllerAnuncios->getById($id_anuncio);

    // echo "<pre>";
    // var_dump($listaAnuncios->getVeiculo()->getFotos()[0]);

    // var_dump($listaAnuncios->getVeiculo()->getAcessorios()[0]->getNome());

?>
<!DOCTYPE html>
<html>
<head>
    <title>Visualização</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="view/css/visualizar_anuncios.css">
    <script src="view/js/libs/jquery/jquery-3.3.1.js"></script>
    <script src="view/js/notify.js"></script>
    <script src="view/js/libs/jqueryMask/jquery.mask.js"></script>
    <script src="view/js/main.js"></script>       
</head>
<body>
    <div class="container">
        <div class="modal">

        </div>
    </div>
    <div id="principal">
        <header>
            <div id="imgPretaRgb">
                <nav class="cor_site_padrao">
                    <div id="segura_nav">
                        <div id="logo">
                            <img src="view/imagem/mob.png" alt="logo" title="logo">
                        </div>
                        <div class="segura_menu">
                            <ul>
                                <li><a href="?home">INÍCIO</a></li>
                                <li><a href="?melhores_anuncios">VEICULOS EM DESTAQUE</a></li>
                                <li><a href="?principais_anuncios">VEÍCULOS A VENDA</a></li>
                                <li><a href="?como_ganhar_dinheiro">GANHE DINHEIRO</a></li>
                                <li><a href="?parceiros">SEJA UM PARCEIRO</a></li>
                                <li><a href="?sobre">SOBRE NÓS</a></li>
                            </ul>
                        </div>
                        <div class="modoLogin" onload="verificarLogin(<?php $cliente ?>)">
                        <div class="segura_login">
                            <div class="login_cadastro" id="login" style="width: 110px;">
                                <a href="javascript:efetuarLogin()"><img src="view/imagem/login_amarelo.png" alt="login"><p>LOGIN</p></a>
                            </div>
                            <div class="login_cadastro" style="width: 160px;">
                                <a href="javascript:getCadastro()"><img src="view/imagem/downloads2/cadastrar.png" alt="login"><p>CADATRAR-SE</p></a>
                            </div>
                        </div>
                    </div>    
                </nav>
                <div class="caixa_texto_pages_all">
                    <h1 class="texto_primario_h1">F.A.Q</h1>
                    <p class="texto_secundario_p">Dúvidas frequetes</p>
                </div>
            </div>
        </header>
       
        <div class="segura_anuncio">
            <h3 class="titulo_anuncio">Anúncio</h3>
            <div class="linha_info_veiculo">
                <div id="caixa_slide">
                    <img src="view/upload/<?php echo $listaAnuncios->getVeiculo()->getFotos()[0]?>">
                </div>
                <div id="caixa_info">
                    <div id="informacao_carro">
                        <p><strong>Tipo veículo: </strong><?=@ $listaAnuncios->getVeiculo()->getTipo()->getNome() ?></p>
                        <p><strong>Marca: </strong> <?=@ $listaAnuncios->getVeiculo()->getMarca()->getNome() ?></p>
                        <p><strong>Modelo: </strong> <?=@ $listaAnuncios->getVeiculo()->getModelo()->getNome() ?></p>
                        <p><strong>Ano: </strong> <?=@ $listaAnuncios->getVeiculo()->getAno() ?></p>
                        <p><strong>Placa: </strong> <?=@ $listaAnuncios->getVeiculo()->getPlaca() ?></p>
                        <p><strong>Quilometragem:  </strong><?=@ $listaAnuncios->getVeiculo()->getQuilometragem() ?> km</p>
                        <p><strong>Valor hora: R$  </strong><?=@ $listaAnuncios->getValor() ?></p>
                        <p><strong>Avaliação: </strong> 7.8</p>

                    </div>
                    <div id="segura_botao">
                        <input class="botao" type="button" value="Alugar" onclick="chamarSolicitacao(<?=@ $id_anuncio?>, <?=@ $cliente->getId()?> )">
                        <input class="botao" type="button" value="Agendar">
                    </div>

                </div>
            </div>
            <div id="info_anuncio">
                <div id="acessorios">
                    <h3>Acessórios</h3>
                    <?php 

                        foreach($listaAnuncios->getVeiculo()->getAcessorios() as $acessorios){
                           
                    ?>
                        <p><?=@ $acessorios->getNome()?></p>
                    <?php
                        }
                    ?>
                </div>
                <div id="sobre_anuncio">
                <h3>Sobre o anúncio</h3>
                    <div class="linha_sobre">
                       
                        <div class="info_sobre_anuncio">
                            <h4>Dias disponíveis</h4>
                            <p><strong>Data inicial:  </strong><?=@ $listaAnuncios->getDataInicial()?></p>
                            <p><strong>Data final:  </strong><?=@ $listaAnuncios->getDataFinal()?></p>
                        </div> 
                        <div class="info_sobre_anuncio">
                            <h4>Horário</h4>
                            <p><strong>Hora retirada:  </strong><?=@ $listaAnuncios->getHorarioInicio()?></p>
                            <p><strong>Hora entrega:  </strong><?=@ $listaAnuncios->getHorarioTermino()?></p>
                        </div> 
                    </div>   
                    <div class="linha_sobre">
                        <div id="descricao">
                            <h4>Descrição</h4>
                            <p><strong><?=@ $listaAnuncios->getDescricao()?></strong></p>
                        </div>
                        
                    </div>     
                </div>
            </div>
        </div>
    </div>
</body>
</html>