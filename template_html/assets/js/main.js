$(document).ready(function(){

    var $window = $(window);
    var height = $window.innerHeight();
    var width = $window.innerWidth();
    var header = $('.oac-topo');
    $window.scroll(function () {
        if ($window.scrollTop() >= 20) {
            header.addClass('oac-topo-reduzido');
        } else {
            header.removeClass('oac-topo-reduzido');
        }
    });

    if(width >= 1024){
        $('.m-ver-mais .dropdown').css('height', height);
        $('.m-ver-mais .dropdown').css('overflow-y', 'scroll');
    }

    //menu abre
    $('a#menu-aberto').on('click',function(event){
        $(this).addClass('hidden-xs-up');
        $('#menu-fechado').removeClass('hidden-xs-up');
        $('.m-ver-mais').removeClass('hidden-xs-up');
        $('.oac-opacidade-menu').removeClass('hidden-xs-up');
        $('.oac-search-box').addClass('hidden-xs-up');
        $('a#busca').removeClass('hidden-xs-up');
        $('a#busca_off').addClass('hidden-xs-up');
        return false;
    });

    //menu fecha
    $('a#menu-fechado').on('click',function(event){
        $(this).addClass('hidden-xs-up');
        $('#menu-aberto').removeClass('hidden-xs-up');
        $('.m-ver-mais').addClass('hidden-xs-up');
        $('.oac-opacidade-menu').addClass('hidden-xs-up');
        $('.oac-search-box').addClass('hidden-xs-up');
        return false;
    });

    //seach box
    $('a#busca').on('click',function(event){
        $(this).parent().find('a#busca_off').removeClass('hidden-xs-up');
        $(this).addClass('hidden-xs-up');
        $('.oac-search-box').removeClass('hidden-xs-up');
        $('.oac-opacidade-menu').removeClass('hidden-xs-up');
        $('.m-ver-mais').addClass('hidden-xs-up');
        $('#menu-aberto').removeClass('hidden-xs-up');
        $('#menu-fechado').addClass('hidden-xs-up');
        return false;
    });

    $('a#busca_off').on('click',function(event){
        $(this).parent().find('a#busca').removeClass('hidden-xs-up');
        $(this).addClass('hidden-xs-up');
        $('.oac-search-box').addClass('hidden-xs-up');
        $('.oac-opacidade-menu').addClass('hidden-xs-up');
        $('.m-ver-mais').addClass('hidden-xs-up');
        return false;
    });

    $('a#sub').on('click',function(event){
        var find = $(this).parent();
        find.find('.sub-dropdown').toggle();
        return false;
    });

    //https://stackoverflow.com/questions/21447947/jquery-fixing-a-side-bar-while-scrolling-until-bottom

    //http://michaelsoriano.com/embed-videos-with-flowplayer/

});