<?php $cls = "sectors-p"; ?>
<?php include('header.php')?>

    <div class="gloabal-p">
        <div class="wrap-web" data-scroll-section>
            <div class="wrap-panl-float" id="panel-pin">
                <section class="sectors-banner">
                    <picture>
                        <img src="./assets/images/global/banner-singapore.jpg" class="sector-banner-img" alt="sector-banner">
                    </picture>
                </section>

                <aside id="sidePanel" class="country-side-panel" data-scroll data-scroll-sticky data-scroll-target="#panel-pin">
                    <ul class="country-link-wrap">

                        <li class="<?php if(isset($_GET["country"]) && $_GET["country"] == "Singapore") { echo "active-count-list"; }?> country-slidepanel-list">
                            <a href="./global.php?country=Singapore" class="wrap-country">
                                <div class="contry-flag-name">
                                    <img src="./assets/images/flag/singapore.jpg" alt="country-flag">
                                    <span>Singapore</span>
                                </div>
                            </a>
                        </li>

                        <li class="<?php if(isset($_GET["country"]) && $_GET["country"] == "Bangladesh") { echo "active-count-list"; }?> country-slidepanel-list">
                            <a href="./global.php?country=Bangladesh" class="wrap-country">
                                <div class="contry-flag-name">
                                    <img src="./assets/images/flag/bangladesh.jpg" alt="country-flag">
                                    <span>Bangladesh</span>
                                </div>

                                <svg width="12" height="11" class="arrow" viewBox="0 0 12 11" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.57115 0.883654L10.6875 5L6.50701 9.18049" stroke-width="1.125" />
                                    <path d="M10.625 5.06201L0.574968 5.15765" stroke-width="1.125" />
                                </svg>

                            </a>
                        </li>

                        <li class="<?php if(isset($_GET["country"]) && $_GET["country"] == "Nepal") { echo "active-count-list"; }?> country-slidepanel-list">
                            <a href="./global.php?country=Nepal" class="wrap-country">
                                <div class="contry-flag-name">
                                    <img src="./assets/images/flag/nepal.jpg" alt="country-flag">
                                    <span>Nepal</span>
                                </div>

                                <svg width="12" height="11" class="arrow" viewBox="0 0 12 11" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.57115 0.883654L10.6875 5L6.50701 9.18049" stroke-width="1.125" />
                                    <path d="M10.625 5.06201L0.574968 5.15765" stroke-width="1.125" />
                                </svg>

                            </a>
                        </li>

                        <li class="<?php if(isset($_GET["country"]) && $_GET["country"] == "India") { echo "active-count-list"; }?> country-slidepanel-list">
                            <a href="./global.php?country=India" class="wrap-country">
                                <div class="contry-flag-name">
                                    <img src="./assets/images/flag/india.jpg" alt="country-flag">
                                    <span>India</span>
                                </div>

                                <svg width="12" height="11" class="arrow" viewBox="0 0 12 11" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.57115 0.883654L10.6875 5L6.50701 9.18049" stroke-width="1.125" />
                                    <path d="M10.625 5.06201L0.574968 5.15765" stroke-width="1.125" />
                                </svg>

                            </a>
                        </li>

                        <li class="<?php if(isset($_GET["country"]) && $_GET["country"] == "Sri Lanka") { echo "active-count-list"; }?> country-slidepanel-list">
                            <a href="./global.php?country=Sri Lanka" class="wrap-country">
                                <div class="contry-flag-name">
                                    <img src="./assets/images/flag/srilanka.jpg" alt="country-flag">
                                    <span>Sri Lanka</span>
                                </div>

                                <svg width="12" height="11" class="arrow" viewBox="0 0 12 11" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.57115 0.883654L10.6875 5L6.50701 9.18049" stroke-width="1.125" />
                                    <path d="M10.625 5.06201L0.574968 5.15765" stroke-width="1.125" />
                                </svg>

                            </a>
                        </li>
                    </ul>
                </aside>

                <div class="cambodia-gray-content">
