<?php $cls = "invester-p about-p"; ?>
<?php include('header.php')?>


    <div class="invester-p about-p">
        <div class="wrap-web">
            <section class="sectors-banner" data-scroll-section="">
                <picture>
                    <img src="./assets/images/page-banner/ltl-image.jpg" class="secotr-banner-img" alt="sector-banner" style="transform: translate(0px);">
                </picture>
            </section>

            <aside id="sidePanel" class="country-side-panel about-side-panel" data-scroll data-scroll-sticky data-scroll-target="#panel-pin">
                <ul class="country-link-wrap">

                    <li class="<?php if(isset($_GET["team"]) && $_GET["team"] == "cp") { echo "active-count-list"; }?> country-slidepanel-list">
                        <a href="./our-team.php?team=cp" class="wrap-country">
                            <div class="contry-flag-name">
                                <span>Corporate Profile</span>
                            </div>

                            <svg width="12" height="11" class="arrow" viewBox="0 0 12 11" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.57115 0.883654L10.6875 5L6.50701 9.18049" stroke-width="1.125" />
                                <path d="M10.625 5.06201L0.574968 5.15765" stroke-width="1.125" />
                            </svg>

                        </a>
                    </li>

                    <li class="<?php if(isset($_GET["team"]) && $_GET["team"] == "bod") { echo "active-count-list"; }?> country-slidepanel-list">
                        <a href="./our-team.php?team=bod" class="wrap-country">
                            <div class="contry-flag-name">
                                <span>Board of Directors</span>
                            </div>

                            <svg width="12" height="11" class="arrow" viewBox="0 0 12 11" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.57115 0.883654L10.6875 5L6.50701 9.18049" stroke-width="1.125" />
                                <path d="M10.625 5.06201L0.574968 5.15765" stroke-width="1.125" />
                            </svg>

                        </a>
                    </li>

                    <li class="<?php if(isset($_GET["team"]) && $_GET["team"] == "mt") { echo "active-count-list"; }?> country-slidepanel-list">
                        <a href="./our-team.php?team=mt" alt="mt" class="wrap-country">
                            <div class="contry-flag-name">
                                <span>Management Team</span>
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


            <section class="wrap-sector-banner-contnet our-team" data-scroll-section="">
                <div class="container--v">
                    <div class="sector-banner-details ani-prop" style="opacity: 1;">
                        <div class="wrap-sector-contnet">
                            <div class="wrap-title-sec">
                                <ul class="breadcrumb-new">
                                    <li>
                                        <a href="/">Home</a>
                                    </li>
                                    <li class="active-page">
                                        <a href="./about-us.php">About us</a>
                                    </li>
                                </ul>

                                <h2 class="title-font">Board Of Directors</h2>
                            </div>

                            <p class="sub-texts"> No Director or a person nominated to become a Director of the Company has been involved in any of the following:
                                • A petition under any bankruptcy laws filed against such person or any partnership in which he/she was a partner or any corporation of which he was an executive officer; or
                                • Conviction for fraud, misappropriation or breach of trust or any other similar offence which the CSE considers a disqualification.</p>

                        </div>
                    </div>

                    <div class="container--v">
                        <div class="row">

                            <div class="team-wrap">
                                <section class="team">
                                    <h1 class="team-title">Senior Management and Corporate Management Team of LTLH Group</h1>
                                </section>
                                <div class="leadership">
                                    <div class="leader" <?php if(isset($_GET["team"]) && $_GET["team"] == "mt") { echo "hidden"; }?>>
                                        <div class="leader__img">
                                            <img src="./assets/images/board-of-director/jayawardana_chairman.jpg" alt="Amanda Maynard">
                                        </div>
                                        <div class="leader__name">
                                            <h2>Mr. U. D. Jayawardana</h2>
                                            <p><em>Chairman</em></p>
                                        </div>
                                    </div>

                                    <div class="leader" <?php if(isset($_GET["team"]) && $_GET["team"] == "mt") { echo "hidden"; }?>>
                                        <div class="leader__img">
                                            <img src="./assets/images/board-of-director/marikkar_chief_executive_officer.jpg" alt="Sammy Cotillard">
                                        </div>
                                        <div class="leader__name">
                                            <h2>Mr. M J M N Marikkar</h2>
                                            <p><em>Chief Executive Officer</em></p>
                                        </div>
                                    </div>

                                    <div class="leader" <?php if(isset($_GET["team"]) && $_GET["team"] == "mt") { echo "hidden"; }?>>
                                        <div class="leader__img">
                                            <img src="./assets/images/board-of-director/gamini_sarath.jpg" alt="Todd Fletcher">
                                        </div>
                                        <div class="leader__name">
                                            <h2>Mr. U-Gamini-Sarath CD</h2>
                                            <p><em>Director</em></p>
                                        </div>
                                    </div>

                                    <div class="leader" <?php if(isset($_GET["team"]) && $_GET["team"] == "mt") { echo "hidden"; }?>>
                                        <div class="leader__img">
                                            <img src="./assets/images/board-of-director/arangala_w.jpg" alt="Tiffany Edwards">
                                        </div>
                                        <div class="leader__name">
                                            <h2>Mr. Arangala</h2>
                                            <p><em>Designation</em></p>
                                        </div>
                                    </div>

                                    <div class="leader" <?php if(isset($_GET["team"]) && $_GET["team"] == "mt") { echo "hidden"; }?>>
                                        <div class="leader__img">
                                            <img src="./assets/images/board-of-director/pitigalage_update_photo.jpg" alt="Chelsea Clayton">
                                        </div>
                                        <div class="leader__name">
                                            <h2>Mr. Pitigalage</h2>
                                            <p><em>Deputy Chief Executive Officer</em></p>
                                        </div>
                                    </div>

                                    <div class="leader" <?php if(isset($_GET["team"]) && $_GET["team"] == "mt") { echo "hidden"; }?>>
                                        <div class="leader__img">
                                            <img src="./assets/images/board-of-director/nanayakka_w.jpg" alt="Kevin McCallister">
                                        </div>
                                        <div class="leader__name">
                                            <h2>Mr. Nanayakka</h2>
                                            <p><em>Designation</em></p>
                                        </div>
                                    </div>

                                    <div class="leader mng-team" <?php if(isset($_GET["team"]) && $_GET["team"] == "bod") { echo "hidden"; }?>>
                                        <div class="leader__img">
                                            <img src="./assets/images/management-team/gamini_sarath.jpg" alt="Amanda Maynard">
                                        </div>
                                        <div class="leader__name">
                                            <h2>Mr. U Gamini Sarath Latest Photo</h2>
                                            <p><em>Country Director</em></p>
                                        </div>
                                    </div>

                                    <div class="leader mng-team" <?php if(isset($_GET["team"]) && $_GET["team"] == "bod") { echo "hidden"; }?> >
                                        <div class="leader__img">
                                            <img src="./assets/images/management-team/thamaka_thimbiripola.JPG" alt="Sammy Cotillard">
                                        </div>
                                        <div class="leader__name">
                                            <h2>Mr. Thamaka Thimbiripola</h2>
                                            <p><em>Country Manager</em></p>
                                        </div>
                                    </div>

                                    <div class="leader mng-team" <?php if(isset($_GET["team"]) && $_GET["team"] == "bod") { echo "hidden"; }?> >
                                        <div class="leader__img">
                                            <img src="./assets/images/management-team/mr_sumon.JPG" alt="Todd Fletcher">
                                        </div>
                                        <div class="leader__name">
                                            <h2>Mohammad Sumon</h2>
                                            <p><em>Head Of Finance</em></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                </div>
            </section>
        </div>
    </div>

    <script>
        const modeSwitch = document.querySelector("#darkmode");

        modeSwitch.addEventListener("click", function () {
            document.documentElement.classList.toggle("dark");
        });

        $(document).ready(function() {
            $('li').click(function() {
                alert ("Hello");
            });
        });

    </script>

<?php include('footer.php')?>