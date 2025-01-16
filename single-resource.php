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


        <?php 
            if( have_rows('resource_item') ):
                while( have_rows('resource_item') ) : the_row();
        ?>

        <div class="resourceItem">
            <div class="wrapper grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                <img class="w-full h-full object-cover" src="<?php the_sub_field('photo')?>" alt="">
                <div class="insightContent">
                    <div class="theTitle mb-6">
                        <h3 class="font-semibold text-primary"><?php the_sub_field('title'); ?></h3>
                        <!-- <h6 class="mb-1">Category: Friends</h6>
                        <h6>July 07, 2019</h6> -->
                    </div>
                    <div class="body_deck">
                            <?php the_sub_field('body_desc'); ?>
                    </div>
                </div>
            </div>
        </div>
        <?php
                endwhile;
            endif;
        ?>
    </div>
</div>

<?php get_footer() ?>