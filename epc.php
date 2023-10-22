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
                            <span>Home / EPC</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="project mb-lg-5">
            <div class="container--v">
                <div class="row">
                    <div class="col-md-6 order-md-1 wow fadeInLeft" data-wow-delay="0.8s">
                        <div class="wrap-content p-4">
                            <h3 class="title-font pb-4 pt-lg-5"><span>EPC (Engineering, Procurement & Construction)</span></h3>
                            <p class="text-justify cr-content">Lakdhanavi provides tailor make turn key power plant solutions for clients within the entire life cycle of a plant. Lakdhanavi has proven track records of successful completion of turn key, installation, balancing and energizing contracts for many clients for past 25 years.</p>
                            <br>
                            <p class="text-justify cr-content">Lakdhanavi power generation portfolio comprises a spectrum of power plants which includes combined cycle, HFO, hydro, wind and solar projects in Sri Lanka, Bangladesh and Nepal.</p>
                        </div>
                    </div>
                    <div class="col-md-6 order-md-2">
                        <div class="wrap-content p-lg-5">
                            <?php //include ('./service1.php'); ?>
                            <?php include ('./project-image.php'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <?php include('./client.php'); ?>

        <section class="testimonial py-5">
            <div class="container--v">
                <div class="row mb-5">
                    <div class="col-12">
                        <h2 class="title-font text-center"><span>Customers We Care</span></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="video-wrapper">
                            <iframe width="100%" height="400"
                                    src="https://www.youtube.com/embed/jY41kxvCAR4"
                                    title="YouTube video player"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="video-wrapper">
                            <iframe width="100%" height="400"
                                    src="https://www.youtube.com/embed/Fwxl87XmqNI"
                                    title="YouTube video player"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>



    </div>


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
