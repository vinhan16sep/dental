<div class="view-blog">
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
						Tin tức
					</li>
				</ol>
			</nav>

			<h3>
				Tin tức
			</h3>
		</div>

		<div class="row">
			<div class="col-lg-3">
				<div class="blog-filter">
					<div class="filter-item">
						<div class="item-header">
							<h6>
								Danh mục tin tức
							</h6>

							<a href="#" class="btn-expand-item">
								<i class="fas fa-minus"></i>
							</a>
						</div>

						<div class="item-body">
							<ul>
								<?php foreach ($blogs_categories as $key => $value): ?>
									<li>
										<a href="#" class="btn-select-news-by-category" data-id="<?php echo $value['id'] ?>">
											<?= $value['title'] ?>
										</a>
									</li>
								<?php endforeach; ?>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-9">
				<div class="list-blogs">
					<div class="row"></div>
				</div>
				
				<div class="col-lg-4 col-md-6 item-news-prepare" style="display: none">
					<div class="item">
						<a href="#">
							<h6 class="news-title"></h6>
						</a>
	
						<p class="p-sm news-date"></p>
	
						<p class="news-desc"></p>
	
						<a href="#">
							Xem chi tiết <i class="fas fa-chevron-right"></i>
						</a>
	
						<a href="#">
							<div class="ratio-wrapper ratio-wrapper-16-9">
								<div class="img-mask">
									<img src="" alt="Blog image">
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>