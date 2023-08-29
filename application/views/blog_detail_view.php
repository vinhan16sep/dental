<div class="view-blog-detail">
	<div class="container">
		<div class="blog-overview">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item">
						<a href="<?php echo base_url('/') ?>">
							Trang chủ
						</a>
					</li>
					<li class="breadcrumb-item">
						<a href="<?php echo base_url('/blogs/') ?>">
							Tin tức
						</a>
					</li>
					<li class="breadcrumb-item active" aria-current="page">
						<?php echo $detail['title'] ?>
					</li>
				</ol>
			</nav>

			<div class="row">
				<div class="col-lg-6">
					<h3>
						<?php echo $detail['title'] ?>
					</h3>
				</div>

				<div class="col-lg-6">
					<p><?php echo $detail['description'] ?></p>
				</div>
			</div>
		</div>

		<div class="blog-content">
			<div class="cover">
				<div class="ratio-wrapper ratio-wrapper-16-9">
					<div class="img-mask">
						<img src="<?= base_url('assets/upload/news/' . $detail['slug'] . '/' . $detail['image']) ?>" alt="Blog image">
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12">
					<div class="text">
						<?php echo $detail['body'] ?>
					</div>

					<div class="content-related">
						<div class="related-header">
							<h5>
								Tin liên quan
							</h5>
						</div>

						<div class="related-body">
							<div class="swiper-container" id="swiperRelated">
								<div class="swiper-pagination"></div>
								
								<div class="swiper-button-next"></div>
								<div class="swiper-button-prev"></div>
								
								<div class="swiper-wrapper">
									<?php foreach($blogs as $blog): ?>
										<div class="swiper-slide">
											<a href="<?php echo base_url('blogs/detail/' . $blog['slug']) ?>">
												<div class="card">
													<div class="card-body">
														<h5>
															<?php echo $blog['title'] ?>
														</h5>

														<p>
															<?php echo $blog['description'] ?>
														</p>
													</div>

													<div class="ratio-wrapper ratio-wrapper-16-9">
														<div class="img-mask">
															<img src="<?= base_url('assets/upload/news/' . $blog['slug'] . '/' . $blog['image']) ?>" alt="Dental">
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
			</div>
		</div>
	</div>
</div>