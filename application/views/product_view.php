<div class="view-product">
	<div class="overview">
		<div class="container">
			<div class="overview-header">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">
							<a href="<?php echo base_url('/') ?>">
								Trang chủ
							</a>
						</li>
						<?php if(isset($product_selected_category)):?>
							<li class="breadcrumb-item">
								<a href="<?php echo base_url('/product/') ?>">
									Sản phẩm
								</a>
							</li>
							<li class="breadcrumb-item active" aria-current="page">
								<?php echo $product_selected_category['title'] ?>
							</li>
						<?php else: ?>
							<li class="breadcrumb-item active">
								Sản phẩm
							</li>
						<?php endif; ?>
					</ol>
				</nav>

				<h5>
					Sản phẩm nổi bật
				</h5>

				<?php if(isset($product_selected_category)):?>
					<h3>
						<?php echo $product_selected_category['title'] ?>	
					</h3>
				<?php endif; ?>
			</div>

			<div class="overview-body <?php count($focus_products)>0 ? 'has-highlight' : '' ?>">
				<?php if(count($focus_products)>0): ?>
					<div class="swiper-container" id="swiperHighlight">
						<div class="swiper-pagination"></div>
						
						<div class="swiper-button-next"></div>
						<div class="swiper-button-prev"></div>
						
						<div class="swiper-wrapper">
							<?php foreach($focus_products as $key => $value): ?>
								<div class="swiper-slide">
									<a href="<?php echo base_url('product/detail/' . $value['slug']) ?>">
										<div class="card card-product">
											<div class="ratio-wrapper ratio-wrapper-1-1">
												<div class="img-mask">
													<img src="<?= base_url('assets/upload/product/' . $value['slug'] . '/' . $value['image']) ?>" alt="Dental">
												</div>
	
												<div class="overlay">
													<h6>
														Mua ngay
													</h6>
												</div>
											</div>
	
											<div class="card-body">
												<p class="p-sm sale-code">
													<?php echo $value['code'] != '' ? $value['code'] : '&nbsp' ?>
												</p>
	
												<h5 class="title">
													<?php echo $value['title'] ?>
												</h5>
	
												<!-- <div class="sale-campaigns">
													<span class="badge badge-outline-primary">
														Campaign 1
													</span>
	
													<span class="badge badge-outline-primary">
														Campaign 2
													</span>
												</div> -->
	
												<p class="p-sm brand">
													Thương hiệu: <?= $brandIds[$value['brand_id']] ?>
												</p>
	
												<p class="p-sm origin">
													Xuất xứ: <?= $brandOrigins[$value['origin_id']] ?>
												</p>
	
												<div class="price">
													<?php echo $value['price'] != '' ? $value['price'] : 'Liên hệ' ?>
	
													<!-- <button class="btn btn-sm btn-primary" type="button">
														Thêm vào giỏ hàng
													</button> -->
												</div>
											</div>
										</div>
									</a>
								</div>
							<?php endforeach; ?>
						</div>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>

	<div class="products">
		<div class="col-lg-4 col-md-6 item-product-prepare" style="display: none">
			<div class="card card-product">
				<div class="ratio-wrapper ratio-wrapper-1-1">
					<div class="img-mask">
						<a href="#">
							<img src="" alt="Dental">
						</a>
						<div class="overlay"></div>
					</div>
				</div>

				<div class="card-body">
					<div>
						<p class="p-sm code"></p>
					</div>

					<a href="#">
						<h5 class="title"></h5>
					</a>

					<!-- <div class="sale-campaigns">
						<span class="badge badge-outline-primary">
							Campaign 1
						</span>

						<span class="badge badge-outline-primary">
							Campaign 2
						</span>
					</div> -->

					<p class="p-sm origin">
						Thương hiệu: <span></span>
					</p>

					<p class="p-sm brand">
						Xuất xứ: <span></span>
					</p>

					<p class="price">
						<span></span>

						<!-- <button class="btn btn-sm btn-primary" type="button">
							Thêm vào giỏ hàng
						</button> -->
					</p>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<div class="products-filter">
						<div class="filter-item">
							<div class="item-header">
								<h6>
									Danh mục
								</h6>

								<a href="#" class="btn-expand-item">
									<i class="fas fa-minus"></i>
								</a>
							</div>

							<div class="item-body">
								<ul>
									<li>
										<a href="#" class="btn-filter-product <?php echo !isset($product_selected_category) ? 'active' : '' ?>" data-filter="category">
											Tất cả
										</a>
									</li>
									<?php foreach ($product_categories as $key => $value): ?>
										<li>
											<a href="#" class="btn-filter-product <?php echo isset($product_selected_category) && $product_selected_category['id'] == $value['id'] ? 'active' : '' ?>" data-filter="category" data-id="<?php echo $value['id'] ?>">
												<?= $value['title'] ?>
											</a>
										</li>
									<?php endforeach; ?>
								</ul>
							</div>
						</div>

						<div class="filter-item">
							<div class="item-header">
								<h6>
									Sản phẩm nổi bật
								</h6>

								<a href="#" class="btn-expand-item">
									<i class="fas fa-minus"></i>
								</a>
							</div>

							<div class="item-body">
								<ul>
									<li>
										<a href="#" class="btn-filter-product" data-filter="focus">
											Sản phẩm nổi bật
										</a>
									</li>
									<li>
									<a href="#" class="btn-filter-product" data-filter="sale">
											Flash sale
										</a>
									</li>
								</ul>
							</div>
						</div>

						<div class="filter-item">
							<div class="item-header">
								<h6>
									Xuất xứ
								</h6>

								<a href="#" class="btn-expand-item">
									<i class="fas fa-minus"></i>
								</a>
							</div>

							<div class="item-body">
								<ul>
									<?php foreach ($origins as $key => $value): ?>
									<li>
										<a href="#" class="btn-filter-product" data-filter="origin" data-id="<?= $value['id'] ?>">
											<?= $value['title'] ?>
										</a>
									</li>
									<?php endforeach; ?>
								</ul>
							</div>
						</div>

						<div class="filter-item">
							<div class="item-header">
								<h6>
									Thương hiệu
								</h6>

								<a href="#" class="btn-expand-item">
									<i class="fas fa-minus"></i>
								</a>
							</div>

							<div class="item-body">
								<ul>
									<?php foreach ($brands as $key => $value): ?>
									<li>
										<a href="#" class="btn-filter-product" data-filter="brand" data-id="<?= $value['id'] ?>">
											<?= $value['title'] ?>
										</a>
									</li>
									<?php endforeach; ?>
								</ul>
							</div>
						</div>
					</div>
				</div>
	
				<div class="col-lg-9">
					<div class="products-list">						
						<div class="row" id="appendProducts"></div>

						<div class="pagination"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>