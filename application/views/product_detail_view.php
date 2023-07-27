<div class="view-product-detail">
	<div class="detail-content">
		<div class="container">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item">
						<a href="<?php echo base_url('/') ?>">
							Trang chủ
						</a>
					</li>
					<li class="breadcrumb-item">
						<a href="<?php echo base_url('/product/') ?>">
							Sản phẩm
						</a>
					</li>
					<li class="breadcrumb-item">
						<a href="<?php echo base_url('/product/') ?>">
							<?php echo $product_category_label ?>
						</a>
					</li>
					<li class="breadcrumb-item active" aria-current="page">
						<?php echo $detail['title'] ?>
					</li>
				</ol>
			</nav>

			<div class="row">
				<div class="col-lg-6">
					<div class="content-text">
						<div class="text-header">
							<h5>
								<?php echo $product_category_label ?>
							</h5>
	
							<h3>
								<?php echo $detail['title'] ?>
							</h3>
						</div>
	
						<div class="text-body">
							<h6>
								Tính năng nổi bật của sản phẩm
							</h6>

							<p class="description">
								<?php echo $detail['description'] ?>
							</p>

							<ul class="list-unstyled">
								<li>
									<h6>
										Thương hiệu : <?= $brandIds[$detail['brand_id']] ?>
									</h6>
								</li>
								<li>
									<h6>
										Nước sản xuất : <?= $brandOrigins[$detail['origin_id']] ?>
									</h6>
								</li>
								<!-- <li>
									<h6>
										Bảo hành : 12 tháng
									</h6>
								</li> -->
							</ul>
	
							<!-- <h6>
								Thông tin khuyến mãi
							</h6>

							<blockquote class="blockquote">
								<p class="description">
									In ut lorem enim. Morbi suscipit nisi vel nisi sollicitudin, nec scelerisque urna congue.
								</p>
							</blockquote> -->
						</div>
					</div>
				</div>
	
				<div class="col-lg-6">
					<div class="content-image">
						<div class="swiper-container" id="swipeCover">
							<div class="swiper-pagination"></div>

							<div class="swiper-button-next"></div>
							<div class="swiper-button-prev"></div>

							<div class="swiper-wrapper">
								<?php for($i = 0; $i < 3; $i++): ?>
									<div class="swiper-slide">
										<div class="img-mask">
											<img src="<?= base_url('assets/upload/product/' . $detail['slug'] . '/' . $detail['image']) ?>" alt="<?php echo $detail['title'] ?>">
										</div>
									</div>
								<?php endfor; ?>
							</div>
						</div>
					</div>

					<div class="content-price">
						<h4>
							<?php echo $detail['price'] ?>
						</h4>

						<div class="buttons">
							<button class="btn btn-primary btn-buy" type="button">
								Mua ngay
							</button>

							<button class="btn btn-link btn-contact-us" type="button">
								Tư vấn cho tôi
							</button>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12">
					<div class="text">
						<h6>
							Mô tả chi tiết sản phẩm
						</h6>

						<?php echo $detail['description'] ?>
					</div>
				</div>
	
				<div class="col-lg-12">
					<div class="content-related">
						<div class="related-header">
							<h5>
								Sản phẩm liên quan
							</h5>
						</div>
	
						<div class="related-body">
							<div class="swiper-container" id="swiperRelated">
								<div class="swiper-pagination"></div>
	
								<div class="swiper-button-next"></div>
								<div class="swiper-button-prev"></div>
								
								<div class="swiper-wrapper">
									<?php if(count($related_products)>0): ?>
										<?php foreach($related_products as $key => $slide): ?>
											<div class="swiper-slide">
												<a href="<?php echo base_url('product/detail/' . $slide['slug']) ?>">
													<div class="card">
														<div class="img-mask">
															<div class="overlay">
																<h6>
																	Xem ngay
																</h6>
															</div>

															<img src="<?= base_url('assets/upload/product/' . $slide['slug'] . '/' . $slide['image']) ?>" alt="Dental">
														</div>

														<div class="card-body">
															<p class="p-sm sale-code">
																<?php echo $slide['code'] ?>
															</p>

															<h5 class="sale-title">
																<?php echo $slide['title'] ?>
															</h5>

															<!-- <div class="sale-campaigns">
																<span class="badge badge-outline-primary">
																	Campaign 1
																</span>

																<span class="badge badge-outline-primary">
																	Campaign 2
																</span>
															</div> -->

															<p class=<p class="p-sm sale-made-in">
																Thương hiệu: <?= $brandIds[$slide['brand_id']] ?>
															</p>

															<p class="p-sm sale-standard">
																Xuất xứ: <?= $brandOrigins[$slide['origin_id']] ?>
															</p>

															<div class="price">
																<?= $slide['price'] ?>

																<!-- <div class="btn btn-sm btn-primary">
																	Thêm vào giỏ hàng
																</div> -->
															</div>
														</div>
													</div>
												</a>
											</div>
										<?php endforeach; ?>
									<?php else: ?>
										<p class="p-overline no-data">
											Không có sản phẩm nào được tìm thấy!
										</p>
									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>