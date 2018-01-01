<?php get_header(); ?>

<section id="main-content" role="main">

  <div class="row">
    <div class="small-12 columns">
      <h1><?php the_archive_title() ?></h1>
    </div>
  </div>

  <div class="row">
    <div class="small-12 medium-9 columns">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php get_template_part( 'templates/content', 'archive' ); ?>
      <?php endwhile; endif; ?>
    </div>

    <aside class="small-12 medium-3 columns sidebar" role="complementary">
      <?php dynamic_sidebar( 'Main Sidebar' ); ?>
    </aside>

  </div>
</section>

<?php get_footer(); ?>
