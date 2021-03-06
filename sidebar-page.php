<?php
/*
Template Name: Sidebar Page
*/
get_header(); ?>
<div id="tertiary" class="sidebar-container" role="complementary">
	<?php
if(get_post_meta($post->ID, 'sidebar', true)){
if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-'.get_post_meta($post->ID, 'sidebar', true)) ) :
endif;
}else{
if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-standard') ) :
endif;
}
?>
</div>
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<!-- post-thumbnail entfernt, da in header.php
						<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
						 
						<div class="entry-thumbnail">
							<?php the_post_thumbnail(); ?>
						</div>
						
						<?php endif; ?>
						!-->
					<?php get_post_meta($post_id, 'title_text', $single); ?>
					<h1 class="entry-title"><?php echo get_post_meta($post->ID, 'title_text', true); ?></h1>
					<!--	<h1 class="entry-title"><?php the_title(); ?></h1>!-->
					</header><!-- .entry-header -->

					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
					</div><!-- .entry-content -->

					<footer class="entry-meta">
						<?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
					</footer><!-- .entry-meta -->
				</article><!-- #post -->

				<?php comments_template(); ?>
			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>