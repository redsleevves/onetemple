<?php

require __DIR__ . "/parts/config.php";

$_gdata = [
    // 網頁名稱
    'title' => '聖地行旅',
    // 頁面私有 css
    'styles' => '
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/11.0.2/css/bootstrap-slider.min.css"
    integrity="sha512-3q8fi8M0VS+X/3n64Ndpp6Bit7oXSiyCnzmlx6IDBLGlY5euFySyJ46RUlqIVs0DPCGOypqP8IRk/EyPvU28mQ=="
    crossorigin="anonymous" />
    <link rel="stylesheet" href="' . WEB_ROOT . '/css/breadcrumb.css">
    <link rel="stylesheet" href="' . WEB_ROOT . '/css/navbar2.css">',
    //頁面私有 scripts
    'scripts' => '
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/11.0.2/bootstrap-slider.min.js"
        integrity="sha512-f0VlzJbcEB6KiW8ZVtL+5HWPDyW1+nJEjguZ5IVnSQkvZbwBt2RfCBY0CBO1PsMAqxxrG4Di6TfsCPP3ZRwKpA=="
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>',
];
?>

<!-- 整個頁面的頭 -->
<?php include __DIR__ . '/parts/ourhead.php'; ?>
<!-- 導航用代碼包含彈窗 -->
<?php include __DIR__ . '/parts/ournav.php'; ?>




    <style>
 /* 基本設定 */
 body {
        font-family: 'Faustina', serif !important;
        /* font-family: 'Sitka Display', NSimSun, 'sans-serif'; */
        /* font-family: 'Noto Sans TC', serif !important; */
        background-image: url(./img/nav_bcc.png);
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

    h5 {
        /* 追加 */
        letter-spacing: 3px
    }

    p {
        /* 字級可自訂 */
        /* font-size: 20px; */
        font-size: 16px;
        font-weight: normal;
        /* 追加 */
        margin: 0;
        letter-spacing: 2px;
        /* font-family: 'Faustina', serif; */
        /* font-family: 'Noto Sans TC', serif !important; */
        /* 追加修正 */
        text-align: justify;
    }



    /* 按鈕 */

    .btns {
        margin: 300px;
    }

    button {
        padding: 12px 18px;
        background-color: #cc543a;
        color: white;
        border-radius: 30px;
        border: none;

        /* font-family: 'Sitka Display', NSimSun, 'sans-serif'; */

    }

    button:focus {
        outline: 0;
        box-shadow: 0 0 0 1pt rgb(77, 77, 77);
    }

    .btnss {
        padding: 12px 18px;
        background-color: #cc543a;
        color: white;
        border-radius: 30px;
        border: none;

        /* font-family: 'Sitka Display', NSimSun, 'sans-serif'; */
        cursor: pointer;
    }

    i {
        padding: 0 8px;
    }

    a:hover {
        text-decoration: none;
        color: #cc543a;
    }



    /* 麵包屑 */
    .breadcrumb_style {
        background-image: url(./img/nav_background_1.png);
        /* navbar多厚 就推多少paddding */

    }

    .breadcrumb_style_1 {
        padding: 20px 0;
        align-items: center;
        margin: auto;
    }

    .astlyep {
        font-size: 14px;
        letter-spacing: 2px;
        color: #707070;
        list-style-type: none;
        text-decoration: none;

    }

    .breadcrumb_style_1 img {
        height: 10px;
        width: 10px;
        margin: 0 10px;
    }









        /* 共用設定 微調 ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
        .backgroundimg_1 {
            background-image: url(./img/nav_background_1.png);
        }

        .backgroundimg_2 {
            background-image: url(./img/nav_background_2.png);
        }

        .maxwidth80 {

            padding-left: 0;
            padding-right: 0;
            margin: auto;
        }

        .vishid {
            visibility: hidden;
        }

        .aic {
            align-items: center;
        }

        .jcsb {
            justify-content: space-between;
        }

        .jcc {
            justify-content: center;
        }

        .marginauto {
            margin: auto;
        }

        .redcolorh5 {
            color: #cc543a;
        }

        .posrel {
            position: relative;
        }

        .posab {
            position: absolute;
        }

        .phidden {
            visibility: hidden;
        }

        .font-weight-bold {
            font-weight: bold;
        }


        .fontstyletitle {
            font-family: 'Noto Serif TC', serif;
        }




        .hrline {
            width: 30%;
            background-color: rgb(184, 184, 184);
        }

        .textleftpd15 {
            padding-left: 15px;
        }

        .textrightpd15 {
            padding-right: 15px;
        }

        .midmargin_left50 {
            margin: 0 0 0 50px;
        }

        .midmargin_right50 {
            margin: 0 50px 0 0;
        }

        .padtop {
            padding-top: 20px;
        }

        .padbottom150 {
            padding-bottom: 100px;
        }

        .padtop10 {
            padding-top: 10%;
        }

        /* page_1 ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/




        /* page_1_up */





        /* page_1_down */
        .discover_temple_page_box {
            width: 100%;
            /* height: 75vh; */
            /* background-color: rgba(255, 0, 0, 0.267); */
        }

        .discover_temple_page_box1 {
            width: 100%;
            /* height: 75vh; */
            /* height: 700px; */
            background-color: rgba(67, 65, 192, 0.151);
        }

        /* .discover_temple_page_1_down{
            height: 780px;
        } */


        .discover_temple_page_1_box_img img {
            width: 100%;

        }



        .font-weight-bold h1 {
            font-weight: bold;
            padding-bottom: 20px;
            margin: 0;
            font-size: 50px;
        }

        .borderline_up {
            border-bottom: 10px solid rgb(202, 202, 202);
        }

        .borderline_h3 h3 {
            margin: 0;
            font-weight: bold;
        }

        .borderline_name {
            padding-top: 30px;
            justify-content: flex-end;
        }



        .discover_temple_page_1_rightpage_img {
            padding-top: 30px;
            height: 350px;
        }

        .discover_temple_page_1_rightpage_img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }



        /* page_2~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */


        .page2boximg3 {
            height: 250px;
        }

        .page2boximg3 img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .page2boximg3_3 {
            height: 300px;
        }

        .page2boximg3_3 img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .page2boximg2 {
            width: 100%;
            height: 350px;
        }

        .page2boximg2 img {
            object-fit: cover;
            width: 100%;
            height: 100%;
        }

        .imgpad {
            padding-bottom: 20px;
        }

        .margin000auto {
            margin: 0 0 0 auto;

        }

        .objfc {
            object-fit: cover;
        }

        /* page_3~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */
        .discover_temple_page_3 {
            background-image: url(./img/nav_background_1.png);
        }

        .mixwidth1586 {
            /* 限制寬用 備用 */
            /* width: 1586px; */
        }

        .discover_temple_page_3_right_img img {
            width: 100%;
        }

        .discover_temple_page_3_right_text_mg {
            margin: auto 0 auto auto;

        }

        .potre {
            position: relative;
        }



        .discover_temple_page_3_mid_img img {
            width: 100%;
        }

        .padtexttp {
            /* padding-top: 1rem; */
        }

        .padtop10 {
            padding: 10% 0 0 0;
        }


        /* 家慧修改 */
        @media (min-width: 992px) {

            .discover_temple_page_1,
            .discover_temple_page_2,
            .discover_temple_page_3 {
                width: 1100px;
                margin: auto;
            }

            .discover_temple_page_1_width,
            .discover_temple_page_2_set,
            .discover_temple_page_3_set {
                width: 1000px;
                margin: auto;
            }
        }

        /* 動畫用css */
        .animat_3 {
            opacity: 0;

            transition: 1s;
            transition-duration: 2s;
            transition-delay: 0.5s;
        }

        .animat_4 {
            opacity: 0;

            transition: 1s;
            transition-duration: 2s;
            transition-delay: 0.5s;
        }

        .animat_5 {
            opacity: 0;

            transition: 1s;
            transition-duration: 2s;
            transition-delay: 0.5s;
        }

        .animat_6 {
            opacity: 0;

            transition: 1s;
            transition-duration: 2s;
            transition-delay: 0.5s;
        }

        .animat_7 {
            opacity: 0;

            transition: 1s;
            transition-duration: 2s;
            transition-delay: 0.5s;
        }

        /* .animat_1{
    transform: translateX(-200px);
} */

        /* 動畫? */
        @keyframes image_1 {
            from {
                opacity: 0;
                transform: translateX(-200px);
            }

            to {
                opacity: 1;

            }
        }

        @keyframes image_2 {
            from {
                opacity: 0;
                transform: translateY(200px);
            }

            to {
                opacity: 1;

            }
        }

        @keyframes image_3 {
            from {
                opacity: 0;
                transform: translateY(200px);
            }

            to {
                opacity: 1;

            }
        }

        @keyframes image_4 {
            from {
                opacity: 0;
                transform: translateX(200px);
            }

            to {
                opacity: 1;

            }
        }

        @keyframes image_5 {
            from {
                opacity: 0;
                transform: translateX(-200px);
            }

            to {
                opacity: 1;

            }
        }

        @keyframes image_6 {
            from {
                opacity: 0;
                transform: translateY(200px);
            }

            to {
                opacity: 1;

            }
        }

        @keyframes image_7 {
            from {
                opacity: 0;
                transform: translateX(200px);
            }

            to {
                opacity: 1;

            }
        }

        /* 手機在這邊~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */
        /* min-width 桌面板 */
        @media (min-width:992px) {

            /* 共用設定 */
            .maxwidth80 {
                width: 80%;
            }

            .marginatuo0 {
                margin: auto 0 auto auto;
            }

            .brspace {
                width: 20px;
            }

            /* page_1 */
            .dflex {
                display: flex;
            }

            .borderline_text {
                justify-content: flex-end;
            }

            .leftpad {
                padding: 0 0 0 50px;
            }

            .left_pagepd {
                padding: 40px;
            }

            .boxgraycolor {
                width: 100%;
                background-image: url(./img/nav_background_2.png);
            }

            .padbt70 {
                padding-bottom: 70px;
            }

            /* page_2 */
            .vishid {
                visibility: hidden;
            }

            .padtop_page2all {
                padding-top: 70px;
            }

            .padtp {
                padding-top: 50px;
            }

            .padtp20 {
                padding-top: 35px;
            }

            .padleft10 {
                padding-left: 10px;
            }

            .boxpostab {
                width: 50%;
                height: 80%;
                background-image: url(./img/nav_background_1.png);
                top: 5%;
                left: 15%;
            }

            .padtp40 {
                padding-top: 30px;
            }

            /* page_3 */
            .discover_temple_page_3_right_img {
                width: 300px;
            }

            

            .page3box2pd {
                padding: 0 40px 0 0;
            }

            .page3box3pd {
                padding: 0 0 0 40px;
            }

            .discover_temple_page_3_right_img_potabu {
                position: absolute;
                top: 7%;

            }



             

            .pad60040 {
                padding: 60px 0 0 40px;
            }

            .dnoneimg {
                display: none;
            }

            .pcolumn {
                column-count: 2;
            }

            .discover_temple_page_3_mid_img {
                width: 60%;
                margin: auto;
            }
            .breadcrumb_style_1 {
            width: 80%;
        }
        }

        



        /* max-width 手機板 */
        @media (max-width:991px) {

            /* 共用設定 */
            .maxwidth80 {
                width: 85%;
            }

            .dnone740 {
                display: none;
            }

            .padtp_md {
                padding-top: 20px;
            }

            .padtp40_md {
                padding-top: 30px;
            }

            .pad0_md {
                padding: 0;
            }

            /* page_1 */
            .jucc_md {
                justify-content: center;
            }

            .leftpad {
                padding: 30px 0 0 0;

            }

            /* page_2 */
            .padtp30_md {
                padding-top: 30px;
            }

            .padtp020 {
                padding: 20px 0 0 0;
            }

            .padtb20_md {
                padding-bottom: 20px;
            }

            /* page_3 */
            .discover_temple_page_3_right_img {
                width: 200px;
            }

            .padbt20_md {
                padding-bottom: 20px;
            }

            .pad200_md {
                padding: 20px 0 0px 0;
            }

            .pad20020_md {
                padding: 20px 0 20px 0;
            }

            .discover_temple_page_3_mid_img img {
                height: 100%;
                object-fit: contain;
                width: 100%;
            }

            .height300_md {
                height: 300px;
            }

            .pad20_md {
                padding: 20px;
                border: 2px solid #cc543a;

            }

            .discover_temple_page_1_modtitle {
                display: flex;
                justify-content: space-between;
            }
            .breadcrumb_style_1 {

width: 85%;
}
        }
    </style>



    <!-- 我是麵包屑-->

    <div class="breadcrumb_style   backgroundimg_1">
    <div class="d-flex flex-wrap breadcrumb_style_1 ">
        <a href="" class="astlyep">灣廟</a>
        <!-- 共用雲端找箭頭icon-->
        <img src="./img/nav_arrow_right.svg">
        <a href="" class="astlyep">探索灣廟</a>
        <img src="./img/nav_arrow_right.svg">
        <a href="" class="astlyep">行天宮</a>

    </div>
