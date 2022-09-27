<div class="view-product-category">
	<div class="container">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="<?php echo base_url('/') ?>">
						Trang chủ
					</a>
				</li>
				<li class="breadcrumb-item active" aria-current="page">
					Sản phẩm
				</li>
			</ol>
		</nav>

		<div class="row">
			<?php foreach($product_category as $category): ?>
				<div class="col-lg-4">
					<a href="<?php echo base_url('/product/' . $category['slug']) ?>">		
						<div class="card">
							<div class="img-mask">
								<img src="https://images.unsplash.com/photo-1607613009820-a29f7bb81c04?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8ZGVudGFsfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="Cover of category">
							</div>
							<div class="card-body">
								<h6>
									<?php echo $category['title'] ?>
								</h6>
							</div>
						</div>
					</a>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>