<!--                    <div class="container--v">-->
<!--                        <div class="wrap-gloab-selector">-->
<!--                            <div class="wrap-selector">-->
<!--                                <h2>List of Countries</h2>-->
<!--                                <select name="cars" id="gloab-selector">-->
<!--                                    <option value="">Select Country</option>-->
<!--                                    <option value="./cambodia" class="coun-list">Cambodia</option>-->
<!--                                    <option value="./indonesia" class="coun-list">Indonesia</option>-->
<!--                                    <option value="./malawi" class="coun-list">Malawi</option>-->
<!--                                    <option value="./maldives" class="coun-list">Maldives</option>-->
<!--                                    <option value="./mauritius" class="coun-list">Mauritius</option>-->
<!--                                    <option value="./myanmar" class="coun-list">Myanmar</option>-->
<!--                                    <option value="./nigeria" class="coun-list">Nigeria</option>-->
<!--                                    <option value="./pakistan" class="coun-list">Pakistan</option>-->
<!--                                    <option value="./philippines" class="coun-list">Philippines</option>-->
<!--                                    <option value="./sierra-leone" class="coun-list">Sierra Leone</option>-->
<!--                                    <option value="./singapore" class="coun-list">Singapore</option>-->
<!--                                    <option value="./sri-lanka" class="coun-list">Sri Lanka</option>-->
<!--                                    <option value="./tajikistan" class="coun-list">Tajikistan</option>-->
<!--                                    <option value="./tanzania" class="coun-list">Tanzania</option>-->
<!--                                    <option value="./uae" class="coun-list">UAE</option>-->
<!--                                    <option value="./zambia" class="coun-list">Zambia</option>-->
<!--                                    <option value="./kenya" class="coun-list">Kenya</option>-->
<!--                                    <option value="./zimbabwe" class="coun-list">Zimbabwe</option>-->
<!--                                    <option value="./egypt" class="coun-list">Egypt</option>-->
<!--                                    <option value="./kyrgyzatan" class="coun-list">Kyrgyzstan</option>-->
<!--.                               </select>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->

                    <section class="cambodia-middle-panel">
                        <div class="container--v">
                            <div class="cambodia-content-sec">
                                <div class="cambodia-content-sec-wrap">
                                    <div class="cambodia-content">
                                        <div class="wrap-title-sec">
                                            <ul class="breadcrumb-new">
                                                <li>
                                                    <a href="./">Home</a>
                                                </li>

                                                <li class="active-page">
                                                    <a href="#">
                                                        <?php
                                                        if(isset($_GET["country"]))
                                                        {
                                                            echo $_GET["country"];
                                                        }
                                                        ?>
                                                    </a>
                                                </li>
                                            </ul>

                                            <h2 class="title-font">Bright International Power (Pte) Ltd</h2>
                                        </div>
<!--                                        <p><p>Bright International Power (Pte) Ltd</p> </p>-->

                                        <table class="table table-bordered">
                                            <tr>
                                                <th style="width: 200px">Company Number </th>
                                                <td>200605562M</td>
                                            </tr>
                                            <tr>
                                                <th>Status </th>
                                                <td>Live Company</td>
                                            </tr>
                                            <tr>
                                                <th>Incorporation Date </th>
                                                <td>18 April 2006 (about 17 years ago)</td>
                                            </tr>
                                            <tr>
                                                <th>Company Type </th>
                                                <td>Local Company - Private Company Limited by Shares</td>
                                            </tr>
                                            <tr>
                                                <th>Jurisdiction: </th>
                                                <td>Singapore</td>
                                            </tr>
                                            <tr>
                                                <th>Registered Address </th>
                                                <td>23B TOH HEIGHTS, 507840, Singapore</td>
                                            </tr>
                                            <tr>
                                                <th>Industry Codes </th>
                                                <td>35102: Generation of electricity by other sources (eg solar power, biofuels etc) (Singapore Standard Industrial Classification (SSIC) 2015)</td>
                                            </tr>
                                        </table>
                                    </div>
<!--                                    <div class="value-panel">-->
<!--                                        <ul>-->
<!--                                            <li>-->
<!--                                                <h3>5.5 Mn</h3>-->
<!--                                                <span>Population</span>-->
<!--                                            </li>-->
<!---->
<!--                                            <li>-->
<!--                                                <h3>$72,794</h3>-->
<!--                                                <span>GDP per capita</span>-->
<!--                                            </li>-->
<!---->
<!--                                            <li>-->
<!--                                                <h3>2</h3>-->
<!--                                                <span>Ease of doing business index</span>-->
<!--                                            </li>-->
<!---->
<!---->
<!--                                        </ul>-->
<!--                                    </div>-->
                                </div>
                            </div>
                        </div>
                    </section>

