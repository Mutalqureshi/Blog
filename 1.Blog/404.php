<?php
/**
 * The template for displaying all pages
 *
 *
 */
get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main all-other-pages">
			<!-- <div class="other-page-title">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="breadcrumbs main-breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
								<?php 
									// bcn_display();
								?>
							</div>
							<br><br><br><br>
						</div>
					</div>
				</div>
			</div> -->
		<div class="container  error-page">	
			<div class="col-sm-12">
					<h1 class="page-title"><?php the_title(); ?></h1>
				<h1 class="page-title text-center"><br><?php _e( 'Oops! Nothing found.', 'twentyfifteen' ); ?></h1>
					<div class="page-content text-center">
						<p><?php _e( 'It looks like nothing was found ? ', 'twentyfifteen' ); ?></p>
						<!-- Search an other -->
						<?php //get_search_form(); ?>
					</div><!-- .page-content -->
			</div>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();
?>