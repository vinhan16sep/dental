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
				<div class="list-items list-blogs">
					<div class="item-sizer"></div>

					<?php foreach($blogs as $blog): ?>
						<div class="item">
							<a href="<?php echo base_url('blogs/detail/' . $blog['slug']) ?>">
								<h6>
									<?php echo $blog['title'] ?>
								</h6>
							</a>

							<p class="p-sm">
								<?php echo date('d/m/Y', $blog['created_at']) ?>
							</p>
		
							<p>
								<?php echo $blog['description'] ?>
							</p>

							<a href="<?php echo base_url('blogs/detail/' . $blog['slug']) ?>">
								Xem chi tiết <i class="fas fa-chevron-right"></i>
							</a>
		
							<a href="<?php echo base_url('blogs/detail/' . $blog['slug']) ?>">
								<img src="<?= base_url('assets/upload/news/' . $blog['slug'] . '/' . $blog['image']) ?>" alt="Blog image">
							</a>
						</div>
					<?php endforeach;?>
				</div>
				
				<div class="item item-news-prepare" style="display: none">
					<a href="#">
						<h6 class="news-title"></h6>
					</a>

					<p class="p-sm news-date"></p>

					<p class="news-desc"></p>

					<a href="#">
						Xem chi tiết <i class="fas fa-chevron-right"></i>
					</a>

					<a href="#">
						<img src="" alt="Blog image">
					</a>
				</div>
			</div>
		</div>
	</div>
</div>