<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>




	<div class="content-section">
		<div class="container">
			<div class="row">
				<div class="col-md-8">

					<div class="product-information">
						<?php
						// Start the Loop.
						while ( have_posts() ) : the_post();

							/*
                             * Include the post format-specific template for the content. If you want to
                             * use this in a child theme, then include a file called called content-___.php
                             * (where ___ is the post format) and that will be used instead.
                             */
							get_template_part( 'content', get_post_format() );




							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) {
								comments_template();
							}
						endwhile;
						?>
					</div> <!-- /.product-information -->
				</div> <!-- /.col-md-8 -->
				<div class="col-md-4 col-sm-8">
					<div class="product-item-2">
						<div class="product-thumb">

							<?php
							/**
							 * The Template for displaying all single posts
							 *
							 * @package WordPress
							 * @subpackage Twenty_Fourteen
							 * @since Twenty Fourteen 1.0
							 */

							get_sidebar(); ?>


						</div> <!-- /.product-thumb -->
						<div class="product-content overlay">

						</div> <!-- /.product-content -->
					</div> <!-- /.product-item-2 -->
				</div> <!-- /.col-md-4 -->
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</div> <!-- /.content-section -->









				<div class="col-md-4">
					<div class="footer-widget">
						<h3 class="widget-title">Our Newsletter</h3>
						<div class="newsletter">
							<form action="#" method="get">
								<p>Sign up for our regular updates to know when new products are released.</p>
								<input type="text" title="Email" name="email" placeholder="Your Email Here">
								<input type="submit" class="s-button" value="Submit" name="Submit">
							</form>
						</div> <!-- /.newsletter -->
					</div> <!-- /.footer-widget -->
				</div> <!-- /.col-md-4 -->
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</div> <!-- /.main-footer -->









	<div class="content-section">
		<div class="container">
			<div class="row">
			<div class="col-md-8">

		<div class="product-information">


			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();

					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );




					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				endwhile;
			?>
			</div>
		</div>
			</div>
		</div>
	</div>

			
		</div><!-- #content -->

	</div><!-- #primary -->

<?php

get_footer();
