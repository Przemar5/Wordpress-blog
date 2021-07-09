<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1.0">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<title><?= get_bloginfo('name').' | '.get_the_title(); ?></title>

		<?php wp_head(); ?>
	</head>
	<body>
		<header>
			
		</header>

		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<div class="container-fluid">
			    <a class="navbar-brand" href="<?= get_home_url(); ?>">
			    	<?= get_bloginfo('name'); ?>
			    </a>
			    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    	<span class="navbar-toggler-icon"></span>
			    </button>
			    <div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
			      	
						<?php 
							global $wp;
							$current_uri = home_url($wp->request);
							
							$items = wpse_nav_menu_to_tree('Main Menu');

							foreach ($items as $item):
								if (isset($item->wpse_children)):
						?>

							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
									<?= $item->title; ?>
								</a>
								<ul class="dropdown-menu" aria-labelledby="navbarDropdown">

									<?php
										foreach ($item->wpse_children as $child):
									?>

										<li>
											<a class="dropdown-item" href="<?= $child->url; ?>">
												<?= $child->title; ?>
											</a>
										</li>

									<?php
										endforeach;
									?>
									
								</ul>
							</li>			
						
						<?php
								else:
						?>
						
							<li class="nav-item">
								<a class="nav-link <?= 
									($current_uri === $item->url) 
										? 'active' : ''; 
								?>" href="<?= $item->url; ?>">
									<?= $item->title; ?>
								</a>
							</li>
						
						<?php
								endif;
							endforeach;
						?>

					</ul>

					<?php get_search_form(); ?>

				</div>
			</div>
		</nav>

		<div><!-- 
			<?= do_shortcode('[searchandfilter fields="search,category,post_tag"]'); ?> -->
		</div>
