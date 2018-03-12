<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0" name="viewport">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="Polícia, Cotidiano e Vídeos para assistir na íntegra, quando e onde quiser. Os últimos e surpreendente acontecimentos na região norte, agora estão ao seu alcance." name="description">
    <meta content="polícia, política, vídeos, tv ecos, cursos, empregos e carreira, interior, cotidiano, Ecos da notícia, ecos, ecosdanoticia, notícias do acre, acre, jornal, jornal online" name="keywords">
    <meta content="Ecos da Notícia - jornal, polícia e TV Ecos" name="app-title">
    <meta content="Ecosdanoticia" name="app-author">
    <meta content="Ecos da Noticia" name="app-name">
    <meta content="Ecos da Notícia - jornal, polícia e TV Ecos" name="apple-mobile-web-app-title">
    <meta content="Ecos da Notícia" name="application-name">
    <meta content="website" property="og:type">
    <meta content="Ecos da Notícia" property="og:site_name">
    <meta content="Ecos da Notícia" property="og:title">
    <meta content="Polícia, Cotidiano e Vídeos para assistir na íntegra, quando e onde quiser. Os últimos e surpreendente acontecimentos na região norte." property="og:description">
    <meta content="http://ecosdanoticia.com.br/" property="og:url">
    <meta content="http://s.ecosdanoticia.com.br/s/assets/images/opengraph_versao1.jpg" property="og:image">
    <meta value="summary" name="twitter:card">
    <meta value="Ecos da Notícia" name="twitter:title">
    <meta value="Polícia, Cotidiano e Vídeos para assistir na íntegra, quando e onde quiser. Os últimos e surpreendente acontecimentos na região norte." name="twitter:description">
    <meta value="http://ecosdanoticia.com.br/" name="twitter:url">
    <meta value="http://s.ecosdanoticia.com.br/s/assets/images/opengraph_versao1.jpg" name="twitter:image">
    <meta content="Ecos da Notícia" itemprop="gapower:channel_title">
    <meta content="Ecos da Notícia" itemprop="gapower:program_title">
    <meta name="author" content="">
    <meta http-equiv="cache-control"   content="no-cache" />
    <meta http-equiv="pragma" content="no-cache" />
    <link rel="shortcut icon" href="<?=PATH_TEMPLATE?>favicon.ico">
    <title><?php if (is_home()){bloginfo('name');}elseif (is_category()){single_cat_title(); echo ' -  ' ; bloginfo('name');}elseif (is_single()){single_post_title();}elseif (is_page()){bloginfo('name'); echo ': '; single_post_title();}else {wp_title('',true);} ?></title>
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,700,600' rel='stylesheet' type='text/css'>
    <link href="<?=PATH_TEMPLATE?>fonts.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?=PATH_TEMPLATE?>style.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?=PATH_TEMPLATE?>jquery.bxslider.css" rel="stylesheet" type="text/css" media="screen" />
    <link rel="shortcut icon" href="<?=PATH_TEMPLATE?>favicon.ico" />
    <!-- jQuery library (served from Google) -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <!-- Livequery library -->
    <script src="https://raw.githubusercontent.com/hazzik/livequery/master/dist/jquery.livequery.min.js"></script>
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <?php $pgh = is_home(); ?>
    <?php wp_head(); ?>
</head>
<body class="limit-width">
  <div class="page-wrapper"><!-- PAGE WRAPPER -->
    <div class="banner-mobile">
        <div class="container">
            <div>
                <img src="ads-336x280.png" width="320" height="50">
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
    <header class="ecos-bar">
        <div class="container">
            <ul class="ecos-bar-menu">
                <li class="item"><a href="#" title="">Anuncie conosco</a></li>
                <li class="item"><a href="#" title="">Jornais Locais</a></li>
                <li class="item"><a href="#" title="">Política</a></li>
                <li class="item"><a href="#" title="">Empregos e carreiras</a></li>
                <li class="item"><a href="http://www.apostilasopcao.com.br/?afiliado=5658" title="Cursos Online">Cursos Online</a></li>
            </ul>
        </div>
    </header>
    <header class="ecos-sub-bar">
        <div class="container">
            <div class="clima-tempo">
                <span class="loading-previsao"><img src="<?=PATH_TEMPLATE?>images/loading.gif" width="32" height="32"><p>Aguarde processando...</p></span>
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
            <div class="busca-ecos">
                <form class="form-ecos" name="form-ecos">
                    <span class="ecos_icons magnifying"></span>
                    <input name="query" class="query" value="" placeholder="Busque notícias na web, no ecos ou google...">
                </form>
            </div>
            <div class="rede-sociais">
                <div class="titulo">Siga-nos</div>
                <div class="iconrede googleplus"><a href="#" target="_blank" title="O Plus Ecos da Notícia/TV Ecos"></a></div>
                <div class="iconrede youtube"><a href="http://www.youtube.com/user/Ecosdanoticiaac" target="_blank" title="Canal Ecos da Notícia/TV Ecos"></a></div>
                <div class="iconrede facebook"><a href="http://www.facebook.com/pages/Ecos-da-Noticia/133609626694117" target="_blank" title="Fan Page Oficial Ecos da Notícia/TV Ecos"></a></div>
                <div class="iconrede twitter"><a href="http://twitter.com/Ecos_da_Noticia" target="_blank" title="Twitter Oficial Ecos da Notícia"></a></div>
            </div>
        </div>
    </header>
    <header class="ecos-header">
        <div class="container">
            <div class="logo">
                <a href="#"><span class="e-logo"></span></a>
            </div>
            <div class="ecos-menu">
                <ul class="menus-list">
                    <li class="menu">
                        <a href="#" class="hover">Últimas</a>
                    </li>
                    <li class="menu">
                        <a href="#" class="hover">Cotidiano</a>
                    </li>
                    <li class="menu">
                        <a href="#" class="hover">Seu Município</a>
                        <span class="ecos_icons arrow_down"></span>
                        <div class="pop-over-menu">
                            <div class="arrow"></div>
                            <ul>
                                <li class="item"><a href="#">Acrelândia</a></li>
                                <li class="item"><a href="#">Assis Brasil</a></li>
                                <li class="item"><a href="#">Brasiléia</a></li>
                                <li class="item"><a href="#">Bujari</a></li>
                                <li class="item"><a href="#">Capixaba</a></li>
                                <li class="item"><a href="#">Cruzeiro do sul</a></li>
                                <li class="item"><a href="#">Epitaciolância</a></li>
                                <li class="item"><a href="#">Feijó</a></li>
                                <li class="item"><a href="#">Jordão</a></li>
                                <li class="item"><a href="#">Mâncio Lima</a></li>
                                <li class="item"><a href="#">Manoel Urbano</a></li>
                                <li class="item"><a href="#">Marechal Thaumaturgo</a></li>
                                <li class="item"><a href="#">Placido de Castro</a></li>
                                <li class="item"><a href="#">Porto Acre</a></li>
                                <li class="item"><a href="#">Rio Branco</a></li>
                                <li class="item"><a href="#">Rodrigues Alves</a></li>
                                <li class="item"><a href="#">Santa Rosa do Purus</a></li>
                                <li class="item"><a href="#">Sena Madureira</a></li>
                                <li class="item"><a href="#">Senador Guiomard</a></li>
                                <li class="item"><a href="#">Tarauacá</a></li>
                                <li class="item"><a href="#">Xapuri</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="menu">
                        <a href="#" class="hover">Fale Conosco</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>