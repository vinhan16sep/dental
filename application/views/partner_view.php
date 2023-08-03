<div class="view-partner">
	<div class="container">
		<div class="overview">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item">
						<a href="<?php echo base_url('/') ?>">
							Trang chủ
						</a>
					</li>
					<li class="breadcrumb-item active" aria-current="page">
						Đối tác
					</li>
				</ol>
			</nav>

			<h3>
				Đối tác
			</h3>
		</div>

		<div class="row">
			<div class="col-lg-3">
				<div class="partner-filter">
					<div class="filter-item">
						<div class="item-header">
							<h6>
								Quốc gia
							</h6>

							<a href="#" class="btn-expand-item">
								<i class="fas fa-minus"></i>
							</a>
						</div>

						<div class="item-body">
							<ul>
								<?php foreach($origins as $origin): ?>
									<li>
										<a href="#" class="btn-select-partner-by-origin" data-id="<?php echo $origin['id'] ?>">
											<?php echo $origin['title'] ?>
										</a>
									</li>
								<?php endforeach; ?>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-9 partners-list">
				<div class="row"></div>

				<div class="pagination"></div>

				<div class="col-lg-4 col-md-6 item-partner-prepare" style="display: none;">
					<a href="#">
						<div class="card">
							<div class="ratio-wrapper ratio-wrapper-1-1">
								<div class="img-mask">
									<img src="" alt="Partner image">
								</div>
							</div>

							<div class="card-body">
								<h5 class="partner-title"></h5>

								<p class="p-sm partner-desc"></p>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>