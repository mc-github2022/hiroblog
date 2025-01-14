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
        var slider = tns({
            container: '.my-slider',
            items: 3,
            slideBy: 'page',
            autoplay: true,
            gutter: 20
        });
    </script>
</body>
</html>