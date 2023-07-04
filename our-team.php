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

                                <h2 class="title-font">
                                    <?php
                                        if(isset($_GET["team"]) && $_GET["team"] == "bod")
                                        {
                                            echo "Board Of Directors";
                                        }
                                        elseif (isset($_GET["team"]) && $_GET["team"] == "mt")
                                        {
                                            echo "Management Team";
                                        }
                                        elseif (isset($_GET["team"]) && $_GET["team"] == "cp")
                                        {
                                            echo "Corporate Profile";
                                        }
                                    ?>
                                </h2>
                            </div>

                            <p class="sub-texts">
                                <?php
                                if(isset($_GET["team"]) && $_GET["team"] == "bod")
                                {
                                    echo "
                                        No Director or a person nominated to become a Director of the Company has been involved in any of the following:
                                • A petition under any bankruptcy laws filed against such person or any partnership in which he/she was a partner or any corporation of which he was an executive officer; or
                                • Conviction for fraud, misappropriation or breach of trust or any other similar offence which the CSE considers a disqualification.
                                    ";
                                }
                                elseif (isset($_GET["team"]) && $_GET["team"] == "mt")
                                {
                                    echo "";
                                }
                                elseif (isset($_GET["team"]) && $_GET["team"] == "cp")
                                {
                                    echo "Lakdhanavi is the largest independent power producer within the power sector of Sri Lanka and can lay claim to a host of other impressive achievements. A subsidiary of the prestigious LTL Holdings, Lakdhanavi is a dynamic player in the manufacturing, construction and service industry which spans the electrical, mechanical and civil engineering fields in Sri Lanka. The company is renowned as the Engineering, Procurement and Construction contractors (EPC) of major power projects, including Independent Power Producer (IPP) Power Generating Stations and Emergency Power Station";
                                }
                                ?>

                                </p>

                        </div>
                    </div>

                    <div class="container--v">
                        <div class="row">

                            <div class="team-wrap">
                                <section class="team">
                                    <h1 class="team-title">
                                        <?php
                                        if(isset($_GET["team"]) && $_GET["team"] == "bod")
                                        {
                                            echo "Board of Director of LTLH Group";
                                        }
                                        elseif (isset($_GET["team"]) && $_GET["team"] == "mt")
                                        {
                                            echo "Management Team of Lakdhanavi Ltd., Bangladesh Branch";
                                        }
                                        elseif (isset($_GET["team"]) && $_GET["team"] == "cp")
                                        {
                                            echo "Corporate Profile of Lakdhanavi Ltd., Bangladesh Branch";
                                        }
                                        ?>
                                    </h1>
                                </section>

                                <div class="leadership" <?php if(isset($_GET["team"]) && $_GET["team"] == "cp") { echo "hidden"; }?>>
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
                                            <h2>Mr. U Gamini Sarath</h2>
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
                                            <h2>Mr. Mohammad Sumon</h2>
                                            <p><em>Head Of Finance</em></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="crp-profile mb-lg-5"  <?php if(isset($_GET["team"]) && $_GET["team"] == "bod" || $_GET["team"] == "mt") { echo "hidden"; }?>>
                <div class="container--v">
                    <div class="row">
                        <div class="col-3">
                            <div class="info">
                                <div class="card">
                                    <div class="card-header">
                                        <h6 class="">Corporate Office</h6>
                                    </div>
                                    <div class="card-body">
                                        <p class="title-txt text-dark text-center">
                                            Arzed Chamber, 13 Mohakhali C/A,
                                            3rd floor, Dhaka-1212, Bangladesh
                                            Phone: +88 02 58815581,
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="info">
                                <div class="card">
                                    <div class="card-header">
                                        <h6 class="">Legal Status</h6>
                                    </div>
                                    <div class="card-body">
                                        <p class="title-txt text-dark text-center">
                                            Lakdhanavi Limited was incorporated on 04 July 2017 in Bangladesh as a public limited liability company under the Companies Act 1994.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="info">
                                <div class="card">
                                    <div class="card-header">
                                        <h6 class="">Auditor</h6>
                                    </div>
                                    <div class="card-body">
                                        <p class="title-txt text-dark text-center">
                                            ACNABIN
                                            Chartered Accountants, BDBL Bhaban (Level – 13 & 14)
                                            12, Kawran Bazar Commercial Area
                                            Dhaka – 1215, Bangladesh.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="info">
                                <div class="card">
                                    <div class="card-header">
                                        <h6 class="">Company Secretary</h6>
                                    </div>
                                    <div class="card-body">
                                        <p class="title-txt text-dark text-center">
                                            B&M Legal
                                            Advocates and Barristers
                                            37/A, Sahara Centre, 11th floor, Kakrail, Dhaka.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="offset-2 col-8">
                            <h2 class="title-font text-center mt-4 mb-3">
                                <span>Our Clients are Everything</span>
                            </h2>
                            <p class="sub-texts text-center">Every project is effectively an investment in our company. Our goal is to exceed your expectations.</p>
                        </div>
                    </div>
                    <div class="row mt-4 mb-lg-5">
                        <div class="offset-1 col-2">
                            <div class="client-img">
                                <img src="./assets/images/clients/bpdb.png" alt="">
                            </div>
                            <div class="com-name">
                                <p>Bangladesh Power Development Board</p>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="client-img">
                                <img src="./assets/images/clients/orion_group.png" alt="">
                            </div>
                            <div class="com-name">
                                <p>Orion Group</p>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="client-img">
                                <img src="./assets/images/clients/xindex.png" alt="">
                            </div>
                            <div class="com-name">
                                <p>Index Group</p>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="client-img">
                                <img src="./assets/images/clients/acorn.png" alt="">
                            </div>
                            <div class="com-name">
                                <p>Acorn Insfrastructure Services</p>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="client-img">
                                <img src="./assets/images/clients/doreen.jpg" alt="">
                            </div>
                            <div class="com-name">
                                <p>Doreen Power</p>
                            </div>
                        </div>
                    </div>

                    <div class="offset-2 col-8 mt-lg-5 mb-3">
                        <h2 class="title-font text-center">
                            <span>Bankers</span>
                        </h2>
                    </div>

                    <div class="row">
                        <div class="offset-1 col-10">
                            <div class="card-deck">
                                <div class="card">
                                    <div class="bank-logo">
                                        <img class="card-img-top" src="./assets/images/bank/city-bank.jpg">
                                    </div>
                                    <div class="card-body text-center">
                                        <h5 class="card-title">The City Bank Limited</h5>
                                        <p class="card-text">
                                            Head Office, City Bank Centre
                                            136, Gulshan Avenue
                                            Gulshan-2, Dhaka 1212
                                        </p>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="bank-logo">
                                        <img class="card-img-top" src="./assets/images/bank/ebl.jpg">
                                    </div>
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Eastern Bank Limited</h5>
                                        <p class="card-text">
                                            100 Gulshan Avenue
                                            Dhaka, Bangladesh
                                        </p>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="bank-logo">
                                        <img class="card-img-top" src="./assets/images/bank/com-bank.jpg">
                                    </div>
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Commercial Bank of Ceylon PLC</h5>
                                        <p class="card-text">
                                            Hadi Mansion, 2 Dilkusha C/A,
                                            Motijheel, Dhaka-1000
                                        </p>
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