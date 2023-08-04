<div class="view-homepage">
	<div class="section section-cover">
		<div class="swiper-container" id="swiperCover">
			<div class="swiper-pagination"></div>

			<div class="swiper-wrapper">
				<?php foreach($banner as $key => $slide): ?>
					<div class="swiper-slide" data-index="<?php echo $key ?>" data-title="">
						<a href="<?php echo $slide['url'] ?>">
							<div class="container-fluid">
								<!-- <?php if($slide['title'] != '') : ?>
									<div class="text">
										<h3>
											<?php echo $slide['title'] ?>
										</h3>

										<h6>
											Tìm hiểu thêm <i class="fas fa-arrow-right"></i>
										</h6>
									</div>
								<?php endif ?> -->
							</div>

							<div class="img-mask">
								<img src="<?php echo base_url('/assets/upload/banner/' . $slide['image']) ?>" alt="Dental">
							</div>
						</a>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>

	<div class="section section-about">
		<div class="container">
			<div class="section-header">
				<h3>
					Về chúng tôi
				</h3>
			</div>
	
			<div class="section-body">
				<div class="about-heading">
					<div class="row">
						<div class="col-lg-9">
							<h6>
								Lời đầu tiên, xin cảm ơn Quý khách hàng đã ghé thăm website của Minh Dental. Nếu Quý khách hàng đang cần tìm một đơn vị uy tín cung cấp các trang - thiết bị và vật tư về nha khoa thì vui lòng đừng bỏ qua các thông tin dưới đây.
							</h6>

							<h6>
								Với gần 40 năm xây dựng và phát triển, Minh Dental đã trở thành một cái tên quen thuộc đối với nhiều phòng khám Nha khoa và các đại lý phân phối thiết bị Nha khoa trên cả nước. 
							</h6>

							<h6>
								Không chỉ là đơn vị phân phối độc quyền các trang thiết bị Nha khoa của các thương hiệu nổi tiếng trên thế giới, Minh Dental còn có dịch vụ chăm sóc sau bán hàng được các đối tác đánh giá tốt nhất hiện nay. 
							</h6>
						</div>
					</div>
				</div>

				<div class="about-content">
					<div class="row">
						<div class="col-lg-4 wow fadeInUp" data-wow-delay="0s">
							<h3>
								40
							</h3>

							<h5>
								Năm kinh nghiệm trong ngành Y - Nha khoa
							</h5>
						</div>

						<div class="col-lg-4 wow fadeInUp" data-wow-delay="1s">
							<h3>
								200+
							</h3>

							<h5>
								Đại lý trên khắp cả nước
							</h5>
						</div>

						<div class="col-lg-4 wow fadeInUp" data-wow-delay="2s">
							<h3>
								10.000
							</h3>

							<h5>
								Phòng khám Nha khoa tin dùng
							</h5>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="section section-highlight">
		<div class="container">
			<div class="section-header">
				<h3>
					Sản phẩm nổi bật
				</h3>

				<select class="form-select" id="filterHighlight">
					<option value="">
						Tất cả
					</option>

					<?php foreach($product_category as $category): ?>
						<option value="<?php echo $category['id'] ?>">
							<?php echo $category['title'] ?>
						</option>
					<?php endforeach; ?>
				</select>
			</div>

			<div class="section-body">
				<div class="swiper-container" id="swiperHighlight">
					<div class="swiper-pagination"></div>

					<div class="swiper-button-next"></div>
					<div class="swiper-button-prev"></div>
					
					<div class="swiper-wrapper"></div>
				</div>
			</div>

			<div class="swiper-slide swiper-slide-highlight-prepare" style="display: none;">
				<a href="#">
					<div class="card card-product">
						<div class="ratio-wrapper ratio-wrapper-1-1">
							<div class="img-mask">
								<img src="" alt="Dental">
							</div>
						</div>

						<div class="card-body">
							<div>
								<p class="p-sm code"></p>
							</div>

							<h5 class="title"></h5>

							<!-- <div class="campaigns">
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
				</a>
			</div>
		</div>
	</div>

	<div class="section section-categories">
		<div class="container">
			<div class="section-header">
				<h3>
					Các dòng sản phẩm
				</h3>
			</div>
			<div class="section-body">
				<div class="row">
					<?php foreach($product_category as $key => $category): ?>
						<div class="col-lg-4 col-md-6">
							<a href="<?php echo base_url('/product/' . $category['slug']) ?>">		
								<div class="card wow fadeIn" data-delay="<?php echo $key % 3 ?>">
									<div class="card-body">
										<div class="img-mask">
											<img src="<?php echo base_url('/assets/upload/product-category/' . $category['slug'] . '/' . $category['image']) ?>" alt="Dental">
										</div>
										<h6>
											<?php echo $category['title'] ?>
										</h6>
									</div>
								</div>
							</a>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>

	<div class="section section-client">
		<div class="container">
			<div class="section-header">
				<h3>
					Đối tác
				</h3>
			</div>
	
			<div class="section-body">
				<div class="client-heading">
					<div class="row">
						<div class="col-lg-9">
							<h6>
								Minh Dental hợp tác chặt chẽ với nhiều đơn vị cung cấp trang thiết bị Nha khoa đến từ các thương hiệu nổi tiếng và lâu năm trên thế giới như: Cingol, Jindel, Baolai…, nhằm đảm bảo mang đến cho khách hàng nguồn hàng uy tín và chất lượng cao.
							</h6>
						</div>
					</div>
				</div>

				<div class="client-content">
					<div class="row">
						<div class="col-lg-12">
							<div class="swiper-container" id="swiperClient">
								<div class="swiper-pagination"></div>
								
								<div class="swiper-button-next"></div>
								<div class="swiper-button-prev"></div>
								
								<div class="swiper-wrapper">
									<?php foreach($partners as $partner): ?>
										<div class="swiper-slide">
											<a href="#">
												<div class="img-mask img-mask-circle">
													<img src="<?php echo base_url('assets/upload/partner/' . $partner['slug'] . '/' . $partner['image']) ?>" alt="Client">
												</div>
											</a>
										</div>
									<?php endforeach; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="section section-receive-notification">
		<div class="img-mask">
			<img src="<?php echo base_url('assets/img/homepage_register.jpg') ?>" alt="Background notification">
		</div>

		<div class="overlay">
			<h4>
				đăng kí để nhận thông báo
			</h4>

			<p>
				Hãy đăng ký ngay để nhận thông báo về các chương trình khuyến mại trong năm của Minh Dental.
			</p>

			<button class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#modalReceiveNotification" type="button">
				<i class="fas fa-envelope"></i> Nhận thông báo
			</button>

			<p>
				hoặc theo dõi qua
			</p>

			<ul class="list-unstyled">
				<li>
					<a href="#" class="btn" target="_blank" role="button">
						<i class="fab fa-facebook-f"></i> Facebook
					</a>
				</li>
				<li>
					<a href="#" class="btn" target="_blank" role="button">
						<i class="fab fa-youtube"></i> Youtube
					</a>
				</li>
			</ul>
		</div>
	</div>

	<div class="section section-blogs">
		<div class="container">
			<div class="section-header">
				<h3>
					Tin tức
				</h3>
			</div>

			<div class="section-body">
				<div class="row">
					<?php foreach($blogs as $key => $slide): ?>
						<div class="col-lg-4">
							<div class="card">
								<div class="card-body">
									<a href="<?php echo base_url('blogs/detail/' . $slide['slug']) ?>">
										<h5>
											<?php echo $slide['title'] ?>
										</h5>
									</a>

									<p class="p-sm date">
										<?php echo date('d/m/Y', $slide['created_at']) ?>
									</p>

									<p class="p-sm">
										<?php echo $slide['description'] ?>
									</p>

									<a href="<?php echo base_url('blogs/detail/' . $slide['slug']) ?>">
										Xem chi tiết <i class="fas fa-chevron-right"></i>
									</a>
								</div>

								<a href="<?php echo base_url('blogs/detail/' . $slide['slug']) ?>">
									<div class="ratio-wrapper ratio-wrapper-16-9">
										<div class="img-mask">
											<img src="<?= base_url('assets/upload/news/' . $slide['slug'] . '/' . $slide['image']) ?>" alt="Blog image">
										</div>
									</div>
								</a>
							</div>
						</div>
					<?php endforeach; ?>
				</div>

				<div class="swiper-container" id="swiperBlogs">
					<div class="swiper-pagination"></div>

					<div class="swiper-button-next"></div>
					<div class="swiper-button-prev"></div>
					
					<div class="swiper-wrapper">
						<?php foreach($blogs as $key => $slide): ?>
							<div class="swiper-slide">
								
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="modalBanner">
		<div class="modal-dialog modal-lg modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<button class="btn" data-bs-dismiss="modal" type="button">
						<i class="fas fa-times"></i>
					</button>
				</div>
				<div class="modal-body">
					<img src="<?php echo base_url('assets/img/banner.png') ?>" alt="Banner">
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="modalHighlightDetail">
		<div class="modal-dialog modal-xl modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<div></div>

					<button class="btn" data-bs-dismiss="modal" type="button">
						<i class="fas fa-times"></i>
					</button>
				</div>

				<div class="modal-body">
					<div class="row">
						<div class="col-lg-5">
							<div class="img-mask">
								<img src="" alt="">
							</div>
						</div>
						<div class="col-lg-7">
							<div class="text">
								<h3></h3>

								<p class="description"></p>

								<ul class="list-unstyled">
									<li>
										<h6>
											Thương hiệu : <span class="product-brand"></span>
										</h6>
									</li>
									<li>
										<h6>
											Nước sản xuất : <span class="product-made-in"></span>
										</h6>
									</li>
									<li>
										<h6>
											Bảo hành : <span class="product-warranty"></span> tháng
										</h6>
									</li>
								</ul>

								<div class="append-content"></div>

								<a href="#">
									Xem chi tiết <i class="fas fa-chevron-right"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>