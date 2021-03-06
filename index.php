<?php get_header(); ?>

<main>
  <?php $query = new WP_Query( array('posts_per_page' => 5) ); ?>
  <?php if ($query->have_posts()): while ($query->have_posts()): $query->the_post(); ?>
    <article>
      <a href="<?php the_permalink(); ?>" class="post-link"><h1><?php the_title(); ?></h1></a>
      <?php the_excerpt(); ?>
      <a href="<?php the_permalink(); ?>" class="read-more">Read more...</a>
    </article>
    <?php endwhile; endif; ?>
  <?php wp_reset_postdata(); ?>
</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
