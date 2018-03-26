<?php include (TEMPLATEPATH . '/utils.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0" name="viewport">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="política, polícia, vídeos, evangélico, cotidiano, oacreano, jornalismo acreano, acreano, notícias do acre, acre, alto acre, baixo acre, purus, juruá, tarauaca envira" name="keywords">
    <meta content="OAcreano - jornalismo acrenao, política e polícia" name="app-title">
    <meta content="oacreano" name="app-author">
    <meta content="oacreano" name="app-name">
    <meta content="OAcreano - jornalismo acrenao, política e polícia" name="apple-mobile-web-app-title">
    <meta content="OAcreano" name="application-name">
    <meta name="author" content="oacreano">
    <meta http-equiv="cache-control"   content="no-cache" />
    <meta http-equiv="pragma" content="no-cache" />
    <link rel="shortcut icon" href="<?=PATH_TEMPLATE?>favicon.ico">
    <title><?php if (is_home()){bloginfo('name');}elseif (is_category()){single_cat_title(); echo ' -  ' ; bloginfo('name');}elseif (is_single()){single_post_title();}elseif (is_page()){bloginfo('name'); echo ': '; single_post_title();}else {wp_title('',true);} ?></title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700" 
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700" 
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
        rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" 
        rel="stylesheet">
    <link href="<?=PATH_TEMPLATE?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=PATH_TEMPLATE?>assets/css/hidden.css" rel="stylesheet">
    <link href="<?=PATH_TEMPLATE?>style.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?=PATH_TEMPLATE?>favicon.ico" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-115987227-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-115987227-1');
    </script>

    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

    <script async='async' src='https://www.googletagservices.com/tag/js/gpt.js'></script>
    <script>
      var googletag = googletag || {};
      googletag.cmd = googletag.cmd || [];
    </script>

    <script>
      googletag.cmd.push(function() {
        googletag.defineSlot('/36847465/01.01.BLOCO', [[728, 90], [970, 90]], 'div-gpt-ad-1522083229326-0').addService(googletag.pubads());
        googletag.pubads().enableSingleRequest();
        googletag.pubads().collapseEmptyDivs();
        googletag.enableServices();
      });
    </script>

    <script>
      googletag.cmd.push(function() {
        googletag.defineSlot('/36847465/01.03.BLOCO', [300, 600], 'div-gpt-ad-1522094856820-0').addService(googletag.pubads());
        googletag.pubads().enableSingleRequest();
        googletag.enableServices();
      });
    </script>

    <script>
      googletag.cmd.push(function() {
        googletag.defineSlot('/36847465/01.02.BLOCO', [300, 250], 'div-gpt-ad-1522097272097-0').addService(googletag.pubads());
        googletag.pubads().enableSingleRequest();
        googletag.pubads().collapseEmptyDivs();
        googletag.enableServices();
      });
    </script>

    <script>
      googletag.cmd.push(function() {
        googletag.defineSlot('/36847465/01.04.BLOCO', [[728, 90], [970, 90]], 'div-gpt-ad-1522097772449-0').addService(googletag.pubads());
        googletag.pubads().enableSingleRequest();
        googletag.pubads().collapseEmptyDivs();
        googletag.enableServices();
      });
    </script>


    <?php $pgh = is_home(); ?>
    <?php wp_head(); ?>
</head>
<body>

    <header class="oac-header">
        <section class="oac-topo">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="header-align-items-center text-left">
                        <div class="oac-menu">
                            <a id="menu-aberto" href="#">
                                <i class="material-icons md-36 md-light">menu</i>
                            </a>
                            <a id="menu-fechado" href="#" class="hidden-xs-up">
                                <i class="material-icons md-36 md-light">close</i>
                            </a>
                            <div class="m-ver-mais hidden-xs-up">
                                <ul id="menu-lista" class="dropdown">
                                    <li class="m-item-editoria">
                                        <a href="<?=URL_SITE?>">Capa</a>
                                    </li>
                                    <li class="m-item-editoria">
                                        <a href="<?=URL_SITE?>c/ultimas">Últimas notícias</a>
                                    </li>
                                    <li class="m-item-editoria">
                                        <a href="<?=URL_SITE?>c/cotidiano">Cotidiano</a>
                                    </li>
                                    <li class="m-item-editoria">
                                        <a href="<?=URL_SITE?>c/evangelicas">Evangélicas</a>
                                    </li>
                                    <li class="m-item-editoria">
                                        <a href="<?=URL_SITE?>c/politica">Política</a>
                                    </li>
                                    <li class="m-item-editoria">
                                        <a href="<?=URL_SITE?>c/videos">Vídeos</a>
                                    </li>
                                    <li class="m-item-editoria m-ico-dropdown">
                                        <a id="sub" href="javascript:;">Baixo Acre</a>
                                        <ul class="sub-dropdown sub-dropdown-open">
                                            <li><a href="<?=URL_SITE?>c/acrelandia">Acrelândia</a></li>
                                            <li><a href="<?=URL_SITE?>c/bujari">Bujari</a></li>
                                            <li><a href="<?=URL_SITE?>c/capixaba">Capixaba</a></li>
                                            <li><a href="<?=URL_SITE?>c/placido-de-castro">Plácido de Castro</a></li>
                                            <li><a href="<?=URL_SITE?>c/porto-acre">Porto Acre</a></li>
                                            <li><a href="<?=URL_SITE?>c/rio-branco">Rio Branco</a></li>
                                            <li><a href="<?=URL_SITE?>c/senador-guiomard">Senador Guiomard</a></li>
                                        </ul>
                                    </li>
                                    <li class="m-item-editoria m-ico-dropdown">
                                        <a id="sub" href="javascript:;">Alto Acre</a>
                                        <ul class="sub-dropdown">
                                            <li><a href="<?=URL_SITE?>c/assis-brasil">Assis Brasil</a></li>
                                            <li><a href="<?=URL_SITE?>c/brasileia">Brasiléia</a></li>
                                            <li><a href="<?=URL_SITE?>c/epitaciolandia">Epitaciolândia</a></li>
                                            <li><a href="<?=URL_SITE?>c/xapuri">Xapuri</a></li>
                                        </ul>
                                    </li>
                                    <li class="m-item-editoria m-ico-dropdown">
                                        <a id="sub" href="javascript:;">Purus</a>
                                        <ul class="sub-dropdown">
                                            <li><a href="<?=URL_SITE?>c/manoel-urbano">Manoel Urbano</a></li>
                                            <li><a href="<?=URL_SITE?>c/santa-rosa-do-purus">Santa Rosa do Purus</a></li>
                                            <li><a href="<?=URL_SITE?>c/sena-madureira">Sena Madureira</a></li>
                                        </ul>
                                    </li>
                                    <li class="m-item-editoria m-ico-dropdown">
                                        <a id="sub" href="javascript:;">Tarauacá/Envira</a>
                                        <ul class="sub-dropdown">
                                            <li><a href="<?=URL_SITE?>c/tarauaca">Tarauacá</a></li>
                                            <li><a href="<?=URL_SITE?>c/feijo">Feijó</a></li>
                                            <li><a href="<?=URL_SITE?>c/jordao">Jordão</a></li>
                                        </ul>
                                    </li>
                                    <li class="m-item-editoria m-ico-dropdown">
                                        <a id="sub" href="javascript:;">Juruá</a>
                                        <ul class="sub-dropdown">
                                            <li><a href="<?=URL_SITE?>c/cruzeiro-do-sul">Cruzeiro do sul</a></li>
                                            <li><a href="<?=URL_SITE?>c/mancio-lima">Mâncio lima</a></li>
                                            <li><a href="<?=URL_SITE?>c/rodrigues-alves">Rodrigues Alves</a></li>
                                            <li><a href="<?=URL_SITE?>c/marechal-thaumaturgo">Marechal Thaumaturgo</a></li>
                                            <li><a href="<?=URL_SITE?>c/porto-walter">Porto Walter</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="oac-logotipo">
                        <a href="<?=URL_SITE?>">
                            <img class="oac-ic_full" src="<?=PATH_TEMPLATE?>assets/images/ic_oacreano.svg">
                            <img class="oac-ic_mobile" src="<?=PATH_TEMPLATE?>assets/images/ic_oacreano_mobile.svg">
                        </a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="oac-acesso-rapido float-right">
                        <ul class="oac-menu-acesso-rapido">
                            <li>
                                <a href="https://player.hstbr.net/oacreano" 
                                    target="_blank">
                                    <i class="material-icons">play_circle_outline</i>
                                    <span class="mr-titulo">Ouvir Rádio</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?=URL_SITE?>c/ultimas">
                                    <i class="material-icons md-light">access_time</i>
                                    <span class="mr-titulo">Últimas</span>
                                </a>
                            </li>
                            <li>
                                <a id="busca" href="#">
                                    <i class="material-icons md-light">search</i>
                                    <span class="mr-titulo">Busca</span>
                                </a>
                                <a id="busca_off" href="#" class="hidden-xs-up">
                                    <i class="material-icons md-light">close</i>
                                    <span class="mr-titulo">Busca</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        </section>
    </header>


    <div class="oac-search-box hidden-xs-up">
        <form method="get" action="<?=URL_SITE?>s=">
            <input type="text" name="s" id="s" value="Busca" 
            onfocus="if (this.value == 'Busca'){ this.value = ''; }" 
            onblur="if (this.value == '') { this.value = 'Busca' }">
        </form>
    </div>

    <div class="oac-opacidade-menu hidden-xs-up"></div>

    <div class="container"><!--begin .container -->
        