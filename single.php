<?php get_header(); ?>

<div class="container">
  <?php if (have_posts()) :?><?php while(have_posts()) : the_post(); ?>

    <!-- loop content -->


    <?php the_content(esc_html__('Read More...', 'slug-theme'));?>
    

  <?php endwhile; ?>

  <?php else : ?>
    <p><?php esc_html_e('Sorry, no posts matched your criteria.', 'slug-theme'); ?></p>
  <?php endif; ?>
</div>

<?php get_footer(); ?>
