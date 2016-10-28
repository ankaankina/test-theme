<?php
/*
** Template Name: news-page
*/
 ?>

<?php get_header(); ?>

<main>
  <?php
    $paged = ( get_query_var('page') ) ? get_query_var('page') : 1;
    $query_args = array(
      'posts_per_page' => 5,
      'paged' => $paged
    );
    $the_query = new WP_Query( $query_args );
  ?>

  <?php if ($the_query -> have_posts()) :
    while ($the_query -> have_posts()) :
      $the_query -> the_post(); ?>
    <article>
      <a href="<?php the_permalink(); ?>" class="post-link"><h1><?php the_title(); ?></h1></a>
      <?php the_excerpt(); ?>
      <a href="<?php the_permalink(); ?>" class="read-more">Read more...</a>
    </article>

  <?php endwhile;
    if ($the_query->max_num_pages > 1) { ?>
      <div class="navination">
      <p class="alignright">
          <?php echo get_previous_posts_link( 'Newer posts' ); ?>
        </p>
        <p class="alignleft">
          <?php echo get_next_posts_link( 'Previous posts', $the_query->max_num_pages ); ?>
        </p>

      </div>
    <?php } ?>
  <?php else :?>
      <h4>Sorry, but there's no post right now. <br> But you can go back to our <a href="<?php echo esc_url( home_url( '/' ) ); ?>">HOME PAGE</a>. And we'll try to fill this pages with news as soon as possible.</h4>
    <?php endif; ?>
</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
