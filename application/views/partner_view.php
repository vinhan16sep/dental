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
					<?php foreach($partners as $item): ?>
						<div class="col-lg-4 col-md-6">
							<a href="<?php echo base_url('partners/detail/' . $item['slug']) ?>">
								<div class="card">
									<div class="ratio-wrapper ratio-wrapper-1-1">
										<div class="img-mask">
											<img src="<?= base_url('assets/upload/partner/' . $item['slug'] . '/' . $item['image']) ?>" alt="Partner image">
										</div>
									</div>

									<div class="card-body">
										<h5>
											<?php echo $item['title'] ?>
										</h5>

										<p class="p-sm">
											<?php echo $item['description'] ?>
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