<?php if ( is_active_sidebar( 'main_sidebar' ) ) : ?>
				<aside>
					<?php dynamic_sidebar( 'main_sidebar' ); ?>
				</aside><!-- #sidebar -->
<?php else : ?>
  <aside>
    <p>
      There will be a widget area soon...
    </p>
  </aside>
<?php endif; ?>
