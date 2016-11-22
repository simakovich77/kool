<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>


<div class="col-md-6">

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<header class="entry-header">
			<?php
			if ( is_single() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
			endif;
			?>
		</header><!-- .entry-header -->

		<div class="entry-content">



			<?php
			/* translators: %s: Name of current post */
			the_excerpt();




			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'kool' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'kool' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
			?>
		</div><!-- .entry-content -->


		<footer class="entry-footer">
			<?php edit_post_link( __( 'Edit', 'kool' ), '<span class="edit-link">', '</span>' ); ?>
		</footer><!-- .entry-footer -->

	</article><!-- #post-## -->
</div>