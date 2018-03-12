<?php get_header();?>

<div class="pagina_categoria">
<div class="conteudo">
    <div class="container">
    
    	<div class="grid-12 esquerda margin-10-top-bottom">
        
        	<div id="cse-search-results"></div>
			<script type="text/javascript">
              var googleSearchIframeName = "cse-search-results";
              var googleSearchFormName = "cse-search-box";
              var googleSearchFrameWidth = 940;
              var googleSearchDomain = "www.google.com.br";
              var googleSearchPath = "/cse";
            </script>
            <script type="text/javascript" src="http://www.google.com/afsonline/show_afs_search.js"></script>

        	<script type="text/javascript" src="http://www.google.com/cse/query_renderer.js"></script>
            <div id="queries"></div>
            <script src="http://www.google.com/cse/api/partner-pub-9210129523880937/cse/9289575440/queries/js?oe=UTF-8&amp;callback=(new+PopularQueryRenderer(document.getElementById(%22queries%22))).render"></script>

            
        </div>
                
	</div>
</div>
</div>        

<?php get_footer();?>

