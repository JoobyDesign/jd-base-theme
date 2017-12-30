<footer role="contentinfo">
  <div class="row">
    <div class="small-12 columns">

    </div>
  </div>
  <div class="row">
    <div class="small-6 medium-3 large-3 columns">
      <p>&copy; <?= get_bloginfo( 'name' ) . ' ' . date('Y'); ?></p>
    </div>
    <div class="small-6 medium-3 large-3 columns">
      <?php get_template_part( 'templates/social', 'profiles' ); ?>
    </div>
    <div class="small-12 medium-6 large-6 columns text-right">
      <p>Website made by <a href="https://www.horlix.com" rel="nofollow" target="_blank">Jooby Design</a></p>
    </div>
  </div>
</footer>

<a href="#main-content" tabindex="1" id="skiptocontent">Skip to main content</a>

<?php wp_footer(); ?>

</body>
</html>
