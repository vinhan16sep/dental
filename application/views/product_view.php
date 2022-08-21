<div class="view-product">
	<div class="overview">
		<div class="container">
			<div class="overview-header">
				<h5>
					Sản phẩm nổi bật
				</h5>

				<h3>
					GHẾ NHA KHOA - MÁY NÉN
				</h3>
			</div>

			<div class="overview-body">
				<?php
					$highlights = [
						0 => [
							'code' => 'SP394',
							'title' => 'Nồi hấp tiệt trùng A123',
							'rating' => 4.5,
							'made_in' => 'Trung Quốc',
							'standard' => 'Class B',
							'url' => '/product/detail',
							'image' => 'https://images.unsplash.com/photo-1495573020741-8a2f372bbec3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjF8fGRlbnRhbHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60'
						],
						1 => [
							'code' => 'SP394',
							'title' => 'Nồi hấp tiệt trùng A123',
							'rating' => 4.5,
							'made_in' => 'Trung Quốc',
							'standard' => 'Class B',
							'url' => '/product/detail',
							'image' => 'https://images.unsplash.com/photo-1495573020741-8a2f372bbec3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjF8fGRlbnRhbHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60'
						],
						2 => [
							'code' => 'SP394',
							'title' => 'Nồi hấp tiệt trùng A123',
							'rating' => 4.5,
							'made_in' => 'Trung Quốc',
							'standard' => 'Class B',
							'url' => '/product/detail',
							'image' => 'https://images.unsplash.com/photo-1495573020741-8a2f372bbec3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjF8fGRlbnRhbHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60'
						],
						3 => [
							'code' => 'SP394',
							'title' => 'Nồi hấp tiệt trùng A123',
							'rating' => 4.5,
							'made_in' => 'Trung Quốc',
							'standard' => 'Class B',
							'url' => '/product/detail',
							'image' => 'https://images.unsplash.com/photo-1495573020741-8a2f372bbec3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjF8fGRlbnRhbHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60'
						],
						4 => [
							'code' => 'SP394',
							'title' => 'Nồi hấp tiệt trùng A123',
							'rating' => 4.5,
							'made_in' => 'Trung Quốc',
							'standard' => 'Class B',
							'url' => '/product/detail',
							'image' => 'https://images.unsplash.com/photo-1495573020741-8a2f372bbec3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjF8fGRlbnRhbHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60'
						]
					];
				?>

				<div class="swiper-container" id="swiperHighlight">
					<div class="swiper-pagination"></div>
					
					<div class="swiper-button-next"></div>
					<div class="swiper-button-prev"></div>
					
					<div class="swiper-wrapper">
						<?php foreach($highlights as $key => $slide): ?>
							<div class="swiper-slide">
								<a href="<?php echo base_url('/' . $slide['url']) ?>">
									<div class="card">
										<div class="img-mask">
											<img src="<?php echo $slide['image'] ?>" alt="Dental">
										</div>

										<div class="card-body">
											<p class="p-sm sale-code">
												<?php echo $slide['code'] ?>
											</p>

											<h5 class="sale-title">
												<?php echo $slide['title'] ?>
											</h5>

											<div class="star-rating">
												<?php for($i = 1; $i < 6; $i++): ?>
													<?php if($slide['rating'] >= $i): ?>
														<i class="fas fa-star"></i>
													<?php else: ?>
														<?php if($slide['rating'] > ($i - 1)): ?>
															<i class="fas fa-star-half-alt"></i>
														<?php else: ?>
															<i class="far fa-star"></i>
														<?php endif; ?>
													<?php endif; ?>
												<?php endfor; ?>
											</div>

											<p class="p-sm sale-made-in">
												Xuất xứ: <?php echo $slide['made_in'] ?>
											</p>

											<p class="p-sm sale-standard">
												Tiêu chuẩn: <?php echo $slide['standard'] ?>
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
									<li>
										<a href="#">
											Ghế nha khoa - Máy nén
										</a>
									</li>
									<li>
										<a href="#">
											Tay khoan nha khoa
										</a>
									</li>
									<li>
										<a href="#">
											Thiết bị - Phụ tùng
										</a>
									</li>
									<li>
										<a href="#">
											Laboratory
										</a>
									</li>
									<li>
										<a href="#">
											Vật tư - Dụng cụ
										</a>
									</li>
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
									<li>
										<a href="#">
											Trung Quốc
										</a>
									</li>
									<li>
										<a href="#">
											Mỹ
										</a>
									</li>
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
									<li>
										<a href="#">
											Lafomed
										</a>
									</li>
									<li>
										<a href="#">
											Litex
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
	
				<div class="col-lg-9">
					<div class="products-list">
						<div class="row">
							<?php for($i = 0; $i < 11; $i++): ?>
								<div class="col-lg-4">
									<a href="<?php echo '/product/detail' ?>">
										<div class="card">
											<div class="ratio-wrapper ratio-wrapper-16-9">
												<div class="img-mask">
													<img src="https://images.unsplash.com/photo-1495573020741-8a2f372bbec3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjF8fGRlbnRhbHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="Dental">
												</div>
											</div>

											<div class="card-body">
												<div>
													<p class="p-sm code">
														SP001
													</p>

													<div class="star-rating">
														<?php for($j = 1; $j < 6; $j++): ?>
															<i class="fas fa-star"></i>
														<?php endfor; ?>
													</div>
												</div>

												<h5 class="sale-title">
													Nồi hấp tiệt trùng A123
												</h5>

												<p class="price">
													Liên hệ
												</p>
											</div>
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