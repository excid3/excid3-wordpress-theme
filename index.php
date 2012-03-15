<?php get_header(); ?>

	<div id="content">

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<div class="post" id="post-<?php the_ID(); ?>">
				<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
<div><small style="color:#888; margin-left:3px;">Posted <?php the_time('F j, Y') ?> under <?php the_category(', ') ?></small></div>

				<div class="entry">
					<?php the_content('Read more &raquo;'); ?>
				</div>

			</div>
<br>
		<?php endwhile; ?>

			<?php next_posts_link('&laquo; Older') ?> | <?php previous_posts_link('Newer &raquo;') ?>

	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>

	<?php endif; ?>

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
