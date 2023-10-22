<style>
    .slider {
        position: relative;
        height: 100vh;
    }
    .slider__slides {
        z-index: 1;
        position: relative;
        height: 100vh;
    }
    .slider__control {
        z-index: 2;
        position: absolute;
        top: 50%;
        left: 5%;
        width: 60px;
        height: 60px;
        margin-left: -30px;
        margin-top: -30px;
        border-radius: 50%;
        background: #fff;
        transition: background-color 0.3s;
        cursor: pointer;
    }
    .slider__control--right {
        left: 95%;
    }
    .slider__control:hover {
        background-color: #2da6ff;
    }
    .slider__control-line {
        position: absolute;
        left: 23px;
        top: 50%;
        width: 3px;
        height: 14px;
        transform-origin: 50% 0;
        transform: rotate(-45deg);
    }
    .slider__control-line:nth-child(2) {
        transform: translateY(1px) rotate(-135deg);
    }
    .slider__control--right .slider__control-line {
        left: 37px;
        transform-origin: 1px 0;
        transform: rotate(45deg);
    }
    .slider__control--right .slider__control-line:nth-child(2) {
        transform: translateY(1px) rotate(135deg);
    }
    .slider__control-line:after {
        content: "";
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: #e2e2e2;
        transition: background-color 0.3s;
    }
    .slider__control:hover .slider__control-line:after {
        background-color: #fff;
    }
    .slider__control.a--rotation .slider__control-line:after {
        -webkit-animation: arrowLineRotation 0.49s;
        animation: arrowLineRotation 0.49s;
    }
    .slider__control.a--rotation .slider__control-line:nth-child(1):after {
        -webkit-animation: arrowLineRotationRev 0.49s;
        animation: arrowLineRotationRev 0.49s;
    }

    @-webkit-keyframes arrowLineRotation {
        to {
            transform: rotate(180deg);
        }
    }

    @keyframes arrowLineRotation {
        to {
            transform: rotate(180deg);
        }
    }
    @-webkit-keyframes arrowLineRotationRev {
        to {
            transform: rotate(-180deg);
        }
    }
    @keyframes arrowLineRotationRev {
        to {
            transform: rotate(-180deg);
        }
    }
    .slide {
        overflow: hidden;
        position: absolute;
        left: 50%;
        top: 50%;
        width: 100%;
        height: 100%;
        transform: translate(-50%, -50%);
        /*border-radius: 50%;*/
        transition: -webkit-clip-path 0s 0.91s;
        transition: clip-path 0s 0.91s;
        transition: clip-path 0s 0.91s, -webkit-clip-path 0s 0.91s;
        -webkit-clip-path: circle(30px at 120vw 50%);
        clip-path: circle(30px at 120vw 50%);
    }
    .slide.s--prev {
        -webkit-clip-path: circle(30px at 30vw 50%);
        clip-path: circle(30px at 30vw 50%);
    }
    .slide.s--active {
        z-index: 1;
        transition: -webkit-clip-path 1.3s;
        transition: clip-path 1.3s;
        transition: clip-path 1.3s, -webkit-clip-path 1.3s;
        -webkit-clip-path: circle(120vmax at 120vw 50%);
        /*clip-path: circle(120vmax at 120vw 50%);*/
        clip-path: circle(120vmax at 30vw 50%);
    }
    .slide.s--active.s--active-prev {
        -webkit-clip-path: circle(120vmax at 30vw 50%);
        clip-path: circle(120vmax at 30vw 50%);
    }
    .slide:nth-child(1) .slide__inner {
        background-image: url("./assets/images/project/lbpl.jpg");
    }
    .slide:nth-child(2) .slide__inner {
        background-image: url("./assets/images/project/rlpclbd.jpg");
    }
    .slide:nth-child(3) .slide__inner {
        background-image: url("./assets/images/project/epc-project-1.jpg");
    }
    .slide:nth-child(4) .slide__inner {
        background-image: url("./assets/images/project/epc-project-3.jpg");
    }
    .slide:nth-child(5) .slide__inner {
        background-image: url("./assets/images/project/lbpl.jpg");
    }
    .slide__inner {
        position: absolute;
        /*left: 50%;*/
        top: 50%;
        width: 100vw;
        height: 100vw;
        /*margin-left: -50vw;*/
        margin-top: -50vh;
        background-size: cover;
        background-position: center center;
    }
    .slide__inner:before {
        content: "";
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.3);
    }
    .slide__content {
        position: absolute;
        left: 5%;
        /*top: 50%;*/
        margin-left: -30px;
        margin-top: 48px;
        max-width: 480px;
        color: #fff;
    }
    .slide__heading {
        margin-bottom: 20px;
        font-size: 60px;
    }
    .slide__text {
        font-size: 25px;
    }
    .slide__text a {
        color: inherit;
    }
