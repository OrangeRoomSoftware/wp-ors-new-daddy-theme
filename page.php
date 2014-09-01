<!-- WP ORS New Daddy Theme - page.php -->

<?php get_header(); ?>

<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
      <section>
        <?php if ( has_post_thumbnail() ) { ?>
          <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
        <?php } ?>
        <?php the_content(); ?>
      </section>
    </article>
  <?php endwhile; ?>
<?php else : ?>
  <article id="404-not-found">
    <header>
      <h2>Not Found</h2>
    </header>
    <section>
      <p>Sorry, but you are looking for something that isn't here.</p>
      <?php get_search_form(); ?>
    </section>
  </article>
<?php endif; ?>

<?php get_footer(); ?>
