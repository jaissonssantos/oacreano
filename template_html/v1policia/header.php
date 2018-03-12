<?php 
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0" name="viewport">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
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
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href="<?=PATH_TEMPLATE?>fonts.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?=PATH_TEMPLATE?>style.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?=PATH_TEMPLATE?>jquery.bxslider.css" rel="stylesheet" type="text/css" media="screen" />
    <link rel="shortcut icon" href="<?=PATH_TEMPLATE?>favicon.ico" />
    <?php $pgh = is_home(); ?>
    <?php wp_head(); ?>

    <!-- GOOGLE ANALYTICS -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-2725354-7', 'auto');
      ga('send', 'pageview');

    </script>

    <!-- BING WEB MASTER -->
    <meta name="msvalidate.01" content="499B3DE20E5FCC8CBA2418FB299464DD" />

</head>
<body class="limit-width">
  <div class="page-wrapper"><!-- PAGE WRAPPER -->
    <div class="banner-mobile">
        <div class="container">
            <div>
                <?php drawAdsPlace(array('id' => 8), false); ?>
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
                    <li class="menu item"><a href="<?=URL_SITE?>destaque" tile="Manchete">Manchete</a></li>
                    <li class="menu item"><a href="<?=URL_SITE?>policia" tile="Polícia">Polícia</a></li>
                    <li class="menu item"><a href="<?=URL_SITE?>bo" tile="Empregos e carreiras">Boletim de Ocorrência</a></li>
                    <li class="menu item"><a href="<?=URL_PORTAL?>fale-conosco" tile="Fale conosco">Fale conosco</a></li>
                </ul>
            </nav>
            <div class="main-logo">
                <a href="<?=URL_SITE?>"><span class="e-logo"></span></a>
            </div>
        </div>
    </header><!-- MENU MOBILE -->
    <header class="ecos-bar">
        <div class="container">
            <ul class="ecos-bar-menu"></ul>
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
                <style type="text/css">
                    @import url(https://www.google.com/cse/api/branding.css);
                </style>
                <form class="form-ecos cse-branding-form" name="form-ecos" action="http://www.ecospolicia.com.br/pesquisa/" id="cse-search-box">
                    <div id="searchsubmit" class="ecos_icons magnifying"></div>
                    <input class="query" id="s" name="q" value="" placeholder="Busque notícias na web, no ecos ou google..." onkeyup="request(this.value);">
                    <input type="hidden" name="cx" value="partner-pub-9210129523880937:9289575440" />
                    <input type="hidden" name="cof" value="FORID:10" />
                    <input type="hidden" name="ie" value="UTF-8" />
                </form>
            </div>
            <div class="rede-sociais">
                <div class="titulo">Siga-nos</div>
                <div class="iconrede googleplus"><a href="https://plus.google.com/115225068323226679803/posts/biVqxoQcLac" target="_blank" title="O Plus Ecos da Notícia/TV Ecos"></a></div>
                <div class="iconrede youtube"><a href="http://www.youtube.com/user/Ecosdanoticiaac" target="_blank" title="Canal Ecos da Notícia/TV Ecos"></a></div>
                <div class="iconrede facebook"><a href="http://www.facebook.com/pages/Ecos-da-Noticia/133609626694117" target="_blank" title="Fan Page Oficial Ecos da Notícia/TV Ecos"></a></div>
                <div class="iconrede twitter"><a href="http://twitter.com/Ecos_da_Noticia" target="_blank" title="Twitter Oficial Ecos da Notícia"></a></div>
            </div>
        </div>
    </header>
    <header class="ecos-header">
        <div class="container">
            <div class="logo">
                <a href="<?=URL_SITE?>" title="Portal ecos da notícia"><span class="e-logo"></span></a>
            </div>
            <div class="ecos-menu">
                <ul class="menus-list">
                    <li class="menu">
                        <a href="<?=URL_PORTAL?>" title="Ecos da notícia" class="hover">Portal</a>
                    </li>
                    <li class="menu">
                        <a href="<?=URL_SITE?>destaque" title="Manchete" class="hover">Manchete</a>
                    </li>
                    <li class="menu">
                        <a href="<?=URL_SITE?>policia" title="Polícia" class="hover">Polícia</a>
                    </li>
                    <li class="menu">
                        <a href="<?=URL_SITE?>bo" title="B.O" class="hover">Boletim de Ocorrência</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>