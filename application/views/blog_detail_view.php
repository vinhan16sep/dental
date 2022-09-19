<div class="view-blog-detail">
	<div class="container">
		<div class="blog-overview">
			<div class="row">
				<div class="col-lg-6">
					<h5>
						Tin tức
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

		<div class="blog-content">
			<div class="cover">
				<div class="ratio-wrapper ratio-wrapper-16-9">
					<div class="img-mask">
						<img src="<?= base_url('assets/upload/news/' . $detail['slug'] . '/' . $detail['image']) ?>" alt="Blog image">
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-9">
					<div class="text">
						<?php echo $detail['body'] ?>
					</div>
				</div>

				<div class="col-lg-3">
					<div class="content-related">
						<div class="related-header">
							<h6 class="subtitle-md">
								Tin liên quan
							</h6>
						</div>

						<div class="related-body">

							<?php foreach($blogs as $blog): ?>
								<a href="<?php echo base_url('blogs/detail/' . $blog['slug']) ?>">
									<div class="item">
										<h6>
											<?php echo $blog['title'] ?>
										</h6>
					
										<p>
											<?php echo $blog['description'] ?>
										</p>
					
										<div class="ratio-wrapper ratio-wrapper-16-9">
											<div class="img-mask">
												<img src="<?= base_url('assets/upload/news/' . $blog['slug'] . '/' . $blog['image']) ?>" alt="Blog image">
											</div>
										</div>
									</div>
								</a>
							<?php endforeach;?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>