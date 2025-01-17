<?php get_header() ?>

    <div class="bannerContent">
        <div class="customContainer">
            <div class="relative z-[2] h-[40vh] grid place-items-center">
                <img class="w-[clamp(200px,20vw,500px)]" src="<?php echo get_template_directory_uri()?>/img/heroText.webp" alt="">
            </div>
        </div>
    </div>
    <img class="absolute top-0 left-0 w-full h-full object-cover" src="<?php echo get_template_directory_uri()?>/img/single-bg.webp" alt="">
    <div class="theGradient  z-0 bg-primary/50 absolute top-0 h-full w-full"></div>
</div>


<div class="singleCotent py-20">
    <div class="customContainer">
        <div class="wrapper grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
            <img class="w-full object-cover h-[400px] object-top" src="<?php echo get_the_post_thumbnail_url()?>"  alt="">
            <div class="insightContent">
                <div class="theTitle mb-6">
                    <h3 class="font-semibold text-primary mb-2"><?php the_title(); ?></h3>
                    <h6 class="mb-1 flex items-center"><span class="mr-1">Category:</span> <?php the_category(); ?></h6>
                    <h6><?php the_date('M-d-Y') ?></h6>
                </div>
                <div class="excerpt">
                    <p class="mb-6">
                        <?php the_excerpt(); ?>
                    </p>
                </div>
            </div>
        </div>
        <?php the_content(); ?>
        <div class="my-8">
            <?php 
                if( have_rows('support_details') ):
                    while( have_rows('support_details') ) : the_row();
             ?>
                <p><span><?php the_sub_field('label') ?> :</span> <?php the_sub_field('desc') ?></p>

            <?php
                    endwhile;
                endif;
            ?>
        </div>
        <?php echo do_shortcode('[wpdiscuz_comments]') ?>
    </div>
</div>

<div class="explorePost bg-secondary py-20">
        <div class="customContainer relative">
            <div class="sectionIntro text-left mb-16">
                <h2 class="text-[40px] font-semibold text-primary mb-4">More Posts</h2>
                <h4 class="w-full lg:w-[60%]">
                    Collection of previous blogs, filled with reflections, stories, and insights
                    to spark inspiration and curiosity on your journey.
                </h4>
            </div>
            <div class="my-slider">

            <?php 
                    $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => -1,
                    );
                    $newQuery = new WP_Query($args)
            ?>

                <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();?>


                <div class="exploreItem group">
                    <div class="mb-6 relative">
                        <div class="theGradient group-hover:bg-opacity-50 hover:transition-all transition-all z-10 bg-primary bg-opacity-0 absolute top-0 left-0 h-full w-full grid place-items-center">
                        <div class="relative z-10">
                            <a href="<?php the_permalink() ?>" class="btn !text-white !border-white hover:!bg-transparent">READ MORE</a>
                        </div>
                        </div>
                        <img class="w-full object-cover h-[400px] object-top" src="<?php echo get_the_post_thumbnail_url()?>"  alt="">
                    </div>
                    <div class="theTitle mb-6">
                        <h4 class="font-semibold mb-3"><?php the_title() ?></h4>
                        <h6 class="mb-1 flex items-center"><span class="mr-1">Category:</span> <?php the_category(); ?></h6>
                        <h6><?php the_date('M-d-Y') ?></h6>
                    </div>
                    <div class="theExcerpt">
                        <?php the_excerpt() ?>
                    </div>
                </div> 

            <?php
                endwhile;
                else :
                    echo "no available content yet";
                endif;
                wp_reset_postdata();
            ?>
            </div>
        </div>
    </div>


<?php get_footer() ?>