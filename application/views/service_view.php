<div class="view-service">
	<div class="container">
		<div class="service-overview">
			<div class="row">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">
							<a href="<?php echo base_url('/') ?>">
								Trang chủ
							</a>
						</li>
						<li class="breadcrumb-item active" aria-current="page">
							Dịch vụ
						</li>
					</ol>
				</nav>
				
				<div class="col-lg-6">
					<h3>
						Dịch vụ
					</h3>
				</div>

				<div class="col-lg-6">
					<p>Quisque commodo efficitur tempus. Duis lobortis vehicula dui, ut posuere purus interdum eu. Etiam non ultricies leo. Proin mollis magna eros, vel tempus lorem pharetra sed. Vestibulum in ipsum leo. In ut quam non tortor consequat congue quis a est. Maecenas blandit gravida commodo. Fusce luctus egestas dolor. Duis vulputate diam a mi scelerisque faucibus.</p>

					<p>Nam faucibus orci at lectus dapibus commodo. Ut auctor mauris non risus sollicitudin, sed tincidunt elit tincidunt. Sed laoreet rutrum eros id congue. Integer venenatis odio id augue auctor tincidunt. Curabitur at malesuada magna, vitae sagittis lacus. Nullam dignissim orci quis lacus molestie euismod. Nam varius scelerisque leo ut congue. In massa arcu, lacinia at eros fringilla, congue feugiat lacus.</p>
				</div>
			</div>
		</div>

		<div class="service-list">
			<div class="row">

				<?php foreach($services as $service): ?>
					<div class="col-lg-6 col-md-6">
						<div class="service-item">
							<div class="item-header">
								<a href="<?php echo base_url('service/detail/' . $service['slug']) ?>">
									<h3>
										<?php echo $service['title'] ?>
									</h3>
								</a>
							</div>

							<div class="item-body">
								<p>
									<?php echo $service['description'] ?>
								</p>

								<a href="<?php echo base_url('service/detail/' . $service['slug']) ?>">
									<div class="ratio-wrapper ratio-wrapper-16-9">
										<div class="img-mask">
											<img src="<?= base_url('assets/upload/service/' . $service['slug'] . '/' . $service['image']) ?>" alt="Dental">
										</div>
									</div>
								</a>
							</div>
						</div>
					</div>
				<?php endforeach;?>
			</div>
		</div>
	</div>
</div>