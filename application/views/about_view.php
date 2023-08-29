<div class="view-about">
	<div class="overview">
		<div class="container">
			<div class="overview-header"></div>

			<div class="overview-body">
				<div class="row">
					<div class="col-lg-6">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="<?php echo base_url('/') ?>">
										Trang chủ
									</a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">
									Về chúng tôi
								</li>
							</ol>
						</nav>

						<h3>
							Về chúng tôi
						</h3>

						<h6>
							<?php echo $ABOUT_DESC_1 ?>
						</h6>
					</div>

					<div class="col-lg-6">
						<p>
							<?php echo $ABOUT_DESC_2 ?>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="detail" id="aboutDetail">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<ul class="list-unstyled">
						<li>
							<a href="#aboutDetail">
								Giới thiệu về công ty
							</a>
						</li>
						<li style="display: none">
							<a href="#aboutLibrary">
								Tư liệu truyền thống
							</a>
						</li>
						<li>
							<a href="#aboutClient">
								Đối tác
							</a>
						</li>
						<li>
							<a href="#aboutFaq">
								FAQs
							</a>
						</li>
					</ul>
				</div>
				
				<div class="col-lg-9">
					<div class="ratio-wrapper ratio-wrapper-16-9">
						<div class="img-mask">
							<img src="https://images.unsplash.com/photo-1629909613654-28e377c37b09?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjZ8fGRlbnRhbHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="Cover">
						</div>
					</div>

					<div class="text">
						<p>
							<?php echo $ABOUT_DESC_3 ?>
						</p>	
					</div>

					<?php if($ABOUT_DESC_3 != ''): ?>
						<div class="video-break">
							<div class="ratio ratio-16x9">
								<iframe src="https://www.youtube.com/embed/<?php echo $ABOUT_DESC_3 ?>" title="YouTube video" allowfullscreen></iframe>
							</div>
						</div>
					<?php endif ?>

					<div class="library" id="aboutLibrary" style="display: none;">
						<div class="library-header">
							<h5>
								Tư liệu truyền thống
							</h5>
						</div>
				
						<div class="library-body">
							<div class="row">
								<div class="col-lg-4">
									<div class="library-filter">
										<div class="filter-item">
											<div class="item-header">
												<h6>
													Danh mục
												</h6>
											</div>

											<div class="item-body">
												<ul class="list-unstyled">
													<li>
														<a href="#">
															Category 1 Child 1
														</a>
													</li>
													<li>
														<a href="#">
															Category 1 Child 2
														</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>

								<div class="col-lg-8">
									<div class="library-post">
										<?php for($i = 0; $i < 3; $i++): ?>
											<div class="post-item">
												<a href="#">
													<div class="img-mask">
														<img src="https://images.unsplash.com/photo-1606811856475-5e6fcdc6e509?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8N3x8ZGVudGFsfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="Image library">
													</div>
												</a>

												<div class="text">
													<a href="#">
														<h6>
															Nulla vehicula rutrum ex a fermentum. In a vulputate sem, vel bibendum quam
														</h6>
													</a>

													<p>
														Duis vel eros non est dictum dictum. Duis congue malesuada orci id venenatis. Suspendisse iaculis mollis velit et vehicula. Donec pharetra diam id ornare egestas. Aliquam porttitor est et enim volutpat, nec malesuada libero fringilla. Phasellus sed felis et ante ornare porta in quis urna. Ut euismod, diam a molestie lacinia, mi tellus consequat augue, a condimentum lorem ante ut odio. Sed sagittis a enim id ornare. Duis vulputate condimentum viverra. Vivamus blandit nisi quis purus congue, in scelerisque turpis viverra.
													</p>
												</div>
											</div>
										<?php endfor; ?>
									</div>

									<div class="pagination show">
										<div class="pagination-list">
											<a href="#" class="pagination-item btn active" role="button">
												1
											</a>
											<a href="#" class="pagination-item btn" role="button">
												2
											</a>
											<a href="#" class="pagination-item btn" role="button">
												3
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="client" id="aboutClient">
						<div class="client-header">
							<h5>
								Đối tác
							</h5>
						</div>
				
						<div class="client-body">
							<div class="client-heading">
								<h6>
									<?php echo $PARTNER ?>
								</h6>
							</div>

							<div class="client-content">
								<div class="row">
									<div class="col-lg-12">
										<div class="swiper-container" id="swiperClient">
											<div class="swiper-pagination"></div>

											<div class="swiper-button-next"></div>
											<div class="swiper-button-prev"></div>
											
											<div class="swiper-wrapper">
												<?php foreach($partners as $partner): ?>
													<div class="swiper-slide">
														<a href="#">
															<div class="img-mask img-mask-circle">
																<img src="<?php echo base_url('assets/upload/partner/' . $partner['slug'] . '/' . $partner['image']) ?>" alt="Client">
															</div>
														</a>
													</div>
												<?php endforeach; ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="faq" id="aboutFaq" style="display: none;">
						<div class="faq-header">
							<h5>
								FAQs
							</h5>
						</div>
				
						<div class="faq-body">
							<?php foreach($faqs as $faq): ?>
								<a href="#" class="btn-get-faq-detail" data-id="<?php echo $faq['id'] ?>">
									<h6>
										<?php echo $faq['question'] ?>
									</h6>
								</a>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="modalFaqDetail">
		<div class="modal-dialog modal-lg modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<div></div>
					
					<button class="btn" data-bs-dismiss="modal" type="button">
						<i class="fas fa-times"></i>
					</button>
				</div>
				<div class="modal-body">
					<h6 class="faq-question"></h6>

					<p class="faq-answer"></p>
				</div>
			</div>
		</div>
	</div>
</div>