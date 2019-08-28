<footer>
	<div class="container">
		<div class="links">
			
			<?php 
				if(have_rows("footer_icons")) {
					while(have_rows("footer_icons")) {
						the_row();
			?>
						<?php $social_icon = get_sub_field("social_icon"); ?>
						<img src=" <?php echo $social_icon['url']; ?>">
			<?php
					}
				}
			 ?>

		</div>
		<p>Copyright: <span> <?php echo get_field("copyright_name") ?></span>, All Rights Reserved.</p>
	</div>
</footer>