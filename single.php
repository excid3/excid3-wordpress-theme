<?php get_header(); ?>



	<div id="content">



	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>



		<div class="post" id="post-<?php the_ID(); ?>">

			<h1><?php the_title(); ?></h1>
<div><small style="color:#888; margin-left:3px;">Posted <?php the_time('F j, Y') ?> under <?php the_category(', ') ?></small></div>

			<div class="entry">
				<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
			</div>
		</div>

<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

<p>If you liked this post, <a href="http://twitter.com/excid3">follow me on Twitter</a> or <a href="http://feeds.feedburner.com/excid3">subscribe to my RSS feed</a>.</p>

<?php edit_post_link('Edit', '<p>', '</p>'); ?>


<h1>Discussion</h1>

	<?php comments_template(); ?>

	<?php endwhile; else: ?>



		<p>Sorry, no posts matched your criteria.</p>



<?php endif; ?>

	</div>

	

<?php get_sidebar(); ?>



<?php get_footer(); ?>

