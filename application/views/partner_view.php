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
								Partner Filter 1
							</h6>

							<a href="#" class="btn-expand-item">
								<i class="fas fa-minus"></i>
							</a>
						</div>

						<div class="item-body">
							<ul>
								<li>
									<a href="#">
										Category #1
									</a>
								</li>
								<li>
									<a href="#">
										Category #2
									</a>
								</li>
							</ul>
						</div>
					</div>

					<div class="filter-item">
						<div class="item-header">
							<h6>
								Partner Filter 2
							</h6>

							<a href="#" class="btn-expand-item">
								<i class="fas fa-minus"></i>
							</a>
						</div>

						<div class="item-body">
							<ul>
								<li>
									<a href="#">
										Category #3
									</a>
								</li>
								<li>
									<a href="#">
										Category #4
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-9">
				<div class="row">
					<?php for($i = 0; $i < 10; $i++): ?>
						<div class="col-lg-4 col-md-6">
							<a href="<?php echo base_url('partners/detail/') ?>">
								<div class="card">
									<div class="ratio-wrapper ratio-wrapper-1-1">
										<div class="img-mask">
											<img src="<?php echo base_url('assets/img/client/client_' . ($i + 1) . '.png') ?>" alt="Client">
										</div>
									</div>

									<div class="card-body">
										<h5>
											Client
										</h5>

										<p class="p-sm">
											Nam ornare metus et dictum condimentum. Suspendisse potenti. Curabitur vel libero augue. Nam ornare metus et dictum condimentum. Suspendisse potenti. Curabitur vel libero augue. 
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