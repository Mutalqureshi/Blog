<!-- header -->
<?php get_header(); ?>
       
<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <div class="section-blog">
            <div class="container">
                    <h5 class="blog-head"><?php the_archive_title() ?>
                        <br>
                        <span class="brd"><?php bcn_display(); ?>
                    </h5>

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
                                        <p><?php st_my_excerpt(25); ?></p>
                                        <p><?php the_excerpt(); ?></p>
                                        <a href="<?php the_permalink(); ?>" class="more2">Read More...</a>

                                    <div class="blogListFooter">
                                        <p>
                                            <span class="listAuthor"><i class="far fa-clock"></i><?php echo get_the_date(); ?> By <?php the_author_link(); ?></span>
                                            <span class="listTime">in <?php the_category(', '); ?></span>
                                        </p>
                                    </div><!-- ( BLOG LIST FOOTER END ) -->
                                </div><!-- blog content-->
                            </div><!--col-->

                    </div><!--row -->
                </div><!-- the blog-->







        <?php
        endwhile; // End of the loop.
        ?>
            </div><!-- container-->
        </div><!-- arb blog-->

    </main><!-- #main -->
</div>

<?php get_footer(); ?>

<!-- footer -->
