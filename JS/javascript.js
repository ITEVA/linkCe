    $(document).ready(function() {
        $("li#btn").click(function(){
            if($("#dropdown2").css("display") == "block"){
                $("#dropdown2").toggle("fast");
            }
            $("ul#dropdown").toggle("fast");
        });

        $("li#btn2").click(function(){
            if($("#dropdown").css("display") == "block"){
                $("#dropdown").toggle("fast");
            }
            $("ul#dropdown2").toggle("fast");
        });
        $(".nav_bar").click(function(){
        	$(".navigation").toggleClass("visible");
      	});

        $("img").click(function(){
            if($(".navigation").css("left") == "0px"){
                $(".navigation").removeClass("visible");
            }
        });


        var nav = $('#navbar');

        $(window).scroll(function () {
            if ($(this).scrollTop() > 89 && $(window).width() <= 767) {
                nav.addClass("nav-fix");
            } else {
                nav.removeClass("nav-fix");
            }
        });

        $(".assinatura").click(function() {
                $("#plano").val($(this).attr("plano"));
                $("#tipoPlano").val($(this).attr("tipoPlano"));
        });

        $('#posmenu li').click(function(){
            $("#posmenu li").removeClass('ativo');
            $(this).addClass('ativo');
        });


        var cidade;
        $("#sel1").change(function () {

            $("#sel2").find('option').each(function () {
                $(this).show();
            });

            cidade = $("#sel1 option:selected").attr("cidade");

            if(cidade != "nenhuma") {
                $("#sel2").find('option').each(function () {
                    if($(this).attr('cidade') != cidade) {
                        $(this).hide();
                    }
                });
            }
        });
});  
