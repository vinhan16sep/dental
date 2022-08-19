<div class="view-blog">
	<div class="container">
		<div class="overview">
			<h3>
				Tin tức
			</h3>
		</div>

		<div class="list-items list-blogs">
			<div class="item-sizer"></div>

			<?php 
				$blogs = [
					0 => [
						'title' => 'Cras semper nisl et massa cursus varius. Curabitur fringilla nunc non tortor iaculis vehicula id eu sapien. Curabitur congue, nulla vitae posuere',
						'desc' => 'Vestibulum in ipsum leo. In ut quam non tortor consequat congue quis a est non tortor consequat.',
						'image' => 'https://images.unsplash.com/photo-1609840113929-b130355987e1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzJ8fGRlbnRhbHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60',
						'url' => '#'
					],
					1 => [
						'title' => 'Curabitur fringilla nunc non tortor iaculis vehicula id eu sapien',
						'desc' => 'Quisque commodo efficitur tempus. Duis lobortis vehicula dui, ut posuere purus interdum eu. Etiam non ultricies leo. Proin mollis magna eros, vel tempus lorem pharetra sed. Vestibulum in ipsum leo. In ut quam non tortor consequat congue quis a est.',
						'image' => 'https://images.unsplash.com/photo-1588776813941-dcf9c55e84d2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzR8fGRlbnRhbHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60',
						'url' => '#'
					],
					2 => [
						'title' => 'Cras semper nisl et massa cursus varius. Curabitur fringilla nunc non tortor iaculis vehicula id eu sapien. Curabitur congue, nulla vitae posuere',
						'desc' => 'Vestibulum in ipsum leo. In ut quam non tortor consequat congue quis a est non tortor consequat.',
						'image' => 'https://images.unsplash.com/photo-1560070201-d3d11effa179?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mzl8fGRlbnRhbHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60',
						'url' => '#'
					],
					3 => [
						'title' => 'Curabitur fringilla nunc non tortor iaculis vehicula id eu sapien',
						'desc' => 'Vestibulum in ipsum leo. In ut quam non tortor consequat congue quis a est non tortor consequat.',
						'image' => 'https://images.unsplash.com/photo-1629909615184-74f495363b67?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NDZ8fGRlbnRhbHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60',
						'url' => '#'
					],
					4 => [
						'title' => 'Curabitur fringilla nunc non tortor iaculis vehicula id eu sapien',
						'desc' => 'Quisque commodo efficitur tempus. Duis lobortis vehicula dui, ut posuere purus interdum eu. Etiam non ultricies leo. Proin mollis magna eros, vel tempus lorem pharetra sed. Vestibulum in ipsum leo. In ut quam non tortor consequat congue quis a est.',
						'image' => 'https://images.unsplash.com/photo-1609840113929-b130355987e1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzJ8fGRlbnRhbHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60',
						'url' => '#'
					],
					5 => [
						'title' => 'Cras semper nisl et massa cursus varius. Curabitur fringilla nunc non tortor iaculis vehicula id eu sapien. Curabitur congue, nulla vitae posuere',
						'desc' => 'Quisque commodo efficitur tempus. Duis lobortis vehicula dui, ut posuere purus interdum eu. Etiam non ultricies leo. Proin mollis magna eros, vel tempus lorem pharetra sed. Vestibulum in ipsum leo. In ut quam non tortor consequat congue quis a est.',
						'image' => 'https://images.unsplash.com/photo-1611075384322-731537ad7971?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NDh8fGRlbnRhbHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60',
						'url' => '#'
					],
					6 => [
						'title' => 'Cras semper nisl et massa cursus varius. Curabitur fringilla nunc non tortor iaculis vehicula id eu sapien. Curabitur congue, nulla vitae posuere',
						'desc' => 'Quisque commodo efficitur tempus. Duis lobortis vehicula dui, ut posuere purus interdum eu. Etiam non ultricies leo. Proin mollis magna eros, vel tempus lorem pharetra sed. Vestibulum in ipsum leo. In ut quam non tortor consequat congue quis a est.',
						'image' => 'https://images.unsplash.com/photo-1609840113929-b130355987e1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzJ8fGRlbnRhbHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60',
						'url' => '#'
					],
				];
			?>

			<?php foreach($blogs as $blog): ?>
				<a href="<?php echo $blog['url'] ?>">
					<div class="item">
						<h6>
							<?php echo $blog['title'] ?>
						</h6>
	
						<p>
							<?php echo $blog['desc'] ?>
						</p>
	
						<img src="<?php echo $blog['image'] ?>" alt="Blog image">
					</div>
				</a>
			<?php endforeach;?>
		</div>
	</div>
</div>