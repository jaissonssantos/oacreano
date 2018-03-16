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
    <meta content="OAcreano - ornalismo acrenao, política e polícia" name="apple-mobile-web-app-title">
    <meta content="OAcreano" name="application-name">
    <meta content="website" property="og:type">
    <meta content="OAcreano" property="og:site_name">
    <meta content="OAcreano" property="og:title">
    <meta content="política, cotidiano e vídeos com jornalismo diferente, sem copia e cola. matérias surpreendentes e cobertura completa da região norte." property="og:description">
    <meta content="http://oacreano.com.br/" property="og:url">
    <meta content="http://s.oacreano.com.br/assets/images/opengraph_1.jpg" property="og:image">
    <meta value="summary" name="twitter:card">
    <meta value="OAcreano" name="twitter:title">
    <meta value="política, cotidiano e vídeos com jornalismo diferente, sem copia e cola. matérias surpreendentes e cobertura completa da região norte." name="twitter:description">
    <meta value="http://oacreano.com.br/" name="twitter:url">
    <meta value="http://s.oacreano.com.br/assets/images/opengraph_1.jpg" name="twitter:image">
    <meta content="OAcreano" itemprop="gapower:channel_title">
    <meta content="OAcreano" itemprop="gapower:program_title">
    <meta name="author" content="">
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
                            <img src="<?=PATH_TEMPLATE?>assets/images/ic_oacreano.svg">
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
        