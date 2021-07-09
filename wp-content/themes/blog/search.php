<?php
	define('WP_USE_THEMES', false);
	get_header();
?>
	
		<main class="row w-100 m-0">

			<div class="container col-12 col-sm-8 h-auto px-3 py-4">
				
				<h2 class=" mb-3">
					<?= __('The results for \'' . $query_string . '\''); ?>
				</h2>
				
				<p>
					<?php 
						global $wp_query;
						$total_results = $wp_query->found_posts;

						echo $total_results;
					?>
					Results
				</p>

				<div>
					
					<?php 
						if (have_posts()):
							while (have_posts()):
								the_post();
					?>

						<div class="card p-3 mt-3 w-100">
							<h5 class="card-title">
								<a href="<?= get_permalink(); ?>">
									<?php the_title(); ?>
								</a>
							</h5>
							<div class="card-text">
								<?php the_post_thumbnail('medium'); ?>
								<?= substr(get_the_excerpt(), 0, 200); ?>
							</div>
							<div class="card-text h-readmore">
								<a href="<?php the_permalink(); ?>">
									Read More
								</a>
							</div>
						</div>

					<?php 
							endwhile;
						endif;
					?>

				</div>
			
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