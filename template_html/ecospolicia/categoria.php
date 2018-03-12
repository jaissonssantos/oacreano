<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0" name="viewport">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="Filmes, séries e programas de TV para assistir na íntegra, quando e onde quiser. Os melhores canais da TV agora estão ao seu alcance." name="description">
    <meta content="vídeos, tv, televisão, assistir onlime, programas, episódios, temporadas, séries, filmes, canais, Globosat Play, Globosat, Sportv, Globo News, Multishow, GNT, Canal Off, Canal Brasil, Viva, +Globosat, Universal Channel" name="keywords">
    <meta content="Globosat Play - Filmes e TV" name="app-title">
    <meta content="Globosat" name="app-author">
    <meta content="Globosat Play" name="app-name">
    <meta content="Globosat Play - Filmes e TV" name="apple-mobile-web-app-title">
    <meta content="Globosat Play" name="application-name">
    <meta content="website" property="og:type">
    <meta content="Globosat Play" property="og:site_name">
    <meta content="Globosat Play" property="og:title">
    <meta content="Filmes, séries e programas de TV para assistir na íntegra, quando e onde quiser. Os melhores canais da TV agora estão ao seu alcance." property="og:description">
    <meta content="http://globosatplay.globo.com/" property="og:url">
    <meta content="http://s.videos.globo.com/gp/assets/images/opengraph_v3.jpg" property="og:image">
    <meta value="summary" name="twitter:card">
    <meta value="Globosat Play" name="twitter:title">
    <meta value="Filmes, séries e programas de TV para assistir na íntegra, quando e onde quiser. Os melhores canais da TV agora estão ao seu alcance." name="twitter:description">
    <meta value="http://globosatplay.globo.com/" name="twitter:url">
    <meta value="http://s.videos.globo.com/gp/assets/images/opengraph_v3.jpg" name="twitter:image">
    <meta content="Globosat Play" itemprop="gapower:channel_title">
    <meta content="Globosat Play" itemprop="gapower:program_title">
    <meta name="author" content="">
    <meta http-equiv="cache-control"   content="no-cache" />
    <meta http-equiv="pragma" content="no-cache" />
    <link rel="shortcut icon" href="images/favicon.ico">
    <title>Ecos da notícia - jornal, polícia e TV Ecos</title>
    <link href='https://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
    <link href="fonts.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="style.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="jquery.bxslider.css" rel="stylesheet" type="text/css" media="screen" />
    <link rel="shortcut icon" href="favicon.ico" />
    <!-- jQuery library (served from Google) -->
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <!-- bootstrap Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body class="limit-width">

  <div class="page-wrapper"><!-- PAGE WRAPPER -->
    
    <div class="banner-mobile">
        <div class="container">
            <div>
                <img src="ads300x250.gif" width="300" height="250">
            </div>
        </div>
    </div>    


    <header class="ecos-header-mobile">
        <div class="container">
            <div class="menu-toggle">
                <a id="ecos-mobile-toggle" class="ecos_icons list_mobile" href="#"></a>
            </div>
            <nav class="nav-menu-mobile">
                <ul>
                    <li class="menu item"><a href="#">Últimas</a></li>
                    <li class="menu item"><a href="#">Cotidiano</a></li>
                    <li class="menu item"><a href="#">Polícia</a></li>
                    <li class="menu item"><a href="#">Empregos e carreiras</a></li>
                    <li class="menu item"><a href="#">Anuncie conosco</a></li>
                    <li class="menu item"><a href="#">Fale conosco</a></li>
                </ul>
            </nav>
            <div class="main-logo">
                <a href="#"><span class="e-logo"></span></a>
            </div>
        </div>
    </header><!-- MENU MOBILE -->


    
    <header class="ecos-sub-bar">
        <div class="container">
            <div class="logo">
                <a href="#"><span class="e-logo"></span></a>
            </div>
            <div class="busca-ecos">
                <form class="form-ecos" name="form-ecos">
                    <span class="ecos_icons magnifying"></span>
                    <input name="query" class="query" value="" placeholder="Busque notícias na web, no ecos ou google...">
                </form>
            </div>
            <div class="rede-sociais">
                <div class="titulo">Siga-nos</div>
                <div class="iconrede googleplus"><a href="#" title=""></a></div>
                <div class="iconrede youtube"><a href="#" title=""></a></div>
                <div class="iconrede facebook"><a href="#" title=""></a></div>
                <div class="iconrede twitter"><a href="#" title=""></a></div>
            </div>
            <div class="clima-tempo">
                <span class="loading-previsao"><img src="images/loading.gif" width="32" height="32"><p>Aguarde processando...</p></span>
                <div class="containerPrevisaoTempo display-n">
                    <i id="icon-temp" title="Pancadas de chuvas" class="sprite sprite-tempo sprite-tempo-CC"></i>
                    <span class="temp temp-quente">0º</span>
                    <span class="temp temp-frio frio">0º</span>
                    <div class="cidade">
                        <a href="#" id="selecionar-cidade" target="_blank"><p id="city-selecionado" class="pull-left">Rio Branco, AC</p>
                            <span class="ecos_icons arrow_down"></span>
                        </a>
                    </div>
                    <div class="formulario-tempo">
                        <span id="fecha-selecionar-cidade" class="ecos_icons close"></span>
                        <label>Previsão do tempo no seu município</label>
                        <input type="text" name="cidade-tempo" id="cidade-tempo" class="cidade-tempo" value="" placeholder="Ex.: Rio Branco, Cruzeiro do sul...">
                        <button id="search-cidade-tempo" type="botton" value="" class="ecos_icons magnifying"></button> 
                    </div>
                </div>
            </div>
        </div>
    </header>

    
    <header class="ecos-header">
        <div class="container">
            <div class="ecos-menu">
                <ul class="menus-list">
                    <li class="menu">
                        <a href="#" class="hover active">Home</a>
                    </li>
                    <li class="menu">
                        <a href="#" class="hover">Polícia</a>
                    </li>
                    <li class="menu">
                        <a href="#" class="hover">Acre</a>
                    </li>
                    <li class="menu">
                        <a href="#" class="hover">Vídeos</a>
                    </li>
                    <li class="menu">
                        <a href="#" class="hover">Fale Conosco</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>


    <section class="conteudo">
        <div class="container">
            <div class="conteudo-categoria c835x1 pull-left">
                <header>
                    <h1>Polícia</h1>
                </header>
                <ul class="itens-categoria">
                    <li>
                        <a title="Polícia Militar prende dupla em flagrante que agiam no bairro Tropical" href="http://www.ecosdanoticia.net/policia/2015/01/policia-militar-prende-em-flagrante-dupla-de-assaltantes-que-agiam-bairro-tropical.html">
                            <div class="data-artigo"><p>30 jan<br>2015</p></div>
                            <div class="imagem-artigo"> 
                                <img alt="" src="https://www.ecosdanoticia.net/wp-content/uploads/2015/01/unnamed9-140x105.jpg">
                            </div>                     
                            <div class="descricao-artigo">
                                <div class="redacao-artigo">
                                    <strong>Por Redação/Ecos da notícia</strong>
                                </div>
                                <h1>Polícia Militar prende dupla em flagrante que agiam no bairro Tropical</h1>
                                <span class="subtitulo-artigo"></span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a title="Polícia Militar prende dupla em flagrante que agiam no bairro Tropical" href="http://www.ecosdanoticia.net/policia/2015/01/policia-militar-prende-em-flagrante-dupla-de-assaltantes-que-agiam-bairro-tropical.html">
                            <div class="data-artigo"><p>30 jan<br>2015</p></div>
                            <div class="imagem-artigo"> 
                                <img alt="" src="https://www.ecosdanoticia.net/wp-content/uploads/2015/01/unnamed9-140x105.jpg">
                            </div>                     
                            <div class="descricao-artigo">
                                <div class="redacao-artigo">
                                    <strong>Por Redação/Ecos da notícia</strong>
                                </div>
                                <h1>Polícia Militar prende dupla em flagrante que agiam no bairro Tropical</h1>
                                <span class="subtitulo-artigo"></span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a title="Polícia Militar prende dupla em flagrante que agiam no bairro Tropical" href="http://www.ecosdanoticia.net/policia/2015/01/policia-militar-prende-em-flagrante-dupla-de-assaltantes-que-agiam-bairro-tropical.html">
                            <div class="data-artigo"><p>30 jan<br>2015</p></div>
                            <div class="imagem-artigo"> 
                                <img alt="" src="https://www.ecosdanoticia.net/wp-content/uploads/2015/01/unnamed9-140x105.jpg">
                            </div>                     
                            <div class="descricao-artigo">
                                <div class="redacao-artigo">
                                    <strong>Por Redação/Ecos da notícia</strong>
                                </div>
                                <h1>Polícia Militar prende dupla em flagrante que agiam no bairro Tropical</h1>
                                <span class="subtitulo-artigo"></span>
                            </div>
                        </a>
                    </li>
                </ul>

            </div><!-- CONTEUDO CATEGORIA -->
            
            <aside class="conteudo-auxiliar c300x1 pull-right">
                <div class="c300x1 pull-left">

                    <div class="c300x1 pull-left">
                        <div class="blc-ads text-center">
                            <img src="ads300x250.gif">
                        </div>
                        <br/>
                    </div>

                    <section class="c300x1 ultimas-noticias pull-left">
                        <div class="topo-modulo"><h1>Últimas</h1></div>
                        <ul class="chamadas">
                            <li class="destaque c155x1 margin-0">
                                <a href="#" title="">
                                    <img title="" alt="" src="http://imguol.com/c/noticias/2015/01/06/o-cabeleireiro-adao-caetano-da-silva-43-viu-o-movimento-do-seu-salao-cair-apos-tres-dias-sem-agua-em-itu-sp-apesar-de-o-racionamento-ter-oficialmente-acabado-desde-o-dia-5-de-dezembro-em-itu-voltou-a-1420527319959_142x100.jpg">
                                    <div class="legenda">Latrocínio a Funcionário</div>
                                    <div class="titulo">Carro roubado é incendiado na estrada Joares</div>
                                </a>
                            </li>
                            <li class="destaque c155x1 margin-0">
                                <a href="#" title="">
                                    <img title="" alt="" src="http://imguol.com/c/noticias/2015/01/06/o-cabeleireiro-adao-caetano-da-silva-43-viu-o-movimento-do-seu-salao-cair-apos-tres-dias-sem-agua-em-itu-sp-apesar-de-o-racionamento-ter-oficialmente-acabado-desde-o-dia-5-de-dezembro-em-itu-voltou-a-1420527319959_142x100.jpg">
                                    <div class="legenda">Latrocínio a Funcionário</div>
                                    <div class="titulo">Carro roubado é incendiado na estrada Joares</div>
                                </a>
                            </li>
                            <li class="destaque c155x1 margin-0">
                                <a href="#" title="">
                                    <img title="" alt="" src="http://imguol.com/c/noticias/2015/01/06/o-cabeleireiro-adao-caetano-da-silva-43-viu-o-movimento-do-seu-salao-cair-apos-tres-dias-sem-agua-em-itu-sp-apesar-de-o-racionamento-ter-oficialmente-acabado-desde-o-dia-5-de-dezembro-em-itu-voltou-a-1420527319959_142x100.jpg">
                                    <div class="legenda">Latrocínio a Funcionário</div>
                                    <div class="titulo">Carro roubado é incendiado na estrada Joares</div>
                                </a>
                            </li>
                            <li class="destaque c155x1 margin-0">
                                <a href="#" title="">
                                    <img title="" alt="" src="http://imguol.com/c/noticias/2015/01/06/o-cabeleireiro-adao-caetano-da-silva-43-viu-o-movimento-do-seu-salao-cair-apos-tres-dias-sem-agua-em-itu-sp-apesar-de-o-racionamento-ter-oficialmente-acabado-desde-o-dia-5-de-dezembro-em-itu-voltou-a-1420527319959_142x100.jpg">
                                    <div class="legenda">Latrocínio a Funcionário</div>
                                    <div class="titulo">Carro roubado é incendiado na estrada Joares</div>
                                </a>
                            </li>
                            <li class="destaque c155x1 margin-0">
                                <a href="#" title="">
                                    <img title="" alt="" src="http://imguol.com/c/noticias/2015/01/06/o-cabeleireiro-adao-caetano-da-silva-43-viu-o-movimento-do-seu-salao-cair-apos-tres-dias-sem-agua-em-itu-sp-apesar-de-o-racionamento-ter-oficialmente-acabado-desde-o-dia-5-de-dezembro-em-itu-voltou-a-1420527319959_142x100.jpg">
                                    <div class="legenda">Latrocínio a Funcionário</div>
                                    <div class="titulo">Carro roubado é incendiado na estrada Joares</div>
                                </a>
                            </li>
                        </ul>
                    </section>

                    <div class="c300x1 pull-left">
                        <div class="blc-ads text-center">
                            <img src="ads300x250.gif">
                        </div>
                        <br/>
                    </div>

                    <section class="publicidade pull-left">
                        <div class="legenda-publicidade pull-right">Publicidade</div>
                        <div class="blc-publicidade">
                            <img src="ads-300x600.jpg" width="300" height="600">
                        </div>
                    </section>


                </div>
            </aside><!-- CONTEUDO AUXILIAR -->
        </div>
    </section><!-- CONTEUDO -->

    <footer>
        <div class="site-map background-color4">
            <nav class="container">
                <ul class="container">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Últimas</a></li>
                    <li><a href="#">Cotidiano</a></li>
                    <li><a href="#">Seu Município</a></li>
                    <li><a href="#">Polícia</a></li>
                    <li><a href="#">Empregos e Carreiras</a></li>
                </ul>
            </nav>
        </div>
        <div class="sub-bloco">
            <div class="container">
                <nav>
                    <ul>
                        <li><a href="#">Anuncie conosco</a></li>
                        <li><a href="#">Jornais Online</a></li>
                        <li><a href="#">Vídeos/TV Ecos</a></li>
                        <li><a href="#">Política</a></li>
                        <li><a href="#">Saúde</a></li>
                        <li><a href="#">Empregos e oportunidade</a></li>
                    </ul>
                </nav>
                <nav>
                    <ul>
                        <li><a href="#">Envie sua notícias</a></li>
                        <li><a href="#">Trabalhe conosco</a></li>
                        <li><a href="#">Fan Page/Oficial</a></li>
                        <li><a href="#">Cursos Online</a></li>
                    </ul>
                </nav>
                <nav>
                    <ul>
                        <li><a href="#">Quem somos</a></li>
                        <li><a href="#">Fale conosco</a></li>
                        <li><a href="#">Expediente</a></li>
                        <li><a href="#">Política de privacidade</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="copyright">
            <div class="container"><div class="copy text-right">&copy; 2007-2015 ECOS DA NOTÍCIA - Jornal, Polícia e TV Ecos. Todos os direitos reservados. <a href="http://www.tupahost.com" target="_blank">Hospedagem: TUPA Host</a></div></div>
        </div>
        <div class="mobile-footer background-color4 color-white">
            <div class="container">
                <p>&copy; 2007-<?=date(Y)?> ECOS DA NOTÍCIA - Jornal, Polícia e TV Ecos. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer><!-- FOOTER -->

  </div><!-- END PAGE WRAPPER -->

  <script src="jquery.autocomplete.min.js"></script>
  <script src="functions.js"></script>

</body>
</html>