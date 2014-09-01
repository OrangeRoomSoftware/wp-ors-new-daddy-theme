<!-- WP ORS New Daddy Theme - woocommerce.php -->

<?php get_header(); ?>

<?php if (woocommerce_content()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
      <section>
        <?php if ( has_post_thumbnail( $post->ID ) ) { ?>
          <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
        <?php } ?>
        <?php the_content(); ?>
      </section>
    </article>
  <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
