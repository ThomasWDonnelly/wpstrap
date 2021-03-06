<?php
/*
Template Name: Full Width Page
*/
?>
<?php get_header(); ?>
<div class="row">
	<div class="span<?php wpstrap_col_width( 'main-full' ); ?>" id="main-col">
		<?php wpstrap_breadcrumbs( $post->post_type ); ?>
		<?php if ( have_posts() ) : ?>	
			<?php while ( have_posts() ) : the_post(); ?>				
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php wpstrap_single_header( $post->post_type ); ?>
					<div class="wysiwyg">
						<?php the_content(); ?>
						<div class="cl"></div>
					</div>
					<?php wpstrap_link_pages(); ?>
					<?php 
					if( !post_password_required() && wpstrap_opt( 'show_page_comments' ) == '1' ) { 
						comments_template();
					}
					?>
				</div>				
			<?php endwhile; ?>			
		<?php endif; ?>
	</div>	
</div>
<?php get_footer(); ?>