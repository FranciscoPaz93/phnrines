$(".editor").click(function () {
    var id = $(this).attr('data-id');
    var objeto = $('#objeto').attr('value',id);
    var codigo = $("#codigo");
    var marca = $("#marca");
    var descripcion =$("#descripcion");
    var precio = $("#precio");
    var color =$("#color");
    var tamano = $("#tamano");
    var medida =$("#medida");
    var estrellas = $("#estrellas");
    var tipo =$("#tipo");
    var top =$("#top");
    var stock =$("#stock");
    var promocion =$("#promocion");
    var descuento =$("#descuento");
    var contenedor =$("#contenedor");
    var produccion =$("#produccion");
    var categoria=$("#categoria");
    var oferta =$("#oferta");
    var articulo=$("#articulo");
    var disponible=$("#disponible");
    var etiqueta=$("#etiqueta");
    var imagen = $("#img-old");
    var transito = $("#transito");
    promocion.removeAttr('checked');
    produccion.removeAttr('checked');
    oferta.removeAttr('checked');
    disponible.removeAttr('checked');
    top.removeAttr('checked');
    $.ajax({
        url:'administration/modificar/'+id,
        type: 'POST',
        dataType: 'JSON',
        success:function (data) {
            var valPromocion=parseInt(data['promocion'])==0 ? '':'checked';
            var valProduccion=parseInt(data['produccion'])==0 ? '':'checked';
            var valOferta=parseInt(data['oferta'])==0 ? '':'checked';
            var valDisponible=parseInt(data['disponible'])==0 ? '':'checked';
            var valTop=parseInt(data['top_ventas'])==0 ? '':'checked';
            var valTransito=parseInt(data['transito'])==0 ? '':'checked';
            codigo.attr('value',data['codigo']);
            marca.attr('value',data['marca']);
            descripcion.attr('value',data['descripcion']);
            precio.attr('value',data['precio']);
            color.attr('value',data['color']);
            tamano.attr('value',data['tamano']);
            medida.attr('value',data['medida']);
            estrellas.attr('value',data['points']);
            descuento.attr('value',data['descuento']);
            etiqueta.attr('value',data['label']);
            articulo.attr('value',data['articulo']);
            imagen.attr('value',data['simagen']);
            stock.attr('value',data['stock']);
            promocion.prop(valPromocion,'true');
            top.prop(valTop,'true');
            produccion.prop(valProduccion,'true');
            oferta.prop(valOferta,'true');
            disponible.prop(valDisponible,'true');
            transito.prop(valTransito,'true');



        }
    })
});