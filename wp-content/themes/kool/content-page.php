<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php
    // Page thumbnail and title.

    the_title( '<header class="entry-header"><h1 class="entry-title">', '</h1></header><!-- .entry-header -->' );
    ?>

    <div class="entry-content">
        <?php
        the_content();


        edit_post_link( __( 'Edit', 'kool' ), '<span class="edit-link">', '</span>' );
        ?>
    </div><!-- .entry-content -->
</article><!-- #post-## -->