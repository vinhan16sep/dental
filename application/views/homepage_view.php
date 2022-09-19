<div class="view-homepage">
	<div class="section section-cover">
		<?php
			$cover = [
				0 => [
					'title' => 'Product Sale 1',
					'image' => 'https://images.unsplash.com/photo-1607613009820-a29f7bb81c04?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80',
					'url' => '#'
				],
				1 => [
					'title' => 'Product Sale 1',
					'image' => 'https://images.unsplash.com/photo-1607613009820-a29f7bb81c04?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80',
					'url' => '#'
				],
				2 => [
					'title' => 'Product Sale 1',
					'image' => 'https://images.unsplash.com/photo-1607613009820-a29f7bb81c04?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80',
					'url' => '#'
				],
				3 => [
					'title' => 'Product Sale 1',
					'image' => 'https://images.unsplash.com/photo-1607613009820-a29f7bb81c04?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80',
					'url' => '#'
				],
				4 => [
					'title' => 'Product Sale 1',
					'image' => 'https://images.unsplash.com/photo-1607613009820-a29f7bb81c04?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80',
					'url' => '#'
				],
			];
		?>

		<div class="cover-content">
			<h2 class="slide-title">
				Flash sale
			</h2>

			<a href="<?php echo $cover[0]['url'] ?>" class="btn btn-lg btn-outline-primary" role="button">
				Tìm hiểu thêm <i class="fas fa-arrow-right"></i>
			</a>
		</div>

		<div class="swiper-container" id="swiperCover">
			<div class="swiper-pagination"></div>

			<div class="swiper-wrapper">
				<?php foreach($cover as $key => $slide): ?>
					<div class="swiper-slide" data-index="<?php echo $key ?>" data-title="<?php echo $slide['title'] ?>">
						<a href="<?php echo base_url('/' . $slide['url']) ?>">
							<div class="ratio-wrapper ratio-wrapper-16-9">
								<div class="img-mask">
									<img src="<?php echo $slide['image'] ?>" alt="Dental">
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
				<h5>
					Về chúng tôi
				</h5>
			</div>
	
			<div class="section-body">
				<div class="about-heading">
					<div class="row">
						<div class="col-lg-9">
							<h6>
								Nam ornare metus et dictum condimentum. Suspendisse potenti. Curabitur vel libero augue. Nulla eu enim at sapien placerat pharetra sagittis vitae ipsum. Proin ut ante ac eros blandit tincidunt. Nulla vel convallis quam.
							</h6>
						</div>
					</div>
				</div>

				<div class="about-content">
					<div class="row">
						<div class="col-lg-6">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ullamcorper metus in leo accumsan ullamcorper. Aenean rutrum, orci convallis sollicitudin imperdiet, sem augue imperdiet lorem, in vulputate arcu ex ac dui. Phasellus rutrum arcu ac ligula feugiat, vitae semper orci facilisis. Donec et luctus ligula. Donec placerat, nibh in ornare posuere, quam lacus vestibulum lacus, molestie rhoncus tortor elit eu massa. Duis eget risus tortor. Aliquam ultricies elementum tincidunt. In commodo turpis pharetra, placerat enim rutrum, ultricies magna. Vestibulum in fermentum tellus. Nullam nibh justo, tempor eu nisi nec, placerat accumsan justo.
							</p>

							<p>
								In ut lorem enim. Morbi suscipit nisi vel nisi sollicitudin, nec scelerisque urna congue. Aliquam lobortis turpis non magna pharetra ultrices. Integer ut iaculis nisl, vitae aliquet sapien. Sed aliquam dui dictum lacus porttitor fringilla. Fusce sodales est vitae sem aliquet gravida. Mauris ipsum velit, dignissim vel malesuada vitae, porttitor quis quam. Sed et urna massa. Nullam sodales, diam ut bibendum faucibus, ipsum lorem fringilla ipsum, eget malesuada nisi orci ut erat. Aliquam erat volutpat. Ut vitae turpis vitae sem blandit efficitur in id magna. Aliquam nec pellentesque dolor. Pellentesque interdum lorem sit amet tellus auctor, eu laoreet arcu sagittis.
							</p>

							<a href="#" class="btn btn-lg btn-outline-primary" role="button">
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

	<div class="section section-flash-sale" style="display:none">
		<div class="container">
			<div class="section-header">
				<h5>
					Flash sale
				</h5>
			</div>

			<div class="section-body">
				<?php
					$flashSales = [
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

				<div class="swiper-container" id="swiperFlashSale">
					<div class="swiper-pagination"></div>

					<div class="swiper-button-next"></div>
					<div class="swiper-button-prev"></div>
					
					<div class="swiper-wrapper">
						<?php foreach($flashSales as $key => $slide): ?>
							<div class="swiper-slide">
								<a href="<?php echo base_url('/' . $slide['url']) ?>">
									<div class="ratio-wrapper ratio-wrapper-4-3">
										<div class="img-mask">
											<img src="<?php echo $slide['image'] ?>" alt="Dental">
										</div>

										<div class="overlay">
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

	<div class="section section-highlight">
		<div class="container">
			<div class="section-header">
				<h5>
					Sản phẩm nổi bật
				</h5>

				<ul class="list-unstyled">
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
				</ul>
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

	<div class="section section-blogs">
		<div class="container">
			<div class="section-header">
				<h5>
					Tin tức
				</h5>
			</div>

			<div class="section-body">
				<?php
					$blogs = [
						0 => [
							'title' => 'Duis ut diam sit amet augue ornare',
							'desc' => 'Vivamus dapibus molestie nulla eget dignissim. Suspendisse potenti. Ut vitae lectus eu ligula egestas consequat ut sed lorem. Aliquam erat volutpat. Maecenas efficitur faucibus tristique. Nullam mattis purus in arcu placerat',
							'url' => '#',
							'created_at' => '22/10/2022',
							'image' => 'https://images.unsplash.com/photo-1495573020741-8a2f372bbec3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjF8fGRlbnRhbHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60'
						],
						1 => [
							'title' => 'Pellentesque interdum lorem sit amet tellus auctor, eu laoreet arcu sagittis.',
							'desc' => 'Vivamus dapibus molestie nulla eget dignissim. Suspendisse potenti. Ut vitae lectus eu ligula egestas consequat ut sed lorem. Aliquam erat volutpat. Maecenas efficitur faucibus tristique. Nullam mattis purus in arcu placerat',
							'url' => '#',
							'created_at' => '22/10/2022',
							'image' => 'https://images.unsplash.com/photo-1495573020741-8a2f372bbec3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjF8fGRlbnRhbHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60'
						],
						2 => [
							'title' => 'Pellentesque interdum lorem sit amet tellus auctor, eu laoreet arcu sagittis.',
							'desc' => 'Vivamus dapibus molestie nulla eget dignissim. Suspendisse potenti. Ut vitae lectus eu ligula egestas consequat ut sed lorem. Aliquam erat volutpat. Maecenas efficitur faucibus tristique. Nullam mattis purus in arcu placerat...',
							'url' => '#',
							'created_at' => '22/10/2022',
							'image' => 'https://images.unsplash.com/photo-1495573020741-8a2f372bbec3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjF8fGRlbnRhbHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60'
						],
						3 => [
							'title' => 'Pellentesque interdum lorem sit amet tellus auctor, eu laoreet arcu sagittis.',
							'desc' => 'Vivamus dapibus molestie nulla eget dignissim. Suspendisse potenti. Ut vitae lectus eu ligula egestas consequat ut sed lorem.',
							'url' => '#',
							'created_at' => '22/10/2022',
							'image' => 'https://images.unsplash.com/photo-1495573020741-8a2f372bbec3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjF8fGRlbnRhbHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60'
						],
						4 => [
							'title' => 'Duis ut diam sit amet augue ornare',
							'desc' => 'Vivamus dapibus molestie nulla eget dignissim. Suspendisse potenti. Ut vitae lectus eu ligula egestas consequat ut sed lorem.',
							'url' => '#',
							'created_at' => '22/10/2022',
							'image' => 'https://images.unsplash.com/photo-1495573020741-8a2f372bbec3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjF8fGRlbnRhbHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60'
						]
					];
				?>

				<div class="swiper-container" id="swiperBlogs">
					<div class="swiper-pagination"></div>

					<div class="swiper-button-next"></div>
					<div class="swiper-button-prev"></div>
					
					<div class="swiper-wrapper">
						<?php foreach($blogs as $key => $slide): ?>
							<div class="swiper-slide">
								<a href="<?php echo base_url('/' . $slide['url']) ?>">
									<div class="card">
										<div class="card-body">
											<p class="p-sm">
												<?php echo $slide['created_at'] ?>
											</p>

											<h5>
												<?php echo $slide['title'] ?>
											</h5>

											<p class="p-sm">
												<?php echo $slide['desc'] ?>
											</p>
										</div>

										<div class="ratio-wrapper ratio-wrapper-16-9">
											<div class="img-mask">
												<img src="<?php echo $slide['image'] ?>" alt="Dental">
											</div>
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

	<div class="section section-client">
		<div class="container">
			<div class="section-header">
				<h5>
					Đối tác
				</h5>
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
											<div class="img-mask img-mask-circle">
												<img src="<?php echo base_url('assets/img/client/client_' . ($i + 1) . '.png') ?>" alt="Client">
											</div>
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
</div>