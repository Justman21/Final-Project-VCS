<header id="home"> 

		<div class="container"> 
			<nav class="navigation"> 
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
		
							foreach ($top_menu as $key => $value) {
								
								$menu_url = $value->url;
								$menu_title = $value->title;						

								echo "<a href='$menu_url'>$menu_title</a>";
							}
						 ?>
			
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