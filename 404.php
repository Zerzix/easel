<?php get_header(); ?>

<div class="post uentry type-page">
	<div class="post-content">
		<div class="post-info">
			<h2 class="page-title"><?php _e( 'Page Not Found', 'easel' ); ?></h2>
		</div>
		<div class="entry">
			<p><a href="<?php echo site_url(); ?>"><?php _e( 'Click here to return to the home page', 'easel' ); ?></a> <?php _e( 'or try a search:', 'easel' ); ?></p>
			<p><?php get_search_form(); ?></p>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
	</div>
</div>

<?php get_footer(); ?>