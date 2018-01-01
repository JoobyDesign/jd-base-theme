<?php
    if ( function_exists( 'wpcf7_enqueue_scripts' ) ) {
        wpcf7_enqueue_scripts();
    }
?>

<?php get_header(); ?>

<section id="main-content" role="main">

  <div class="row">

    <div class="small-11 medium-9 small-centered columns" id="post-<?php the_ID(); ?>">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  		       <?php get_template_part( 'templates/content', 'page' ); ?>
  		  <?php endwhile; endif; ?>
    </div>

  </div> <!-- end row -->

</section>

<?php get_footer(); ?>
