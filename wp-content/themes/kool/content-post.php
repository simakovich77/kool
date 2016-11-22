<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="product-image">
                        <?php the_title( '<h1 class="entry-title">', '</h1>' );?>
                        <?php the_post_thumbnail([], ['align' => 'left']); ?>
                        <!--<img src="images/featured/7.jpg" alt="">-->
                    </div> <!-- /.product-image -->
                    <div class="product-information">
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








                        </div>

                        </div>
    </div>
            </div>
        </div>
    </div>
                <!-- .entry-content -->
</article><!-- #post-## -->