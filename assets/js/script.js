$(document).ready(function(){

    /**
    * Controle para exibir o menu responsivo
    */

    $(".bt-responsive").click(function(e){
        e.preventDefault();
        $(".menu").toggleClass("active");
    });

    /**
    * Adiciona classe de movimento, quando a pagina ja rolou
    * com movimento animado
    */
	if($(window).scrollTop() > 50){
        $(".header").addClass("moviment").addClass('animated fadeInDown');
    }
    /**
    * Movimentando a pÃ¡gina com movimento de Go To
    */
    $(".go-to").click(function(e){
        e.preventDefault();
        $(".go-to").removeClass("active");
        var go = $(this).attr("data-go-to");
        $(this).addClass("active");
        $("#menu").removeClass('animated fadeInDown').delay(1000).removeClass("active");
        $('html, body').animate({
            scrollTop: $("#" + go).offset().top - 70
        }, 1000);
    });

    var topo = 0;

    /**
    * Verificando o movimento da pagina e alterando a classe do header para uma configuracao
    * diferente
    */

    $(window).scroll(function() {
        topo = $(window).scrollTop();
        if (topo > 50) {
            $(".header").addClass("moviment").addClass('animated fadeInDown');
        } else {
            $('.header').removeClass("moviment");
            $(".go-to").removeClass("active");
            $("#menu").removeClass('animated fadeInDown active');
        }

        if (topo > 150) {
            $(".bt-top").addClass('animated fadeInUp active');
        } else {
            $(".bt-top").removeClass('animated fadeInUp active');
        }
    });

    $(".bt-toggle").click(function(e){
        e.preventDefault;

        var target = $(this).attr("data-target");
        $("."+target).toggleClass("active");

    })

    $(".icon-responsive").click(function(){
        topo = $(window).scrollTop();
        if($("#menu").hasClass("active")){
            $("#menu").removeClass('animated fadeInDown active');
            if (topo < 50) {
                $('.header').removeClass('animated fadeInDown').removeClass("header-out");
            }
        }else{
            $(".header").addClass("header-out").addClass('animated fadeInDown');
            $("#menu").addClass("active").addClass('animated fadeInDown');
        }
    });

    $(".remove-class").click(function(){
        $("#menu").removeClass('animated fadeInDown').delay(1000).removeClass("active");
    });

    /**
    * Mensagem
    */
    $(".bt-enviar").click(function(){
        $(".container-message").addClass('active animated fadeInUp success');
    });

});