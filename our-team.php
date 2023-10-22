<?php $cls = "invester-p about-p"; ?>
<?php include('header.php')?>


    <div class="invester-p about-p">
        <div class="wrap-web">
            <section class="sectors-banner page about-us">
                <div class="container--v text-white">
                    <div class="row">
                        <div class="offset-3 col-6">
                            <div class="page-name">
                                <h2>
                                    <?php
                                        if(isset($_GET["team"]) && $_GET["team"] == "bod")
                                        {
                                            echo "Board Of Directors";
                                        }
                                        elseif (isset($_GET["team"]) && $_GET["team"] == "cp")
                                        {
                                            echo "Corporate Profile";
                                        }
                                        elseif (isset($_GET["team"]) && $_GET["team"] == "rlpcl")
                                        {
                                            echo "RLPCL Profile";
                                        }
                                        elseif (isset($_GET["team"]) && $_GET["team"] == "lbpl")
                                        {
                                            echo "LBPL Profile";
                                        }
                                        elseif (isset($_GET["team"]) && $_GET["team"] == "flpl")
                                        {
                                            echo "FLPL Profile";
                                        }
                                    ?>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="offset-3 col-6">
                            <div class="breadcrumbs">
                                <span>Home /
                                <?php
                                if(isset($_GET["team"]) && $_GET["team"] == "bod")
                                {
                                    echo "Board Of Directors";
                                }
                                elseif (isset($_GET["team"]) && $_GET["team"] == "cp")
                                {
                                    echo "Corporate Profile";
                                }
                                elseif (isset($_GET["team"]) && $_GET["team"] == "co")
                                {
                                    echo "Corporate Office";
                                }
                                elseif (isset($_GET["team"]) && $_GET["team"] == "rlpcl")
                                {
                                    echo "RLPCL Office";
                                }
                                elseif (isset($_GET["team"]) && $_GET["team"] == "lbpl")
                                {
                                    echo "LBPL Office";
                                }
                                elseif (isset($_GET["team"]) && $_GET["team"] == "flpl")
                                {
                                    echo "FLPL Office";
                                }
                                ?>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="wrap-sector-banner-contnet our-team" data-scroll-section="">
                <div class="container--v">
                    <div class="row">

                        <div class="team-wrap">
                            <section class="team">
                                <h1 class="title-font text-center mb-5">
                                    <span>
                                        <?php
                                            if(isset($_GET["team"]) && $_GET["team"] == "bod")
                                            {
                                                echo "Board of Director of  LTLH Group";
                                            }
                                            elseif (isset($_GET["team"]) && $_GET["team"] == "cp")
                                            {
                                                echo "Corporate Profile of Lakdhanavi Ltd., Bangladesh Branch";
                                            }
                                            elseif (isset($_GET["team"]) && $_GET["team"] == "co")
                                            {
                                                echo "Corporate Office of Lakdhanavi Ltd., Bangladesh Branch";
                                            }
                                            elseif (isset($_GET["team"]) && $_GET["team"] == "rlpcl")
                                            {
                                                echo "RLPCL Office of Lakdhanavi Ltd., Bangladesh Branch";
                                            }
                                            elseif (isset($_GET["team"]) && $_GET["team"] == "lbpl")
                                            {
                                                echo "LBPL Office of Lakdhanavi Ltd., Bangladesh Branch";
                                            }
                                            elseif (isset($_GET["team"]) && $_GET["team"] == "flpl")
                                            {
                                                echo "FLPL Office of Lakdhanavi Ltd., Bangladesh Branch";
                                            }
                                        ?>
                                    </span>
                                </h1>
                            </section>

                            <div class="leadership" <?php if(isset($_GET["team"]) && $_GET["team"] == "cp") { echo "hidden"; }?>>

                                <?php if(isset($_GET["team"]) && $_GET["team"] == "bod") { ?>

                                    <div class="leader">
                                        <div class="leader__img" data-toggle="modal" data-target="#exampleModalCenter">
                                            <img src="./assets/images/board-of-director/1111.JPG" alt="Amanda Maynard">
                                        </div>
                                        <div class="leader__name">
                                            <h2>Mr. U. D. Jayawardana</h2>
                                            <p><em>Chairman</em></p>
                                        </div>
                                    </div>

                                    <div class="leader">
                                        <div class="leader__img">
                                            <img src="./assets/images/board-of-director/1111.JPG" alt="Sammy Cotillard">
                                        </div>
                                        <div class="leader__name">
                                            <h2>Mr. M J M N Marikkar</h2>
                                            <p><em>Chief Executive Officer</em></p>
                                        </div>
                                    </div>

                                    <div class="leader">
                                        <div class="leader__img">
                                            <img src="./assets/images/board-of-director/gamini.png" alt="Todd Fletcher">
                                        </div>
                                        <div class="leader__name">
                                            <h2>Mr. U-Gamini-Sarath</h2>
                                            <p><em>Country Director</em></p>
                                        </div>
                                    </div>

                                    <div class="leader">
                                        <div class="leader__img">
                                            <img src="./assets/images/board-of-director/1111.JPG" alt="Tiffany Edwards">
                                        </div>
                                        <div class="leader__name">
                                            <h2>Mr. Arangala</h2>
                                            <p><em>Designation</em></p>
                                        </div>
                                    </div>

                                    <div class="leader">
                                        <div class="leader__img">
                                            <img src="./assets/images/board-of-director/1111.JPG" alt="Chelsea Clayton">
                                        </div>
                                        <div class="leader__name">
                                            <h2>Mr. Pitigalage</h2>
                                            <p><em>Deputy Chief Executive Officer</em></p>
                                        </div>
                                    </div>

                                    <div class="leader">
                                        <div class="leader__img">
                                            <img src="./assets/images/board-of-director/1111.JPG" alt="Kevin McCallister">
                                        </div>
                                        <div class="leader__name">
                                            <h2>Mr. Nanayakka</h2>
                                            <p><em>Designation</em></p>
                                        </div>
                                    </div>

                                <?php } ?>

