<style>

    .intro {
        position: relative;
        margin: 2em;
        padding: 0.2em 0.6em;
        cursor: pointer;
        color: #fff;
        font-size: 2em;
        max-width: 26em;
        font: 100 50%/1.5 'Roboto', sans-serif;
        font-size: calc(0.5vw + 1vh + 0.5vmin);
    }
    .intro h1 {
        margin-bottom: 0.5em;
        line-height: 1;
        font-weight: 100;
    }
    #CrossFade {
        background: #fff;
        display: flex;
        align-items: flex-end;
        height: 450px;
        overflow: hidden;
        position: relative;
        border-radius: 10px;
    }
    #CrossFade img {
        position: absolute;
        min-width: 100%;
        min-height: 100%;
        height: auto;
        background: #000;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        opacity: 0;
        transform: scale(1.4) rotate(12deg);
        -webkit-animation: CrossFade 24s infinite;
        animation: CrossFade 24s infinite;
    }
    #CrossFade img:nth-child(3) {
        -webkit-animation-delay: 6s;
        animation-delay: 6s;
    }
    #CrossFade img:nth-child(2) {
        -webkit-animation-delay: 12s;
        animation-delay: 12s;
    }
    #CrossFade img:nth-child(1) {
        -webkit-animation-delay: 18s;
        animation-delay: 18s;
    }
    /*

    $duration = 12
    $slides = 4
    $step = $duration/$slides
    setDelayRevers($duration, $slides)

      for index in (2..$slides)
        &:nth-child({index -1})
          animation-delay ($step*index)s

    #CrossFade
      height 100vh
      overflow hidden
      position relative

      display flex
      img
        align-self center
        position absolute

        min-width 100%
        min-height 100%
        height auto

        backface-visibility hidden
        opacity 0

        transform scale(1.4) rotate(12deg)
        animation CrossFade ($duration)s infinite
        setDelayRevers($duration, $slides)
    @keyframes CrossFade
      25%
        opacity 1
        transform scale(1) rotate(0)
      40%
        opacity 0

    */
    @-webkit-keyframes CrossFade {
        25% {
            opacity: 1;
            transform: scale(1) rotate(0);
        }
        40% {
            opacity: 0;
        }
    }
    @keyframes CrossFade {
        25% {
            opacity: 1;
            transform: scale(1) rotate(0);
        }
        40% {
            opacity: 0;
        }
    }

</style>


<div id="CrossFade">
    <img src="./assets/images/project/rlpclbd.jpg" alt="img"/>
    <img src="./assets/images/project/lbpl.jpg" alt="img"/>
    <img src="./assets/images/project/epc-project-1.jpg" alt="img"/>
    <img src="./assets/images/project/epc-project-3.jpg" alt="img"/>
<!--    <div class="intro">-->
<!--        <h1>Power Genration</h1>-->
<!--        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis impedit facilis nesciunt quam vitae voluptatibus ullam vero.</p>-->
<!--    </div>-->
</div>