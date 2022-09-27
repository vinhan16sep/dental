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
						<li class="breadcrumb-item active" aria-current="page">
							Sản phẩm
						</li>
					</ol>
				</nav>

				<h5>
					Sản phẩm nổi bật
				</h5>

				<h3>
					GHẾ NHA KHOA - MÁY NÉN
				</h3>
			</div>

			<div class="overview-body">
				<div class="swiper-container" id="swiperHighlight">
					<div class="swiper-pagination"></div>
					
					<div class="swiper-button-next"></div>
					<div class="swiper-button-prev"></div>
					
					<div class="swiper-wrapper">
						<?php foreach($focus_products as $key => $value): ?>
							<div class="swiper-slide">
								<a href="<?php echo base_url('product/detail/' . $value['slug']) ?>">
									<div class="card">
										<div class="img-mask">
											<img src="<?= base_url('assets/upload/product/' . $value['slug'] . '/' . $value['image']) ?>" alt="Dental">
										</div>

										<div class="card-body">
											<p class="p-sm sale-code">
												<?php echo $value['code'] ?>
											</p>

											<h5 class="sale-title">
												<?php echo $value['title'] ?>
											</h5>

											<p class="p-sm sale-made-in">
												Xuất xứ: <?php echo $value['origin'] ?>
											</p>

											<p class="p-sm sale-standard">
												Tiêu chuẩn: <?php echo $value['brand'] ?>
											</p>
										</div>
									</div>
								</a>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="products">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<div class="products-filter">
						<div class="filter-item">
							<div class="item-header">
								<h6>
									Danh mục
								</h6>
							</div>

							<div class="item-body">
								<ul>
									<?php foreach ($product_categories as $key => $value): ?>
									<li>
										<a href="#">
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
							</div>

							<div class="item-body">
								<ul>
									<li>
										<a href="#">
											Sản phẩm nổi bật
										</a>
									</li>
									<li>
										<a href="#">
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
							</div>

							<div class="item-body">
								<ul>
									<?php foreach ($origins as $key => $value): ?>
									<li>
										<a href="#">
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
							</div>

							<div class="item-body">
								<ul>
									<?php foreach ($brands as $key => $value): ?>
									<li>
										<a href="#">
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
								<li class="breadcrumb-item active" aria-current="page">
									GHẾ NHA KHOA - MÁY NÉN
								</li>
							</ol>
						</nav>
						
						<div class="row">
							<?php foreach ($products as $key => $value): ?>
								<div class="col-lg-4">
									<div class="card">
										<div class="ratio-wrapper ratio-wrapper-16-9">
											<div class="img-mask">
												<a href="<?php echo base_url('product/detail/' . $value['slug']) ?>">
													<img src="<?= base_url('assets/upload/product/' . $value['slug'] . '/' . $value['image']) ?>" alt="Dental">
												</a>
											</div>

											<div class="overlay">
												<a href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="Campagin">
													<i class="fas fa-bookmark"></i>
												</a>

												<a href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Sản phẩm nổi bật">
													<i class="fas fa-star"></i>
												</a>
											</div>
										</div>

										<div class="card-body">
											<div>
												<p class="p-sm code">
													<?= $value['code'] && $value['code'] != '' ? $value['code'] : '000' ?>
												</p>
											</div>

											<a href="<?php echo base_url('product/detail/' . $value['slug']) ?>">
												<h5 class="sale-title">
													<?= $value['title'] ?>
												</h5>
											</a>

											<p class="p-sm sale-made-in">
												Xuất xứ: America
											</p>

											<p class="p-sm sale-standard">
												Tiêu chuẩn: Laformed
											</p>

											<p class="price">
												Liên hệ

												<a href="#" class="btn btn-sm btn-primary" role="button">
													Thêm vào giỏ hàng
												</a>
											</p>
										</div>
									</div>
								</div>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>