<!--                                Board Of Directors-->
                                <?php if(isset($_GET["team"]) && $_GET["team"] == "co") { ?>

                                    <div class="leader mng-team">
                                        <div class="leader__img">
                                            <img src="./assets/images/management-team/gamini.png" class="img-fluid" alt="Amanda Maynard">
                                        </div>
                                        <div class="leader__name">
                                            <h2>Mr. U Gamini Sarath</h2>
                                            <p><em>Country Director</em></p>
                                        </div>
                                    </div>

                                    <div class="leader mng-team">
                                        <div class="leader__img">
                                            <img src="./assets/images/management-team/thamaka.png" class="img-fluid" alt="Sammy Cotillard">
                                        </div>
                                        <div class="leader__name">
                                            <h2>Mr. Thamaka Thimbiripola</h2>
                                            <p><em>Country Manager</em></p>
                                        </div>
                                    </div>

                                    <div class="leader mng-team">
                                        <div class="leader__img">
                                            <img src="./assets/images/management-team/moin.png" alt="Todd Fletcher">
                                        </div>
                                        <div class="leader__name">
                                            <h2>Mr. Moin Uddin Ahmed</h2>
                                            <p><em>Manager - Finance & Accounts</em></p>
                                        </div>
                                    </div>

                                    <div class="leader mng-team">
                                        <div class="leader__img">
                                            <img src="./assets/images/management-team/mahmud.png" alt="Todd Fletcher">
                                        </div>
                                        <div class="leader__name">
                                            <h2>Mr. Mahmudur Rahaman</h2>
                                            <p><em>Head of Electrical</em></p>
                                        </div>
                                    </div>

                                    <div class="leader mng-team">
                                        <div class="leader__img">
                                            <img src="./assets/images/management-team/debashish.png" alt="Todd Fletcher">
                                        </div>
                                        <div class="leader__name">
                                            <h2>Mr. Debashis Bhattacharjee</h2>
                                            <p><em>Manager - HR &amp; Administration</em></p>
                                        </div>
                                    </div>

                                    <div class="leader mng-team">
                                        <div class="leader__img">
                                            <img src="./assets/images/management-team/musfiqur.png" alt="Todd Fletcher">
                                        </div>
                                        <div class="leader__name">
                                            <h2>Mr. Musfiqur Rahman</h2>
                                            <p><em>Manager - Com. & Supply Chains</em></p>
                                        </div>
                                    </div>

                                <?php } ?>

                                <?php if(isset($_GET["team"]) && $_GET["team"] == "rlpcl") { ?>
                                    <div class="leader mng-team">
                                        <div class="leader__img">
                                            <img src="./assets/images/management-team/musfiqur.png" alt="Todd Fletcher">
                                        </div>
                                        <div class="leader__name">
                                            <h2>RLPCL</h2>
                                            <p><em>Manager - Com. & Supply Chains</em></p>
                                        </div>
                                    </div>

                                <?php } ?>

                                <?php if(isset($_GET["team"]) && $_GET["team"] == "lbpl") { ?>
                                    <div class="leader mng-team">
                                        <div class="leader__img">
                                            <img src="./assets/images/management-team/musfiqur.png" alt="Todd Fletcher">
                                        </div>
                                        <div class="leader__name">
                                            <h2>LBPL</h2>
                                            <p><em>Manager - Com. & Supply Chains</em></p>
                                        </div>
                                    </div>

                                <?php } ?>

                                <?php if(isset($_GET["team"]) && $_GET["team"] == "flpl") { ?>
                                    <div class="leader mng-team">
                                        <div class="leader__img">
                                            <img src="./assets/images/management-team/musfiqur.png" alt="Todd Fletcher">
                                        </div>
                                        <div class="leader__name">
                                            <h2>FLPL</h2>
                                            <p><em>Manager - Com. & Supply Chains</em></p>
                                        </div>
                                    </div>

                                <?php } ?>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="crp-profile mb-lg-5"  <?php if(isset($_GET["team"]) && $_GET["team"] == "bod" || $_GET["team"] == "mt") { echo "hidden"; }?>>

                <div class="container--v">
                    <div class="row">
                        <div class="offset-2 col-8">
                            <table class="table table-bordered">
                                <tr>
                                    <th>Legal Form</th>
                                    <td>Public limited Liability Company</td>
                                </tr>

                                <tr>
                                    <th>Company Registration Number</th>
                                    <td>Sri Lanka – PB 239, Bangladesh – F 789</td>
                                </tr>

                                <tr>
                                    <th>Headquarters Office</th>
                                    <td>67, Park Street, Colombo 02, Sri Lanka</td>
                                </tr>

                                <tr>
                                    <th>Bangladesh Branch</th>
                                    <td>Level 3, Arezd Chamber, Bir Uttam A K Khandakar Road, Mohakhali C/A, Dhaka, Bangladesh </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="container--v">

