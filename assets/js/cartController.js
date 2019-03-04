$(function(){
$("#buscarbtn").click(function () {
    var medida = $("#medida").val(),
        tamano = $("#tamano").val();
    var dataend = "tamano="+tamano+"&medida="+medida;
    $.ajax({
        type: "post",
        url:'administration/buscador',
        data: dataend,
        success:function(resp){
           var dataw = JSON.parse(resp);
            $("#resultado").html("");
            agregartienda(dataw);
        }
    })


});
$(".marca").click(function () {
    var marca = $(this).attr('data-marca');
    var dataend = "marca="+marca;

    $.ajax({
        type: "post",
        url:'administration/buscarmarca',
        data: dataend,
        success:function(resp){

            var data = JSON.parse(resp);
            $("#resultado").html("");

            agregartienda(data);
        }
    })

});
$(".add-to-cart-btn").click(function () {
   var id =     $(this).attr('data-id'),
       img =    $(this).attr('data-img'),
       md=      $(this).attr('data-md'),
       tm =     $(this).attr('data-tm'),
       precio = $(this).attr('data-precio'),
       art =    $(this).attr('data-art'),
       qty =   $("#cartqty");
   var dataend = "idText="+id+"&imgText="+img+"&mdText="+md+"&tmText="+tm+"&precio="+precio+"&artText="+art;

   $.ajax({
       type: "post",
       url:'cart/agregar',
       data: dataend,
       success:function(resp){
           var data = JSON.parse(resp);
           qty.html(data.total);
           agregar(data);
       }
   })

});

function agregartienda(dataw) {
    for (var i in dataw){

        var productos ='<div class="col-md-4 col-xs-6">\n';
        productos +=    '<div class="product">\n' ;
        productos +=    '<div class="product-img link" href="'+ dataw[i]['id'] +'">\n' ;
        productos +=    '<img src="/assets/cata/'+ dataw[i]['imagen'] +'" alt="" class="">\n';
        productos +=    '<div class="product-label">\n';
       /* productos +=     '<?php echo ($producto[\'oferta\']==1) ? "<span class=\'sale\'>". $producto[\'descuento\']. "</span>":""; ?>\n' ;
        productos +=     '<?php echo ($producto[\'label\']!="") ? "<span class=\'new\'>". $producto[\'label\']. "</span>":""; ?>\n' ;
        productos +=     '<?php echo ($producto[\'disponible\']==0) ? "<span class=\'new\'>Agotado!</span>":""; ?>\n';*/
        productos +=     '</div>\n' ;
        productos +=     '</div>\n' ;
        productos +=    '<div class="product-body">\n' ;
        productos +=     '<p class="product-category">'+dataw[i]['medida'] +" "+dataw[i]['tamano']+'</p>\n';
        productos +=     '<h3 class="product-name"><a href="#">'+dataw[i]['codigo']+'</a></h3>\n';
        productos +=     '<h3 class="product-name"><a href="#">'+dataw[i]['articulo']+'</a></h3>\n' ;
        productos +=     '<h4 class="product-price">'+monedaChange(dataw[i]['precio'])+'</h4>\n' ;
        productos +=      '<div class="product-rating">\n' ;
        productos +=     '<i class="fa fa-star"></i>\n' ;
        productos +=     '<i class="fa fa-star"></i>\n' ;
        productos +=     '<i class="fa fa-star"></i>\n' ;
        productos +=     '<i class="fa fa-star"></i>\n' ;
        productos +=     '<i class="fa fa-star"></i>\n' ;
        productos +=     '</div>\n' ;
        productos +=    '<div class="product-btns">\n' ;
        productos +=   '<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">Lista de deseos</span></button>\n' ;
        productos +=   '<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">Comparar</span></button>\n' ;
        productos +=     '<button class="quick-view imagen-btn" data-imagen="/assets/cata/' + dataw[i]['imagen'] +'"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>\n' ;
        productos +=      '</div>\n' ;
        productos +=     '</div>\n' ;
        productos +=    '<div class="add-to-cart">\n' ;
        productos +=    '<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Agregar</button>\n' ;
        productos +=     '</div>\n' ;
        productos +=    '</div>\n';
        productos +=      '</div>';
        $("#resultado").append(productos);
    }
}
function agregar(data) {
    var fin = data.total;
    console.log(fin);
    for (var i in data){
        var producto = ' <div class="product-widget">\n';

        producto += '<div class="product-img">';
        producto += '<img src="'+ data[i].imagen +'" alt="">';
        producto += '</div>';
        producto += '<div class="product-body">';
        producto += '<h3 class="product-name"><a href="#">'+data[i].articulo +'</a></h3>';
        producto += '<h4 class="product-price"><span class="qty">1x</span>'+ monedaChange(data[i].precio) +'</h4>';
        producto += '</div>';
        producto += '<button class="delete"><i class="fa fa-close"></i></button>';
        producto += '</div>';
        $(".cart-list").append(producto);
    }

}
    function monedaChange (num) {
        // tomamos el valor que tiene el input
        var cif = 3, dec = 2;
        // Lo convertimos en texto
        num = num.toString();
        // separamos en un array los valores antes y después del punto
        num = num.split('.');
        // evaluamos si existen decimales
        if (!num[1]) {
            num[1] = '00'
        }

        let separados;
        // se calcula la longitud de la cadena
        if (num[0].length > cif) {
            let uno = num[0].length % cif;
            if (uno === 0) {
                separados = [];
            } else {
                separados = [num[0].substring(0, uno)]
            }
            let posiciones = parseInt(num[0].length / cif);
            for (let i = 0; i < posiciones; i++) {
                let pos = ((i * cif) + uno);
                console.log(uno, pos);
                separados.push(num[0].substring(pos, (pos + 3)));
            }
        } else {
            separados = [num[0]]
        }

         return 'HNL ' + separados.join(',') + '.' + num[1];
    };
});