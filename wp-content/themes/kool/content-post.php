<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php
    // Page thumbnail and title.
    the_title( '<h1 class="entry-title">', '</h1>' );
    the_post_thumbnail([], ['align' => 'left']);
    ?>

    <div class="entry-content">
        <?php
        the_content();
        wp_link_pages( array(
            'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'kool' ) . '</span>',
            'after'       => '</div>',
            'link_before' => '<span>',
            'link_after'  => '</span>',
        ) );

        edit_post_link( __( 'Edit', 'kool' ), '<span class="edit-link">', '</span>' );
        ?>
    </div><!-- .entry-content -->
</article><!-- #post-## -->