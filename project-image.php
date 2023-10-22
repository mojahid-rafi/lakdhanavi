<style>
    #slider {
        position: relative;
        overflow: hidden;
        margin: 20px auto 0 auto;
        border-radius: 4px;
    }

    #slider ul {
        position: relative;
        margin: 0;
        padding: 0;
        height: 400px;
        list-style: none;
    }

    #slider ul li {
        position: relative;
        display: block;
        float: left;
        margin: 0;
        padding: 0;
        width: 600px;
        height: 450px;
        background: #ccc;
        text-align: center;
        line-height: 450px;
    }

    a.control_prev, a.control_next {
        position: absolute;
        top: 40%;
        z-index: 999;
        display: block;
        padding: 4% 3%;
        width: auto;
        height: auto;
        background: #2a2a2a;
        color: #fff;
        text-decoration: none;
        font-weight: 600;
        font-size: 18px;
        opacity: 0.8;
        cursor: pointer;
    }

    a.control_prev:hover, a.control_next:hover {
        opacity: 1;
        -webkit-transition: all 0.2s ease;
    }

    a.control_prev {
        border-radius: 0 2px 2px 0;
    }

    a.control_next {
        right: 0;
        border-radius: 2px 0 0 2px;
    }
</style>

<div id="slider">
    <a href="javascript:void()" class="control_next"><img src="./assets/images/utilities/right-arrow.png" alt=""></a>
    <a href="javascript:void()" class="control_prev"><img src="./assets/images/utilities/left-arrow.png" alt=""></a>
    <ul>
        <li><img src="./assets/images/o-and-m/rlpclbd.jpg" class="img-fluid" alt=""></li>
        <li><img src="./assets/images/o-and-m/lbpl.jpg" class="img-fluid" alt=""></li>
        <li><img src="./assets/images/o-and-m/epc-project-1.jpg" class="img-fluid" alt=""></li>
        <li><img src="./assets/images/o-and-m/epc-project-3.jpg" class="img-fluid" alt=""></li>
    </ul>
</div>