<?php get_header(); ?>

<article id="main-content" role="article">
  <div class="row">
    <div class="small-12 medium-9 columns" id="post-<?php the_ID(); ?>">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  	     <?php get_template_part( 'templates/content', 'single' ); ?>
  	  <?php endwhile; endif; ?>

      <div class="row">
        <div class="small-12 columns">
          <?php get_template_part( 'templates/social', 'sharing' ); ?>
        </div>
      </div>

    </div>

    <aside class="small-12 medium-3 columns sidebar" role="complementary">
      <?php dynamic_sidebar( 'Main Sidebar' ); ?>
    </aside>

  </div>
</article>

<?php get_footer(); ?>
