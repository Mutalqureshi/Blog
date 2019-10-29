<?php
/*
Template Name: Search Page
*/
get_header(); ?>
	<section id="primary <?php echo "default page-".$post_id = get_the_ID();?>" class="all-pages <?php echo "page-".$post_id = get_the_ID(); wp_title('');?>">
		<div class="other-page-title">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h1 class="page-title"></h1>
					</div>
				</div>
			</div>
		</div>
		<section class="search-all">
			<div class="container">
					<?php
					if ( have_posts() ) : ?>
					
			<?php 		
					if(isset($_GET['post_type'])) {
						$type = $_GET['post_type'];
				if($type == 'page') {
					//echo "searching page";
					/*-----this is for pages----------*/
					?>
				<div class="row">
					<div class="col-md-8">
						<div class="section-blog">
            <div class="container">
                    <h5 class="blog-head"><?php 	printf( esc_html__( 'Results for: %s', 'storevilla' ), '<span>' . get_search_query() . '</span>' );  //the_title(); ?></h5>
        <?php
        while ( have_posts() ) :
        the_post();
        // the_content();
        ?>
                <div class="the_blog">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="blog-img">
                               <div class="zoom">
                                   <?php if (has_post_thumbnail($post->ID)) { ?>
                                        <?php $url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'st_263_263'); ?>
                                        <img src="<?php echo $url[0]; ?>"  alt="">
                                    <?php } else { ?>
                                        <img src="http://placehold.it/220x180" width="220" height="180" alt="">
                                    <?php } ?>
                                <div class="date">
                                    <?php echo get_the_time('M');?>
                                    <hr class="blog-hr"><span class="max-date"><?php echo get_the_time('d');?></span>
                                    <hr class="blog-hr"><?php echo get_the_time('Y');?>
                                </div>
                               </div>
                            </div>
                        </div><!-- col-sm-8 -->
                            <div class="col-sm-8">
                                <div class="blogDesc">
                                    <h5 class="blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                                        <p><?php st_my_excerpt(40); ?></p>
                                        <a href="<?php the_permalink(); ?>" class="more2">Read More...</a>

                                    <div class="blogListFooter">
                                        <p>
                                            <span class="listAuthor"><i class="far fa-clock"></i><?php echo get_the_date(); ?> By <?php the_author_link(); ?></span>
                                            <span class="listTime">in <?php the_category(', '); ?></span>
                                        </p>
                                        <div class="shareField">
                                            <?php echo do_shortcode('[Social9_Share]'); ?>
                                        </div>
                                    </div><!-- ( BLOG LIST FOOTER END ) -->
                                </div><!-- blog content-->
                            </div><!--col-->


                    </div><!--row -->
                </div><!-- the blog-->

        <?php
        endwhile; // End of the loop.
        ?>

             <div class="text-center">
                <?php st_wpbeginner_numeric_posts_nav(); ?><!-- ( PAGINATION END ) -->
            </div>


            </div><!-- container-->
        </div>
					</div>
					<div class="col-sm-4 mggt">
							<?php dynamic_sidebar( 'blog-sidebar' ); ?>
					</div><!--md -->
				</div><!-- row-->	

	
					


					
				<?php	
				/*-----this is for pages-ended---------*/
				} 
				
				else{
				/*-----this is for noraml blogs/posts----------*/
				?>
				
					<div class="row">
					<div class="col-md-8">
						<div class="section-blog">
            <div class="container">
                    <h5 class="blog-head"><?php 	printf( esc_html__( 'Results for: %s', 'storevilla' ), '<span>' . get_search_query() . '</span>' );  //the_title(); ?></h5>
        <?php
        while ( have_posts() ) :
        the_post();
        // the_content();
        ?>
                <div class="the_blog">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="blog-img">
                               <div class="zoom">
                                   <?php if (has_post_thumbnail($post->ID)) { ?>
                                        <?php $url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'st_263_263'); ?>
                                        <img src="<?php echo $url[0]; ?>"  alt="">
                                    <?php } else { ?>
                                        <img src="http://placehold.it/220x180" width="220" height="180" alt="">
                                    <?php } ?>
                                <div class="date">
                                    <?php echo get_the_time('M');?>
                                    <hr class="blog-hr"><span class="max-date"><?php echo get_the_time('d');?></span>
                                    <hr class="blog-hr"><?php echo get_the_time('Y');?>
                                </div>
                               </div>
                            </div>
                        </div><!-- col-sm-8 -->
                            <div class="col-sm-8">
                                <div class="blogDesc">
                                    <h5 class="blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                                        <p><?php st_my_excerpt(40); ?></p>
                                        <a href="<?php the_permalink(); ?>" class="more2">Read More...</a>

                                    <div class="blogListFooter">
                                        <p>
                                            <span class="listAuthor"><i class="far fa-clock"></i><?php echo get_the_date(); ?> By <?php the_author_link(); ?></span>
                                            <span class="listTime">in <?php the_category(', '); ?></span>
                                        </p>
                                        <div class="shareField">
                                            <?php echo do_shortcode('[Social9_Share]'); ?>
                                        </div>
                                    </div><!-- ( BLOG LIST FOOTER END ) -->
                                </div><!-- blog content-->
                            </div><!--col-->


                    </div><!--row -->
                </div><!-- the blog-->

        <?php
        endwhile; // End of the loop.
        ?>

             <div class="text-center">
                <?php st_wpbeginner_numeric_posts_nav(); ?><!-- ( PAGINATION END ) -->
            </div>


            </div><!-- container-->
        </div>
					</div>
					<div class="col-sm-4 mggt">
							<?php dynamic_sidebar( 'blog-sidebar' ); ?>
					</div><!--md -->
				</div>
					
				<?php	
					/*-----this is for noraml blogs/posts-ended---------*/
				
				}
			}
		

?>		


				
				
				
				
				
				
					<?php	
					// the_posts_pagination();
					else :
					//get_template_part( 'template-parts/content', 'none' );
					?>	
					<section class="no-result-post not-found ">
						<div class="container">
							<div class="row">
								<div class="col-sm-12">
									<div class="page-content text-center">
										<p class="not-found-para"><?php _e( 'It looks like nothing was found ? Search an other', 'twentyfifteen' ); ?></p>
										<?php get_search_form(); ?>
									</div><!-- .page-content -->
								</div>
							</div>
						</div>
					</section>
						<?php	
					endif; ?>
			</div>
		</section>
	</section>
<?php get_footer('contact');