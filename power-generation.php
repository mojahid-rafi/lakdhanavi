<?php $cls = "p-home invester-p about-p"; ?>

<?php include('./header.php')?>

    <div class="wrap-web">
        <section class="sectors-banner page core-business mb-0">
            <div class="container--v text-white">
                <div class="row">
                    <div class="offset-3 col-6">
                        <div class="page-name">
                            <h2>Core Business</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="offset-3 col-6">
                        <div class="breadcrumbs">
                            <span>Home / Power Generation</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="project">
            <div class="container--v">
                <div class="row">
                    <div class="col-md-5 order-md-1 wow fadeInLeft" data-wow-delay="0.8s">
                        <div class="wrap-content p-lg-5">
                            <h3 class="title-font pb-4 pt-lg-5"><span>Power Generation</span></h3>
                            <p class="text-justify cr-content">Lakdhanavi is the largest IIP company in Sri Lanka. It is a subsidiary company of LTL Holdings Ltd, Sri Lanka which has   diverse business operations in South, South East and East African region. Currently Lakdhanavi has power generation capacity of 544 MW in Sri Lanka and it is scheduled to rise up to 894 MW in the 4th quarter in 2024 with a 350 combined cycle project which is under implementation.</p>
                            <br>
                            <p class="text-justify cr-content">Lakdhanavi power generation portfolio comprises a spectrum of power plants which includes combined cycle, HFO, hydro, wind and solar projects in Sri Lanka, Bangladesh and Nepal.</p>
                        </div>
                    </div>
                    <div class="col-md-7 order-md-2">
                        <div class="wrap-content p-lg-5">
                                <?php //include ('./service1.php'); ?>
                                <?php include ('./project-image.php'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>


<?php include('./footer.php')?>

        <script>
            //PowerGen//OandM//EPC Slide
            jQuery(document).ready(function ($) {

                setInterval(function () {
                    moveRight();
                }, 3000);

                var slideCount = $('#slider ul li').length;
                var slideWidth = $('#slider ul li').width();
                var slideHeight = $('#slider ul li').height();
                var sliderUlWidth = slideCount * slideWidth;

                $('#slider').css({ width: slideWidth, height: slideHeight });

                $('#slider ul').css({ width: sliderUlWidth, marginLeft: - slideWidth });

                $('#slider ul li:last-child').prependTo('#slider ul');

                function moveLeft() {
                    $('#slider ul').animate({
                        left: + slideWidth
                    }, 200, function () {
                        $('#slider ul li:last-child').prependTo('#slider ul');
                        $('#slider ul').css('left', '');
                    });
                };

                function moveRight() {
                    $('#slider ul').animate({
                        left: - slideWidth
                    }, 200, function () {
                        $('#slider ul li:first-child').appendTo('#slider ul');
                        $('#slider ul').css('left', '');
                    });
                };

                $('a.control_prev').click(function () {
                    moveLeft();
                });

                $('a.control_next').click(function () {
                    moveRight();
                });

            });
        </script>
