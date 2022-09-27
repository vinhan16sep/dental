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
							Ghế nha khoa - Máy nén
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
								Ghế nha khoa - Máy nén
							</h5>
	
							<h3>
								<?php echo $detail['title'] ?>
							</h3>
						</div>
	
						<div class="text-body">
							<p class="description">
								In ut lorem enim. Morbi suscipit nisi vel nisi sollicitudin, nec scelerisque urna congue. Aliquam lobortis turpis non magna pharetra ultrices. Integer ut iaculis nisl, vitae aliquet sapien. Sed aliquam dui dictum lacus porttitor fringilla. Fusce sodales est vitae sem aliquet gravida. Mauris ipsum velit, dignissim vel malesuada vitae, porttitor quis quam. Sed et urna massa. Nullam sodales, diam ut bibendum faucibus, ipsum lorem fringilla ipsum, eget malesuada nisi orci ut erat. 
							</p>
	
							<ul class="list-unstyled">
								<li>
									<h6>
										Thương hiệu : CINGOL
									</h6>
								</li>
								<li>
									<h6>
										Nước sản xuất : China
									</h6>
								</li>
								<li>
									<h6>
										Bảo hành : 12 tháng
									</h6>
								</li>
							</ul>
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
				</div>

				<div class="col-lg-12">
					<div class="text">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam iaculis justo metus, in accumsan odio dictum et. Duis venenatis massa sed molestie laoreet. Mauris efficitur ac nibh vel imperdiet. Pellentesque nec libero est. Nulla in accumsan libero. Quisque elementum eget felis eget facilisis. Fusce luctus nisl felis, cursus ornare nibh condimentum et. Phasellus ut justo nisl. Suspendisse pharetra vulputate auctor. Fusce vehicula leo eu posuere vehicula. Nunc blandit, nisl sed dictum condimentum, nunc felis porta nulla, eu scelerisque augue dui vel ligula. Phasellus ac tristique mauris, eget suscipit sapien. Maecenas eget dignissim turpis, vel sagittis mauris. Ut vitae mattis odio. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nisi nunc, semper ac risus sed, aliquet vestibulum quam.</p>
						<p>Vestibulum molestie tortor sit amet faucibus elementum. Nullam dapibus eu ex sit amet euismod. Mauris ac urna malesuada, varius arcu non, semper purus. Duis vitae ante semper, sodales magna in, ornare elit. In sodales dolor id sollicitudin molestie. Mauris sed pellentesque nisl. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
						
						<img src="https://images.unsplash.com/photo-1598256989800-fe5f95da9787?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTV8fGRlbnRhbHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="">
						
						<p>Pellentesque at tincidunt diam, quis hendrerit nibh. Mauris sollicitudin, leo ac sollicitudin tristique, enim nibh eleifend ante, sed tincidunt lectus dui sit amet enim. Mauris fringilla aliquam nibh, in fermentum enim venenatis vel. Aenean imperdiet arcu in justo interdum, in sodales purus consequat. Praesent ac lorem eget magna feugiat pulvinar. Cras nec condimentum ex. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur sagittis neque id lacinia sodales. Suspendisse ut mauris tellus. Sed non nunc non enim congue aliquam nec sit amet mi. Mauris at quam turpis. Donec tincidunt sit amet elit id tristique. Maecenas mi sem, aliquam non urna sed, feugiat vestibulum diam. Fusce posuere, tellus quis venenatis accumsan, ante enim consequat ligula, sit amet tempus sem eros commodo risus. Duis nisl erat, lacinia accumsan blandit eget, dapibus et ligula. Ut lorem nibh, pellentesque id molestie eu, viverra eu nibh.</p>
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
							<?php
								$related = [
									0 => [
										'code' => 'SP394',
										'title' => 'Nồi hấp tiệt trùng A123',
										'rating' => 4.5,
										'made_in' => 'Trung Quốc',
										'standard' => 'Class B',
										'url' => '#',
										'image' => 'https://images.unsplash.com/photo-1495573020741-8a2f372bbec3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjF8fGRlbnRhbHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60'
									],
									1 => [
										'code' => 'SP394',
										'title' => 'Nồi hấp tiệt trùng A123',
										'rating' => 4.5,
										'made_in' => 'Trung Quốc',
										'standard' => 'Class B',
										'url' => '#',
										'image' => 'https://images.unsplash.com/photo-1495573020741-8a2f372bbec3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjF8fGRlbnRhbHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60'
									],
									2 => [
										'code' => 'SP394',
										'title' => 'Nồi hấp tiệt trùng A123',
										'rating' => 4.5,
										'made_in' => 'Trung Quốc',
										'standard' => 'Class B',
										'url' => '#',
										'image' => 'https://images.unsplash.com/photo-1495573020741-8a2f372bbec3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjF8fGRlbnRhbHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60'
									],
									3 => [
										'code' => 'SP394',
										'title' => 'Nồi hấp tiệt trùng A123',
										'rating' => 4.5,
										'made_in' => 'Trung Quốc',
										'standard' => 'Class B',
										'url' => '#',
										'image' => 'https://images.unsplash.com/photo-1495573020741-8a2f372bbec3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjF8fGRlbnRhbHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60'
									],
									4 => [
										'code' => 'SP394',
										'title' => 'Nồi hấp tiệt trùng A123',
										'rating' => 4.5,
										'made_in' => 'Trung Quốc',
										'standard' => 'Class B',
										'url' => '#',
										'image' => 'https://images.unsplash.com/photo-1495573020741-8a2f372bbec3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjF8fGRlbnRhbHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60'
									]
								];
							?>
	
							<div class="swiper-container" id="swiperRelated">
								<div class="swiper-pagination"></div>
	
								<div class="swiper-button-next"></div>
								<div class="swiper-button-prev"></div>
								
								<div class="swiper-wrapper">
									<?php foreach($related as $key => $slide): ?>
										<div class="swiper-slide">
											<a href="<?php echo base_url('/' . $slide['url']) ?>">
												<div class="card">
													<div class="ratio-wrapper ratio-wrapper-16-9">
														<div class="img-mask">
															<img src="<?php echo $slide['image'] ?>" alt="Dental">
														</div>
													</div>
	
													<div class="card-body">
														<div>
															<p class="p-sm code">
																<?php echo $slide['code'] ?>
															</p>
	
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
														</div>
	
														<h5 class="sale-title">
															<?php echo $slide['title'] ?>
														</h5>
	
														<p class="price">
															Liên hệ
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
			</div>
		</div>
	</div>
</div>