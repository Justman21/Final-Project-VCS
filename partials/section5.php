<section id="section5">

	<div class="container">
		<div class="title">

			<h2><?php echo get_field("section_title"); ?></h2>
			<p class="intro"><?php echo get_field("section_intro"); ?></p>
		</div>
		<div class="columns4">
			<?php 
				if(have_rows("section_block")){
					while(have_rows("section_block")){
						the_row();		
			?>
					<div class="block-item-wrapper">
						<div class="block-item <?php echo get_sub_field('block_color'); ?> "><?php echo get_sub_field("block_text"); ?></div>
					</div>

			<?php  
					}
				}
			?>

		</div>
	</div>
	
</section>