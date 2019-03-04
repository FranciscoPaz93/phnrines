window.addEventListener("load", init);
//
alert('hola');
function init()
{
    //obtenemos el formulario con querySelector
    var formulario = document.querySelector("#nuevo");
    //le añadimos el evento submit y asociamos la función submitForm
    formulario.addEventListener("submit", submitForm, false);


}

//función que envia el formulario con ajax
function submitForm(e)
{
    //prevenimos la acción por defecto del navegador
    e.preventDefault();
    //creamos un objeto FormData de HTML5 y le pasamos el formulario
    var data = new FormData(this);
    //hacemos una petición ajax pasando el formulario contra postform.php
    var xhrObject = new XMLHttpRequest();
    xhrObject.open("POST","administration/agregar");
    xhrObject.send(data);
    alert(xhrObject.response);
}
