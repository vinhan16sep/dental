<div class="view-contact">
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
						Liên hệ
					</li>
				</ol>
			</nav>

			<h3>
				Liên hệ
			</h3>
		</div>

		<div class="address">
			<div class="row">
				<div class="col-lg-5">
					<div>
						<h6>
							Trụ sở
						</h6>
	
						<ul class="list-unstyled">
							<li>
								<p>
									Số 41 ngõ 38 Phương Mai - Đống Đa - Hà Nội
								</p>
							</li>
							<li>
								<p>
									Hotline: <a href="tel:(024) 3710 0625">(024) 3710 0625</a>
								</p>
							</li>
							<li>
								<p>
									Fax: (024) 3222 2788
								</p>
							</li>
							<li>
								<p>
									Email: <a href="mailto:info@minhdental.com">info@minhdental.com</a>
								</p>
							</li>
						</ul>
					</div>

					<div>
						<h6>
							Showroom
						</h6>

						<ul class="list-unstyled">
							<li>
								<p>
									111 E1 Phương Mai - Đống Đa - Hà Nội
								</p>
							</li>
							<li>
								<p>
									Hotline: <a href="tel:(+84 4) 3852 3643">(+84 4) 3852 3643</a>
								</p>
							</li>
							<li>
								<p>
									Fax: (+84 4) 3576 4192
								</p>
							</li>
							<li>
								<p>
									Email: <a href="mailto:vatlieunhakhoaminh@gmail.com">vatlieunhakhoaminh@gmail.com</a>
								</p>
							</li>
						</ul>
					</div>

					<!-- <div>
						<h6>
							&nbsp;
						</h6>

						<ul class="list-unstyled">
							<li>
								<p>
									Số 37 ngõ 38 Phương Mai, Đống Đa, Hà Nội
								</p>
							</li>
							<li>
								<p>
									Hotline: <a href="tel:(+84 4) 3710 0625">(+84 4) 3710 0625</a>
								</p>
							</li>
							<li>
								<p>
									Fax: (+84 4) 6325 7284
								</p>
							</li>
							<li>
								<p>
									Email: <a href="mailto:thietbinhakhoaviettrung@gmail.com">thietbinhakhoaviettrung@gmail.com</a>
								</p>
							</li>
						</ul>
					</div> -->
				</div>

				<div class="col-lg-7">
					<div class="map">
						<iframe width="500" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas" src="https://maps.google.com/maps?width=500&amp;height=400&amp;hl=en&amp;q=%20Hanoi+()&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe> <a href='http://www.single-boersen.net/'>Singleboersens Homepage</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=6755b69e2335d79ff9242086e390bef05ddd5056'></script>
					</div>		
				</div>
			</div>
		</div>

		<div class="message-form">
			<div class="form-header">
				<h5>
					Gửi tin nhắn cho chúng tôi
				</h5>
			</div>

			<div class="form-body">
				<?php
					echo form_open_multipart('/contact/sendMessage', array('class' => 'form-horizontal'));
					?>
					<div class="row">
						<div class="form-group col-lg-12">
							<?php
                                echo form_error('Name');
                                echo form_input('Name', set_value('Name'), 'class="form-control form-control-lg" id="Name" placeholder="Họ tên"');
                                ?>
						</div>
						<div class="form-group col-lg-6">
							<?php
                                echo form_error('Email');
                                echo form_input('Email', set_value('Email'), 'class="form-control form-control-lg" id="Email" placeholder="Email"');
                                ?>
						</div>
						<div class="form-group col-lg-6">
							<?php
                                echo form_error('PhoneNumber');
                                echo form_input('PhoneNumber', set_value('PhoneNumber'), 'class="form-control form-control-lg" id="PhoneNumber" placeholder="Số điện thoại"');
                                ?>
						</div>
						<div class="form-group col-lg-6">
							<?php
                                echo form_error('Position');
                                echo form_input('Position', set_value('Position'), 'class="form-control form-control-lg" id="Position" placeholder="Vị trí"');
                                ?>
						</div>
						<div class="form-group col-lg-6">
							<?php
                                echo form_error('Company');
                                echo form_input('Company', set_value('Company'), 'class="form-control form-control-lg" id="Company" placeholder="Đơn vị công tác"');
                                ?>
						</div>
						<div class="form-group col-lg-12">
							<select class="form-select form-select-lg" name="TitleType">
								<?php foreach($product_category as $category): ?>
									<option value="<?php echo $category['id'] ?>">
										<?php echo $category['title'] ?>
									</option>
								<?php endforeach; ?>
								<option value="other">
									Khác...
								</option>
							</select>
						</div>
						<div class="form-group col-lg-12">
							<?php
                                echo form_error('Title');
                                echo form_input('Title', set_value('Title'), 'class="form-control form-control-lg" id="Title" placeholder="Tiêu đề"');
                                ?>
						</div>
						<div class="form-group col-lg-12">
							<?php
                                echo form_error('Message');
                                echo form_textarea('Message', set_value('Message'), 'class="form-control form-control-lg" id="Message" placeholder="Viết gì đó cho chúng tôi..."');
                                ?>
						</div>

						<div class="buttons">
							<?php echo form_submit('submit', 'Gửi', 'class="btn btn-primary" '); ?>
						</div>
					</div>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
</div>

<script>
	let responseSendMessage = parseInt('<?php echo ($this->session->flashdata('message_success')) ?>')
</script>