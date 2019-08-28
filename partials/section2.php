<section id="section2">

	<div class="container">
		<div class="columns1">
			<div class="profile">
				<?php $profile_pic = get_field("profile_picture"); ?> 
				<img src=" <?php echo $profile_pic['url']; ?>" alt="profile">
			</div>
			<div class="about-me"> <!-- Pakeist i article -->
				<p class="intro bold"><?php echo get_field("paragraph_intro") ?></p>
				<p>
					<?php echo get_field("paragraph1") ?>
				</p>
				<p>
					<?php echo get_field("paragraph2") ?>
				</p>
				<button class="hire-me">
					<?php echo get_field("button_name") ?>
				</button>
			</div>
		</div>
	</div>

</section>