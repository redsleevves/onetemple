<?php include __DIR__ . '/parts/config.php'; ?>

<?php
    $_gdata = [
        // 網頁名稱
        'title' => '灣廟 | 燈種介紹', 
        // 頁面私有 css
        'styles' => '<link rel="stylesheet" href="' . WEB_ROOT . '/css/lightIntro_body.css">
        <link rel="stylesheet" href="' . WEB_ROOT . '/css/navbar1.css">',
        //頁面私有 scripts
        'scripts' => '', 
    ];
?>

<!-- 整個頁面的頭 -->
<?php include __DIR__ . '/parts/ourhead.php'; ?>

<style>
        body {
            font-family: 'Faustina', serif !important;
            background: url(./img/nav_bcc.png);
        }

        /* 共用設定 */
        .jucc {
            justify-content: center;
        }

        .aic {
            align-items: center;
        }

        .postrel {
            position: relative;
        }

        .redcolor {
            color: #cc543a;
        }

        .jusbt {
            justify-content: space-between;
        }

        .jucsa {
            justify-content: space-around;
        }

        .padtop150 {
            padding-top: 150px;
        }

        .padbotm80 {
            padding-bottom: 80px;
        }

        .padbotm120 {
            padding-bottom: 120px;
        }

        .marginleftatuo {
            margin: 0 0 0 auto;
        }

        .fontweight {
            font-weight: bold;
        }

        /* page_1~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */
        .light_Introduction_page_1_set {
            background-image: url(./img/lightIntro_banner.jpg);
            width: 100%;
            height: 100vh;
        }

        .light_Introduction_page_1_set img {
            width: 100%;
        }

        .widthheight {
            width: 100%;
            height: 100%;

        }

        .colorwhite {
            font-family: 'Noto Serif TC', serif;
            color: #fff;
            letter-spacing: 10px;
            text-shadow: 2px 3px 5px black;
        }

        .text-focus-in {
            animation: text-focus-in 1s cubic-bezier(.55, .085, .68, .53) both
        }

        @-webkit-keyframes text-focus-in {
            0% {
                -webkit-filter: blur(12px);
                filter: blur(12px);
                opacity: 0;
            }

            100% {
                -webkit-filter: blur(0px);
                filter: blur(0px);
                opacity: 1;
            }
        }

        @keyframes text-focus-in {
            0% {
                -webkit-filter: blur(12px);
                filter: blur(12px);
                opacity: 0;
            }

            100% {
                -webkit-filter: blur(0px);
                filter: blur(0px);
                opacity: 1;
            }
        }

        /* slideDown-arrow */
        .index_slideDown {
            position: absolute;
            z-index: 2;
            left: calc(50% - 30px);
            top: 90%;
        }

        .arrows {
            width: 60px;
            height: 72px;
        }

        .arrows path {
            stroke: #fff;
            fill: transparent;
            stroke-width: 1px;
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

        /* page_2~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ ~~*/

        /* ALL-content */
        .light_light_Introduction_content {
            display: flex;
            justify-content: flex-end;
            padding: 30px 0 0 0;
            position: relative;
        }

        /* godImg */
        .light_Introduction_page_2_img {
            height: 97%;
            position: absolute;
            top: 30px;
            left: -50px;
            z-index: 2;


            overflow: hidden;

            opacity: 0.4;

            /* border: 1px solid red; */
        }

        .light_Introduction_page_2_img img {
            width: 90%;
        }

        /* lightContent */
        .light_Introduction_page_2_set {
            width: 60%;
            display: flex;
            justify-content: flex-end;
            margin: 0 130px 0 0;
        }

        /* title設定 */
        .light_Introduction_title {
            font-weight: 700;
            color: #cc543a;
            letter-spacing: 0.1rem;
            padding: 20px 0 70px 0;
        }

        /* form */
        .brandsOnMedia {
            width: 100%;
            text-align: center;

            display: none;
        }

        /* 燈種類別 */
        .light_Introduction_page_2_lightchoose_set {
            display: flex;
            position: relative;
            z-index: 3;
        }

        .light_Introduction_page_2_light_img {
            width: 40px;
        }

        .imgBoxBig {
            width: 50px;
        }

        .light_Introduction_page_2_light_img img {
            width: 100%;
        }

        .light_Introduction_page_2_light_light_name p {
            font-size: 22px;
            margin: 0 0 0 10px;

            background-image: linear-gradient(#aaa, #aaa);
            background-position: left bottom;
            background-size: 0 1px;
            background-repeat: no-repeat;
            transition: background-size 0.3s linear;
        }

        #light_G-light p {
            background-image: linear-gradient(#aaa, #aaa);
            background-position: left bottom;
            background-size: 100% 1px;
            background-repeat: no-repeat;
            transition: background-size 0.3s linear;
        }


        /* 燈種資訊區 */
        .light_Introduction_page_2_text_name_set {
            justify-content: flex-start;
            align-items: center;
            padding: 50px 0 80px 0;
            /* border: 1px solid red; */
        }

        .light_Introduction_page_2_text_info_set {
            margin: 0 50px;

            /* 為了讓整體不會因字數多寡而移動 */
            padding: 0 0 0 10px;
            width: 50%;

            /* border: 1px solid red; */
        }

        /* red-circle */
        .light_Introduction_page_2_text_img {
            width: 500px;
            height: 500px;
            position: absolute;
            top: -10px;
            left: 10px;
            /* display: none; */
            /* border: 1px solid red; */
        }

        .light_Introduction_page_2_text_img img {
            width: 100%;
            height: 100%;
        }

        /* button */
        .light_Introduction_btn {
            width: 90%;
            text-align: right;
            margin: 0 0 50px 0;
            position: relative;
            left: 0;
            transition: .5s;
            /* border: 1px solid red; */
        }

        .light_Introduction_btn a{
            text-decoration: none;
            color: #fff;
        }

        #clickToLight {
            font-family: 'Noto Serif TC', serif;
            letter-spacing: 0.2rem;
        }

        .light_Introduction_btn:hover {
            left: 20px;
            transition: .5s;
        }


        .light_Introduction_page_2_text_name_right {
            height: 385px;
        }

        .lip {
            /* 字級可自訂 */
            /* font-size: 20px; */
            font-size: 16px;
            font-weight: normal;
            /* 追加 */
            margin: 0;
            letter-spacing: 4px;
            font-family: 'Faustina', serif;
            /* 追加修正 */
            text-align: justify;
        }

        .maxwidth1080 {
            max-width: 1080px;
        }

        .width40 {
            width: 40%;
        }

        /* goTop */
        .index_goTopImg {
            width: 50px;
            position: fixed;
            bottom: -100px;
            right: 20px;
            transition: .5s;
            z-index: 9;
        }

        .index_goTopImg svg {
            width: 100%;
        }

        .index_goTopImg.show {
            bottom: 20px;
        }

        @media (max-width: 770px) {

            /* banner-word */
            .colorwhite {
                font-size: 20px;
            }

            /* 神像圖 */
            .light_light_Introduction_content {
                display: flex;
                flex-direction: column;
                align-items: center;
                position: relative;

                /* border: 1px solid red; */
            }

            .light_Introduction_page_2_img {
                height: 40%;
                top: 800px;
                left: 0px;

                opacity: 0.2;

                /* border: 1px solid red; */
            }

            .light_Introduction_page_2_img img {
                width: 100%;

            }

            .light_Introduction_page_2_set {
                width: 100%;
                margin: 0;
            }

            .light_Introduction_page_2_rightset {
                padding-bottom: 60px;
            }

            .light_light_Introduction_content {
                position: relative;
            }


            /* title */
            .light_Introduction_page_2_title {
                position: absolute;
                top: 20px;
                left: 30px;
            }

            .light_Introduction_title {
                width: 65%;
                padding: 0;
                font-size: 22px;
                line-height: 30px;
            }


            /* red-circle */
            .light_Introduction_page_2_text_img {
                width: 150px;
                height: 150px;
                position: absolute;
                top: 30px;
                left: 20px;
            }

            /* light-info-Box */
            .light_Introduction_page_2_text_name_set {
                padding: 0;
                flex-direction: column;
            }

            /* light-info-left */
            .light_Introduction_page_2_text_name_left {
                margin: 80px 0 0 0;
            }

            /* light-info-right */
            .light_Introduction_page_2_text_name_right {
                width: 80%;
                padding-top: 50px;
            }



            /* 燈種選擇 */
            .light_Introduction_page_2_lightchoose_set {
                /* display: none; */
                flex-wrap: wrap;
                justify-content: space-evenly;
                margin: 80px 0 0 0;
                padding: 0;

                /* border: 1px solid red; */
            }

            .light_Introduction_page_2_light_card {
                margin: 15px 10px;
            }

            .light_Introduction_page_2_light_light_name p {
                font-size: 16px;
            }

            /* button */
            .light_Introduction_btn {
                width: 100%;
                text-align: center;
                margin: 40px 0 0 0;
            }

        }
</style>

<body>
    <!-- Banner -->
    <div class="light_Introduction_page_1">
        <!-- page_1 set -->
        <div class="light_Introduction_page_1_set">

            <!-- page_1 標題 -->
            <div class="light_Introduction_page_1_title widthheight d-flex jucc aic">
                <h3 class="colorwhite text-focus-in">LIGHT | 祈福點燈</h3>
            </div>
            <!-- page_1 引導箭頭 -->
            <div class="index_slideDown">
                <svg class="arrows">
                    <path class="a1" d="M0 0 L30 32 L60 0"></path>
                    <path class="a2" d="M0 20 L30 52 L60 20"></path>
                    <path class="a3" d="M0 40 L30 72 L60 40"></path>
                </svg>
            </div>
        </div>
    </div>

    <!-- 導航用代碼包含彈窗 -->
    <?php include __DIR__ . '/parts/ournav_nav1.php'; ?>


    <div class="light_light_Introduction_content">

        <!-- god_img -->
        <div class="light_Introduction_page_2_img col-lg-5 col-12">
            <img class="light_godImg" src="./img/lightintro_god_Bodhisattva.png">
        </div>

        <div class="light_Introduction_page_2_set">

            <div class="light_Introduction_page_2_rightset">

                <div class="light_Introduction_page_2_title">
                    <h3 class="light_Introduction_title">Light Introduction | 燈種介紹</h3>
                </div>


                <!-- 燈種選擇  -->
                <div class="light_Introduction_page_2_lightchoose_set jusbt padbotm80">

                    <div id="light_G-light" class="light_Introduction_page_2_light_card d-flex aic">

                        <div class="light_Introduction_page_2_light_img">
                            <img src="" alt="">
                        </div>

                        <div class="light_Introduction_page_2_light_light_name">
                            <p>光明燈</p>
                        </div>
                    </div>

                    <div id="light_W-light" class="light_Introduction_page_2_light_card d-flex aic">

                        <div class="light_Introduction_page_2_light_img">
                            <img src="./img/lightintro_lamp_white.svg" alt="">
                        </div>

                        <div class="light_Introduction_page_2_light_light_name ">
                            <p>文昌燈</p>
                        </div>
                    </div>

                    <div id="light_A-light" class="light_Introduction_page_2_light_card d-flex aic">

                        <div class="light_Introduction_page_2_light_img">
                            <img src="./img/lightintro_lamp_white.svg" alt="">
                        </div>

                        <div class="light_Introduction_page_2_light_light_name">
                            <p>安太歲</p>
                        </div>
                    </div>

                    <div id="light_Y-light" class="light_Introduction_page_2_light_card d-flex aic">

                        <div class="light_Introduction_page_2_light_img">
                            <img src="./img/lightintro_lamp_white.svg" alt="">
                        </div>

                        <div class="light_Introduction_page_2_light_light_name">
                            <p>藥師燈</p>
                        </div>
                    </div>

                    <div id="light_F-light" class="light_Introduction_page_2_light_card d-flex aic">

                        <div class="light_Introduction_page_2_light_img">
                            <img src="./img/lightintro_lamp_white.svg" alt="">
                        </div>

                        <div class="light_Introduction_page_2_light_light_name">
                            <p>發財燈</p>
                        </div>
                    </div>

                    <div id="light_YU-light" class="light_Introduction_page_2_light_card d-flex aic">

                        <div class="light_Introduction_page_2_light_img">
                            <img src="./img/lightintro_lamp_white.svg" alt="">
                        </div>

                        <div class="light_Introduction_page_2_light_light_name">
                            <p>姻緣燈</p>
                        </div>
                    </div>

                </div>




                <!-- 燈種資訊 -->
                <div class="light_Introduction_page_2_text_name_set postrel d-flex">

                    <div class="light_Introduction_page_2_text_img">
                        <img src="./img/lightintro_red_circle.svg">
                    </div>


                    <div class="light_Introduction_page_2_text_name_left col-lg-6 col-12 d-flex jucc aic">

                        <div class="light_Introduction_page_2_text_info_set">
                            <div class="light_Introduction_page_2_text_name">
                                <h4 class="light_lightName fontweight">光明燈</h4>
                            </div>

                            <div class="light_Introduction_page_2_text_function">
                                <p class="light_eff redcolor">祈求元辰光彩、補運助氣</p>
                                <br>
                                <p>適用對象 |</p>
                                <span class="light_who">欲求平安順遂、未犯太歲之民眾。</span>
                                <br><br>
                                <p>登記費用 |</p>
                                <span>每盞燈新台幣 600 元整</span>
                                <br><br>
                                <p>點燈附贈|</p>
                                <span class="light_gift">香火袋</span>
                            </div>
                        </div>

                    </div>


                    <!-- 燈種詳細介紹 -->
                    <div class="light_Introduction_page_2_text_name_right col-lg-5 col-12 d-flex jucc aic">
                        <p class="lip">
                            在中國民間信仰上，在春節正月期間，為自己點光明燈，有「照耀前途」的意義。此外，廟方通常不接受以死者名義點光明燈。有些廟宇安太歲的方式，是在太歲神旁點上寫有犯太歲者姓名的光明燈。以往光明燈使用蠟燭或油燈的方式，其大量燃煙與不一定能長久光明的缺點，造成許多困擾，近代的廟宇因此設計有現代的塔型光明電燈，在台灣許多廟宇，皆可看到塔型的光明燈座，是每一層中有小隔間，內用紅色的小燈泡，外則在透明小窗上貼上或是寫上施主的姓名、生日（經常以紅色筆寫成）。
                            <br><br>
                            在歐美，天主教及正教會的教堂中，也有類似光明燈的小蠟燭座，讓教徒點燃，代表自己對天主或耶穌基督的信仰能照耀世上其他人，同時藉點燃，代表祈求神的祝福。
                        </p>
                    </div>
                </div>

                
                
                <div class="light_Introduction_btn">
                    <button id="clickToLight">
                        <?php if(isset($_SESSION['user'])): ?>
                            <a href="<?= WEB_ROOT ?>/light_Description.php">我想點燈</a>
                        <?php else: ?>
                            <a data-toggle="modal" data-target="#loginCenter">登入後即可點燈</a>

                        <?php endif; ?>   
                    </button>
                    
                    
                </div>

            </div>
        </div>
    </div>

    <?php include __DIR__ . '/parts/go-top.php' ?>
    <!-- 導航用代碼包含彈窗 -->
    <?php include __DIR__ . '/parts/ourscripts_nav1.php'; ?>


    <script>

        //click slidedown
        $('.index_slideDown').click(function () {

            let windowWidth = $(window).width();

            if (windowWidth > 1400) {

                $("html,body").animate({
                    scrollTop: 980,
                }, 1000);
            };
            if (windowWidth < 400) {

                $("html,body").animate({
                    scrollTop: 818,
                }, 1000);
            };


        });



        //換頁換燈
        $('#light_G-light').find('img').attr('src', './img/lightintro_lamp_color.svg');
        $('#light_G-light').find('.light_Introduction_page_2_light_img').addClass('imgBoxBig');

        $('.light_Introduction_page_2_light_card').click(function () {

            $(this).find('img').attr('src', './img/lightintro_lamp_color.svg');
            $(this).find('.light_Introduction_page_2_light_img').addClass('imgBoxBig');
            $(this).siblings().find('img').attr('src', './img/lightintro_lamp_white.svg');
            $(this).siblings().find('.light_Introduction_page_2_light_img').removeClass('imgBoxBig');
        })

        //換頁字加底線
        $('.light_Introduction_page_2_light_card').click(function () {
            $(this).find('p').css('background-size', '100% 1px');
            $(this).siblings().find('p').css('background-size', '0 1px');
        })






        //選燈換頁 (光明燈)
        $('#light_G-light').click(function () {

            $('.light_Introduction_page_2_text_name_set').css({ 'opacity': '0', 'transition': '0' });
            $('.light_godImg').css({ 'opacity': '0', 'transition': '0' });

            setTimeout(() => {

                $('.light_Introduction_page_2_text_name_set').css({ 'opacity': '1', 'transition': '1s' });
                $('.light_godImg').css({ 'opacity': '1', 'transition': '1s' });

                $('.light_godImg').attr('src', './img/lightintro_god_Bodhisattva.png');
                $('.light_lightName').text('光明燈');
                $('.light_eff').text('祈求元辰光彩、補運助氣');
                $('.light_who').text('欲求平安順遂、未犯太歲之民眾。');
                $('.lip').html(`在中國民間信仰上，在春節正月期間，為自己點光明燈，有「照耀前途」的意義。此外，廟方通常不接受以死者名義點光明燈。有些廟宇安太歲的方式，是在太歲神旁點上寫有犯太歲者姓名的光明燈。以往光明燈使用蠟燭或油燈的方式，其大量燃煙與不一定能長久光明的缺點，造成許多困擾，近代的廟宇因此設計有現代的塔型光明電燈，在台灣許多廟宇，皆可看到塔型的光明燈座，是每一層中有小隔間，內用紅色的小燈泡，外則在透明小窗上貼上或是寫上施主的姓名、生日（經常以紅色筆寫成）。
            <br><br>
            在歐美，天主教及正教會的教堂中，也有類似光明燈的小蠟燭座，讓教徒點燃，代表自己對天主或耶穌基督的信仰能照耀世上其他人，同時藉點燃，代表祈求神的祝福。`);

            }, 500);

        })


        //選燈換頁 (文昌燈)
        $('#light_W-light').click(function () {

            $('.light_Introduction_page_2_text_name_set').css({ 'opacity': '0', 'transition': '0' });
            $('.light_godImg').css({ 'opacity': '0', 'transition': '0' });

            setTimeout(() => {

                $('.light_Introduction_page_2_text_name_set').css({ 'opacity': '1', 'transition': '1s' });
                $('.light_godImg').css({ 'opacity': '1', 'transition': '1s' });

                $('.light_godImg').attr('src', './img/lightintro_god_W.png')
                $('.light_lightName').text('文昌燈');
                $('.light_eff').text('祈求金榜題名、工作升遷');
                $('.light_who').text('學生、領薪水之上班族。');
                $('.lip').html(`又稱「狀元燈」，可增智慧、保佑考運，亦也稱「功名燈」。<br><br>
                可祈求文昌帝君，掌握考試命運與保佑讀書的神明，安奉文昌燈可幫助增進智慧、工作仕途升遷、智慧處事！另還有安太歲、光明燈、財祿燈可以參考！<br><br>
                文昌帝君是掌管功名之神，主宰士子的功名利祿。<br><br>
                點文昌燈旨在於祈求文昌帝君的加持庇佑，期許個人在求學路上或求職路上能智慧大開、步步高昇。 文昌燈不僅適用於讀書人也適用於一般的上班族。讀書人祭拜文昌帝君，祈求能金榜題名，學業成就。上班族祭拜文昌帝君，祈求工作升遷、仕途如意。`);

            }, 500);

        })

        //選燈換頁 (安太歲)
        $('#light_A-light').click(function () {

            $('.light_Introduction_page_2_text_name_set').css({ 'opacity': '0', 'transition': '0' });
            $('.light_godImg').css({ 'opacity': '0', 'transition': '0' });

            setTimeout(() => {

                $('.light_Introduction_page_2_text_name_set').css({ 'opacity': '1', 'transition': '1s' });
                $('.light_godImg').css({ 'opacity': '1', 'transition': '1s' });

                $('.light_godImg').attr('src', './img/lightintro_god_A.png');
                $('.light_lightName').text('安太歲');
                $('.light_eff').text('祈求流年平安、諸事順遂');
                $('.light_who').text('該生肖之犯太歲民眾。');
                $('.lip').html(`太歲星君俗稱太歲或歲君，負責掌管人間的吉凶禍福。 俗諺云：太歲當頭坐，無喜必有禍。<br><br>
            太歲是從一甲子六十年而來，與自己生辰四柱八字有很大關係，太歲有分很多種，有年太歲、月太歲、日太歲、時太歲等。當人遇到遭難時，上蒼慈悲會特派太歲前來保佑，每年輪值，俗話說太歲當頭座，無喜必有禍，所以正沖值年太歲，那一年的運勢會比較不順遂，可安太歲來化險為夷。`);

            }, 500);

        })

        //選燈換頁 (藥師燈)
        $('#light_Y-light').click(function () {

            $('.light_Introduction_page_2_text_name_set').css({ 'opacity': '0', 'transition': '0' });
            $('.light_godImg').css({ 'opacity': '0', 'transition': '0' });

            setTimeout(() => {

                $('.light_Introduction_page_2_text_name_set').css({ 'opacity': '1', 'transition': '1s' });
                $('.light_godImg').css({ 'opacity': '1', 'transition': '1s' });

                $('.light_godImg').attr('src', './img/lightintro_god_Y.png');
                $('.light_lightName').text('藥師燈');
                $('.light_eff').text('祈求身體健康平安');
                $('.light_who').text('祈求健康長壽、身心安樂之民眾。');
                $('.lip').html(`藥師佛，又稱作藥師如來、藥師琉璃光如來。藥師佛法門除同樣鼓勵命終往生淨土外，還著重強調可蒙藥師佛願力加被，以求現生即得安樂利益，增福延壽，消災免難，清除修行路上重重障礙。因為藥師琉璃光如來的第七大願是：「消除一切眾生眾的病痛，使身心靈平安快樂。」因此信徒常祈求身體健康、疾病消除。<br><br>
            藥師佛在日本與西藏特別受重視，已變成佛教修法的主尊。在日本，有皇室與佛教領袖的倡導；在西藏，則有各派大師的弘揚，並與藏醫緊密地結合。因此，歷代對藥師佛的信仰十分興盛。`);

            }, 500);

        })

        //選燈換頁 (發財燈)
        $('#light_F-light').click(function () {

            $('.light_Introduction_page_2_text_name_set').css({ 'opacity': '0', 'transition': '0' });
            $('.light_godImg').css({ 'opacity': '0', 'transition': '0' });

            setTimeout(() => {

                $('.light_Introduction_page_2_text_name_set').css({ 'opacity': '1', 'transition': '1s' });
                $('.light_godImg').css({ 'opacity': '1', 'transition': '1s' });

                $('.light_godImg').attr('src', './img/lightintro_god_F.png');
                $('.light_lightName').text('發財燈');
                $('.light_eff').text('祈求趨吉避凶、投資倍利');
                $('.light_who').text('欲消災解厄之民眾、創業投資者。');
                $('.lip').html(`傳統道教相信世間的一切生命，均隸屬斗宮，星辰運轉，年歲行運，皆屬星宿所主宰，「禮斗」即為天人常用的交流感應方式，為道教獨有的法會科儀，傳說中孔明借東風，陳靖姑祈雨都是經由「禮斗」而奏效的。 點拜斗燈係按個人生辰開斗，以祈求驅邪押煞、延命保安，同時也可保佑事業駿發、投資倍利。<br><br>
            祈求諸事平安，趨吉避凶，轉厄為安，保佑參加信徒平安順利，財利亨通。`);

            }, 500);

        });

        //選燈換頁 (姻緣燈)
        $('#light_YU-light').click(function () {

            $('.light_Introduction_page_2_text_name_set').css({ 'opacity': '0', 'transition': '0' });
            $('.light_godImg').css({ 'opacity': '0', 'transition': '0' });

            setTimeout(() => {

                $('.light_Introduction_page_2_text_name_set').css({ 'opacity': '1', 'transition': '1s' });
                $('.light_godImg').css({ 'opacity': '1', 'transition': '1s' });

                $('.light_godImg').attr('src', './img/lightintro_god_YU.png');
                $('.light_lightName').text('姻緣燈');
                $('.light_eff').text('祈求姻緣順利、婚姻美滿');
                $('.light_who').text('未婚或已婚男女，祈求姻緣順利者。');
                $('.lip').html(`月下老人，簡稱月老，是專司姻緣的神祇。 台灣諺語云：姻緣天註定，就是指月下老人的姻緣一線牽。 至本宮安奉之善男信女，廟務人員會為其填寫「姻緣疏文」上奏月老星君，擇良辰吉日於月老廳舉行儀式，完成姻緣簿登記，為信眾祈賜良緣。<br><br>
            有平和心境、增進情感的功效。可實現對愛情的追求，招來幸福美滿的感情生活。`);

            }, 500);

        });

        // Go-Top
        $(window).scroll(function (event) {
            let scrollTop = $(window).scrollTop();
            console.log(scrollTop);

            if (scrollTop >= 800) {

                $(".index_goTopImg").addClass('show');
            } else {
                $(".index_goTopImg").removeClass('show');
            }

            //navBar進入動畫
            if (scrollTop >= 250 && $(window).width() > 1400 ) {

            let navAnimation = {
                'animation': 'focus-in-expand 1s cubic-bezier(0.250, 0.460, 0.450, 0.940) both',
                'opacity': '1'
            }

            $(".nav_index_navbar_com").css(navAnimation);
            }
        });

        $('.index_goTopImg').click(function () {
            $("html,body").animate({
                scrollTop: 0,
            }, 700);
        });

    </script>

<?php include __DIR__ . '/parts/html-foot.php' ?>