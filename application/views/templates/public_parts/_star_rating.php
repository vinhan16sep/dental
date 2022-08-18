<div class="star-rating">
	<?php for($i = 1; $i < 6; $i++): ?>
		<i class="fas fa-star"></i>

		<!-- <?php if($rate >= $i): ?>
			<i class="fas fa-star"></i>
		<?php else: ?>
			<?php if($rate > ($i - 1)): ?>
				<i class="fas fa-star-half-alt"></i>
			<?php else: ?>
				<i class="far fa-star"></i>
			<?php endif; ?>		
		<?php endif; ?> -->
	<?php endfor; ?>
</div>