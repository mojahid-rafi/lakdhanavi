<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-4 p-0">
                <div class="left-side">
                    <h4></h4>
                    <div class="sis-concern">
                        <p>Our goal is to offer broad capabilities, competitive pricing, exceptional quality and outstanding service to each and every customer.</p>
                    </div>
                    <div class="social">
                        <span><a href="https://www.facebook.com/pages/Lakdhanavi-Limited/102337508476460"><i class="fa fa-facebook fa-2x"></i></a></span>
                        <span><a href="#"><i class="fa fa-twitter fa-2x"></i></a></span>
                        <span><a href="#"><i class="fa fa-instagram fa-2x"></i></a></span>
                        <span><a href="https://www.linkedin.com/company/lakdhanavi-limited/"><i class="fa fa-linkedin fa-2x"></i></a></span>
                        <span><a href="https://www.youtube.com/@ltlholdings3691"><i class="fa fa-youtube fa-2x"></i></a></span>
                    </div>
                </div>

            </div>
            <div class="col-8 p-0">
                <div class="right-side">
                    <div class="row">
                        <div class="col-4">
                            <div class="footer-services">
                                <div class="menu-title">
                                    <span>Bangladesh Subsidiaries</span>
                                </div>

                                <ul>
                                    <li><a href="#">Raj Lanka Power Company Limited</a></li>
                                    <li><a href="#">Lakdhanavi Bangla Power Limited</a></li>
                                    <li><a href="#">Feni Lanka Power Limited</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="footer-services">
                                <div class="menu-title cs-pd">
                                    <span>Contact us</span>
                                </div>

                                <div class="info">
                                    <div class="adrs">
                                        <i class="fa fa-map-marker"></i>
                                    </div>
                                    <p> L-03, Arzed Chamber, #13, Bir Uttam AK Khandaker Road, Mohakhali C/A</p>

                                    <div class="adrs">
                                        <i class="fa fa-map-marker"></i>
                                    </div>
                                    <p> LTL Holdings (Pvt.) Ltd, 67, Park Street, Colombo 02, Sri Lanka</p>

                                    <div class="adrs">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <p> +880258815581</p>

                                    <div class="adrs">
                                        <i class="fa fa-send"></i>
                                    </div>
                                    <p>  info@lakdhanavibd.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="footer-services">
                                <div class="menu-title cs-pd">
                                    <span>About</span>
                                </div>

                                <ul>
                                    <li><a href="./our-team.php?team=bod">Board Of Director</a></li>
                                    <li><a href="./our-team.php?team=mt">Management Team</a></li>
                                    <li><a href="./our-team.php?team=cp">Corporate Profile</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<footer data-scroll-section="">

            <div class="container--v">

                <div class="ft-bottom-wrap">
                    <p class="copyright">© 2023 Lakdhanavi Limited</p>
                    <p class="desing-dev">Design and develop by <a href="https://www.quicksms.xyz"
                            target="_blank">QUICK HOST BD</a>
                    </p>
                </div>
            </div>
        </footer>

    </main>

    <a id="button"></a>


<script>
    // 1. querySelector
    var containerEl = document.querySelector(".portfolio-item");
    // 2. Passing the configuration object inline
    //https://www.kunkalabs.com/mixitup/docs/configuration-object/
    var mixer = mixitup(containerEl, {
        animation: {
            effects: "fade translateZ(-100px)",
            effectsIn: "fade translateY(-100%)",
            easing: "cubic-bezier(0.645, 0.045, 0.355, 1)"
        }
    });
    // fancybox insilaze & options
    $("[data-fancybox]").fancybox({
        loop: true,
        hash: true,
        transitionEffect: "slide",
        /* zoom VS next
        clickContent - i modify the deafult - now when you click on the image you go to the next image - i more like this approach than zoom on desktop (This idea was in the classic/first lightbox) */
        clickContent: function(current, event) {
            return current.type === "image" ? "next" : false;
        }
    });
</script>

    <script>
        var siteBaseUrl = "localhost";

        // var siteBaseUrl = "https://www.lolc.com";

    </script>



    <script src="./assets/js/lib.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/swiperslider.min.js"></script>
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.2.0/anime.js"></script>
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/main.js"></script>

<script>
    var btn = $('#button');

    $(window).scroll(function() {
        if ($(window).scrollTop() > 300) {
            btn.addClass('show');
        } else {
            btn.removeClass('show');
        }
    });

    btn.on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({scrollTop:0}, '300');
    });

    new WOW().init();


    //Service
    $(document).ready(function() {

        var $slider = $(".slider"),
            $slideBGs = $(".slide__bg"),
            diff = 0,
            curSlide = 0,
            numOfSlides = $(".slide").length-1,
            animating = false,
            animTime = 500,
            autoSlideTimeout,
            autoSlideDelay = 6000,
            $pagination = $(".slider-pagi");

        function createBullets() {
            for (var i = 0; i < numOfSlides+1; i++) {
                var $li = $("<li class='slider-pagi__elem'></li>");
                $li.addClass("slider-pagi__elem-"+i).data("page", i);
                if (!i) $li.addClass("active");
                $pagination.append($li);
            }
        };

        createBullets();

        function manageControls() {
            $(".slider-control").removeClass("inactive");
            if (!curSlide) $(".slider-control.left").addClass("inactive");
            if (curSlide === numOfSlides) $(".slider-control.right").addClass("inactive");
        };

        function autoSlide() {
            autoSlideTimeout = setTimeout(function() {
                curSlide++;
                if (curSlide > numOfSlides) curSlide = 0;
                changeSlides();
            }, autoSlideDelay);
        };

        autoSlide();

</script>


</body>

</html>