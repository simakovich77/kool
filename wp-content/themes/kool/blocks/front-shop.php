
<!--Shop block -->
<div class="content-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 section-title">
                <h2>Products</h2>
            </div> <!-- /.section -->
        </div> <!-- /.row -->
        <div class="row">



                <div class="col-md-4 col-sm-6">


                    <div class="product-item">
                        <div class="product-thumb">

                        </div> <!-- /.product-thum -->

                        <div class="product-content">


                            <?php
                           

                            add_theme_support( 'woocommerce' );

                            if ( shortcode_exists( 'product_categories' ) ) {
                                echo do_shortcode('[recent_products per_page="3" columns="4"]');
                            }
                            ?>


                            <div class="btn-toolbar text-center">
                                <a href=<?php echo site_url(); echo "/shop"?> role="button" class="btn btn-primary pull-right">View all products</a>
                            </div>


                            </div><!-- /.product-content -->


                    </div> <!-- /.product-item -->


                </div> <!-- /.col-md-3 -->



        </div> <!-- /.row -->

    </div> <!-- /.container -->

</div> <!-- /.content-section -->