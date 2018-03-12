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


    <!-- <header class="ecos-bar"></header> -->


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

    <!-- <section class="modulo-horizontal mod-publicidade-large">
        <div class="container">
            <div class="ads"><img src="ads970x90.png"></div>
        </div>
    </section> -->

    <section class="modulo-horizontal mod-chamada-urgente">
        <div class="container">
            <strong>Prisão</strong>
            <a href="#" target="_blank"><h1>Tecnico judiciário é preso dirigindo visivelmente embriagado e transportando cocaína</h1></a>
        </div>
    </section>
    

    <section class="modulo-horizontal mod-destaque">
        <div class="container">
            <div class="clearfix display-inline-flex">
                
                <div class="container-left">

                    <div class="destaque-rotativo c455x1 pull-left margin-right-25">
                        <div id="carousel-rotativo" class="position-relative">
                            <ul class="mod-rotativo">
                                <li>
                                    <a href="#" title="">
                                        <img src="http://imguol.com/c/noticias/2015/01/22/21jan2015---o-lider-do-pmdb-na-camara-eduardo-cunha-rj-concede-entrevista-ao-uol-em-seu-gabinete-em-brasilia-1421944826547_300x200.jpg">
                                        <div class="titulo">Após protestos, presidente de Burkina Fasso renuncia</div>
                                        <div class="subtitulo">Datena mostra explosão durante incêndio em Santos (SP) </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="">
                                        <img src="http://imguol.com/c/noticias/2015/01/22/21jan2015---o-lider-do-pmdb-na-camara-eduardo-cunha-rj-concede-entrevista-ao-uol-em-seu-gabinete-em-brasilia-1421944826547_300x200.jpg">
                                        <div class="titulo">Após protestos, presidente de Burkina Fasso renuncia</div>
                                        <div class="subtitulo">Datena mostra explosão durante incêndio em Santos (SP) </div>
                                    </a>
                                </li>
                            </ul>
                            <a id="prev-carousel" href="#destaque" data-slide="prev" class="control left"><span class="ecos_icons arrow_left_thin"></span></a>
                            <a id="next-carousel" href="#destaque" data-slide="next" class="control right"><span class="ecos_icons arrow_right_thin"></span></a>
                        </div>
                        <ul>
                            <li class="destaque c455x1">
                                <a href="#" title="">
                                    <img title="" alt="" src="http://imguol.com/c/noticias/2015/01/22/frases-da-semana-papa-1421943962914_300x100.png">
                                    <div class="legenda">Latrocínio a Funcionário</div>
                                    <div class="titulo">Carro roubado é incendiado na estrada Joares Tavara</div>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="c355x1 margin-right-25 pull-left">
                        <ul class="manchete-modulo">
                            <li class="destaque c355x1">
                                <a href="#" title="">
                                    <div class="legenda">Latrocínio a Funcionário</div>
                                    <div class="titulo">Carro roubado é incendiado na estrada Joares Tavara</div>
                                    <div class="subtitulo">Músico é um dos fundadores do Angra, que ensaia para a próxima turnê mundial </div>
                                </a>
                            </li>
                            <li class="destaque c355x1">
                                <a href="#" title="">
                                    <div class="legenda">Atenção</div>
                                    <div class="titulo">TRE abre inscrições para cargo de juiz eleitoral da 10º Zona</div>
                                    <div class="subtitulo">O Tribunal Regional Eleitoral do Acre (TRE-AC) abriu nesta quarta-feira, 23, inscrições para juiz da 10ª Zona</div>
                                </a>
                            </li>

                            <li style="padding: 10px 0;">
                                <div class="c355x1">
                                    <div class="blc-ads">
                                        <img src="ads-336x280.png">
                                    </div>
                                </div>
                            </li>
                            <li class="destaque c355x1">
                                <a href="#" title="">
                                    <div class="legenda">Latrocínio a Funcionário</div>
                                    <div class="titulo">Carro roubado é incendiado na estrada Joares Tavara</div>
                                </a>
                            </li>

                        </ul>
                    </div>

                    <section class="politica c835x1">
                        <div class="">
                            <div class="topo-modulo"><h1>Política</h1></div>
                            <div class="c455x1 pull-left margin-right-25">
                                <ul>
                                    <li class="destaque c455x1">
                                        <a title="" href="#">
                                            <img src="http://contilnetnoticias.com.br/wp-content/uploads/2015/09/nicolau-540x305.jpg" alt="" title="">
                                            <div class="legenda">Derrubado Presidente</div>
                                            <div class="titulo">Nicolau diz que PMDB não poderá impor candidato em Cruzeiro e PP tem candidatura própria</div>
                                        </a>
                                    </li>
                                </ul>
                                <ul>
                                    <li class="destaque c220x1 padding-li-n-top">
                                        <a title="" href="#">
                                            <img src="http://contilnetnoticias.com.br/wp-content/uploads/2015/09/eberosmir-263x147.jpg" alt="" title="">
                                            <div class="legenda">Mudança</div>
                                            <div class="titulo">Eber Machado sinaliza que assumirá direção do PSDC; Osmir nega que tenha sido destituido</div>
                                        </a>
                                    </li>
                                    <li class="destaque c220x1 padding-li-n-top margin-left-15 border-0">
                                        <a title="" href="#">
                                            <img src="http://contilnetnoticias.com.br/wp-content/uploads/2015/09/cameliclaro-263x147.jpg" alt="" title="">
                                            <div class="legenda">Cobrança</div>
                                            <div class="titulo">Cameli cobra da Claro medidas para melhorar o serviço de telefonia móvel no Acre</div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="c355x1 pull-left">
                                <ul>
                                    <li class="destaque c340x200">
                                        <a href="#" title="">
                                            
                                            <div class="legenda">Boa ideia</div>
                                            <div class="titulo">Deputada quer implantação do “Botão do Pânico” no combate à violência contra a mulher</div>
                                        </a>
                                    </li>
                                    <li class="destaque c340x200">
                                        <a href="#" title="">
                                            
                                            <div class="legenda">Lava Jato</div>
                                            <div class="titulo">Oposição define pré-candidatura de Kiefer Roberto à prefeitura de Feijó</div>
                                        </a>
                                    </li>
                                    <li class="destaque c340x200">
                                        <a href="#" title="">
                                            
                                            <div class="legenda">Lava Jato</div>
                                            <div class="titulo">Dez condenados na Lava Jato terão que devolver R$ 66 milhões à Petrobras</div>
                                        </a>
                                    </li>
                                    <li style="padding: 10px 0;">
                                        <div class="c340x1">
                                            <div class="blc-ads text-center">
                                                <img src="ads300x250.gif">
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </section><!-- bloco política -->

                </div><!-- end container left -->

                <aside class="sidebar">
                    
                    <div class="c300x1 pull-left">
                        <div class="blc-ads text-center">
                            <img src="ads300x250.gif">
                        </div>
                        <br/>
                    </div>

                    <div class="c300x1 pull-left">
                        <div class="blc-ads">
                            <img src="ads-300x600.jpg">
                        </div>
                        <br/>
                    </div>

                    <div class="c300x1 pull-left ultimas">
                        <div class="topo-modulo"><h1>Últimas</h1></div>
                        <ul>
                            <li class="destaque c300x1">
                                <a href="#" title="">
                                    <div class="titulo">Deputada quer implantação do “Botão do Pânico” no combate à violência contra a mulher</div>
                                </a>
                            </li>
                            <li class="destaque c300x1">
                                <a href="#" title="">
                                    <div class="titulo">Oposição define pré-candidatura de Kiefer Roberto à prefeitura de Feijó</div>
                                </a>
                            </li>
                            <li class="destaque c300x1">
                                <a href="#" title="">
                                    <div class="titulo">Dez condenados na Lava Jato terão que devolver R$ 66 milhões à Petrobras</div>
                                </a>
                            </li>
                            <li class="destaque c300x1">
                                <a href="#" title="">
                                    <div class="titulo">Deputada quer implantação do “Botão do Pânico” no combate à violência contra a mulher</div>
                                </a>
                            </li>
                            <li class="destaque c300x1">
                                <a href="#" title="">
                                    <div class="titulo">Oposição define pré-candidatura de Kiefer Roberto à prefeitura de Feijó</div>
                                </a>
                            </li>
                            <li class="destaque c300x1">
                                <a href="#" title="">
                                    <div class="titulo">Dez condenados na Lava Jato terão que devolver R$ 66 milhões à Petrobras</div>
                                </a>
                            </li>
                            <li class="destaque c300x1">
                                <a href="#" title="">
                                    <div class="titulo">Dez condenados na Lava Jato terão que devolver R$ 66 milhões à Petrobras</div>
                                </a>
                            </li>
                        </ul>    
                    </div>

                </aside><!-- end sidbar -->

            </div>
        </div>
    </section>

    <section class="modulo-horizontal mod-publicidade-large">
        <div class="container">
            <div class="ads"><img src="ads970x90.png"></div>
        </div>
    </section>

    <section class="blc-tvecos">
        <div class="content">

            <div class="title-tvecos"><h1><small>tv</small>ecos</h1></div>

            <div class="video-inner">
                <div class="container position-relative">
                    <a href="https://www.youtube.com/watch?v=gLa2LxMdAPs" class="playerprincipal pointer pull-left">
                        <div class="shadow"></div>
                        <img title="" alt="" src="http://imguol.com/c/noticias/2015/01/23/23jan2015---pelo-menos-dois-onibus-foram-incendiados-na-manha-dessa-sexta-feira-23-no-bairro-de-mata-escura-em-salvador-ba-de-acordo-com-testemunhas-homens-armados-fizeram-os-passageiros-descer-1422020007174_956x500.jpg">
                        <span class="ecos_icons play"></span>
                        <div class="legenda">Lava Jato</div>
                        <div class="titulo-video">Acidente grave entre moto e trator na BR-364, deixa um com fratura</div>
                    </a>
                    <ul class="item pull-left">
                        <li>
                            <a href="https://www.youtube.com/watch?v=gLa2LxMdAPs" class="playmv" title="">
                                <img title="" alt="" src="http://h.imguol.com/1501/23evertont.jpg">
                                <div class="titulo-item">Homem é preso e acusado de assalto à residência</div>
                                <div class="tempo-item">TV Folha</div>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/watch?v=gLa2LxMdAPs" class="playmv" title="">
                                <img title="" alt="" src="http://h.imguol.com/1501/23evertont.jpg">
                                <div class="titulo-item">Homem é preso e acusado de assalto à residência</div>
                                <div class="tempo-item">Corajoso</div>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/watch?v=gLa2LxMdAPs" class="playmv" title="">
                                <img title="" alt="" src="http://h.imguol.com/1501/23evertont.jpg">
                                <div class="titulo-item">Homem é preso e acusado de assalto à residência</div>
                                <div class="tempo-item">Política</div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="container">
                <div class="publico-tvecos">
                    <div class="title-publico pull-left">Vídeos do público</div>
                    <ul>
                        <li class="destaque c155x1 margin-0">
                            <a href="https://www.youtube.com/watch?v=gLa2LxMdAPs" class="playmv" title="">
                                <img title="" alt="" src="http://imguol.com/c/noticias/2015/01/06/o-cabeleireiro-adao-caetano-da-silva-43-viu-o-movimento-do-seu-salao-cair-apos-tres-dias-sem-agua-em-itu-sp-apesar-de-o-racionamento-ter-oficialmente-acabado-desde-o-dia-5-de-dezembro-em-itu-voltou-a-1420527319959_142x100.jpg">
                                <div class="titulo">Carro roubado é incendiado na estrada Joares Tavara</div>
                            </a>
                        </li>
                        <li class="destaque c155x1 margin-0">
                            <a href="https://www.youtube.com/watch?v=gLa2LxMdAPs" class="playmv" title="">
                                <img title="" alt="" src="http://imguol.com/c/noticias/2015/01/06/o-cabeleireiro-adao-caetano-da-silva-43-viu-o-movimento-do-seu-salao-cair-apos-tres-dias-sem-agua-em-itu-sp-apesar-de-o-racionamento-ter-oficialmente-acabado-desde-o-dia-5-de-dezembro-em-itu-voltou-a-1420527319959_142x100.jpg">
                                <div class="titulo">Carro roubado é incendiado na estrada Joares Tavara</div>
                            </a>
                        </li>
                        <li class="destaque c155x1 margin-0">
                            <a href="https://www.youtube.com/watch?v=gLa2LxMdAPs" class="playmv" title="">
                                <img title="" alt="" src="http://imguol.com/c/noticias/2015/01/06/o-cabeleireiro-adao-caetano-da-silva-43-viu-o-movimento-do-seu-salao-cair-apos-tres-dias-sem-agua-em-itu-sp-apesar-de-o-racionamento-ter-oficialmente-acabado-desde-o-dia-5-de-dezembro-em-itu-voltou-a-1420527319959_142x100.jpg">
                                <div class="titulo">Carro roubado é incendiado na estrada Joares Tavara</div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </section><!-- BLOCO TV ECOS -->

    <div>
        <div class="container">
            <section class="geral c1160x1">
                <div class="">
                    <div class="topo-modulo"><h1>Geral</h1></div>
                    <div class="c455x1 pull-left margin-right-25">
                        <ul>
                            <li class="destaque c455x1">
                                <a title="" href="#">
                                    <img src="http://contilnetnoticias.com.br/wp-content/uploads/2015/09/nicolau-540x305.jpg" alt="" title="">
                                    <div class="legenda">Derrubado Presidente</div>
                                    <div class="titulo">Nicolau diz que PMDB não poderá impor candidato em Cruzeiro e PP tem candidatura própria</div>
                                </a>
                            </li>
                        </ul>
                        <ul>
                            <li class="destaque c220x1 padding-li-n-top">
                                <a title="" href="#">
                                    <img src="http://contilnetnoticias.com.br/wp-content/uploads/2015/09/eberosmir-263x147.jpg" alt="" title="">
                                    <div class="legenda">Mudança</div>
                                    <div class="titulo">Eber Machado sinaliza que assumirá direção do PSDC; Osmir nega que tenha sido destituido</div>
                                </a>
                            </li>
                            <li class="destaque c220x1 padding-li-n-top margin-left-15 border-0">
                                <a title="" href="#">
                                    <img src="http://contilnetnoticias.com.br/wp-content/uploads/2015/09/cameliclaro-263x147.jpg" alt="" title="">
                                    <div class="legenda">Cobrança</div>
                                    <div class="titulo">Cameli cobra da Claro medidas para melhorar o serviço de telefonia móvel no Acre</div>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="c355x1 pull-left">
                        <ul>
                            <li class="destaque c340x200">
                                <a href="#" title="">
                                    
                                    <div class="legenda">Boa ideia</div>
                                    <div class="titulo">Deputada quer implantação do “Botão do Pânico” no combate à violência contra a mulher</div>
                                </a>
                            </li>
                            <li class="destaque c340x200">
                                <a href="#" title="">
                                    
                                    <div class="legenda">Lava Jato</div>
                                    <div class="titulo">Oposição define pré-candidatura de Kiefer Roberto à prefeitura de Feijó</div>
                                </a>
                            </li>
                            <li class="destaque c340x200">
                                <a href="#" title="">
                                    
                                    <div class="legenda">Lava Jato</div>
                                    <div class="titulo">Dez condenados na Lava Jato terão que devolver R$ 66 milhões à Petrobras</div>
                                </a>
                            </li>
                            <li class="destaque c340x200">
                                <a href="#" title="">
                                    
                                    <div class="legenda">Lava Jato</div>
                                    <div class="titulo">Oposição define pré-candidatura de Kiefer Roberto à prefeitura de Feijó</div>
                                </a>
                            </li>
                            <li class="destaque c340x200">
                                <a href="#" title="">
                                    
                                    <div class="legenda">Boa ideia</div>
                                    <div class="titulo">Deputada quer implantação do “Botão do Pânico” no combate à violência contra a mulher</div>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="c300x1 pull-right">
                        <div class="c300x1 pull-left">
                            <div class="blc-ads text-center">
                                <img src="ads300x250.gif">
                            </div>
                            <br/>
                        </div>

                        <div class="c300x1 pull-left">
                            <div class="blc-ads">
                                <img src="ads300x250.gif">
                            </div>
                            <br/>
                        </div>
                    </div>

                </div>
            </section><!-- bloco -->
        </div>
    </div><!-- bloco geral -->

    <section class="modulo-horizontal mod-publicidade-large">
        <div class="container">
            <div class="ads"><img src="ads970x90.png"></div>
        </div>
    </section>

    <div>
        <div class="container">
            <section class="diversos c1160x1">
                <div class="">
                    <div class="esporte c455x1 pull-left margin-right-25">
                        <div class="topo-modulo"><h1>Esporte</h1></div>
                        <ul>
                            <li class="destaque c455x1">
                                <a title="" href="#">
                                    <img src="http://s2.glbimg.com/uPWn8Xsm1qSBbzMsImnRWk6r5Yg=/0x100:2000x1230/690x390/s.glbimg.com/es/ge/f/original/2015/09/18/junior1esditada_3.jpg" alt="" title="">
                                    <div class="legenda">Tudo certo</div>
                                    <div class="titulo">Com salários quitados, Ico decide continuar no comando da Adesg</div>
                                </a>
                            </li>
                        </ul>
                        <ul>
                            <li class="destaque c220x1 padding-li-n-top">
                                <a title="" href="#">
                                    <img src="http://contilnetnoticias.com.br/wp-content/uploads/2015/09/eberosmir-263x147.jpg" alt="" title="">
                                    <div class="legenda">Mudança</div>
                                    <div class="titulo">Eber Machado sinaliza que assumirá direção do PSDC; Osmir nega que tenha sido destituido</div>
                                </a>
                            </li>
                            <li class="destaque c220x1 padding-li-n-top margin-left-15 border-0">
                                <a title="" href="#">
                                    <img src="http://contilnetnoticias.com.br/wp-content/uploads/2015/09/cameliclaro-263x147.jpg" alt="" title="">
                                    <div class="legenda">Cobrança</div>
                                    <div class="titulo">Cameli cobra da Claro medidas para melhorar o serviço de telefonia móvel no Acre</div>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="concursos c355x1 pull-left margin-right-25">
                        <div class="topo-modulo"><h1>Concursos</h1></div>
                        <ul>
                            <li class="destaque c340x200">
                                <a href="#" title="">
                                    
                                    <div class="legenda">Boa ideia</div>
                                    <div class="titulo">Deputada quer implantação do “Botão do Pânico” no combate à violência contra a mulher</div>
                                </a>
                            </li>
                            <li class="destaque c155x1 margin-0">
                                <a href="#" title="">
                                    <img title="" alt="" src="http://imguol.com/c/noticias/2015/01/06/o-cabeleireiro-adao-caetano-da-silva-43-viu-o-movimento-do-seu-salao-cair-apos-tres-dias-sem-agua-em-itu-sp-apesar-de-o-racionamento-ter-oficialmente-acabado-desde-o-dia-5-de-dezembro-em-itu-voltou-a-1420527319959_142x100.jpg">
                                    <div class="legenda">Latrocínio a Funcionário</div>
                                    <div class="titulo">Carro roubado é incendiado na estrada Joares Tavara</div>
                                </a>
                            </li>
                            <li class="destaque c340x200">
                                <a href="#" title="">
                                    
                                    <div class="legenda">Lava Jato</div>
                                    <div class="titulo">Dez condenados na Lava Jato terão que devolver R$ 66 milhões à Petrobras</div>
                                </a>
                            </li>
                            <li style="padding: 10px 0;">
                                <div class="c340x1">
                                    <div class="blc-ads text-center">
                                        <img src="ads300x250.gif">
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="mundo c300x1 pull-left">
                        <div class="topo-modulo"><h1>Mundo</h1></div>
                        <ul>
                            <li class="destaque c155x1 margin-0">
                                <a href="#" title="">
                                    <img title="" alt="" src="http://imguol.com/c/noticias/2015/01/06/o-cabeleireiro-adao-caetano-da-silva-43-viu-o-movimento-do-seu-salao-cair-apos-tres-dias-sem-agua-em-itu-sp-apesar-de-o-racionamento-ter-oficialmente-acabado-desde-o-dia-5-de-dezembro-em-itu-voltou-a-1420527319959_142x100.jpg">
                                    <div class="legenda">Latrocínio a Funcionário</div>
                                    <div class="titulo">Carro roubado é incendiado na estrada Joares Tavara</div>
                                </a>
                            </li>
                            <li class="destaque c155x1 margin-0">
                                <a href="#" title="">
                                    <img title="" alt="" src="http://imguol.com/c/noticias/2015/01/06/o-cabeleireiro-adao-caetano-da-silva-43-viu-o-movimento-do-seu-salao-cair-apos-tres-dias-sem-agua-em-itu-sp-apesar-de-o-racionamento-ter-oficialmente-acabado-desde-o-dia-5-de-dezembro-em-itu-voltou-a-1420527319959_142x100.jpg">
                                    <div class="legenda">Latrocínio a Funcionário</div>
                                    <div class="titulo">Carro roubado é incendiado na estrada Joares Tavara</div>
                                </a>
                            </li>
                            <li class="destaque c300x1">
                                <a href="#" title="">
                                    
                                    <div class="legenda">Lava Jato</div>
                                    <div class="titulo">Dez condenados na Lava Jato terão que devolver R$ 66 milhões à Petrobras</div>
                                </a>
                            </li>
                            <li class="destaque c155x1 margin-0">
                                <a href="#" title="">
                                    <img title="" alt="" src="http://imguol.com/c/noticias/2015/01/06/o-cabeleireiro-adao-caetano-da-silva-43-viu-o-movimento-do-seu-salao-cair-apos-tres-dias-sem-agua-em-itu-sp-apesar-de-o-racionamento-ter-oficialmente-acabado-desde-o-dia-5-de-dezembro-em-itu-voltou-a-1420527319959_142x100.jpg">
                                    <div class="legenda">Latrocínio a Funcionário</div>
                                    <div class="titulo">Carro roubado é incendiado na estrada Joares Tavara</div>
                                </a>
                            </li>
                            <li class="destaque c300x1">
                                <a href="#" title="">
                                    
                                    <div class="legenda">Boa ideia</div>
                                    <div class="titulo">Deputada quer implantação do “Botão do Pânico” no combate à violência contra a mulher</div>
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
            </section><!-- bloco -->
        </div>
    </div><!-- bloco esporte, concursos/empregos e mundo -->

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
            <div class="container"><div class="copy text-right">&copy; 2006-<?=date(Y)?> ECOS DA NOTÍCIA - Jornal, Polícia e TV Ecos. Todos os direitos reservados.</div></div>
        </div>
        <div class="mobile-footer background-color4 color-white">
            <div class="container">
                <p>&copy; 2006-<?=date(Y)?> ECOS DA NOTÍCIA - Jornal, Polícia e TV Ecos. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer><!-- FOOTER -->

    <div id="modalMovie" class="modal fade">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h1 class="modal-title">TV Ecos</h1>
          </div>
          <div class="modal-body">
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

  </div><!-- END PAGE WRAPPER -->
  <script src="jquery-queryParser.min.js"></script>
  <script src="jquery.bxslider.min.js"></script>
  <script src="jquery.autocomplete.min.js"></script>
  <script src="functions.js"></script>
  <script type="text/javascript">
      $(document).ready(function(){
        $('.carousel-inner').bxSlider({auto: true, nextSelector: '#next-carousel',prevSelector: '#prev-carousel', nextText: '',prevText: ''});
        $('.mod-rotativo').bxSlider({auto: true, nextSelector: '#next-carousel',prevSelector: '#prev-carousel', nextText: '',prevText: ''});
      });
  </script>
</body>
</html>