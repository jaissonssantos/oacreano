<footer>
        <div class="site-map background-color4">
            <nav class="container">
                <ul class="container">
                    <li><a href="http://ecosdanoticia.com.br">Home</a></li>
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
            <div class="container"><div class="copy text-right">&copy; 2007-<?=date(Y)?> ECOS DA NOTÍCIA - Jornal, Polícia e TV Ecos. Todos os direitos reservados. <a href="http://www.tupahost.com" target="_blank">Hospedagem: TUPA Host</a></div></div>
        </div>
        <div class="mobile-footer background-color4 color-white">
            <div class="container">
                <p>&copy; 2007-<?=date(Y)?> ECOS DA NOTÍCIA - Jornal, Polícia e TV Ecos. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer><!-- FOOTER -->

  </div><!-- END PAGE WRAPPER -->
  <script src="<?=PATH_TEMPLATE?>jquery.bxslider.min.js"></script>
  <script src="<?=PATH_TEMPLATE?>jquery.autocomplete.min.js"></script>
  <script src="<?=PATH_TEMPLATE?>functions.js"></script>
  <?php if( $pgh = 1 ){ ?>
  <script type="text/javascript">
      $(document).ready(function(){
        $('.carousel-inner').bxSlider({auto: true, nextSelector: '#next-carousel',prevSelector: '#prev-carousel', nextText: '',prevText: ''});
      });
  </script>
  <?php } ?>

<?php wp_footer(); ?>

</body>
</html>