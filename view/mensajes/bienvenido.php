<?php include VIEW_PATH . '/include/head.php'?>
<style>
    @keyframes rotate {from {transform: rotate(0deg);}
        to {transform: rotate(5360deg);}}
    @-webkit-keyframes rotate {from {-webkit-transform: rotate(0deg);}
        to {-webkit-transform: rotate(360deg);}}
    .rotar{
        -webkit-animation: 3s rotate ;
        animation: 5s rotate;
        -webkit-transform-origin: 50% 50%;
        transform-origin: 50% 50%;
    }
    .rotar {
        -webkit-animation-direction: reverse;
        animation-direction: reverse;
    }
</style>
<div class="container">
    <div class="jumbotron">
        <h1>Registro Completo</h1>
        <p>
            Gracias por preferirnos
        </p>
        <center><img class="rotar" width="250px" src="<?php asset("img/rinanimado.png");?>" alt=""></center>
        <a href="<?php url("")?>" class="btn btn-primary">Ingresar</a>
    </div>

</div>