<!--                    <div class="wrap-filter-slider">-->
<!---->
<!--                        <section class="service-filter-box-wrap">-->
<!--                            <div class="container--v">-->
<!--                                <div class="thumbSlider-wrap">-->
<!--                                    <div class="swiper thumbSlider">-->
<!--                                        <div class="swiper-wrapper">-->
<!---->
<!--                                            <div class="service-filter-iteam  swiper-slide cambodia-iteam">-->
<!--                                                <img src="https://www.lolc.com/storage/815/lolc-international.jpg" alt="company-logo" width="80" height="140">-->
<!--                                            </div>-->
<!--                                            <div class="service-filter-iteam  swiper-slide cambodia-iteam">-->
<!--                                                <img src="https://www.lolc.com/storage/818/lolc-asia.jpg" alt="company-logo" width="80" height="140">-->
<!--                                            </div>-->
<!--                                            <div class="service-filter-iteam  swiper-slide cambodia-iteam">-->
<!--                                                <img src="https://www.lolc.com/storage/821/lolc-global.jpg" alt="company-logo" width="80" height="140">-->
<!--                                            </div>-->
<!--                                            <div class="service-filter-iteam  swiper-slide cambodia-iteam">-->
<!--                                                <img src="https://www.lolc.com/storage/824/lolc-africa-holdings.jpg" alt="company-logo" width="80" height="140">-->
<!--                                            </div>-->
<!--                                            <div class="service-filter-iteam  swiper-slide cambodia-iteam">-->
<!--                                                <img src="https://www.lolc.com/storage/827/loloc-central-asia.jpg" alt="company-logo" width="80" height="140">-->
<!--                                            </div>-->
<!--                                            <div class="service-filter-iteam  swiper-slide cambodia-iteam">-->
<!--                                                <img src="https://www.lolc.com/storage/830/lolc-sector-holdings.jpg" alt="company-logo" width="80" height="140">-->
<!--                                            </div>-->
<!---->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="btn-next"><img src="/assets/images/sectors/gallery/right-arrow.png" alt="icon"></div>-->
<!--                                    <div class="btn-prev"><img src="/assets/images/sectors/gallery/left-arrow.png" alt="icon"></div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </section>-->
<!---->
<!--                        <section class="wrap-filter-slider-sec">-->
<!--                            <div class="swiper sectorSlider">-->
<!--                                <div class="swiper-wrapper">-->
<!---->
<!--                                    <div class="swiper-slide">-->
<!--                                        <div class="filter-slider-sec">-->
<!--                                            <div class="logo-slide-and-controller">-->
<!---->
<!--                                                <div class="logo-sec">-->
<!--                                                    <img src="https://www.lolc.com/storage/815/lolc-international.jpg" alt="company-logo">-->
<!--                                                </div>-->
<!--                                            </div>-->
<!---->
<!--                                            <div class="finance-filter-content-slider-wrap">-->
<!---->
<!--                                                <div class="sector-sld-wrap">-->
<!--                                                    <div class="filter-content-sec">-->
<!--                                                        <h3>LOLC International Private Limited</h3>-->
<!--                                                        <p><p>LOLC International, a subsidiary of LOLC Holdings PLC, operates as an investment holding company.</p></p>-->
<!--                                                    </div>-->
<!--                                                    <div class="visit-website">-->
<!--                                                        <div class="wrap-visit-img">-->
<!--                                                            <img src="https://www.lolc.com/storage/816/singapore-international.jpg"-->
<!--                                                                 alt="website-image">-->
<!--                                                        </div>-->
<!---->
<!--                                                    </div>-->
<!---->
<!---->
<!--                                                </div>-->
<!---->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!---->
<!--                                    <div class="swiper-slide">-->
<!--                                        <div class="filter-slider-sec">-->
<!--                                            <div class="logo-slide-and-controller">-->
<!---->
<!--                                                <div class="logo-sec">-->
<!--                                                    <img src="https://www.lolc.com/storage/818/lolc-asia.jpg" alt="company-logo">-->
<!--                                                </div>-->
<!--                                            </div>-->
<!---->
<!--                                            <div class="finance-filter-content-slider-wrap">-->
<!---->
<!--                                                <div class="sector-sld-wrap">-->
<!--                                                    <div class="filter-content-sec">-->
<!--                                                        <h3>LOLC Asia Private Limited</h3>-->
<!--                                                        <p><p>LOLC Asia is a subsidiary of LOLC Holdings PLC. The entity holds the LOLC Group’s subsidiaries, which are engaged in microfinance operations in Asia (Indonesia, Pakistan, Cambodia, Myanmar, Philippines, and Sri Lanka).</p></p>-->
<!--                                                    </div>-->
<!--                                                    <div class="visit-website">-->
<!--                                                        <div class="wrap-visit-img">-->
<!--                                                            <img src="https://www.lolc.com/storage/819/finance-banner-singapore.jpg"-->
<!--                                                                 alt="website-image">-->
<!--                                                        </div>-->
<!---->
<!--                                                    </div>-->
<!---->
<!---->
<!--                                                </div>-->
<!---->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!---->
<!--                                    <div class="swiper-slide">-->
<!--                                        <div class="filter-slider-sec">-->
<!--                                            <div class="logo-slide-and-controller">-->
<!---->
<!--                                                <div class="logo-sec">-->
<!--                                                    <img src="https://www.lolc.com/storage/821/lolc-global.jpg" alt="company-logo">-->
<!--                                                </div>-->
<!--                                            </div>-->
<!---->
<!--                                            <div class="finance-filter-content-slider-wrap">-->
<!---->
<!--                                                <div class="sector-sld-wrap">-->
<!--                                                    <div class="filter-content-sec">-->
<!--                                                        <h3>LOLC Global Private Limited</h3>-->
<!--                                                        <p><p>LOLC Global, a subsidiary of LOLC Holdings PLC, operates as an investment holding company.</p></p>-->
<!--                                                    </div>-->
<!--                                                    <div class="visit-website">-->
<!--                                                        <div class="wrap-visit-img">-->
<!--                                                            <img src="https://www.lolc.com/storage/822/singapore-global.jpg"-->
<!--                                                                 alt="website-image">-->
<!--                                                        </div>-->
<!---->
<!--                                                    </div>-->
<!---->
<!---->
<!--                                                </div>-->
<!---->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!---->
<!--                                    <div class="swiper-slide">-->
<!--                                        <div class="filter-slider-sec">-->
<!--                                            <div class="logo-slide-and-controller">-->
<!---->
<!--                                                <div class="logo-sec">-->
<!--                                                    <img src="https://www.lolc.com/storage/824/lolc-africa-holdings.jpg" alt="company-logo">-->
<!--                                                </div>-->
<!--                                            </div>-->
<!---->
<!--                                            <div class="finance-filter-content-slider-wrap">-->
<!---->
<!--                                                <div class="sector-sld-wrap">-->
<!--                                                    <div class="filter-content-sec">-->
<!--                                                        <h3>LOLC Africa Holdings Private Limited</h3>-->
<!--                                                        <p><p>LOLC Africa Holdings is the parent company of LOLC Mauritius Holdings Limited, which owns the Group’s subsidiaries engaged in the microfinance sector in the African continent.</p></p>-->
<!--                                                    </div>-->
<!--                                                    <div class="visit-website">-->
<!--                                                        <div class="wrap-visit-img">-->
<!--                                                            <img src="https://www.lolc.com/storage/825/singapore-african.jpg"-->
<!--                                                                 alt="website-image">-->
<!--                                                        </div>-->
<!---->
<!--                                                    </div>-->
<!---->
<!---->
<!--                                                </div>-->
<!---->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!---->
<!--                                    <div class="swiper-slide">-->
<!--                                        <div class="filter-slider-sec">-->
<!--                                            <div class="logo-slide-and-controller">-->
<!---->
<!--                                                <div class="logo-sec">-->
<!--                                                    <img src="https://www.lolc.com/storage/827/loloc-central-asia.jpg" alt="company-logo">-->
<!--                                                </div>-->
<!--                                            </div>-->
<!---->
<!--                                            <div class="finance-filter-content-slider-wrap">-->
<!---->
<!--                                                <div class="sector-sld-wrap">-->
<!--                                                    <div class="filter-content-sec">-->
<!--                                                        <h3>LOLC Central Asia Private Limited</h3>-->
<!--                                                        <p><p>LOLC Central Asia holds the LOLC Group’s subsidiaries which are engaged in microfinance operations in Central Asia (Tajikistan and Kyrgyzstan).</p></p>-->
<!--                                                    </div>-->
<!--                                                    <div class="visit-website">-->
<!--                                                        <div class="wrap-visit-img">-->
<!--                                                            <img src="https://www.lolc.com/storage/828/singapre-central-asia.jpg"-->
<!--                                                                 alt="website-image">-->
<!--                                                        </div>-->
<!---->
<!--                                                    </div>-->
<!---->
<!---->
<!--                                                </div>-->
<!---->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!---->
<!--                                    <div class="swiper-slide">-->
<!--                                        <div class="filter-slider-sec">-->
<!--                                            <div class="logo-slide-and-controller">-->
<!---->
<!--                                                <div class="logo-sec">-->
<!--                                                    <img src="https://www.lolc.com/storage/830/lolc-sector-holdings.jpg" alt="company-logo">-->
<!--                                                </div>-->
<!--                                            </div>-->
<!---->
<!--                                            <div class="finance-filter-content-slider-wrap">-->
<!---->
<!--                                                <div class="sector-sld-wrap">-->
<!--                                                    <div class="filter-content-sec">-->
<!--                                                        <h3>LOLC Financial Sector Holdings Private Limited</h3>-->
<!--                                                        <p><p>LOLC Financial Sector Holdings is the parent company of LOLC Central Asia Private Limited, LOLC Africa Holdings, and LOLC Asia Private Limited.</p></p>-->
<!--                                                    </div>-->
<!--                                                    <div class="visit-website">-->
<!--                                                        <div class="wrap-visit-img">-->
<!--                                                            <img src="https://www.lolc.com/storage/831/singapore-finance.jpg"-->
<!--                                                                 alt="website-image">-->
<!--                                                        </div>-->
<!---->
<!--                                                    </div>-->
<!---->
<!---->
<!--                                                </div>-->
<!---->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!---->
<!---->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </section>-->
<!--                    </div>-->

                </div>
            </div>

            <!-- <section class="finance-slider">
            <h2 class="title-font">Latest News</h2>

            <div class="wrap-build-globaly">
                <div class="swiper finance-slider-comp">
                    <div class="swiper-wrapper">

                                                <div class="swiper-slide ani-gloabal-slider">
                                <div class="image-iteam">
                                    <div class="image-wrap">
                                        <div class="overlay-pnl"></div>
                                        <img src="/assets/images/sectors/finance/finance-slider/finance-slide-1.jpg"
                                            alt="">
                                    </div>
                                    <div class="wrap-hide-panel">
                                        <div class="bottom-panle">
                                            <p class="full-txt">FORTIGRAINS   LANKA   PVT  LTD   ACHIEVES   BRCGS   CERTIFICATION</p>
                                        </div>
                                        <div class="hidden-panle">
                                            <p class="name"></p>
                                            <p class="desgnation"></p>
                                            <blockquote><p>Health Gold Fortified Rice manufactured by Fortigrains Lanka Private Limited, a&nbsp;<span style=...</blockquote>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                <div class="swiper-slide ani-gloabal-slider">
                                <div class="image-iteam">
                                    <div class="image-wrap">
                                        <div class="overlay-pnl"></div>
                                        <img src="/assets/images/sectors/finance/finance-slider/finance-slide-1.jpg"
                                            alt="">
                                    </div>
                                    <div class="wrap-hide-panel">
                                        <div class="bottom-panle">
                                            <p class="full-txt">FORTIGRAINS LANKA PVT LTD ACHIEVES BRCGS CERTIFICATION</p>
                                        </div>
                                        <div class="hidden-panle">
                                            <p class="name"></p>
                                            <p class="desgnation"></p>
                                            <blockquote><p>Health Gold Fortified Rice manufactured by Fortigrains Lanka Private Limited, a
    </p><p>fully own...</blockquote>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                <div class="swiper-slide ani-gloabal-slider">
                                <div class="image-iteam">
                                    <div class="image-wrap">
                                        <div class="overlay-pnl"></div>
                                        <img src="/assets/images/sectors/finance/finance-slider/finance-slide-1.jpg"
                                            alt="">
                                    </div>
                                    <div class="wrap-hide-panel">
                                        <div class="bottom-panle">
                                            <p class="full-txt">FORTIGRAINS   LANKA   PVT  LTD   ACHIEVES   BRCGS   CERTIFICATION</p>
                                        </div>
                                        <div class="hidden-panle">
                                            <p class="name"></p>
                                            <p class="desgnation"></p>
                                            <blockquote><p>FORTIGRAINS   LANKA   PVT  LTD   ACHIEVES   BRCGS   CERTIFICATION</p></blockquote>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                <div class="swiper-slide ani-gloabal-slider">
                                <div class="image-iteam">
                                    <div class="image-wrap">
                                        <div class="overlay-pnl"></div>
                                        <img src="/assets/images/sectors/finance/finance-slider/finance-slide-1.jpg"
                                            alt="">
                                    </div>
                                    <div class="wrap-hide-panel">
                                        <div class="bottom-panle">
                                            <p class="full-txt">OLC General Insurance named Best General Insurance Company of the Year</p>
                                        </div>
                                        <div class="hidden-panle">
                                            <p class="name"></p>
                                            <p class="desgnation"></p>
                                            <blockquote><p>The 3rd Emerging Asia Insurance Awards 2021, recognized LOLC General Insurance PLC as the ‘Best G...</blockquote>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                <div class="swiper-slide ani-gloabal-slider">
                                <div class="image-iteam">
                                    <div class="image-wrap">
                                        <div class="overlay-pnl"></div>
                                        <img src="/assets/images/sectors/finance/finance-slider/finance-slide-1.jpg"
                                            alt="">
                                    </div>
                                    <div class="wrap-hide-panel">
                                        <div class="bottom-panle">
                                            <p class="full-txt">LOLC Launches an Island-Wide Humanitarian Program</p>
                                        </div>
                                        <div class="hidden-panle">
                                            <p class="name"></p>
                                            <p class="desgnation"></p>
                                            <blockquote><p>LOLC, the largest diversified conglomerate in the country has launched ‘LOLC Divi Saviya’, an isl...</blockquote>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                <div class="swiper-slide ani-gloabal-slider">
                                <div class="image-iteam">
                                    <div class="image-wrap">
                                        <div class="overlay-pnl"></div>
                                        <img src="/assets/images/sectors/finance/finance-slider/finance-slide-1.jpg"
                                            alt="">
                                    </div>
                                    <div class="wrap-hide-panel">
                                        <div class="bottom-panle">
                                            <p class="full-txt">LOLC Finance introduced ‘OYES’, Making Every Day a Pay Day</p>
                                        </div>
                                        <div class="hidden-panle">
                                            <p class="name"></p>
                                            <p class="desgnation"></p>
                                            <blockquote><p>LOLC Finance PLC with iPay, jointly launched ‘OYES’, a simplified platform for salary advancing....</blockquote>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                <div class="swiper-slide ani-gloabal-slider">
                                <div class="image-iteam">
                                    <div class="image-wrap">
                                        <div class="overlay-pnl"></div>
                                        <img src="/assets/images/sectors/finance/finance-slider/finance-slide-1.jpg"
                                            alt="">
                                    </div>
                                    <div class="wrap-hide-panel">
                                        <div class="bottom-panle">
                                            <p class="full-txt">Sri Lanka’s largest NBFI, LOLC Finance poised to fuel economic resurgence</p>
                                        </div>
                                        <div class="hidden-panle">
                                            <p class="name"></p>
                                            <p class="desgnation"></p>
                                            <blockquote><p>In one of the most historic mergers in Sri Lanka, LOLC Finance PLC, the largest NBFI in the count...</blockquote>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                <div class="swiper-slide ani-gloabal-slider">
                                <div class="image-iteam">
                                    <div class="image-wrap">
                                        <div class="overlay-pnl"></div>
                                        <img src="/assets/images/sectors/finance/finance-slider/finance-slide-1.jpg"
                                            alt="">
                                    </div>
                                    <div class="wrap-hide-panel">
                                        <div class="bottom-panle">
                                            <p class="full-txt">LOLC Group, The Multinational Conglomerate, records historic profitability</p>
                                        </div>
                                        <div class="hidden-panle">
                                            <p class="name"></p>
                                            <p class="desgnation"></p>
                                            <blockquote><p>1st June 2022, Colombo: Fulfilling its ambition of being a multinational, the LOLC Group recorded...</blockquote>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                <div class="swiper-slide ani-gloabal-slider">
                                <div class="image-iteam">
                                    <div class="image-wrap">
                                        <div class="overlay-pnl"></div>
                                        <img src="/assets/images/sectors/finance/finance-slider/finance-slide-1.jpg"
                                            alt="">
                                    </div>
                                    <div class="wrap-hide-panel">
                                        <div class="bottom-panle">
                                            <p class="full-txt">LOLC SAVI rewards students who excelled in grade 5 scholarship examination</p>
                                        </div>
                                        <div class="hidden-panle">
                                            <p class="name"></p>
                                            <p class="desgnation"></p>
                                            <blockquote><p>LOLC SAVI recently launched an appreciation and a rewarding programme for the children of the SAV...</blockquote>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                <div class="swiper-slide ani-gloabal-slider">
                                <div class="image-iteam">
                                    <div class="image-wrap">
                                        <div class="overlay-pnl"></div>
                                        <img src="/assets/images/sectors/finance/finance-slider/finance-slide-1.jpg"
                                            alt="">
                                    </div>
                                    <div class="wrap-hide-panel">
                                        <div class="bottom-panle">
                                            <p class="full-txt">MS. NADIKA OPATHA APPOINTED AS DIRECTOR TO THE BOARD OF LOLC LIFE ASSURANCE</p>
                                        </div>
                                        <div class="hidden-panle">
                                            <p class="name"></p>
                                            <p class="desgnation"></p>
                                            <blockquote><p>As announced by the LOLC Group, Ms. Nadika Opatha has been appointed to the Board of LOLC Life As...</blockquote>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                <div class="swiper-slide ani-gloabal-slider">
                                <div class="image-iteam">
                                    <div class="image-wrap">
                                        <div class="overlay-pnl"></div>
                                        <img src="/assets/images/sectors/finance/finance-slider/finance-slide-1.jpg"
                                            alt="">
                                    </div>
                                    <div class="wrap-hide-panel">
                                        <div class="bottom-panle">
                                            <p class="full-txt">LOLC Divi Saviya – Reaches 100 Days Humanitarian Efforts</p>
                                        </div>
                                        <div class="hidden-panle">
                                            <p class="name"></p>
                                            <p class="desgnation"></p>
                                            <blockquote><p>High inflation, rising commodity prices, power shortages and a fuel crisis has had a crippling ef...</blockquote>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                <div class="swiper-slide ani-gloabal-slider">
                                <div class="image-iteam">
                                    <div class="image-wrap">
                                        <div class="overlay-pnl"></div>
                                        <img src="/assets/images/sectors/finance/finance-slider/finance-slide-1.jpg"
                                            alt="">
                                    </div>
                                    <div class="wrap-hide-panel">
                                        <div class="bottom-panle">
                                            <p class="full-txt">LOLC GENERAL AND LOLC LIFE ENTERS INTO STRATEGIC PARTNERSHIP WITH CARGILLS BANK</p>
                                        </div>
                                        <div class="hidden-panle">
                                            <p class="name"></p>
                                            <p class="desgnation"></p>
                                            <blockquote><p>LOLC General Insurance PLC and LOLC Life Assurance Ltd, two of Sri Lanka’s finest and fastest gro...</blockquote>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                <div class="swiper-slide ani-gloabal-slider">
                                <div class="image-iteam">
                                    <div class="image-wrap">
                                        <div class="overlay-pnl"></div>
                                        <img src="/assets/images/sectors/finance/finance-slider/finance-slide-1.jpg"
                                            alt="">
                                    </div>
                                    <div class="wrap-hide-panel">
                                        <div class="bottom-panle">
                                            <p class="full-txt">LOLC FINANCE SIGNUP FOR A REFORESTATION AND ECO SYSTEM RESTORATION PROJECT IN DENIYAYA</p>
                                        </div>
                                        <div class="hidden-panle">
                                            <p class="name"></p>
                                            <p class="desgnation"></p>
                                            <blockquote><p>Endowed with a diverse range of forest ecosystems, Sri Lanka is inherent of different topographic...</blockquote>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                <div class="swiper-slide ani-gloabal-slider">
                                <div class="image-iteam">
                                    <div class="image-wrap">
                                        <div class="overlay-pnl"></div>
                                        <img src="/assets/images/sectors/finance/finance-slider/finance-slide-1.jpg"
                                            alt="">
                                    </div>
                                    <div class="wrap-hide-panel">
                                        <div class="bottom-panle">
                                            <p class="full-txt">LOLC Finance opens a new Chapter in Pudukuduirippu</p>
                                        </div>
                                        <div class="hidden-panle">
                                            <p class="name"></p>
                                            <p class="desgnation"></p>
                                            <blockquote><p>LOLC Finance PLC, the largest Non-Banking Financial Institution (NBFI) in Sri Lanka has announced...</blockquote>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                <div class="swiper-slide ani-gloabal-slider">
                                <div class="image-iteam">
                                    <div class="image-wrap">
                                        <div class="overlay-pnl"></div>
                                        <img src="/assets/images/sectors/finance/finance-slider/finance-slide-1.jpg"
                                            alt="">
                                    </div>
                                    <div class="wrap-hide-panel">
                                        <div class="bottom-panle">
                                            <p class="full-txt">LOLC General Insurance disrupts industry with first ever Lifestyle Motor Insurance Product ‘Honours’ and leads the way towards Digital Insurance transformation</p>
                                        </div>
                                        <div class="hidden-panle">
                                            <p class="name"></p>
                                            <p class="desgnation"></p>
                                            <blockquote><p>LOLC General Insurance PLC (LOLC GI), one of the fastest-growing General Insurance companies in S...</blockquote>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                <div class="swiper-slide ani-gloabal-slider">
                                <div class="image-iteam">
                                    <div class="image-wrap">
                                        <div class="overlay-pnl"></div>
                                        <img src="/assets/images/sectors/finance/finance-slider/finance-slide-1.jpg"
                                            alt="">
                                    </div>
                                    <div class="wrap-hide-panel">
                                        <div class="bottom-panle">
                                            <p class="full-txt">LOLC venture into another humanitarian effort through Divi Saviya</p>
                                        </div>
                                        <div class="hidden-panle">
                                            <p class="name"></p>
                                            <p class="desgnation"></p>
                                            <blockquote><p>Continuing to drive through the LOLC Divi Saviya humanitarian effort, LOLC Holdings commenced ano...</blockquote>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                <div class="swiper-slide ani-gloabal-slider">
                                <div class="image-iteam">
                                    <div class="image-wrap">
                                        <div class="overlay-pnl"></div>
                                        <img src="/assets/images/sectors/finance/finance-slider/finance-slide-1.jpg"
                                            alt="">
                                    </div>
                                    <div class="wrap-hide-panel">
                                        <div class="bottom-panle">
                                            <p class="full-txt">LOLC Finance Keeps Growing In Kandy</p>
                                        </div>
                                        <div class="hidden-panle">
                                            <p class="name"></p>
                                            <p class="desgnation"></p>
                                            <blockquote><p>LOLC Finance, the largest Non-Banking Financial Institution (NBFI) in Sri Lanka further extended...</blockquote>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                <div class="swiper-slide ani-gloabal-slider">
                                <div class="image-iteam">
                                    <div class="image-wrap">
                                        <div class="overlay-pnl"></div>
                                        <img src="/assets/images/sectors/finance/finance-slider/finance-slide-1.jpg"
                                            alt="">
                                    </div>
                                    <div class="wrap-hide-panel">
                                        <div class="bottom-panle">
                                            <p class="full-txt">LOLC Finance reintroduce its latest branch in Kiribathgoda</p>
                                        </div>
                                        <div class="hidden-panle">
                                            <p class="name"></p>
                                            <p class="desgnation"></p>
                                            <blockquote><p>LOLC Finance PLC, the largest Non-Banking Financial Institution (NBFI) in Sri Lanka, aligned anot...</blockquote>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                <div class="swiper-slide ani-gloabal-slider">
                                <div class="image-iteam">
                                    <div class="image-wrap">
                                        <div class="overlay-pnl"></div>
                                        <img src="/assets/images/sectors/finance/finance-slider/finance-slide-1.jpg"
                                            alt="">
                                    </div>
                                    <div class="wrap-hide-panel">
                                        <div class="bottom-panle">
                                            <p class="full-txt">Gal Oya Plantations - A Role-Model for Profitable Public-Private Partnerships</p>
                                        </div>
                                        <div class="hidden-panle">
                                            <p class="name"></p>
                                            <p class="desgnation"></p>
                                            <blockquote><p>At a time when enhancing profitability of public enterprises is an urgent need to boost the natio...</blockquote>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                <div class="swiper-slide ani-gloabal-slider">
                                <div class="image-iteam">
                                    <div class="image-wrap">
                                        <div class="overlay-pnl"></div>
                                        <img src="/assets/images/sectors/finance/finance-slider/finance-slide-1.jpg"
                                            alt="">
                                    </div>
                                    <div class="wrap-hide-panel">
                                        <div class="bottom-panle">
                                            <p class="full-txt">Gal Oya - The critical pillar of social upliftment in Ampara</p>
                                        </div>
                                        <div class="hidden-panle">
                                            <p class="name"></p>
                                            <p class="desgnation"></p>
                                            <blockquote><p>Looking at the thriving and prosperous Gal Oya sugarcane farmer community today, it is hard to be...</blockquote>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                <div class="swiper-slide ani-gloabal-slider">
                                <div class="image-iteam">
                                    <div class="image-wrap">
                                        <div class="overlay-pnl"></div>
                                        <img src="/assets/images/sectors/finance/finance-slider/finance-slide-1.jpg"
                                            alt="">
                                    </div>
                                    <div class="wrap-hide-panel">
                                        <div class="bottom-panle">
                                            <p class="full-txt">LOLC Al-Falaah secures ‘Best Islamic Leasing Provider - Global’ for the third consecutive year at IFN Awards 2022</p>
                                        </div>
                                        <div class="hidden-panle">
                                            <p class="name"></p>
                                            <p class="desgnation"></p>
                                            <blockquote><p>Reaffirming its status as the most adorned Alternate Financial services brand in Sri Lanka, LOLC...</blockquote>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                <div class="swiper-slide ani-gloabal-slider">
                                <div class="image-iteam">
                                    <div class="image-wrap">
                                        <div class="overlay-pnl"></div>
                                        <img src="/assets/images/sectors/finance/finance-slider/finance-slide-1.jpg"
                                            alt="">
                                    </div>
                                    <div class="wrap-hide-panel">
                                        <div class="bottom-panle">
                                            <p class="full-txt">The world’s most global inclusive finance platform originating from Sri Lanka is transforming global communities</p>
                                        </div>
                                        <div class="hidden-panle">
                                            <p class="name"></p>
                                            <p class="desgnation"></p>
                                            <blockquote><p>Success didn’t happen overnight for U Thant Zin, nor did it come easily. U Thant Zin is a paddy f...</blockquote>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                <div class="swiper-slide ani-gloabal-slider">
                                <div class="image-iteam">
                                    <div class="image-wrap">
                                        <div class="overlay-pnl"></div>
                                        <img src="/assets/images/sectors/finance/finance-slider/finance-slide-1.jpg"
                                            alt="">
                                    </div>
                                    <div class="wrap-hide-panel">
                                        <div class="bottom-panle">
                                            <p class="full-txt">LOLC in epochal mission to support education of school children</p>
                                        </div>
                                        <div class="hidden-panle">
                                            <p class="name"></p>
                                            <p class="desgnation"></p>
                                            <blockquote><p>The LOLC group commenced the ‘Divi Saviya’ programme to carry out a meaningful mission for the ne...</blockquote>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                <div class="swiper-slide ani-gloabal-slider">
                                <div class="image-iteam">
                                    <div class="image-wrap">
                                        <div class="overlay-pnl"></div>
                                        <img src="/assets/images/sectors/finance/finance-slider/finance-slide-1.jpg"
                                            alt="">
                                    </div>
                                    <div class="wrap-hide-panel">
                                        <div class="bottom-panle">
                                            <p class="full-txt">LOLC Insurance and Pan Asia together reward the top Bancassurance performers</p>
                                        </div>
                                        <div class="hidden-panle">
                                            <p class="name"></p>
                                            <p class="desgnation"></p>
                                            <blockquote>LOLC General Insurance PLC and LOLC Life Assurance Ltd, two of Sri Lanka’s finest and fastest growin...</blockquote>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                <div class="swiper-slide ani-gloabal-slider">
                                <div class="image-iteam">
                                    <div class="image-wrap">
                                        <div class="overlay-pnl"></div>
                                        <img src="/assets/images/sectors/finance/finance-slider/finance-slide-1.jpg"
                                            alt="">
                                    </div>
                                    <div class="wrap-hide-panel">
                                        <div class="bottom-panle">
                                            <p class="full-txt">LOLC General signs MoU to promote 1st ever Lifestyle Motor Insurance Product ‘Honours’</p>
                                        </div>
                                        <div class="hidden-panle">
                                            <p class="name"></p>
                                            <p class="desgnation"></p>
                                            <blockquote><p>LOLC General Insurance PLC (LOLC GI), recognised as the fastest-growing General Insurance company...</blockquote>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                <div class="swiper-slide ani-gloabal-slider">
                                <div class="image-iteam">
                                    <div class="image-wrap">
                                        <div class="overlay-pnl"></div>
                                        <img src="/assets/images/sectors/finance/finance-slider/finance-slide-1.jpg"
                                            alt="">
                                    </div>
                                    <div class="wrap-hide-panel">
                                        <div class="bottom-panle">
                                            <p class="full-txt">FORTIGRAINS   LANKA   PVT  LTD   ACHIEVES   BRCGS   CERTIFICATION</p>
                                        </div>
                                        <div class="hidden-panle">
                                            <p class="name"></p>
                                            <p class="desgnation"></p>
                                            <blockquote><p>Health Gold Fortified Rice manufactured by Fortigrains Lanka Private Limited, a fully owned subsi...</blockquote>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                <div class="swiper-slide ani-gloabal-slider">
                                <div class="image-iteam">
                                    <div class="image-wrap">
                                        <div class="overlay-pnl"></div>
                                        <img src="/assets/images/sectors/finance/finance-slider/finance-slide-1.jpg"
                                            alt="">
                                    </div>
                                    <div class="wrap-hide-panel">
                                        <div class="bottom-panle">
                                            <p class="full-txt">LOLC FINANCE RECOGNIZED FOR EXCELLENCE IN MANAGEMENT PRACTICES</p>
                                        </div>
                                        <div class="hidden-panle">
                                            <p class="name"></p>
                                            <p class="desgnation"></p>
                                            <blockquote><p>LOLC Finance PLC, the leading Non-Banking Financial Institution (NBFI) in Sri Lanka wins three pr...</blockquote>
                                        </div>
                                    </div>
                                </div>
                            </div>

                    </div>
                    <div class="swiper-button-next wrap-ovel-icon">
                        <div class="ovel-icon">
                            <img src="/assets/images/home/right-arrow.png" alt="icon">
                        </div>
                    </div>
                    <div class="swiper-button-prev wrap-ovel-icon">
                        <div class="ovel-icon">
                            <img src="/assets/images/home/left-arrow.png" alt="icon">
                        </div>
                    </div>
                </div>
            </div>
        </section>
     -->

        </div>
    </div>



<?php include('footer.php')?>