<?php include __DIR__ . '/parts/config.php'; ?>

<?php
$_gdata = [
    // 網頁名稱
    'title' => '灣廟 | 探索', 
    // 頁面私有 css
    'styles' => '<link rel="stylesheet" href="'.WEB_ROOT.'/css/navbar1.css">',
    //頁面私有 scripts
    'scripts' => '<script src="/js/result.js"></script>', 
];

?>
<?php include __DIR__ . '/parts/ourhead.php'; ?>
    <style>
        body {
            font-family: 'Faustina', serif;
            background-image: url(<?= WEB_ROOT ?>/img/bcc.png);
            position: relative;
        }

        h2 {
            font-size: 35px;
            font-weight: bold;
        }

        h3 {
            font-size: 32px;
            font-weight: normal;
        }

        h4 {
            font-size: 24px;
            font-weight: normal;
        }

        .discover_search p {
            /* 字級可自訂 */
            font-size: 20px;
            font-weight: normal;
        }

        button {
            padding: 12px 18px;
            background-color: #cc543a;
            color: white;
            border-radius: 30px;
            border: none;
        }

        button:focus {
            outline: 0;
            box-shadow: 0 0 0 1pt rgb(77, 77, 77);
        }


        footer {
            width: 100%;
            height: 100px;
            background-color: #cc543a;
            color: white;
            letter-spacing: 3px;
            position: absolute;
            bottom:0;
            justify-content: center;
            align-items: center;
        }

        .discover_head {
            height: 100vh;
            padding: 0;
            background-color: black;
            margin: 0;
            object-fit: cover;
            position: relative;
        }

        #bgvid {
            object-fit: cover;
            width: 100%;
            height: 100vh;
            position: relative;
            top: 0;
            left: 0;
            opacity: 0.7;
        }

        .discover_head h2 {
            color: white;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            letter-spacing: 10px;
            animation: tracking-in-contract 3s cubic-bezier(0.215, 0.610, 0.355, 1.000) both;
        }

        .arrows {
            width: 60px;
            height: 72px;
            position: absolute;
            left: 50%;
            margin-left: -30px;
            bottom: 20px;
        }

        .arrows path {
            stroke: white;
            fill: transparent;
            stroke-width: 2px;
            animation: arrow 2s infinite;
            -webkit-animation: arrow 2s infinite;
        }

        @keyframes arrow {
            0% {
                opacity: 0
            }

            40% {
                opacity: 1
            }

            80% {
                opacity: 0
            }

            100% {
                opacity: 0
            }
        }

        @-webkit-keyframes arrow

        /*Safari and Chrome*/
            {
            0% {
                opacity: 0
            }

            40% {
                opacity: 1
            }

            80% {
                opacity: 0
            }

            100% {
                opacity: 0
            }
        }

        .arrows path.a1 {
            animation-delay: -1s;
            -webkit-animation-delay: -1s;
            /* Safari 和 Chrome */
        }

        .arrows path.a2 {
            animation-delay: -0.5s;
            -webkit-animation-delay: -0.5s;
            /* Safari 和 Chrome */
        }

        .arrows path.a3 {
            animation-delay: 0s;
            -webkit-animation-delay: 0s;
            /* Safari 和 Chrome */
        }

        @keyframes tracking-in-contract {
            0% {
                letter-spacing: 1em;
                opacity: 0;
            }

            40% {
                opacity: 0.6;
            }

            100% {
                letter-spacing: 10px;
                opacity: 1;
            }
        }


        img {
            width: 100%;
        }

        .discover_box {
            justify-content: space-between;
            padding: 0 5%;
            display: flex;
            flex-wrap: wrap;
            height: 110%;
        }

        .discover_box h3,
        .discover_story h3,
        .infobox h4 {
            color: #cc543a;
            letter-spacing: 5px;
            font-weight: bold;
        }

        .discover_search {
            position: relative;
            padding: 0;
            overflow: hidden;
        }

        .discover_footprint {
            position: absolute;
            top: 0;
            right: 0px;
            z-index: -2;
        }

        .infobox {
            width: 35vw;
            height: 80vh;
            background-color: white;
            padding: 0;
            position: absolute;
            border-radius: 10px;
            z-index: 3;
            box-shadow: 3px 3px 5px rgb(80, 80, 80);
            transition: 0.5s;
        }

        .infotext {
            height: 50%;
            padding: 50px 80px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-content: space-in;
            position: relative;
        }

        .banner {
            height: 50%;
        }

        .banner img {
            height: 100%;
            object-fit: cover;
            border-radius: 10px 10px 0 0;
        }

        .close {
            position: absolute;
            right: 5%;
            color: black;
        }

        .deco {
            position: absolute;
            bottom: 0;
            right: 0;
            transform: scaleX(-1);
            width: 50%;
            filter: brightness(70%);
            z-index: -1;
        }

        .discover_box .inputs {
            margin: 40px 0;
            justify-content: space-between;
        }

        .hot_feature {
            padding: 5px;
            position: relative;
        }

        .tempname {
            position: absolute;
            color: white;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .discover_story {
            background-image: url(<?= WEB_ROOT ?>/img/bcc2.png);
            padding: 0;
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            z-index: 0;
            flex-shrink: 0;
        }

        .leafshadow {
            width: 45%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            object-fit: cover;
            z-index: 3;
            opacity: 0.6;
            animation: wind 7s cubic-bezier(0.215, 0.610, 0.355, 1.000) both infinite;
        }

        .result_list {
            text-decoration: none;
            list-style: none;
            background-color: white;
            border: 1px solid gray;
            padding: 3px 5px;
            margin: 5px;
            height: fit-content;

        }

        @keyframes wind {
            0% {
                opacity: 0.4;
            }

            40% {
                opacity: 0.6;
            }

            100% {
                opacity: 0.4;
            }
        }

        .discover_card,
        .discover_card_m {
            display: none;
            position: absolute;
            /* transform: translate(-50%, -50%); */
            z-index: 101
        }

        .intro {
            display: flex;
            justify-content: space-around;
            margin: 0 auto;
            flex-wrap: wrap;
            z-index: 2;
            padding: 30px;
        }

        .text {
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
            z-index: 1;
        }

        .text p {
            font-size: 18px;
            padding-top: 30px;
        }

        .location {
            position: absolute;
            bottom: -8%;
            left: 0;
            color: rgb(77, 77, 77);
            filter: drop-shadow(3px -2px rgba(233, 233, 233, 0.884));
            font-size: 50px;
            letter-spacing: 5px;
        }

        .pic {
            z-index: 1;
            width: 100%;
            object-fit: contain;
        }

        .discover_search input,
        .discover_search select {
            max-width: 33%;
            border: none;
            border-bottom: 1px solid gray;
            margin-right: 20px;
            background-color: transparent;
        }



        .taiwanMap {
            position: relative;
        }

        .discover_map .pin01,
        .discover_map .pin02,
        .discover_map .pin03,
        .discover_map .pin04,
        .discover_map .pin05,
        .discover_map .pin06 {
            position: absolute;
            font-size: 40px;
            /* color: #414141; */
        }

        .discover_map .pin01 {
            left: 50%;
            top: 10%;
        }

        .discover_map .pin02 {
            left: 65%;
            top: 5%;
        }

        .discover_map .pin03 {
            left: 35%;
            top: 30%;
        }

        .discover_map .pin04 {
            left: 25%;
            top: 48%;
        }

        .discover_map .pin05 {
            left: 20%;
            top: 60%;
        }

        .discover_map .pin06 {
            left: 55%;
            top: 57%;
        }

        .showCard {
            display: block;
        }

        #cover {
            background: #000;
            position: absolute;
            left: 0px;
            top: 0px;
            width: 100%;
            opacity: 0.7;
            display: none;
            z-index: 100
        }

        @media screen and (min-width: 1000px) {

            .infobox hr,
            .narrowSearch,
            .prevPic,
            .nextPic,
            .maptitle {
                display: none;
            }

            .infobox {
                top: 115%;
                left: -55vw;
            }

            .infoboxMove {
                left: 10%;
            }

            .discover_search {
                height: 100vh;
                transition: 0.5s;
            }

            .discover_card {
                top: 1%;
                left: 18%;
            }

            .discover_story {
                height: 100vh;
            }

            .discover_box {
                margin: 0 auto;
                transform: translateY(-140px);
            }

            .discover_hot {
                flex-wrap: wrap;
                height: 40%;
                overflow: scroll;
            }

            .tempname {
                visibility: hidden;
            }

            .discover_list {
                display: flex;
                flex-direction: column;
                justify-content: center;
            }

            .discover_map {
                padding: 0 7%;
                display: flex;
                align-items: center;
            }

            .taiwanMap {
                width: 100%;
            }


            .vertical {
                writing-mode: vertical-lr;
                text-align: center;
                padding: 0;
                margin: 0;
                letter-spacing: 3px;
                z-index: 1;
            }


            .intro {
                display: flex;
                justify-content: space-around;
                margin: 0 auto;
                flex-wrap: wrap;
                z-index: 2;
                padding: 30px;
                background-color: rgb(255, 255, 255);
                border: 50px solid rgb(255, 255, 255);
                /* box-shadow: 3px 3px 8px rgb(163, 163, 163); */
                position: relative;
            }

            .intro::before {
                content: "";
                display: block;
                width: 115%;
                height: 110%;
                z-index: -1;
                background-color: rgb(216, 216, 216);
                position: absolute;
                top: -5%;
                transform: rotate(1deg);
                /* box-shadow: 3px 3px 8px rgb(163, 163, 163); */
            }

            .intro::after {
                content: "";
                display: block;
                width: 115%;
                height: 110%;
                z-index: -1;
                background-color: rgb(255, 248, 242);
                position: absolute;
                top: -5%;
                transform: rotate(-1deg);
                /* box-shadow: 3px 3px 8px rgb(163, 163, 163); */
            }

            .closeCard {
                position: absolute;
                right: 0;
                top: -3%;
                font-size: 30px;
                color: #4b4b4bbe;
            }

            .bg {
                width: 80%;
                position: absolute;
                bottom: -3%;
                right: -5%;
            }
        }

        @media screen and (max-width: 1000px) {
            .infobox {
                width: 100%;
                height: 20vh;
                position: absolute;
                left: 0;
                bottom: -500vw;
                z-index: -1;
                box-shadow: none;
                display: flex;
            }

            .infobox hr {
                width: 50px;
                height: 3px;
                color: #d8d8d8;
                background-color: #dfdfdf;
                position: absolute;
                left: 50%;
                top: -15px;
                transform: translateX(-25px);

            }

            .infoboxMove {
                bottom: -160%;
                z-index: 1;
            }

            .phone,
            .address,
            .close,
            .deco,
            .wideSearch,
            .discover_card,
            .vertical {
                display: none;
            }

            .discover_search button {
                font-size: 18px;
            }

            .banner {
                width: 50%;
                height: 100%;
            }

            .banner img {
                border-radius: 10px 0 0 10px;
            }

            .infotext {
                width: 50%;
                height: 100%;
                padding: 30px;
                justify-content: space-between;
            }

            .infotext h4 {
                font-size: 20px;
                letter-spacing: 1px;
            }

            .infotext p {
                font-size: 18px;
            }

            .discover_footprint {
                width: 100%;
            }

            .maptitle {
                text-align: center;
                margin: 40px 0 50px 0;
                font-weight: bold;
                font-size: 24px;
            }

            .taiwanMap {
                margin: 60px 0px 40px 0px;

            }

            .discover_card_m {
                height: 100vh;
                bottom: 0;
                left: 0;
                background-image: url(<?= WEB_ROOT ?>/img/bcc2.png);
                padding: 50px 0;
                border-radius: 20px;
                /* box-shadow: 3px 0 3px 3px rgb(116, 116, 116); */
            }

            .discover_card_m h3,
            .discover_card_m p {
                margin: 0;
            }

            .discover_card_m p {
                padding: 10px 0;
            }

            .closeCard {
                position: absolute;
                right: 6%;
                top: -4%;
            }

            .discover_box {
                justify-content: center;
                margin-bottom:100px;
            }

            .intro {
                padding: 0px;
            }

            .discover_hot {
                width: 100%;
                height: 300px;
                position: relative;
                overflow: scroll;
                flex-wrap: wrap;
                align-content: baseline
            }

            .hot_feature {
                position: absolute;
                transition: 0.8s;
            }

            .hot_feature img {
                height: 100%;
                width: 100%;
                object-fit: contain;
                filter: brightness(70%);
            }

            .prevPic {
                position: absolute;
                width: 30px;
                height: 50px;
                padding: 10px 0;
                left: 0;
                top: 35%;
                font-size: 30px;
                background-color: rgba(255, 255, 255, 0.877);
            }

            .nextPic {
                position: absolute;
                width: 30px;
                height: 50px;
                padding: 10px 0;
                text-align: end;
                right: 0;
                top: 35%;
                font-size: 30px;
                background-color: rgba(255, 255, 255, 0.877);
            }

            .discover_list h3 {
                font-size: 24px;
                letter-spacing: 3px;
            }

            .text h3 {
                padding: 10px 0;
            }

            .tag {
                display: none;
            }

            .bg {
                width: 150%;
                position: absolute;
                bottom: 3%;
                right: 5%;
                filter: contrast(100%) grayscale(100%);
            }
        }

        .darken {
            filter: brightness(60%);
        }

        .show {
            opacity: 1;
            visibility: visible;
        }
    </style>

    <div class="discover_head row col-12">
        <video playsinline autoplay muted loop poster="/img/discover_catch.png" id="bgvid">
            <source src="<?= WEB_ROOT ?>/img/discover_catch.png" type="video/webm">
            <source src="<?= WEB_ROOT ?>/img/explore_banner_video.mp4" type="video/mp4">
        </video>
        <div>
            <h2>EXPLORE | 探索</h2>
        </div>
        <svg class="arrows">
            <path class="a1" d="M0 0 L30 32 L60 0"></path>
            <path class="a2" d="M0 20 L30 52 L60 20"></path>
            <path class="a3" d="M0 40 L30 72 L60 40"></path>
        </svg>
    </div>
    <div id="cover">
    </div>
    <?php include __DIR__ . '/parts/navbar1.php'; ?>
    <section class="discover_search container col-lg-12">
        <img class="discover_footprint" src="<?= WEB_ROOT ?>/img/footprints.svg">
        <div class="discover_box col-lg-10">
            <div class="discover_list col-lg-5 col-12">
                <h3>What are you looking for?</h3>
                <h3>尋找神之所在</h3>
                <form class="inputs" style="position: relative;">
                    <input type="search" id="keyword" name="keyword" placeholder="搜尋廟宇">
                    <select name="area">
                        <option value="all">全台</option>
                        <option value="north">北</option>
                        <option value="center">中</option>
                        <option value="south">南</option>
                        <option value="east">東</option>
                        <option value="island">離島</option>
                    </select>
                    <!-- <input id="searchTemp" class="wideSearch" type="button"
                        style="border: 1px solid rgb(80, 80, 80); border-radius: 10px;" value="搜尋"> -->
                    <!-- <input class="narrowSearch" type="image"
                        style="border-bottom:none; width: 30px; position:absolute; bottom: 0; margin: 0;" value="搜尋"
                        src="/SVG/search-solid.svg" alt="Submit Form" /> -->

                </form>
                <h3 id="secondHead">HOT</h3>
                <div id='discover_hot' class="discover_hot d-flex result">
                    <div class="hot_feature col-lg-6">
                        <img src="<?= WEB_ROOT ?>/img/hotTemple (1).jpg">
                        <p class="tempname">清水祖師廟1</p>
                    </div>
                    <div class="hot_feature col-lg-6">
                        <img src="<?= WEB_ROOT ?>/img/hotTemple (2).jpg">
                        <p class="tempname">清水祖師廟2</p>
                    </div>
                    <div class="hot_feature col-lg-6">
                        <img src="<?= WEB_ROOT ?>/img/hotTemple (3).jpg">
                        <p class="tempname">清水祖師廟3</p>
                    </div>
                    <div class="hot_feature col-lg-6">
                        <img src="<?= WEB_ROOT ?>/img/hotTemple (4).jpg">
                        <p class="tempname">清水祖師廟4</p>
                    </div>
                    <div class="hot_feature col-lg-6">
                        <img src="<?= WEB_ROOT ?>/img/hotTemple (1).jpg">
                        <p class="tempname">清水祖師廟5</p>
                    </div>
                    <div class="hot_feature col-lg-6">
                        <img src="<?= WEB_ROOT ?>/img/hotTemple (2).jpg">
                        <p class="tempname">清水祖師廟6</p>
                    </div>
                    <div class="hot_feature col-lg-6">
                        <img src="<?= WEB_ROOT ?>/img/hotTemple (3).jpg">
                        <p class="tempname">清水祖師廟7</p>
                    </div>
                    <div class="hot_feature col-lg-6">
                        <img src="<?= WEB_ROOT ?>/img/hotTemple (4).jpg">
                        <p class="tempname">清水祖師廟8</p>
                    </div>
                    <i class="fas fa-angle-left prevPic"></i>
                    <i class="fas fa-angle-right nextPic"></i>
                </div>
            </div>
            <div class="col-lg-5 col-10 discover_map">
                <h4 class="maptitle">你今天想去哪?</h4>
                <div class="taiwanMap">
                    <img src="<?= WEB_ROOT ?>/img/discover_map_taiwan.svg">
                    <i class="fas fa-map-marker-alt pin01"></i>
                    <i class="fas fa-map-marker-alt pin02"></i>
                    <i class="fas fa-map-marker-alt pin03"></i>
                    <i class="fas fa-map-marker-alt pin04"></i>
                    <i class="fas fa-map-marker-alt pin05"></i>
                    <i class="fas fa-map-marker-alt pin06"></i>
                </div>
            </div>
        </div>
        <div class="discover_card col-lg-8 col-12">
            <div class="intro col-lg-10">
                <i class="closeCard far fa-times-circle"></i>
                <div class="pic col-lg-5 col-10 mb-4">
                    <img src="<?= WEB_ROOT ?>/img/explore_storyImg.jpg">
                    <h2 class="location">NEW<br> TAIPEI<br> CITY</h2>
                </div>
                <p class="vertical col-1">It to make a type specimen book.</p>
                <div class="text col-lg-5 col-10">
                    <h3>Sansia Tzushr Temple</h3>
                    <h3 id='www'>清水祖師廟</h3>
                    <p>他話路聲回比；後看西工馬什領過值圖戰選乎到洲校言</p>
                    <p>
                        的難了老的地一怕斷氣夫所而料部機黨多大登引爸就果？太快覺天代來父處強都最業資不包力突？了文中手、是當傳地去市女源考用業明製太院息調其如本裡以商合屋許先界得養起？車種這區學流，東學錢相團沒的都類會者天利他，車種這區車種這區車種這區車種這區今再一調！阿院和的到。車有的告這這母火
                    </p>
                    <button>READ MORE</button>
                </div>
                <img class="bg" src="<?= WEB_ROOT ?>/img/sent.png">
            </div>
        </div>

    </section>

    <div class="discover_card_m col-lg-8 col-12">
        <div class="intro col-lg-10">
            <i class="closeCard far fa-times-circle"></i>
            <div class="pic col-lg-5 col-10 mb-4">
                <img src="<?= WEB_ROOT ?>/img/dark20.jpg">
                <h2 class="location">NEW<br> TAIPEI<br> CITY</h2>
            </div>
            <p class="vertical col-1">It to make a type specimen book.</p>
            <div class="text col-lg-5 col-10">
                <h3>Sansia Tzushr Temple</h3>
                <h3 id='www'>清水祖師廟</h3>
                <p>的難了老的地一怕斷氣夫所而料部機黨多大登引爸就果？太快覺天代來父處強都最業資不包力突？了文中手</p>
                <button>READ MORE</button>
            </div>
            <img class="bg" src="<?= WEB_ROOT ?>/img/sent.png">
        </div>
    </div>

    <?php include __DIR__ . '/parts/ourscripts.php'; ?>

    <script>
        $('.arrows').click(function () {
            var pageBelow = document.getElementById("nav_index_navbar_com").offsetTop;
            var pageBelow_m = document.getElementById("nav_burgurBar").offsetTop;
            if ($(window).width() > 1000) {
                window.scrollTo({
                    top: (pageBelow),
                    behavior: "smooth"
                })
            } else {
                window.scrollTo({
                    top: (pageBelow_m),
                    behavior: "smooth"
                })
            };

        })
        $(document).on({
            mouseenter: function () {
                $(this).children('img').addClass('darken')
                $(this).children('p').addClass('show');
            },
            mouseleave: function () {
                $(this).children('img').removeClass('darken')
                $(this).children('p').removeClass('show');
            },
            click: function () {
                showWindow()
            }
        }, '.hot_feature')

        function showWindow() {
            if ($(window).width() > 1000) {
                $('.discover_card').addClass('animate__animated animate__fadeInUp showCard');
                $('.discover_card').removeClass('animate__fadeOutDown');
            } else {
                $('.discover_card_m').addClass('animate__animated animate__fadeInLeft showCard');
                $('.discover_card_m').removeClass('animate__fadeOutLeft');
            }
            $('#cover').css('display', 'block');
            $('#cover').css('height', document.body.clientHeight + 'px');
        }
        // 關閉彈窗
        function closeWindow() {
            $('.discover_card').addClass('animate__fadeOutDown');
            $('.discover_card_m').addClass('animate__fadeOutLeft');
            $('.discover_card').removeClass('animate__fadeInUp');
            $('.discover_card_m').removeClass('animate__fadeInRight');
            // $('.discover_card').hide();  //隱藏彈窗
            // $('.discover_card_m').hide();  //隱藏彈窗
            $('#cover').css('display', 'none');   //顯示遮罩層
        }

        $('.fa-map-marker-alt').click(function () {
            $(this).css('color', '#FBD100');
            $(this).siblings().css('color', '#414141');
            // $('.infobox').addClass('infoboxMove').one('click', function () {
            //     $('.infobox').removeClass('infoboxMove');
            // })
            showWindow()
        })

        $('.closeCard').click(function () {
            closeWindow()
        })
        $('#cover').click(function () {
            closeWindow()
        })


        // 書籤
        $('.tag div').click(function () {
            $(this).addClass('tagout');
            $(this).text('tagout')
            $(this).siblings().removeClass('tagout')
            $(this).siblings().html('<i class="fas fa-chevron-right"></i>')

        })

        $('select').change(function () {
            if ($(this).val() == 'north') {
                $('.taiwanMap img').attr('src', '<?= WEB_ROOT ?>/img/discover_map_north.svg')
            }
            else if ($(this).val() == 'center') {
                $('.taiwanMap img').attr('src', '<?= WEB_ROOT ?>/img/discover_map_central.svg')
            }
            else if ($(this).val() == 'south') {
                $('.taiwanMap img').attr('src', '<?= WEB_ROOT ?>/img/discover_map_south.svg')
            }
            else if ($(this).val() == 'east') {
                $('.taiwanMap img').attr('src', '<?= WEB_ROOT ?>/img/discover_map_east.svg')
            }
            else if ($(this).val() == 'island') {
                $('.taiwanMap img').attr('src', '<?= WEB_ROOT ?>/img/discover_map_outlying_islands.svg')
            }
            else {
                $('.taiwanMap img').attr('src', '<?= WEB_ROOT ?>/img/discover_map_taiwan.svg')
            }

        })
        var picNum = $('.hot_feature').length
        let i = 0
        let interval;
        function picChange() {
            interval = setInterval(function () {
                if ($(window).width() < 1000) {
                    console.log(i % picNum)
                    $('.hot_feature').eq(i % picNum).css('opacity', '1').siblings('div').css('opacity', '0')
                    i++
                }
            }, 3000);
        }


        $(document).ready(function () {
            picChange()

        });

        let album = document.getElementById('discover_hot')
        album.addEventListener('mouseenter', function () {
            clearInterval(interval);
        })
        album.addEventListener('mouseleave', function () {
            picChange()
        })

        $('.prevPic').click(function () {
            i--
            $('.hot_feature').eq(i % picNum).css('opacity', '1').siblings('div').css('opacity', '0')
        })
        $('.nextPic').click(function () {
            i++
            $('.hot_feature').eq(i % picNum).css('opacity', '1').siblings('div').css('opacity', '0')
        })
        
    </script>
    <?php include __DIR__. '/parts/html-foot.php'; ?>