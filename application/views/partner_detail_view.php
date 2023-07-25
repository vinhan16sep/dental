<div class="view-partner-detail">
	<div class="container">
		<div class="partner-overview">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item">
						<a href="<?php echo base_url('/') ?>">
							Trang chủ
						</a>
					</li>
					<li class="breadcrumb-item">
						<a href="<?php echo base_url('/partner/') ?>">
							Đối tác
						</a>
					</li>
					<li class="breadcrumb-item active" aria-current="page">
						<?php echo $detail['title'] ?>
					</li>
				</ol>
			</nav>

			<div class="row">
				<div class="col-lg-6">
					<!-- <h5>
						Đối tác
					</h5> -->

					<h3>
						<?php echo $detail['title'] ?>
					</h3>
				</div>

				<div class="col-lg-6">
					<p><?php echo $detail['description'] ?></p>
				</div>
			</div>
		</div>

		<div class="partner-content">
			<div class="cover">
				<div class="ratio-wrapper ratio-wrapper-16-9">
					<div class="img-mask">
						<img src="<?= base_url('assets/upload/partner/' . $detail['slug'] . '/' . $detail['image']) ?>" alt="Partner image">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="text">
						<?php echo $detail['body'] ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>