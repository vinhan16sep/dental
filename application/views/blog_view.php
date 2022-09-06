<div class="view-blog">
	<div class="container">
		<div class="overview">
			<h3>
				Tin tức
			</h3>
		</div>

		<div class="list-items list-blogs">
			<div class="item-sizer"></div>

			<?php foreach($blogs as $blog): ?>
				<a href="<?php echo base_url('blogs/detail/' . $blog['slug']) ?>">
					<div class="item">
						<h6>
							<?php echo $blog['title'] ?>
						</h6>
	
						<p>
							<?php echo $blog['description'] ?>
						</p>
	
						<img src="<?= base_url('assets/upload/service/' . $blog['slug'] . '/' . $blog['image']) ?>" alt="Blog image">
					</div>
				</a>
			<?php endforeach;?>
		</div>
	</div>
</div>