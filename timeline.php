<section class="timeline-sec">

    <style>

        .container {
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #fff;
        flex-direction: column;
        }

        .title {
            font-size: 38px;
            color: #616161;
            font-weight: 800;
        }

        .timeline {
            width: 100%;
            background-color: #fff;
            box-shadow: 0 5px 25px 5px rgba(0, 0, 0, 0.2);
        }
        .timeline .swiper-container {
            height: 600px;
            width: 100%;
            position: relative;
        }
        .timeline .swiper-wrapper {
            transition: 2s cubic-bezier(0.68, -0.4, 0.27, 1.34) 0.2s;
        }
        .timeline .swiper-slide {
            position: relative;
            color: #fff;
            overflow: hidden;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
        }
        .timeline .swiper-slide::after {
            content: "";
            position: absolute;
            z-index: 1;
            right: -115%;
            bottom: -10%;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            box-shadow: -230px 0 150px 60vw rgba(0, 0, 0, 0.7);
            border-radius: 100%;
        }
        .timeline .swiper-slide-content {
            font-family: Rubik;
            position: absolute;
            text-align: center;
            width: 80%;
            max-width: 450px;
            right: 50%;
            top: 13%;
            transform: translate(50%, 0);
            font-size: 12px;
            z-index: 2;
        }
        .timeline .swiper-slide .timeline-year {
            display: block;
            font-family: Rubik;
            color: #fff;
            font-weight: bold;
            font-size: 42px;
            margin-bottom: 50px;
            transform: translate3d(20px, 0, 0);
            font-weight: 300;
            opacity: 0;
            transition: 0.2s ease 0.4s;
        }
        .timeline .swiper-slide .timeline-title {
            font-weight: 600;
            font-size: 32px;
            margin: 0 0 30px;
            opacity: 0;
            transform: translate3d(20px, 0, 0);
            transition: 0.2s ease 0.5s;
        }
        .timeline .swiper-slide .timeline-text {
            font-family: Assistant;
            font-size: 16px;
            line-height: 1.5;
            opacity: 0;
            transform: translate3d(20px, 0, 0);
            transition: 0.2s ease 0.6s;
        }
        .timeline .swiper-slide-active .timeline-year {
            font-family: Rubik;
            color: #fff;
            font-weight: bold;
            opacity: 1;
            transform: translate3d(0, 0, 0);
            transition: 0.4s ease 1.6s;
        }
        .timeline .swiper-slide-active .timeline-title {
            opacity: 1;
            transform: translate3d(0, 0, 0);
            transition: 0.4s ease 1.7s;
        }
        .timeline .swiper-slide-active .timeline-text {
            font-family: Assistant;
            font-size: 16px;
            opacity: 1;
            transform: translate3d(0, 0, 0);
            transition: 0.4s ease 1.8s;
        }
        .timeline .swiper-pagination {
            right: 15% !important;
            height: 100%;
            display: none;
            flex-direction: column;
            justify-content: center;
            font-weight: 300;
            font-size: 18px;
            z-index: 1;
        }
        .timeline .swiper-pagination::before {
            content: "";
            position: absolute;
            left: -30px;
            top: 0;
            height: 100%;
            width: 1px;
            background-color: rgba(255, 255, 255, 0.2);
        }
        .timeline .swiper-pagination-bullet {
            font-family: Assistant;
            font-weight: bold;
            width: auto;
            height: auto;
            text-align: center;
            opacity: 1;
            background: transparent;
            color: #f1b209;
            margin: 15px 0 !important;
            position: relative;
        }
        .timeline .swiper-pagination-bullet::before {
            content: "";
            position: absolute;
            top: 11px;
            left: -32.5px;
            width: 6px;
            height: 6px;
            border-radius: 100%;
            background-color: #f8f8f8;
            transform: scale(0);
            transition: 0.2s;
        }
        .timeline .swiper-pagination-bullet-active {
            color: #f8f8f8;
        }
        .timeline .swiper-pagination-bullet-active::before {
            transform: scale(1);
        }
        .timeline .swiper-next,
        .timeline .swiper-prev {
            background-size: 20px 20px;
            top: 15%;
            width: 20px;
            height: 20px;
            margin-top: 0;
            z-index: 2;
            transition: 0.2s;
        }
        .timeline .swiper-prev {
            left: 8%;
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M0%2C22L22%2C0l2.1%2C2.1L4.2%2C22l19.9%2C19.9L22%2C44L0%2C22L0%2C22L0%2C22z'%20fill%3D'%23d4a024'%2F%3E%3C%2Fsvg%3E");
        }
        .timeline .swiper-prev:hover {
            transform: translateX(-3px);
        }
        .timeline .swiper-next {
            right: 8%;
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M27%2C22L27%2C22L5%2C44l-2.1-2.1L22.8%2C22L2.9%2C2.1L5%2C0L27%2C22L27%2C22z'%20fill%3D'%23d4a024'%2F%3E%3C%2Fsvg%3E");
        }
        .timeline .swiper-next:hover {
            transform: translateX(3px);
        }
        @media screen and (min-width: 768px) {
            .timeline .swiper-slide::after {
                right: -30%;
                bottom: -8%;
                width: 240px;
                height: 50%;
                box-shadow: -230px 0 150px 39vw rgba(1, 57, 130, 0.7)
            }
            .timeline .swiper-slide-content {
                font-family: Rubik;
                right: 30%;
                top: 50%;
                transform: translateY(-50%);
                width: 450px;
                font-size: 11px;
                text-align: right;
            }
            .timeline .swiper-slide .timeline-year {
                margin-bottom: 0;
                font-size: 32px;
            }
            .timeline .swiper-slide .timeline-title {
                font-size: 32px;
                margin: 0;
            }
            .timeline .swiper-pagination {
                display: flex;
            }
            .timeline .swiper-prev {
                top: 15%;
                left: auto;
                right: 15%;
                transform: rotate(90deg) translate(0, 10px);
            }
            .timeline .swiper-prev:hover {
                transform: rotate(90deg) translate(-3px, 10px);
            }
            .timeline .swiper-next {
                top: auto;
                bottom: 15%;
                right: 15%;
                transform: rotate(90deg) translate(0, 10px);
            }
            .timeline .swiper-next:hover {
                transform: rotate(90deg) translate(3px, 10px);
            }
        }
        @media screen and (min-width: 1024px) {
            .timeline .swiper-slide::after {
                right: -20%;
                bottom: -12%;
                width: 240px;
                height: 50%;
                box-shadow: -230px 0 150px 39vw rgba(1, 57, 130, 0.7)
            }
            .timeline .swiper-slide-content {
                right: 25%;
            }
        }
    </style>

    <div class="container-fluid p-0">
        <div class="timeline">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" style="background-image: url('./assets/images/timeline/thermal-powerplant.jpg')" data-year="1997">
                        <div class="swiper-slide-content"><span class="timeline-year">1997</span>
                            <h4 class="timeline-title">24MW Thermal Powerplant</h4>
                            <p class="timeline-text">Commenced Business as Sri Lanka’s First IPP with Setting up of 24MW Thermal Powerplant</p>
                        </div>
                    </div>
                    <div class="swiper-slide" style="background-image: url('./assets/images/timeline/renewable-energy.jpg')" data-year="2002">
                        <div class="swiper-slide-content"><span class="timeline-year">2002</span>
                            <h4 class="timeline-title">Renewable Energy</h4>
                            <p class="timeline-text">Entered into renewable energy space with 2.5 grid connected mini hydro project</p>
                        </div>
                    </div>
                    <div class="swiper-slide" style="background-image: url('./assets/images/timeline/2003-thermal-powerplant.jpg')" data-year="2003">
                        <div class="swiper-slide-content"><span class="timeline-year">2003</span>
                            <h4 class="timeline-title">100 MW Ththermal Plant</h4>
                            <p class="timeline-text">Set up 100 MW Ththermal Powerplant, 04 MW mini Hydro Project</p>
                        </div>
                    </div>
                    <div class="swiper-slide" style="background-image: url('./assets/images/timeline/2007-thermal-powerplant.jpg')" data-year="2007">
                        <div class="swiper-slide-content"><span class="timeline-year">2007</span>
                            <h4 class="timeline-title">300MW Powerplant</h4>
                            <p class="timeline-text">300 MW combined cycle Powerplant</p>
                        </div>
                    </div>
                    <div class="swiper-slide" style="background-image: url('./assets/images/timeline/2011-wind-project.jpg')" data-year="2011">
                        <div class="swiper-slide-content"><span class="timeline-year">2011</span>
                            <h4 class="timeline-title">9.6 MW Wind Project</h4>
                            <p class="timeline-text">9.6 MW Wind Power Project</p>
                        </div>
                    </div>
                    <div class="swiper-slide" style="background-image: url('./assets/images/timeline/thermal-powerplant.jpg')" data-year="2017">
                        <div class="swiper-slide-content"><span class="timeline-year">2017</span>
                            <h4 class="timeline-title">10 Thermal Powerplant</h4>
                            <p class="timeline-text">Turn key EPC contract – 10 Thermal Powerplant, Maldives</p>
                        </div>
                    </div>
                    <div class="swiper-slide" style="background-image: url('./assets/images/timeline/2019-mixex-power-project.jpg')" data-year="2019">
                        <div class="swiper-slide-content"><span class="timeline-year">2019</span>
                            <h4 class="timeline-title">114 MW Powerplant</h4>
                            <p class="timeline-text">Commissioned FLPL 114 MW thermal power plant</p>
                        </div>
                    </div>
                    <div class="swiper-slide" style="background-image: url('./assets/images/timeline/2021.jpg')" data-year="2021">
                        <div class="swiper-slide-content"><span class="timeline-year">2021</span>
                            <h4 class="timeline-title">350 MW Powerplant</h4>
                            <p class="timeline-text">Commenced the construction of 350 MW combined cycle power plant</p>
                        </div>
                    </div>
                    <div class="swiper-slide" style="background-image: url('./assets/images/timeline/2022.jpg')" data-year="2022">
                        <div class="swiper-slide-content"><span class="timeline-year">2022</span>
                            <h4 class="timeline-title">350 MW Powerplant</h4>
                            <p class="timeline-text">Commenced the construction of 350 MW combined cycle power plant</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-prev"></div>
                <div class="swiper-next"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/js/swiper.min.js"></script>


<script>
    var timelineSwiper = new Swiper ('.timeline .swiper-container', {
        direction: 'vertical',
        loop: false,
        speed: 1600,
        pagination: '.swiper-pagination',
        paginationBulletRender: function (swiper, index, className) {
            var year = document.querySelectorAll('.swiper-slide')[index].getAttribute('data-year');
            return '<span class="' + className + '">' + year + '</span>';
        },
        paginationClickable: true,
        nextButton: '.swiper-next',
        prevButton: '.swiper-prev',
        breakpoints: {
            768: {
                direction: 'horizontal',
            }
        }
    });
</script>