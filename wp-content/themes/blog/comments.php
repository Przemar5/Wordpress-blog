<div class="container comments-wrapper my-4">

	<div class="comments" id="comments">

		<div class="comments-header">

			<h2 class="comment-reply-title">
				
				<?= (!have_comments()) ? 'Leave a comment' : get_comments_number().' Comments'; ?>

			</h2>

		</div>

		<div class="comments-inner">

			<?php
				wp_list_comments([
					'avatar_size' => 60,
					'style' => 'div',
				]);
			?>

		</div>

	</div>

	<hr>
	
	<?php 
		if (comments_open()) {
			comment_form([
				'class_form' => '',
				'title_reply_before' => '<h3 class="comment-reply-title">',
				'title_reply_after' => '</h3>',
			]);
		}
	?>

</div>