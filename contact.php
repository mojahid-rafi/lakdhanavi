<?php $cls = "sectors-p"; ?>
<?php include('header.php')?>


<div class="sectors-p media-p contact-us-p">
    <div class="wrap-web">

        <section class="sectors-banner" data-scroll-section="">
            <picture>
                <img src="./assets/images/page-banner/contact-us.jpg" class="secotr-banner-img" alt="banner-image" style="transform: translate(0px);">
            </picture>
        </section>

        <div class="wrap-sector-banner-contnet" data-scroll-section="">
            <div class="container--v">
                <div class="contact-wrap">
                    <div class="sector-banner-details sector-banner-contact" style="opacity: 1;">
                        <div class="wrap-sector-contnet">
                            <div class="wrap-title-sec">
                                <ul class="breadcrumb-new">
                                    <li>
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="active-page">
                                        <a href="#">Contact Us</a>
                                    </li>
                                </ul>

                                <h2 class="title-font">Contact Us</h2>
                            </div>

                            <div class="address">
                                <p>
                                    <!-- <span></span> -->
                                    info@lakdhanavi.com
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="map-contact-section">
                <!--  -->
                <div class="container">
                    <div class="contact-sec">
                        <h4>Alternatively, if you’d like for us to get back in touch with you, please fill in the form below.</h4>
                        <div id="mail_success" class="alert alert-success d-none" role="alert">

                        </div>
                        <div id="mail_error" class="alert alert-danger d-none" role="alert">

                        </div>
                        <form method="POST" action="#" accept-charset="UTF-8" class="contact-form"><input name="_token" type="hidden" value="4INinsDJVvornGvZb1TaTw1hk4Us1fldYsNTMSLM">
                        <input class="input-text" placeholder="Name*" name="name" type="text">
                        <span class="err text-white name"></span>
                        <input class="input-text" placeholder="Role" name="role" type="text">
                        <span class="err text-white role"></span>
                        <input class="input-text" placeholder="Email*" name="email" type="email">
                        <span class="err text-white email"></span>
                        <input class="input-text" placeholder="Phone number* (+88xxxxxxxx" name="phone" type="text">
                        <span class="err text-white phone"></span>
                        <textarea placeholder="Your Message*" cols="30" rows="10" name="message"></textarea>
                        <span class="err text-white message"></span>
                        
                        <button type="submit" class="submit-btn">SUBMIT</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include('footer.php')?>