<?php get_header() ?>
        <div class="bannerContent relative z-[2]">
            <div class="customContainer">
                <div class="h-[50vh] flex items-end">
                    <img class="z-0" src="<?php echo get_template_directory_uri()?>/img/heroText.webp" alt="">
                </div>
            </div>
        </div>
        <div class="videoContainer absolute top-0 w-full">
            <video autoplay muted loop preload="auto" class="w-full max-w-[2500px] mx-auto h-screen object-cover object-top">
            <source src="<?php echo get_template_directory_uri()?>/img/sirHiro.mp4" type="video/mp4">
            <!-- <source src="<?php echo get_template_directory_uri()?>/img/sirHiro.ogg" type="video/ogg"> -->
            Your browser does not support the video tag.
            </video>
        </div>
        <div class="theGradient  z-0 bg-gradient-to-r from-black/50 via-primary/50 to-white/0 absolute top-0 h-full w-full">asd</div>
    </div>

    <div class="introduction pt-[180px] pb-[80px] text-center">
        <div class="customContainer">
            <h2 class="text-2xl w-full md:w-[35%] mx-auto font-bold" >A captivating space offering tales that inspire, motivate, and bring balance to life’s journey.</h2>
        </div>
    </div>

    <div class="latestInsight py-20 bg-secondary">
        <div class="customContainer">
            <div class="sectionIntro text-center mb-16">
                <h2 class="text-[40px] font-semibold text-primary">Latest Insights</h2>
                <h4>Be inspired and connect with my unique reflections and insights.</h4>
            </div>
            <div class="wrapper grid grid-cols-1 md:grid-cols-2 gap-6">
                <?php 
                        $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 1,
                        );
                        $newQuery = new WP_Query($args)
                ?>

                <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();?>

                    <img class="w-full h-full object-cover" src="<?php echo get_the_post_thumbnail_url()?>" alt="">
                    <div class="insightContent">
                        <div class="theTitle mb-6">
                            <h3 class="font-semibold text-primary"><?php the_title() ?></h3>
                            <h6 class="mb-1">Category: Friends</h6>
                            <h6>July 07, 2019</h6>
                        </div>
                        <div class="excerpt">
                            <div class="mb-6">
                              <?php the_excerpt() ?>
                        </div>
                            <a href="<?php echo the_permalink(); ?>" class="btn">READ MORE</a>
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

    <div class="resources py-20">
        <div class="customContainer">
            <div class="sectionIntro text-center mb-16">
                <h2 class="text-[40px] font-semibold text-primary">Resources</h2>
                <h4>Be inspired by different resources to enrich your journey.</h4>
            </div>
            <div class="wrapper space-y-12">

                <?php 
                            $args = array(
                            'post_type' => 'resource',
                            'posts_per_page' => -1,
                            );
                            $newQuery = new WP_Query($args)
                    ?>

                <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();?>


                <div class="resourcesCatItem grid grid-cols-1 lg:grid-cols-[_2fr_1fr] addShadow gap-12">
                    <div class="resourceContent py-12">
                        <div class="contentList addScroll overflow-scroll overflow-x-hidden px-5 lg:px-12">
                            <div class="md:h-[308px]">
                                <ul class="grid grid-cols-1">

                                    <?php 
                                        if( have_rows('resource_item') ):
                                            while( have_rows('resource_item') ) : the_row();
                                    ?>



                                    <li class="listItem group hover:bg-[#f5f5f5] ">
                                        <div class="flex items-center justify-around py-4 lg:py-7 border-b border-black border-opacity-50">
                                            <img class="text-white" src="<?php echo get_template_directory_uri()?>/img/<?php the_sub_field('content_type') ?>.webp" alt="">
                                            <h4 class="text-[16px] md:text-[24px]"><?php the_sub_field('title') ?></h4>
                                            <a href="<?php the_sub_field('link') ?>" class="btn"><?php the_sub_field('link_text') ?></a>
                                        </div>
                                    </li>

                                
                                    <?php
                                            endwhile;
                                        endif;
                                    ?>
                                            
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="resourceType relative h-[404px]">
                        <div class="h-full grid place-items-center">
                            <div class="theGradient  z-[2] bg-primary bg-opacity-50 absolute top-0 h-full w-full"></div>
                            <img class="w-full h-full object-cover absolute top-0 left-0" src="<?php echo get_the_post_thumbnail_url()?>" alt="">
                            <div class="relative z-[2] text-center text-white">
                                <h3 class="mb-4">
                                    <?php the_title(); ?>
                                </h3>
                                <div class="w-[80%] mx-auto">
                                    <?php the_excerpt(); ?>
                                </div>
                            </div>
                        </div>
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

    <div class="explorePost bg-secondary py-20">
        <div class="customContainer">
            <div class="sectionIntro text-center mb-16">
                <h2 class="text-[40px] font-semibold text-primary">Explore & Inspire</h2>
                <h4>
                    Collection of previous blogs, filled with reflections, stories, and insights
                    to spark inspiration and curiosity on your journey.
                </h4>
            </div>
            <div class="my-slider">

                <?php 
                            $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 3,
                            );
                            $newQuery = new WP_Query($args)
                    ?>

                <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();?>


                <div class="exploreItem group">
                    <div class="mb-6 relative">
                        <div class="theGradient group-hover:bg-opacity-50 hover:transition-all transition-all z-10 bg-primary bg-opacity-0 absolute top-0 left-0 h-full w-full grid place-items-center">
                        <div class="relative z-10">
                            <a href="<?php the_permalink(); ?>" class="btn !text-white !border-white hover:!bg-transparent">READ MORE</a>
                        </div>
                        </div>
                        <img class="w-full object-cover" src="<?php echo get_template_directory_uri()?>/img/camping-trip.webp" alt="">
                    </div>
                    <div class="theTitle mb-6">
                        <h4 class="font-semibold mb-3"><?php the_title() ?></h4>
                        <h6 class="mb-1">Category: Adventure</h6>
                        <h6>July 07, 2019</h6>
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

    <div class="about">
        <div class="wrapper grid grid-cols-1 lg:grid-cols-2">
            <div class="hidden lg:block">
                <img class="w-full h-full object-cover" src="<?php echo get_template_directory_uri()?>/img/hiro-picture.webp" alt="">
            </div>
            <div class="bg-primary grid place-items-start items-center p-10">
                <div class="text-white w-full 2xl:w-[60%]">
                    <div class="mb-8">
                        <h2>About Hiro</h2>
                        <p>Get to know more about Hiro isogawa</p>
                    </div>
                    <div>
                        <img class="lg:hidden w-[167px] h-[147px] mb-4" src="<?php echo get_template_directory_uri()?>/img/hiro-picture.webp" alt="">
                    </div>
                    <div>
                        <h3 class="mb-4">Hiro Isogawa</h3>
                        <p class="mb-4">
                            Hiro Isogawa is a Christian business owner who was born in
                            Japan. It is uncommon to find Christian business people in
                            Japan, which is why Hiro's heart and mission are to share
                            the joy and blessings of God's original design for work. 
                        </p>
                        <p> 
                            Hiro is also an ordained minister of reconciliation. As such,
                            he believes that the good news of the joy and blessings that
                            come from doing our work with the abiding presence of
                            Jesus Christ, through communion with the Holy Spirit, can
                            be the saving grace for many in the nation's public squares of
                            business, especially in Japan.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>



<?php get_footer() ?>