</div>









    <div class="discover_temple">



        <!-- page_1 -->
        <div class="discover_temple_1 backgroundimg_1">
            <div class="discover_temple_page_1 padtb20_md">
                <div class="discover_temple_page_1_width maxwidth80 padbt70">


                    <!-- page_1_down -->
                    <div class="discover_temple_page_1_down ">
                        <div class="   discover_temple_page_1_down_pb ">
                            <!-- page_1左邊 -->
                            <div class="row no-gutters col p-0  animat_1 ">
                                <div class="discover_temple_page_box ">
                                    <!-- page_1左邊up廟宇介紹標題 -->
                                    <div class="discover_temple_page_1_title font-weight-bold">
                                        <h1 class="fontstyletitle">行天宮</h1>
                                    </div>
                                    <!-- page_1左邊down set -->
                                    <div class="discover_temple_page_1_box dflex dflex1 ">
                                        <div class="discover_temple_page_1_box_small col-lg-6 col-md-6 p-0 marginauto">

                                            <div class="discover_temple_page_1_box_img">
                                                <img src="./img/discover_temple_001.jpg">
                                            </div>

                                            <!-- page_1左邊down 文字集合 -->
                                            <div class="discover_te_page_1empl_box_h3 padtp_md padtp20">
                                                <!-- 行天宮 -->
                                                <div class="borderline_h3 d-flex aic jucc_md">
                                                    <hr class="hrline dnone740 marginatuo0">

                                                    <h3 class="padleft10 fontstyletitle">台北行天宮</h3>
                                                </div>
                                                <!-- 道教 -->
                                                <div class="borderline_text borderline_text1 d-flex jucc_md pt-3">

                                                    <p>道教</p>

                                                </div>

                                            </div>

                                        </div>


                                        <!-- page_1 手機 標題錨點 -->
                                        <div class="discover_temple_page_1_modtitle dnoneimg padtp30_md">
                                            <p class="redcolorh5" id="discover_temple_title_01">簡介</p>
                                            <p class="">|</p>
                                            <p class="redcolorh5" id="discover_temple_title_02">建築</p>
                                            <p class="">|</p>
                                            <p class="redcolorh5" id="discover_temple_title_03">歷史</p>
                                            <p class="">|</p>
                                            <p class="redcolorh5" id="discover_temple_title_04">神明</p>
                                            <p class="">|</p>
                                            <p class="redcolorh5" id="discover_temple_title_05">交通</p>
                                        </div>

                                        <!-- page_1 左邊_右邊 -->
                                        <div class="discover_temple_page_1_box_small leftpad ">
                                            <div class="discover_temple_page_1_box_textup "
                                                id="discover_temple_move_01">
                                                <h5 id="INTRODUCE" class="font-weight-bold redcolorh5">INTRODUCE | 簡介
                                                </h5>

                                                <p class="padtexttp pt-3">
                                                    行天宮，又稱恩主公廟，為主祀關公的臺灣民間信仰廟宇，是全臺知名的關帝廟，由信仰齋教的煤礦主黃玄空創辦。<br><br>行天宮參訪香客眾多，本宮位於台北市市區，另有兩座分宮。<br><br>其中，歷史最悠久的是北投分宮
                                                    ，次之是三峽分宮，本宮位於臺灣臺北市中山區，為行天三宮最晚成立者，行天宮也成為大臺北地區關帝廟的代表，廟門設計上與文廟臺北市孔廟相同，大門均沒有門神圖樣，用欞星門108顆門釘代表108位神靈，即36天罡星、72地煞星。
                                                    <br><br>

                                                </p>





                                            </div>


                                        </div>
                                    </div>

                                </div>
                            </div>


                            <!-- page_1右邊 -->
                            <div class="row no-gutters col padtop10   midpad_left animat_2">
                                <!-- page_1右邊 桌機padding -->
                                <div class="discover_temple_page_box  left_pagepd boxgraycolor">
                                    <div class="discover_temple_page_1_rightpage">


                                        <div class="discover_temple_page_1_box_textdown padtp40_md ">
                                            <h5 id="architecture" class="font-weight-bold redcolorh5 ">architecture | 建築
                                            </h5>

                                            <p class="discover_temple_page_1_rightpage_text  pcolumn pt-3">
                                                行天宮前殿立面包含左、右山門，共使用12根柱子構成，中間共有11個門，又稱為「11開間」。<br><br>中國古代建築以「間」(或稱開間)作為標準單位，又以奇(單)數為吉祥數字，建築的迎面間數稱為「開間」，而進入後建築的縱深房間數稱「進深」。<br><br>整個行天宮的建築風格，是由精神導師玄空師父構思後，請示關聖帝君同意後開始監造。<br><br>主建築採用閩南燕尾翹脊式，特色在於採用鋼筋混凝土材質，創造出有如傳統寺廟木造建築的品味。<br><br>格局舒坦大方，比例均禒優美；特別是屋脊的旮線，弧度適中，在天際中漸次昂揚，透露著空靈的俊秀之氣，彰顯出神聖空間的氛圍。<br><br>而結合文史、書法、繪畫、雕刻之美的楹聯、碑誌、壁畫及彩畫，亦甚有可觀之處，更進一步莊嚴道場，也展現出深刻的情境教化。
                                            </p>

                                        </div>


                                        <div class="discover_temple_page_1_rightpage_img" id="discover_temple_move_02">
                                            <!-- 照片 -->
                                            <img src="./img/discover_temple_002.jpg">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- page_2~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <div class="discover_temple_2 backgroundimg_2">
            <div class="discover_temple_page_2 padtb20_md">
                <div class="discover_temple_page_2_set   dflex1 flex-wrap  padtop_page2all maxwidth80 padbt70">
                    <!-- page_2左邊 -->
                    <div class="discover_temple_page_2_left row no-gutters col p-0 posrel animat_3 "
                        id="discover_temple_move_03">

                        <!-- page_2左邊_漂浮色塊 -->
                        <div class="boxpostab posab"></div>


                        <!-- page_2左邊_集合 -->
                        <div class="discover_temple_page_box dflex dflex1">

                            <!-- page_2左邊_左邊文字 -->
                            <div class="discover_temple_page_1_box col-lg-5 col-md-5 p-0">



                                <div class="discover_temple_page_1_box_small  ">
                                    <div class="discover_temple_page_1_box_textup padtp padtp30_md ">
                                        <h5 id="HISTORY" class="font-weight-bold redcolorh5 ">HISTORY | 歷史</h5>

                                        <p class="pt-3">
                                            1943年，空真子師父（郭得進居士）及師兄弟，於台北市永樂町（今迪化街）一處民宅三樓設立「行天堂」，恭奉關聖帝君。當年，黃玄空師父（本名黃欉，法號「玄空」，1911年－1970年；行天宮方面敬稱其為「玄空師父」）得三兄黃新火居士引介，遂與「行天堂」關聖帝君結緣。
                                            <br><br>
                                            1945年，三峽「白雞」「海山」二坑煤礦附近瘧疾肆虐，居住於臺北縣樹林的基隆煤礦業主玄空師父為地方請命，遂得關聖帝君聖允，於辦公室闢一靜室，創設「行修堂」。不久，疫情趨緩，遠近信眾無不叩恩感謝。
                                            <br><br>
                                            1949年，因「行天堂」場地不夠理想，在臺北市林森北路、民權東路交叉口一帶購入原為宮前町的小型民間信仰簡易齋教鸞堂及附設土地公廟。不久，該鸞堂即吸引不少香客前往參訪，並形成多達250戶住家的違章建築。
                                        </p>

                                    </div>

                                </div>
                            </div>


                            <!-- page_2左邊_右邊照片 -->
                            <div class="discover_temple_page_1_box_small col  leftpad ">
                                <div class="discover_temple_page_2_box_img page2boximg3 imgpad dnone740 vishid">
                                    <img src="./img/discover_temple_001.jpg">
                                </div>
                                <div class="discover_temple_page_2_box_img page2boximg3 imgpad">
                                    <img src="./img/discover_temple_003.jpg">
                                </div>
                                <div class="discover_temple_page_2_box_img  page2boximg3_3 dnone740">
                                    <img src="./img/discover_temple_004.jpg">
                                </div>

                            </div>





                        </div>


                    </div>




                    <!-- page_2右邊 -->
                    <div class="discover_temple_page_2_right row no-gutters col padtop10  animat_4">
                        <div class="discover_temple_page_2_right_set ">
                            <!-- page_2右邊_上面照片 -->
                            <div class="discover_temple_page_2_right_img_set d-flex ">
                                <div class="discover_temple_page_2_right_img_set_img page2boximg2">
                                    <img class="objfc" src="./img/discover_temple_005.jpg">
                                </div>

                            </div>

                            <!-- page_2右邊_下面文字 -->
                            <div class="discover_temple_page_1_box_textup padtp40_md padtp40">

                                <div class="page_2_rigth_down_p col-lg-9 
                             margin000auto p-0 ">


                                    <p class="pt-3">

                                        1956年，著手於北投（平埔族嗄嘮別社舊址）、三峽兩地整建以祭祀關公為主的民間信仰廟宇，即北投忠義廟與三峽行修宮。行天宮落成後，由黃欉所主導興建的三座廟宇合稱為「行天三宮」新建於臺北市中心的行天宮稱為本宮，其餘兩間為行天宮分宮。
                                        <br><br>
                                        1960年代初，原本已有將齋教鸞堂原地擴建為廟宇的計畫，該片佔地2,000坪的私人用地，在教育部開始推動九年國民教育後，被改劃為國民中學預定用地（現為臺北市立新興國民中學）。
                                        <br>經交涉後，臺北市政府採取「以地易地」的方式，讓原地主以林森北路、民權東路交叉口一帶的私有地交換當時仍為瑠公圳末梢支流、沼澤的公有地。在取得位於西新庄子，現今民權東路、松江路口東北角的建廟用地後，商請已有興建多處廟宇經驗的造廟匠師廖石成設計、施工，並於1968年順利完成臺北本宮。
                                    </p>
                                </div>

                            </div>
                        </div>








                    </div>


                </div>


            </div>
        </div>
        <!-- page_3~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <div class="discover_temple_3 backgroundimg_1">
            <div class="discover_temple_page_3 padtp40_md padbt20_md" id="discover_temple_move_04">
                <div class="discover_temple_page_3_set  mixwidth1586 padtop_page2all maxwidth80 padbt70"
                    id="discover_temple_move_05">
                    <div class="col p-0  jcsb">
                        <!-- page_3左邊 -->
                        <div class="discover_temple_page_3_left  page3box1pd pad0_md animat_5">
                            <!-- page_3左邊_標題 -->
                            <div class="discover_temple_page_3_left_title redcolorh5">
                                <h5 id="GOD">GOD | 神明</h5>
                            </div>


                            <!-- page_3 手機板專用_上圖片 -->
                            <div class="discover_temple_page_3_mid_img dnoneimg padtp_md">
                                <img src="./img/discover_temple_god_Guan_Sheng.png">
                            </div>

                            <!-- page_3中間_上圖片 -->
                            <div class="discover_temple_page_3_mid_img dnone740">
                                <img src="./img/discover_temple_god_Guan_Sheng.png">
                            </div>

                            <!-- page_3左邊_文字 -->
                            <div class="discover_temple_page_3_left_p pt-3">

                                <p>1.陎對前殿持香敬拜 天公，並於天公爐恭敬插上清香1柱。
                                    <br>2.陎對正殿持香敬拜 五聖恩主，並於恩主爐恭敬插上清香1柱。
                                    <br>3.陎對左次間雙手合十敬拜 關聖太子。
                                    <br>4.陎對右次間雙手合十敬拜 周恩師。
                                    <br>
                                    <br>
                                    行天宫奉祀五聖恩主，所謂的「恩主」就是扶鸞信仰的「救世主」，因為恩主公憐憫世人、救世濟民，所以信眾感恩如救世主。
                                    <br>五位恩主，以關聖帝君為首，因此臺灣一般民眾亦稱關聖帝君為恩主公，也經常稱行天宫為恩主公廟。
                                    <br>
                                    <br>
                                    關聖帝君：為三國時代之名將關羽，字雲長。關聖帝君備受三教推崇，佛教尊奉為伽藍菩薩；道教奉為協天大帝、翊漢大天尊；儒教則奉為南天文衡聖帝，亦奉為五文昌之一，又稱「山西夫子」（與「山東夫子」孔子並稱）；鸞堂稱為恩主公；一貫道奉為關法律主。1614年，明朝萬曆帝敕封關聖帝君為「三界伏魔大帝神威遠鎮天尊關聖帝君」，故又尊稱關聖帝君，尊稱「關恩主」。
                                    <br>
                                    <br>
                                    配祀神：關聖太子關平太子。
                                    <br>
                                    <br>
                                    配祀神：周恩師周倉元帥。


                                </p>
                            </div>
                        </div>
                        <!-- page_3中間 -->

                        <div class="discover_temple_page_3_mid  pad600 pad200_md animat_6">

                            <!-- page_3 手機板專用中間_上圖片 -->
                            <div class="discover_temple_page_3_mid_img height300_md dnoneimg">
                                <img src="./img/discover_temple_god_Guan Ping.png">
                            </div>


                            <!-- page_3中間_下文字 -->
                            <div class="discover_temple_page_3_mid_p pad20020_md pt-3">
                                <p>

                                    孚佑帝君：中國八仙之一，人稱「呂祖」、「呂仙翁」，道教尊稱孚佑帝君，又奉為五文昌之一，尊稱「呂恩主」。
                                    <br>
                                    <br>
                                    
                                    司命真君：灶神，又稱張真君，能夠紀錄一家善惡，稟告天庭。尊稱「張恩主」。
                                    <br>
                                    <br>
                                    隆恩真君：道教重要的護法神、火神，又稱豁落靈官，尊稱「王恩主」。
                                    <br>
                                    <br>
                                    精忠武穆王：12世紀中國宋朝名將，即岳飛，尊稱「岳恩主」。
                                </p>
                            </div>
                        </div>

                        <!-- page_3右邊 -->

                        <div class="discover_temple_page_3_right  page3box3pd potre   pad60040 pad20_md animat_7">
                            <!-- page_3右邊相對定位圖片 -->
                            <div
                                class="discover_temple_page_3_right_img discover_temple_page_3_right_img_potabu dnone740">
                                <img src="img/discover_temple_red_circle.svg">
                            </div>
                            <!-- page_3右邊_文字 -->
                            <div
                                class="discover_temple_page_3_right_text col-lg-7 p-0 discover_temple_page_3_right_text_mg discover_temple_page_3_right_text_potabu">
                                <!-- page_3右邊_文字_標題 -->
                                <div class="discover_temple_page_3_right_title redcolorh5">
                                    <h5 id="TRAFFIC">TRAFFIC | 交通</h5>
                                </div>
                                <!-- page_3右邊_文字_p -->
                                <div class="discover_temple_page_3_right_p ">
                                    <br>
                                    <p>台北本宮 >
                                        <br>開放時間 04:00至22:00
                                        <br>臺北市中山區行政里民權東路2段109號
                                        <br>連絡電話 (02)25027924
                                        <br><br>
                                        三峽分宮 >
                                        <br>開放時間04:00至20:00
                                        <br>新北市三峽區嘉添里白鷄巷155號
                                        <br>連絡電話 (02)2671-1476
                                        <br><br>
                                        北投分宮 >
                                        <br>開放時間 04:00至19:00
                                        <br>臺北市北投區中央北路四段18巷50號
                                        <br>連絡電話 (02)2891-2731
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>



















   <!-- Js  相關設定~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
