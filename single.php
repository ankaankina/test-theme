<?php get_header(); ?>

  <main>
    <?php if (have_posts()): the_post(); ?>
      <article class="">
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
        
      </article>
      <div class="navigation">
        <h3>More to read</h3>
        <div class="alignleft"><?php previous_post_link( '%link', '&laquo; %title' ) ?></div>
        <div class="alignright"><?php next_post_link( '%link', '%title &raquo;' ) ?></div>
      </div>
    <?php endif; ?>
  </main>


<?php get_footer(); ?>
