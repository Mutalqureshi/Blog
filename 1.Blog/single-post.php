<!-- header -->
<?php get_header(); ?>
       
<div id="primary" class="content-area">
    <main id="main" class="site-main container">
        <?php
        while ( have_posts() ) :
        the_post();

        echo '<div class="entry-content">';
?>

    <div class="blog-post-title-section">
                    <h5 class="blog-head">Blog Post
                        <br>
                        <span class="brd"><?php bcn_display(); ?></span>
                    </h5>

    </div><!-- title section-->
    <div class="row detail-page">
        <div class="col-lg-8">
            <div class="blog-detail-content">
                <h5 class="blog-title"><?php the_title(); ?></h5>
                    <div class="blog-img">
                       <!-- <div class="zoom"> -->
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
                        <!-- </div> -->
                    </div><!-- blog image-->

                        <div class="blogDesc">
                                        <p><?= get_the_content(); ?></p>
                                    <div class="blogListFooter">
                                        <p>
                                            <span class="listAuthor"><i class="far fa-clock"></i><?php echo get_the_date(); ?> By <?php the_author_link(); ?></span>
                                            <span class="listTime">in <?php the_category(', '); ?></span>
                                        </p>
                                    </div><!-- ( BLOG LIST FOOTER END ) -->
                                    <div class="shareField">
                                            <?php echo do_shortcode('[Social9_Share]'); ?>
                                        </div>

                        </div><!--blog desc-->
                            <div class="full">
                                <ul class="single-pagination">
                                    <li class="previous">
                                        <?php previous_post_link( '%link', __( '', '' ) . '<i class="fa fa-angle-left" aria-hidden="true"></i> Previous' ); ?>
                                    </li>
                                    <li class="next">
                                        <?php   next_post_link( '%link', __( '', '' ) . 'Next <i class="fa fa-angle-right" aria-hidden="true"></i> ' ); ?>
                                    </li>
                                </ul>
                            </div><!-- full-->
            </div><!-- blog detail page-->
        </div><!--col-lg -->

     <div class="col-lg-4">
            <?php dynamic_sidebar( 'blog-sidebar' ); ?>
        </div>
    </div><!-- -->

 <!--  -->

<?php
        echo '</div><!-- .entry-content -->';

        endwhile; // End of the loop.
        ?>

    </main><!-- #main -->
</div>
<?php get_footer(); ?>

<!-- footer -->
