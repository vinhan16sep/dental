<div class="view-service-detail">
	<div class="container">
		<div class="service-overview">
			<div class="row">
				<div class="col-lg-6">
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
				<div class="col-lg-9">
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

				<div class="col-lg-3">
					<p>
						<b>
							Vestibulum molestie tortor sit amet faucibus elementum. Nullam dapibus eu ex sit amet euismod. Mauris ac urna malesuada, varius arcu non, semper purus. Duis vitae ante semper, sodales magna in, ornare elit. In sodales dolor id sollicitudin molestie. Mauris sed pellentesque nisl. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
						</b>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>