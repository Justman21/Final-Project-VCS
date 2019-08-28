	<section id="section3"> 

		<div class="container">
			<div class="title">
				<h2><?php echo get_field("section_title"); ?></h2>

				<p class="intro">Hi, I'm Paul Lapkin, Experience Crafter from Canada</p>
			</div>
			<div class="columns2">
				<?php 
				if(have_rows("block_item")){
					while(have_rows("block_item")){
						the_row();
						?>

						<div class="block-item-wrapper">
							<div class="block-item-color <?php echo get_sub_field("color"); ?>">

								<div itemscope itemtype="" class="block-item">
									<?php $block_image = get_sub_field("image"); ?>
									<img src=" <?php echo $block_image['url']; ?>" alt=" <?php echo $block_image['alt'] ?>">
									<h4 itemprop="name"><?php echo get_sub_field("block_title"); ?></h4>
									<!-- <meta itempro="name" content="<?php echo get_sub_field("block_title"); ?>"> -->
								</div>

							</div>
						</div>

						<?php 
					}
				}
				?>
			</div> 

		</div>
		
	</section>
