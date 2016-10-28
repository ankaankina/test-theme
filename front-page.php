<?php get_header(); ?>

<main>
  <?php if (have_posts()): while (have_posts()): the_post(); ?>
  <article>
    <a href="<?php the_permalink(); ?>" class="post-link"><h1><?php the_title(); ?></h1></a>
    <?php the_excerpt(); ?>
    <a href="<?php the_permalink(); ?>" class="read-more">Read more...</a>
</article>
<?php endwhile; endif; ?>
</main>


<?php get_footer(); ?>
