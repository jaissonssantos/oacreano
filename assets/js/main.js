$(document).ready(function(){

    var $window = $(window);
    var header = $('.oac-topo');
    $window.scroll(function () {
        if ($window.scrollTop() >= 20) {
            header.addClass('oac-topo-reduzido');
        } else {
            header.removeClass('oac-topo-reduzido');
        }
    });

    //menu abre
    $('a#menu-aberto').on('click',function(event){
        $(this).addClass('hidden-xs-up');
        $('#menu-fechado').removeClass('hidden-xs-up');
        $('.m-ver-mais').removeClass('hidden-xs-up');
        $('.oac-opacidade-menu').removeClass('hidden-xs-up');
        return false;
    });

    //menu fecha
    $('a#menu-fechado').on('click',function(event){
        $(this).addClass('hidden-xs-up');
        $('#menu-aberto').removeClass('hidden-xs-up');
        $('.m-ver-mais').addClass('hidden-xs-up');
        $('.oac-opacidade-menu').addClass('hidden-xs-up');
        return false;
    });

    $('a#sub').on('click',function(event){
        var find = $(this).parent();
        find.find('.sub-dropdown').toggle();
        return false;
    });

});