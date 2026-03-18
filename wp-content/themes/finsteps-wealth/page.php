<?php
/**
 * Generic page template.
 * Used as fallback when no page-{slug}.php matches.
 */
get_header();
?>

<section class="page-hero">
  <div class="page-hero-bg"></div>
  <div class="container">
    <h1 class="page-hero-title"><?php the_title(); ?></h1>
  </div>
</section>

<section class="section-padding" style="background:var(--white);">
  <div class="container" style="max-width:800px;">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div><?php the_content(); ?></div>
    <?php endwhile; endif; ?>
  </div>
</section>

<?php get_footer(); ?>
