<?php get_header(); ?>

	<main class="row w-100 m-0">
		
		<div class="container col-12 col-sm-8 h-auto px-3 py-4">
			
			<h1 class="display-3 mb-3">
				Posts
			</h1>
			
			<?php
				$category = get_queried_object();
				$posts = get_posts([
					'showposts' => 8,
					'post_type' => 'post',
				]);

				if ($posts):
					foreach ($posts as $post):
						setup_postdata($post); 
			?>

				<div class="card my-4 p-3">
					<h4 class="card-title">
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</h4>

					<p>
						<?php
							echo __('Tags: ');
							$tags = get_the_tags(get_the_ID());

							if ($tags):
								foreach ($tags as $tag):
									echo trim($tag->name).', ';
								endforeach;
							else:
								echo __('None');
							endif;
						?>
					</p>

				    <P class="m-0"><?php the_excerpt(); ?></P>

				    <a class="m-0" href="<?php the_permalink(); ?>">Read more</a>
			    </div>

			<?php
					endforeach;
				else:
			?>

				<p>No posts found</p>

			<?php
				endif;
			 
				the_posts_pagination();
			?>

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