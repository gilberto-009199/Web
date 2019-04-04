<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Mob'Share-Home</title>
        <link rel="stylesheet" type="text/css" media="screen" href="view/css/melhores_anuncios.css"/>
    </head>
    <body>
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
									<li><a href="?home">Início</a></li>
									<li><a href="?melhores_anuncios">Veículos em Destaques</a></li>
									<li><a href="?principais_anuncios">Veículos à Venda</a></li>
									<li><a href="?como_ganhar_dinheiro">Ganhe Dinheiro</a></li>
									<li><a href="?parceiros">Seja um Parceiro</a></li>
									<li><a href="?sobre">Sobre Nós</a></li>
								</ul>
                            </div>

                            <div class="segura_login">
                                <input type="button" name="btmLogin" id="btnLogin" class="cor_detalhe_site_padrao" value="Login">
                                <input type="button" name="btmCadastro" id="btnCadastro" value="Cadastra-se" class="cor_detalhe_site_padrao">
                            </div>
                        </div>    
                    </nav>
                    <div class="caixa_texto_pages_all">
                        <h1 class="texto_primario_h1">Veículos em Destaques</h1>
                        <p class="texto_secundario_p"> Os Melhores Anúncios Melhores Anúncios Melhores Anúncios</p>
                    </div>
                </div>
            </header>
           <br>
            <div id="conteudo">
                
                <form id="pesquisa">
                    <div id="explicao_como_alugar">
                     <form>
                        <div class="combo_box">
                            <label>Tipo de veículo</label><br>
                            <select>
                                <option>Tipo de veiculo</option>
                            </select>
                        </div>
                        <div class="combo_box">
                            <label>Modelo</label><br>
                            <select>
                                <option>Selecione o modelo</option>
                            </select>
                        </div>
                        <div class="combo_box">
                            <label>Marca</label><br>
                            <select>
                                <option>Selecione a marca</option>
                            </select>
                        </div>
                        <div class="combo_box">
                            <input type="button" class="btn_filtro" value="Filtrar">
                        </div>
                    </form> 
                </div>
                </form>
<!--
                <div id="AnunciosBox" class="action-animated">
                    <div class="anuncio">
                        <div class="img">
                            <img alt="carro" src="view/imagem/possivelcarro.jpg">
                        </div>
                        <div class="titulo"> Corça </div>
                        <div class="desc">
                            <div class="anuncio_dado">
                                <label class="anuncio_atributo">Nome:</label>
                                <label class="anuncio_valor">Gilberto</label>
                            </div>
                            <div class="anuncio_dado">
                                <label class="anuncio_atributo">Periodo:</label>
                                <label class="anuncio_valor"> 10:00 - 16:30 </label>
                            </div>
                            <div class="anuncio_dado">
                                <label class="anuncio_atributo"> Valor:</label>
                                <label class="anuncio_valor"> R$ 22,00 </label>
                            </div>
                        </div>
                        <button onclick="visualizar()">Visualizar </button>
                    </div>                    
