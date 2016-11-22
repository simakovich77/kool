
<!--Shop block -->
<div class="content-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 section-title">
                <h2>Shop</h2>
            </div> <!-- /.section -->
        </div> <!-- /.row -->
        <div class="row">

            <?php foreach ($postp as $posts) : ?>

                <div class="col-md-3 col-sm-6">
                    <div class="product-item">
                        <div class="product-thumb">
                            <?php
                            //function do_shortcode([product_page id="1"]);
                            ?>
                            <?php echo get_the_post_thumbnail($posts); ?>
                        </div> <!-- /.product-thum -->

                        <div class="product-content">
                            <
                            <span class="price"><?=get_the_excerpt($posts); ?></span>

                        </div> <!-- /.product-content -->
                    </div> <!-- /.product-item -->
                </div> <!-- /.col-md-3 -->

            <?php endforeach; ?>

        </div> <!-- /.row -->
    </div> <!-- /.container -->
</div> <!-- /.content-section -->