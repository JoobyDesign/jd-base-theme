<?php get_header(); ?>

<section id="main-content" role="main">
  <div class="row">
    <div class="small-12 columns" id="post-<?php the_ID(); ?>">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <?php get_template_part( 'templates/content', 'page' ); ?>
      <?php endwhile; endif; ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>
