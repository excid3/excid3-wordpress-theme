<?php
/*
Template Name: Archives
*/
?>


<?php get_header(); ?>
<div id="content">
<?php
  $debut = 0; //The first article to be displayed
?>

<?php while(have_posts()) : the_post(); ?>
  <h2><?php the_title(); ?></h2>

  <ul id="archives">
    <div class="alignright search"><form role="search" method="get" id="searchform" action="http://excid3.com/blog/">
      <div>
        <input type="text" value="" name="s" id="s" placeholder="Search Terms">
        <input type="submit" id="searchsubmit" value="Search">
      </div>
    </form></div>

    <?php
      $myposts = get_posts('numberposts=-1&offset=$debut');
      $last_post_date = "";
      foreach($myposts as $post) :
        $post_date = mysql2date("Y", $post->post_date_gmt);
	if ($last_post_date != $post_date) {
          $last_post_date = $post_date;
      ?>
      <li class="archive-year"><?php echo $last_post_date?></li>
      <?php } ?>

      <li><span class="archive-date"><?php the_time('M j') ?></span> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
    <?php endforeach; ?>
  </ul>
<?php endwhile; ?>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>