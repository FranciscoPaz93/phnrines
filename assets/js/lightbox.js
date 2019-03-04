$(function(){

    $('.imagen').click(function(){
        var imagen1=$(this).attr('src');
        var titleimagen=$(this).attr('title');

        if (imagen1==""){

            $('.recibir-imagen').attr('src','');
            $('#mimodal').modal();

        }else{
            $('.recibir-imagen').attr('src',imagen1);
            $('.texto-imagen').text(titleimagen);
            $('#mimodal').modal();
        }
    });
    $('.imagen-btn').click(function(){

        var imagen1=$(this).attr('data-imagen');
        var titleimagen=$(this).attr('title');

        if (imagen1==""){

            $('.recibir-imagen').attr('src','');
            $('#mimodal').modal();

        }else{
            $('.recibir-imagen').attr('src',imagen1);
            $('#mimodal').modal();
        }
    });



        $(".checkprop").click(function () {
            var produccion =$("#produccion");
            var categoria=$("#categoria");
            var oferta =$("#oferta");
            var articulo=$("#articulo");
            var disponible=$("#disponible");
        });


});