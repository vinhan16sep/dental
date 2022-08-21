<div class="view-service">
	<div class="container">
		<div class="service-overview">
			<div class="row">
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
				<?php
					$services = [
						0 => [
							'title' => 'Dịch vụ I',
							'desc' => 'Quisque commodo efficitur tempus. Duis lobortis vehicula dui, ut posuere purus interdum eu. Etiam non ultricies leo. Proin mollis magna eros, vel tempus lorem pharetra sed. Vestibulum in ipsum leo. In ut quam non tortor consequat congue quis a est. Maecenas blandit gravida commodo. Fusce luctus egestas dolor. Duis vulputate diam a mi scelerisque faucibus.',
							'image' => 'https://images.unsplash.com/photo-1606811841689-23dfddce3e95?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTd8fGRlbnRhbHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60',
							'url' => '/service/detail'
						],
						1 => [
							'title' => 'Dịch vụ II',
							'desc' => 'Quisque commodo efficitur tempus. Duis lobortis vehicula dui, ut posuere purus interdum eu. Etiam non ultricies leo. Proin mollis magna eros, vel tempus lorem pharetra sed. Vestibulum in ipsum leo. In ut quam non tortor consequat congue quis a est. Maecenas blandit gravida commodo. Fusce luctus egestas dolor. Duis vulputate diam a mi scelerisque faucibus.',
							'image' => 'https://images.unsplash.com/photo-1606811841689-23dfddce3e95?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTd8fGRlbnRhbHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60',
							'url' => '/service/detail'
						],
						2 => [
							'title' => 'Dịch vụ III',
							'desc' => 'Quisque commodo efficitur tempus. Duis lobortis vehicula dui, ut posuere purus interdum eu. Etiam non ultricies leo. Proin mollis magna eros, vel tempus lorem pharetra sed. Vestibulum in ipsum leo. In ut quam non tortor consequat congue quis a est. Maecenas blandit gravida commodo. Fusce luctus egestas dolor. Duis vulputate diam a mi scelerisque faucibus.',
							'image' => 'https://images.unsplash.com/photo-1606811841689-23dfddce3e95?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTd8fGRlbnRhbHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60',
							'url' => '/service/detail'
						],
						3 => [
							'title' => 'Dịch vụ IV',
							'desc' => 'Quisque commodo efficitur tempus. Duis lobortis vehicula dui, ut posuere purus interdum eu. Etiam non ultricies leo. Proin mollis magna eros, vel tempus lorem pharetra sed. Vestibulum in ipsum leo. In ut quam non tortor consequat congue quis a est. Maecenas blandit gravida commodo. Fusce luctus egestas dolor. Duis vulputate diam a mi scelerisque faucibus.',
							'image' => 'https://images.unsplash.com/photo-1606811841689-23dfddce3e95?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTd8fGRlbnRhbHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60',
							'url' => '/service/detail'
						],
					];
				?>

				<?php foreach($services as $service): ?>
					<div class="col-lg-6">
						<div class="service-item">
							<div class="item-header">
								<a href="<?php echo $service['url'] ?>">
									<h6>
										<?php echo $service['title'] ?>
									</h6>
								</a>
							</div>

							<div class="item-body">
								<p>
									<?php echo $service['desc'] ?>
								</p>

								<a href="<?php echo $service['url'] ?>">
									<div class="ratio-wrapper ratio-wrapper-16-9">
										<div class="img-mask">
											<img src="<?php echo $service['image'] ?>" alt="Dental">
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