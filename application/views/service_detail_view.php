<div class="view-service-detail">
	<div class="container">
		<div class="service-overview">
			<div class="row">
				<div class="col-lg-6">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item">
								<a href="<?php echo base_url('/') ?>">
									Trang chủ
								</a>
							</li>
							<li class="breadcrumb-item">
								<a href="<?php echo base_url('/service/') ?>">
									Dịch vụ
								</a>
							</li>
							<li class="breadcrumb-item active" aria-current="page">
								<?php echo $detail['title'] ?>
							</li>
						</ol>
					</nav>

					<h5>
						Dịch vụ
					</h5>

					<h3>
						<?php echo $detail['title'] ?>
					</h3>
				</div>

				<div class="col-lg-6">
					<p><?php echo $detail['description'] ?></p>
				</div>
			</div>
		</div>

		<div class="service-content">
			<div class="cover">
				<div class="img-mask">
					<img src="<?= base_url('assets/upload/service/' . $detail['slug'] . '/' . $detail['image']) ?>" alt="Dental">
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
								Dịch vụ có thể bạn quan tâm
							</h5>
						</div>

						<div class="related-body">
							<div class="swiper-container" id="swiperRelated">
								<div class="swiper-pagination"></div>
								
								<div class="swiper-button-next"></div>
								<div class="swiper-button-prev"></div>
								
								<div class="swiper-wrapper">
									<?php foreach($services as $key => $slide): ?>
										<div class="swiper-slide">
											<a href="<?php echo base_url('service/detail/' . $slide['slug']) ?>">
												<div class="card">
													<div class="card-body">
														<h5>
															<?php echo $slide['title'] ?>
														</h5>
													</div>

													<div class="ratio-wrapper ratio-wrapper-16-9">
														<div class="img-mask">
															<img src="<?= base_url('assets/upload/service/' . $slide['slug'] . '/' . $slide['image']) ?>" alt="Dental">
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