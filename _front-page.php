<?php get_header(); ?>
	
	<header id="home"> <!-- Pagrindinis puslapis -->

		<div class="container"> <!-- Konteineris, pagrindinio puslapio -->
			<nav class="navigation"> <!-- Pagrindinio puslapio navigacija -->
				<div class="logo">
					<a href="#home">
						<?php $logo_image = get_field("logo","option"); ?>
						<img src="<?php echo $logo_image['url']; ?>" alt="logo">
					</a>
				</div>
				<div class="dropdown">
					<button id="menu"><img src=" <?php echo THEME_FOLDER; ?>/assets/images/menu.png" alt="menu"></button>
					<div class="dropdown-content">

						<?php $top_menu = wp_get_nav_menu_items("main-navigation ");
							// print_r($top_menu);

							foreach ($top_menu as $key => $value) {
								
								// $value = $value->to_array(); //konvertuoja i asoc masyva!

								$menu_url = $value->url;
								$menu_title = $value->title;						

								echo "<a href='$menu_url'>$menu_title</a>";
							}
						 ?>
						<!-- 
						<a href="#section2">About me</a>
						<a href="#section3">My working process</a>
						<a href="#section4">Experience</a>
						<a href="#section5">My Work</a>
						<a href="#section7">Contacts</a> -->
					</div>
				</div>
			</nav>
			<div class="header-content">
				<div class="content-wrapper">
					<h1><?php echo get_bloginfo("name"); ?></h1>
					<p class="hashtags">#User Experience #Music #Creative Direction</p>
				</div>
			</div>
		</div>

	</header>

	<section id="section2">

		<div class="container">
			<div class="columns1">
				<div class="profile">
					<img src=" <?php echo THEME_FOLDER; ?>/assets/images/profile.png" alt="profile">
				</div>
				<div class="about-me"> <!-- Pakeist i article -->
					<p class="intro bold">Hi I'm Paul Lapkin, Experience Crafter from Canada</p>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis magni, rerum officiis! Culpa, blanditiis eum provident at delectus sapiente cumque odit fugit unde, quae quisquam dolorum et. Nihil necessitatibus, corrupti.
					</p>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi aspernatur, adipisci ratione et magni! Harum id facere neque saepe totam necessitatibus porro, pariatur dolore nisi. Hic ipsam aut quod architecto.
					</p>
					<button class="hire-me">
						Hire Me!
					</button>
				</div>
			</div>
		</div>

	</section>

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
						<div class="block-item">
							<?php $block_image = get_sub_field("image"); ?>
							<img src=" <?php echo $block_image['url']; ?>" alt="monitor">
							<h4><?php echo get_sub_field("block_title"); ?></h4>
						</div>
					</div>
				</div>
				
				<?php 
						}
					}
				?>

				<!-- <div class="block-item-wrapper">
					<div class="block-item-color purple">
						<div class="block-item">
							<img src=" <?php echo THEME_FOLDER; ?> /assets/images/development.png" alt="magic-wand">
							<h4>Development</h4>
						</div>
					</div>
				</div>
				<div class="block-item-wrapper">
					<div class="block-item-color dark">
						<div class="block-item">
							<img src=" <?php echo THEME_FOLDER; ?> /assets/images/testing.png" alt="params">	
							<h4>Testing</h4>
						</div>
					</div>
				</div>
				<div class="block-item-wrapper">
					<div class="block-item-color red">
						<div class="block-item">
							<img src=" <?php echo THEME_FOLDER; ?> /assets/images/launch.png" alt="plane">
							<h4>Launch</h4>
						</div>
					</div>
				</div> -->
			</div> 
	
	</section>

	<section id="section4">

		<div class="container">
			<div class="columns3">

				<?php 

					if(have_rows("column_item")) {
						while(have_rows("column_item")) {
							the_row();
						}
					}

				 ?>

				<div class="column-wrapper">
					<div class="column experience" >
						<h3>Work Experience</h3>
						<h4 class="institution-name">Mad Max Design</h4>
						<p class="employment-period">Oct 2013 - Dec 2014</p>
						<p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas veritatis, nihil accusamus magnam totam quisquam. Esse unde nobis porro eligendi, fugiat praesentium, quaerat quam vitae ullam facere voluptas nulla veniam?</p>
						<h4 class="institution-name">Mad Max Design</h4>
						<p class="employment-period">Oct 2013 - Dec 2014</p>
						<p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas veritatis, nihil accusamus magnam totam quisquam. Esse unde nobis porro eligendi, fugiat praesentium, quaerat quam vitae ullam facere voluptas nulla veniam?</p>
					</div>
				</div>
				<div class="column-wrapper">
					<div class="column education">
						<h3>Education</h3>
						<h4 class="institution-name">Mad Max Design</h4>
						<p class="employment-period">Oct 2013 - Dec 2014</p>
						<p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas veritatis, nihil accusamus magnam totam quisquam. Esse unde nobis porro eligendi, fugiat praesentium, quaerat quam vitae ullam facere voluptas nulla veniam?</p>
						<h4 class="institution-name">Mad Max Design</h4>
						<p class="employment-period">Oct 2013 - Dec 2014</p>
						<p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas veritatis, nihil accusamus magnam totam quisquam. Esse unde nobis porro eligendi, fugiat praesentium, quaerat quam vitae ullam facere voluptas nulla veniam?</p>
					</div>
				</div>
			</div>
		</div>

	</section>

	<section id="section5">

		<div class="container">
			<div class="title">
				<h2>My Latest Work</h2>
				<p class="intro">Hi, I'm Paul Lapkin, Experience Crafter from Canada</p>
			</div>
			<div class="columns4">
					<div class="block-item-wrapper">
						<div class="block-item">Blue</div>
					</div>
					<div class="block-item-wrapper">
						<div class="block-item">Purple</div>
					</div>
					<div class="block-item-wrapper">
						<div class="block-item">Dark</div>
					</div>
					<div class="block-item-wrapper">
						<div class="block-item">Red</div>
					</div>
					<div class="block-item-wrapper">
						<div class="block-item">Purple</div>
					</div>
					<div class="block-item-wrapper">
						<div class="block-item">Dark</div>
					</div>
					<div class="block-item-wrapper">
						<div class="block-item">Red</div>
					</div>
			</div>
		</div>
