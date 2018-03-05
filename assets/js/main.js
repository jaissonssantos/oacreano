$(document).ready(function(){

    //busca
    $('a#menu-aberto').on('click',function(event){
        $(this).addClass('invisible');
        $('#menu-fechado').removeClass('invisible');
        $('.oac-opacidade-menu').removeClass('invisible');
        return false;
    });

});