</style>

<div class="slider">
    <!-- slides -->
    <div class="slider__slides">
        <div class="slide s--active">
            <div class="slide__inner">
                <div class="slide__content">
                    <h2 class="slide__heading">Clip-Path Revealing Slider</h2>
                    <p class="slide__text">Greetings, Traveler!</p>
                </div>
            </div>
        </div>
        <div class="slide">
            <div class="slide__inner">
                <div class="slide__content">
                    <h2 class="slide__heading">Simple Animation</h2>
                    <p class="slide__text">Clip-path magic!</p>
                </div>
            </div>
        </div>
        <div class="slide">
            <div class="slide__inner">
                <div class="slide__content">
                    <h2 class="slide__heading">Very Stylish Effect!</h2>
                    <p class="slide__text">It looks cool, isn't it?</p>
                </div>
            </div>
        </div>
        <div class="slide">
            <div class="slide__inner">
                <div class="slide__content">
                    <h2 class="slide__heading">Limited browser support</h2>
                    <p class="slide__text">Forget about IE/Edge and FF</p>
                </div>
            </div>
        </div>
        <div class="slide s--prev">
            <div class="slide__inner">
                <div class="slide__content">
                    <h2 class="slide__heading">Check my other stuff!</h2>
                    <p class="slide__text"><a href="https://codepen.io/suez/pens/public/" target="_blank">Other demos</a> and <a href="https://twitter.com/NikolayTalanov" target="_blank">Twitter</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- slides end -->
    <div class="slider__control">
        <div class="slider__control-line"></div>
        <div class="slider__control-line"></div>
    </div>
    <div class="slider__control slider__control--right m--right">
        <div class="slider__control-line"></div>
        <div class="slider__control-line"></div>
    </div>
</div>


<script>
    (function() {
        var $slides = document.querySelectorAll('.slide');
        var $controls = document.querySelectorAll('.slider__control');
        var numOfSlides = $slides.length;
        var slidingAT = 1300; // sync this with scss variable
        var slidingBlocked = false;

        [].slice.call($slides).forEach(function($el, index) {
            var i = index + 1;
            $el.classList.add('slide-' + i);
            $el.dataset.slide = i;
        });

        [].slice.call($controls).forEach(function($el) {
            $el.addEventListener('click', controlClickHandler);
        });

        function controlClickHandler() {
            if (slidingBlocked) return;
            slidingBlocked = true;

            var $control = this;
            var isRight = $control.classList.contains('m--right');
            var $curActive = document.querySelector('.slide.s--active');
            var index = +$curActive.dataset.slide;
            (isRight) ? index++ : index--;
            if (index < 1) index = numOfSlides;
            if (index > numOfSlides) index = 1;
            var $newActive = document.querySelector('.slide-' + index);

            $control.classList.add('a--rotation');
            $curActive.classList.remove('s--active', 's--active-prev');
            document.querySelector('.slide.s--prev').classList.remove('s--prev');

            $newActive.classList.add('s--active');
            if (!isRight) $newActive.classList.add('s--active-prev');


            var prevIndex = index - 1;
            if (prevIndex < 1) prevIndex = numOfSlides;

            document.querySelector('.slide-' + prevIndex).classList.add('s--prev');

            setTimeout(function() {
                $control.classList.remove('a--rotation');
                slidingBlocked = false;
            }, slidingAT*0.75);
        };
    }());
</script>