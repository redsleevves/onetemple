<?php include __DIR__ . '/parts/config.php'; ?>

<?php
$_gdata = [
    // 網頁名稱
    'title' => '灣廟 Collection of Taiwan Temple',
    // 頁面私有 css
    'styles' => '<link rel="stylesheet" href="' . WEB_ROOT . '/css/navbar1.css">',
    //頁面私有 scripts
    'scripts' => '',
];
?>

<!-- 整個頁面的頭 -->
<?php include __DIR__ . '/parts/ourhead.php'; ?>

<style>
    /* .mouse_box {
        width: 60px;
        height: 60px;
        background-color: transparent;
        border-radius: 50%;
        border: 1px solid #cc543a;

        position: fixed;
        top: 0px;
        left: 0px;
        z-index: 999;
    } */

    body {
        font-family: 'Faustina', serif;
        background-image: url(./img/nav_bcc.png);
        /* cursor: url('./img/cursor.png') 15 15, auto; */
    }

    a:hover {
        text-decoration: none;
    }

    /* banner */
    .index_banner {
        max-width: 1920px;
        height: 100vh;
        overflow: hidden;
        position: relative;

        list-style-type: none;
    }

    .index_bannerBox {
        width: 100%;
        height: 100%;
        overflow: hidden;
        position: relative;
    }

    .index_bannerBox img {
        position: absolute;
        top: 0;
        display: none;

        width: 100%;
        height: 100%;
        object-fit: cover;

        /* position: relative; */
    }

    .index_bannerBox li::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.03);
        z-index: 1;
    }

    .index_bannerTitle {
        position: absolute;
        top: 250px;
        left: 100px;
        max-width: 600px;
        padding: 0 100px 0 0;
        z-index: 2;
    }

    .text-focus-in {
        -webkit-animation: text-focus-in 1.2s cubic-bezier(0.550, 0.085, 0.680, 0.530) both;
        animation: text-focus-in 1.2s cubic-bezier(0.550, 0.085, 0.680, 0.530) both;
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

    .index_bannerTitle img {
        width: 100%;
    }

    .index_bannerTitle_info {
        margin: 50px 0 0 0;
        max-width: 350px;
    }

    .index_bannerTitle p {
        color: #fff;
        letter-spacing: 0.1rem;

        margin: 0px 0 0 0;
        display: inline-block;
    }

    /* banner的文字段落動畫 */
    .index_bannerTitle_info01 {
        animation: slide-in-bottom 1.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) 0.8s both;
    }

    .index_bannerTitle_info02 {
        animation: slide-in-bottom 1.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) 1.1s both;
    }

    .index_bannerTitle_info03 {
        animation: slide-in-bottom 1.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) 1.4s both;
    }

    @keyframes slide-in-bottom {
        0% {
            -webkit-transform: translateY(100px);
            transform: translateY(100px);
            opacity: 0;
        }

        100% {
            -webkit-transform: translateY(0);
            transform: translateY(0);
            opacity: 1;
        }
    }

    .index_storyBox {
        position: absolute;
        top: 50px;
        width: 100%;
        z-index: 10;
        color: #fff;
    }

    .index_bannerLine {
        /* width: 150px; */
        height: 1px;
        margin: 0 15px;
        background-color: #fff;
        opacity: 1;
        position: relative;
        animation: arrowSlide 3s infinite linear;
    }

    @keyframes arrowSlide {
        from {
            width: 0px;
        }

        to {
            width: 150px;
        }
    }

    .index_rightArrow {
        width: 15px;
        margin: 0 10px 0 0;
    }

    .index_storyBtn {
        font-size: 22px;
        letter-spacing: 0.2rem;
        margin: 0 50px 0 10px;

        position: relative;
        left: 0;
        transition: .5s;
    }
    .index_storyBtn:hover{
        left: 10px;
        transition: .5s;
    }
    .index_storyBtn a {
        color: #fff;
    }

    /* slide-dots */
    .slider_dots {
        position: absolute;
        list-style-type: none;
        top: 0;
        width: 100%;
        height: 100%;

        display: flex;
        flex-direction: column;
        align-items: flex-end;
        justify-content: center;

        z-index: 2;
    }

    .slider_dots li {
        width: 20px;
        height: 2px;
        margin: 8px 50px;
        background-color: #fff;
        opacity: .5;
    }

    .index_banner .slider_num {
        width: 20px;
        background-color: transparent;
        color: #fff;
        font-size: 18px;
        opacity: 1 !important;
        letter-spacing: 0.2rem;
    }

    /* slideDown-arrow */
    .index_slideDown {
        position: absolute;
        z-index: 2;
        left: calc(50% - 30px);
        top: 88%;
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

    .bcolor {
        color: #000;
        align-items: center;
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

    /* wordTitle */
    .index_wordTitle {
        position: absolute;
        z-index: 2;
        right: 50px;
        top: 45%;
        opacity: .8;
    }


    /* news */
    .index_newsBox {
        margin: 100px 0 0 100px;
        padding: 0;

        /* border: 1px solid red; */
    }

    .index_title {
        color: #cc543a;
        font-size: 30px;
        font-weight: 700;
        letter-spacing: 0.2rem;
    }

    .index_newsBox a {
        color: #000;
    }

    .NEWS01 {
        padding: 25px 0 8px 0;
        border-bottom: 1px solid rgba(203, 203, 203, .7);
    }

    .NEWS01:hover {
        background-color: rgba(226, 225, 225, 0.4);
        ;
    }

    .NEWS01 p {
        margin: 0 50px 0 0;
        font-size: 20px;
        font-weight: 500;
        letter-spacing: 0.1rem;
        min-width: 140px;
    }

    .index_news_container02 {
        margin: 70px 0 80px 0;
    }

    .NEWS02 {
        width: 270px;
        position: relative;
        overflow: hidden;
    }

    .NEWS02:hover img {
        transform: scale(1.05, 1.05);
        transition: 1s;
    }

    .NEWS02 p {
        margin: 0 0 5px 0;
        font-size: 18px;
        font-weight: 500;
        letter-spacing: 0.1rem;
    }

    .NEWS02 img {
        width: 100%;
        transition: 1s;
    }


    /* logoBox */
    .index_logoBox {
        padding: 0 100px 0 0;
        position: relative;
        /* border: 1px solid red; */
    }

    .index_logoBox p {
        font-size: 14px;
        letter-spacing: 0.2rem;
        text-align: right;
        margin: 0;

        /* border: 1px solid red; */
    }

    .index_foot {
        width: 65%;
        position: relative;
        opacity: 0.1;
        margin: 20px 0 0 0;

        animation: prints 12s steps(12, end) infinite;

        /* border: 1px solid red; */
    }

    @keyframes prints {
        to {
            opacity: 1;
            transition: .7s;
        }
    }

    .index_foot img {
        width: 100%;
    }

    .index_foot_cover {
        position: absolute;
        top: 0px;
        left: 0;
        background: url(./img/nav_bcc.png);
        height: 100%;
        width: 100%;
        animation: walk 12s steps(12, end) infinite;
    }

    @keyframes walk {
        to {
            transform: translateY(1050px);
        }
    }



    /* index_explore */
    .index_exploreArea {
        width: 100%;
        max-height: 800px;
        overflow: hidden;

        padding: 80px 0 80px 0;
        background-image: url(./img/nav_bcc2.png);

        position: relative;
    }

    .index_exploreArea a {
        color: #000;
    }

    .index_exploreBox {
        height: 640px;
    }

    .index_ep2:hover .exImg2 {
        height: 640px;
        transition: .6s;
    }

    .index_ep2:hover .epWord2 {
        color: #fff;
        transition: .4s;
    }

    .index_ep2:hover .epLine2 {
        width: 250px;
        background-color: #fff;
        transition: .6s;
    }

    .index_ep2:hover .exImg2::before {
        height: 100%;
        opacity: 1;
        transition: .6s;
    }

    .index_explore {
        /* width: 450px; */
        margin-left: 100px;

        position: relative;

        /* border: 1px solid red; */
    }

    .index_exImg {
        max-width: 450px;
        max-height: 640px;
        overflow: hidden;
        position: relative;
    }

    .exImg1::before {
        content: "";
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        background-color: rgba(0, 0, 0, 0.4);
        z-index: 1;
        opacity: 1;
        transition: .6s;
    }

    .exImg1.no-before::before {
        content: "";
        width: 100%;
        height: 40%;
        position: absolute;
        top: 0;
        left: 0;
        background-color: rgba(0, 0, 0, 0.4);
        z-index: 1;
        opacity: 0;
        transition: .6s;
    }

    .exImg2::before {
        content: "";
        width: 100%;
        height: 40%;
        position: absolute;
        top: 0;
        left: 0;
        background-color: rgba(0, 0, 0, 0.4);
        z-index: 1;
        opacity: 0;
        transition: .6s;
    }

    .exImg2 {
        height: 230px;
        transition: .6s;
    }

    .index_exImg img,
    .index_exImg img {
        width: 100%;
    }

    .index_epWordBox {
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;

        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;

        z-index: 2;

        /* border: 1px solid red; */
    }

    .epWord1 p,
    .epWord2 p {
        font-weight: 700;
        font-size: 24px;
        letter-spacing: 0.2rem;
        margin: 0;
        transition: .4s;
    }

    .epWord1 span,
    .epWord2 span {
        width: 75%;
        text-align: center;
        margin-top: 10px;
        font-size: 15px;
        transition: .6s;
    }

    .epWord1 {
        color: #fff;
    }

    .epLine1 {
        width: 250px;
        height: 1px;
        background-color: #fff;
    }

    .epLine2 {
        width: 40px;
        height: 1px;
        background-color: #cc543a;
        transition: .6s;
    }



    .index_exploreTitle {
        max-width: 550px;
        position: absolute;
        right: -150px;

        display: flex;
        align-items: center;
        justify-content: center;

        /* border: 1px solid red; */
    }

    .index_exploreTitle img {
        width: 100%;
        transform: rotate(80deg);

        animation: rotate 19s linear infinite;

        /* border: 1px solid red; */
    }

    @keyframes rotate {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }

    .index_exploreTitle p {
        position: absolute;
    }


    /* index_service & trip */
    .index_serviceTitle,
    .index_tripTitle {
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;

        border: 1px solid #ccc;
    }

    .indrex_serviceContainer,
    .indrex_tripContainer {
        /* width: 100%; */
        padding: 0;
        display: flex;
        flex-direction: column;
        align-items: flex-end;

    }

    .index_serviceBox,
    .index_trip {
        width: 100%;
        align-items: center;

        border-top: 1px solid #ccc;
    }

    .index_trip {
        border-bottom: 1px solid #ccc;
    }

    .index_lightBox,
    .index_tripWordBox {
        position: relative;
        right: 0;
        transition: .6s;
        z-index: 2;
    }

    .index_light:hover .index_lightBox,
    .index_trip:hover .index_tripWordBox {
        right: 280px;
        color: #fff;
        transition: .6s;
    }

    .index_light:hover .line-r,
    .index_trip:hover .line-r {
        width: 100px;
        background-color: #fff;
        right: 230px;
        transition: .8s;
    }

    .serviceImg,
    .tripImg {
        max-width: 800px;
        position: relative;
    }

    .serviceImg::before,
    .tripImg::before {
        content: "";
        width: 0%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        z-index: 1;
        background: rgba(0, 0, 0, 0.4);

        opacity: 0;
        transition: .6s;
    }

    .index_lots:hover .serviceImg::before {
        width: 100%;
        opacity: 1;
        transition: .6s;
    }

    .index_light:hover .serviceImg::before,
    .index_trip:hover .tripImg::before {
        width: 100%;
        opacity: 1;
        transition: .6s;
    }


    .index_serviceBox img,
    .index_trip img {
        width: 100%;

    }

    .index_serviceWordBox,
    .index_tripWordBox {
        margin: 0 10px;
    }

    .index_serviceWordBox p,
    .index_tripWordBox p {
        font-family: 'Noto Serif TC', serif;
        font-size: 20px;
        letter-spacing: 0.1rem;
    }

    .index_serviceWordBox span,
    .index_tripWordBox span {
        letter-spacing: 0.1rem;
    }

    .line-l,
    .line-r {
        width: 50px;
        height: 1px;
        background-color: #cc543a;
        margin-left: 140px;
    }

    .line-l {
        position: relative;
        left: 0;
        transition: .8s;
    }

    .line-r {
        position: relative;
        right: 0;
        transition: .8s;
    }


    .index_lotsBox {
        text-align: right;
        position: relative;
        left: 0;
        transition: .6s;
        z-index: 2;
    }

    .index_lots:hover .index_lotsBox {
        left: 250px;
        color: #fff;
        transition: .6s;
    }

    .index_lots:hover .line-l {
        width: 100px;
        background-color: #fff;
        left: 90px;
        transition: .8s;
    }


    /* index_goTop */
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



    /* index_shop */
    .index_shopArea {
        padding: 150px 0 150px 0;
    }

    .index_shopWordBox {
        /* width: 10%; */
        margin: 0 40px;
        padding: 0;
        text-align: right;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .longArrow {
        position: relative;
        left: 0;
        transition: .5s;
    }

    .index_shopTitle:hover .longArrow {
        left: 20px;
        transition: .5s;
    }

    .longArrow svg {
        margin: 0 100px 0 0;
    }

    .index_shopinfo span {
        display: block;
    }

    .index_productBox {
        width: 1260px;
        display: flex;
        flex-wrap: wrap;
        position: relative;
    }

    .index_productImgBox {
        width: 33.3%;
        filter: grayscale(0.1);
        position: relative;
        padding: 1px;

        overflow: hidden;
    }

    .index_productImgBox::before {
        content: "";
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 1;
        opacity: 0;

        transition: 1s;
    }

    .index_productImgBox:hover::before {
        opacity: 1;
    }

    .index_productImgBox:hover img {
        transform: scale(1.05, 1.05);
        transition: 1s;
    }

    .index_productImgBox img {
        width: 100%;
        transition: 1s;
    }

    .index_productName {
        position: absolute;
        top: 0;
        left: 0;

        width: 100%;
        line-height: 323px;
        text-align: center;

        color: #fff;
        font-size: 20px;
        font-weight: 600;
        font-family: 'Noto Serif TC', serif;
        letter-spacing: 0.1rem;
        z-index: 2;

        opacity: 0;

        /* border: 1px solid red; */
    }

    .index_productImgBox:hover .index_productName {
        opacity: 1;
    }

    .index_shopLink {
        text-align: center;
        margin: 30px 0 0 0;
        display: none;
        /* border: 1px solid red; */
    }

    .index_shopLink a {
        color: #000;
        text-decoration: none;
    }


    /* footer */
    .index_footer {
        background-image: url(./img/nav_bcc2.png);
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;

        padding: 50px 0;
    }

    .index_footerWord p {
        letter-spacing: 0.2rem;
        color: #000;
    }

    .index_footerMedia svg {
        width: 75%;
        padding: 0 10px;
    }



    /* RWD */

    @media (max-width: 770px) {

        /* banner */
        .index_bannerTitle p {
            display: none;
        }

        .index_wordTitle {
            right: 0px;
            left: 50px;
        }

        .index_wordTitle img {
            width: 80%;
        }

        /* nav */
        .nav_burgurBar {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .nav_index_navbar_com {
            display: none;
        }

        .nav_overlayNav {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }





        /* logo */
        .index_logoBox p {
            display: none;
        }

        .index_logoBox {
            width: 50%;
            padding: 30px 0 0 0;
        }

        .logoImg {
            justify-content: center;
        }

        /* news */
        .index_newsTitle {
            text-align: center;
        }

        .index_newsArea {
            flex-direction: column-reverse;
            justify-content: center;
            align-items: center;
        }

        .index_newsBox {
            margin: 30px 0 0 0;
        }

        .index_newsBox {
            width: 90%;
        }

        .NEWS01 {
            flex-direction: column;
            align-items: flex-start !important;
        }

        .NEWS01 p,
        .NEWS02 p {
            font-size: 14px;
            margin: 0 20px 0 0;
        }

        .NEWS01 span,
        .NEWS02 span {
            font-size: 14px;
            /* margin: 0 20px 0 0; */
        }

        .index_news_container02 {
            flex-direction: column;
            align-items: center;
        }

        .NEWS02 {
            margin: 0 0 20px 0;

        }

        .index_foot {
            display: none;
        }


        /* explore */
        .index_exploreArea {
            /* padding: 0; */
            flex-direction: column-reverse;
            /* border: 1px solid red; */
        }

        .index_exploreBox {
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .index_exploreBox span {
            display: none;
        }

        .index_explore {
            margin: 0;
            padding: 0 18px 30px 18px;
        }

        .index_exImg {
            max-height: 300px;
        }

        .exImg2 {
            height: 300px;
        }


        .exImg1::before {
            height: 100%;
        }

        .index_ep2:hover .exImg2 {
            height: 300px;
        }

        .exImg2::before {
            height: 100%;
            opacity: 1;
        }

        .exImg1.no-before::before {
            height: 100%;
            opacity: 1;
        }

        .epWord1 p,
        .epWord2 p {
            color: #fff;
        }

        .epLine1 {
            width: 40px;
            background-color: #cc543a;
        }

        .index_exploreTitle {
            position: static;
            /* border: 1px solid red; */
        }

        .titleImgBox img {
            display: none;
        }

        .index_exploreTitle p {
            position: static;
            font-size: 22px;
            padding-bottom: 15px;
        }

        /* SERVICE */
        .index_serviceTitle,
        .index_tripTitle {
            display: none;

        }

        .index_light {
            background-image: url(./img/index_light.jpg);
            background-size: cover;
            text-align: center;

            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;

            margin-bottom: 5px;
        }

        .index_lots {
            background-image: url(./img/index_poem.jpg);
            background-size: cover;

            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;

            margin-bottom: 5px;
        }

        .index_lotsBox {
            text-align: center;
        }


        .index_trip {
            background-image: url(./img/index_tour.jpg);
            background-size: cover;
            text-align: center;

            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .index_serviceBox,
        .index_tripBox {
            position: relative;
        }

        .index_light::before,
        .index_lots::before,
        .index_trip::before {
            content: "";
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            z-index: 1;
            background: rgba(0, 0, 0, 0.2);
        }

        .serviceImg,
        .tripImg {
            display: none;
        }

        .index_serviceWordBox,
        .index_tripWordBox {
            margin: 50px 15px;
            /* border: 1px solid red; */
        }

        .index_serviceWordBox p,
        .index_tripWordBox p {
            font-size: 18px;
            margin: 0;
            color: #fff;
        }

        .index_serviceWordBox span,
        .index_tripWordBox span {
            font-size: 10px;
            color: #fff;
        }

        .line-r,
        .line-l {
            display: none;
        }


        /* shop */
        .index_shopTitle {
            margin: 0 0 30px 0;
        }

        .index_shopArea {
            flex-direction: column;
            align-items: center;
            padding: 80px 0;

        }

        .index_productBox {
            width: 375px;
        }

        .index_productImgBox {
            width: 50%;
            padding: 0;
            /* margin: 3px 10px 5px 0; */
        }

        .index_productName {
            display: none;
        }

        .index_shopWordBox {
            margin: 0;
            text-align: center;
        }

        .longArrow {
            display: none;
        }

        .index_shopinfo {
            display: none;
        }

        .index_shopLink {
            display: block;
        }
    }
</style>


</head>

<body>

    <!-- <div class="mouse_box"></div> -->

    <div class="index_banner">
        <ul class="index_bannerBox">
            <li><img src="./img/index_bannerImg(1).jpg" alt=""></li>
            <li><img src="./img/index_bannerImg(2).jpg" alt=""></li>
            <li><img src="./img/index_bannerImg(3).jpg" alt=""></li>
            <li><img src="./img/index_bannerImg(4).jpg" alt=""></li>
            <li><img src="./img/index_bannerImg(5).jpg" alt=""></li>
        </ul>

        <div class="index_bannerTitle">
            <img src="./img/index_bannerTitle.png" alt="" class="text-focus-in">
            <div class="index_bannerTitle_info">
                <p class="index_bannerTitle_info01">或許，對於長年在台灣生活的我們，寺廟對我們太平常了，大部分人都不會注意到寺廟</p>
                <p class="index_bannerTitle_info02">內精緻的藝術，然而寺廟建築絕對是在地歷史與文化的象徵。先民渡海來台，帶來了傳</p>
                <p class="index_bannerTitle_info03">統文化習俗，同時也播下了信仰的種子，逐漸發芽、進而開花與結果。</p>
            </div>
        </div>

        <div class="index_storyBox d-flex justify-content-end align-items-center">
            <div class="index_bannerLine"></div>
            <div class="index_rightArrow">
                <svg xmlns="http://www.w3.org/2000/svg" width="12.021" height="22.627" viewBox="0 0 12.021 22.627">
                    <g id="Group_3" data-name="Group 3" transform="translate(-1688.793 -183.58)">
                        <line id="Line_23" data-name="Line 23" y2="15" transform="translate(1700.107 194.893) rotate(45)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="1" />
                        <line id="Line_24" data-name="Line 24" y1="15" transform="translate(1689.5 184.287) rotate(-45)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="1" />
                    </g>
                </svg>
            </div>
            <p class="index_storyBtn"><a href="<?= WEB_ROOT ?>/discover_temple.php">STORY</a></p>
        </div>

        <ul class="slider_dots">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li class="slider_num">01</li>
        </ul>

        <div class="index_slideDown btnCursor">
            <svg class="arrows">
                <path class="a1" d="M0 0 L30 32 L60 0"></path>
                <path class="a2" d="M0 20 L30 52 L60 20"></path>
                <path class="a3" d="M0 40 L30 72 L60 40"></path>
            </svg>
        </div>

        <div class="index_wordTitle">
            <img src="./img/nav_wordTitle.png" alt="">
        </div>
    </div>

    <!-- 導航用代碼包含彈窗 -->
    <?php include __DIR__ . '/parts/navbar1.php'; ?>

    <div class="index_newsArea d-flex justify-content-between">
        <div class="index_newsBox col-sm-6">
            <div class="index_newsTitle index_title">NEWS</div>
            <div class="index_news_container01 mt-4">
                <a href="<?= WEB_ROOT ?>/news_detail.php?sid=18">
                    <div class="NEWS01 d-flex align-items-center">
                        <p>May 28, 2021</p>
                        <span>統一獅打造宮廟主題日，台南3大廟共襄盛舉</span>
                    </div>
                </a>

                <a href="<?= WEB_ROOT ?>/news_detail.php?sid=18">
                    <div class="NEWS01 d-flex align-items-center">
                        <p>Apr 22, 2021</p>
                        <span>寶雲寺梁皇寶懺法會，為眾生祈求大平安</span>
                    </div>
                </a>

                <a href="<?= WEB_ROOT ?>/news_detail.php?sid=12">
                    <div class="NEWS01 d-flex align-items-center">
                        <p>Mar 14, 2021</p>
                        <span>香山天后宮整修完工，6/1廟埕相揪來看戲！</span>
                    </div>
                </a>
            </div>
            <div class="index_news_container02 d-flex justify-content-between">
                <div class="NEWS02 btnCursor">
                    <img class="mb-3" src="./img/indexNews(1).jpg" alt="">
                    <p>Mar 01, 2021</p>
                    <span>理成了兩所好畫隊，下也去何不醫況</span>
                </div>
                <div class="NEWS02 btnCursor">
                    <img class="mb-3" src="./img/indexNews(2).jpg" alt="">
                    <p>Feb 22, 2021</p>
                    <span>理成了兩所好畫隊，下也去何</span>
                </div>
                <div class="NEWS02 btnCursor">
                    <img class="mb-3" src="./img/indexNews(3).jpg" alt="">
                    <p>Feb 03, 2021</p>
                    <span>理成了兩所好畫隊，下也去何不醫</span>
                </div>
            </div>
        </div>


        <div class="index_logoBox">
            <div class="logoImg d-flex align-items-end">
                <p>
                    Perspective and a fresh. </br>
                    Interpretation of prayer</br>
                    through a variety of experimental.
                </p>
                <svg xmlns="http://www.w3.org/2000/svg" width="231.167" height="188.333" viewBox="0 0 231.167 188.333">
                    <g id="圖層_2" data-name="圖層 2" transform="translate(0 -0.005)">
                        <g id="圖層_2-2" data-name="圖層 2" transform="translate(0 0.005)">
                            <rect id="Rectangle_10" data-name="Rectangle 10" width="195.786" height="10.194" transform="translate(16.183 63.101)" fill="none" />
                            <path id="Path_12" data-name="Path 12" d="M40.642,49.013a2.269,2.269,0,0,1-.512,0A.747.747,0,0,1,40.642,49.013Z" transform="translate(15.376 23.789)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_13" data-name="Path 13" d="M35.026,44c-.152,0-.65.1-.595,0Z" transform="translate(13.191 21.375)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_14" data-name="Path 14" d="M34.437,43.913h-.609A3.9,3.9,0,0,1,34.437,43.913Z" transform="translate(12.95 21.326)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_15" data-name="Path 15" d="M32.685,44.67a1.383,1.383,0,0,1-.595,0S32.5,44.684,32.685,44.67Z" transform="translate(12.295 21.7)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_16" data-name="Path 16" d="M32.014,43.871a3.389,3.389,0,0,1-1.024.069,5.048,5.048,0,0,1,1.024-.069Z" transform="translate(11.874 21.311)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_17" data-name="Path 17" d="M30.134,47.8a11.494,11.494,0,0,1-1.964,0C28.806,47.86,29.539,47.749,30.134,47.8Z" transform="translate(10.793 23.216)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_18" data-name="Path 18" d="M29.3,46.092c-.65.152-1.812,0-2.642.083-.124-.124,1.217,0,1.452-.111a5.116,5.116,0,0,1,.512,0,2.227,2.227,0,0,1,.678.028Z" transform="translate(10.213 22.373)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_19" data-name="Path 19" d="M22.912,45.82s0,.111-.263.1-.083,0-.069-.1Z" transform="translate(8.624 22.261)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_20" data-name="Path 20" d="M21.365,46.43a9.156,9.156,0,0,1-2.393,0H18.28C19.138,46.43,20.189,46.485,21.365,46.43Z" transform="translate(6.866 22.556)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_21" data-name="Path 21" d="M20.289,45.539a2.324,2.324,0,0,1-.609,0A1.48,1.48,0,0,1,20.289,45.539Z" transform="translate(7.54 22.107)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_22" data-name="Path 22" d="M19.741,47.889a4.149,4.149,0,0,1-.761,0,2.324,2.324,0,0,1,.761,0Z" transform="translate(7.272 23.249)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_23" data-name="Path 23" d="M19.934,45.83c-.207.069-.678,0-.941.1S19.6,45.844,19.934,45.83Z" transform="translate(7.259 22.266)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_24" data-name="Path 24" d="M19.667,45.585a5.393,5.393,0,0,1-1.037,0,7.444,7.444,0,0,1,1.037,0Z" transform="translate(7.138 22.136)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_25" data-name="Path 25" d="M19.109,48.31c0,.083-.373,0-.609.1C18.555,48.324,18.9,48.338,19.109,48.31Z" transform="translate(7.088 23.471)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_26" data-name="Path 26" d="M19.141,47.889a11.134,11.134,0,0,1-1.7,0,11.508,11.508,0,0,1,1.7,0Z" transform="translate(6.682 23.25)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_27" data-name="Path 27" d="M18.912,45.623a5.132,5.132,0,0,1-1.452,0C17.861,45.581,18.456,45.692,18.912,45.623Z" transform="translate(6.69 22.159)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_28" data-name="Path 28" d="M17.882,46.463a4.467,4.467,0,0,1-.692,0C17.149,46.435,17.592,46.477,17.882,46.463Z" transform="translate(6.586 22.566)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_29" data-name="Path 29" d="M17.338,46.285a2.13,2.13,0,0,1-.678,0,3.416,3.416,0,0,1,.678,0Z" transform="translate(6.383 22.477)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_30" data-name="Path 30" d="M16.79,46.07c-.1,0-.733.083-.595,0s.166,0,.166,0A4.152,4.152,0,0,1,16.79,46.07Z" transform="translate(6.198 22.364)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_31" data-name="Path 31" d="M15.32,47.454C15.749,47.343,16.468,47.454,15.32,47.454Z" transform="translate(5.87 23.029)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_32" data-name="Path 32" d="M14.96,48.107a7.469,7.469,0,0,1-1.12,0,6.142,6.142,0,0,1,1.12,0Z" transform="translate(5.303 23.358)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_33" data-name="Path 33" d="M14.574,48.2c.124.083-.567,0-.429,0Z" transform="translate(5.413 23.415)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_34" data-name="Path 34" d="M14.035,49.16a1.549,1.549,0,0,1-.595,0A1.2,1.2,0,0,1,14.035,49.16Z" transform="translate(5.15 23.865)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_35" data-name="Path 35" d="M12.323,49.07C11.618,49.181,11.369,49.07,12.323,49.07Z" transform="translate(4.482 23.839)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_36" data-name="Path 36" d="M26.429,49.1a.661.661,0,0,0-.443.1,6.791,6.791,0,0,0-1.107,0A7.618,7.618,0,0,1,26.429,49.1Z" transform="translate(9.533 23.854)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_37" data-name="Path 37" d="M20.046,47.615h-.415s.083,0,.083-.069H18.69s.1,0,.1-.069c-.484.138-1.037-.083-2.047,0a37.2,37.2,0,0,1,3.928,0c-.124.1-.858,0-.954.111S20.2,47.491,20.046,47.615Z" transform="translate(6.414 23.039)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_38" data-name="Path 38" d="M18.609,45.862H18.18C18.139,45.862,19.411,45.848,18.609,45.862Z" transform="translate(6.965 22.275)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_39" data-name="Path 39" d="M14.4,46.11v-.083a10.179,10.179,0,0,1-1.77,0,23.51,23.51,0,0,0,2.476,0h.415c1.508-.166,3.14,0,4.7-.1-.705.263-2.3-.1-3.084.18h.083a16.777,16.777,0,0,0-2.822,0Z" transform="translate(4.839 22.316)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_40" data-name="Path 40" d="M14.459,48.354a1.137,1.137,0,0,0-.512.083C13.808,48.52,14.293,48.284,14.459,48.354Z" transform="translate(5.334 23.486)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_41" data-name="Path 41" d="M184.586,52.489c.373,0,.8-.083,1.189-.083a26.362,26.362,0,0,0,2.766,0c.982-.1,1.632-.18,2.49-.207a5.831,5.831,0,0,0,1.3-.083,10.969,10.969,0,0,0,2.835-.3c.885-.166,1.992-.263,2.766-.429h.429A51.7,51.7,0,0,1,203.895,50a2.766,2.766,0,0,1,.733-.539c.166-.083.567-.138.705-.221.47-.318,0-.705.927-.941,0-.083-.111-.1-.152-.152,0-.622-.318-1.134-.111-1.618-.595-.29-.47-.609-.941-.885a8.6,8.6,0,0,0-1.231-.484c-.373-.166-.871-.318-1.231-.5,0-.194-.539-.221-.65-.387-.664-.111-1.162-.277-1.84-.387,0,0-.221-.1-.235-.166a28.065,28.065,0,0,0-4.786-.844h-.761a21.881,21.881,0,0,1-4.412-.3H189.4a3.748,3.748,0,0,0-1.591-.332c-.221,0-.622.166-1.12.194-.747,0-1.452-.18-2.116-.152-.3,0-.636.166-.954.194a25.147,25.147,0,0,1-3.237,0,8.824,8.824,0,0,0-1.176-.138c-.387,0-.678.152-.636.346-1.093.415-3.887.1-5.533.277a34.452,34.452,0,0,0-3.6.069h-.761c-.249,0-.941.083-1.383.111a16.163,16.163,0,0,0-2.393.111,11.882,11.882,0,0,0-2.9,0c-.36,0-.705-.083-1.107-.083h-1.024c-.373,0-.747-.083-1.107-.083h-.678a7.037,7.037,0,0,0-.761,0c-.318,0-.636.111-.954.111a29.045,29.045,0,0,0-3.5.124c-1.978-.152-3.707.1-6.044,0a9.171,9.171,0,0,1-1.632,0h-.346c-1.217-.083-2.5.138-3.748,0a.54.54,0,0,1-.18,0,37.18,37.18,0,0,0-5.284,0,31.29,31.29,0,0,0-3.582,0H126.6c-.332,0-.636.083-.954.1h-1.784c-2.338.138-5.035,0-7.082,0-.636,0-1.176.083-1.881.111-1.176,0-2.393-.083-3.582,0l-.858.069h-2.13c-1.826,0-3.652.152-5.367,0-2.2.166-5.394.111-7.939.138a7.885,7.885,0,0,1-1.715,0c-1.812,0-4.149.207-6.058.1-8.022.249-16.39.138-24.33.415a8.4,8.4,0,0,0-2.13,0,3.32,3.32,0,0,0-.761-.083,31.493,31.493,0,0,1-3.5,0c-.318.166-1.079,0-1.549.166-.207-.083.277-.069-.083-.124a33.429,33.429,0,0,1-4.786.235h-.761c-2.241,0-3.845.318-5.754.429a3.029,3.029,0,0,0-1.107,0c.346,0,.788,0,.761.138a6.487,6.487,0,0,0-1.715.111,11.55,11.55,0,0,0-1.715,0c-.152,0,.152.124-.18.111H37.266a4.91,4.91,0,0,1-1.632.083c-.29,0,.318.1.069.124a14.178,14.178,0,0,1-2.3,0,1.881,1.881,0,0,1-.609.138c-.207,0,0-.111-.249-.069s.221.111.152.194c-.4,0-.332.111-.526.18a6.307,6.307,0,0,0-1.466.111H29.091a8.948,8.948,0,0,1-1.12.124c-.4,0-.733-.1-1.19-.083-.235,0,.166.083-.18.1a42.061,42.061,0,0,0-4.274.207c1.77-.194,3.057,0,4.62-.152.235.111.692-.069.927.083.1,0-.263-.111.1-.111a1.093,1.093,0,0,0,.332,0c-.221.138.111.138.235.235h3.5c.221,0-.138-.083.1-.111h1.286c.152.1.5.138.318.277-1.549,0-3.652.18-5.533.194a4.675,4.675,0,0,0-1.383,0c.816,0,1.48.124,2.2.138s1.923-.138,2.766-.1h.595a1.935,1.935,0,0,1,.692,0c.207.083.221,0,.415,0s.692-.1,1.12-.1a16.651,16.651,0,0,0,2.2,0c.152,0,.083.152-.1.166h-2.2c.111,0,.18,0,.166.083a1.646,1.646,0,0,0-.595,0c.705,0,.636.194.4.277H29.119a1.508,1.508,0,0,1-.526.138H23.379c2.006.138,4.149,0,6.4,0,.083,0,0,.083.235.069,1-.069,2.144,0,2.918-.069.332.1.664.207.982.332,2.434-.1,4.149.346,6.528.346a2.418,2.418,0,0,1,.249.152c-.194,0-.318.138-.526.194a7.29,7.29,0,0,1-1.107,0c-1.964.221-4.744,0-7.179.194-.3.124-.069.221.138.332,1.176.069,2.241-.111,3.486,0,.443.29,0,.5-.982.512H29.161c-4.675.166-9.295.1-14.081.235,2.656,0,5.118-.1,7.5,0a.343.343,0,0,1,.263-.083h7c.858.18,2.517,0,3.389.152-.221.29-.927.415-1.826.484.913,0,1.77.083,2.545.1s1.729-.069,2.047,0c.069,0-.069.083.069.083h.526a4.812,4.812,0,0,1,.678,0,3.168,3.168,0,0,1,.844.083H52.024c.318,0-.1.1.332.1,2.476.069,5.09.111,7.746.138.194,0,0,.111.332.1s.277-.1.595-.1a1.784,1.784,0,0,1,.512.138c3.029.083,6.155,0,9.295,0h8.6c2.185,0,4.274-.124,6.238,0,2.614-.083,4.883-.069,7.331-.083h5.2c.263,0,.567-.069.858-.069s.913.083,1.383.083c1.217,0,2.462-.1,3.679-.1h7.759c1.383,0,2.9-.111,4.26-.1,1.826,0,3.693.138,5.533,0s4.523,0,6.473,0a43.391,43.391,0,0,0,5.021,0h.512c2.766.152,5.726-.111,7.925,0a11.507,11.507,0,0,1,2.3,0h5.629a33.666,33.666,0,0,0,4.26,0,30.707,30.707,0,0,0,4.26.083c2.268.18,4.564,0,6.916,0a12.739,12.739,0,0,0,2.3,0,22.907,22.907,0,0,0,2.766.069c1,0,2.019.1,3.057.124a25.712,25.712,0,0,1,4.412.207c.512.567,1.48-.263,2.656-.152.622.111.553.277.816.484a7.026,7.026,0,0,0,1.618,0,14.675,14.675,0,0,0,1.992,1.093Zm-149.2-6.1H35.3C35.482,46.224,35.883,46.4,35.385,46.39Zm-.18,0a15.035,15.035,0,0,1-2.213,0c-.138,0,.124.138-.111.18a5.021,5.021,0,0,0-1.176-.111c0-.207,1-.083,1.051-.263a1.535,1.535,0,0,0,.775,0H35.15c-.166.138.111.111.055.249Z" transform="translate(5.778 20.788)" fill="#cc543a" fill-rule="evenodd" />
                            <rect id="Rectangle_11" data-name="Rectangle 11" width="10.194" height="107.969" transform="translate(47.041 76.602)" fill="none" />
                            <path id="Path_42" data-name="Path 42" d="M34.655,61.94a.581.581,0,0,1,0-.29.263.263,0,0,1,0,.29Z" transform="translate(13.271 29.961)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_43" data-name="Path 43" d="M39.662,58.843c0-.1-.1-.36,0-.332a2.13,2.13,0,0,1,0,.332Z" transform="translate(15.18 28.435)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_44" data-name="Path 44" d="M39.76,58.506v-.332A1.177,1.177,0,0,1,39.76,58.506Z" transform="translate(15.234 28.265)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_45" data-name="Path 45" d="M39.009,57.552a.456.456,0,0,1,0-.332S39.009,57.441,39.009,57.552Z" transform="translate(14.934 27.809)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_46" data-name="Path 46" d="M39.812,57.157a.941.941,0,0,1,0-.567A1.577,1.577,0,0,1,39.812,57.157Z" transform="translate(15.237 27.51)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_47" data-name="Path 47" d="M35.882,56.143a3.569,3.569,0,0,1,0-1.093C35.826,55.41,35.937,55.811,35.882,56.143Z" transform="translate(13.732 26.778)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_48" data-name="Path 48" d="M37.613,55.686a9.638,9.638,0,0,1-.083-1.466c.124,0,0,.678.111.8a.982.982,0,0,1,0,.29C37.6,55.437,37.682,55.548,37.613,55.686Z" transform="translate(14.38 26.387)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_49" data-name="Path 49" d="M37.878,52.145c-.069,0-.111,0-.1-.152a.124.124,0,0,1,.1,0Z" transform="translate(14.475 25.258)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_50" data-name="Path 50" d="M37.264,51.307a2.766,2.766,0,0,1,0-1.383v-.373C37.264,50.021,37.209,50.671,37.264,51.307Z" transform="translate(14.244 24.038)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_51" data-name="Path 51" d="M38.147,50.712a.6.6,0,0,1,0-.332A1.312,1.312,0,0,1,38.147,50.712Z" transform="translate(14.607 24.483)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_52" data-name="Path 52" d="M35.79,50.4V49.99a.705.705,0,0,1,0,.415Z" transform="translate(13.713 24.296)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_53" data-name="Path 53" d="M37.875,50.509c-.069-.111,0-.373-.1-.512S37.861,50.329,37.875,50.509Z" transform="translate(14.464 24.291)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_54" data-name="Path 54" d="M38.11,50.371a1.66,1.66,0,0,1-.069-.581,2.31,2.31,0,0,1,.069.581Z" transform="translate(14.574 24.204)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_55" data-name="Path 55" d="M35.387,50.105c-.083,0-.083-.207-.1-.346S35.36,49.939,35.387,50.105Z" transform="translate(13.521 24.167)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_56" data-name="Path 56" d="M35.8,50.081a3.417,3.417,0,0,1,0-.941A4.232,4.232,0,0,1,35.8,50.081Z" transform="translate(13.704 23.898)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_57" data-name="Path 57" d="M38.013,49.952a1.743,1.743,0,0,1,0-.8C38.124,49.371,38.013,49.689,38.013,49.952Z" transform="translate(14.547 23.899)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_58" data-name="Path 58" d="M37.233,49.387A1.466,1.466,0,0,1,37.15,49C37.261,49,37.219,49.221,37.233,49.387Z" transform="translate(14.234 23.814)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_59" data-name="Path 59" d="M37.392,49.114v-.373A2.112,2.112,0,0,0,37.392,49.114Z" transform="translate(14.324 23.67)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_60" data-name="Path 60" d="M37.639,48.785s-.083-.415,0-.332,0,.083-.083.1S37.666,48.647,37.639,48.785Z" transform="translate(14.382 23.542)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_61" data-name="Path 61" d="M36.23,48C36.341,48.235,36.23,48.636,36.23,48Z" transform="translate(13.882 23.327)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_62" data-name="Path 62" d="M35.576,47.772a2.3,2.3,0,0,1,0-.622,2.393,2.393,0,0,1,0,.622Z" transform="translate(13.623 22.921)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_63" data-name="Path 63" d="M35.487,47.558c-.083,0-.083-.3,0-.235Z" transform="translate(13.573 22.99)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_64" data-name="Path 64" d="M34.528,47.262a.512.512,0,0,1,0-.332A.885.885,0,0,1,34.528,47.262Z" transform="translate(13.219 22.806)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_65" data-name="Path 65" d="M34.614,46.315C34.5,45.928,34.614,45.79,34.614,46.315Z" transform="translate(13.244 22.341)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_66" data-name="Path 66" d="M34.6,54.108a2.367,2.367,0,0,0-.1-.249c.1-.138,0-.4,0-.609C34.666,53.5,34.528,53.748,34.6,54.108Z" transform="translate(13.219 25.895)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_67" data-name="Path 67" d="M36.125,50.606v-.235c0-.138,0,0,.083,0V49.8h0c-.138-.263.083-.581,0-1.134a14.522,14.522,0,0,1,0,2.172c-.1,0,0-.484-.111-.526S36.25,50.689,36.125,50.606Z" transform="translate(13.82 23.705)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_68" data-name="Path 68" d="M37.81,49.785h0V49.55C37.81,49.523,37.824,50.173,37.81,49.785Z" transform="translate(14.487 24.081)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_69" data-name="Path 69" d="M37.61,47.462h.1a3.167,3.167,0,0,1,0-.982c.069.36-.1,1.12,0,1.383s0,.166,0,.235c.166.83,0,1.729.1,2.586-.277-.387.1-1.259-.18-1.7h0A5.7,5.7,0,0,0,37.61,47.462Z" transform="translate(14.41 22.696)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_70" data-name="Path 70" d="M35.353,47.491a.426.426,0,0,0-.1-.277C35.159,47.131,35.422,47.408,35.353,47.491Z" transform="translate(13.5 22.936)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_71" data-name="Path 71" d="M34,141.329c0,.207.1.429.1.65a13.721,13.721,0,0,0,0,1.508c0,.456.166.9.194,1.383a5.279,5.279,0,0,0,.1.719c.083.692,0,1.259.3,1.563s.263,1.093.429,1.521v.235a19.6,19.6,0,0,1,1.383,3.029,2.449,2.449,0,0,1,.539.4c.083.1.138.318.221.387.3.263.705,0,.941.526.083,0,.1,0,.152-.083a9.6,9.6,0,0,1,1.618,0c.277-.332.609-.263.871-.512a6,6,0,0,0,.484-.678c.194-.235.332-.484.512-.692.194,0,.221-.29.373-.346.124-.373.277-.65.4-1.024,0,0,.1-.124.166-.124a9.571,9.571,0,0,0,.844-2.642v-.415a6.487,6.487,0,0,1,.3-2.434v-.277a1.48,1.48,0,0,0,.332-.885c0-.124-.166-.346-.194-.622s.18-.788.138-1.162c0-.166-.152-.346-.18-.526a7.649,7.649,0,0,1,0-1.784c0-.3.166-.429.138-.65s-.152-.373-.346-.346c-.415-.609-.1-2.158-.277-3.071a10.444,10.444,0,0,0,0-1.978v-.429c0-.138-.083-.512-.111-.8a9.3,9.3,0,0,0-.111-1.383c.249-.622,0-1.079,0-1.6,0-.194.083-.387.083-.609s-.069-.36-.069-.567.083-.415.083-.609v-.373a2.144,2.144,0,0,0,0-.429c0-.166-.111-.346-.111-.512a8.893,8.893,0,0,0-.124-1.936c.152-1.093-.1-2.047,0-3.333a2.766,2.766,0,0,1,0-.9s0,0,0-.194a10.262,10.262,0,0,1,0-2.061.249.249,0,0,1-.069-.1,11.37,11.37,0,0,0,0-2.918,9.559,9.559,0,0,0,0-1.978v-3c0-.18-.083-.36-.1-.526s0-.65,0-.982a37.347,37.347,0,0,1,0-3.914c0-.346-.083-.636-.111-1.037a15.5,15.5,0,0,0,0-1.964,1.145,1.145,0,0,0-.069-.484V99.2a21.411,21.411,0,0,1,0-2.974c-.166-1.2-.111-2.974-.138-4.371a2.393,2.393,0,0,1,0-.941,22.394,22.394,0,0,1-.1-3.347c-.249-4.426-.138-9.032-.415-13.417a2.587,2.587,0,0,0,0-1.176c.069,0,0-.263.083-.415a8.742,8.742,0,0,1,0-1.936c-.166-.18,0-.595-.166-.858.083-.111.069.152.124,0a10.319,10.319,0,0,1-.235-2.642h0a1.824,1.824,0,0,1-.069-.429,25.445,25.445,0,0,0-.429-3.167c0-.138.166-.484,0-.609,0,.194,0,.429-.124.415a2.006,2.006,0,0,0-.111-.941,3.471,3.471,0,0,0,0-.941c0-.1-.124.083-.124-.111V60.027a1.383,1.383,0,0,1-.083-.9c0-.152-.1.18-.138,0a4.785,4.785,0,0,1,0-1.259.788.788,0,0,1-.138-.346c0-.111.111,0,0-.138s-.111.124-.194.083-.111-.166-.18-.29a4.278,4.278,0,0,1-.111-.8,6.3,6.3,0,0,1,0-.885,4.15,4.15,0,0,1-.111-.622c0-.221.1-.415.083-.65s-.1.083-.1-.111a11.716,11.716,0,0,0-.221-2.351c.194.968,0,1.687.166,2.545-.111.124.069.387-.083.512.069,0,.111-.138.1,0a1.7,1.7,0,0,0,0,.18c-.124-.124-.124,0-.221.138,0,.719.069,1.3.069,1.923,0,.124.083-.083.1,0s0,.429,0,.705-.138.277-.277.18c0-.858-.18-2.006-.207-3.029,0-.3.1-.622,0-.8a7.968,7.968,0,0,1-.138,1.217c0,.512.124,1.065.1,1.563a3.085,3.085,0,0,0,0,.318v.622c0,.111.1.373.1.609a11.521,11.521,0,0,0,0,1.217c0,.083-.152,0-.18,0v-1.12a.073.073,0,0,1-.083.083v-.332c0,.387-.194.36-.277.221v-2.96a.526.526,0,0,1-.138-.29c-.069-.9,0-1.909-.069-2.863a21.411,21.411,0,0,0,0,3.527s-.083,0,0,.138v1.591c-.111.194-.207.373-.332.553.1,1.383-.346,2.324-.346,3.6-.083,0-.1.1-.152.138s-.138-.18-.194-.29a2.213,2.213,0,0,1,0-.609c-.235-1.079,0-2.614-.194-3.956-.124-.166-.221,0-.332.069a12.862,12.862,0,0,1,0,1.923c-.29.249-.5,0-.512-.539v-2.96c-.166-2.573-.1-5.132-.235-7.773,0,1.466.1,2.835,0,4.149,0,0,.083,0,.083.152a35.216,35.216,0,0,0,.069,3.859c-.18.47,0,1.383-.152,1.867-.29-.111-.415-.512-.484-1.01,0,.512-.083.982-.1,1.383a7.47,7.47,0,0,1,0,1.12h0v.29a1.549,1.549,0,0,1,0,.373,1.024,1.024,0,0,1-.083.47v3.292c0,.014-.069,0-.069.138V68.16c0,.18-.1,0-.1.18,0,1.383-.111,2.766-.138,4.274,0,.111-.124,0-.1.18s.1.152.083.332a.636.636,0,0,1-.124.277c-.1,1.674,0,3.4,0,5.132v4.744a31.507,31.507,0,0,1,0,3.43c.083,1.383.069,2.766.083,4.053v2.863c0,.138.069.318.069.47s-.083.512-.083.747c0,.678.1,1.383.1,2.033v2.213c0,.415.083.8.083,1.217v.844c0,.8.111,1.6.083,2.351a20.5,20.5,0,0,0,0,3.057v3.569a18.422,18.422,0,0,0,0,2.766,2.451,2.451,0,0,1,0,.277c-.138,1.494.124,3.154,0,4.371a3.555,3.555,0,0,1,0,1.273,10.334,10.334,0,0,0,0,1.383q0,.207,0,.415v1.383a18.547,18.547,0,0,0,0,2.351,8.7,8.7,0,0,0-.083,2.338,26.853,26.853,0,0,0,0,3.8,3.928,3.928,0,0,0,0,1.272,6.238,6.238,0,0,0,0,1.549c0,.539-.1,1.12-.124,1.687a7.925,7.925,0,0,1-.207,2.434c-.567.277.263.816.152,1.466-.111.346-.277.29-.484.443a2.185,2.185,0,0,0,0,.9C34.277,140.61,34,140.859,34,141.329Zm6.114-82.284h0s0,.277.014,0Zm0-.1a4.564,4.564,0,0,1,0-1.217c0-.083-.152.069-.18,0a1.688,1.688,0,0,0,.111-.664c.207,0,.083.553.263.581s0,.332.069.429a3.876,3.876,0,0,0,0,.9c-.194-.152-.166,0-.3-.028Z" transform="translate(13.027 31.333)" fill="#cc543a" fill-rule="evenodd" />
                            <rect id="Rectangle_12" data-name="Rectangle 12" width="10.194" height="106.627" transform="translate(168.164 76.602)" fill="none" />
                            <path id="Path_72" data-name="Path 72" d="M122.225,61.737a.526.526,0,0,1,0-.277A.235.235,0,0,1,122.225,61.737Z" transform="translate(46.824 29.868)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_73" data-name="Path 73" d="M127.22,58.682c0-.083-.083-.36,0-.332A1.147,1.147,0,0,1,127.22,58.682Z" transform="translate(48.731 28.357)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_74" data-name="Path 74" d="M127.33,58.357v-.332A1.148,1.148,0,0,1,127.33,58.357Z" transform="translate(48.787 28.192)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_75" data-name="Path 75" d="M126.579,57.4a.415.415,0,0,1,0-.318A2.316,2.316,0,0,0,126.579,57.4Z" transform="translate(48.487 27.74)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_76" data-name="Path 76" d="M127.394,57.033a.9.9,0,0,1-.069-.553C127.394,56.563,127.38,56.84,127.394,57.033Z" transform="translate(48.779 27.456)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_77" data-name="Path 77" d="M123.453,56.005a3.03,3.03,0,0,1,0-1.065C123.4,55.286,123.508,55.687,123.453,56.005Z" transform="translate(47.284 26.724)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_78" data-name="Path 78" d="M125.183,55.543c-.152-.346,0-.982-.083-1.383.124,0,0,.664.111.788a.817.817,0,0,1,0,.277C125.169,55.322,125.252,55.419,125.183,55.543Z" transform="translate(47.933 26.355)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_79" data-name="Path 79" d="M125.447,52.044s-.111,0-.1-.138a.069.069,0,0,1,.1,0Z" transform="translate(48.028 25.21)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_80" data-name="Path 80" d="M124.83,51.223a2.9,2.9,0,0,1,0-1.3v-.373C124.83,50.006,124.775,50.586,124.83,51.223Z" transform="translate(47.801 24.038)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_81" data-name="Path 81" d="M125.717,50.652a.567.567,0,0,1,0-.332A.456.456,0,0,1,125.717,50.652Z" transform="translate(48.16 24.454)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_82" data-name="Path 82" d="M123.36,50.355V49.94A.692.692,0,0,1,123.36,50.355Z" transform="translate(47.266 24.272)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_83" data-name="Path 83" d="M125.437,50.459a2.764,2.764,0,0,1-.1-.512C125.437,49.809,125.423,50.279,125.437,50.459Z" transform="translate(48.025 24.267)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_84" data-name="Path 84" d="M125.66,50.3V49.75a2.076,2.076,0,0,1,0,.553Z" transform="translate(48.147 24.184)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_85" data-name="Path 85" d="M122.957,50.02c-.083,0-.083-.207-.1-.332S122.93,49.9,122.957,50.02Z" transform="translate(47.074 24.134)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_86" data-name="Path 86" d="M123.369,50.027a3.332,3.332,0,0,1,0-.927,4.149,4.149,0,0,1,0,.927Z" transform="translate(47.257 23.879)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_87" data-name="Path 87" d="M125.621,49.9a1.9,1.9,0,0,1,0-.788C125.677,49.331,125.552,49.649,125.621,49.9Z" transform="translate(48.117 23.879)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_88" data-name="Path 88" d="M124.772,49.347a2.464,2.464,0,0,1,0-.387C124.814,49.015,124.772,49.181,124.772,49.347Z" transform="translate(47.804 23.795)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_89" data-name="Path 89" d="M125,49.054v0Z" transform="translate(47.894 23.641)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_90" data-name="Path 90" d="M125.209,48.741c-.069,0-.083-.4,0-.318s0,.083-.083.083S125.236,48.617,125.209,48.741Z" transform="translate(47.935 23.527)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_91" data-name="Path 91" d="M123.8,48C123.911,48.221,123.8,48.622,123.8,48Z" transform="translate(47.435 23.327)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_92" data-name="Path 92" d="M123.146,47.749a2.213,2.213,0,0,1,0-.609A2.282,2.282,0,0,1,123.146,47.749Z" transform="translate(47.176 22.916)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_93" data-name="Path 93" d="M123.017,47.538c-.083.069-.083-.3,0-.235Z" transform="translate(47.111 22.981)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_94" data-name="Path 94" d="M122.1,47.238a.456.456,0,0,1,0-.318A1.213,1.213,0,0,1,122.1,47.238Z" transform="translate(46.772 22.801)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_95" data-name="Path 95" d="M122.184,46.315C122.073,45.928,122.184,45.79,122.184,46.315Z" transform="translate(46.796 22.341)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_96" data-name="Path 96" d="M122.157,54a.608.608,0,0,0-.1-.235c.111-.152,0-.415,0-.609C122.24,53.4,122.088,53.658,122.157,54Z" transform="translate(46.768 25.851)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_97" data-name="Path 97" d="M123.681,50.525V50.29c0-.138,0,0,.083,0v-.553a.1.1,0,0,0,.083,0c-.138-.263,0-.567,0-1.107a13.978,13.978,0,0,1,0,2.13c-.1,0,0-.47-.124-.512S123.791,50.636,123.681,50.525Z" transform="translate(47.388 23.685)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_98" data-name="Path 98" d="M125.38,49.735h0V49.5C125.38,49.473,125.394,50.192,125.38,49.735Z" transform="translate(48.04 24.057)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_99" data-name="Path 99" d="M125.18,47.448h.1a3,3,0,0,1,0-.968,6.6,6.6,0,0,0,0,1.383c.1.29,0,.166,0,.235.166.816,0,1.7.1,2.559-.277-.387.1-1.245-.18-1.687h0A5.532,5.532,0,0,0,125.18,47.448Z" transform="translate(47.963 22.695)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_100" data-name="Path 100" d="M122.923,47.485a.356.356,0,0,0-.1-.29C122.729,47.111,122.992,47.388,122.923,47.485Z" transform="translate(47.053 22.927)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_101" data-name="Path 101" d="M121.58,140.122c0,.207.1.443.1.65a13.469,13.469,0,0,0,0,1.494c0,.456.166.885.194,1.383s0,.456.1.692c.083.692,0,1.259.3,1.549s.263,1.093.415,1.508a2.066,2.066,0,0,1,0,.235,20.47,20.47,0,0,1,1.383,2.988,2.448,2.448,0,0,1,.539.4c.083.1.138.318.221.387.3.249.705,0,.941.512.083,0,.1,0,.152-.083a9.6,9.6,0,0,1,1.618,0c.277-.318.609-.249.871-.512a6.329,6.329,0,0,0,.484-.664c.194-.235.332-.484.512-.678s.221-.29.373-.346c.124-.36.277-.636.387-1.01.069,0,.111-.124.18-.124a9.265,9.265,0,0,0,.844-2.6v-.429a6.335,6.335,0,0,1,.3-2.393v-.277a1.466,1.466,0,0,0,.332-.871c0-.124-.166-.332-.194-.609s.18-.788.138-1.148-.152-.346-.194-.526a8.192,8.192,0,0,1,0-1.757c0-.3.166-.415.138-.65s-.152-.36-.346-.346c-.415-.595-.1-2.116-.277-3.029a10.153,10.153,0,0,0-.069-1.95V131.5c0-.125-.083-.512-.111-.8a7.719,7.719,0,0,0-.111-1.3c.249-.609,0-1.065,0-1.577,0-.194.083-.387.083-.595s-.069-.36-.069-.567.083-.4.083-.595V125.7a3.772,3.772,0,0,0,0-.415c0-.18-.111-.346-.111-.526a8.741,8.741,0,0,0-.124-1.909c.152-1.079-.1-2.006.069-3.292a2.765,2.765,0,0,1,0-.885s-.069,0-.069-.18a20.2,20.2,0,0,1,0-2.047l-.083-.1a10.511,10.511,0,0,0,0-2.877,9.3,9.3,0,0,0,0-1.95v-2.974c0-.18-.083-.346-.1-.512s0-.65,0-.982a36.082,36.082,0,0,1,0-3.845c0-.346-.083-.65-.111-1.037a15.082,15.082,0,0,0,0-1.936V98.6a20.649,20.649,0,0,1,0-2.918c-.166-1.2-.111-2.946-.138-4.329a2.324,2.324,0,0,1,0-.927,21.846,21.846,0,0,1-.1-3.306c-.249-4.371-.138-8.921-.415-13.251a2.531,2.531,0,0,0,0-1.162,1.383,1.383,0,0,0,.083-.415,9.282,9.282,0,0,1-.083-1.909c-.152-.166,0-.581-.152-.844.083-.111,0,.152.124,0a9.475,9.475,0,0,1-.235-2.6h0v-.415a31.071,31.071,0,0,0-.429-3.126c0-.138.166-.484,0-.609,0,.194,0,.429-.124.415a2.034,2.034,0,0,0-.111-.941,3.4,3.4,0,0,0,0-.927c0-.083-.125.083-.125-.1a8.148,8.148,0,0,0,0-1.3,1.48,1.48,0,0,1-.1-.885c0-.152-.1.18-.124,0a4.786,4.786,0,0,1,0-1.259.83.83,0,0,1-.152-.332c0-.111.124,0,.083-.138s-.111.124-.207.083-.1-.166-.166-.277a1.95,1.95,0,0,0-.111-.8v-.885a3.678,3.678,0,0,1-.111-.609c0-.221.1-.4.083-.636s-.1.083-.1-.1a11.466,11.466,0,0,0-.221-2.338c.194.968,0,1.674.166,2.517-.111.124,0,.373-.083.5,0,0,.111-.138.1,0a.759.759,0,0,0,0,.18c0,.1-.124.069-.221.138v1.909c0,.111.083-.083.1,0s0,.429,0,.705-.138.263-.277.166c0-.844-.18-1.978-.207-2.974,0-.3.1-.622,0-.8a7.773,7.773,0,0,1-.138,1.2c0,.512.124,1.051.1,1.535a2.769,2.769,0,0,0,0,.332v.595a5.669,5.669,0,0,1,.1.609,11.069,11.069,0,0,0,0,1.2c0,.083-.152,0-.18,0V58.474a.073.073,0,0,1-.083.083v-.332c0,.387-.194.36-.277.221V55.528a.636.636,0,0,1-.152-.29V52.4a19.526,19.526,0,0,0,0,3.486s-.083,0,0,.138V57.6l-.332.539c.1,1.383-.346,2.3-.346,3.555-.083,0-.1.1-.152.138a2.641,2.641,0,0,1-.194-.29,2.989,2.989,0,0,1,0-.609c-.221-1.065,0-2.573-.18-3.9-.124-.166-.221,0-.332,0a14.817,14.817,0,0,1,0,1.909c-.29.235-.5,0-.512-.539V55.487c-.18-2.545-.1-5.062-.235-7.677,0,1.383.1,2.766,0,4.08,0,0,.083,0,.069.152v3.8c-.166.47,0,1.383-.138,1.853-.29-.124-.415-.512-.484-1,0,.5-.083.968-.1,1.383a7.49,7.49,0,0,1,0,1.12h0a2.176,2.176,0,0,1,0,.277,1.064,1.064,0,0,1,0,.373.954.954,0,0,1-.083.456v2.932a3.178,3.178,0,0,0,0,.318c0,.1,0,0,0,.138v4.219c0,.18-.1,0-.1.18,0,1.383-.111,2.766-.138,4.219,0,.111-.124,0-.111.18s.111.152.1.332a.733.733,0,0,1-.124.277c-.1,1.646,0,3.347,0,5.062v4.689a30.752,30.752,0,0,1,0,3.389c.083,1.383,0,2.656.083,4v2.766a4.509,4.509,0,0,1,0,.456c0,.249-.083.5-.083.747,0,.664.1,1.383.1,1.992v2.185c0,.415.083.8.083,1.217v.83c0,.788.111,1.577.083,2.324a19.942,19.942,0,0,0,0,3.015v3.527a17.843,17.843,0,0,0,0,2.766,2.453,2.453,0,0,1,0,.277c-.138,1.48.124,3.112,0,4.315a3.126,3.126,0,0,1,0,1.245c0,.456,0,.871,0,1.383a2.28,2.28,0,0,1,0,.415,8.3,8.3,0,0,0,.083,1.383,15.906,15.906,0,0,0,0,2.324,8.478,8.478,0,0,0-.083,2.31,24.4,24.4,0,0,0,0,3.762,3.43,3.43,0,0,0,0,1.245,6.126,6.126,0,0,0,0,1.535c0,.539-.1,1.093-.124,1.66a7.773,7.773,0,0,1-.207,2.407c-.567.277.263.8.152,1.383-.111.332-.277.29-.484.429a2.117,2.117,0,0,0,0,.885C121.843,139.361,121.594,139.665,121.58,140.122Zm6.114-81.247Zm0-.1a4.565,4.565,0,0,1,0-1.217h-.18a1.494,1.494,0,0,0,.111-.636c.207,0,.083.539.263.567s0,.332,0,.429v.871C127.694,58.654,127.777,58.806,127.694,58.778Z" transform="translate(46.584 31.337)" fill="#cc543a" fill-rule="evenodd" />
                            <rect id="Rectangle_13" data-name="Rectangle 13" width="30.084" height="10.194" transform="translate(157.749 178.14)" fill="none" />
                            <path id="Path_102" data-name="Path 102" d="M118.5,126.117a.083.083,0,0,1-.083,0S118.475,126.061,118.5,126.117Z" transform="translate(45.373 61.331)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_103" data-name="Path 103" d="M117.633,121.122s-.1.1-.083,0S117.606,121.122,117.633,121.122Z" transform="translate(45.04 59.41)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_104" data-name="Path 104" d="M117.555,121h0Z" transform="translate(44.994 59.38)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_105" data-name="Path 105" d="M117.28,121.76H117.2C117.114,121.76,117.253,121.774,117.28,121.76Z" transform="translate(44.895 59.671)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_106" data-name="Path 106" d="M117.173,121a.124.124,0,0,1-.152.069C116.993,121,117.118,121,117.173,121Z" transform="translate(44.836 59.38)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_107" data-name="Path 107" d="M116.887,124.907c-.083,0-.235.1-.3,0S116.8,124.838,116.887,124.907Z" transform="translate(44.665 60.853)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_108" data-name="Path 108" d="M116.765,123.2c-.111.152-.29,0-.415.083,0-.124.194,0,.221-.124s0,0,.083,0S116.723,123.128,116.765,123.2Z" transform="translate(44.58 60.185)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_109" data-name="Path 109" d="M115.762,122.91v.1a.208.208,0,0,1,0-.1Z" transform="translate(44.352 60.112)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_110" data-name="Path 110" d="M115.515,123.52a.249.249,0,0,1-.36,0h0C115.363,123.52,115.335,123.575,115.515,123.52Z" transform="translate(44.087 60.346)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_111" data-name="Path 111" d="M115.377,122.623a.124.124,0,0,1-.1,0S115.363,122.6,115.377,122.623Z" transform="translate(44.17 59.998)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_112" data-name="Path 112" d="M115.3,125.012h-.124C115.131,125.012,115.269,124.915,115.3,125.012Z" transform="translate(44.126 60.901)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_113" data-name="Path 113" d="M115.324,122.92a.173.173,0,0,0-.152.1C115.131,123.114,115.269,122.934,115.324,122.92Z" transform="translate(44.126 60.116)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_114" data-name="Path 114" d="M115.275,122.67h-.152C115.068,122.67,115.234,122.684,115.275,122.67Z" transform="translate(44.106 60.02)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_115" data-name="Path 115" d="M115.206,125.4c0,.083,0,0-.1.1S115.164,125.428,115.206,125.4Z" transform="translate(44.092 61.066)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_116" data-name="Path 116" d="M115.2,125.007c0,.083-.194,0-.263,0a.332.332,0,0,1,.263,0Z" transform="translate(44.04 60.905)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_117" data-name="Path 117" d="M115.164,122.71c0,.124-.166,0-.221,0S115.095,122.779,115.164,122.71Z" transform="translate(44.037 60.035)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_118" data-name="Path 118" d="M115.037,123.55h-.1C114.844,123.55,114.954,123.564,115.037,123.55Z" transform="translate(44.026 60.357)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_119" data-name="Path 119" d="M114.925,123.37h-.1C114.731,123.37,114.9,123.384,114.925,123.37Z" transform="translate(43.986 60.288)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_120" data-name="Path 120" d="M114.837,123.153h-.1A.108.108,0,0,1,114.837,123.153Z" transform="translate(43.963 60.201)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_121" data-name="Path 121" d="M114.61,124.532C114.61,124.435,114.79,124.532,114.61,124.532Z" transform="translate(43.913 60.717)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_122" data-name="Path 122" d="M114.56,125.2h-.18A.166.166,0,0,1,114.56,125.2Z" transform="translate(43.825 60.978)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_123" data-name="Path 123" d="M114.492,125.29C114.492,125.373,114.4,125.29,114.492,125.29Z" transform="translate(43.852 61.024)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_124" data-name="Path 124" d="M114.425,126.25s0,.069-.1,0S114.411,126.223,114.425,126.25Z" transform="translate(43.794 61.377)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_125" data-name="Path 125" d="M114.146,126.16C114.035,126.271,114.008,126.16,114.146,126.16Z" transform="translate(43.7 61.357)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_126" data-name="Path 126" d="M116.3,126.19v.1c0,.1-.124,0-.18,0S116.206,126.259,116.3,126.19Z" transform="translate(44.488 61.369)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_127" data-name="Path 127" d="M115.33,124.678h0v-.069c0-.069-.1,0-.152,0-.083.138-.166-.083-.318,0,.152-.152.47,0,.595,0s-.124,0-.138.111S115.344,124.567,115.33,124.678Z" transform="translate(44.009 60.737)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_128" data-name="Path 128" d="M115.1,123.01Z" transform="translate(44.101 60.136)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_129" data-name="Path 129" d="M114.464,123.194v-.1H114.2c-.055,0,.3.1.373,0h0c.235-.166.484,0,.719-.1-.111.263-.346-.1-.47.18h0S114.6,123,114.464,123.194Z" transform="translate(43.755 60.147)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_130" data-name="Path 130" d="M114.49,125.432l-.083.1C114.324,125.626,114.463,125.377,114.49,125.432Z" transform="translate(43.826 61.075)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_131" data-name="Path 131" d="M140.675,129.579a.432.432,0,0,1,.18-.083c.069,0,.277.1.415,0a1.064,1.064,0,0,1,.387-.207c.138-.028.124,0,.194-.083s.36,0,.443-.3.3-.263.415-.429a.069.069,0,0,1,.069,0c.3-.4.484-1.051.844-1.383a4.69,4.69,0,0,1,.111-.539c0-.083.1-.138.111-.221a3.721,3.721,0,0,1,.152-.941v-1.77a2.624,2.624,0,0,0-.152-.885,3.526,3.526,0,0,0-.194-.484c0-.18-.124-.318-.18-.5a1.444,1.444,0,0,1-.1-.387c-.014-.166-.18-.277-.29-.387a1.794,1.794,0,0,1,0-.18c-.207-.318-.429-.705-.733-.83h-.111c-.221,0-.567,0-.678-.3h-.083c-.083,0-.138-.346-.235-.332s-.1.166-.18.194-.221-.18-.318-.152-.111.166-.152.194a.622.622,0,0,1-.5,0c-.083,0-.124-.152-.18-.124s-.111.152-.1.346c-.166.415-.595.1-.858.277-.194-.152-.373.1-.553,0s-.083,0-.111,0-.152.083-.235.111-.249,0-.36.111c-.18-.249-.3,0-.443,0s-.111-.083-.18-.083h-.152c-.055,0-.111-.1-.166-.083a.287.287,0,0,1-.111,0c-.028,0-.069-.069-.111,0a.231.231,0,0,1-.152.111,1.209,1.209,0,0,0-.539.124c-.3-.152-.567.1-.927,0-.083,0-.152.083-.249,0s0,.083,0,.083-.387.124-.581,0a.858.858,0,0,0-.8,0c-.166-.124-.36,0-.553,0h-.844c-.166,0-.1.083-.138.1a1.805,1.805,0,0,1-.277,0,2.946,2.946,0,0,1-1.093,0c-.1,0-.18.083-.29.111s-.36-.083-.539,0h-.47c-.124,0-.553.152-.816,0a3.541,3.541,0,0,1-1.217.138c-.1.138-.18,0-.263,0a1.84,1.84,0,0,1-.941.1c-1.231.235-2.517.138-3.735.4-.1-.1-.249,0-.332,0s0,0-.111-.083-.346,0-.539,0-.166,0-.235.166v-.124c-.124.29-.553.152-.733.235h-.124c-.346,0-.595.318-.885.429,0,0-.138-.166-.166,0s.111,0,.111.138a.221.221,0,0,0-.263.111h-.263c-.1,0,0,.138,0,.124a2.862,2.862,0,0,0-.36,0c-.138,0-.207.152-.249.083s0,.1,0,.124a.363.363,0,0,1-.346,0c-.111-.083,0,.124-.1.138s0-.111,0,0v.194a.175.175,0,0,1-.083.18c-.083.069-.138,0-.221.111s-.18,0-.249,0-.1.124-.18.124-.111-.1-.18-.083,0,.083,0,.1a1.134,1.134,0,0,0-.65.207c.263-.194.47,0,.705-.152,0,.111.111-.069.138.083v-.111h0v.235c0,.1.36,0,.539-.083s0-.069,0-.1a.539.539,0,0,0,.194,0v.277c-.235,0-.553.194-.83.207s-.18-.083-.235,0c.138,0,.235.124.346.138s.29-.138.429-.1,0,0,.1,0,0-.083.1,0h0s.111-.1.18-.1.207.1.332,0,0,.152,0,.166h-.415c-.1,0,.111.194,0,.277a5.408,5.408,0,0,1-.83,0s0,.124-.083.138-.526,0-.788,0a1.577,1.577,0,0,0,.982,0s0,.083,0,0a1.383,1.383,0,0,1,.456,0l.152.318c.373-.083.636.36,1,.36a.484.484,0,0,0,0,.152l-.083.194h-.166c-.3.221-.733,0-1.107.194a.456.456,0,0,0,0,.332c.18,0,.346-.111.526,0s0,.5-.152.526a3.029,3.029,0,0,1-.816,0c-.719.166-1.383.1-2.172.235a8.063,8.063,0,0,1,1.162,0s0-.083,0-.083a3.016,3.016,0,0,0,1.065,0c.138.18.387,0,.526.152a.526.526,0,0,1-.277.484,3.163,3.163,0,0,1,.387.1c.124.014.263-.069.318,0s0,.083,0,.083h.194c.111,0,.083,0,.124.083h2.061c.221,0,0,.1,0,.1.387,0,.788.111,1.19.138v.1a.089.089,0,0,1,.1-.1.318.318,0,0,1,0,.138,5.531,5.531,0,0,0,1.383,0h1.383a3.805,3.805,0,0,1,.954,0,6.5,6.5,0,0,1,1.134-.1,3.886,3.886,0,0,0,.8,0h.124c.041,0,.138.083.207.083a5.136,5.136,0,0,1,.567-.1h.609a.518.518,0,0,0,.346-.083c.111-.083.152,0,.235,0a4.362,4.362,0,0,1,.664-.1,1.591,1.591,0,0,0,.844,0,3.446,3.446,0,0,0,1,0c.249.194.5,0,.775,0h.083c.415.152.871-.111,1.217,0,.124-.124.235,0,.346,0h.484a.833.833,0,0,0,.387-.083c.138-.083.415.194.65.069a.775.775,0,0,0,.65.083c.346.18.705,0,1.065,0,.124,0,.235.152.346,0,.138.124.277,0,.443,0a2.954,2.954,0,0,1,.47.124c.166.028.5,0,.678.207.069.567.221-.263.4-.152s.083.277.124.47.166,0,.249,0S140.536,129.579,140.675,129.579Zm-22.933-6.1Zm0,0c-.111,0-.263.124-.346,0s0,.138,0,.18a.194.194,0,0,0-.18-.111c0-.207.152-.083.166-.263s.083,0,.111,0h.249c.1,0-.028.111-.028.249Z" transform="translate(43.852 58.74)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_404" data-name="Path 404" d="M.335,6.393,205.818,0l-.335,10.39L0,16.783Z" transform="matrix(0.506, -0.863, 0.863, 0.506, 42.282, 177.958)" fill="none" />
                            <path id="Path_132" data-name="Path 132" d="M91.92,25.47a1.687,1.687,0,0,1,.221-.47.788.788,0,0,1-.221.47Z" transform="translate(35.22 9.572)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_133" data-name="Path 133" d="M99.06,23.143c0-.152.249-.609.332-.5A5.129,5.129,0,0,1,99.06,23.143Z" transform="translate(37.955 8.663)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_134" data-name="Path 134" d="M99.47,22.709s.194-.36.277-.512A2.432,2.432,0,0,1,99.47,22.709Z" transform="translate(38.112 8.489)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_135" data-name="Path 135" d="M99.68,20.836a1.383,1.383,0,0,1,.29-.526C100,20.379,99.763,20.683,99.68,20.836Z" transform="translate(38.193 7.775)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_136" data-name="Path 136" d="M100.77,20.673a3.016,3.016,0,0,1,.456-.913A4.606,4.606,0,0,1,100.77,20.673Z" transform="translate(38.611 7.565)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_137" data-name="Path 137" d="M98.46,17.054a10.914,10.914,0,0,1,1-1.674C99.082,15.892,98.806,16.583,98.46,17.054Z" transform="translate(37.725 5.886)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_138" data-name="Path 138" d="M100.45,17.23c.207-.622.927-1.549,1.273-2.31.152,0-.609,1.051-.636,1.314s-.207.277-.3.4a1.936,1.936,0,0,1-.332.595Z" transform="translate(38.488 5.71)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_139" data-name="Path 139" d="M103.58,11.88V11.6c0-.194.1,0,.124,0Z" transform="translate(39.687 4.407)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_140" data-name="Path 140" d="M104.26,10.247a9.059,9.059,0,0,1,1.176-2.075.368.368,0,0,1,.083-.249c.194-.346.678-1.079.235-.346C105.284,8.531,104.8,9.209,104.26,10.247Z" transform="translate(39.948 2.776)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_141" data-name="Path 141" d="M105.18,9.779a1.867,1.867,0,0,1,.263-.539,1.619,1.619,0,0,1-.263.539Z" transform="translate(40.3 3.534)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_142" data-name="Path 142" d="M103.44,8.114a3.885,3.885,0,0,1,.373-.664,2.269,2.269,0,0,1-.373.664Z" transform="translate(39.634 2.848)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_143" data-name="Path 143" d="M105.15,9.33c0-.207.3-.609.4-.858S105.3,9.04,105.15,9.33Z" transform="translate(40.289 3.222)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_144" data-name="Path 144" d="M105.51,9.253a5.007,5.007,0,0,1,.456-.913,6.21,6.21,0,0,1-.456.913Z" transform="translate(40.427 3.189)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_145" data-name="Path 145" d="M103.37,7.367s.124-.36.221-.567C103.633,6.883,103.453,7.173,103.37,7.367Z" transform="translate(39.607 2.599)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_146" data-name="Path 146" d="M103.88,7.61a10.54,10.54,0,0,1,.83-1.48,12.365,12.365,0,0,1-.83,1.48Z" transform="translate(39.802 2.342)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_147" data-name="Path 147" d="M105.91,8.549a4.826,4.826,0,0,1,.719-1.259C106.477,7.677,106.034,8.12,105.91,8.549Z" transform="translate(40.58 2.787)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_148" data-name="Path 148" d="M105.59,7.242c0-.166.194-.4.29-.622C105.991,6.634,105.728,6.993,105.59,7.242Z" transform="translate(40.457 2.53)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_149" data-name="Path 149" d="M106,6.865a2.435,2.435,0,0,1,.332-.595C106.373,6.367,106.124,6.685,106,6.865Z" transform="translate(40.614 2.396)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_150" data-name="Path 150" d="M106.48,6.505c0-.111.3-.678.346-.484s-.111.124-.152.1S106.618,6.312,106.48,6.505Z" transform="translate(40.798 2.285)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_151" data-name="Path 151" d="M106.085,4.55C105.96,4.965,105.462,5.5,106.085,4.55Z" transform="translate(40.53 1.737)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_152" data-name="Path 152" d="M105.72,3.894a5.669,5.669,0,0,1,.539-.954,8.4,8.4,0,0,1-.539.954Z" transform="translate(40.507 1.12)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_153" data-name="Path 153" d="M105.727,3.517c-.124,0,.221-.512.221-.36Z" transform="translate(40.5 1.193)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_154" data-name="Path 154" d="M105.19,2.589a1.922,1.922,0,0,1,.263-.539,1.148,1.148,0,0,1-.263.539Z" transform="translate(40.304 0.779)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_155" data-name="Path 155" d="M106.13,1.157C106.393.479,106.614.327,106.13,1.157Z" transform="translate(40.664 0.22)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_156" data-name="Path 156" d="M99.13,13.242c0-.138.124-.318.138-.415a6.736,6.736,0,0,0,.609-.927C99.752,12.329,99.393,12.661,99.13,13.242Z" transform="translate(37.982 4.553)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_157" data-name="Path 157" d="M103.972,8.509c.1-.18.124-.124.235-.346v.124c.235-.36.318-.581.5-.885v.111a16.518,16.518,0,0,1,1.037-1.743c-.36.9-1.521,2.669-1.923,3.4,0-.166.429-.747.387-.871S103.986,8.7,103.972,8.509Z" transform="translate(39.779 2.204)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_158" data-name="Path 158" d="M105.756,8.16h0a2.837,2.837,0,0,1,.221-.36C106.019,7.772,105.355,8.851,105.756,8.16Z" transform="translate(40.471 2.982)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_159" data-name="Path 159" d="M108.6,4.383h.083A10.234,10.234,0,0,1,109.625,3a23.675,23.675,0,0,0-1.189,2.158c-.083.083-.18.249-.263.332-.622,1.383-1.591,2.683-2.282,4.066.124-.733,1.231-1.909,1.383-2.766.083-.111,0,0,0,.083A19.128,19.128,0,0,0,108.6,4.383Z" transform="translate(40.572 1.143)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_160" data-name="Path 160" d="M105.67,3.361a2.611,2.611,0,0,1,.18-.484C105.891,2.738,105.808,3.25,105.67,3.361Z" transform="translate(40.488 1.087)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_161" data-name="Path 161" d="M44.649,159.517c-.194.358-.318.791-.526,1.164-.47.865-.982,1.6-1.383,2.492s-.664,1.6-1.079,2.417-.373.821-.567,1.238a12.478,12.478,0,0,0-1.19,2.731c-.3.91-.775,2-1.024,2.79,0,.134-.18.358-.194.418-.65,2.029-.705,3.507-1.618,5.8a4.093,4.093,0,0,1,.1.97c0,.209-.18.6-.166.761,0,.612.581.448.332,1.388,0,.09.152,0,.207,0,.526.358,1.148.313,1.383.776.553-.4.775-.1,1.231-.388a9.215,9.215,0,0,0,1.037-.88c.318-.254.719-.627,1.065-.865.152.1.456-.373.65-.388.429-.552.83-.925,1.259-1.492.083,0,.194-.149.277-.119a28.9,28.9,0,0,0,3.126-3.969c.1-.149.3-.492.4-.686a22.734,22.734,0,0,1,2.49-3.909c.138-.224.083-.254.235-.477a4.024,4.024,0,0,0,1.093-1.3c.111-.209.166-.657.4-1.134.332-.716.871-1.253,1.19-1.9.138-.284.18-.671.3-.985a27.93,27.93,0,0,1,1.66-2.984q.377-.5.705-1.03c.166-.358.207-.686,0-.761.194-1.238,1.881-3.656,2.559-5.3a36.812,36.812,0,0,0,1.743-3.357c.124-.224.318-.448.429-.671s.4-.925.636-1.418c.4-.85.8-1.567,1.12-2.268a13.315,13.315,0,0,0,1.383-2.7c.18-.328.415-.612.622-.97s.263-.657.456-1,.456-.642.622-.97.194-.463.3-.657.29-.388.443-.671.221-.642.373-.94a32.1,32.1,0,0,0,1.66-3.313c1.12-1.746,1.77-3.477,3.1-5.551a8.749,8.749,0,0,1,.788-1.492.532.532,0,0,1,.111-.358c.678-1.089,1.134-2.387,1.84-3.492a.627.627,0,0,1,0-.209,37.666,37.666,0,0,0,2.877-4.909,36.806,36.806,0,0,0,1.784-3.327c.3-.567.664-1.089.927-1.626.526-1.059,1.383-2.387,1.826-3.4.152-.3.249-.627.4-.925.263-.537.636-1.059.913-1.641,1.051-2.253,2.49-4.685,3.513-6.58.318-.582.526-1.134.858-1.805.553-1.1,1.272-2.164,1.84-3.268.152-.284.249-.582.373-.836.332-.671.719-1.268,1.093-1.955.9-1.7,1.7-3.462,2.669-5,.968-2.1,2.614-5.043,3.873-7.461a9.174,9.174,0,0,1,.83-1.6c.871-1.716,1.909-3.954,2.96-5.655,3.8-7.505,8.064-15.19,11.826-22.681a10.166,10.166,0,0,0,1.051-1.985,3.308,3.308,0,0,0,.443-.671,35.852,35.852,0,0,1,1.7-3.268c0-.388.512-1.015.636-1.492.18-.149,0,.284.152,0a34.878,34.878,0,0,1,2.2-4.566c0,.075-.083.075,0,0s.166-.448.332-.761c1.107-2.089,1.66-3.715,2.517-5.551a2.68,2.68,0,0,0,.609-.985c-.18.313-.4.716-.484.627a7.539,7.539,0,0,0,.761-1.641,16.531,16.531,0,0,0,.83-1.6c.083-.149-.194,0,0-.239.553-.88.705-1.4,1.217-2.193a5.418,5.418,0,0,1,.733-1.492c.111-.3-.235.239-.138,0a15.734,15.734,0,0,1,1.148-2.134,2.465,2.465,0,0,1,.18-.642c.1-.194,0,.1.194-.194s-.207.149-.249,0a1.287,1.287,0,0,0,.124-.582,7.411,7.411,0,0,0,.636-1.4c.221-.522.553-1.03.775-1.492s.221-.642.47-1.1.443-.627.664-1.045-.152.09,0-.224a45.1,45.1,0,0,0,1.964-4.074c-.719,1.746-1.549,2.82-2.185,4.357-.207.149-.29.686-.539.821,0,.119.221-.179,0,.134a1.992,1.992,0,0,0-.194.3c0-.284-.166,0-.318.09-.65,1.238-1.12,2.223-1.7,3.283,0,.209.152-.09,0,.134a10.12,10.12,0,0,0-.609,1.209c-.166.09-.373.388-.4.149.788-1.418,1.674-3.477,2.573-5.178a4.461,4.461,0,0,0,.678-1.388c-.373.791-.858,1.313-1.231,1.97s-.844,1.85-1.383,2.671c-.138.224-.221.3-.346.507s-.18.492-.277.671-.166.194-.263.373-.263.686-.484,1.074c-.36.657-.8,1.268-1.162,2.014-.111.1-.18,0-.111-.194.484-.865.553-1.015,1.024-1.9,0,.09-.111.134-.138.1a1.658,1.658,0,0,0,.277-.567c-.346.657-.484.492-.443.224.913-1.612,1.923-3.656,2.766-4.954a1.475,1.475,0,0,1,.138-.567c.761-1.492,1.729-3.193,2.559-4.849q-1.743,2.9-3.209,5.969s-.1,0-.194.179c-.443.955-1.037,2.014-1.383,2.731-.263.254-.526.507-.788.731-1.134,2.3-2.407,3.7-3.582,5.849,0,0-.166.1-.249.149a4.893,4.893,0,0,1,.1-.6,5.637,5.637,0,0,1,.567-1.015c.788-1.94,2.324-4.476,3.444-6.744,0-.343-.166-.179-.36,0-.65,1.044-1.037,2.119-1.8,3.193-.47.254-.415-.3,0-1.194.775-1.492,2.172-4.014,2.766-4.939,2.2-4.476,4.592-8.654,6.916-13.161-1.383,2.432-2.49,4.79-3.79,6.938a.88.88,0,0,1-.069.284c-1.2,2.149-2.5,4.551-3.458,6.506-.581.7-1.231,2.343-1.826,3.059a3.487,3.487,0,0,1,.5-1.97c-.443.865-.954,1.612-1.383,2.313s-.816,1.626-1.024,1.9,0-.1-.111,0c.138-.239-.221.433-.235.492a5.535,5.535,0,0,1-.3.657,3.535,3.535,0,0,1-.5.731c-.954,1.656-1.757,3.327-2.766,4.954-.111.179-.29.522-.3.552s0,0-.194.194,0,.09-.1.269c-.373.627-.788,1.358-1.148,2.014-.871,1.641-1.978,3.521-2.683,4.864-.18.284,0-.149-.263.254-1.286,2.253-2.656,4.641-4.011,7.088-.111.179-.124,0-.249.254s0,.3-.221.612a3.016,3.016,0,0,1-.36.388c-1.618,2.76-3.1,5.7-4.634,8.625s-2.9,5.416-4.288,8c-1.079,2.029-2.033,4.014-3.084,5.79-1.245,2.462-2.393,4.476-3.61,6.834-.885,1.641-1.909,3.4-2.6,4.8-.124.254-.235.567-.387.836s-.526.791-.747,1.209c-.609,1.119-1.148,2.328-1.77,3.447s-1.383,2.462-2.033,3.686c-.387.7-.678,1.492-1.051,2.1s-.567.91-.816,1.388c-.719,1.328-1.383,2.746-2.075,4-.941,1.656-1.978,3.327-2.766,5.1-1.093,1.85-2.338,4.148-3.278,5.969-.968,1.358-1.632,2.984-2.573,4.641-.1.164-.194.254-.29.433-1.494,2.432-2.766,5.357-4,7.326a12.967,12.967,0,0,1-1.19,2.1c-.456.746-.761,1.492-1.162,2.238-.124.239-.29.433-.429.671-.429.731-.747,1.492-1.176,2.343-.65,1.238-1.549,2.417-2.2,3.895a30.823,30.823,0,0,0-2.2,3.894c-1.314,2-2.282,4.238-3.527,6.357a13.745,13.745,0,0,0-1.19,2.089,22.3,22.3,0,0,0-1.466,2.566c-.512.9-1.107,1.82-1.646,2.76a26.994,26.994,0,0,1-2.407,3.954c-.733.164-.512,1.492-1.2,2.552-.4.507-.5.343-.816.477a8.2,8.2,0,0,0-.8,1.492,14.661,14.661,0,0,0-1.162,1.447Zm80.292-134.7h.083C125.038,25.06,124.678,25.328,124.941,24.821Zm0-.179a16.421,16.421,0,0,1,1.093-2.074c0-.134-.194,0-.1-.194a6.766,6.766,0,0,0,.678-1.03c.194.09-.429.97-.29,1.119a1.668,1.668,0,0,0-.332.746c-.47.716-.456.955-.83,1.492.028-.164-.083.119-.18-.015Z" transform="translate(14.177 1.58)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_405" data-name="Path 405" d="M6.109.325,16.483,0,10.373,202.648,0,202.973Z" transform="translate(70.785 7.958) rotate(-28.87)" fill="none" />
                            <path id="Path_162" data-name="Path 162" d="M69.41,28.045a2.047,2.047,0,0,1-.29-.415C69.2,27.644,69.369,27.865,69.41,28.045Z" transform="translate(26.484 13.426)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_163" data-name="Path 163" d="M71.081,20.822c-.1-.111-.387-.512-.263-.512a3.015,3.015,0,0,1,.263.512Z" transform="translate(27.123 7.775)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_164" data-name="Path 164" d="M70.939,20.255s-.207-.36-.3-.5A2.115,2.115,0,0,1,70.939,20.255Z" transform="translate(27.058 7.554)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_165" data-name="Path 165" d="M69.454,19.138a1.217,1.217,0,0,1-.3-.5S69.357,18.986,69.454,19.138Z" transform="translate(26.495 7.136)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_166" data-name="Path 166" d="M69.839,18.164a3.153,3.153,0,0,1-.539-.844A4.273,4.273,0,0,1,69.839,18.164Z" transform="translate(26.553 6.63)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_167" data-name="Path 167" d="M65.493,18.467a9.79,9.79,0,0,1-.913-1.687C64.815,17.347,65.258,17.914,65.493,18.467Z" transform="translate(24.744 6.423)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_168" data-name="Path 168" d="M66.653,16.911c-.443-.484-.844-1.563-1.383-2.227,0-.166.595,1.037.788,1.19s.138.318.194.456A2.227,2.227,0,0,1,66.653,16.911Z" transform="translate(25.009 5.614)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_169" data-name="Path 169" d="M63.839,11.3s-.111,0-.207-.18,0-.1,0-.111Z" transform="translate(24.364 4.21)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_170" data-name="Path 170" d="M62.559,10.266A8.908,8.908,0,0,1,61.4,8.246s-.083,0-.152-.194-.581-1.19-.207-.387A28.131,28.131,0,0,0,62.559,10.266Z" transform="translate(23.335 2.812)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_171" data-name="Path 171" d="M62.838,8.918a2.864,2.864,0,0,1-.318-.5A1.231,1.231,0,0,1,62.838,8.918Z" transform="translate(23.955 3.22)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_172" data-name="Path 172" d="M60.527,9.567A4.441,4.441,0,0,1,60.14,9a2.448,2.448,0,0,1,.387.567Z" transform="translate(23.043 3.442)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_173" data-name="Path 173" d="M62.424,8.75c-.152-.152-.36-.567-.526-.761S62.258,8.474,62.424,8.75Z" transform="translate(23.705 3.042)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_174" data-name="Path 174" d="M62.5,8.408A4.952,4.952,0,0,1,62,7.55a9.585,9.585,0,0,1,.5.858Z" transform="translate(23.756 2.886)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_175" data-name="Path 175" d="M59.863,9.24c-.083,0-.235-.277-.373-.47C59.587,8.77,59.739,9.088,59.863,9.24Z" transform="translate(22.794 3.354)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_176" data-name="Path 176" d="M60.23,9.053A12.559,12.559,0,0,1,59.4,7.67,11.881,11.881,0,0,1,60.23,9.053Z" transform="translate(22.759 2.932)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_177" data-name="Path 177" d="M62.1,7.795A5.934,5.934,0,0,1,61.41,6.55C61.659,6.868,61.825,7.421,62.1,7.795Z" transform="translate(23.53 2.503)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_178" data-name="Path 178" d="M60.9,7.307a3.83,3.83,0,0,1-.387-.553C60.579,6.657,60.759,7.1,60.9,7.307Z" transform="translate(23.185 2.576)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_179" data-name="Path 179" d="M60.8,6.761a1.6,1.6,0,0,1-.346-.581C60.533,6.221,60.685,6.595,60.8,6.761Z" transform="translate(23.162 2.361)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_180" data-name="Path 180" d="M60.721,6.15c-.111,0-.415-.595-.235-.539s0,.152,0,.18S60.624,5.984,60.721,6.15Z" transform="translate(23.154 2.142)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_181" data-name="Path 181" d="M58.82,5.59C59.11,5.908,59.318,6.6,58.82,5.59Z" transform="translate(22.537 2.135)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_182" data-name="Path 182" d="M58.069,5.591a6,6,0,0,1-.539-.941,7.62,7.62,0,0,1,.539.941Z" transform="translate(22.043 1.775)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_183" data-name="Path 183" d="M57.792,5.312c0,.152-.318-.443-.194-.36Z" transform="translate(22.058 1.888)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_184" data-name="Path 184" d="M56.722,5.318a1.632,1.632,0,0,1-.332-.5,1.383,1.383,0,0,1,.332.5Z" transform="translate(21.606 1.84)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_185" data-name="Path 185" d="M55.981,3.8C55.552,3.25,55.538,2.987,55.981,3.8Z" transform="translate(21.324 1.252)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_186" data-name="Path 186" d="M62.621,15.92a2.476,2.476,0,0,0-.29-.332,7.635,7.635,0,0,0-.47-.968,14.982,14.982,0,0,1,.761,1.3Z" transform="translate(23.702 5.595)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_187" data-name="Path 187" d="M60.9,9.741c-.1-.166,0-.18-.166-.373s0,0,.111,0c-.194-.373-.332-.553-.512-.871,0,0,.083.069.111,0-.346-.346-.415-.927-.954-1.757.581.761,1.494,2.628,1.923,3.333-.152,0-.415-.733-.553-.761S61.067,9.866,60.9,9.741Z" transform="translate(22.794 2.576)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_188" data-name="Path 188" d="M61.748,7.644h0a4.082,4.082,0,0,1-.207-.373C61.526,7.215,62.176,8.28,61.748,7.644Z" transform="translate(23.579 2.778)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_189" data-name="Path 189" d="M59.552,4.139h.083A8.492,8.492,0,0,1,58.86,2.59a19.942,19.942,0,0,0,1.217,2.089c0,.111.124.277.152.387.844,1.217,1.466,2.766,2.3,3.983-.567-.47-1-2.006-1.618-2.559h0a18.271,18.271,0,0,0-1.356-2.351Z" transform="translate(22.553 0.986)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_190" data-name="Path 190" d="M57.632,5.287c-.1-.1-.221-.3-.318-.4S57.618,5.052,57.632,5.287Z" transform="translate(21.954 1.858)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_191" data-name="Path 191" d="M136.32,163.683c.18.359.456.7.65,1.076.443.866.747,1.688,1.245,2.539s.913,1.4,1.383,2.2.456.762.692,1.15a10.918,10.918,0,0,0,1.6,2.465c.567.732,1.176,1.7,1.674,2.33.083.1.194.359.221.388a55.622,55.622,0,0,1,3.762,4.392,2.828,2.828,0,0,1,.816.388c.152.119.387.463.526.538.5.284.636-.314,1.259.388.1,0,0-.164,0-.224.553-.3.844-.9,1.383-.941,0-.717.318-.762.332-1.329q-.049-.706-.166-1.4c0-.493-.124-.971-.138-1.4.166-.09,0-.612,0-.792-.207-.672-.3-1.225-.526-1.912v-.314a29.5,29.5,0,0,0-1.535-4.855q-.149-.367-.332-.717a23.663,23.663,0,0,1-1.812-4.242c-.1-.254-.152-.209-.249-.463a4.145,4.145,0,0,0-.456-1.643c-.111-.209-.443-.493-.705-.941-.387-.672-.526-1.494-.871-2.032-.166-.284-.443-.508-.622-.792a28.078,28.078,0,0,1-1.508-2.988,8.821,8.821,0,0,0-.443-1.165c-.194-.344-.443-.538-.595-.4-.885-.792-1.923-3.555-2.877-5-.456-1.225-1.231-2.181-1.757-3.286-.111-.209-.194-.508-.318-.732s-.512-.822-.788-1.285c-.456-.792-.816-1.494-1.217-2.166a12.25,12.25,0,0,0-1.383-2.674c-.166-.329-.263-.687-.443-1.061s-.373-.568-.553-.911-.277-.732-.443-1.061-.263-.418-.36-.612q-.142-.374-.318-.732c-.152-.284-.387-.538-.539-.822a30.451,30.451,0,0,0-1.77-3.182c-.8-1.912-1.826-3.376-2.766-5.632a9.819,9.819,0,0,1-.8-1.494c0-.119-.124-.09-.221-.284-.512-1.165-1.3-2.241-1.812-3.451a.409.409,0,0,1-.152-.134,36.79,36.79,0,0,0-2.5-4.885,36.526,36.526,0,0,0-1.715-3.3c-.29-.568-.512-1.15-.8-1.673-.581-1-1.217-2.4-1.757-3.376-.152-.3-.373-.553-.526-.837-.29-.508-.512-1.12-.83-1.658-1.231-2.091-2.421-4.631-3.389-6.528-.29-.583-.622-1.046-.982-1.688-.595-1.061-1.051-2.256-1.646-3.331-.152-.269-.332-.508-.47-.762-.346-.642-.622-1.285-.982-1.972-.871-1.688-1.867-3.316-2.573-4.959-1.176-1.942-2.642-4.929-3.873-7.275a8.692,8.692,0,0,1-.83-1.494c-.913-1.658-2.144-3.734-2.96-5.557-3.956-7.364-7.787-15.192-11.812-22.362A7.962,7.962,0,0,0,84.7,44.837a3.334,3.334,0,0,0-.277-.747,32.413,32.413,0,0,1-1.729-3.212c-.29-.209-.539-.971-.871-1.344,0-.239.194.209.083-.134a32.583,32.583,0,0,1-2.476-4.317h0c0-.12-.277-.373-.429-.687-1.093-2.046-2.1-3.376-3.1-5.094a2.721,2.721,0,0,0-.47-1.046c.152.329.36.717.249.762a6.792,6.792,0,0,0-.913-1.494,13.057,13.057,0,0,0-.83-1.568c-.083-.149,0,.209-.194-.1-.415-.956-.747-1.359-1.12-2.211a5.259,5.259,0,0,1-.844-1.494c-.18-.239,0,.344,0,.134a16.349,16.349,0,0,1-1.093-2.121,2.072,2.072,0,0,1-.415-.493c-.111-.194.124,0,0-.269s0,.269-.1.239c-.235-.344-.249-.239-.4-.4a6.684,6.684,0,0,0-.788-1.285c-.29-.463-.526-1.031-.8-1.494a11.321,11.321,0,0,1-.636-.986c-.18-.373-.263-.732-.484-1.135s0,.194-.166-.12q-1.015-1.979-2.213-3.839c1.01,1.494,1.383,2.838,2.324,4.183,0,.269.387.612.373.911.1,0,0-.3.124,0a2.752,2.752,0,0,0,.138.329c-.221-.134,0,.164-.083.329.622,1.225,1.176,2.151,1.715,3.212.124.179,0-.179.124,0s.373.717.65,1.165c0,.194.1.538-.1.433-.719-1.494-1.881-3.271-2.766-4.959-.277-.508-.456-1.09-.747-1.3a22.572,22.572,0,0,1,.913,2.106c.429.866,1.037,1.7,1.383,2.554.111.239.124.359.235.583s.29.4.387.6,0,.239.152.418a6.222,6.222,0,0,1,.609.986c.332.657.581,1.359.982,2.076,0,.164-.1.149-.194,0l-.982-1.9V22.3a1.784,1.784,0,0,0-.3-.538c.346.657.138.687,0,.508-.8-1.643-1.895-3.6-2.517-4.974a1.645,1.645,0,0,1-.373-.4c-.83-1.494-1.632-3.2-2.5-4.8a64.826,64.826,0,0,0,3.015,5.975v.269c.526.881,1.051,1.957,1.383,2.659a7.151,7.151,0,0,0,.18,1.09c1.217,2.2,1.674,4.078,2.766,6.229v.3c-.138-.149-.277-.224-.415-.388a6.655,6.655,0,0,1-.526-1.031c-1.12-1.7-2.3-4.347-3.555-6.543-.249-.209-.221,0-.221.3.5,1.12,1.148,2.032,1.6,3.256,0,.568-.443.239-.913-.642-.775-1.494-2.047-4-2.5-4.989-2.351-4.227-4.481-8.544-6.916-12.906,1.2,2.495,2.5,4.69,3.541,6.946,0,0,.1,0,.18.209,1.079,2.181,2.31,4.586,3.375,6.438.249.881,1.217,2.315,1.466,3.212-.346,0-.8-.642-1.286-1.494.443.837.775,1.673,1.12,2.405s.871,1.494.968,1.882c0,.075-.1,0,0,.119-.111-.254.235.418.263.463a2.923,2.923,0,0,1,.36.612,3.3,3.3,0,0,1,.332.822c.816,1.688,1.715,3.271,2.517,4.974.083.179.277.523.277.553v.269c0,.269.083,0,.166.224a22.906,22.906,0,0,0,1.01,2.061c.844,1.628,1.77,3.585,2.462,4.915.124.3-.138,0,0,.359,1.19,2.42,2.434,4.87,3.61,7.349.1.194-.083.1.069.359s.221.209.373.508a1.99,1.99,0,0,1,.124.538c1.383,2.853,2.918,5.691,4.44,8.574s2.766,5.393,4.149,7.947c1.051,2,2.13,3.884,2.988,5.721,1.383,2.39,2.379,4.481,3.555,6.752.844,1.628,1.715,3.466,2.462,4.81.124.224.318.478.47.747s.346.9.567,1.3c.567,1.135,1.245,2.226,1.812,3.361l1.867,3.72c.346.7.761,1.329,1.12,2.017.235.448.429.971.664,1.494.692,1.344,1.48,2.644,2.1,3.914.83,1.7,1.618,3.481,2.6,5.139.913,1.912,2.075,4.212,3.043,5.975a51.561,51.561,0,0,0,2.338,4.661c.083.179.111.314.194.493,1.148,2.6,2.766,5.243,3.735,7.349a11.287,11.287,0,0,1,1.037,2.151c.373.777.8,1.494,1.19,2.181.124.239.194.478.3.732.36.762.816,1.494,1.245,2.256.65,1.21,1.12,2.629,1.964,3.959a28.6,28.6,0,0,0,1.936,3.988c.9,2.2,2.185,4.212,3.209,6.408a12.2,12.2,0,0,0,1.051,2.151,20.821,20.821,0,0,0,1.259,2.629c.456.926.871,1.927,1.383,2.9a28.423,28.423,0,0,1,1.895,4.2c-.263.762.941,1.225,1.383,2.375.194.627,0,.642,0,1a7.134,7.134,0,0,0,.775,1.494,14.929,14.929,0,0,0,.526,1.9ZM71.173,22.445v-.1C71.367,22.46,71.408,22.908,71.173,22.445Zm-.124-.134a18.341,18.341,0,0,1-1.079-2.032c0-.134,0,.179-.207,0a6.05,6.05,0,0,0-.456-1.15c.166-.134.539.881.733.837.166.373.249.568.415.672.332.807.526.9.761,1.494C71.035,22.042,71.187,22.281,71.049,22.311Z" transform="translate(22.273 2.166)" fill="#cc543a" fill-rule="evenodd" />
                            <rect id="Rectangle_16" data-name="Rectangle 16" width="68.356" height="10.194" transform="translate(79.227 128.925)" fill="none" />
                            <path id="Path_192" data-name="Path 192" d="M67.39,93.143a.346.346,0,0,1-.18,0,.111.111,0,0,1,.18,0Z" transform="translate(25.752 45.234)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_193" data-name="Path 193" d="M65.428,88.133s-.235.1-.207,0A.47.47,0,0,1,65.428,88.133Z" transform="translate(24.989 42.816)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_194" data-name="Path 194" d="M65.22,88h0Z" transform="translate(24.906 42.754)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_195" data-name="Path 195" d="M64.607,88.78a.166.166,0,0,1-.207,0A1,1,0,0,0,64.607,88.78Z" transform="translate(24.675 43.135)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_196" data-name="Path 196" d="M64.387,88A.47.47,0,0,1,64,88Z" transform="translate(24.522 42.756)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_197" data-name="Path 197" d="M63.722,91.914c-.194,0-.567.1-.692,0C63.251,92.039,63.514,91.845,63.722,91.914Z" transform="translate(24.15 44.652)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_198" data-name="Path 198" d="M63.427,90.2c-.221.138-.636,0-.927.083,0-.124.429,0,.512-.124h.18C63.275,90.215,63.344,90.132,63.427,90.2Z" transform="translate(23.947 43.81)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_199" data-name="Path 199" d="M61.19,89.93a.1.1,0,0,1-.1.1.111.111,0,0,1,0-.1Z" transform="translate(23.404 43.697)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_200" data-name="Path 200" d="M60.649,90.54a1.134,1.134,0,0,1-.83,0h-.235A6.779,6.779,0,0,0,60.649,90.54Z" transform="translate(22.783 43.992)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_201" data-name="Path 201" d="M60.277,89.643a.387.387,0,0,1-.207,0S60.25,89.616,60.277,89.643Z" transform="translate(23.016 43.548)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_202" data-name="Path 202" d="M60.08,92h0Z" transform="translate(22.909 44.698)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_203" data-name="Path 203" d="M60.157,89.94a.478.478,0,0,0-.332.1C59.728,90.134,60.074,90.023,60.157,89.94Z" transform="translate(22.916 43.704)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_204" data-name="Path 204" d="M60.107,89.68c0,.083-.235,0-.36,0S59.941,89.708,60.107,89.68Z" transform="translate(22.882 43.572)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_205" data-name="Path 205" d="M59.873,92.42c0,.083-.124,0-.207.1S59.8,92.448,59.873,92.42Z" transform="translate(22.854 44.909)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_206" data-name="Path 206" d="M59.875,92.007a1.383,1.383,0,0,1-.595,0,1.729,1.729,0,0,1,.595,0Z" transform="translate(22.713 44.692)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_207" data-name="Path 207" d="M59.8,89.734c-.152.111-.373,0-.512,0C59.428,89.679,59.636,89.8,59.8,89.734Z" transform="translate(22.717 43.593)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_208" data-name="Path 208" d="M59.435,90.571a.581.581,0,0,1-.235.069C59.186,90.529,59.339,90.584,59.435,90.571Z" transform="translate(22.683 44.006)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_209" data-name="Path 209" d="M59.266,90.39h-.249A.991.991,0,0,0,59.266,90.39Z" transform="translate(22.603 43.916)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_210" data-name="Path 210" d="M59.06,90.171h-.207c.055,0,0,0,0,.069S58.977,90.143,59.06,90.171Z" transform="translate(22.547 43.812)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_211" data-name="Path 211" d="M58.55,91.552C58.688,91.455,58.937,91.552,58.55,91.552Z" transform="translate(22.434 44.461)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_212" data-name="Path 212" d="M58.417,92.206a.733.733,0,0,1-.387,0A.954.954,0,0,1,58.417,92.206Z" transform="translate(22.235 44.79)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_213" data-name="Path 213" d="M58.284,92.31c0,.083-.194,0-.152,0Z" transform="translate(22.271 44.85)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_214" data-name="Path 214" d="M58.057,93.263a.194.194,0,0,1-.207,0S58.057,93.236,58.057,93.263Z" transform="translate(22.166 45.308)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_215" data-name="Path 215" d="M57.5,93.18C57.252,93.291,57.169,93.18,57.5,93.18Z" transform="translate(21.948 45.274)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_216" data-name="Path 216" d="M62.429,93.21s-.124,0-.152.1-.263,0-.387,0C62.042,93.141,62.208,93.279,62.429,93.21Z" transform="translate(23.713 45.293)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_217" data-name="Path 217" d="M60.221,91.684h-.152a3,3,0,0,0-.36,0h0c-.166.138-.373-.083-.719,0a5.146,5.146,0,0,1,1.383-.069c0,.1-.3,0-.332.111S60.263,91.574,60.221,91.684Z" transform="translate(22.602 44.51)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_218" data-name="Path 218" d="M59.692,90Z" transform="translate(22.813 43.726)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_219" data-name="Path 219" d="M58.222,90.221v-.1a1.383,1.383,0,0,1-.622,0c.235,0,.705.1.871,0a.622.622,0,0,0,.152,0A15.922,15.922,0,0,1,60.256,90c-.249.263-.8-.1-1.079.18h0a2.282,2.282,0,0,0-.954.041Z" transform="translate(22.07 43.738)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_220" data-name="Path 220" d="M58.243,92.452a.221.221,0,0,0-.18.1C58.008,92.646,58.187,92.4,58.243,92.452Z" transform="translate(22.243 44.92)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_221" data-name="Path 221" d="M117.649,96.6c.124,0,.277-.083.415-.083a5.533,5.533,0,0,0,.954,0c.29,0,.567-.18.871-.207a2.544,2.544,0,0,0,.443-.083c.443-.1.8,0,1-.3s.692-.263.968-.429a.3.3,0,0,1,.152,0c.678-.4,1.107-1.051,1.909-1.383a2.767,2.767,0,0,1,.263-.553c0-.069.194-.124.235-.207.166-.318,0-.705.332-.941v-.152a7.869,7.869,0,0,1,0-1.618c-.207-.29-.166-.609-.318-.885s-.3-.318-.443-.484-.3-.318-.429-.5a1.022,1.022,0,0,1-.221-.387c-.041-.166-.4-.277-.636-.387s-.083-.1-.1-.18a4.468,4.468,0,0,0-1.66-.83h-.263a2.877,2.877,0,0,1-1.549-.3h-.18a.692.692,0,0,0-.553-.332c-.069,0-.221.152-.387.194s-.512-.18-.747-.152-.221.166-.332.194a3.015,3.015,0,0,1-1.12,0c-.194,0-.277-.152-.415-.124a.3.3,0,0,0-.221.346c-.387.415-1.383.083-1.95.277-.429-.152-.83.1-1.245,0h-.263a4.305,4.305,0,0,0-.512.111,2.084,2.084,0,0,0-.844.111c-.387-.249-.678,0-1.01,0a3.184,3.184,0,0,0-.387-.083,2.462,2.462,0,0,1-.36,0c-.124,0-.249-.083-.373-.083a2.066,2.066,0,0,1-.249,0h-.263c-.111,0-.221.1-.332.111a3.582,3.582,0,0,0-1.217.124c-.692-.152-1.3.1-2.116,0a1.134,1.134,0,0,1-.567,0s0,.083-.124.083c-.415-.083-.871.124-1.3,0h0a4.316,4.316,0,0,0-1.84,0,4.288,4.288,0,0,0-1.259,0,4.686,4.686,0,0,0-.622,0H97.51c-.124,0-.221.083-.332.1a4.673,4.673,0,0,0-.622,0,14.993,14.993,0,0,1-2.476,0,6.639,6.639,0,0,0-.664.111,6.24,6.24,0,0,0-1.245,0H91.134a8.591,8.591,0,0,1-1.881,0,17.719,17.719,0,0,1-2.766.138c-.207.138-.4,0-.609,0a9.682,9.682,0,0,1-2.116.1c-2.766.235-5.712.138-8.493.4a1.148,1.148,0,0,0-.844.332.466.466,0,0,1-.263-.083c-.346.166-.775,0-1.217.069-.111.166-.373,0-.539.166s.1-.083,0-.124c-.29.29-1.245.152-1.674.235h-.277a15.5,15.5,0,0,0-2.006.415c-.083,0-.3-.166-.387,0,.124,0,.277,0,.263.138a.858.858,0,0,0-.595.111h-.595c-.221,0,0,.138,0,.124h-.83a.636.636,0,0,1-.567.083c-.1,0,.111.1,0,.124a1.964,1.964,0,0,1-1,.124.454.454,0,0,1-.221.138c-.111.014,0-.111-.083,0s.083.111,0,.194-.111.1-.18.166-.332.083-.512.124a2.591,2.591,0,0,1-.567,0c-.18,0-.221.124-.387.124s-.263-.1-.415-.083,0,.083,0,.1a5.338,5.338,0,0,0-1.494.207c.622-.194,1.065,0,1.618-.152.083.111.235,0,.318,0s-.083-.1,0-.1a.138.138,0,0,0,.111,0c-.083.138,0,.138.083.235a5.743,5.743,0,0,0,1.217-.083c.083,0,0,0,0-.1a2.643,2.643,0,0,0,.443,0c0,.111.18.152.111.277-.539,0-1.272.194-1.909.207-.194,0-.4-.1-.512,0,.29,0,.526.124.775.138a9.437,9.437,0,0,1,.982-.1h.207c.083,0,.29.083.415.083H64.9a2.94,2.94,0,0,1,.387-.083,6.718,6.718,0,0,0,.775.069.1.1,0,0,1,0,.166h-.913c.249,0,.221.18.138.277H63.4s-.083.124-.18.138H61.41a7.5,7.5,0,0,0,2.227,0s0,.1.083.083a9.813,9.813,0,0,1,1.024-.083l.346.332c.844-.083,1.466.36,2.282.36a.2.2,0,0,0,.083.152c.083.055-.111.138-.194.194a.913.913,0,0,1-.387,0,19,19,0,0,1-2.5.194c-.1.124,0,.221,0,.332a4.481,4.481,0,0,1,1.217,0c.152.3,0,.5-.346.526H63.374c-1.632.166-3.25.1-4.924.235a23.53,23.53,0,0,1,2.614,0h.1a15.746,15.746,0,0,0,2.448,0c.29.18.871,0,1.176.152,0,.29-.318.415-.636.484a7.882,7.882,0,0,1,.885.1,4.329,4.329,0,0,1,.719,0s0,.083,0,.083h.415a.429.429,0,0,1,.29.083H68.34a1,1,0,0,0,.207,0,.089.089,0,0,0,.083.083c.083.014,0,0,.1,0h2.614c.111,0,0,.1.111.1.871,0,1.784.111,2.766.138a.094.094,0,0,0,.111.1c.111-.014.1-.055.207-.055a.4.4,0,0,1,.166.138,28.44,28.44,0,0,0,3.25,0h3a19.448,19.448,0,0,1,2.172,0c.927-.083,1.715-.083,2.573-.1H87.51a1.647,1.647,0,0,1,.3,0c.152,0,.3.083.47.083.429,0,.858-.1,1.286-.1h1.383a7.357,7.357,0,0,0,.775-.083h.526c.512,0,1.024-.111,1.494-.1a9.046,9.046,0,0,0,1.936,0,15.351,15.351,0,0,0,2.255,0,6.169,6.169,0,0,0,1.757,0h.18c.941.152,2.006-.111,2.766,0,.29-.124.539,0,.8,0a5.449,5.449,0,0,0,.83,0h.277a4.73,4.73,0,0,0,.858-.083,6.571,6.571,0,0,0,1.494,0,3.748,3.748,0,0,0,1.48.083,19.885,19.885,0,0,0,2.407,0c.277,0,.526.166.8,0a2.849,2.849,0,0,0,.982,0c.346,0,.705.1,1.065.124a4.7,4.7,0,0,1,1.549.207c.166.567.512-.263.927-.152.207.111.18.277.277.47a.8.8,0,0,0,.567,0C117.193,96.35,117.3,96.6,117.649,96.6Zm-52.09-6.1Zm-.069,0c-.249,0-.595.124-.775,0s0,.138,0,.18a.733.733,0,0,0-.415-.111c0-.207.346-.083.36-.277H65.5c-.1.152,0,.124-.014.263Z" transform="translate(22.395 42.503)" fill="#cc543a" fill-rule="evenodd" />
                            <rect id="Rectangle_17" data-name="Rectangle 17" width="10.194" height="30.609" transform="translate(92.464 102.438)" fill="none" />
                            <path id="Path_222" data-name="Path 222" d="M67.483,72.473a.083.083,0,0,1,0-.083S67.538,72.445,67.483,72.473Z" transform="translate(25.852 35.172)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_223" data-name="Path 223" d="M72.492,71.6s-.1-.1,0-.1S72.492,71.569,72.492,71.6Z" transform="translate(27.759 34.74)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_224" data-name="Path 224" d="M72.59,71.5v-.083C72.59,71.334,72.618,71.486,72.59,71.5Z" transform="translate(27.813 34.688)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_225" data-name="Path 225" d="M71.832,71.23v-.083C71.832,71.064,71.818,71.2,71.832,71.23Z" transform="translate(27.52 34.557)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_226" data-name="Path 226" d="M72.64,71.133a.115.115,0,0,1,0-.166C72.723,70.884,72.626,71.022,72.64,71.133Z" transform="translate(27.818 34.473)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_227" data-name="Path 227" d="M68.712,70.826c0-.083-.1-.249,0-.3S68.767,70.743,68.712,70.826Z" transform="translate(26.311 34.27)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_228" data-name="Path 228" d="M70.443,70.7c-.152-.111,0-.29-.083-.415.124,0,0,.18.111.221s0,0,0,.083S70.512,70.663,70.443,70.7Z" transform="translate(26.959 34.165)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_229" data-name="Path 229" d="M70.708,69.681h-.1a.221.221,0,0,1,.1,0Z" transform="translate(27.054 33.85)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_230" data-name="Path 230" d="M70.092,69.446a.263.263,0,0,1,0-.373h0V69C70.092,69.141,69.995,69.266,70.092,69.446Z" transform="translate(26.826 33.52)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_231" data-name="Path 231" d="M71,69.29v0Z" transform="translate(27.204 33.614)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_232" data-name="Path 232" d="M68.62,69.2v-.111C68.62,69.064,68.662,69.174,68.62,69.2Z" transform="translate(26.292 33.568)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_233" data-name="Path 233" d="M70.7,69.234a.173.173,0,0,0-.1-.152C70.511,69.04,70.691,69.193,70.7,69.234Z" transform="translate(27.043 33.564)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_234" data-name="Path 234" d="M70.922,69.2v-.166A.5.5,0,0,0,70.922,69.2Z" transform="translate(27.172 33.539)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_235" data-name="Path 235" d="M68.225,69.115c-.083,0,0,0-.1-.1Z" transform="translate(26.092 33.521)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_236" data-name="Path 236" d="M68.629,69.077c-.069,0,0-.194,0-.277A.318.318,0,0,1,68.629,69.077Z" transform="translate(26.284 33.435)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_237" data-name="Path 237" d="M70.9,69.063c-.124-.069,0-.166,0-.221S70.826,69.063,70.9,69.063Z" transform="translate(27.143 33.45)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_238" data-name="Path 238" d="M70.025,68.916l-.069-.1C69.886,68.722,70.025,68.874,70.025,68.916Z" transform="translate(26.796 33.423)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_239" data-name="Path 239" d="M70.222,68.84v-.111C70.222,68.619,70.208,68.812,70.222,68.84Z" transform="translate(26.903 33.379)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_240" data-name="Path 240" d="M70.469,68.748s-.083-.124,0-.1,0,0-.083,0S70.5,68.706,70.469,68.748Z" transform="translate(26.961 33.354)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_241" data-name="Path 241" d="M69.06,68.51C69.171,68.51,69.06,68.69,69.06,68.51Z" transform="translate(26.461 33.287)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_242" data-name="Path 242" d="M68.4,68.46v-.18a.166.166,0,0,1,0,.18Z" transform="translate(26.208 33.179)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_243" data-name="Path 243" d="M68.317,68.392C68.234,68.392,68.234,68.3,68.317,68.392Z" transform="translate(26.152 33.207)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_244" data-name="Path 244" d="M67.35,68.318v-.1C67.35,68.194,67.378,68.3,67.35,68.318Z" transform="translate(25.806 33.145)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_245" data-name="Path 245" d="M67.444,68.027C67.333,67.917,67.444,67.875,67.444,68.027Z" transform="translate(25.823 33.005)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_246" data-name="Path 246" d="M67.439,70.244h-.1c-.1,0,0-.124,0-.18S67.37,70.133,67.439,70.244Z" transform="translate(25.786 34.04)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_247" data-name="Path 247" d="M68.94,69.24h.083v-.152h0c-.138-.083.083-.166,0-.318.138.138,0,.47.069.609s0-.138-.111-.152S69.023,69.268,68.94,69.24Z" transform="translate(26.415 33.436)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_248" data-name="Path 248" d="M70.64,69.022h0v-.069C70.64,68.884,70.654,69.161,70.64,69.022Z" transform="translate(27.066 33.498)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_249" data-name="Path 249" d="M70.44,68.368h.111v-.277c0-.055-.1.318,0,.387h0c.166.235,0,.484.1.733-.263-.111.1-.36-.18-.484h0S70.606,68.506,70.44,68.368Z" transform="translate(26.989 33.123)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_250" data-name="Path 250" d="M68.183,68.39l-.1-.083C67.989,68.224,68.252,68.363,68.183,68.39Z" transform="translate(26.079 33.177)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_251" data-name="Path 251" d="M66.85,95.016a.548.548,0,0,1,.083.18c0,.055-.1.277,0,.429a1.525,1.525,0,0,1,.207.387.581.581,0,0,0,.083.207c.1.194,0,.36.3.443s.263.3.429.429a10.589,10.589,0,0,1,1.383.858,4.692,4.692,0,0,1,.539.111c.083,0,.138.1.221.111.318.083.705,0,.941.152a.429.429,0,0,0,.152,0h1.618a1.457,1.457,0,0,0,.885-.152,2.766,2.766,0,0,0,.47-.194c.194,0,.332-.138.512-.194a1.443,1.443,0,0,1,.387-.1c.166-.014.277-.18.387-.29h.166c.318-.221.719-.456.844-.747v-.124a.733.733,0,0,1,.3-.692s0,0,0-.083.346-.138.332-.249-.166-.1-.194-.166.18-.235.138-.332-.152-.111-.18-.152a.65.65,0,0,1,0-.512c0-.083.166-.111.138-.18s-.263-.111-.4-.028c-.415-.166-.1-.609-.277-.871.152-.194-.1-.373,0-.567s0-.083,0-.111-.083-.152-.111-.235a2.394,2.394,0,0,0-.111-.373c.249-.18,0-.3,0-.456s.083-.111.083-.166v-.166c0-.055.083-.111.083-.166v-.235c0-.055-.111-.1-.111-.138a1.114,1.114,0,0,0-.124-.553c.152-.3-.1-.581,0-.941a.263.263,0,0,1,0-.263h0s-.138-.4,0-.595h0a.968.968,0,0,0,0-.83c.124-.166,0-.346,0-.553v-.277a4.149,4.149,0,0,1,0-.581.575.575,0,0,1-.1-.152,1.823,1.823,0,0,1,0-.277,3.015,3.015,0,0,1,0-1.107c0-.1-.083-.18-.111-.29s.083-.373,0-.553a1.285,1.285,0,0,0,0-.138,1.382,1.382,0,0,1,0-.332c0-.29-.152-.581,0-.844a3.665,3.665,0,0,1-.138-1.245c-.138-.083,0-.166,0-.263a1.867,1.867,0,0,1-.1-.954c-.249-1.245-.138-2.559-.415-3.8.111-.1,0-.249,0-.332s0-.069.083-.111,0-.36-.069-.553,0-.166-.166-.235,0,0,.124,0c-.29-.124-.152-.553-.235-.747h0v-.124c0-.36-.318-.609-.429-.9,0,0,.166-.138,0-.18s0,.124-.124.124a.235.235,0,0,0-.111-.277V72.5c0-.1-.124,0-.111,0a3.1,3.1,0,0,0,0-.373c0-.138-.152-.207-.083-.249s-.1,0-.124,0a.354.354,0,0,1,0-.36c.1-.111-.124,0-.138-.1s.111,0,0,0H73.6a.175.175,0,0,1-.18-.083.9.9,0,0,1-.111-.235c-.041-.083,0-.166,0-.249s-.111-.1-.111-.18.1-.111.083-.18-.1,0-.1,0a1.134,1.134,0,0,0-.221-.678c.207.277,0,.484.166.719-.111,0,0,.111-.083.152h-.111c-.1,0,.069.36.069.539s.083,0,.111,0a1.231,1.231,0,0,0,0,.207h-.277c0-.235-.18-.567-.207-.858,0-.083.1-.166,0-.221s-.124.235-.138.346.138.3.1.443,0,0,0,.083.083.083.069.111,0,0,0,.069.1.111.1.18-.1.221-.069.346-.152,0-.166,0a2.556,2.556,0,0,0,0-.318h-.083v-.1c0-.1-.194.111-.277,0a5.63,5.63,0,0,1,0-.844s-.124,0-.138-.083v-.816a1.784,1.784,0,0,0,0,1.01h0a1.383,1.383,0,0,1,0,.443l-.332.166c.1.373-.346.65-.346,1.01a.485.485,0,0,0-.152,0A1.162,1.162,0,0,1,71,72.318v-.166c-.221-.318,0-.747-.194-1.12a.456.456,0,0,0-.332,0c0,.18.111.36,0,.553s-.5,0-.512-.166a3.112,3.112,0,0,1,0-.83c-.166-.733-.1-1.383-.235-2.2a8.059,8.059,0,0,1,0,1.162h.083a2.85,2.85,0,0,0,0,1.093c-.18.138,0,.4-.152.539a.567.567,0,0,1-.484-.29,3.4,3.4,0,0,1-.1.4,2.376,2.376,0,0,0,0,.318c0,.055-.083,0-.083,0v.18c0,.1,0,.083-.083.138v.927h0a2.944,2.944,0,0,0,0,.346v.83c0,.221-.1,0-.1,0a11.065,11.065,0,0,0-.138,1.2h-.1c.028,0,.1,0,.083.1a.263.263,0,0,1-.124,0,5.684,5.684,0,0,0,0,1.383c0,.456,0,.913,0,1.383a3.9,3.9,0,0,1,0,.968,6.6,6.6,0,0,1,.083,1.148,5.27,5.27,0,0,0,0,.816v.138c0,.055-.083.138-.083.207a5.515,5.515,0,0,1,.1.581v.622c0,.111.083.221.083.346v.235a4.66,4.66,0,0,1,.1.664,1.563,1.563,0,0,0,0,.871,3.112,3.112,0,0,0,0,1.01c-.194.249,0,.512,0,.788v.083c-.152.415.111.9,0,1.231.124.138,0,.249,0,.36v.5a.978.978,0,0,0,.069.387c.069.138-.18.429,0,.664a.747.747,0,0,0-.083.664c-.18.36,0,.719,0,1.079,0,.124-.152.235,0,.36-.138.138,0,.29,0,.443a2.955,2.955,0,0,1-.124.47c-.028.152,0,.526-.207.692-.567.083.263.235.152.415a1.065,1.065,0,0,1-.484.138c-.083.083,0,.166,0,.249S66.85,94.877,66.85,95.016Zm6.1-23.334h0c.166.014-.014.083,0,0Zm0,0c0-.111-.124-.263,0-.346s-.152,0-.18,0a.235.235,0,0,0,.111-.18c.207,0,.083.152.263.152s0,.1,0,.124v.249c0,.1-.111-.014-.249-.028Z" transform="translate(25.614 34.672)" fill="#cc543a" fill-rule="evenodd" />
                            <rect id="Rectangle_18" data-name="Rectangle 18" width="10.194" height="44.192" transform="matrix(0.645, -0.765, 0.765, 0.645, 94.395, 107.263)" fill="none" />
                            <path id="Path_252" data-name="Path 252" d="M92,82.65h.124a.069.069,0,0,1-.124,0Z" transform="translate(35.25 40.156)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_253" data-name="Path 253" d="M89.8,87.29s.166,0,.083.111S89.828,87.332,89.8,87.29Z" transform="translate(34.407 42.416)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_254" data-name="Path 254" d="M89.83,87.47h.111C89.968,87.47,89.83,87.511,89.83,87.47Z" transform="translate(34.419 42.497)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_255" data-name="Path 255" d="M90.62,87.14h.111A.287.287,0,0,1,90.62,87.14Z" transform="translate(34.722 42.336)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_256" data-name="Path 256" d="M90.24,87.861a.221.221,0,0,1,.221.1C90.378,88.054,90.309,87.9,90.24,87.861Z" transform="translate(34.576 42.692)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_257" data-name="Path 257" d="M93.14,85.17c.1,0,.346.152.332.3C93.4,85.322,93.209,85.308,93.14,85.17Z" transform="translate(35.687 41.394)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_258" data-name="Path 258" d="M92.21,86.63c.207,0,.3.277.512.332,0,.111-.221-.166-.332-.124a.5.5,0,0,1,0-.124S92.21,86.727,92.21,86.63Z" transform="translate(35.331 42.106)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_259" data-name="Path 259" d="M93,87.67h.111v.083Z" transform="translate(35.633 42.598)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_260" data-name="Path 260" d="M93.84,87.55a.553.553,0,0,1,.443.332h0s.207.207,0,.083S94.061,87.688,93.84,87.55Z" transform="translate(35.955 42.559)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_261" data-name="Path 261" d="M93.31,88.3a.138.138,0,0,1,.138,0,.1.1,0,0,1-.138,0Z" transform="translate(35.752 42.891)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_262" data-name="Path 262" d="M94.93,86.57a1.593,1.593,0,0,0,.152.1C95.137,86.694,94.93,86.639,94.93,86.57Z" transform="translate(36.373 42.064)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_263" data-name="Path 263" d="M93.59,88.12h.221C93.894,88.12,93.645,88.161,93.59,88.12Z" transform="translate(35.86 42.813)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_264" data-name="Path 264" d="M93.47,88.36a.223.223,0,0,1,.221.1C93.76,88.554,93.553,88.388,93.47,88.36Z" transform="translate(35.814 42.935)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_265" data-name="Path 265" d="M95.31,86.33h.166A.5.5,0,0,1,95.31,86.33Z" transform="translate(36.519 41.943)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_266" data-name="Path 266" d="M95.08,86.7c.083,0,.235.138.318.221a.581.581,0,0,1-.318-.221Z" transform="translate(36.43 42.134)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_267" data-name="Path 267" d="M93.65,88.45c.152,0,.207.138.263.194A.584.584,0,0,0,93.65,88.45Z" transform="translate(35.882 42.983)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_268" data-name="Path 268" d="M94.33,87.922a.388.388,0,0,1,.166,0Q94.413,88.088,94.33,87.922Z" transform="translate(36.143 42.717)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_269" data-name="Path 269" d="M94.31,88.14a.147.147,0,0,1,.124.083C94.476,88.306,94.351,88.168,94.31,88.14Z" transform="translate(36.135 42.828)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_270" data-name="Path 270" d="M94.282,88.39s.18,0,0,.124,0,0,0-.083S94.31,88.445,94.282,88.39Z" transform="translate(36.094 42.953)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_271" data-name="Path 271" d="M95.4,87.556C95.263,87.556,95.236,87.348,95.4,87.556Z" transform="translate(36.51 42.498)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_272" data-name="Path 272" d="M95.91,87.12a.29.29,0,0,1,.207.152.415.415,0,0,1-.207-.152Z" transform="translate(36.748 42.334)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_273" data-name="Path 273" d="M96,87.08c0-.083.152,0,.083,0Z" transform="translate(36.783 42.291)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_274" data-name="Path 274" d="M96.73,86.425a.111.111,0,0,1,.124,0S96.73,86.467,96.73,86.425Z" transform="translate(37.063 41.981)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_275" data-name="Path 275" d="M97,86.74C97.194,86.74,97.166,86.878,97,86.74Z" transform="translate(37.166 42.145)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_276" data-name="Path 276" d="M94.6,84.69a.455.455,0,0,0,.138,0c0,.111.124.111.152.194S94.752,84.731,94.6,84.69Z" transform="translate(36.246 41.156)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_277" data-name="Path 277" d="M94.84,86.889v.083h0c0,.083.124.083.194.138h0a.974.974,0,0,0,.346.3c-.263,0-.553-.415-.719-.512.083,0,.152.124.235,0S94.743,86.958,94.84,86.889Z" transform="translate(36.269 42.227)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_278" data-name="Path 278" d="M93.825,88.284h.069S93.673,88.173,93.825,88.284Z" transform="translate(35.929 42.87)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_279" data-name="Path 279" d="M95.015,89h0a.376.376,0,0,1,.263.3c0,.124-.277-.373-.456-.318a.208.208,0,0,1,0-.1c-.36-.1-.539-.47-.871-.622.29-.1.332.415.65.318h0S94.766,88.983,95.015,89Z" transform="translate(35.997 42.932)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_280" data-name="Path 280" d="M96.13,87h0Z" transform="translate(36.833 42.268)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_281" data-name="Path 281" d="M77.967,68.3s-.194,0-.263-.111a1.317,1.317,0,0,0-.443-.429c-.194-.1-.387-.111-.553-.207a1.217,1.217,0,0,0-.29-.124c-.277-.111-.415-.29-.678-.18s-.512-.083-.761,0H74.9a9,9,0,0,1-1.8.221,3.692,3.692,0,0,1-.484.3.38.38,0,0,0-.263.069c-.083.069-.456.526-.761.581v.138c-.4.47-.678.913-1.024,1.245-.083.3-.318.539-.4.816a3.552,3.552,0,0,0-.111.553,1.044,1.044,0,0,1-.111.567c-.111.194,0,.249-.124.373s0,.387,0,.567,0,.111-.069.166a2.891,2.891,0,0,0,.29,1.383l.111.138c.249.194.595.567.567.871h.1c.1,0,0,.4,0,.5s.221,0,.318,0,.138.346.277.415.207,0,.29,0a1.383,1.383,0,0,1,.539.5c0,.111,0,.235.124.277s.207,0,.318-.18c.47-.166.733.5,1.148.595.111.3.484.277.664.47s0,.124.1.152.221,0,.318.124a4.632,4.632,0,0,0,.484.277c0,.346.36.249.526.4s.069.166.138.221.152,0,.207.1a.766.766,0,0,0,.138.221c.055.042.124,0,.152,0s0,.111.1.152a.444.444,0,0,0,.235,0c.055,0,.373.4.692.429.235.4.692.456,1,.927a.581.581,0,0,1,.3.207h.1a1.875,1.875,0,0,1,.678.512h.083a1.9,1.9,0,0,0,.913.761c.111.249.415.318.636.5s.166.235.277.29a8.3,8.3,0,0,1,.65.526h.221c.055,0,.18.207.3.263a6.142,6.142,0,0,1,1.245,1,2.767,2.767,0,0,0,.4.194c.235.138.36.415.581.553s.138,0,.194.083a3.707,3.707,0,0,1,.36.318c.318.263.719.415.941.761a7.207,7.207,0,0,1,1.466,1.051c.18,0,.207.138.318.221a3.9,3.9,0,0,1,1.107.8c1.535.982,2.918,2.282,4.468,3.223,0,.166.249.263.387.29s0,.111.083.166c.277,0,.4.3.65.456.152-.083.207.124.36.1s-.083,0,0,.111c.318-.111.705.4.968.512h.18a6.335,6.335,0,0,0,1.259.512s0,.249.152.207-.124-.124,0-.221a.36.36,0,0,0,.373.166c.124.1.152.207.318.221s0-.111.111,0a1.939,1.939,0,0,1,.387.373.3.3,0,0,1,.346.166c.083,0,0-.124,0-.111a.872.872,0,0,1,.4.332h.194c.055,0-.083.083,0,.1s0-.111.1-.166.124,0,.207,0a1.356,1.356,0,0,1,.318.124c.111.042.194.166.3.207s.18,0,.263,0,0,.18.152.235,0-.083.1,0a2.351,2.351,0,0,0,.885.456c-.443-.111-.526-.456-.913-.553,0-.111-.166,0-.1-.194s0,.124-.083.069,0,0,0-.083,0-.111.1-.207c-.221-.18-.443-.277-.65-.443h0a1.165,1.165,0,0,0-.249-.152c-.111-.041,0-.194.124-.263.263.235.747.387,1.079.636.1.083.124.249.29.166-.18-.083-.18-.3-.29-.429s-.415-.166-.553-.332,0-.1,0-.124-.124,0-.166,0,0-.083,0-.111-.166,0-.249-.1a1.612,1.612,0,0,0-.332-.373c-.152-.1.083-.124.124-.111l.36.29v-.083c0-.083,0,.083.111,0s0-.235.111-.263c.277.277.705.526.913.788h.18c.332.18.609.5.941.705a3.348,3.348,0,0,0-1.107-.927v-.1a5.532,5.532,0,0,1-.553-.36v-.4c-.47-.29-.5-.885-.9-1.217v-.152c0-.055.138,0,.221,0s.152,0,.18.166c.484.111.858.636,1.383.9a.346.346,0,0,0,.18-.277c-.152-.221-.456-.249-.567-.539.111-.29.318-.387.5-.249a6.75,6.75,0,0,1,.9.8c.927.553,1.674,1.273,2.587,1.867a15.218,15.218,0,0,1-1.286-1.093h-.1a7.207,7.207,0,0,0-1.245-.968c0-.263-.456-.332-.5-.609a.581.581,0,0,1,.636-.1,3.691,3.691,0,0,1-.387-.443c-.1-.111-.332-.194-.36-.29h-.249a.221.221,0,0,1-.1-.194c-.277-.29-.636-.484-.913-.788l-.1-.083V90h0a2.945,2.945,0,0,0-.36-.36c-.318-.249-.622-.595-.885-.8,0,0,.083,0,0-.124-.387-.4-.816-.83-1.245-1.231,0,0,.069-.1,0-.124s-.111,0-.166,0a.387.387,0,0,1,0-.18A10.691,10.691,0,0,0,97,85.881c-.539-.4-1.037-.83-1.535-1.217a7.167,7.167,0,0,1-1.107-.871c-.5-.318-.885-.65-1.383-1a10.264,10.264,0,0,0-.9-.747.29.29,0,0,1-.194-.069,1.483,1.483,0,0,0-.18-.263c-.083-.069-.484-.277-.692-.456l-.664-.609a3.718,3.718,0,0,0-.443-.263c-.083,0-.138-.194-.221-.277a8.766,8.766,0,0,1-.8-.553,3.582,3.582,0,0,0-.941-.816,6.031,6.031,0,0,0-1.107-.954c-.138-.387-.553-.47-.83-.761V76.9c-.373-.5-1.065-.733-1.383-1.162-.221,0-.249-.235-.36-.36a3.74,3.74,0,0,0-.456-.3c-.138-.111,0-.111-.1-.152a2.3,2.3,0,0,0-.47-.3c-.249-.18-.36-.539-.705-.664a1.466,1.466,0,0,0-.678-.678c-.263-.484-.8-.65-1.148-1.051-.124-.138-.166-.346-.373-.36,0-.235-.277-.318-.443-.47a5.751,5.751,0,0,1-.443-.539c-.152-.18-.609-.429-.622-.8.277-.512-.429,0-.567-.263s.083-.29.166-.484-.152-.194-.277-.235S78.119,68.481,77.967,68.3ZM99.793,94.719C99.654,94.83,99.71,94.65,99.793,94.719Zm0,0c.124.1.373.152.4.3s0-.124.138-.124a.36.36,0,0,0,.124.263c-.124.152-.221-.083-.346,0s-.083-.1-.18,0c-.1-.166-.207-.1-.277-.249s.1-.111.194-.207Z" transform="translate(26.724 34.028)" fill="#cc543a" fill-rule="evenodd" />
                            <rect id="Rectangle_19" data-name="Rectangle 19" width="10.194" height="30.097" transform="translate(126.075 102.408)" fill="none" />
                            <path id="Path_282" data-name="Path 282" d="M91.783,72.389a.069.069,0,0,1,0-.069S91.838,72.375,91.783,72.389Z" transform="translate(35.163 35.138)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_283" data-name="Path 283" d="M96.792,71.537s-.1-.1,0-.1S96.792,71.509,96.792,71.537Z" transform="translate(37.07 34.711)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_284" data-name="Path 284" d="M96.89,71.44v-.083C96.89,71.274,96.918,71.426,96.89,71.44Z" transform="translate(37.124 34.659)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_285" data-name="Path 285" d="M96.132,71.178v-.1C96.132,71.054,96.118,71.151,96.132,71.178Z" transform="translate(36.831 34.535)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_286" data-name="Path 286" d="M96.951,71.046a.138.138,0,0,1-.069-.166C96.951,70.949,96.937,71.046,96.951,71.046Z" transform="translate(37.118 34.442)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_287" data-name="Path 287" d="M93.012,70.786c0-.083-.1-.249,0-.3S93.012,70.69,93.012,70.786Z" transform="translate(35.622 34.251)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_288" data-name="Path 288" d="M94.743,70.651c-.152-.1,0-.277-.083-.4.124,0,0,.18.111.221C94.771,70.471,94.812,70.61,94.743,70.651Z" transform="translate(36.269 34.145)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_289" data-name="Path 289" d="M95.027,69.65h0Z" transform="translate(36.373 33.837)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_290" data-name="Path 290" d="M94.392,69.417a.263.263,0,0,1,0-.373h0C94.392,69.237,94.336,69.237,94.392,69.417Z" transform="translate(36.137 33.52)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_291" data-name="Path 291" d="M95.27,69.275v-.1C95.27,69.081,95.3,69.261,95.27,69.275Z" transform="translate(36.503 33.599)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_292" data-name="Path 292" d="M92.92,69.182v-.111C92.92,69.044,93.031,69.154,92.92,69.182Z" transform="translate(35.603 33.559)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_293" data-name="Path 293" d="M95.034,69.21a.147.147,0,0,0-.1-.138C94.841,69.044,95.034,69.154,95.034,69.21Z" transform="translate(36.365 33.56)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_294" data-name="Path 294" d="M95.222,69.179v-.166A.5.5,0,0,0,95.222,69.179Z" transform="translate(36.482 33.53)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_295" data-name="Path 295" d="M92.525,69.1c-.083,0,0,0-.1-.1S92.5,69.014,92.525,69.1Z" transform="translate(35.403 33.509)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_296" data-name="Path 296" d="M92.92,69.073V68.81a.29.29,0,0,1,0,.263Z" transform="translate(35.603 33.44)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_297" data-name="Path 297" d="M95.2,69.064c-.124,0,0-.166,0-.221S95.126,68.981,95.2,69.064Z" transform="translate(36.453 33.45)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_298" data-name="Path 298" d="M94.342,68.9a.194.194,0,0,1,0-.111C94.37,68.79,94.328,68.859,94.342,68.9Z" transform="translate(36.145 33.424)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_299" data-name="Path 299" d="M94.522,68.823v-.111C94.522,68.671,94.508,68.782,94.522,68.823Z" transform="translate(36.214 33.382)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_300" data-name="Path 300" d="M94.769,68.724s-.083-.111,0-.083,0,0-.083,0S94.8,68.7,94.769,68.724Z" transform="translate(36.271 33.349)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_301" data-name="Path 301" d="M93.36,68.5C93.471,68.5,93.36,68.68,93.36,68.5Z" transform="translate(35.771 33.282)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_302" data-name="Path 302" d="M92.706,68.446a.18.18,0,0,1,0-.166A.152.152,0,0,1,92.706,68.446Z" transform="translate(35.513 33.178)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_303" data-name="Path 303" d="M92.617,68.39c-.083,0-.083-.083,0-.069Z" transform="translate(35.463 33.193)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_304" data-name="Path 304" d="M91.655,68.307a.069.069,0,0,1,0-.1S91.683,68.293,91.655,68.307Z" transform="translate(35.111 33.141)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_305" data-name="Path 305" d="M91.744,68.027C91.633,67.917,91.744,67.875,91.744,68.027Z" transform="translate(35.133 33.005)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_306" data-name="Path 306" d="M91.739,70.218l-.1-.069c-.1-.069,0-.111,0-.166S91.67,70.121,91.739,70.218Z" transform="translate(35.097 34.004)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_307" data-name="Path 307" d="M93.255,69.22h.083v-.152h0c-.138,0,.083-.166,0-.318.138.152,0,.484,0,.609s0-.138-.111-.152S93.38,69.248,93.255,69.22Z" transform="translate(35.71 33.426)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_308" data-name="Path 308" d="M94.94,69Z" transform="translate(36.377 33.523)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_309" data-name="Path 309" d="M94.74,68.368h.111v-.277c0-.055-.1.3,0,.373h0c.166.235,0,.484.1.719-.263-.1.1-.346-.18-.47h0S94.906,68.507,94.74,68.368Z" transform="translate(36.3 33.121)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_310" data-name="Path 310" d="M92.477,68.373l-.1-.083S92.546,68.345,92.477,68.373Z" transform="translate(35.396 33.18)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_311" data-name="Path 311" d="M91.15,94.572a.521.521,0,0,1,.083.194c0,.069-.1.263,0,.415a1.525,1.525,0,0,1,.207.387c.041.138,0,.124.083.194s0,.346.3.429.263.318.429.429c.4.3,1.051.484,1.383.844a4.694,4.694,0,0,1,.539.111c.083,0,.138.1.221.111a4.509,4.509,0,0,1,.941.138h1.77c.277-.083.609,0,.885-.138a4.773,4.773,0,0,0,.47-.194l.512-.18c.194,0,.221-.083.387-.111s.277-.18.387-.277a.58.58,0,0,1,.166,0c.318-.207.719-.429.844-.733V96.08a.705.705,0,0,1,.3-.678v-.083c0-.083.346-.138.332-.249s-.166-.1-.194-.166.18-.221.138-.332-.152-.1-.18-.138a.622.622,0,0,1,0-.5c0-.083.166-.124.138-.18s-.152-.111-.346-.1c-.415-.166-.1-.609-.277-.858.152-.194-.1-.373,0-.553s0-.083,0-.124-.083-.138-.111-.221a2.211,2.211,0,0,0-.111-.36c.249-.18,0-.3,0-.456s.083-.1.083-.166-.069-.1-.069-.152.083-.124.083-.18v-.1c0-.1.069,0,0-.124s-.111-.1-.111-.138a1.069,1.069,0,0,0-.124-.539c.152-.3-.1-.567,0-.927,0-.1-.083-.166,0-.249h0s-.138-.387,0-.581h0a.941.941,0,0,0,0-.816c.124-.152,0-.346,0-.539V86.3a3.927,3.927,0,0,1,0-.567.575.575,0,0,1-.1-.152,1.657,1.657,0,0,1,0-.263,2.946,2.946,0,0,1,0-1.093c0-.1-.083-.18-.111-.29s.083-.373,0-.553,0-.083,0-.124a1.382,1.382,0,0,1,0-.332c0-.277-.152-.567,0-.83a3.513,3.513,0,0,1-.138-1.217c-.138-.083,0-.166,0-.263a1.77,1.77,0,0,1-.1-.927c-.249-1.231-.138-2.517-.415-3.748.111-.1,0-.235,0-.318s0-.083.083-.124,0-.346,0-.539,0-.166-.166-.235H99.5c-.29-.124-.152-.539-.235-.733h0v-.124c0-.346-.318-.581-.429-.885,0,0,.166-.124,0-.166s0,.124-.124.124a.221.221,0,0,0-.111-.263v-.263c0-.1-.124,0-.111,0a3.11,3.11,0,0,0,0-.373c0-.138-.152-.194-.083-.249s-.1,0-.124,0a.354.354,0,0,1,0-.36c.1-.111-.124,0-.138-.1s.111,0,0,0h-.194a.175.175,0,0,1-.18-.083c-.069-.083,0-.138-.111-.221s0-.166,0-.249-.111-.1-.111-.166.1-.111.083-.18-.1,0-.1,0a1.093,1.093,0,0,0-.221-.664c.207.277,0,.47.166.705-.111,0,.069.111-.083.152h-.111c-.1,0,0,.36,0,.539s.083,0,.111,0a.94.94,0,0,0,0,.194c-.1,0-.138.083-.277,0s-.18-.567-.194-.844.083-.18,0-.221-.124.221-.138.332.138.3.1.443,0,0,0,.083.083.083,0,.111h0s.1.1.1.166-.1.221,0,.346-.152,0-.166,0a2.243,2.243,0,0,0,0-.3.083.083,0,0,1-.083,0s0,0,0-.083-.194.1-.277,0a5.271,5.271,0,0,1,0-.816s-.124,0-.138-.083,0-.539,0-.8a1.687,1.687,0,0,0,0,.982h0a1.383,1.383,0,0,1,0,.443,1.84,1.84,0,0,1-.332.152c.1.373-.346.65-.346,1.01h-.152a1.162,1.162,0,0,1-.194-.083s0-.111,0-.166c-.221-.3,0-.733-.194-1.107a.539.539,0,0,0-.332,0c0,.18.111.346,0,.539s-.5,0-.512-.152a3.14,3.14,0,0,1,0-.83c-.166-.719-.1-1.383-.235-2.158a4.552,4.552,0,0,1,0,1.148h.083a2.767,2.767,0,0,0,0,1.079c-.18.124,0,.387-.152.512a.526.526,0,0,1-.484-.277,2.637,2.637,0,0,1-.1.387,2.377,2.377,0,0,0,0,.318c0,.042-.083,0-.083,0v.18c0,.1,0,.083-.083.138v.913h0a2.421,2.421,0,0,0,0,.332c0,.277,0,.595,0,.816s-.1,0-.1,0a10.39,10.39,0,0,0-.138,1.19h-.1c.028,0,.1,0,.083.1l-.124.083a5.534,5.534,0,0,0,0,1.383V78a3.762,3.762,0,0,1,0,.954,6.294,6.294,0,0,1,.083,1.12,5.049,5.049,0,0,0,0,.8s0,.083,0,.138-.083.138-.083.207a5.135,5.135,0,0,1,.1.567V82.4c0,.111.083.221.083.346v.235a4.416,4.416,0,0,1,.1.65,1.508,1.508,0,0,0,0,.858,3.015,3.015,0,0,0,0,1c-.194.235,0,.5,0,.775v.069c-.152.415.111.885,0,1.217.124.124,0,.235,0,.36v.858c0,.124-.18.429,0,.664a.719.719,0,0,0-.083.65c-.18.346,0,.705,0,1.065,0,.111-.152.221,0,.346-.138.124,0,.277,0,.429a2.955,2.955,0,0,1-.124.47c-.028.152,0,.512-.207.678-.567.083.263.235.152.415s-.277.083-.484.124,0,.166,0,.249S91.15,94.448,91.15,94.572Zm6.1-22.933Zm0,0c0-.111-.124-.263,0-.332s-.152,0-.18,0a.235.235,0,0,0,.111-.194c.207,0,.083.166.263.166s0,.1,0,.124v.249c0,.1-.111-.028-.249-.042Z" transform="translate(34.925 34.612)" fill="#cc543a" fill-rule="evenodd" />
                            <rect id="Rectangle_20" data-name="Rectangle 20" width="35.16" height="10.194" transform="translate(97.678 29.376)" fill="none" />
                            <path id="Path_312" data-name="Path 312" d="M75.827,26.428a.111.111,0,0,1-.1,0C75.744,26.414,75.785,26.372,75.827,26.428Z" transform="translate(29.016 12.822)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_313" data-name="Path 313" d="M74.807,21.441s-.111.083-.1,0S74.78,21.427,74.807,21.441Z" transform="translate(28.625 8.193)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_314" data-name="Path 314" d="M74.7,21.325h-.1C74.511,21.325,74.691,21.284,74.7,21.325Z" transform="translate(28.576 8.157)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_315" data-name="Path 315" d="M74.392,22.08h-.111A.257.257,0,0,0,74.392,22.08Z" transform="translate(28.46 8.454)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_316" data-name="Path 316" d="M74.27,21.281a.166.166,0,0,1-.18,0C74.118,21.267,74.2,21.295,74.27,21.281Z" transform="translate(28.388 8.146)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_317" data-name="Path 317" d="M73.928,25.218c-.083,0-.277.111-.346,0S73.832,25.162,73.928,25.218Z" transform="translate(28.19 9.631)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_318" data-name="Path 318" d="M73.78,23.5c-.111.138-.318,0-.47.069,0-.124.221,0,.263-.111h.083A.091.091,0,0,1,73.78,23.5Z" transform="translate(28.089 8.979)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_319" data-name="Path 319" d="M72.62,23.22v0Z" transform="translate(27.825 8.89)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_320" data-name="Path 320" d="M72.336,23.84a.36.36,0,0,1-.429,0h0A1.477,1.477,0,0,0,72.336,23.84Z" transform="translate(27.514 9.128)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_321" data-name="Path 321" d="M72.157,22.933a.1.1,0,0,1-.1,0S72.143,22.906,72.157,22.933Z" transform="translate(27.61 8.776)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_322" data-name="Path 322" d="M72.04,25.3H71.9C71.86,25.3,72.04,25.241,72.04,25.3Z" transform="translate(27.547 9.677)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_323" data-name="Path 323" d="M72.1,23.24s-.124,0-.166.083S72.029,23.24,72.1,23.24Z" transform="translate(27.558 8.898)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_324" data-name="Path 324" d="M72.053,23c0,.083-.111,0-.18.069S72.053,23,72.053,23Z" transform="translate(27.534 8.806)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_325" data-name="Path 325" d="M71.96,25.71c0,.1,0,.083-.111.1S71.932,25.751,71.96,25.71Z" transform="translate(27.516 12.488)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_326" data-name="Path 326" d="M71.954,25.287h-.3A.47.47,0,0,1,71.954,25.287Z" transform="translate(27.453 9.673)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_327" data-name="Path 327" d="M71.926,23c-.083.111-.194,0-.263,0S71.843,23.111,71.926,23Z" transform="translate(27.454 8.806)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_328" data-name="Path 328" d="M71.737,23.87a.155.155,0,0,0-.124.069C71.571,24.008,71.682,23.87,71.737,23.87Z" transform="translate(27.435 9.139)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_329" data-name="Path 329" d="M71.645,23.68c0,.069,0,0-.124,0S71.617,23.694,71.645,23.68Z" transform="translate(27.389 9.067)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_330" data-name="Path 330" d="M71.542,23.47c0,.069-.138.083-.111,0s0,0,0,.083S71.5,23.456,71.542,23.47Z" transform="translate(27.368 8.973)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_331" data-name="Path 331" d="M71.27,24.852C71.353,24.755,71.477,24.852,71.27,24.852Z" transform="translate(27.307 9.499)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_332" data-name="Path 332" d="M71.2,25.5a.166.166,0,0,1-.194,0A.318.318,0,0,1,71.2,25.5Z" transform="translate(27.208 12.379)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_333" data-name="Path 333" d="M71.144,25.61c0,.069-.111.069-.083,0Z" transform="translate(27.226 12.438)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_334" data-name="Path 334" d="M71.031,26.563a.083.083,0,0,1-.111,0S71.031,26.536,71.031,26.563Z" transform="translate(27.173 12.895)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_335" data-name="Path 335" d="M70.73,26.47C70.606,26.581,70.564,26.47,70.73,26.47Z" transform="translate(27.059 12.856)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_336" data-name="Path 336" d="M73.252,26.51v.1c0,.1-.138,0-.207,0S73.141,26.579,73.252,26.51Z" transform="translate(27.981 12.877)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_337" data-name="Path 337" d="M72.172,25.059h-.083c-.083,0,0,0,0-.069s-.111,0-.18,0a.152.152,0,0,0,0-.083c-.083.138-.18-.069-.36,0,.166-.138.553,0,.705,0s-.152,0-.166.124S72.172,24.893,72.172,25.059Z" transform="translate(27.415 9.513)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_338" data-name="Path 338" d="M71.84,23.26Z" transform="translate(27.526 8.906)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_339" data-name="Path 339" d="M71.09,23.529v-.1a.494.494,0,0,1-.318-.069c-.069-.069.36.111.443,0H71.3c.263-.152.553,0,.844-.083-.138.263-.415-.1-.567.166h0A.664.664,0,0,0,71.09,23.529Z" transform="translate(27.114 8.913)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_340" data-name="Path 340" d="M71.12,25.753l-.083.1C70.954,25.947,71.093,25.684,71.12,25.753Z" transform="translate(27.208 12.503)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_341" data-name="Path 341" d="M101.727,29.869c.069,0,.138-.1.207-.1s.318.1.5,0a4.329,4.329,0,0,1,.443-.207.927.927,0,0,0,.235-.1c.221-.083.4,0,.512-.29s.346-.277.484-.429.069,0,.083,0c.36-.387.567-1.037.982-1.383a.851.851,0,0,1,.138-.539c.138-.18.1-.138.124-.221.083-.3,0-.705.166-.941s-.055-.028-.055-.028V24.018a1.866,1.866,0,0,0-.18-.871,3.054,3.054,0,0,0-.221-.484c0-.18-.152-.318-.221-.512a1.22,1.22,0,0,1-.111-.373c-.014-.152-.207-.277-.332-.387a.691.691,0,0,1,0-.18,2.338,2.338,0,0,0-.858-.83h-.138a.871.871,0,0,1-.788-.3h-.1c-.1,0-.166-.346-.277-.346s-.124.166-.207.194-.263-.166-.387-.138-.111.152-.166.194a.83.83,0,0,1-.581,0c-.1,0-.138-.152-.207-.138s-.124.152-.111.346c-.207.429-.705.1-1.01.277-.221-.152-.429.111-.636.083s-.1-.069-.138,0-.166.083-.263.111a2.835,2.835,0,0,0-.429.1c-.207-.249-.36,0-.526,0s-.124-.083-.194-.083-.124.083-.194.069-.124-.083-.194-.083h-.263c-.055,0-.111.111-.166.124a1.61,1.61,0,0,0-.622.124c-.36-.166-.678.083-1.093-.083-.111,0-.18.1-.29,0s0,.083,0,.069-.443.138-.664,0v.069a1.162,1.162,0,0,0-.941,0c-.194-.124-.415,0-.65,0s-.207-.069-.318,0-.456,0-.65,0-.124.083-.18.083h-.318a3.983,3.983,0,0,1-1.272,0,1.757,1.757,0,0,0-.332.1,1.713,1.713,0,0,0-.65,0c-.221.083-.1,0-.152.069s-.249,0-.387,0a2.476,2.476,0,0,1-.954,0,4.8,4.8,0,0,1-1.383.138c-.111.124-.207,0-.318,0a2.6,2.6,0,0,1-1.079.111c-1.383.235-2.946.124-4.371.4a.332.332,0,0,0-.387,0h-.761c-.221,0-.194,0-.277.166V21.9c-.152.29-.636.152-.871.235,0-.069,0,.069-.138.069-.4,0-.678.318-1.024.429,0,0-.166-.166-.207,0s.152,0,.138.124a.277.277,0,0,0-.3.111h-.3c-.111,0,0,.124,0,.124h-.429a.207.207,0,0,1-.29.083V23.2a.539.539,0,0,1-.415,0s0,.138-.111.152,0-.111,0-.083v.207c0,.083,0,.1-.1.166a1.067,1.067,0,0,1-.263.111c-.1.041-.194,0-.29,0s-.111.111-.194.111-.138-.083-.221-.083,0,.1,0,.1a1.535,1.535,0,0,0-.761.221c.318-.194.539,0,.816-.166,0,.111.138-.069.18.083v-.1h0v.221c.235,0,.429-.069.636-.069s0,0,0-.1.138,0,.235,0,.083.152,0,.277c-.277,0-.664.18-.982.207-.111,0-.207-.1-.263,0s.263.138.387.152.346-.138.512-.111.069,0,.111,0h.124s.124-.1.207-.083.249.1.387,0,0,.166,0,.18a1.715,1.715,0,0,0-.373,0h-.1c-.1,0,.111.18,0,.277h-.968s0,.124-.1.152h-.927a2.158,2.158,0,0,0,1.148,0v.083a2.767,2.767,0,0,1,.526-.083c0,.111.111.221.18.332.429-.083.747.346,1.162.346v.152a.184.184,0,0,1-.1.194c-.1.041-.138,0-.207,0-.346.221-.844,0-1.286.194a.36.36,0,0,0,0,.318c.207.069.4-.1.622,0s0,.5-.18.512a4.15,4.15,0,0,1-.954,0c-.844.18-1.674.111-2.531.235a10.774,10.774,0,0,1,1.383,0v-.069a4.149,4.149,0,0,0,1.259-.069c.152.18.443,0,.609.152a.581.581,0,0,1-.332.484,1.217,1.217,0,0,1,.456.1c.111,0,.3-.083.36,0s0,.069,0,.069H76.5v.083h0a1.383,1.383,0,0,0,.4,0h.941c.249,0,0,.111,0,.111.443,0,.913.1,1.383.124V28.4c0-.014,0-.111.1-.1a.3.3,0,0,1,.1.124,6.211,6.211,0,0,0,1.674,0h1.535a5.187,5.187,0,0,1,1.12,0,8.783,8.783,0,0,1,1.314-.1,6.915,6.915,0,0,0,.941,0,.391.391,0,0,1,.152-.069c.055,0,.166.1.249.1a4.417,4.417,0,0,1,.65-.1h.719c.138,0,.277-.083.4-.083s.18.069.277,0a7.773,7.773,0,0,1,.775-.083,2.144,2.144,0,0,0,.982,0,4.15,4.15,0,0,0,1.176,0c.277.194.581,0,.9,0h.083c.5.152,1.037-.124,1.383,0,.152-.138.277,0,.415,0h.567a2.49,2.49,0,0,0,.443-.083c.235,0,.5.194.775,0a.913.913,0,0,0,.761.083c.4.194.816,0,1.231,0,.152,0,.277.166.415,0,.152.138.332,0,.512.069l.539.124a1.106,1.106,0,0,1,.8.207c.083.567.263-.263.47-.152s.1.277.152.484.194,0,.29,0S101.575,29.869,101.727,29.869Zm-26.792-6.1Zm0,0c-.124,0-.3.124-.387,0s0,.138,0,.166a.277.277,0,0,0-.207-.111c0-.207.18-.083.18-.263s.111,0,.138,0h.29c.111,0-.041.124-.055.249Z" transform="translate(27.238 9.705)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_342" data-name="Path 342" d="M79.86,2A64.372,64.372,0,0,0,93.47,41.24a66.9,66.9,0,0,0,15.408,14.343,63.279,63.279,0,0,0,19.267,8.576A63.2,63.2,0,0,0,149.211,66.1,65.464,65.464,0,0,0,169.7,61.047a66.392,66.392,0,0,0,17.746-11.37,66.391,66.391,0,0,0,13.126-16.5l-8.977-4.9a56.225,56.225,0,0,1-11.065,13.832A55.865,55.865,0,0,1,165.588,51.7a55.326,55.326,0,0,1-17.22,4.246A54.3,54.3,0,0,1,114.522,47.1,56.71,56.71,0,0,1,101.506,35l-1.383-1.784a16.6,16.6,0,0,1-1.273-1.826l-2.2-3.831L94.7,23.55c-.636-1.383-1.051-2.766-1.591-4.149A56.378,56.378,0,0,1,90.04,2Z" transform="translate(30.599 0.76)" fill="none" />
                            <path id="Path_343" data-name="Path 343" d="M146.45,36.385a1.674,1.674,0,0,1,.3-.235C146.754,36.233,146.588,36.371,146.45,36.385Z" transform="translate(56.113 17.564)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_344" data-name="Path 344" d="M152.88,38.081c.1-.1.387-.387.429-.263a2.766,2.766,0,0,1-.429.263Z" transform="translate(58.577 18.361)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_345" data-name="Path 345" d="M153.36,37.932c0-.069.277-.221.387-.318A2.065,2.065,0,0,1,153.36,37.932Z" transform="translate(58.761 18.27)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_346" data-name="Path 346" d="M154,36.452a.927.927,0,0,1,.36-.332C154.415,36.189,154.138,36.341,154,36.452Z" transform="translate(59.006 17.551)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_347" data-name="Path 347" d="M155,36.729a2.573,2.573,0,0,1,.622-.609C155.609,36.272,155.277,36.521,155,36.729Z" transform="translate(59.389 17.557)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_348" data-name="Path 348" d="M153.79,32.764a5.725,5.725,0,0,1,1.093-1.024C154.482,32.017,154.15,32.5,153.79,32.764Z" transform="translate(58.925 15.435)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_349" data-name="Path 349" d="M155.52,33.618c.277-.456,1.051-.982,1.466-1.508.152,0-.692.678-.761.885l-.332.235C155.769,33.341,155.7,33.548,155.52,33.618Z" transform="translate(59.588 15.625)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_350" data-name="Path 350" d="M158.91,30.157a.5.5,0,0,1,.069-.221.083.083,0,0,1,.111,0Z" transform="translate(60.887 14.533)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_351" data-name="Path 351" d="M159.64,28.819a7.289,7.289,0,0,1,1.134-1.508.359.359,0,0,1,.083-.194c.083-.111.595-.8.207-.249a19.363,19.363,0,0,1-1.425,1.95Z" transform="translate(61.167 12.98)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_352" data-name="Path 352" d="M160.49,28.711a1.093,1.093,0,0,1,.263-.4A.927.927,0,0,1,160.49,28.711Z" transform="translate(61.493 13.756)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_353" data-name="Path 353" d="M158.91,26.93c0-.1.263-.318.36-.47a1.3,1.3,0,0,1-.36.47Z" transform="translate(60.887 12.858)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_354" data-name="Path 354" d="M160.48,28.312a6.912,6.912,0,0,1,.4-.65C161.075,27.579,160.632,28.133,160.48,28.312Z" transform="translate(61.489 13.441)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_355" data-name="Path 355" d="M160.83,28.292c0-.152.291-.443.443-.692a3.789,3.789,0,0,1-.443.692Z" transform="translate(61.623 13.416)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_356" data-name="Path 356" d="M158.85,26.309a1.471,1.471,0,0,1,.194-.429C159.057,25.963,158.919,26.157,158.85,26.309Z" transform="translate(60.864 12.575)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_357" data-name="Path 357" d="M159.32,26.579a7.829,7.829,0,0,1,.705-1.079,7.208,7.208,0,0,1-.705,1.079Z" transform="translate(61.044 12.4)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_358" data-name="Path 358" d="M161.2,27.788a3.624,3.624,0,0,1,.664-.968C161.726,27.069,161.366,27.442,161.2,27.788Z" transform="translate(61.765 13.041)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_359" data-name="Path 359" d="M160.9,26.624a2.019,2.019,0,0,1,.249-.484C161.26,26.168,161.038,26.43,160.9,26.624Z" transform="translate(61.65 12.702)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_360" data-name="Path 360" d="M161.29,26.376a1.134,1.134,0,0,1,.29-.456S161.373,26.238,161.29,26.376Z" transform="translate(61.799 12.595)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_361" data-name="Path 361" d="M161.71,26.107c0-.1.277-.512.318-.346s-.1.083-.138,0S161.834,26,161.71,26.107Z" transform="translate(61.96 12.498)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_362" data-name="Path 362" d="M161.225,24.43C161.115,24.748,160.672,25.122,161.225,24.43Z" transform="translate(61.67 9.354)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_363" data-name="Path 363" d="M160.85,23.833a3.719,3.719,0,0,1,.429-.733,3.945,3.945,0,0,1-.429.733Z" transform="translate(61.631 8.844)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_364" data-name="Path 364" d="M160.848,23.533c-.111,0,.152-.4.166-.277Z" transform="translate(61.619 8.895)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_365" data-name="Path 365" d="M160.25,22.691a.968.968,0,0,1,.194-.4C160.471,22.359,160.319,22.636,160.25,22.691Z" transform="translate(61.401 8.534)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_366" data-name="Path 366" d="M161,21.644C161.18,21.146,161.373,21.049,161,21.644Z" transform="translate(61.688 8.129)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_367" data-name="Path 367" d="M154.82,29.918a1.051,1.051,0,0,0,.152-.3c.207-.069.373-.387.595-.553C155.429,29.364,155.069,29.53,154.82,29.918Z" transform="translate(59.32 14.129)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_368" data-name="Path 368" d="M159.412,27.308c.083-.124.124-.083.221-.249s0,.083,0,.111a6.6,6.6,0,0,0,.429-.664.152.152,0,0,0,0,.111c.1-.387.526-.622.913-1.286a16.791,16.791,0,0,1-1.715,2.49c0-.124.415-.512.36-.636S159.426,27.46,159.412,27.308Z" transform="translate(61.021 12.339)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_369" data-name="Path 369" d="M161.028,27.437h0s.166-.249.194-.277S160.71,27.976,161.028,27.437Z" transform="translate(61.66 13.198)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_370" data-name="Path 370" d="M163.531,24.55h.083a6.571,6.571,0,0,1,.788-1.19,13.2,13.2,0,0,0-.968,1.729c-.069,0-.152.194-.221.249a32.875,32.875,0,0,1-2.033,3.154c.111-.609,1.134-1.383,1.273-2.116.069-.083,0,0,0,.069a7.911,7.911,0,0,0,1.079-1.895Z" transform="translate(61.757 11.416)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_371" data-name="Path 371" d="M160.77,23.389a2.363,2.363,0,0,1,.124-.373C160.922,22.9,160.894,23.319,160.77,23.389Z" transform="translate(61.6 8.805)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_372" data-name="Path 372" d="M91.955,17.455c-.069-.277-.235-.539-.3-.83-.18-.664-.235-1.273-.456-1.936s-.47-1.093-.664-1.7l-.235-.913a6.279,6.279,0,0,0-.609-2.006c-.277-.622-.5-1.383-.747-1.978a2.157,2.157,0,0,1,0-.3,26.28,26.28,0,0,1-1.549-4.025,2.6,2.6,0,0,1-.581-.553c-.083-.124-.152-.429-.249-.526-.318-.36-.705,0-.968-.733-.083,0-.1.1-.152.124-.609,0-1.12.263-1.6.1-.263.484-.595.387-.844.775a9.142,9.142,0,0,0-.429,1.024c-.166.36-.29.733-.456,1.037-.194,0-.207.47-.36.567-.083.553-.221,1-.3,1.577,0,0-.083.194-.166.207a13.293,13.293,0,0,0-.3,4.149v.65a31.811,31.811,0,0,1,.387,3.79c0,.207.1.194.138.415a2.766,2.766,0,0,0,0,1.383c0,.194.29.484.429.9s.152,1.259.332,1.812a4.921,4.921,0,0,0,.415.733,18.879,18.879,0,0,1,.941,2.628,8.5,8.5,0,0,0,.221,1c.138.3.346.484.512.387a8.3,8.3,0,0,1,1.024,1.95,19.557,19.557,0,0,0,1.19,2.31,22.891,22.891,0,0,0,1.383,2.766c.111.18.18.415.29.581s.5.65.747,1.024c.443.609.775,1.19,1.162,1.687a7.331,7.331,0,0,0,1.383,2.075c.18.249.29.526.5.8s.387.4.581.664.3.553.5.8.277.29.387.429a4.624,4.624,0,0,0,.346.553c.166.207.4.373.567.581A10.955,10.955,0,0,0,96.4,43.514a18.769,18.769,0,0,0,1.618,1.84l1.853,1.95a6.363,6.363,0,0,1,1.051.9c.1,0,.138,0,.263.138.719.761,1.66,1.383,2.393,2.116h.152a23.707,23.707,0,0,0,3.582,2.739,7.733,7.733,0,0,0,1.134.9c.415.277.913.512,1.383.8s.844.595,1.272.816c.83.456,1.867,1.162,2.656,1.6.249.111.526.166.775.277a15.022,15.022,0,0,0,1.383.664c1.84.747,3.831,1.867,5.533,2.393.512.18.968.263,1.535.443.954.277,1.853.844,2.766,1.037a1.5,1.5,0,0,1,.733.124c.581.124,1.12.318,1.729.47,1.508.36,3.015.692,4.44.968a25.4,25.4,0,0,1,3.223.373c.581,0,1.176.194,1.757.235l1.687.083a5.533,5.533,0,0,1,1.383,0h2.573c.871,0,1.77-.083,2.573,0A74.538,74.538,0,0,0,155.982,63a53.417,53.417,0,0,0,9.682-3.029,5.809,5.809,0,0,0,1.646-.678,1.992,1.992,0,0,0,.622-.152,27.541,27.541,0,0,1,2.628-1.286c.18-.263.8-.415,1.107-.692.18,0-.166.18.111.083a23.679,23.679,0,0,1,3.389-2.116s-.1,0,0,0,.277-.249.512-.4a32.342,32.342,0,0,0,3.734-2.974c.18-.083.678-.29.775-.484-.249.152-.539.373-.581.263a4.537,4.537,0,0,0,1.065-.927,5.091,5.091,0,0,0,1.093-.885c.1-.069-.166,0,0-.18.664-.484.913-.83,1.508-1.245a3.652,3.652,0,0,1,.968-.927c.152-.18-.263.1-.124,0a13.153,13.153,0,0,1,1.383-1.286,1.383,1.383,0,0,1,.249-.443c.124-.124,0,.111.208-.1s-.208,0-.235,0c.207-.249.124-.249.194-.415a3.929,3.929,0,0,0,.775-.9c.277-.332.622-.664.871-.982a6.154,6.154,0,0,1,.526-.747c.221-.235.47-.387.705-.65s-.152,0,0-.18a16.019,16.019,0,0,0,2.033-2.766,34.389,34.389,0,0,1-2.255,2.96c-.207.069-.332.47-.567.5,0,.111.221-.069,0,.124s-.124.069-.207.18c0-.221-.166,0-.3,0a23.676,23.676,0,0,1-1.895,2.075c-.111.138.138,0,0,.124a9.608,9.608,0,0,0-.733.747c-.152,0-.387.166-.36,0a41.637,41.637,0,0,0,3.029-3.389c.29-.332.678-.609.747-.9a16.962,16.962,0,0,1-1.3,1.2,17.4,17.4,0,0,1-1.494,1.674c-.152.138-.249.166-.387.29s-.221.318-.346.429-.18.083-.277.194a7.287,7.287,0,0,1-.581.692c-.249.235-.913.678-1.383,1.107-.124,0-.152-.069,0-.18a14.771,14.771,0,0,0,1.217-1.079s-.124.069-.152,0,.263-.194.332-.346c-.4.4-.5.221-.415,0,1.01-.954,2.255-2.13,3.043-2.96a1.024,1.024,0,0,1,.166-.4c.83-1,1.867-1.992,2.656-3.14-1.065,1.162-2.144,2.393-3.333,3.79l-.18.083c-.484.609-1.176,1.217-1.591,1.646l-.788.3A10.028,10.028,0,0,1,181.4,46.28c-.692.443-1.383.885-2.075,1.383h-.249a3.855,3.855,0,0,1,.221-.387,3.914,3.914,0,0,1,.664-.539,19.364,19.364,0,0,1,1.936-1.8,29.053,29.053,0,0,0,2.075-2.047c.083-.235-.124-.18-.3-.152a24.9,24.9,0,0,1-1.978,1.8c-.47,0-.3-.36.208-.885.844-.871,2.407-2.241,2.932-2.835a61.081,61.081,0,0,0,6.4-8.534,44.149,44.149,0,0,1-3.32,4.592.43.43,0,0,1-.069.207c-1.093,1.383-2.462,2.766-3.43,4.039-.567.36-1.383,1.383-1.95,1.687-.083-.318.221-.788.664-1.3-.5.484-1.024.871-1.383,1.259a7.968,7.968,0,0,1-1.134,1.037s0-.1-.083,0c.152-.111-.263.235-.29.263a1.77,1.77,0,0,1-.36.36,1.7,1.7,0,0,1-.539.346,34.14,34.14,0,0,1-3.2,2.434l-.36.263h-.194c-.194,0,0,.083-.124.166-.443.29-.982.567-1.383.858l-1.757,1.093c-.595.346-1.19.622-1.646.9-.221.1,0-.124-.277,0-1.618.871-3.43,1.6-5.242,2.393-.138,0,0-.1-.263,0s-.152.166-.387.249a.941.941,0,0,1-.387,0c-2.116.761-4.3,1.563-6.542,2.185-1.051.249-2.089.567-3.14.747l-3.112.553a37.345,37.345,0,0,1-4.606.456l-2.766.166-2.683-.111-2.158-.028h-.968l-.871-.111h-.65c-.221,0-.65-.194-.982-.249-.885-.138-1.826-.18-2.766-.318a29.8,29.8,0,0,1-2.891-.761c-.539-.138-1.079-.194-1.632-.332s-.705-.249-1.079-.346c-1.01-.373-2.075-.65-3.015-1.024l-1.743-.844c-.636-.29-1.245-.622-1.895-.858-1.383-.761-3.043-1.383-4.274-2.241a29.917,29.917,0,0,0-3.181-1.992,2.5,2.5,0,0,1-.29-.249c-1.508-1.383-3.527-2.421-4.675-3.61a6.293,6.293,0,0,1-1.231-1.19c-.443-.443-.927-.761-1.383-1.162-.138-.124-.235-.277-.373-.415-.456-.4-.871-.8-1.383-1.273a28.66,28.66,0,0,0-2.061-2.393c-.567-.678-1.2-1.826-1.909-2.531a16.6,16.6,0,0,0-1.48-2.075A16.044,16.044,0,0,1,97,30.955a6.072,6.072,0,0,0-.858-1.48c-.18-.609-.692-1.148-.968-1.84s-.567-1.383-.885-2.1a9.834,9.834,0,0,1-1.162-3.043c.4-.553-.622-.913-.816-1.784,0-.47.111-.456.249-.719a4,4,0,0,0-.429-1.107C92,18.423,92.094,18.05,91.955,17.455Zm91.966,29.489H184C183.963,47.124,183.6,47.193,183.921,46.944Zm.069-.138a10.831,10.831,0,0,1,1.286-1.259c.083-.083-.18,0-.069-.18a3.72,3.72,0,0,0,.775-.581c.166.124-.526.609-.429.775-.249.207-.373.318-.415.484-.526.4-.539.595-.954.9C184.2,46.764,184.06,46.93,183.99,46.806Z" transform="translate(31.007 0.741)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_373" data-name="Path 373" d="M110.459,2a56.71,56.71,0,0,1-2.988,17.4c-.553,1.383-.968,2.766-1.6,4.149l-1.95,4.011-2.31,3.818a16.6,16.6,0,0,1-1.273,1.826l-1.383,1.784a56.9,56.9,0,0,1-13,12.1,53.155,53.155,0,0,1-16.211,7.22,53.03,53.03,0,0,1-17.608,1.632A55.451,55.451,0,0,1,34.9,51.711a54.825,54.825,0,0,1-26-23.431L0,33.176a66.391,66.391,0,0,0,13.126,16.5,66.391,66.391,0,0,0,17.746,11.37A65.562,65.562,0,0,0,51.357,66.1a63.2,63.2,0,0,0,21-1.936A63.28,63.28,0,0,0,91.62,55.583,66.9,66.9,0,0,0,107.029,41.24,64.372,64.372,0,0,0,120.639,2Z" transform="translate(0 0.76)" fill="none" />
                            <path id="Path_374" data-name="Path 374" d="M17.671,41.63a.968.968,0,0,1-.4-.18A.636.636,0,0,1,17.671,41.63Z" transform="translate(6.617 20.139)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_375" data-name="Path 375" d="M16.6,34.98c-.111,0-.443-.221-.346-.29a2.877,2.877,0,0,1,.346.29Z" transform="translate(6.221 16.855)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_376" data-name="Path 376" d="M16.313,34.612c-.069,0-.263-.18-.387-.249A1.973,1.973,0,0,1,16.313,34.612Z" transform="translate(6.094 16.69)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_377" data-name="Path 377" d="M14.783,34.407a.885.885,0,0,1-.373-.277C14.479,34.1,14.673,34.324,14.783,34.407Z" transform="translate(5.521 16.582)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_378" data-name="Path 378" d="M14.9,33.443A1.812,1.812,0,0,1,14.26,33a2.974,2.974,0,0,1,.636.443Z" transform="translate(5.464 16.037)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_379" data-name="Path 379" d="M11.172,35.514A6.487,6.487,0,0,1,10.01,34.38C10.342,34.795,10.868,35.127,11.172,35.514Z" transform="translate(3.835 16.722)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_380" data-name="Path 380" d="M11.861,33.748c-.484-.249-1.037-1.01-1.591-1.383,0-.152.719.664.927.719l.249.318C11.584,33.513,11.764,33.569,11.861,33.748Z" transform="translate(3.935 15.738)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_381" data-name="Path 381" d="M8.462,29.947a.347.347,0,0,1-.207-.1.1.1,0,0,1,0-.111Z" transform="translate(3.156 14.448)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_382" data-name="Path 382" d="M7.188,29.387a5.242,5.242,0,0,1-1.2-1.494s-.1,0-.166-.152-.567-.858-.166-.29A23.157,23.157,0,0,0,7.188,29.387Z" transform="translate(2.107 13.261)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_383" data-name="Path 383" d="M7.382,28.146A1.383,1.383,0,0,1,7.05,27.8C7.133,27.814,7.354,28.077,7.382,28.146Z" transform="translate(2.701 13.507)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_384" data-name="Path 384" d="M5.245,29.254c-.1,0-.277-.346-.415-.484a1.577,1.577,0,0,1,.415.484Z" transform="translate(1.851 13.981)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_385" data-name="Path 385" d="M6.97,28.167a6.294,6.294,0,0,1-.539-.526C6.389,27.365,6.8,27.9,6.97,28.167Z" transform="translate(2.463 13.397)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_386" data-name="Path 386" d="M7.029,27.789a2.462,2.462,0,0,1-.539-.609C6.628,27.291,6.85,27.609,7.029,27.789Z" transform="translate(2.487 13.21)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_387" data-name="Path 387" d="M4.583,29.1c-.083,0-.235-.207-.373-.36C4.307,28.713,4.459,28.962,4.583,29.1Z" transform="translate(1.613 13.964)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_388" data-name="Path 388" d="M4.934,28.868A8,8,0,0,1,4.09,27.72a9.475,9.475,0,0,1,.844,1.148Z" transform="translate(1.567 13.481)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_389" data-name="Path 389" d="M6.609,27.357A3.2,3.2,0,0,1,6,26.43,7.555,7.555,0,0,0,6.609,27.357Z" transform="translate(2.299 12.85)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_390" data-name="Path 390" d="M5.483,27.18a4.011,4.011,0,0,1-.373-.415C5.179,26.668,5.359,27,5.483,27.18Z" transform="translate(1.958 12.997)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_391" data-name="Path 391" d="M5.382,26.723c-.152-.1-.207-.235-.332-.443C5.133,26.294,5.271,26.6,5.382,26.723Z" transform="translate(1.935 12.77)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_392" data-name="Path 392" d="M5.3,26.235c-.1,0-.387-.429-.221-.415s0,.124,0,.152S5.212,26.069,5.3,26.235Z" transform="translate(1.925 12.546)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_393" data-name="Path 393" d="M3.48,26C3.757,26.235,3.964,26.8,3.48,26Z" transform="translate(1.333 12.633)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_394" data-name="Path 394" d="M2.768,26.1a4.149,4.149,0,0,1-.5-.775,4.772,4.772,0,0,1,.5.775Z" transform="translate(0.87 12.313)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_395" data-name="Path 395" d="M2.518,25.9c0,.138-.3-.36-.18-.3Z" transform="translate(0.884 12.431)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_396" data-name="Path 396" d="M1.47,26a1.217,1.217,0,0,1-.29-.415A1.024,1.024,0,0,1,1.47,26Z" transform="translate(0.452 12.434)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_397" data-name="Path 397" d="M.795,24.7C.394,24.246.38,24,.795,24.7Z" transform="translate(0.187 9.289)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_398" data-name="Path 398" d="M8.037,34.321a2.435,2.435,0,0,0-.318-.207c-.083-.235-.429-.47-.609-.733C7.442,33.574,7.622,33.975,8.037,34.321Z" transform="translate(2.724 16.232)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_399" data-name="Path 399" d="M5.575,29.311c-.111-.124,0-.138-.18-.29s0,0,.1,0c-.18-.29-.318-.429-.5-.678H5.1c-.346-.249-.429-.747-.954-1.383.581.553,1.383,2.089,1.936,2.587-.138,0-.443-.553-.567-.553S5.741,29.339,5.575,29.311Z" transform="translate(1.59 13.135)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_400" data-name="Path 400" d="M6.29,27.311h0a1.327,1.327,0,0,1-.18-.29C6.11,26.965,6.663,27.823,6.29,27.311Z" transform="translate(2.341 13.129)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_401" data-name="Path 401" d="M4.211,24.645h.1A6.294,6.294,0,0,1,3.63,23.4,16.429,16.429,0,0,0,4.7,25.06c0,.083.1.221.124.318.733.941,1.383,2.061,2.172,3.029-.539-.3-.968-1.535-1.549-1.909h0a18.286,18.286,0,0,0-1.231-1.853Z" transform="translate(1.391 11.434)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_402" data-name="Path 402" d="M2.373,25.888c-.1-.069-.207-.235-.318-.332S2.346,25.722,2.373,25.888Z" transform="translate(0.78 12.406)" fill="#cc543a" fill-rule="evenodd" />
                            <path id="Path_403" data-name="Path 403" d="M116.81,20.4c.083-.318.1-.692.18-1.037a22.245,22.245,0,0,0,.636-2.268c.152-.885.18-1.383.332-2.13a10.572,10.572,0,0,0,.111-1.107,7.994,7.994,0,0,0,0-2.462V9a2.226,2.226,0,0,1,0-.36c-.249-1.715-.885-2.766-1.051-4.717a2.545,2.545,0,0,1-.526-.622c-.083-.138-.111-.47-.194-.581-.29-.387-.705,0-.9-.775-.083,0-.111.1-.166.138-.609,0-1.148.249-1.618.069-.3.484-.636.373-.913.733a7.867,7.867,0,0,0-.539.941c-.18.29-.36.65-.553.913-.18,0-.235.4-.4.47-.138.5-.318.858-.456,1.383,0,0-.111.166-.18.166a31.694,31.694,0,0,0-1.286,3.416c0,.124-.1.387-.124.553a7.649,7.649,0,0,1-.885,3.112.617.617,0,0,1-.083.373,2.144,2.144,0,0,0-.609,1.037V16.1c0,.36-.429.982-.526,1.452v.733a13.236,13.236,0,0,1-.858,2.2,4.856,4.856,0,0,0-.415.775c-.083.263,0,.512.152.553a3.679,3.679,0,0,1-.47,1.84,14.759,14.759,0,0,0-.927,2.006,17.121,17.121,0,0,0-1.093,2.421c-.1.152-.249.3-.346.456s-.29.636-.456.968c-.3.595-.609,1.079-.844,1.577-.65.567-.692,1.273-1.107,1.84-.166.207-.387.36-.567.609s-.235.429-.4.636-.4.4-.553.609-.18.3-.277.429a4.355,4.355,0,0,0-.373.429c-.124.194-.207.429-.332.636-.456.733-1.2,1.383-1.6,2.047a15.713,15.713,0,0,0-1.466,1.577,8.908,8.908,0,0,1-1.66,1.646,4.952,4.952,0,0,1-.871.83c0,.083,0,.124-.152.235-.719.553-1.286,1.383-2.033,1.923a.3.3,0,0,1,0,.138,18.935,18.935,0,0,0-3.154,2.379,6.086,6.086,0,0,0-1.037.719,13.11,13.11,0,0,1-1.162.8c-.387.235-.8.415-1.148.65-.692.484-1.66,1-2.324,1.383-.207.124-.387.277-.595.387s-.816.346-1.2.567A24.191,24.191,0,0,1,75,53.777c-.443.152-.8.373-1.286.581a23.513,23.513,0,0,1-2.531.83c-.221.069-.415.166-.609.221-.512.166-1.01.249-1.549.387a17.5,17.5,0,0,1-3.9.913c-.8.207-1.8.387-2.766.553-.526.083-1.037.194-1.563.235l-1.508.083a4.33,4.33,0,0,1-1.272.111l-2.379.221a12.768,12.768,0,0,1-2.31,0,48.784,48.784,0,0,1-9.143-.844,73.777,73.777,0,0,1-8.866-2.338,5.339,5.339,0,0,0-1.521-.553,1.729,1.729,0,0,0-.512-.277,18.341,18.341,0,0,1-2.448-1.051c-.277,0-.747-.3-1.134-.346-.1-.152.221,0,0-.138a18.825,18.825,0,0,1-3.32-1.549s0,.083,0,0-.318-.111-.539-.249c-1.383-.913-2.683-1.259-3.9-2.075-.138-.138-.456-.539-.664-.553.207.18.484.373.4.456a4.149,4.149,0,0,0-1.134-.692c-.443-.318-.65-.512-1.079-.775-.083,0,0,.18-.18,0-.553-.553-.913-.719-1.383-1.2a3,3,0,0,1-1.037-.747c-.194-.1.138.235,0,.138A8.562,8.562,0,0,1,15.48,43.9a1.549,1.549,0,0,1-.443-.235c-.124-.1.111,0-.083-.18s0,.194,0,.221a2.123,2.123,0,0,1-.415-.166,4.371,4.371,0,0,0-.913-.705c-.318-.263-.595-.636-.885-.9a6.323,6.323,0,0,1-.678-.581c-.221-.221-.332-.484-.567-.733s0,.152-.18,0c-.871-.871-1.6-1.867-2.31-2.462,1.037.954,1.466,1.923,2.448,2.7,0,.207.429.346.443.595.1,0,0-.221.124,0a1.273,1.273,0,0,0,.152.207c-.207,0,0,.152,0,.29a19.758,19.758,0,0,0,1.978,1.936c.152.1,0-.138.124,0a7.535,7.535,0,0,0,.761.664c0,.152.18.373,0,.373-.9-.9-2.282-1.895-3.25-2.988-.3-.332-.539-.733-.83-.816A13.126,13.126,0,0,1,12.036,42.5c.484.567,1.134,1.024,1.646,1.535.138.138.166.235.3.36s.332.207.443.332.1.166.207.263a7.581,7.581,0,0,1,.705.553,11.812,11.812,0,0,0,1.273,1.2c0,.111,0,.166-.18.083-.553-.484-.678-.539-1.231-1.079,0,0,.083.124,0,.152s-.194-.249-.36-.318c.415.387.249.5,0,.429-.982-1.024-2.365-2.089-3.071-3.029a1.273,1.273,0,0,1-.387-.221,38.134,38.134,0,0,1-2.766-3.112,24.578,24.578,0,0,0,3.472,3.859c0,.069,0,.083.083.207L13.9,45.3l.36.788a22.477,22.477,0,0,1,1.909,1.881,18.411,18.411,0,0,0,1.895,1.826.408.408,0,0,0,.069.235,1.9,1.9,0,0,1-.47-.1,4.938,4.938,0,0,1-.692-.581,22.364,22.364,0,0,1-2.241-1.687c-.761-.664-1.508-1.383-2.282-2.075-.263-.083-.194.124-.152.318.664.719,1.383,1.217,2.061,2.019.1.443-.36.373-.941-.18a37.842,37.842,0,0,1-3.167-3.154,62.021,62.021,0,0,1-7.441-9.1C4.027,37.359,5.272,39,6.475,40.6a.274.274,0,0,1,.194.124,37.871,37.871,0,0,0,3.887,4.357c.36.664,1.535,1.383,1.936,2.089a2.813,2.813,0,0,1-1.452-.719c.567.526,1.024,1.093,1.48,1.549s1.107.954,1.286,1.162-.1,0,0,.1c-.166-.152.318.235.346.263a3.028,3.028,0,0,1,.484.332,1.978,1.978,0,0,1,.484.526c1.134,1.051,2.393,1.84,3.6,2.766l.4.3c.111.1,0,0,.124.18s.083,0,.207.1a16.722,16.722,0,0,0,1.535,1.051l1.978,1.272c.65.415,1.314.761,1.84,1.065.235.138-.124,0,.207.221a53.846,53.846,0,0,0,5.851,2.988c.166.069,0,.111.235.194s.249,0,.512.1a1.079,1.079,0,0,1,.346.277,43.929,43.929,0,0,0,7.538,2.393c1.217.249,2.421.595,3.638.788l3.569.581c1.853.152,3.624.318,5.284.429h3.167l3.057-.166,2.3-.111h1.107l1.01-.18c.207,0,.456-.138.705-.166a7.527,7.527,0,0,0,1.148-.1c1.024-.152,2.047-.415,3.071-.581s2.2-.526,3.306-.788c.622-.152,1.19-.387,1.8-.553s.858-.152,1.273-.263c1.148-.429,2.282-.968,3.375-1.383l2.213-.747a17.636,17.636,0,0,0,2.1-1.065,31.12,31.12,0,0,0,4.883-2.49,39.353,39.353,0,0,0,3.721-2.172,3.306,3.306,0,0,0,.387-.18c1.909-1.286,3.859-2.96,5.339-4.149a7.165,7.165,0,0,1,1.48-1.286A18.624,18.624,0,0,0,98.8,47.317l.512-.387a12.132,12.132,0,0,0,1.383-1.577,35.507,35.507,0,0,0,2.462-2.628,12.172,12.172,0,0,0,2.31-2.766,24.163,24.163,0,0,0,1.8-2.282c.581-.788,1.01-1.687,1.577-2.5a8.534,8.534,0,0,0,1.051-1.646,9.267,9.267,0,0,0,1.259-2.033l1.245-2.3c.567-1.12,1.231-2.531,1.757-3.347.678-.194.207-1.286.65-2.185.29-.456.415-.346.692-.484a4.841,4.841,0,0,0,.47-1.314C116.229,21.383,116.644,21.107,116.81,20.4ZM16.434,45.436v-.083C16.614,45.353,16.738,45.685,16.434,45.436Zm-.138,0a9.821,9.821,0,0,1-1.272-1.176c-.083-.083,0,.166-.18,0a3.928,3.928,0,0,0-.595-.719c.124-.166.622.484.775.373.207.221.318.346.484.373.415.484.609.484.9.871-.166.014.014.152-.111.221Z" transform="translate(1.077 0.741)" fill="#cc543a" fill-rule="evenodd" />
                        </g>
                    </g>
                </svg>
            </div>
            <div class="index_foot">
                <img src="./img/footprints.png" alt="">
                <span class="index_foot_cover"></span>
            </div>
        </div>
    </div>

    <div class="index_exploreArea d-flex align-items-center">
        <div class="index_exploreBox d-flex">
            <div class="index_explore index_ep1">

                <div class="index_exImg exImg1">
                    <img src="./img/indexExplore(1).jpg" alt="">
                </div>


                <a href="<?= WEB_ROOT ?>/discover_temple.php">
                    <div class="index_epWordBox epWord1">
                        <p>Story</p>
                        <hr class="epLine1">
                        <span>也得不眾動不一歷只片、港食化的要，雄體專結量腦戰像收天況百國影來……論將是春時花去視：年紀月大不英本別智加包男神。</span>
                    </div>
                </a>
            </div>

            <div class="index_explore index_ep2">

                <div class="index_exImg exImg2">
                    <img src="./img/indexExplore(2).jpg" alt="">
                </div>

                <a href="<?= WEB_ROOT ?>/discover.php">
                    <div class="index_epWordBox epWord2">
                        <p>Explore More +</p>
                        <hr class="epLine2">
                        <span>也得不眾動不一歷只片、港食化的要，雄體專結量腦戰像收天況百國影來……論將是春時花去視：年紀月大不英本別智加包男神。</span>
                    </div>
                </a>
            </div>
        </div>

        <div class="index_title index_exploreTitle">
            <div class="titleImgBox"><img src="./img/index_circle.png" alt=""></div>
            <p>EXPLORE</p>
        </div>
    </div>

    <div class="index_serviceArea d-flex">
        <div class="index_serviceTitle index_title col-3">ONLINE<br>SERVICE</div>
        <div class="indrex_serviceContainer col-md-9 col-12">

            <div class="index_serviceBox index_light d-flex">

                <a class="d-flex bcolor" href="<?= WEB_ROOT ?>/light_Introduction.php">
                    <div class="serviceImg mr-5">
                        <img src="./img/index_light.jpg" alt="">
                    </div>


                    <div class="index_serviceWordBox index_lightBox">
                        <p>祈福點燈</p>
                        <span>Lighting the Lamp</span>
                        <hr class="line-r">
                    </div>
                </a>
            </div>

            <div class="index_serviceBox index_lots d-flex justify-content-end">
                <a class="d-flex bcolor" href="<?= WEB_ROOT ?>/sign.php">
                    <div class="index_serviceWordBox index_lotsBox">
                        <p>求神問卜</p>
                        <span>Online Draw Lots</span>
                        <hr class="line-l">
                    </div>


                    <div class="serviceImg ml-5">
                        <img src="./img/index_poem.jpg" alt="">
                    </div>
                </a>

            </div>
        </div>
    </div>

    <div class="index_tripArea d-flex">
        <div class="indrex_tripContainer col-md-9 col-12">
            <div class="index_tripBox index_trip d-flex">

                <a class="d-flex bcolor" href="<?= WEB_ROOT ?>/trip.php">
                    <div class="tripImg mr-5">
                        <img src="./img/index_tour.jpg" alt="">
                    </div>
                

                <div class="index_tripWordBox">
                    <p>參訪旅遊</p>
                    <span>Taiwan Temple Tour</span>
                    <hr class="line-r">
                </div>
                </a>
            </div>
        </div>
        <div class="index_tripTitle index_title col-3">TOUR</div>
    </div>

    <div class="index_shopArea d-flex justify-content-end">
        <div class="index_shopWordBox col-sm-1">
            <a href="<?= WEB_ROOT ?>/shop.php">
                <div class="index_shopTitle">
                    <p class="index_title">SHOP</p>
                    <div class="longArrow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="102.413" height="20.327" viewBox="0 0 102.413 20.327">
                            <g id="Group_41" data-name="Group 41" transform="translate(-1670.5 -3470.086)">
                                <line id="Line_38" data-name="Line 38" x2="100" transform="translate(1671.5 3480.25)" fill="none" stroke="#606060" stroke-linecap="round" stroke-width="2" />
                                <line id="Line_39" data-name="Line 39" x1="9.333" y1="8.75" transform="translate(1762.167 3471.5)" fill="none" stroke="#606060" stroke-linecap="round" stroke-width="2" />
                                <line id="Line_40" data-name="Line 40" x1="9.333" y2="8.75" transform="translate(1762.167 3480.25)" fill="none" stroke="#606060" stroke-linecap="round" stroke-width="2" />
                            </g>
                        </svg>
                    </div>
                </div>
            </a>
            <div class="index_shopinfo">
                <span>也得不眾動不一歷只片、港食化的要，雄體專結量腦戰像收天況百國影來，論將是春時花去視：年紀月大不英本別智加包男神收天況百。</span>
            </div>
        </div>
        <div class="index_productBox">
            <div class="index_productImgBox btnCursor">
                <img src="./img/indexproduct(1).jpg" alt="">
                <p class="index_productName">皮革平安符</p>
            </div>
            <div class="index_productImgBox btnCursor">
                <img src="./img/indexproduct(2).jpg" alt="">
                <p class="index_productName">廟宇手繪明信片</p>
            </div>
            <div class="index_productImgBox btnCursor">
                <img src="./img/indexproduct(3).jpg" alt="">
                <p class="index_productName">好運養生茶</p>
            </div>
            <div class="index_productImgBox btnCursor">
                <img src="./img/indexproduct(4).jpg" alt="">
                <p class="index_productName">開運符餅乾</p>
            </div>
            <div class="index_productImgBox btnCursor">
                <img src="./img/indexproduct(5).jpg" alt="">
                <p class="index_productName">羊毛氈手縫鑰匙套</p>
            </div>
            <div class="index_productImgBox btnCursor">
                <img src="./img/indexproduct(6).jpg" alt="">
                <p class="index_productName">檜木陶瓷杯</p>
            </div>
        </div>
        <div class="index_shopLink"><a href="<?= WEB_ROOT ?>/shop.php">看更多...</a></div>

    </div>

    <div class="index_footer">
        <div class="index_footerWord">
            <p>灣廟 | Taiwan Temple</p>
        </div>
        <div class="index_footerMedia d-flex align-items-center">
            <div class="index_ig">
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="34.979" viewBox="0 0 35 34.979">
                    <path id="ico_instagram" d="M17.5,3.15c4.682,0,5.222.022,7.078.108a8.759,8.759,0,0,1,3.237.6,5.2,5.2,0,0,1,2.007,1.295,5.414,5.414,0,0,1,1.316,2.007,10.1,10.1,0,0,1,.6,3.258c.086,1.834.108,2.4.108,7.078s-.022,5.222-.108,7.056a10.1,10.1,0,0,1-.6,3.258,5.246,5.246,0,0,1-1.316,2.007,5.507,5.507,0,0,1-2.007,1.316,9.792,9.792,0,0,1-3.237.6c-1.856.065-2.4.086-7.078.086s-5.222-.022-7.078-.086a9.792,9.792,0,0,1-3.237-.6,5.507,5.507,0,0,1-2.007-1.316,5.246,5.246,0,0,1-1.316-2.007,10.1,10.1,0,0,1-.6-3.258c-.086-1.834-.108-2.4-.108-7.056s.022-5.244.108-7.078a10.1,10.1,0,0,1,.6-3.258A5.414,5.414,0,0,1,5.179,5.157,5.2,5.2,0,0,1,7.186,3.863a8.759,8.759,0,0,1,3.237-.6c1.856-.086,2.417-.108,7.078-.108M17.5,0c-4.747,0-5.351.022-7.207.108a12.947,12.947,0,0,0-4.251.8A8.785,8.785,0,0,0,2.935,2.935,8.631,8.631,0,0,0,.928,6.02a12.994,12.994,0,0,0-.82,4.251C.022,12.149,0,12.731,0,17.5s.022,5.33.108,7.207a12.994,12.994,0,0,0,.82,4.251,8.631,8.631,0,0,0,2.007,3.086,8.784,8.784,0,0,0,3.107,2.028,12.4,12.4,0,0,0,4.251.8c1.856.086,2.46.108,7.207.108s5.351-.022,7.207-.108a12.3,12.3,0,0,0,4.251-.8,8.785,8.785,0,0,0,3.107-2.028,8.362,8.362,0,0,0,2.007-3.086,13,13,0,0,0,.82-4.251c.086-1.877.108-2.46.108-7.207s-.022-5.351-.108-7.229a12.994,12.994,0,0,0-.82-4.251,8.362,8.362,0,0,0-2.007-3.086A8.784,8.784,0,0,0,28.958.906a12.822,12.822,0,0,0-4.251-.8C22.851.022,22.247,0,17.5,0Zm0,8.5a8.987,8.987,0,1,0,8.977,9A8.987,8.987,0,0,0,17.5,8.5Zm0,14.824A5.837,5.837,0,1,1,23.326,17.5,5.837,5.837,0,0,1,17.5,23.326ZM28.936,8.157a2.1,2.1,0,1,1-.606-1.493A2.093,2.093,0,0,1,28.936,8.157Z" fill="#1a1a1a" fill-rule="evenodd" />
                </svg>
            </div>

            <div class="index_fb">
                <svg xmlns="http://www.w3.org/2000/svg" width="16.5" height="35.697" viewBox="0 0 16.5 35.697">
                    <path id="ico_facebook" d="M4.233,35.692V18.969H.01V12.928H4.233V7.81A7.456,7.456,0,0,1,12.455.036a30.57,30.57,0,0,1,4.027.252l-.14,5.621s-1.734-.028-3.664-.028a2.114,2.114,0,0,0-2.405,2.657v4.391H16.51l-.28,6.041H10.273V35.692Z" transform="translate(-0.01 0.004)" fill="#1a1a1a" fill-rule="evenodd" />
                </svg>
            </div>

            <div class="index_yt">
                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="31.026" viewBox="0 0 45 31.026">
                    <path id="ico_youtube" d="M17.855,21.218V8.824l12.153,6.237L17.855,21.218M22.513-.01h-.027s-9.45,0-15.741.455a6.468,6.468,0,0,0-4.5,1.874A9.238,9.238,0,0,0,.455,6.682,65.171,65.171,0,0,0,0,13.83v3.346A64.366,64.366,0,0,0,.455,24.3a9.3,9.3,0,0,0,1.794,4.39A7.814,7.814,0,0,0,7.2,30.561c3.587.348,15.312.455,15.312.455s9.45-.027,15.741-.455a6.6,6.6,0,0,0,4.5-1.874,9.61,9.61,0,0,0,1.794-4.39A64.365,64.365,0,0,0,45,17.176V13.83a65.172,65.172,0,0,0-.455-7.148,9.549,9.549,0,0,0-1.794-4.363,6.468,6.468,0,0,0-4.5-1.874C31.963-.01,22.513-.01,22.513-.01" transform="translate(0 0.01)" fill="#1a1a1a" fill-rule="evenodd" />
                </svg>

            </div>

        </div>
    </div>


    <?php include __DIR__ . '/parts/go-top.php' ?>

    <!-- 導航用代碼包含彈窗 -->
    <?php include __DIR__ . '/parts/ourscripts.php'; ?>

    <script>
        // //mouse-event
        // $(document).mousemove(function(event) {

        //     var mouseSite = $('.mouse_box').width() / 2;

        //     // setTimeout，計時用參數，延遲__秒，會去執行一次程式碼。
        //     setTimeout(() => {
        //         $('.mouse_box').css('left', event.clientX).css('top', event.clientY)
        //     }, 100);
        // });


        //banner-carousel

        let slideImg = $('.index_bannerBox').find('img');
        let currentIndex = 0;

        slideImg.eq(currentIndex).fadeIn();


        setInterval(() => {

            nextIndex = currentIndex + 1;

            if (nextIndex > 4) {
                nextIndex = 0;
            };

            console.log('currentIndex=', currentIndex);


            slideImg.eq(currentIndex).fadeOut();
            slideImg.eq(nextIndex).fadeIn();
            currentIndex = nextIndex;


        }, 3000);




        let page = 0;

        $('.slider_dots li').eq(page).css('opacity', '1').siblings().css('opacity', '0.5');

        setInterval(() => {
            page = page + 1;

            if (page > 4) {
                page = 0;
            }

            console.log('page =', page)

            // $('.index_bannerBox').css('left', page * -1920 + 'px')
            $('.slider_dots li').eq(page).css('opacity', '1').siblings().css('opacity', '0.5')
            $('.slider_num').html('0' + (page + 1))
            // $('.slider_num').css('opacity', '1')

        }, 3000);


        //click slidedown
        $('.index_slideDown').click(function() {
            let windowWidth = $(window).width();
            var pageBelow = document.getElementById("nav_index_navbar_com").offsetTop;
            var pageBelow_m = document.getElementById("nav_burgurBar").offsetTop;

            if (windowWidth > 1000) {
                $("html,body").animate({
                    scrollTop: pageBelow,
                }, 1000);
            };
            if (windowWidth < 400) {
                $("html,body").animate({
                    scrollTop: pageBelow_m,
                }, 1000);
            };

        });


        //Explore
        $(".index_ep2").mouseenter(function() {
            let ep1Word = {
                color: '#000'
            }

            let ep1Line = {
                width: '40px',
                backgroundColor: '#cc543a',
                transition: '.6s'
            }

            let ep1Box = {
                height: '230px',
                transition: '.6s'
            }

            $(this).siblings().find(".epWord1").css(ep1Word);
            $(this).siblings().find(".epLine1").css(ep1Line);
            $(this).siblings().find(".exImg1").css(ep1Box);
            $(this).siblings().find(".exImg1").addClass('no-before');

        })
        $(".index_ep2").mouseleave(function() {

            let ep1Word = {
                color: '#fff'
            }

            let ep1Line = {
                width: '250px',
                backgroundColor: '#fff',
                transition: '.6s'
            }

            let ep1Box = {
                height: '640px',
                transition: '.6s'
            }

            $(this).siblings().find(".epWord1").css(ep1Word);
            $(this).siblings().find(".epLine1").css(ep1Line);
            $(this).siblings().find(".exImg1").css(ep1Box);
            $(this).siblings().find(".exImg1").removeClass('no-before');
        })

        // 是為了RWD後的click寫的，以及避免hover的狀態留下
        if (window.screen.width < 700) {


            $(".index_ep2").click(function() {

                let ep1Box = {
                    height: '300px'
                }

                $(this).siblings().find(".exImg1").css(ep1Box);

            })

        }



        // Go-Top
        $(window).scroll(function(event) {
            let scrollTop = $(window).scrollTop();
            console.log(scrollTop);

            if (scrollTop >= 1000) {

                $(".index_goTopImg").addClass('show');
            } else {
                $(".index_goTopImg").removeClass('show');
            }

            //navBar進入動畫
            if (scrollTop >= 250 && $(window).width() > 1400) {

                let navAnimation = {
                    'animation': 'focus-in-expand 1s cubic-bezier(0.250, 0.460, 0.450, 0.940) both',
                    'opacity': '1'
                }

                $(".nav_index_navbar_com").css(navAnimation);
            }


        });

        $('.index_goTopImg').click(function() {
            $("html,body").animate({
                scrollTop: 0,
            }, 700);
        });
    </script>
