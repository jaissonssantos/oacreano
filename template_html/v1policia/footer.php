<footer>
        <div class="site-map background-color4">
            <nav class="container">
                <ul class="container">
                    <li><a href="<?=URL_SITE?>" title="Portal ecos polícia">Home</a></li>
                    <li><a href="http://www.ecosdanoticia.com.br" title="Portal ecos da notícia">Portal</a></li>
                    <li><a href="<?=URL_SITE?><?=date('Y')?>/<?=date('m')?>" title="Últimas">Últimas</a></li>
                    <li><a href="<?=URL_SITE?>policia" title="Polícia">Polícia</a></li>
                    <li><a href="http://www.ecosdanoticia.com.br/municipio" title="Seu Município">Seu Município</a></li>
                    <li><a href="<?=URL_SITE?>policia" title="Polícia">Polícia</a></li>
                    <li><a href="http://www.ecosdanoticia.com.br/empregos-e-carreiras" title="Empregos e carreiras">Empregos e Carreiras</a></li>
                </ul>
            </nav>
        </div>
        <div class="sub-bloco">
            <div class="container">
                <nav>
                    <ul>
                        <li>100 - Secretaria dos Direitos Humanos</li>
                        <li>180 - Delegacia da Mulher</li>
                        <li>181 - Disque-Denúncia</li>
                        <li>190 - Polícia Militar</li>
                        <li>191 - Polícia Rodoviária Federal</li>
                        <li>192 - SAMU</li>
                        <li>193 - Corpo de Bombeiros</li>
                        <li>194 - Polícia Federal</li>
                        <li>197 - Polícia Civil</li>
                        <li>198 - Polícia Rodoviária Estadual</li>
                        <li>199 - Defesa Civil </li>
                    </ul>
                </nav>
                <nav>
                    <ul>
                        <li>(68) 3224-9449 - Alcoólicos Anônimos</li>
                        <li>(68) 3211-1000 - Aeroporto Internacional do Rio Branco</li>
                        <li>(68) 3003-0100 - Correios (Capital)</li>
                        <li>(68) 3542-2168 - DEPASA</li>
                        <li>(68) 3226-2546 - Detran</li>
                        <li>(68) 3228-1494 - Hemocentro</li>
                        <li>(68) 3226-3494 - Ibama</li>
                        <li>(68) 3223-2396 - Vigilância Sanitária</li>
                    </ul>
                </nav>
                <nav>
                    <ul>
                        <li>(68) 3223-7797 - Procon</li>
                        <li>0800 647 7196 - Eletroacre</li>
                        <li>0800-725-7282 - Correios (Demais localidades)</li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="copyright">
            <div class="container"><div class="copy text-right">&copy; 2006-<?=date(Y)?> ECOS DA NOTÍCIA/Ecos Polícia - Jornal, Polícia e TV Ecos. Todos os direitos reservados.</div>
        </div>
        <div class="mobile-footer background-color4 color-white">
            <div class="container">
                <p>&copy; 2006-<?=date(Y)?> ECOS DA NOTÍCIA/Ecos Polícia - Jornal, Polícia e TV Ecos. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer><!-- FOOTER -->

  </div><!-- END PAGE WRAPPER -->
  <!-- jQuery library (served from Google) -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <!-- Livequery library -->
  <script src="<?=PATH_TEMPLATE?>livequery.js"></script>
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
  <!-- Google adsense - assíncrono -->
  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  
  <script src="<?=PATH_TEMPLATE?>jquery.bxslider.min.js"></script>
  <script src="<?=PATH_TEMPLATE?>jquery.autocomplete.min.js"></script>
  <?php if( $pgh = 1 ){ ?>
  <script src="<?=PATH_TEMPLATE?>jwplayer/jwplayer.js"></script>
  <script src="<?=PATH_TEMPLATE?>jwplayer/jwplayer.html5.js"></script>
  <script src="<?=PATH_TEMPLATE?>bootstrap.modal.js"></script>
  <script type="text/javascript">jwplayer.key="iutRDqcT78F7yRwhJrXKoCvFzYyfVxWm4kAJuA==";</script>
  <script type="text/javascript">
      $(document).ready(function(){
        $('.mod-rotativo').bxSlider({auto: true, nextSelector: '#next-carousel',prevSelector: '#prev-carousel', nextText: '',prevText: ''});
      });
  </script>
  <?php } ?>
  <!-- function web site -->
  <script src="<?=PATH_TEMPLATE?>functions.js"></script>

<?php wp_footer(); ?>

</body>
</html>