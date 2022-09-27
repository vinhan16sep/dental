<div class="view-homepage">
	<div class="section section-cover">
		<div class="cover-content">
			<h2 class="slide-title">
				Flash sale
			</h2>

			<a href="javascript:void(0);" class="btn btn-lg btn-outline-primary" role="button">
				Tìm hiểu thêm <i class="fas fa-arrow-right"></i>
			</a>
		</div>

		<div class="swiper-container" id="swiperCover">
			<div class="swiper-pagination"></div>

			<div class="swiper-wrapper">
				<?php foreach($flashSales as $key => $slide): ?>
					<div class="swiper-slide" data-index="<?php echo $key ?>" data-title="<?php echo $slide['title'] ?>">
						<a href="<?php echo base_url('product/detail/' . $slide['slug']) ?>">
							<div class="ratio-wrapper ratio-wrapper-16-9">
								<div class="img-mask">
									<img src="<?= base_url('assets/upload/product/' . $slide['slug'] . '/' . $slide['image']) ?>" alt="Dental">
								</div>
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
						<div class="col-lg-6">
							<p>
								MINH Dental đã có nhiều năm kinh nghiệm. Được thành lập và kinh doanh vật liệu thiết bị máy móc trong ngành Nha Khoa từ năm 1985 đến nay, đã từng được chọn là nhà phân phối sản phẩm máy móc vật liệu của các Hãng nha khoa nổi tiếng đã có mặt ở Việt Nam. Suốt 30 năm qua MINH Dental đã tạo dựng thương hiệu bằng “Uy Tín – Chất Lượng – Hiệu Quả” . Là hệ thống phân phối sản phẩm chất lượng cao trong ngành Nha Khoa với nhiều chính sách hỗ trợ từ phía các nhà cung cấp nước ngoài, các công ty cung cấp vật liệu nha khoa danh tiếng tại Việt Nam. Hiện MINH Dental rất vinh dự được chọn là Nhà Phân Phối Chính Thức của GC (công ty hàng đầu thế giới của Nhật Bản về ngành Nha Khoa). Tất cả các sản phẩm chúng tôi cung cấp đều được chứng nhận bởi các tổ chức FDA – ADA – CE và tiêu chuẩn chất lượng ISO 13458.
							</p>

							<p>
								Với bề dầy kinh nghiệm 30 năm trong ngành nha khoa chúng tôi luôn mong muốn mang đến quý Nha sĩ, các phòng khám, các đại lý, các bạn đồng nghiệp những sản phẩm nha khoa chất lượng nhất, hoàn hảo nhất.
							</p>

							<a href="<?php echo base_url('/about') ?>" class="btn btn-lg btn-outline-primary" role="button">
								Tìm hiểu thêm <i class="fas fa-arrow-right"></i>
							</a>
						</div>

						<div class="col-lg-6">
							<div class="img-wrapper">
								<div>
									<img src="https://images.unsplash.com/photo-1588776814546-daab30f310ce?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTB8fGRlbnRhbHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="Image about 1">
								</div>

								<div>
									<img src="https://images.unsplash.com/photo-1588776813941-dcf9c55e84d2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzR8fGRlbnRhbHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="Image about 2">
								</div>
							</div>
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
							<img src="" alt="Dental">
						</div>

						<div class="card-body">
							<p class="p-sm code"></p>

							<h5 class="title"></h5>

							<div class="star-rating">
								
							</div>

							<p class="p-sm">
								Xuất xứ: <span class="made-in"></span>
							</p>

							<p class="p-sm standard">
								Tiêu chuẩn: <span class="standard"></span>
							</p>
						</div>
					</div>
				</a>
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
							<a href="<?php echo base_url('blogs/detail/' . $slide['slug']) ?>">
								<div class="card">
									<div class="card-body">
										<h5>
											<?php echo $slide['title'] ?>
										</h5>

										<p class="p-sm">
											<?php echo date('d/m/Y', $slide['created_at']) ?>
										</p>

										<p class="p-sm">
											<?php echo $slide['description'] ?>
										</p>
									</div>

									<div class="ratio-wrapper ratio-wrapper-16-9">
										<div class="img-mask">
											<img src="<?= base_url('assets/upload/news/' . $slide['slug'] . '/' . $slide['image']) ?>" alt="Blog image">
										</div>
									</div>
								</div>
							</a>
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
</div>