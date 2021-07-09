<?php
	define('WP_USE_THEMES', false);
	get_header();
?>
	
		<main class="row w-100 m-0">

			<div class="container col-12 col-sm-8 h-auto px-3 py-4">
				
				<h1 class="display-3 mb-3">
					<?php the_title(); ?>
				</h1>
				
				<p>
					<?php the_content(); ?>
				</p>
			
			</div>

			<div class="container col-12 col-sm-4 bg-light h-auto px-3 py-4">

				<nav class="container-fluid">
				
					<?php
						query_posts([
							'showposts' => 8,
							'post_type' => 'post',
						]);

						if (have_posts()):
					?>

						<h3>Recent posts</h3>

					<?php
							while (have_posts()):
								the_post();
					?>

						<a href="<?= get_permalink(); ?>" class="d-block">
							<?php
								$max_length = 60;
								$link = sprintf("%s - %s",get_the_date('d M Y'), get_the_title());

								echo (strlen($link) > $max_length) 
									? substr($link, 0, $max_length-3) . '...'
									: $link;
							?>
						</a>

					<?php
							endwhile;
						else:
					?>

						<h5>There are no posts yet!</h5>

					<?php
						endif;

						wp_reset_query();
					?>

				</nav>
			
			</div>
			
		</main>

<?php get_footer(); ?>