<?php get_header(); ?>
<main class="container">
    <h1><?php bloginfo('name'); ?></h1>

<?php if (have_posts()) :?><?php while(have_posts()) : the_post(); ?>

  <!-- loop content -->

<h3><?php the_title(); ?></h3>

<?php endwhile; ?>
  <p><?php previous_posts_link( 'Older posts' ); ?> - <?php next_posts_link( 'Newer posts' ); ?></p>
<?php else : ?>
  <p><?php esc_html_e('Sorry, no posts matched your criteria.', 'slug-theme'); ?></p>
<?php endif; ?>



</main>


<?php get_footer(); ?>
