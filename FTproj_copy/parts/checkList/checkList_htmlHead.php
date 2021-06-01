<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>

    <!-- reset -->
    <link rel="stylesheet" href="./css/reset.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- 小圖示 -->
    <script src="https://kit.fontawesome.com/271f30e909.js" crossorigin="anonymous"></script>
    <!-- font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Faustina:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+TC:wght@200;300;400;500;600;700;900&display=swap" rel="stylesheet">

    <!-- navbar2 -->
    <link rel="stylesheet" href="<?=WEB_ROOT?>/FTproj/css/navbar2.css">
    <link rel="stylesheet" href="<?= WEB_ROOT ?>/FTproj/css/member_data.css">

    <style>

        .nav_navbar_com {
            background-image: url(./img/nav_barBcc.jpg);
        }
        .nav_burgurBar{
            background-image: url(./img/nav_bcc.png);
        }
        .nav_dropDownMenu{
            background-image: url(./img/nav_bcc2.png);
        }
        .modal-content-re {
            background-image: url(./img/nav_bcc2.png);
        }
        .form-control-re {
            background-image: url(./img/nav_bcc.png);
        }



        body {
            font-family: 'Faustina', serif;
            background-image: url(./img/nav_bcc.png);
            position: relative;
        }

        p {
            margin: 0;
        }

        /* check-list */
        .checkListContainer {
            width: 80%;
            margin: 20px auto;
        }

        .checkList_title {
            font-size: 26px;
            font-weight: 700;
            padding: 20px 0;
            margin: 0 0 20px 0;
        }

        .checkList_prod_cate {
            display: flex;
            justify-content: center;

            /* border: 1px solid red; */
        }

        .checkList_prod_cateBox {
            width: 100%;
            display: flex;
            justify-content: space-around;
            /* border: 1px solid red; */
        }

        .checkList_prod_cate p {
            /* 有一樣的寬度，這樣下面才會對齊title */
            width: 100px;
            text-align: center;

            font-size: 18px;
            font-weight: 700;

            /* border: 1px solid red; */
        }

        .checkList_itemContainer {
            margin: 20px 0;
            /* padding: 20px 0; */
            border-top: 1px solid rgba(203, 203, 203, .7);
            border-bottom: 1px solid rgba(203, 203, 203, .7);
        }

        .checkList_item {
            display: flex;
            justify-content: center;
            margin: 20px 0;

            /* padding: 0 100px; */
            /* border: 1px solid red; */
        }

        .checkList_itemImgBox {
            width: 120px;
            height: 162px;

            margin: 0 50px;

            /* border: 1px solid red; */
        }

        .checkList_itemImgBox img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .checkList_itemWordBox {
            width: 100%;
            display: flex;
            justify-content: space-around;
            align-items: center;

            /* border: 1px solid red; */
        }

        .checkList_itemWordBox p {
            width: 100px;
            text-align: center;

            /* border: 1px solid red; */
        }

        .checkList_subTitle {
            font-size: 22px;
            font-weight: 700;
        }

        .checkList_info {
            font-size: 18px;
            font-weight: 700;
            margin: 30px 0;
        }

        .checkList_deliverContent,
        .checkList_payContent {
            width: 40%;
        }

        .checkList_deliver_cho {
            margin: 20px 0;
        }

        .checkList_deliver_choName {
            display: flex;
            justify-content: space-between;
            font-size: 18px;
            font-weight: 700;
        }

        .checkList_choInfo {
            background-image: url(./img/nav_bcc2.png);
            margin: 0px 0 0 15px;
            padding: 10px;
            border-radius: 5px;
            display: none;
            position: relative;
        }

        .checkList_dliver_choInfo input {
            margin: 5px;
            border: 1px solid #ccc;
        }

        .shopName {
            font-weight: 600;
        }

        .checkList_btn {
            padding: 3px 10px;
            margin: 10px 0 0 0;
            background-color: #cc543a;
            border: transparent;
            border-radius: 30px;
            color: #fff;

            position: relative;
            z-index: 2;
        }

        .checkList_btn:hover {
            background-color: #dd745e;
        }

        button:focus {
            outline: none;
        }

        .checkList_btn a {
            color: #fff;
            text-decoration: none;
        }

        .checkList_payBox {
            padding: 20px 0;
            margin: 20px 0;
            border-top: 1px solid rgba(203, 203, 203, .7);
            border-bottom: 1px solid rgba(203, 203, 203, .7);
        }

        .checkList_payMethod {
            font-size: 18px;
            font-weight: 700;
        }



        /* .checkList_pay_choInfo{
            max-width: 400px;
            height: 200px;
            border-radius: 20px;  
            background-color: #cc543a;
            border:1px solid red ;
        } */

        .checkList_pay_choInfo input {
            margin: 0 0 0 5px;
            background: transparent;
            border: 0px;
            border-bottom: 1px solid #aaa;
        }

        .checkList_totalPriceContainer {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }

        .checkList_totalPricInfoBox {
            display: flex;
            justify-content: space-between;
        }

        .checkList_totalPricInfo p {
            font-weight: 700;
            margin: 5px 20px;
            /* border: 1px solid red; */
        }

        .checkList_finBtn {
            display: flex;
            justify-content: flex-end;
            margin: 30px 20px 40px 0;

            /* border: 1px solid red; */
        }

        .checkList_importment {
            font-size: 14px;
            color: #cc543a;
            margin-bottom: 20px;
        }


        /* bccImg */
        .checkList_bccImg {
            width: 1200px;
            position: absolute;
            bottom: 50px;
            right: 0;
            opacity: .3;
        }

        .checkList_bccImg img {
            width: 100%;
            /* position: absolute; */
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


        /* footer */
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

        /* 警示小標語 */
        .form-text{
            color: red;
        }

        /* 桌機用 */
        @media (min-width:1400px) {
            
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

        /* finishorder */
        .modal_header_imgBox {
            display: flex;
            justify-content: center;
        }

        .modal-content-re img {
            margin: 0 10px 0 0;
        }

        .modal-body-re {
            text-align: center;
        }

        .modal-infoContainer {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 0 20px 0;
        }

        .modal-infoContainer p {
            font-size: 26px;
            font-weight: 700;
        }

        .btn-primary-re a {
            text-decoration: none;
            color: #fff;
        }


        @media (max-width: 770px) {
            .checkList_prod_cate {
                display: none;
            }

            .checkList_item {
                justify-content: flex-start;
                align-items: center;
            }

            .checkList_itemImgBox {
                margin: 0 30px 0 0;
            }

            .checkList_itemWordBox {
                width: auto;
                display: block;
            }

            .checkList_itemWordBox p {
                width: auto;
                text-align: left;
            }

            .checkList_itemName {
                font-size: 18px;
                font-weight: 700;
            }

            .checkList_itemNum {
                margin: 0px 0 0 0;
            }

            .checkList_itemNum::before {
                content: "數量 ";
            }

            .checkList_itemTotalP::before {
                content: "總計 ";
            }

            .checkList_deliverContent,
            .checkList_payContent {
                width: auto;
            }

            .checkList_totalPriceContainer {
                display: block;
            }

            .checkList_totalPricInfo {
                margin: 20px 0 0 0;
            }

            .checkList_totalPricInfo p {
                margin: 5px 0;
            }

            .checkList_finBtn {
                margin-right: 0;
            }




            .checkList_bccImg {
                display: none;
            }
        }
    </style>

</head>

<body>