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
					<!-- Product main img -->
					<div class="col-md-5 col-md-push-2">
						<div id="product-main-img">


                            <div class="product-preview">
                                <img src="<?php asset("cata/" . $item[0]['imagen']);?>" alt="">
                            </div>


						</div>
					</div>
					<!-- /Product main img -->

					<!-- Product thumb imgs -->
					<div class="col-md-2  col-md-pull-5">
						<div id="product-imgs">
                            <div class="product-preview">
                                <img src="<?php asset("cata/" . $item[0]['imagen']);?>" alt="">
                            </div>

						</div>
					</div>
					<!-- /Product thumb imgs -->

					<!-- Product details -->
					<div class="col-md-5">
						<div class="product-details">
							<h2 class="product-name"><?php echo $item[0]['articulo']?></h2>
							<div>
								<div class="product-rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
								<a class="review-link" href="#">0 Comentario(s) | Agregar comentario</a>
							</div>
							<div>
								<h3 class="product-price"><?php echo money_format("%i",$item[0]['precio']) . " HNL"; ?><del class="product-old-price"></del></h3>
								<span class="product-available">Agotado</span>
							</div>
							<p>Medida: <?php echo $item[0]['medida']?> Tamaño: <?php echo $item[0]['tamano']?></p>




							<div class="add-to-cart">
								<div class="qty-label">
									Cant.
									<div class="input-number">
										<input type="number">
										<span class="qty-up">+</span>
										<span class="qty-down">-</span>
									</div>
								</div>
								<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Agregar</button>
							</div>

							<ul class="product-btns">
								<li><a href="#"><i class="fa fa-heart-o"></i> Agregar</a></li>

							</ul>

							<ul class="product-links">
								<li>Categoria:</li>
								<li><a href="#">Rines</a></li>

							</ul>

							<ul class="product-links">
								<li>Compartir:</li>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-envelope"></i></a></li>
							</ul>

						</div>
					</div>
					<!-- /Product details -->

					<!-- Product tab -->
					<div class="col-md-12">
						<div id="product-tab">
							<!-- product tab nav -->
							<ul class="tab-nav">
								<li class="active"><a data-toggle="tab" href="#tab1">Descripcion</a></li>
								<li><a data-toggle="tab" href="#tab2">Detalles</a></li>
								<li><a data-toggle="tab" href="#tab3">Comentarios</a></li>
							</ul>
							<!-- /product tab nav -->

							<!-- product tab content -->
							<div class="tab-content">
								<!-- tab1  -->
								<div id="tab1" class="tab-pane fade in active">
									<div class="row">
										<div class="col-md-12">
                                            <p><?php echo $item[0]['descripcion']?></p>

										</div>
									</div>
								</div>
								<!-- /tab1  -->

								<!-- tab2  -->
								<div id="tab2" class="tab-pane fade in">
									<div class="row">
										<div class="col-md-12">
											<p> Medida: <?php echo $item[0]['medida']?> Tamaño: <?php echo $item[0]['tamano']?></p>
										</div>
									</div>
								</div>
								<!-- /tab2  -->

								<!-- tab3  -->
								<div id="tab3" class="tab-pane fade in">
									<div class="row">
										<!-- Rating -->
										<div class="col-md-3">
											<div id="rating">
												<div class="rating-avg">
													<span>5</span>
													<div class="rating-stars">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
													</div>
												</div>
												<ul class="rating">
													<li>
														<div class="rating-stars">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
														</div>
														<div class="rating-progress">
															<div style="width: 100%;"></div>
														</div>
														<span class="sum">0</span>
													</li>
													<li>
														<div class="rating-stars">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
														</div>
														<div class="rating-progress">
															<div style="width: 0%;"></div>
														</div>
														<span class="sum"></span>
													</li>
													<li>
														<div class="rating-stars">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
														</div>
														<div class="rating-progress">
															<div></div>
														</div>
														<span class="sum">0</span>
													</li>
													<li>
														<div class="rating-stars">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
														</div>
														<div class="rating-progress">
															<div></div>
														</div>
														<span class="sum">0</span>
													</li>
													<li>
														<div class="rating-stars">
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
														</div>
														<div class="rating-progress">
															<div></div>
														</div>
														<span class="sum">0</span>
													</li>
												</ul>
											</div>
										</div>
										<!-- /Rating -->

										<!-- Reviews -->
										<div class="col-md-6">
											<div id="reviews">
												<ul class="reviews">
													<li>
														<div class="review-heading">
															<h5 class="name">Carlos</h5>
															<p class="date">25 JUL 2018, 8:0 PM</p>
															<div class="review-rating">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star empty"></i>
															</div>
														</div>
														<div class="review-body">
															<p>Excelente Producto</p>
														</div>
													</li>


												</ul>
												<ul class="reviews-pagination">
													<li class="active">1</li>

													<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
												</ul>
											</div>
										</div>
										<!-- /Reviews -->

										<!-- Review Form -->
										<div class="col-md-3">
											<div id="review-form">
												<form class="review-form">
													<input class="input" type="text" placeholder="Nombre">
													<input class="input" type="email" placeholder="Correo">
													<textarea class="input" placeholder="Comentario"></textarea>
													<div class="input-rating">
														<span>Calificacion: </span>
														<div class="stars">
															<input id="star5" name="rating" value="5" type="radio"><label for="star5"></label>
															<input id="star4" name="rating" value="4" type="radio"><label for="star4"></label>
															<input id="star3" name="rating" value="3" type="radio"><label for="star3"></label>
															<input id="star2" name="rating" value="2" type="radio"><label for="star2"></label>
															<input id="star1" name="rating" value="1" type="radio"><label for="star1"></label>
														</div>
													</div>
													<button class="primary-btn">Enviar</button>
												</form>
											</div>
										</div>
										<!-- /Review Form -->
									</div>
								</div>
								<!-- /tab3  -->
							</div>
							<!-- /product tab content  -->
						</div>
					</div>
					<!-- /product tab -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- Section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<div class="col-md-12">
						<div class="section-title text-center">
							<h3 class="title">Productos Relacionados</h3>
						</div>
					</div>

					<!-- product -->
                    <?php foreach ($relacionados as $producto): ?>
                        <div class="col-md-4 col-xs-6 producto"  >
                            <div class="product">
                                <div class="product-img link" data-id="<?php echo $producto['id']?>">
                                    <img src="<?php asset("cata/". $producto['imagen']);?>" alt="" class="">
                                    <div class="product-label">
                                        <span class="sale">30%</span>
                                        <span class="new">Agotado!</span>
                                    </div>
                                </div>
                                <div class="product-body">
                                    <p class="product-category"><?php echo $producto['medida'] . $producto['tamano']; ?></p>
                                    <h3 class="product-name"><a href="#"><?php echo $producto['articulo']; ?></a></h3>
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
                            </div>
                        </div>
                        <div class="clearfix visible-sm visible-xs"></div>
                    <?php endforeach;?>


				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /Section -->

		<!-- NEWSLETTER -->

		<!-- /NEWSLETTER -->

<?php include VIEW_PATH.'include/footer.php';?>



</body>
</html>
