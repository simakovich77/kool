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

						<?php echo get_the_post_thumbnail($posts); ?>
					</div> <!-- /.product-thum -->

					<div class="product-content">
						<h5><a href="#"><?=get_the_title($posts); ?></a></h5>
						<span class="price"><?=get_the_excerpt($posts); ?></span>

					</div> <!-- /.product-content -->
				</div> <!-- /.product-item -->
			</div> <!-- /.col-md-3 -->

			<?php endforeach; ?>

		</div> <!-- /.row -->
	</div> <!-- /.container -->
</div> <!-- /.content-section -->

<div class="content-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 section-title">
				<h2>Vote For Future Products</h2>
			</div> <!-- /.section -->
		</div> <!-- /.row -->
		<div class="row">
			<div class="col-md-3 col-sm-6">
				<div class="product-item-vote">
					<div class="product-thumb">
						<img src="images/products/1.jpg" alt="">
					</div> <!-- /.product-thum -->
					<div class="product-content">
						<h5><a href="#">Name of Shirt</a></h5>
						<span class="tagline">By: Catherine</span>
						<ul class="progess-bars">
							<li>
								<div class="progress">
									<div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"></div>
									<span>4<i class="fa fa-heart"></i></span>
								</div>
							</li>
							<li>
								<div class="progress">
									<div class="progress-bar comments" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
									<span class="comments">6<i class="fa fa-heart"></i></span>
								</div>
							</li>
						</ul>
					</div> <!-- /.product-content -->
				</div> <!-- /.product-item-vote -->
			</div> <!-- /.col-md-3 -->
			<div class="col-md-3 col-sm-6">
				<div class="product-item-vote">
					<div class="product-thumb">
						<img src="images/products/2.jpg" alt="">
					</div> <!-- /.product-thum -->
					<div class="product-content">
						<h5><a href="#">Name of Shirt</a></h5>
						<span class="tagline">By: Rebecca</span>
						<ul class="progess-bars">
							<li>
								<div class="progress">
									<div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"></div>
									<span>4<i class="fa fa-heart"></i></span>
								</div>
							</li>
							<li>
								<div class="progress">
									<div class="progress-bar comments" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
									<span class="comments">6<i class="fa fa-heart"></i></span>
								</div>
							</li>
						</ul>
					</div> <!-- /.product-content -->
				</div> <!-- /.product-item-vote -->
			</div> <!-- /.col-md-3 -->
			<div class="col-md-3 col-sm-6">
				<div class="product-item-vote">
					<div class="product-thumb">
						<img src="images/products/3.jpg" alt="">
					</div> <!-- /.product-thum -->
					<div class="product-content">
						<h5><a href="#">Name of Shirt</a></h5>
						<span class="tagline">By: Catherine</span>
						<ul class="progess-bars">
							<li>
								<div class="progress">
									<div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"></div>
									<span>4<i class="fa fa-heart"></i></span>
								</div>
							</li>
							<li>
								<div class="progress">
									<div class="progress-bar comments" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
									<span class="comments">6<i class="fa fa-heart"></i></span>
								</div>
							</li>
						</ul>
					</div> <!-- /.product-content -->
				</div> <!-- /.product-item-vote -->
			</div> <!-- /.col-md-3 -->
			<div class="col-md-3 col-sm-6">
				<div class="product-item-vote">
					<div class="product-thumb">
						<img src="images/products/4.jpg" alt="">
					</div> <!-- /.product-thum -->
					<div class="product-content">
						<h5><a href="#">Name of Shirt</a></h5>
						<span class="tagline">By: Rebecca</span>
						<ul class="progess-bars">
							<li>
								<div class="progress">
									<div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"></div>
									<span>4<i class="fa fa-heart"></i></span>
								</div>
							</li>
							<li>
								<div class="progress">
									<div class="progress-bar comments" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
									<span class="comments">6<i class="fa fa-heart"></i></span>
								</div>
							</li>
						</ul>
					</div> <!-- /.product-content -->
				</div> <!-- /.product-item-vote -->
			</div> <!-- /.col-md-3 -->
		</div> <!-- /.row -->
	</div> <!-- /.container -->
</div> <!-- /.content-section -->