<section id="section4">

	<div class="container">
		<div class="columns3">

			<?php 
				if(have_rows("column_item")) {
					while(have_rows("column_item")) {
						the_row();
			?>
						<div class="column-wrapper">
							<div class="column experience" >
								<h3><?php echo get_sub_field("block_name");?></h3>
								
								<?php 
									if(have_rows("block_repeater")) {
										while(have_rows("block_repeater")){
											the_row();

								?>
											<h4 class="institution-name"><?php echo get_sub_field("institution_name"); ?></h4>
											<p class="employment-period"><?php echo get_sub_field("employment_period"); ?></p>
											<p class="description"><?php echo get_sub_field("description"); ?></p>
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

</section>