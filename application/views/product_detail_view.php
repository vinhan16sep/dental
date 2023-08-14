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
								<li>
									<h6>
										Bảo hành : <?= $detail['warranty'] ?>
									</h6>
								</li>
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
								<i class="fas fa-shopping-basket"></i> Mua ngay
							</button>

							<button class="btn btn-default btn-contact-us" type="button">
								<i class="fas fa-comments"></i> Gửi thông tin
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

						<?php echo $detail['body'] ?>
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
													<div class="card card-product">
														<div class="ratio-wrapper ratio-wrapper-1-1">
															<div class="img-mask">
																<img src="<?= base_url('assets/upload/product/' . $slide['slug'] . '/' . $slide['image']) ?>" alt="Dental">
															</div>

															<div class="overlay">
																<h6>
																	Xem ngay
																</h6>
															</div>
														</div>

														<div class="card-body">
															<p class="p-sm code">
																<?php echo $slide['code'] ?>
															</p>

															<h5 class="title">
																<?php echo $slide['title'] ?>
															</h5>

															<!-- <div class="campaigns">
																<span class="badge badge-outline-primary">
																	Campaign 1
																</span>

																<span class="badge badge-outline-primary">
																	Campaign 2
																</span>
															</div> -->

															<p class=<p class="p-sm brand">
																Thương hiệu: <?= $brandIds[$slide['brand_id']] ?>
															</p>

															<p class="p-sm origin">
																Xuất xứ: <?= $brandOrigins[$slide['origin_id']] ?>
															</p>

															<div class="price">
																<?php echo $slide['price'] != '' ? $slide['price'] : 'Liên hệ' ?>

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

	<div class="modal fade modal-order-product" id="modalOrderProduct">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h6>
						Đặt hàng
					</h6>

					<button class="btn" data-bs-dismiss="modal" type="button">
						<i class="fas fa-times"></i>
					</button>
				</div>
				<div class="modal-body">
					<?php
						echo form_open_multipart('/product/sendOrder', array('class' => 'form-horizontal'));
						?>
						<?php
							echo form_input('Slug', $detail['slug'], 'style="display: none;"');
						?>
						<div class="form-group">
							<?php
								echo form_label('Họ và tên', 'Name');
								echo form_error('Name');
								echo form_input('Name', set_value('Name'), 'class="form-control"');
							?>
						</div>
						<div class="form-group">
							<?php
								echo form_label('Số điện thoại', 'PhoneNumber');
								echo form_error('PhoneNumber');
								echo form_input('PhoneNumber', set_value('PhoneNumber'), 'class="form-control"');
							?>
						</div>
						<div class="form-group">
							<?php
								echo form_label('Sản phẩm muốn mua', 'Product');
								echo form_error('Product');
								echo form_input('Product', $detail['title'], 'class="form-control" readonly');
							?>
						</div>
						<div class="form-group">
							<?php
								echo form_label('Số lượng', 'Amount');
								echo form_error('Amount');
								echo form_input_number('Amount', 1, 'class="form-control" value="1" min="1" type="number"');
							?>
						</div>

						<?php echo form_submit('submit', 'Đặt hàng', 'class="btn btn-outline-primary" '); ?>
					<?php echo form_close(); ?>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade modal-advise-product" id="modalAdviseProduct">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h6>
						Yêu cầu tư vấn sản phẩm
					</h6>

					<button class="btn" data-bs-dismiss="modal" type="button">
						<i class="fas fa-times"></i>
					</button>
				</div>
				<div class="modal-body">
				<?php
						echo form_open_multipart('/product/sendOrder', array('class' => 'form-horizontal'));
						?>
						<?php
							echo form_input('Slug', $detail['slug'], 'style="display: none;"');
						?>
						<?php
							echo form_input_number('Amount', '', 'class="form-control" style="display: none;"');
						?>
						<div class="form-group">
							<?php
								echo form_label('Họ và tên', 'Name');
								echo form_error('Name');
								echo form_input('Name', set_value('Name'), 'class="form-control"');
							?>
						</div>
						<div class="form-group">
							<?php
								echo form_label('Số điện thoại', 'PhoneNumber');
								echo form_error('PhoneNumber');
								echo form_input('PhoneNumber', set_value('PhoneNumber'), 'class="form-control"');
							?>
						</div>
						<div class="form-group">
							<?php
								echo form_label('Sản phẩm muốn mua', 'Product');
								echo form_error('Product');
								echo form_input('Product', $detail['title'], 'class="form-control" readonly');
							?>
						</div>

						<?php echo form_submit('submit', 'Gửi thông tin', 'class="btn btn-outline-primary" '); ?>
					<?php echo form_close(); ?>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade modal-message" id="modalMessage">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-body">
					<p></p>
				</div>
				<div class="modal-footer">
					<button class="btn" data-bs-dismiss="modal" type="button">
						OK
					</button>
				</div>
			</div>
		</div>
	</div>
</div>