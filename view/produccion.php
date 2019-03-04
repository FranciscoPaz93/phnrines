<?php include VIEW_PATH.'include/head.php';?>
<body>
<!-- HEADER -->
<?php include VIEW_PATH .'include/header.php'; ?>
<!-- /HEADER -->

<!-- NAVIGATION -->
<?php
include VIEW_PATH .'include/navegacion.php';
?>
<!-- /NAVIGATION -->

<!-- BREADCRUMB -->

<!-- /BREADCRUMB -->

<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">

<h3 class="title">En Transito</h3>
            <!-- STORE -->
            <div id="store" class="col-md-12">
                <!-- store top filter -->
                <div class="store-filter clearfix">
                    <div class="store-sort">
                        <label>
                            Ordenar por:
                            <select class="input-select">
                                <option value="0">Popular</option>
                                <option value="1">Position</option>
                            </select>
                        </label>

                        <label>
                            Mostrar:
                            <select class="input-select">
                                <option value="0">20</option>
                                <option value="1">50</option>
                            </select>
                        </label>
                    </div>
                    <ul class="store-grid">
                        <li class="active"><i class="fa fa-th"></i></li>
                        <li><a href="#"><i class="fa fa-th-list"></i></a></li>
                    </ul>
                </div>
                <!-- /store top filter -->

                <!-- store products -->
                <div class="row">
                    <!-- product -->

                    <?php foreach ($catalogo as $producto): ?>
                        <div class="col-md-4 col-xs-6">
                            <div class="product">
                                <a href="<?php url('store/detalles/'.$producto['id']);?>">
                                <div class="product-img link" >
                                    <img src="<?php asset("cata/". $producto['imagen']);?>" alt="" class="">
                                    <div class="product-label">
                                        <?php echo ($producto['oferta']==1) ? "<span class='sale'>". $producto['descuento']. "</span>":""; ?>
                                        <?php echo ($producto['label']!="") ? "<span class='new'>". $producto['label']. "</span>":""; ?>
                                        <?php echo ($producto['disponible']==0) ? "<span class='new'>Agotado!</span>":""; ?>

                                    </div>
                                </div>
                                <div class="product-body">
                                    <p class="product-category"><?php echo $producto['medida'] . $producto['tamano']; ?></p>
                                    <h3 class="product-name"><a href=""><?php echo $producto['codigo']; ?></a></h3>
                                    <h3 class="product-name"><a href=""><?php echo $producto['articulo']; ?></a></h3>
                                    <h4 class="product-price"><?php echo money_format("%i",$producto['precio']) . " HNL"; ?></h4>
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product-btns">
                                        <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">Lista de deseos</span></button>
                                        <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">Comparar</span></button>
                                        <button class="quick-view imagen-btn" data-imagen="<?php asset("cata/". $producto['imagen']);?>"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                                    </div>
                                </div>
                                <div class="add-to-cart">
                                    <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Agregar</button>
                                </div>
                                </a>
                            </div>
                        </div>
                        <div class="clearfix visible-sm visible-xs"></div>
                    <?php endforeach;?>




                    <!-- /product -->
                </div>
                <!-- /store products -->

                <!-- store bottom filter -->
                <div class="store-filter clearfix">
                    <span class="store-qty"></span>

                </div>
                <!-- /store bottom filter -->
            </div>
            <!-- /STORE -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->
<!-- MODAL -->
<div id="mimodal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <span class="glyphicon glyphicon-ban-circle cerrar" data-dismiss="modal"></span>
        <img src="" class="modal-content recibir-imagen" width="100%" height="100%">

        <div class="modal-footer">
            <p><strong class="texto-imagen"></strong></p>
        </div>
    </div>
</div>
<!-- /MODAL -->
<!-- NEWSLETTER
<div id="newsletter" class="section">

    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="newsletter">
                    <p>Sign Up for the <strong>NEWSLETTER</strong></p>
                    <form>
                        <input class="input" type="email" placeholder="Enter Your Email">
                        <button class="newsletter-btn"><i class="fa fa-envelope"></i> Subscribe</button>
                    </form>
                    <ul class="newsletter-follow">
                        <li>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /row
    </div>
    <!-- /container
</div>
 /NEWSLETTER -->
<?php include VIEW_PATH.'include/footer.php';?>
</body>
</html>
