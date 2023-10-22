<style>
    @import url("https://fonts.googleapis.com/css?family=Raleway:400,800");
    @import url("https://fonts.googleapis.com/css?family=Oswald:500");
    ::-moz-selection {
        background-color: #2256A1;
        color: white;
    }
    ::selection {
        background-color: #2256A1;
        color: white;
    }

    #site {
        display: grid;
        grid-template-rows: 3fr 2fr;
        grid-template-columns: 4rem 1fr 1fr 5rem;
        width: 100vw;
        height: 100vh;
        box-shadow: 0 0.5rem 2rem rgba(0, 0, 0, 0.1);
        background-color: #fff;
        color: #000;
        font-family: "Raleway", sans-serif;
        overflow: hidden;
    }
    #site * {
        transition: all 0.6s cubic-bezier(0.2, 0, 0.2, 1);
    }

    #site {
        --total: 4;
        --scene: 1;
        --percentage: calc(var(--scene) / var(--total));
    }

    input[name=scene] {
        position: absolute;
        top: 0;
        left: -100%;
        visibility: hidden;
        z-index: 5;
    }

    input[value="1"]:checked ~ #site {
        --scene: 1;
    }

    input[value="2"]:checked ~ #site {
        --scene: 2;
    }

    input[value="3"]:checked ~ #site {
        --scene: 3;
    }

    input[value="4"]:checked ~ #site {
        --scene: 4;
    }

    input[value="1"]:checked ~ * [data-scene]:not([data-scene="1"]),
    input[value="2"]:checked ~ * [data-scene]:not([data-scene="2"]),
    input[value="3"]:checked ~ * [data-scene]:not([data-scene="3"]),
    input[value="4"]:checked ~ * [data-scene]:not([data-scene="4"]) {
        pointer-events: none;
    }
    input[value="1"]:checked ~ * [data-scene]:not([data-scene="1"]) .heading, input[value="1"]:checked ~ * [data-scene]:not([data-scene="1"]) .paragraph, input[value="1"]:checked ~ * [data-scene]:not([data-scene="1"]) .fact,
    input[value="2"]:checked ~ * [data-scene]:not([data-scene="2"]) .heading,
    input[value="2"]:checked ~ * [data-scene]:not([data-scene="2"]) .paragraph,
    input[value="2"]:checked ~ * [data-scene]:not([data-scene="2"]) .fact,
    input[value="3"]:checked ~ * [data-scene]:not([data-scene="3"]) .heading,
    input[value="3"]:checked ~ * [data-scene]:not([data-scene="3"]) .paragraph,
    input[value="3"]:checked ~ * [data-scene]:not([data-scene="3"]) .fact,
    input[value="4"]:checked ~ * [data-scene]:not([data-scene="4"]) .heading,
    input[value="4"]:checked ~ * [data-scene]:not([data-scene="4"]) .paragraph,
    input[value="4"]:checked ~ * [data-scene]:not([data-scene="4"]) .fact {
        transform: translateX(-25%);
        opacity: 0;
    }

    input[value="1"]:checked ~ * [data-scene="1"] + [data-scene] .heading, input[value="1"]:checked ~ * [data-scene="1"] + [data-scene] .paragraph, input[value="1"]:checked ~ * [data-scene="1"] + [data-scene] .fact,
    input[value="2"]:checked ~ * [data-scene="2"] + [data-scene] .heading,
    input[value="2"]:checked ~ * [data-scene="2"] + [data-scene] .paragraph,
    input[value="2"]:checked ~ * [data-scene="2"] + [data-scene] .fact,
    input[value="3"]:checked ~ * [data-scene="3"] + [data-scene] .heading,
    input[value="3"]:checked ~ * [data-scene="3"] + [data-scene] .paragraph,
    input[value="3"]:checked ~ * [data-scene="3"] + [data-scene] .fact,
    input[value="4"]:checked ~ * [data-scene="4"] + [data-scene] .heading,
    input[value="4"]:checked ~ * [data-scene="4"] + [data-scene] .paragraph,
    input[value="4"]:checked ~ * [data-scene="4"] + [data-scene] .fact {
        transform: translateX(25%);
    }

    .ocean {
        grid-row: 1/2;
        grid-column: 1/-1;
        background-color: blue;
        background-image: url(https://picsum.photos/1200/800?image=912);
        background-repeat: no-repeat;
        background-size: cover;
        overflow: hidden;
    }

    .ocean-text {
        display: inline-block;
        white-space: nowrap;
        font-size: 45vh;
        text-transform: uppercase;
        font-weight: bold;
        font-family: "Raleway", sans-serif;
        position: relative;
        background-image: url(https://picsum.photos/1200/800?image=909);
        background-size: 160% auto;
        background-clip: text;
        -webkit-background-clip: text;
        color: transparent;
        background-position: calc( 25% + (-50% * var(--percentage)) ) 0;
        transform: translateX(calc( 50% + ( -100% * var(--percentage) ) ));
    }

    .left-content {
        float: left;
        grid-row: 2/4;
        grid-column: 2/3;
    }
    .left-content .layer {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: flex-start;
    }
    .left-content .layer > .subtitle {
        font-weight: bold;
        color: #0D3D4D;
    }
    .left-content .layer > .subtitle, .left-content .layer > .description {
        font-size: 0.75rem;
    }
    .left-content .layer > .subtitle, .left-content .layer > .number {
        color: #0D3D4D;
    }
    .left-content .layer > .number {
        font-size: 2rem;
        font-weight: bold;
        letter-spacing: -1px;
    }

    .right-content {
        grid-row: 2/4;
        grid-column: 3/-1;
    }
    .right-content > .layer {
        padding: 3rem 1rem;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    .right-content > .layer > .heading {
        margin: 0;
        font-size: 1rem;
        color: #0D3D4D;
    }

    /* ---------------------------------- */
    .slide-nav {
        position: absolute;
        bottom: 100%;
        right: 0;
        display: flex;
    }

    .nav-button {
        display: inline-block;
        padding: 0.5em 1em;
        background: #F9FBFB;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        font-weight: bold;
        text-transform: uppercase;
        overflow: hidden;
        color: #8CAAB7;
    }
    .nav-button.-next {
        color: #2D4451;
        background: #CEDBE5;
    }
    .nav-button .nav-toggle {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        cursor: pointer;
        opacity: 0;
        transform: translateX(0);
        transition: transform 0.5s linear 0s;
        z-index: 1;
    }

    input[value="1"]:checked ~ * .-next .nav-toggle:not([for=scene-2]),
    input[value="2"]:checked ~ * .-next .nav-toggle:not([for=scene-3]),
    input[value="3"]:checked ~ * .-next .nav-toggle:not([for=scene-4]),
    input[value="4"]:checked ~ * .-next .nav-toggle:not([for=scene-1]),
    input[value="1"]:checked ~ * .-prev .nav-toggle:not([for=scene-4]),
    input[value="2"]:checked ~ * .-prev .nav-toggle:not([for=scene-1]),
    input[value="3"]:checked ~ * .-prev .nav-toggle:not([for=scene-2]),
    input[value="4"]:checked ~ * .-prev .nav-toggle:not([for=scene-3]) {
        transform: translateX(100%);
        z-index: 3;
        transition-delay: 0.5s !important;
    }

    .top-nav {
        grid-column: 2/3;
        grid-row: 1/2;
        margin-top: 1rem;
        text-transform: uppercase;
        letter-spacing: 2px;
        z-index: 2;
        color: #FFF;
        font-weight: bold;
        text-shadow: 0 1px 1em rgba(0, 0, 0, 0.4);
    }

    /* ---------------------------------- */
    .left-side-slide {
        grid-row: 1/2;
        grid-column: 2/3;
        font-size: 4rem;
        font-family: "Oswald", sans-serif;
        font-weight: 500;
        overflow: hidden;
    }

    .page-numbers {
        position: absolute;
        bottom: 0;
        left: 0;
        height: 1em;
        width: 100%;
        display: flex;
        align-items: flex-end;
        overflow: hidden;
        color: #FFF;
        transform: translateY(0.5rem);
    }
    .page-numbers:after {
        content: "/ " attr(data-total);
        font-size: 1rem;
        position: absolute;
        top: 0;
        left: 4.2rem;
        opacity: 0.7;
    }

    .page-number {
        display: inline-block;
    }
    .page-number.-ones {
        transform: translateY(calc((var(--total) - var(--scene)) * (100% / var(--total))));
    }

    .hero {
        grid-row: 1/2;
        grid-column: 3/-1;
        color: #FFF;
    }
    .hero > .layer {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: flex-start;
    }
    .hero .heading {
        text-transform: uppercase;
        letter-spacing: 2px;
    }
    .hero .button {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        border: none;
        padding: 1rem;
        background-color: #0D3D4D;
        color: white;
        font-size: 0.6rem;
        font-family: inherit;
    }

    .layer {
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        width: 100%;
        height: 100%;
        margin: auto;
    }

    *, *:before, *:after {
        box-sizing: border-box;
        position: relative;
    }

    /*body {*/
        /*display: flex;*/
        /*justify-content: center;*/
        /*align-items: center;*/
    /*}*/

    /*html, body {*/
        /*width: 100%;*/
        /*height: 100%;*/
        /*margin: 0;*/
        /*padding: 0;*/
    /*}*/
</style>

<script src="https://codepen.io/shshaw/pen/QmZYMG.js"></script>

<input type="radio" name="scene" id="scene-1" value="1" checked />
<input type="radio" name="scene" id="scene-2" value="2" />
<input type="radio" name="scene" id="scene-3" value="3" />
<input type="radio" name="scene" id="scene-4" value="4" />

<main id="site">
<!--    <header class="top-nav">-->
<!--        @keyframers-->
<!--    </header>-->
    <div class="ocean">
        <div class="ocean-text">Stop</div>
    </div>
    <div class="left-side-slide">
        <div class="page-numbers" data-total="04">
            <div class="page-number -tens">0</div>
            <div class="page-number -ones">
                1<br />2<br />3<br />4
            </div>
        </div>
    </div>
    <div class="hero">
        <div class="layer" data-scene="1">
            <h1 class="heading">
                We can help<br />
                to save<br />
                the oceans
            </h1>
            <button class="button">
                How can I help?
            </button>
        </div>
        <div class="layer" data-scene="2">
            <h1 class="heading">
                Saving nature,<br />
                we save our<br />
                future
            </h1>
            <button class="button">
                How can I help?
            </button>
        </div>
        <div class="layer" data-scene="3">
            <h1 class="heading">
                Only you<br />
                can prevent<br />
                ocean fires
            </h1>
            <button class="button">
                How can I help?
            </button>
        </div>
        <div class="layer" data-scene="4">
            <h1 class="heading">
                Do not<br />
                litter on<br />
                the beach
            </h1>
            <button class="button">
                How can I help?
            </button>
        </div>
    </div>

    <div class="left-content">
        <div class="layer" data-scene="1">
            <div class="fact subtitle">More than</div>
            <div class="fact number">1 000 000</div>
            <div class="fact description">seabirds die yearly due to plastic debris</div>
        </div>
        <div class="layer" data-scene="2">
            <div class="fact subtitle">The largest garbage patch is</div>
            <div class="fact number">1 760 000 m<sup>2</sup></div>
            <div class="fact description">and is 10m deep</div>
        </div>
        <div class="layer" data-scene="3">
            <div class="fact subtitle">More than</div>
            <div class="fact number">700 000</div>
            <div class="fact description">species call the ocean their home</div>
        </div>
        <div class="layer" data-scene="4">
            <div class="fact subtitle">There is an estimated</div>
            <div class="fact number">12 000 000</div>
            <div class="fact description">metric tons of plastic in the ocean</div>
        </div>
    </div>
    <div class="right-content">

        <nav class="slide-nav">
            <div class="nav-button -prev">
                &lt;

                <label class="nav-toggle" for="scene-1">1</label>
                <label class="nav-toggle" for="scene-2">2</label>
                <label class="nav-toggle" for="scene-3">3</label>
                <label class="nav-toggle" for="scene-4">4</label>

            </div>
            <div class="nav-button -next">
                Next &gt;

                <label class="nav-toggle" for="scene-1">1</label>
                <label class="nav-toggle" for="scene-2">2</label>
                <label class="nav-toggle" for="scene-3">3</label>
                <label class="nav-toggle" for="scene-4">4</label>
            </div>
        </nav>

        <div class="layer" data-scene="1">
            <h2 class="heading">
                It's not late. It's time to save the ocean.
            </h2>
            <p class="paragraph">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae accusantium est autem amet minus, atque consequatur iure dolor id inventore sit magnam sint, voluptates deserunt beatae? Error eveniet quam dicta!
            </p>
        </div>

        <div class="layer" data-scene="2">
            <h2 class="heading">
                Facts and Stats on Ocean Pollution
            </h2>
            <p class="paragraph">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Inventore, amet hic provident ipsa placeat ad. Excepturi distinctio consectetur voluptatibus rem deleniti ducimus officia natus, magnam aut architecto sint reprehenderit provident?
            </p>
        </div>

        <div class="layer" data-scene="3">
            <h2 class="heading">
                Learn more about how you can help.
            </h2>
            <p class="paragraph">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Inventore, amet hic provident ipsa placeat ad. Excepturi distinctio consectetur voluptatibus rem deleniti ducimus officia natus, magnam aut architecto sint reprehenderit provident?
            </p>
        </div>

        <div class="layer" data-scene="4">
            <h2 class="heading">
                Join the fight to defend our oceans.
            </h2>
            <p class="paragraph">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi temporibus explicabo aspernatur dignissimos veritatis. Voluptate quis quia sed totam quasi placeat, odio quam fuga consectetur voluptatibus praesentium tempore vel molestiae?
            </p>
        </div>
    </div>
</main>