-->
                <div id="segura_anuncios">
                    <a href="#">
                        <div class="anuncios">
                                <img class="img_anuncio" src="view/imagem/palio.jpg" alt="Nome veiculo" title="Nome veiculo">
                            <div class="info_anuncio">
                                <p class="nome_veiculo">R$ 30,00/hora</p>

                                <p class="info_veiculo" style="margin-top:10px;">Fiat Palio 4 portas</p>
                                <p class="info_veiculo">2018 | 3000 Km</p>
                                <p class="info_veiculo" >Matheus Vieira | São Paulo-SP</p>

                                <div class="stars_avaliacao">
                                    <img src="view/imagem/star1.png" alt="star">
                                    <img src="view/imagem/star1.png" alt="star"><img src="view/imagem/star1.png" alt="star"><img src="view/imagem/star1.png" alt="star"><img src="view/imagem/star1.png" alt="star">
                                    <p class="percentual_avaliacao">4.5%</p>
                                </div>

                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="anuncios">
                            <img class="img_anuncio" src="view/imagem/i30.jpg" alt="Nome veiculo" title="Nome veiculo">
                            <div class="info_anuncio">
                                <p class="nome_veiculo">R$ 30,00/hora</p>

                                <p class="info_veiculo" style="margin-top:10px;">Hyundai i30</p>
                                <p class="info_veiculo">2018 | 3000 Km</p>
                                <p class="info_veiculo" >Matheus Vieira | São Paulo-SP</p>

                                <div class="stars_avaliacao">
                                    <img src="view/imagem/star1.png" alt="star">
                                    <img src="view/imagem/star1.png" alt="star"><img src="view/imagem/star1.png" alt="star"><img src="view/imagem/star1.png" alt="star"><img src="view/imagem/star1.png" alt="star">
                                    <p class="percentual_avaliacao">4.5%</p>
                                </div>

                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="anuncios">
                            <img class="img_anuncio" src="view/imagem/hb20.jpg" alt="Nome veiculo" title="Nome veiculo">
                            <div class="info_anuncio">
                                <p class="nome_veiculo">R$ 30,00/hora</p>

                                <p class="info_veiculo" style="margin-top:10px;">Hyundai hb20</p>
                                <p class="info_veiculo">2018 | 3000 Km</p>
                                <p class="info_veiculo" >Matheus Vieira | São Paulo-SP</p>

                                <div class="stars_avaliacao">
                                    <img src="view/imagem/star1.png" alt="star">
                                    <img src="view/imagem/star1.png" alt="star"><img src="view/imagem/star1.png" alt="star"><img src="view/imagem/star1.png" alt="star"><img src="view/imagem/star1.png" alt="star">
                                    <p class="percentual_avaliacao">4.5%</p>
                                </div>

                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="anuncios">
                            <img class="img_anuncio" src="view/imagem/gol.jpg" alt="Nome veiculo" title="Nome veiculo">
                            <div class="info_anuncio">
                                <p class="nome_veiculo">R$ 30,00/hora</p>

                                <p class="info_veiculo" style="margin-top:10px;">Volkswagem Gol</p>
                                <p class="info_veiculo">2018 | 3000 Km</p>
                                <p class="info_veiculo" >Matheus Vieira | São Paulo-SP</p>

                                <div class="stars_avaliacao">
                                    <img src="view/imagem/star1.png" alt="star">
                                    <img src="view/imagem/star1.png" alt="star"><img src="view/imagem/star1.png" alt="star"><img src="view/imagem/star1.png" alt="star"><img src="view/imagem/star1.png" alt="star">
                                    <p class="percentual_avaliacao">4.5%</p>
                                </div>

                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="anuncios">
                            <img class="img_anuncio" src="view/imagem/Bicicleta.jpg" alt="Nome veiculo" title="Nome veiculo">
                            <div class="info_anuncio">
                                <p class="nome_veiculo">R$ 30,00/hora</p>

                                <p class="info_veiculo" style="margin-top:10px;">HUPI Whistler</p>
                                <p class="info_veiculo">2018 | 3000 Km</p>
                                <p class="info_veiculo" >Matheus Vieira | São Paulo-SP</p>

                                <div class="stars_avaliacao">
                                    <img src="view/imagem/star1.png" alt="star">
                                    <img src="view/imagem/star1.png" alt="star"><img src="view/imagem/star1.png" alt="star"><img src="view/imagem/star1.png" alt="star"><img src="view/imagem/star1.png" alt="star">
                                    <p class="percentual_avaliacao">4.5%</p>
                                </div>

                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="anuncios">
                            <img class="img_anuncio" src="view/imagem/xj9.jpg" alt="Nome veiculo" title="Nome veiculo">
                            <div class="info_anuncio">
                                <p class="nome_veiculo">R$ 30,00/hora</p>

                                <p class="info_veiculo" style="margin-top:10px;">Yamaha Xj6</p>
                                <p class="info_veiculo">2018 | 3000 Km</p>
                                <p class="info_veiculo" >Matheus Vieira | São Paulo-SP</p>

                                <div class="stars_avaliacao">
                                    <img src="view/imagem/star1.png" alt="star">
                                    <img src="view/imagem/star1.png" alt="star"><img src="view/imagem/star1.png" alt="star"><img src="view/imagem/star1.png" alt="star"><img src="view/imagem/star1.png" alt="star">
                                    <p class="percentual_avaliacao">4.5%</p>
                                </div>

                            </div>
                        </div>
                    </a>
                </div>
                <div id="paginate">
                    <div class="paginate-prev">
                        <i class="fas fa-chevron-left"></i>
                    </div>
                    <div class="paginate-number">
                        <label>1</label>
                        <label>2</label>
                        <label>3</label>
                        <label>4</label>
                    </div>
                    <div class="paginate-next">
                        <i class="fas fa-chevron-right"></i>
                    </div>
                </div>
            </div>
            </div>
    <footer class="cor_site_padrao">
        <!--  Caixas que contem o contato e o navegar pelo site -->
        <div class="newsletter">
            <div class="logo_mob">
                <img src="view/imagem/mob.png" alt="logo">
            </div>
            <div class="segura_newsletter">
                <form id="frmEmail">
                    <h3>Quer receber noticias?</h3>
                    <input type="text" placeholder="Insira seu email" class="input_newsletter">
                    <button class="botao_newsletter">Enviar</button>
                </form>
            </div>
        </div>

        <div class="contatos">
            <div class="segura_mapa_contato">
                <div class="segura_contatos">
                    <h3> Quer entrar em contato? </h3>
                    <div id="telefone_email">
                        <p><strong>Telefone</strong>: 0800 755 855</p>
                        <p><strong>Telefone</strong>: 0800 755 855</p>
                        <p><strong>E-mail</strong>: atendimento@mobshare.com.br</p>
                    </div>
                </div>
                <div class="mapa_site">
                    <h3> Navegue pelo site </h3>
                    <div class="coluna_mapa">
                        <p>Melhores avaliações</p>
                        <p>Termos de uso</p>
                        <p>Principais anúncio</p>
                        <p>Tutorial</p>
                        <p>Tabela de Preço</p>
                    </div>
                    <div class="coluna_mapa">
                        <p>Detalhe dos valores</p>
                        <p>Sobre a empresa</p>
                        <p>F.A.Q</p>
                        <p>Seja um parceio</p>
                        <p>Área administrativa</p>                        
                    </div>
                </div>
            </div>
            <!--  Caixas das redes sociais  -->
            <div class="redes_sociais">
                <p>Siga nós nas redes</p>
                <div class="segura_rs" style="text-align: center;">
                    <img src="view/imagem/f.png">
                    <img src="view/imagem/i.png">
                    <img src="view/imagem/t.png">
                </div>
                <p>Baixe nosso aplicativo na playstore</p>
                <div class="playstore">
                    <img class="center" style="display:block;" src="view/imagem/googleplay.png" width="128">
                </div>
            </div>
        </div>
    </footer>
    <script src="view/js/main.js"></script>
    <script src="view/js/libs/jquery/jquery-3.3.1.js"></script>
    <script src="view/js/pages/melhores_anuncios.js"></script>
    </body>
</html>