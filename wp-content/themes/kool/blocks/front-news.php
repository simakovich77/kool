<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */


$postp = get_posts( array(
    'numberposts'     => 4, // тоже самое что posts_per_page
    'offset'          => 0,
    'category'        => '',
    'orderby'         => 'post_date',
    'order'           => 'DESC',
    'include'         => '',
    'exclude'         => '',
    'meta_key'        => '',
    'meta_value'      => '',
    'post_type'       => 'post',
    'post_mime_type'  => '', // image, video, video/mp4
    'post_parent'     => '',
    'post_status'     => 'publish'
) );

?>



<!--News block -->
<div class="content-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 section-title">
                <h2>News</h2>
            </div> <!-- /.section -->
        </div> <!-- /.row -->
        <div class="row">

            <?php foreach ($postp as $posts) : ?>

                <div class="col-md-3 col-sm-6">
                    <div class="product-item">
                        <div class="product-thumb">

                            <?php echo get_the_post_thumbnail($posts,'custom-size'); ?>
                        </div> <!-- /.product-thum -->

                        <div class="product-content">
                            <h5><a href="#"><?=get_the_title($posts); ?></a></h5>
                            <span class="price"><?=get_the_excerpt($posts); ?></span>
                            <div class="btn-toolbar text-center">
                                <a href="<?php echo get_permalink($boat); ?>" role="button" class="btn btn-primary pull-right">Details</a>
                            </div>
                        </div> <!-- /.product-content -->
                    </div> <!-- /.product-item -->
                </div> <!-- /.col-md-3 -->

            <?php endforeach; ?>

        </div> <!-- /.row -->
    </div> <!-- /.container -->
</div> <!-- /.content-section -->