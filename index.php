<?php get_header(); ?>
<div id="main">

<?php //start the loop	
if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="post-content">
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
        <small><?php the_time('F j, Y'); ?></small>
    </div>
<?php endwhile; //end the loop
?>
<?php else : ?>
    <h2>No posts matching this criteria</h2>
<?php endif; ?>

</div><!-- main -->
<?php get_sidebar(); ?>
<?php get_footer(); ?> 
