<div class="view-homepage">
	<div class="section section-cover">
		<div class="swiper-container" id="swiperCover">
			<div class="swiper-pagination"></div>

			<div class="swiper-wrapper">
				<?php foreach($campaigns as $key => $slide): ?>
					<div class="swiper-slide" data-index="<?php echo $key ?>" data-title="<?php echo $slide['title'] ?>">
						<a href="#">
							<div class="container-fluid">
								<div class="text">
									<h3>
										<?php echo $slide['title'] ?>
									</h3>

									<h6>
										Tìm hiểu thêm <i class="fas fa-arrow-right"></i>
									</h6>
								</div>
							</div>

							<div class="img-mask">
								<img src="<?php echo $slide['image'] ?>" alt="Dental">
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
								Lời đầu tiên MINH Dental kính chúc các Nha sĩ - Đại Lý – Các cửa hàng vật liệu nha khoa toàn quốc và các bạn đồng nghiệp nhiều sức khỏe và thành công.
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
								Khách hàng trên khắp cả nước
							</h5>
						</div>

						<div class="col-lg-4 wow fadeInUp" data-wow-delay="2s">
							<h3>
								20
							</h3>

							<h5>
								Nunc vel ipsum vestibulum, suscipit nulla ut, vestibulum quam
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
					<option value="all">
						Tất cả
					</option>

					<?php foreach($product_category as $category): ?>
						<option value="<?php echo $category['id'] ?>">
							<?php echo $category['title'] ?>
						</option>
					<?php endforeach; ?>
				</select>

				<!-- <ul class="list-unstyled">
					<li>
						<a href="#" class="get-highlight-by-category" data-type="all">
							Tất cả
						</a>
					</li>

					<?php foreach($product_category as $category): ?>
						<li>
							<a href="#" class="get-highlight-by-category" data-type="<?php echo $category['id'] ?>">
								<?php echo $category['title'] ?>
							</a>
						</li>
					<?php endforeach; ?>
				</ul> -->
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
					<div class="card">
						<div class="img-mask">
							<div class="overlay">
								<h6>
									Mua ngay
								</h6>
							</div>

							<img src="" alt="Dental">
						</div>

						<div class="card-body">
							<p class="p-sm code"></p>

							<h5 class="title"></h5>

							<div class="campaigns">
								<span class="badge badge-outline-primary">
									Campaign 1
								</span>

								<span class="badge badge-outline-primary">
									Campaign 2
								</span>
							</div>

							<p class="p-sm">
								Xuất xứ: <span class="made-in"></span>
							</p>

							<p class="p-sm standard">
								Tiêu chuẩn: <span class="standard"></span>
							</p>

							<div class="price">
								Liên hệ

								<div class="btn btn-sm btn-primary">
									Thêm vào giỏ hàng
								</div>
							</div>
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
						<div class="col-lg-4">
							<a href="<?php echo base_url('/product/' . $category['slug']) ?>">		
								<div class="card wow fadeIn" data-delay="<?php echo $key % 3 ?>">
									<img src="<?php echo base_url('assets/img/icons/clinic.png') ?>" alt="Cover of category">
									
									<div class="card-body">
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
								Nam ornare metus et dictum condimentum. Suspendisse potenti. Curabitur vel libero augue. 
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
									<?php for($i = 0; $i < 10; $i++): ?>
										<div class="swiper-slide">
											<a href="#">
												<div class="img-mask img-mask-circle">
													<img src="<?php echo base_url('assets/img/client/client_' . ($i + 1) . '.png') ?>" alt="Client">
												</div>
											</a>
										</div>
									<?php endfor; ?>
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
			<img src="https://images.unsplash.com/photo-1564420228450-d9a5bc8d6565?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1113&q=80" alt="Background notification">
		</div>

		<div class="overlay">
			<h4>
				đăng kí để nhận thông báo
			</h4>

			<p>
				Morbi molestie tempus eleifend. Pellentesque ac dolor commodo, volutpat urna varius, ultrices nunc. Nam leo leo, mollis et faucibus at, sollicitudin in massa
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