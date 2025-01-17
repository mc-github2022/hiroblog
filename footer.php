<?php wp_footer() ?>

    <footer class="bg-black py-20 grid place-items-center">
        <div class="space-y-4">
            <img class="w-[222px] h-[33px] mx-auto" src="<?php echo get_template_directory_uri()?>/img/theLogo.webp" alt="">
            <ul class="socialLinks flex gap-2 items-center justify-center">
                <li>
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri()?>/img/facebook-square.webp" alt="">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri()?>/img/linkedin.webp" alt="">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri()?>/img/youtube-square.webp" alt="">
                    </a>
                </li>
            </ul>
            <div class="text-white text-center">
                <p class="text-sm">www.hiroisogawa.com</p>
                <p class="text-sm">Copyright 2025 | All Rights Reserved</p>
            </div>
        </div>
        
       
    </footer>
    <script type="module">
        const nav = document.querySelector('nav');
        const toggleMenu = document.querySelector('.toggleNav');
            toggleMenu.addEventListener('click', ()=>{
                toggleMenu.classList.toggle('active');
                nav.classList.toggle('active');
            });

        var slider = tns({
            container: '.my-slider',
            items: 3,
            loop: false,
            slideBy: 'page',
            nav: true,
            navPosition:"bottom",
            autoplay: false,
            gutter: 20,
            controlsText: ['<img src="<?php echo get_template_directory_uri()?>/img/circle-arrow-prev.png" alt="">', '<img src="<?php echo get_template_directory_uri()?>/img/circle-arrow-next.png" alt="">'],
            responsive: {
                280: {
                    edgePadding: 20,
                    gutter: 20,
                    items: 1,
                },
                640: {
                    items: 2,
                },
                900: {
                    items: 3
                },
            }
        });
    </script>
</body>
</html>