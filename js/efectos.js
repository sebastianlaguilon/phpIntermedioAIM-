$(document).ready(function(){

//Efecto Menu
    $('.menu a').each(function(index, elemento){
        $(this).css({
            'top':'-200px'
        })

        $(this).animate({
            top:'0'
        }, 2000 + (index * 500))

    });

 //Efecto Header
    if($(window).width() > 800 ) {
       $('header .textos').css({
        opacity: 0,
        marginTop: 0
       });

       $('header .textos').animate({
        opacity: 1,
        marginTop: '-100px'
       },1500);
    }
    
    //Scroll Elementos Menu
    var acercaDe = $('#acerca-de').offset().top,
        menu = $('#platillos').offset().top;

    $('#btn-acerca-de').on('click',function(e){
        e.preventDefault();
        $('html, body').animate({
            scrollTop: 200
        }, 400);
    });

    $('#btn-menu').on('click',function(e){
        e.preventDefault();
        $('html, body').animate({
            scrollTop: menu 
        }, 400);
    });



});