<!--                    <div class="row">-->
<!--                        <div class="offset-2 col-8">-->
<!--                            <h2 class="title-font text-center mt-4 mb-3">-->
<!--                                <span>Our Clients are Everything</span>-->
<!--                            </h2>-->
<!--                            <p class="sub-texts text-center">Every project is effectively an investment in our company. Our goal is to exceed your expectations.</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="row mt-4 mb-lg-5">-->
<!--                        <div class="offset-1 col-2">-->
<!--                            <div class="client-img">-->
<!--                                <img src="./assets/images/clients/bpdb.png" alt="">-->
<!--                            </div>-->
<!--                            <div class="com-name">-->
<!--                                <p>Bangladesh Power Development Board</p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="col-2">-->
<!--                            <div class="client-img">-->
<!--                                <img src="./assets/images/clients/orion_group.png" alt="">-->
<!--                            </div>-->
<!--                            <div class="com-name">-->
<!--                                <p>Orion Group</p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="col-2">-->
<!--                            <div class="client-img">-->
<!--                                <img src="./assets/images/clients/xindex.png" alt="">-->
<!--                            </div>-->
<!--                            <div class="com-name">-->
<!--                                <p>Index Group</p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="col-2">-->
<!--                            <div class="client-img">-->
<!--                                <img src="./assets/images/clients/acorn.png" alt="">-->
<!--                            </div>-->
<!--                            <div class="com-name">-->
<!--                                <p>Acorn Insfrastructure Services</p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="col-2">-->
<!--                            <div class="client-img">-->
<!--                                <img src="./assets/images/clients/doreen.jpg" alt="">-->
<!--                            </div>-->
<!--                            <div class="com-name">-->
<!--                                <p>Doreen Power</p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->

                    <div class="offset-2 col-8 mt-lg-5 mb-3">
                        <h2 class="title-font text-center">
                            <span>Bankers</span>
                        </h2>
                    </div>

                    <div class="row mb-4">
                        <div class="offset-1 col-10">
                            <div class="card-deck">
                                <div class="card">
                                    <div class="bank-logo">
                                        <img class="card-img-top" src="./assets/images/bank/standardchartered.webp">
                                    </div>
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Standard Chartered Bank</h5>
<!--                                        <p class="card-text">-->
<!--                                            Head Office, City Bank Centre-->
<!--                                            136, Gulshan Avenue-->
<!--                                            Gulshan-2, Dhaka 1212-->
<!--                                        </p>-->
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="bank-logo">
                                        <img class="card-img-top" src="./assets/images/bank/ebl.jpg">
                                    </div>
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Eastern Bank Limited</h5>
<!--                                        <p class="card-text">-->
<!--                                            100 Gulshan Avenue-->
<!--                                            Dhaka, Bangladesh-->
<!--                                        </p>-->
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="bank-logo">
                                        <img class="card-img-top" src="./assets/images/bank/com-bank.jpg">
                                    </div>
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Commercial Bank of Ceylon PLC</h5>
<!--                                        <p class="card-text">-->
<!--                                            Hadi Mansion, 2 Dilkusha C/A,-->
<!--                                            Motijheel, Dhaka-1000-->
<!--                                        </p>-->
                                    </div>
                                </div>

                            </div>
                        </div>
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
<!--                                        <p class="card-text">-->
<!--                                            Head Office, City Bank Centre-->
<!--                                            136, Gulshan Avenue-->
<!--                                            Gulshan-2, Dhaka 1212-->
<!--                                        </p>-->
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="bank-logo">
                                        <img class="card-img-top" src="./assets/images/bank/prime-bank.jpg">
                                    </div>
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Prime Bank Limited</h5>
<!--                                        <p class="card-text">-->
<!--                                            100 Gulshan Avenue-->
<!--                                            Dhaka, Bangladesh-->
<!--                                        </p>-->
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="bank-logo">
                                        <img class="card-img-top" src="./assets/images/bank/janata-bank.jpg">
                                    </div>
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Janata Bank Ltd.</h5>
<!--                                        <p class="card-text">-->
<!--                                            Hadi Mansion, 2 Dilkusha C/A,-->
<!--                                            Motijheel, Dhaka-1000-->
<!--                                        </p>-->
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </section>


        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        <strong>Mr.  Upali Dayaratna Jayawardana</strong><br>
                        Chairman, Executive Director <br>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>

                        Appointed to the Board in May 1996
                        Mr. Jayawardana played an integral role in the success of LTL over the years. He began his career at Sri Lanka’s state-owned power utility i.e. CEB as an Electrical Engineer, attached to its Transformer Repair section. Sri Lanka used to import all its transformer requirements at that time and whilst working in the Transformer Repair section, he conceptualized for Sri Lanka to have its own transformer brand and transformer manufacturing facility. This led to a series of initiatives by him within CEB in late 70s and early 80s, which finally culminated in the incorporation of Lanka Transformers Ltd (now LTL) in 1980.
                        Mr. Jayawardana joined the newly incorporated company, Lanka Transformers Ltd (now LTL), as its Transformer Design Engineer. After being appointed General Manager of LTL in 1988, he also spearheaded LTL’s diversification into the galvanizing industry and power generation business, whilst also expanding the target markets of the Group by venturing into overseas markets. After steering the Company for 40 years to make it one of the largest in Sri Lanka, in 2020 he relinquished his responsibilities as Chief Executive Officer but continues to be an active member of the Board of Directors of the Company.
                        Mr. Jayawardana, one of the most respected senior engineers in Sri Lanka today, holds a Bachelor’s Degree in Electrical Engineering from the University of Moratuwa. He is a Chartered Engineer and a Fellow of the Institute of Engineers Sri Lanka and Institute of Engineering and Technology (IET) London.

                    </p>
                </div>
<!--                <div class="modal-footer">-->
<!--                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
<!--                    <button type="button" class="btn btn-primary">Save changes</button>-->
<!--                </div>-->
            </div>
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