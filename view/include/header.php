<header>
    <!-- TOP HEADER -->
    <div id="top-header">
        <div class="container">
            <ul class="header-links pull-left">
                <li><a href="#"><i class="fa fa-phone"></i> +504-88627574</a></li>
                <li><a href="#"><i class="fa fa-envelope-o"></i> ventas@hondurines.com</a></li>

            </ul>
            <ul class="header-links pull-right">
                <li><a href="#"><i class="fa fa-dollar"></i> HND</a></li>
                <li><a href="<?php url('login')?>"><i class="fa fa-user-o"></i> <?php session_start(); echo  (isset($_SESSION['usuario'])) ? $_SESSION['usuario'] : "Entrar";?></a></li>
                <?php echo isset($_SESSION['usuario']) ? '  <li><a href="/hondurines/login/disconect"><i class=\"fa fa-sign-out\"></i> Salir</a></li>': ""?>
            </ul>
        </div>
    </div>
    <!-- /TOP HEADER -->

    <!-- MAIN HEADER -->
    <div id="header">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- LOGO -->
                <div class="col-md-3">
                    <div class="header-logo">
                        <a href="<?php url("")?>" class="logo">
                            <img src="<?php asset("img/logo-sm.png")?>" alt="">
                        </a>
                    </div>
                </div>
                <!-- /LOGO -->

                <!-- SEARCH BAR -->
                <div class="col-md-6">
                    <div class="header-search">
                        <form>
                            <select class="input-select">
                                <option value="0">Categorias</option>
                                <option value="1">Rines</option>
                                <option value="1">Llantas</option>
                            </select>
                            <input class="input" placeholder="Rin 15, Llanta 16">
                            <button class="search-btn">Buscar</button>
                        </form>
                    </div>
                </div>
                <!-- /SEARCH BAR -->

                <!-- ACCOUNT -->
                <div class="col-md-3 clearfix">
                    <div class="header-ctn">
                        <!-- Wishlist -->
                        <div>
                            <a href="#">
                                <i class="fa fa-heart-o"></i>
                                <span>Lista Deseos</span>
                                <div class="qty"></div>
                            </a>
                        </div>
                        <!-- /Wishlist -->

                        <!-- Cart -->
                        <div class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                <i class="fa fa-shopping-cart"></i>
                                <span>Carrito</span>
                                <div class="qty" id="cartqty">
                                    <?php
                                    if(isset($_SESSION['carrito']))
                                    {
                                        $carrito = $_SESSION['carrito'];
                                        echo  count($carrito);

                                    }
                                    ?>
                                </div>


                            </a>
                            <div class="cart-dropdown">
                                <div class="cart-list">
                                    <?php if(isset($_SESSION['carritoini'])){
                                        $carritoini = $_SESSION['carritoini'];
                                        ?>
                                    <?php foreach ($carritoini as $cart){?>

                                    <div class="product-widget">
                                        <div class="product-img">
                                            <img src="<?php echo $cart->imagen; ?>" alt="">
                                        </div>
                                        <div class="product-body">
                                            <h3 class="product-name"><a href="#"><?php echo $cart->articulo; ?></a></h3>
                                            <h4 class="product-price"><span class="qty">3x</span> HNL <?php echo $cart->precio; ?>.00</h4>
                                        </div>
                                        <button class="delete" data-id="<?php echo $cart->id; ?>"><i class="fa fa-close"></i></button>
                                    </div>

                                        <?php }?>
                                    <?php }?>
                                </div>
                                <div class="cart-summary">
                                    <small>3 Item(s) selected</small>
                                    <h5>SUBTOTAL: $2940.00</h5>
                                </div>
                                <div class="cart-btns">
                                    <a href="#">View Cart</a>
                                    <a href="#">Checkout  <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- /Cart -->

                        <!-- Menu Toogle -->
                        <div class="menu-toggle">
                            <a href="#">
                                <i class="fa fa-bars"></i>
                                <span>Menu</span>
                            </a>
                        </div>
                        <!-- /Menu Toogle -->
                    </div>
                </div>
                <!-- /ACCOUNT -->
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </div>
    <!-- /MAIN HEADER -->
</header>