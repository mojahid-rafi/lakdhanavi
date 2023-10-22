<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.0/assets/owl.theme.default.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.0/assets/owl.carousel.min.css">

<style>

    .client-section .client-logo{
        padding-bottom: 40px;
    }
    .client-section .client-logo .item {
        transition: transform 200ms cubic-bezier(.785, .135, .15, .86), box-shadow 200ms cubic-bezier(.785, .135, .15, .86);
        margin-bottom: 15px;
        background-color: #fff;
        margin: 10px;
        /*padding: 30px;*/
        /*border: 1px solid #efeeee;*/
        /*background-color:#ddd;*/
    }
    .client-section .client-logo .item:hover {
        -ms-transform: translateY(-5px);
        transform: translateY(-5px);
    }
    .client-section .client-logo img {
        width: 50%;
        margin: 0 auto;
        /*opacity: 0.8;*/
        /*-webkit-filter: grayscale(100%);*/
        /*filter: grayscale(100%);*/
    }
    .client-section .client-logo img:hover {
        opacity: 1;
        transition: all 0.3s ease-in-out 0s;
        -webkit-filter: grayscale(0);
        filter: grayscale(0);
    }
</style>

<section class="client-section">
    <div class="container--v">
        <div class="row mb-5">
            <div class="col-12">
                <h2 class="title-font text-center"><span>Our Clients</span></h2>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="owl-carousel owl-theme client-logo " id="client-logo">
                    <div class="item  ">
                        <a href="#"><img src="./assets/images/clients/acorn.png" class="" alt="client-logo"></a>
                    </div>

                    <div class="item ">
                        <a href="#"><img src="./assets/images/clients/doreen.jpg" class="img-responsive" alt="client-logo"></a>
                    </div>

                    <div class="item ">
                        <a href="#"><img src="./assets/images/clients/orion_group.png" class="img-responsive" alt="client-logo"></a>
                    </div>

                    <div class="item">
                        <a href="#"><img src="./assets/images/clients/ceylon.jpg" class="img-responsive" alt="client-logo"></a>
                    </div>

                    <div class="item">
                        <a href="#"><img src="./assets/images/clients/royal.jpg" class="img-responsive" alt="client-logo"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.0/owl.carousel.min.js"></script>

<script>
    $('.client-logo').owlCarousel({
        loop: true,
        margin: 0,
        dots: false,
        nav: false,
        autoplay: true,
        navText: ["<i class='icofont icofont-thin-left'></i>", "<i class='icofont icofont-thin-right'></i>"],
        responsive: {
            0: {
                items: 3
            },
            300: {
                items: 3
            },
            600: {
                items: 4
            },
            1000: {
                items: 6
            }
        }
    })
</script>
