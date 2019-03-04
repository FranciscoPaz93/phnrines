<?php
include VIEW_PATH .'include/head.php';
?>
	<body>
		<!-- HEADER -->
        <?php
        include VIEW_PATH .'include/header.php';
        ?>
		<!-- /HEADER -->
        <?php
        include VIEW_PATH .'include/navegacion.php';
        ?>
		<!-- NAVIGATION -->

		<!-- /NAVIGATION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="<?php asset("image/rin-sm.jpg")?>" alt="">
							</div>
							<div class="shop-body">
								<h3>Tienda<br>Completa</h3>
								<a href="<?php url('store')?>" class="cta-btn">Ver Ahora <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="<?php asset("image/fabrica-sm.jpg")?>" alt="">
							</div>
							<div class="shop-body">
								<h3>En<br>Produccion</h3>
								<a href="<?php url('store/produccion')?>" class="cta-btn">Ver Ahora <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="<?php asset("image/cargo-sm.jpg")?>" alt="">
							</div>
							<div class="shop-body">
								<h3>En<br>Transito</h3>
								<a href="#" class="cta-btn">Ver Ahora <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Nuevos Productos</h3>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="#tab1">Rines</a></li>
									<li><a data-toggle="tab" href="#tab1">Llantas</a></li>
									<li><a data-toggle="tab" href="#tab1">Accesorios</a></li>
									<li><a data-toggle="tab" href="#tab1">Ofertas</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1">

										<!-- product -->
                                        <?php foreach ($promo as $promos): ?>
										<div class="product">
                                            <div class="product-img link" data-id="<?php echo $promos['id']?>">
                                                <img src="<?php asset("cata/". $promos['imagen']);?>" alt="">
												<div class="product-label">
<!--													<span class="sale"></span>-->
<!--													<span class="new"></span>-->
												</div>
											</div>
											<div class="product-body">
												<p class="product-category"><?php echo $promos['medida'] . $promos['tamano']; ?></p>
												<h3 class="product-name"><a href="#"><?php echo $promos['articulo']; ?></a></h3>
												<h4 class="product-price"><?php echo money_format("%i",$promos['precio']) . " HNL"; ?></h4>
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
                                                    <button class="quick-view imagen-btn" data-imagen="<?php asset("cata/". $promos['imagen']);?>"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn" data-id="<?php echo $promos['id']?>" data-img="<?php asset("cata/". $promos['imagen']);?>" data-tm="<?php echo $promos['medida']?>" data-md="<?php echo $promos['medida']?>" data-precio="<?php echo $promos['precio']; ?>" data-cantidad="1" data-art="<?php echo $promos['articulo']; ?>"  ><i class="fa fa-shopping-cart"></i> Agregar</button>
											</div>
										</div>
                                        <?php endforeach;?>
										<!-- /product -->

									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- HOT DEAL SECTION -->
		<div id="hot-deal" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="hot-deal">
							<ul class="hot-deal-countdown" id="clock">

							</ul>
							<h2 class="text-uppercase">Nuevo Producto</h2>
							<p>Puedes ver lo nuevo ahora</p>
							<a class="primary-btn cta-btn" href="#">Saber mas</a>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /HOT DEAL SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Top Ventas</h3>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="#tab2">Rines</a></li>

								</ul>
							</div>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab2" class="tab-pane fade in active">
									<div class="products-slick" data-nav="#slick-nav-2">
										<!-- product -->
                                        <?php foreach ($top as $tops): ?>
                                            <div class="product">
                                                <div class="product-img link" data-id="<?php echo $tops['id']?>">
                                                    <img src="<?php asset("cata/". $tops['imagen']);?>" alt="">
                                                    <div class="product-label">
                                                        <!--													<span class="sale"></span>-->
                                                        <!--													<span class="new"></span>-->
                                                    </div>
                                                </div>
                                                <div class="product-body">
                                                    <p class="product-category"><?php echo $tops['medida'] . $tops['tamano']; ?></p>
                                                    <h3 class="product-name"><a href="#"><?php echo $tops['articulo']; ?></a></h3>
                                                    <h4 class="product-price"><?php echo money_format("%i",$tops['precio']) . " HNL"; ?></h4>
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
                                                        <button class="quick-view imagen-btn" data-imagen="<?php asset("cata/". $tops['imagen']);?>"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                                                    </div>
                                                </div>
                                                <div class="add-to-cart">
                                                    <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Agregar</button>
                                                </div>
                                            </div>
                                        <?php endforeach;?>
										<!-- /product -->
									</div>
									<div id="slick-nav-2" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- /Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->



		<!-- NEWSLETTER -->
		<div id="newsletter" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="newsletter">
							<p> <strong>Contacto para Mayorista</strong></p>
							<form>
								<input class="input" type="email" placeholder="Ingrese su email">
								<button class="newsletter-btn"><i class="fa fa-envelope"></i> Enviar</button>
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
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /NEWSLETTER -->
        <div id="mimodal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <span class="glyphicon glyphicon-ban-circle cerrar" data-dismiss="modal"></span>
                <img src="" class="modal-content recibir-imagen" width="100%" height="100%">

                <div class="modal-footer">
                    <p><strong class="texto-imagen"></strong></p>
                </div>
            </div>
        </div>

<?php include VIEW_PATH.'include/footer.php';?>
	</body>
</html>
