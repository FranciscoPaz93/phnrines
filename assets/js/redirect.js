$(function(){

    $('.link').click(function(){
        var id=$(this).attr('data-id');

        location.href="store/detalles/"+id;

    });


});