<!-- jquery -->
<!-- 導航用代碼包含彈窗 -->
<?php include __DIR__ . '/parts/ourscripts.php'; ?>



<!-- js jq 開始 -->

    <script>
        // navbar
        // overlayNav進場
        $('.nav_burgurBar_img').click(function () {

            let navPosition = {
                transform: 'translateY(0)'
            }

            $(".nav_overlayNav").css(navPosition);
        })

        // overlayNav退場
        $('.nav_closeBtn').click(function () {

            let navPosition = {
                transform: 'translateY(-2500px)',
                transition: '.7s'
            }

            $(".nav_overlayNav").css(navPosition);
        })


        //Login hide
        $('#registerbtn').click(function () {
            $('#loginCenter').modal('hide');
        })

        $('#passwordbtn').click(function () {
            $('#loginCenter').modal('hide');
        })

        //overlay sub-menu
        $(document).ready(function () {
            $('.nav_ser_mobile').click(function () {

                $('.nav_dropDownMenu_mobile').toggle('slow');

            })
        });






        // 飛入動畫
        let page = 0;
        $('.animat_1').eq(page).css('animation', 'image_1 0.8s ease-in');
        $('.animat_2').eq(page).css('animation', 'image_2 0.8s ease-in');


        $(window).scroll(function () {
            // 檢查及時高度
            console.log('height', $(this).scrollTop())
            let windowScrollTop = $(this).scrollTop()

            if (windowScrollTop >= 400) {

                // $('.animat_3').css('animation', 'image_3 2s ease-in');
                $('.animat_3').addClass().css('opacity', '1');
                $('.animat_3').css('animation', 'image_3 0.8s ease-in');
                $('.animat_4').addClass().css('opacity', '1');
                $('.animat_4').css('animation', 'image_4 0.8s ease-in');


            }
            if (windowScrollTop >= 1100) {
                $('.animat_5').addClass().css('opacity', '1');
                $('.animat_5').css('animation', 'image_5 0.8s ease-in');
                $('.animat_6').addClass().css('opacity', '1');
                $('.animat_6').css('animation', 'image_6 0.8s ease-in');
                $('.animat_7').addClass().css('opacity', '1');
                $('.animat_7').css('animation', 'image_7 0.8s ease-in');
            }




        })





        // 手機點
        // let anchor_point_move_1 = document.getElementById('INTRODUCE').offsetTop
        // let e = document.getElementById('architecture')
        // let anchor_point_move_3 = document.getElementById('discover_temple_move_03').offsetTop
        // let anchor_point_move_4 = document.getElementById('discover_temple_move_04').offsetTop
        // let anchor_point_move_5 = document.getElementById('discover_temple_move_05').offsetTop
        // console.log('top', anchor_point_move_1);
        // console.log('top', anchor_point_move_2);
        // console.log('top', anchor_point_move_3);
        // console.log('top', anchor_point_move_4);
        // console.log('top', anchor_point_move_5);

        function getPosition(element) {
            var x = 0;
            var y = 0;
            while (element) {
                // x += element.offsetLeft - element.scrollLeft + element.clientLeft;
                y += element.offsetTop - element.scrollTop + element.clientTop;
                element = element.offsetParent;

            }

            return { x: x, y: y };
        }

        $('#discover_temple_title_01').click(function () {
            var elem = document.querySelector('#INTRODUCE');
            var position = getPosition(elem);
            window.scrollTo({
                top: (position.y) - 110,
                behavior: 'smooth'
            });
        })

        $('#discover_temple_title_02').click(function () {
            var elem = document.querySelector('#architecture');
            var position = getPosition(elem);
            // alert("座標: " + position.x + ", " + position.y);
            window.scrollTo({
                top: (position.y) - 110,
                behavior: 'smooth'
            });
        })
        $('#discover_temple_title_03').click(function () {
            var elem = document.querySelector('#HISTORY');
            var position = getPosition(elem);
            window.scrollTo({
                top: (position.y) - 110,
                behavior: 'smooth'
            });
        })
        $('#discover_temple_title_04').click(function () {
            var elem = document.querySelector('#GOD');
            var position = getPosition(elem);
            window.scrollTo({
                top: (position.y) - 110,
                behavior: 'smooth'
            });
        })
        $('#discover_temple_title_05').click(function () {
            var elem = document.querySelector('#TRAFFIC');
            var position = getPosition(elem);
            window.scrollTo({
                top: (position.y) - 110,
                behavior: 'smooth'
            });
        })


    </script>

<?php include __DIR__ . '/parts/html-foot.php'; ?>