<!-- prisidet klase blokam -->
	</section>

	<section id="section6">
		
		<div class="container">
			<img src=" <?php echo THEME_FOLDER; ?>/assets/images/quotation.png" alt="quotation mark">
			<p class= "quote">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat nam harum ducimus ad et necessitatibus magnam expedita eaque praesentium in, impedit nihil tempora nostrum magni fuga temporibus accusamus omnis ipsum!</p>
			<img src=" <?php echo THEME_FOLDER; ?>/assets/images/signature.png" alt="signature">
			<h4 class="name">Daniel Croft</h>
			<p class="signature">Creative Designer, Levy</p>
		</div>

	</section>
	
	<section id="section7">

		<div class="container">
			<div class="columns6">
				<div class="column-wrapper">
					<form class="column form"> 
						<h3>Leave a message</h3>
						<input type="text" placeholder="Name*" <br>
						<input type="text" value="Email*"> <br>
						<input type="text" value="Subject*"> <br>
						<input type="text" value="Message*">	<br>
						<button class="hire-me">
							Hire Me!
						</button>
					</form>
				</div>
				<div class="column-wrapper">
					<div class="column-contacts">
						<div class="column-item-wrapper">
							<div class="column-item">
								<h3>Address</h3>
								<p>Ulonų g. 5, Vilnius</p>
								<p>Vilnius Coding School</p>
							</div>
						</div>
						<div class="column-item-wrapper">
							<div class="column-item">
								<h3>Phone</h3>
								<p>+6101 358 336</p>
								<p>+6101 358 336</p>
							</div>
						</div>
						<div class="column-item-wrapper">	
							<div class="column-item">
								<h3>Web</h3>
								<p>Mail: hire@me.com</p>
								<p>github: hire@me.com</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</section>

	<footer>
		<div class="container">
			<div class="links">
				<img src=" <?php echo THEME_FOLDER; ?>/assets/images/twitter.png" alt="twitter">
				<img src=" <?php echo THEME_FOLDER; ?>/assets/images/linkedin.png" alt="linkedin">
			</div>
			<p>Copyright: Paul Lapkin, All Rights Reserved.</p>
		</div>
	</footer>

<?php get_footer(); ?>
