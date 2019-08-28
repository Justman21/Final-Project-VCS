<section id="section7">

		<div class="container">
			<div class="columns6">
				<div class="column-wrapper">
					<div class="column">
					<?php 
						echo "<h3>Leave a message</h3>";
						echo do_shortcode('[contact-form-7 id="160" title="Contact form 1"]'); 

					 ?>
					 </div>
				</div>

				<div class="column-wrapper">
					<div class="column-contacts">

						<?php 
							if(have_rows("contacts")){
								while(have_rows("contacts")){
									the_row();
						?>

						<div class="column-item-wrapper">
							<div class="column-item">
								<h3> <?php echo get_sub_field("contacts_type"); ?></h3>

								<?php 
									if(have_rows("contact_details")){
										while(have_rows("contact_details")){
											the_row();
								?>
									<p> <?php echo get_sub_field("details"); ?></p>

								<?php 
										}
									}
								 ?>
								 
							</div>
						</div>
						
						<?php 
								}
							}
						 ?>

					</div>
				</div>
			</div>
		</div>

	</section>