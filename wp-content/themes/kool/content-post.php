<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8">


                    <div class="product-item-4">


                        <?php the_title( '<h1 class="entry-title">', '</h1>' );?>

                        <?php the_post_thumbnail('custom-size', ['align' => 'left']); ?>

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




                    <div class="col-md-4 col-sm-8">
                        <div class="product-item-2">
                            <div class="dd1">

                            <?php








                            add_theme_support( 'woocommerce' );

                            if ( shortcode_exists( 'product_categories' ) ) {
                                echo do_shortcode('[recent_products per_page="3" columns="1"]');
                            }
?>

</div>


<!--
                            <div class="product-thumb">
                                <img src="images/featured/1.jpg" alt="Product Title">
                            </div> /.product-thumb

                            <div class="product-content overlay">



                                <h5><a href="#">Name Of Shirt</a></h5>
                                <span class="tagline">Partner Name</span>
                                <span class="price">$30.00</span>
                                <p>Doloremque quo possimus quas necessitatibus blanditiis excepturi. Commodi, sunt tenetur deleniti labore!</p>
                            </div> /.product-content -->
                        </div>

                    </div>







            </div>
        </div>
    </div>
                <!-- .entry-content -->
</article><!-- #post-## -->












