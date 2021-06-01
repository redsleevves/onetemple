<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?=WEB_ROOT?>/FTproj/css/reset.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- 小圖示 -->
    <script src="https://kit.fontawesome.com/271f30e909.js" crossorigin="anonymous"></script>
    <!-- font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Faustina:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+TC:wght@200;300;400;500;600;700;900&display=swap"
        rel="stylesheet">

    <!-- navbar2 -->
    <link rel="stylesheet" href="<?=WEB_ROOT?>/FTproj/css/navbar2.css">
    <link rel="stylesheet" href="<?= WEB_ROOT ?>/FTproj/css/member_data.css">

    <title><?= $title ?></title>

    <style>
        body {
            font-family: 'Faustina', serif;
            background-image: url(./img/nav_bcc.png);
        }

        p {
            margin: 0;
        }

/* 麵包屑 */
        .breadcrumb_style_1 {
            padding: 10px 0;
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

        /* 桌機用 */
        @media (min-width:1400px) {
            .breadcrumb_style {
                /* navbar多厚 就推多少paddding */
                /* 玳禎navbar桌機版 無填滿 這邊請填滿105px */
                /* padding-top: 105px; */
            }

            .breadcrumb_style_1 {
                width: 80%;
            }
        }

        /* 手機用 */
        @media (max-width:1399px) {
            .breadcrumb_style_1 {
                /* 手機板寬 自行設定 */
                width: 90%;
            }
        }



        /* news */
        .news_content {
            display: flex;
            width: 80%;
            margin: 20px auto 0 auto;


            /* border: 1px solid red; */
        }

        .news_pageTitle {
            width: 25%;
            color: #cc543a;
            font-size: 30px;
            font-weight: 700;
            letter-spacing: 0.2rem;

            /* 為了讓文字與圖片切齊 */
            line-height: 0;
            padding: 10px 0 0 0;
        }

        .news_box {
            display: flex;
            width: 85%;
            justify-content: space-between;
            margin: 0 0 50px 0;

            position: relative;
        }

        @keyframes slide {
            from {
                bottom: -100px;
                opacity: 0;
            }

            to {
                bottom: 0;
                opacity: 1;
            }
        }

        .hideme {
            opacity: 0;
        }


        .news_mainImg {
            width: 350px;
            height: 350px;
            overflow: hidden;
        }

        .news_mainImg img {
            width: 100%;
            height: 100%;
            object-fit: cover;

            
        }

        .news_mainWordBox {
            width: 65%;
            padding: 0 0 0 18px;

            /* border: 1px solid red; */
        }

        .news_date {
            font-size: 20px;
            font-weight: 600;
            letter-spacing: 0.1rem;
        }

        .news_title {
            font-size: 26px;
            font-family: 'Noto Serif TC', serif;
            font-weight: 600;
            letter-spacing: 0.1rem;
        }

        .news_subContent {
            width: 50%;
            margin: 30px 0 0 0;
            /* border: 1px solid red; */
        }

        .news_moreLink {
            margin: 20px 0 0 0;
            color: #cc543a;
        }

        .news_moreLink a {
            color: #cc543a;
            font-weight: 600;
        }

        /* Page */
        .news_slidePage {
            margin: 80px 0 40px 0;
        }

        .trip_page_item {
            background-color: transparent;
            padding: .5rem 1rem;
            border: 1px solid #cdcdcd;
            color: #707070;
            font-size: 24px;
        }

        .trip_page_item:hover {
            background-color: #c0c0c0;
            color: #FFF;
            font-size: 24px;
            font-weight: bold;
        }
        .page-item.active .page-link{
            background-color: #c0c0c0;
            border-color:#c0c0c0;
        }

        .itemDisplayNone{
            display: none;
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

        footer {
            width: 100%;
            height: 70px;
            background-color: #cc543a;
            color: white;
            letter-spacing: 3px;
            display: flex;
            justify-content: center;
            align-items: center;
        }


        @media (max-width: 770px) {

            /* nav */
            .nav_burgurBar {
                display: flex;
                align-items: center;
                justify-content: space-between;
            }

            .nav_navbar_com {
                display: none;
            }

            .nav_overlayNav {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
            }

            /* news */
            .news_content {
                flex-direction: column;
                align-items: center;
                /* margin-top: 30px; */
            }

            .news_pageTitle {
                margin-bottom: 30px;
                
                line-height: 1.5;
                padding: 0;
            }

            .news_box {
                width: 100%;
                flex-direction: column;
            }

            .news_mainWordBox {
                width: 100%;
                padding: 0;
            }

            .news_subContent{
                display: none;
            }
            .news_moreLink{
                margin: 10px 0 0 0;
            }
        }
    </style>
</head>

<body>