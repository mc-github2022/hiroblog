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
            <img class="w-full h-full object-cover" src="<?php echo get_template_directory_uri()?>/img/latest-insight.jpg" alt="">
            <div class="insightContent">
                <div class="theTitle mb-6">
                    <h3 class="font-semibold text-primary"><?php the_title(); ?></h3>
                    <h6 class="mb-1">Category: Friends</h6>
                    <h6>July 07, 2019</h6>
                </div>
                <div class="excerpt">
                    <p class="mb-6">
                        <?php the_excerpt(); ?>
                    </p>
                </div>
            </div>
        </div>
        <?php the_content(); ?>
        <?php echo do_shortcode('[wpdiscuz_comments]') ?>
    </div>
</div>

<div class="explorePost bg-secondary py-20">
        <div class="customContainer">
            <div class="sectionIntro text-left mb-16">
                <h2 class="text-[40px] font-semibold text-primary mb-4">More Posts</h2>
                <h4 class="w-full lg:w-[60%]">
                    Collection of previous blogs, filled with reflections, stories, and insights
                    to spark inspiration and curiosity on your journey.
                </h4>
            </div>
            <div class="my-slider">


                <div class="exploreItem group">
                    <div class="mb-6 relative">
                        <div class="theGradient group-hover:bg-opacity-50 hover:transition-all transition-all z-10 bg-primary bg-opacity-0 absolute top-0 left-0 h-full w-full grid place-items-center">
                        <div class="relative z-10">
                            <a href="#" class="btn !text-white !border-white hover:!bg-transparent">READ MORE</a>
                        </div>
                        </div>
                        <img class="w-full object-cover" src="<?php echo get_template_directory_uri()?>/img/camping-trip.webp" alt="">
                    </div>
                    <div class="theTitle mb-6">
                        <h4 class="font-semibold mb-3">Camping trip to Death Valley</h4>
                        <h6 class="mb-1">Category: Adventure</h6>
                        <h6>July 07, 2019</h6>
                    </div>
                    <p class="theExcerpt">
                        Went on a camping trip for 3 days with
                        the Grahams who we have known for
                        years. Our daughters played water polo
                        together through High School and they
                        are teammates and also roommates in
                        college water polo team. We spent our
                        thanksgiving together in the desert.
                    </p>
                </div> 
              
            </div>
        </div>
    </div>


<?php get_footer() ?>