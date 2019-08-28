<section id="section6">

	<div class="container">
		<?php $quotation_image = get_field("quotation_mark"); ?>
		<img src=" <?php echo $quotation_image['url'] ?>" alt="quotation mark">

		<p class="quote"> <?php echo get_field("quote_text"); ?></p>

		<?php $signature = get_field("signature"); ?>
		<img src="<?php echo $signature['url'] ?>" alt="signature">

		<h4 class="name"><?php echo get_field("signature_name"); ?></h4>
		<p class="signature"><?php echo get_field("sign"); ?></p>
	</div>

</section>