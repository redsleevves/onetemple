<?php include __DIR__ . '/parts/config.php'; ?>

<?php
$_gdata = [
    // 網頁名稱
    'title' => '灣廟 | 會員中心', 
    // 頁面私有 css
    'styles' => '<link rel="stylesheet" href="'.WEB_ROOT.'/css/member_data.css"><link rel="stylesheet" href="'.WEB_ROOT.'/css/navbar2.css">',
    //頁面私有 scripts
    'scripts' => '', 
];

$title = '灣廟 | 會員中心';
$pageName = 'member';
$member_sid = $_SESSION['user']['sid'];

$pdc_sql = "SELECT fav_pdc.sid, member.sid AS member_id, fav_pdc.pdc_sid, product.img, product.name, product.price FROM fav_pdc JOIN member ON member.sid=fav_pdc.member_sid JOIN product ON fav_pdc.pdc_sid=product.sid where member.sid='$member_sid'";
$pdc_rows = $pdo->query($pdc_sql)->fetchAll();

$trip_sql = "SELECT fav_trip.sid, member.sid AS member_id, fav_trip.trip_sid, trips.photo1, trips.title2, trips.position, trips.days, trips.title3, trips.price FROM fav_trip JOIN member ON member.sid=fav_trip.member_sid JOIN trips ON fav_trip.trip_sid=trips.id where member.sid='$member_sid'";
$trip_rows = $pdo->query($trip_sql)->fetchAll();

$lucky_sql = "SELECT fav_lucky.sid, member.sid AS member_id, fav_lucky.lucky_sid, fav_lucky.getdate, peom.img FROM fav_lucky JOIN member ON member.sid=fav_lucky.member_sid JOIN peom ON fav_lucky.lucky_sid=peom.sid where member.sid='$member_sid'";
$lucky_rows = $pdo->query($lucky_sql)->fetchAll();

$lit_sql = "SELECT member_friend.name_, member.sid AS member_id, member_friend.sid, member_friend.mobile_, member_friend.birthday_, member_friend.address_ FROM member_friend JOIN member ON member.sid=member_friend.f_sid where member.sid='$member_sid'";
$lit_rows = $pdo->query($lit_sql)->fetchAll();

$sum_sql = "SELECT * FROM order_sum where order_sum.member_sid='$member_sid'";
$sum_rows = $pdo->query($sum_sql)->fetchAll();

$sum_id = $sum_rows['sid'];

$sum_trip_sql = "SELECT orders_trip.trip_qty,orders_trip.trip_price, orders_trip.sum_id, trips.title2, trips.photo1, orders_trip.member_sid FROM orders_trip JOIN trips ON orders_trip.trip_sid=trips.id where member_sid='$member_sid'";
$sum_trip_rows = $pdo->query($sum_trip_sql)->fetchAll();

$sum_pdc_sql = "SELECT orders_pdc.pdc_qty,orders_pdc.pdc_price, orders_pdc.sum_id,product.name, product.img, orders_pdc.member_sid FROM orders_pdc JOIN product ON orders_pdc.pdc_sid=product.sid where member_sid='$member_sid'";
$sum_pdc_rows = $pdo->query($sum_pdc_sql)->fetchAll();

?>
    <style>
        body {
            font-family: 'Faustina', serif;
            background-image: url(<?= WEB_ROOT ?>/img/bcc.png);
            position: relative;
            width: 100vw;
            overflow-x: hidden;
        }

        h2 {
            font-size: 35px;
            font-weight: bold;
        }

        h3 {
            font-size: 25px !important;
            font-weight: bold !important;
        }

        h4 {
            font-size: 22px;
            font-weight: normal;
        }

        p {
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
            font-family: 'Sitka Display', NSimSun, 'sans-serif';

        }

        button:focus {
            outline: 0;
            box-shadow: 0 0 0 1pt rgb(77, 77, 77);
        }

        i {
            padding: 0 8px;
        }

        nav {
            width: 90%;
            background-image: url(<?= WEB_ROOT ?>/img/bcc.png);
            display: flex;
            justify-content: space-between;
            position: fixed;
            top: 0;
            right: 5%;
            border-bottom: 1px solid rgb(165, 165, 165);
            z-index: 1;
        }

        nav img {
            height: 80%;
        }

        .head {
            margin-top: 100px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
        }

        .root {
            align-self: flex-start;
        }

        .tab {
            display: flex;
            justify-content: space-around;
            margin-top: 30px;
        }

        .tab div {
            display: flex;
            align-items: center;
        }


        .tab h4 {
            letter-spacing: 2px;
        }

        #pointer {
            height: 1px;
            width: 80%;
            background-color: #4D4B4B;
            position: relative;
            --myVar: 25%;
        }

        #pointer::before {
            content: "";
            display: block;
            width: 0;
            height: 0;
            border-style: solid;
            border-width: 0 15px 15px 15px;
            border-color: transparent transparent #4D4B4B transparent;
            position: absolute;
            top: -15px;
            left: var(--myVar);
            transition: 0.5s;

        }

        .btns {
            margin: 300px;
        }

        footer {
            width: 100%;
            position:absolute;

        }

        .member_head {
            padding-bottom: 2%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
        }

        .member_head h4{
            font-size:18px !important;
        }

        .fav_product img {
            width: 100%;
            object-fit: cover;
        }

        .fav_plan img {
            height: 100%;
            width: 100%;
            object-fit: cover;
            padding: 0;
        }

        .fav {
            width: 100%;
            position: absolute;
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            justify-content: center;
        }

        .fav_product_container {
            display: flex;
            justify-content: start;
            transition: 1s;
            width: 100%;
        }

        .prow {
            display: flex;
            align-items: center;
            padding: 0;
            overflow: hidden;
        }

        .fav_product_card,
        .fav_plan_card,
        .fav_lucky_card {
            text-align: center;
            position: relative;
        }

        .fav_product_card {
            background-color: white;
            padding: 0;
            padding-bottom: 15px;
            margin: 5px 15px;
            box-shadow: 3px 3px 3px 3px rgb(202, 202, 202);
            border-radius: 5px;
            border: 1px solid gray;
        }

        .fav_product_card p {
            margin-top: 20px;
        }

        .fav_product_card .delete {
            position: absolute;
            color: #cc543a;
        }

        .fav_plan_card .delete {
            position: absolute;
            color: #cc543a;
            z-index: 2;
        }

        .fav_lucky_card .delete {
            position: absolute;
            color: #cc543a;
        }

        .fav_lucky_box p {
            text-align: left;
        }

        .fav_plan_container {
            width: 100%;
            display: flex;
            justify-content: start;
            align-items: center;
            margin: 40px 0;
            /* overflow: hidden; */
            transition: 1s;
        }

        .fav_plan_card {
            height: 300px;
            display: flex;
            justify-content: space-between;
            background-color: white;
            border: 1px solid gray;
            padding: 0;
            margin: 5px 15px;
            box-shadow: 3px 3px 3px 3px rgb(202, 202, 202);
            border-radius: 5px;
        }

        .fav_plan_card_text {
            width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
            align-items: flex-start;
            padding: 10px 20px;
        }

        .fav_plan_card button{
            align-self: flex-end;
            border-radius:50px;
        }

        .fav_plan_card_text p {
            margin: 0;
        }
        .fav_plan_card_text i{
            margin-right:5px;
        }

        .fav_lucky_card {
            display:flex;
            flex-direction:column;
            justify-content:center;
            height: 420px;
            align-items:center;
            position:relative;
            margin:0 20px;
        }
        .fav_lucky_card img{
            height: 100%;
        }

        .fav_lucky_card .more {
            position:absolute;
            bottom:10%;
            -webkit-filter: drop-shadow(0 0 20px white);
            filter: drop-shadow(0 0 20px white)   
        }

        .fav_lucky_card button{
            border-radius:50px;
        }

        .fav_lucky_container {
            width: 100%;
            display: flex;
            justify-content: start;
            align-items: center;
            margin: 40px 0;
            transition: 1s;
        }

        .control {
            font-size:30px;
            display: flex;
            align-items: center;
            z-index: 1;
            padding: 5px 10px;
            margin: 10px;
            color:gray;
            border:3px solid gray;
            border-radius:50%;
            transition:0.2s;
        }

        .control:hover{
            box-shadow:0px 2px 3px 1px rgba(0, 0, 0, 0.3);
        }

        .abstract {
            /* background-color: #D1D2D5;
            border: 2px solid #C0C0C0; */
            margin-bottom: 0;
        }

        .ordertable {
            width: 100%;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            position: absolute;
        }


        .fixrow tr {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .fixrow {
            margin-bottom:0 !important;
        }

        .info {
            background-color: #D1D2D5;
            border: 2px solid #C0C0C0;            
            margin-bottom: 0;
            margin-top: 1rem;
        }

        .fixrow thead th {
            min-width: 15%;
            text-align: center;
        }

        .less {
            position: absolute;
            left: 50%;
        }

        .popwindow {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -500%);
            height: fit-content;
            background-image: url(<?= WEB_ROOT ?>/img/bcc2.png);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content:center;
            transition: 0.5s;
            z-index: 101;
            border-radius:20px;
            padding: 50px 0;
        }

        .editMyData {
            margin-bottom: 30px;
        }

        .editMyData div {
            display: table-row;
        }

        .editMyData label,
        .editMyData input,
        .editMyData p {
            display: table-cell;
            border: 15px solid transparent;
        }

        .editMyData input {
            background-image: url(<?= WEB_ROOT ?>/img/bcc.png);
            border: none;
        }
        .popwindow button,
        .popwindow2 button{
            margin:0 20px;
        }

        .popwindow2 {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -500%);
            width: 35%;
            height: fit-content;
            background-image: url(<?= WEB_ROOT ?>/img/bcc2.png);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            transition: 0.5s;
            z-index: 101;
            border-radius: 20px;
            padding: 50px 0;
        }

        .scrollbox {
            margin-bottom: 30px;
            height: 400px;
            padding: 20px;
            overflow-Y:scroll;
        }

        .editFriendsData div {
            display: table-row;
        }

        .editFriendsData label,
        .editFriendsData input,
        .editFriendsData p {
            display: table-cell;
            text-align: center;
            text-align: start;
            border: 15px solid transparent;
        }

        .editFriendsData p {
            /* display: none; */
        }

        .editFriendsData input {
            background-image: url(<?= WEB_ROOT ?>/img/bcc.png);
            border: none;
        }

        .unfriends {
            justify-content: center;
            margin: 20px 0;
        }
        .cover {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 120%;
            background-color: rgba(0, 0, 0, 0.432);
            opacity: 0;
            display:none;
            z-index: 100;
            transition: 0.2s;
        }
        .member_profile{
            display: flex;
            flex-direction:column;
        }
        .member_profile button{
            border-radius: 30px;
            padding: 5px 10px;
        }
        .member_profile button p{
            margin-bottom: 0;
        }
        form .form-group small.error {
        color: red;
        }
        .lucky_pop{
            background-image: url(<?= WEB_ROOT ?>/img/bcc.png);
        }
        .ppic{
            display:flex;
            flex-direction:column;
            align-items:center;
        }
        .member_img{
            width: 400px;
            height: 400px;
        }
        .member_img img{
            width: 100%;
            height: 100%;
            object-fit:cover;
        }
        .family{
            width: 50%;
            margin: 100px auto;
        }
        .lucky_Poetry06{
            display: flex;
            justify-content: center
        }
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
                width: 85%;
            }
        }
        @media screen and (min-width: 1000px) {
            .popwindow {
            width: 35%;
            }

            .tab img,
            .tab svg {
                margin-right: 15px;
            }

            .member_upimg {
                width: 30px;
                margin: auto;
                padding-top: 15px;
                cursor: pointer;
            }

            .prow {
                margin: 30px 0;
            }

            .fav_product_card .delete {
                top: 3%;
                right: 5%;
                font-size: 30px;
            }

            .fav_plan_card .delete {
                top: 3%;
                right: 1%;
                font-size: 30px;
            }

            .fav_lucky_card .delete {
                top: -7%;
                right: 2%;
                font-size: 30px;
            }

            .detail {
                text-align: center;
                border: 2px solid #C0C0C0;
                border-top: none;
                display: none;
            }

            .detail h3{
                text-align: start;
                margin:15px 0 0 55px;
            }

            .detail th {
                height: 50px;
                vertical-align: middle;
                text-align: center;
            }

            .detail td {
                vertical-align: middle !important;
                text-align: center;
            }

            .detail thead {
                position: relative;
            }

            .detail thead::after {
                content: "";
                display: block;
                height: 2px;
                width: 65%;
                top: 100px;
                left: 30%;
                position: absolute;
                background-color: #C0C0C0;
            }

            .subsum {
                text-align: right;
            }

            .subsum p::before {
                content: "小計";
                margin-right: 20px;
            }

            .thumbnail {
                width: 100px;
                margin: 0 auto;
            }

            .thumbnail img {
                width: 180%;
            }

            .order_backdeco {
                position: absolute;
                bottom: -300px;
                right: 0;
                z-index: -1;
                opacity: 0.7;
                transform: scale(0.7);
                transform-origin: right bottom;
            }

            .order_mobile {
                display: none;
            }

            .lucky_p6 {
                display: flex;
                flex-direction: row;
                text-align: justify;
                justify-content: center;
            }

            .lucky_content06 {
                display: flex;
                flex-direction: column;
                width: 320px;
                margin-left: 60px;
                margin-right: 0px;
            }

            .lucky_result06 {
                display: flex;
                width: 325px;
                justify-content: space-between;
            }

            .lucky_title06_1 {
                display: flex;
                flex-direction: row;
                align-items: center;
            }

            .lucky_title06_2 {
                background-color: #cc543a;
                width: 60px;
                height: 60px;
                border-radius: 50%;
            }

            .lucky_title06_1 h4 {
                font-weight: 600;
            }

            .lucky_title06_2 h5 {
                color: #fff;
                line-height: 65px;
                font-size: 15px;
                text-align: center;
            }

            .lucky_Commentary06 p {
                font-size: 18px;
            }
        }

        @media screen and (max-width: 1000px) {
            .fav p{
                margin-bottom:0;
            } 

            .member_img{
            width: 250px;
            height: 250px;
            }
            .popwindow {
                width: 90%;
            }
            .editMyData div {
            display: table-row;
            }

            .editMyData label,
            .editMyData input,
            .editMyData span {
                display: table-row;
                text-align: center;
                padding: 5px;
            }

            .editMyData p {
                display: none;
            }
            nav {
                height: 100px;
                padding: 10px;
                align-items: center;
            }

            nav ul {
                display: none;
            }

            nav .fa-bars {
                color: #4b4b4b;
                font-size: 30px;
            }

            #pointer {
                margin-top: 5px;
            }

            #pointer::before {
                border-width: 0 10px 10px 10px;
                top: -10px;
            }

            h4 {
                font-size: 18px !important;
            }

            .tab {
                justify-content: space-between;
                margin: 0 0 15px 0;
            }

            .tab svg {
                width: 70%;
                margin: 0;
            }

            .tab div {
                flex-direction: column;
                align-items: center;
            }

            .tab h4 {
                margin: 0;
            }
            .member_profile p{
                font-size:16px;
            }

            .prow {
                margin: 30px 0;
                overflow: scroll;
            }

            .control {
                display: none;
            }

            .fav_product_container{
                height: 240px;
            }

            .fav_product_card {
                width: 200px;
            }

            .fav_product_card p{
                font-size:16px;
                margin-top:10px;
            }

            .prod_pic {
                height: 60%;
                width: 140px;
            }

            .prod_pic img {
                height: 100%;
                width: 100%;
                object-fit: cover;
            }

            .fav_plan_container {
                height: 220px;
                margin: 0;
                overflow: scroll;
            }

            .fav_plan_card{
                height: 90%;
            }

            .fav_plan_container h3 {
                font-size: 16px !important;
            }

            .fav_plan_container p {
                display: none;
            }

            .fav_plan_container span {
                font-size: 14px;
            }

            .fav_plan_container button {
                font-size: 13px;
            }

            .fav_lucky_card {
                height: 250px;
                margin-right: 10px;
            }

            .fav_lucky_container {
                height: 300px;
                padding: 0;
                margin: 20px 0;
                overflow: scroll;
            }

            .more button{
                font-size:16px;
            }

            .fav_lucky_card p{
                font-size: 14px;
            }

            .fav_product_card .delete {
                top: 3%;
                right: 8%;
            }

            .fav_plan_card .delete {
                top: 3%;
                right: -1%;
            }

            .fav_lucky_card .delete {
                top: 3%;
                right: 8%;
            }

            .fav_plan_card img {
                height: 100%;
                object-fit: cover;
            }


            .fav_plan_card_text {
                padding: 10px;
                align-items: unset;
            }

            .ordertable {
                display: none;
            }

            .order_mobile_thumbnail {
                height: 160px;
                padding: 0 10px;
                width: 40%;
            }

            .order_mobile_thumbnail img {
                height: 100%;
                width: 100%;
                object-fit: cover;
            }

            .order_card .data {
                display: flex;
                flex-direction: column;
                justify-content: space-between;
                height: inherit;
                padding-left: 10px;
            }

            .order_card p {
                font-size: 16px;
                margin: 0;
            }

            .order_card .detail {
                display: flex;
                flex-direction: column;
                border: none;
            }

            td {
                vertical-align: top;
                height: 150px;
            }

            th {
                vertical-align: middle;
            }

            .order_card {
                background-color: white;
                border: 3px solid rgb(192, 192, 192);
                border-collapse: separate;
                border-spacing: 0 12px;
                padding: 0 5px;
                margin-bottom: 18px;
            }

            thead {
                position: relative;
            }

            tbody::after {
                content: "";
                display: block;
                position: absolute;
                top: 9%;
                left: 0;
                width: 100%;
                height: 2px;
                background-color: rgb(182, 182, 182);
            }

            .order_mobile button {
                font-size: 14px;
                padding: 5px 10px;
                margin-right: 10px;
            }

            .order_mobile .detail_total {
                display: flex;
                justify-content: space-between;
            }

            .order_mobile_abstract {
                display: flex;
                justify-content: space-between;
                padding: 0 10px;
            }

            .order_mobile_abstract i {
                color: #cc543a;
            }
        }

    </style>

<?php include __DIR__ . '/parts/ourhead.php'; ?>
<?php include __DIR__ . '/parts/navbar2.php'; ?>
    <div class="breadcrumb_style   backgroundimg_1">
        <div class="d-flex flex-wrap breadcrumb_style_1 ">
            <a href="" class="astlyep">首頁</a>
            <img src="<?= WEB_ROOT ?>/img/nav_arrow_right.svg">
            <a href="" class="astlyep">會員中心</a>
        </div>
    </div>
    <div class="popwindow">
            <h3>會員資料修改</h3>
        <form name="editMyData" class="editMyData" method="post" novalidate onsubmit="checkEdit(); return false;">
        <input type="hidden" name="sid" value="<?= htmlentities($_SESSION['user']['sid']) ?>">
            <div class="form-group">
                <label for="member_name">姓名</label>
                <p>|</p>
                <input type="text" id="member_name" name='member_name' value="<?= htmlentities($_SESSION['user']['name']) ?>" readonly>
            </div>
            <div class="form-group">
                <label for="member_mobile">連絡電話</label>
                <p>|</p>
                <input type="text" id="member_mobile" name='member_mobile' value="<?= htmlentities($_SESSION['user']['mobile']) ?>">
                <small class="form-text error"></small>
            </div>
            <div class="form-group">
                <label for="member_address">地址</label>
                <p>|</p>
                <input type="text" id="member_address" name='member_address' value="<?= htmlentities($_SESSION['user']['address']) ?>">
                <small class="form-text error"></small>
            </div>
            <div class="form-group">
                <label for="member_password">密碼</label>
                <p>|</p>
                <input type="password" id="member_password" value="<?= htmlentities($_SESSION['user']['password']) ?>">
                <small id="changepw" class="form-text">修改密碼</small>
            </div>
            <div class="form-group d-none old_password">
                <label for="member_password">舊密碼</label>
                <p>|</p>
                <input type="password" id="old_password" placeholder="請輸入舊密碼">
            </div>
            <div class="form-group d-none new_password">
                <label for="member_password">新密碼</label>
                <p>|</p>
                <input type="password" id="new_password" placeholder="請輸入新密碼">
            </div>
            <div class='d-flex justify-content-center mt-2'>
            <button class="butgray back">返回</button>
            <button type="submit">確認修改</button>
            </div>
        </form>

    </div>
    <div class="popwindow2">
        <h3>親友資料修改</h3>
        <div class="scrollbox">
            <form id="editFriendsData" class="editFriendsData" name="editFriendsData" onsubmit="checkEditFamily(); return false;">
            <?php foreach ($lit_rows as $k) : ?>
                <div class="friends_unit">
                <input type="hidden" name="sid[]" value="<?= $k['sid'] ?>">
                <div class="form-group">
                    <label for="member_name">姓名</label>
                    <p>|</p>
                    <input type="text" name="friends_name[]" value="<?= $k['name_'] ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="member_password">生日</label>
                    <p>|</p>
                    <input type="text" name="friends_birth[]" value="<?= $k['birthday_'] ?>">
                </div>
                <div class="form-group">
                    <label for="member_mobile">連絡電話</label>
                    <p>|</p>
                    <input type="text" name="friends_mobile[]" value="<?= $k['mobile_'] ?>">
                </div>
                <div class="form-group">
                    <label for="member_address">地址</label>
                    <p>|</p>
                    <input type="text" name="friends_address[]" value="<?= $k['address_'] ?>">
                </div>
                <div style="display: flex; justify-content:center">
                <a href="javascript:delete_friends(<?= $k['sid'] ?>)"><button type="button" class="unfriends graybut">刪除</button></a>
                </div>
                <hr>
                </div>
                <?php endforeach; ?>
            </form>
        </div>
        <div>
            <button class="addfriends">新增</button>
            <button type="submit" form="editFriendsData">儲存</button>
        </div>
    </div>
    <div class="cover"></div>
    <section class="member_head container-fluid">
        <div class="tab col-lg-9  col-12">
            <div class="profile">
                <svg xmlns="http://www.w3.org/2000/svg" width="89" height="89" viewBox="0 0 89 89">
                    <g id="account" transform="translate(0.173)">
                        <circle id="Ellipse_5" data-name="Ellipse 5" cx="44.5" cy="44.5" r="44.5"
                            transform="translate(-0.173)" fill="#cc543a" />
                        <g id="Group_92" data-name="Group 92" transform="translate(24.07 22.25)">
                            <path id="Path_23" data-name="Path 23"
                                d="M51.65,30.071s0-5.721-6.357-6.039a9.457,9.457,0,0,1-6.357-3.179l-.318-.318h0a3.587,3.587,0,0,0-3.5-.954,11.427,11.427,0,0,1-3.5.636,13.518,13.518,0,0,1-3.5-.636,3.587,3.587,0,0,0-3.5.954h0l-.318.318a10.189,10.189,0,0,1-6.357,3.179c-6.357.636-6.357,6.039-6.357,6.039V32.3c0,1.589-.318,5.086,18.436,5.086H32.9c18.436,0,18.754-3.212,18.754-5.12V30.071Z"
                                transform="translate(-11.6 7.436)" fill="none" stroke="#f7f8f7" stroke-miterlimit="10"
                                stroke-width="1.5" />
                            <ellipse id="Ellipse_6" data-name="Ellipse 6" cx="13.032" cy="13.668" rx="13.032"
                                ry="13.668" transform="translate(7.311)" fill="none" stroke="#f7f8f7"
                                stroke-miterlimit="10" stroke-width="1.5" />
                        </g>
                    </g>
                </svg>

                <h4>會員資料</h4>
            </div>
            <div class="favorite">
                <svg xmlns="http://www.w3.org/2000/svg" width="89" height="89" viewBox="0 0 89 89">
                    <path id="gratipay-brands"
                        d="M44.5,8A44.5,44.5,0,1,0,89,52.5,44.515,44.515,0,0,0,44.5,8ZM65.063,48.624l-20.276,27.4-20.222-27.4C23,46.489,21.138,39.581,27.005,35.7c5.042-3.248,9.8-.754,12.291,2.135a7.713,7.713,0,0,0,11.071,0c2.494-2.889,7.249-5.383,12.22-2.135,5.9,3.876,4.055,10.766,2.476,12.919Z"
                        transform="translate(0 -8)" fill="silver" />
                </svg>
                <h4>收藏清單</h4>
            </div>
            <div class="order">
                <svg id="orderlist" xmlns="http://www.w3.org/2000/svg" width="89" height="89" viewBox="0 0 89 89">
                    <path id="Path_18" data-name="Path 18"
                        d="M47.5,92h0A44.631,44.631,0,0,1,3,47.5H3A44.631,44.631,0,0,1,47.5,3h0A44.631,44.631,0,0,1,92,47.5h0A44.631,44.631,0,0,1,47.5,92Z"
                        transform="translate(-3 -3)" fill="silver" />
                    <g id="Group_90" data-name="Group 90" transform="translate(14.741 24.614)">
                        <g id="Group_89" data-name="Group 89" transform="translate(7.37 7.787)">
                            <line id="Line_53" data-name="Line 53" x2="13.35" transform="translate(30.594 12.098)"
                                fill="none" stroke="#efeeee" stroke-linecap="round" stroke-linejoin="round"
                                stroke-miterlimit="10" stroke-width="1.778" />
                            <line id="Line_54" data-name="Line 54" x2="13.35" transform="translate(30.594)" fill="none"
                                stroke="#efeeee" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                stroke-width="1.778" />
                            <line id="Line_55" data-name="Line 55" x2="13.35" transform="translate(30.594 5.841)"
                                fill="none" stroke="#efeeee" stroke-linecap="round" stroke-linejoin="round"
                                stroke-miterlimit="10" stroke-width="1.778" />
                            <line id="Line_56" data-name="Line 56" x2="13.35" transform="translate(30.594 24.753)"
                                fill="none" stroke="#efeeee" stroke-linecap="round" stroke-linejoin="round"
                                stroke-miterlimit="10" stroke-width="1.778" />
                            <line id="Line_57" data-name="Line 57" x2="13.35" transform="translate(30.594 17.8)"
                                fill="none" stroke="#efeeee" stroke-linecap="round" stroke-linejoin="round"
                                stroke-miterlimit="10" stroke-width="1.778" />
                            <g id="Group_88" data-name="Group 88" transform="translate(0 0)">
                                <path id="Path_19" data-name="Path 19"
                                    d="M43.792,30.9V44.528a4.985,4.985,0,0,1-5.006,5.006H23.906A4.985,4.985,0,0,1,18.9,44.528V30.9Z"
                                    transform="translate(-18.9 -24.503)" fill="none" stroke="#efeeee"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                    stroke-width="1.778" />
                                <path id="Path_20" data-name="Path 20"
                                    d="M23.1,37.7V29.5a3.332,3.332,0,0,1,3.2-3.2h6.953a3.332,3.332,0,0,1,3.2,3.2v8.2"
                                    transform="translate(-17.259 -26.3)" fill="none" stroke="#efeeee"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"
                                    stroke-width="1.778" />
                            </g>
                        </g>
                        <path id="Path_21" data-name="Path 21"
                            d="M67.139,60.333H19.58a6.118,6.118,0,0,1-5.98-5.98V26.68a6.118,6.118,0,0,1,5.98-5.98H66.861a6.118,6.118,0,0,1,5.98,5.98v27.4A5.788,5.788,0,0,1,67.139,60.333Z"
                            transform="translate(-13.6 -20.7)" fill="none" stroke="#efeeee" stroke-linecap="round"
                            stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1.778" />
                    </g>
                </svg>

                <h4>訂單列表</h4>
            </div>
        </div>
        <hr id=pointer>
    </section>
    <div class="member_profile padtp50 container-fluid animate__animated animate__fadeInUp animate__faster">
        <!-- 底部照片+個人資料 -->
        <div class=" displayflex jucse aic maxwidth displayno_md">
            <!-- 底部照片頭像 -->
            <div class="col-lg-5 col-10 marginauto ppic">
                <div class="member_img">
                    <img id="myimg" src="<?= WEB_ROOT ?>/upload/<?= htmlentities($_SESSION['user']['profilepic']) ?>" alt="">
                </div>
                <div class="member_upimg">
                    <img src="<?= WEB_ROOT ?>/img/uplaod.png" onclick="avatar.click()">
                    <form name="form_upload" style="display: none">
                        <input type="hidden" name="sid" value="<?= htmlentities($_SESSION['user']['sid']) ?>">
                        <input type="file" name="avatar" id="avatar">
                    </form>
                </div>
            </div>
            <div class='col-lg-5'>
                <div class="d-flex pad00150 aic">
                    <h3>會員資料</h3>
                    <button class="ml-3 butstyle d-flex aic editbtn popeditmy">
                        <img  class="revise_icon" src="<?= WEB_ROOT ?>/img/member_pen_solid.svg">
                        <p class="pl-2">修改</p>
                    </button>
                </div>

                <div class="set col-12 marginauto p-0">
                    <div class=" displayflex_md displayflex">
                        <div class="text_p displayflex_md jcsb col-4 p-0 displayflex">
                            <p class="">姓名</p>
                            <p class="">|</p>
                        </div>
                        <P class="col"><?= htmlentities($_SESSION['user']['name']) ?></P>
                    </div>
                    <div class=" displayflex_md displayflex">
                        <div class="text_p displayflex_md jcsb col-4 p-0 displayflex">
                            <p class="">生日</p>
                            <p class="">|</p>
                        </div>
                        <P class="col"><?= htmlentities($_SESSION['user']['birth']) ?></P>
                    </div>
                    <div class=" displayflex_md displayflex">
                        <div class="text_p displayflex_md jcsb col-4 p-0 displayflex">
                            <p class="">性別</p>
                            <p class="">|</p>
                        </div>
                        <P class="col"><?= htmlentities($_SESSION['user']['gender']) ?></P>
                    </div>
                    <div class=" displayflex_md displayflex">
                        <div class="text_p displayflex_md jcsb col-4 p-0 displayflex">
                            <p class="">密碼</p>
                            <p class="">|</p>
                        </div>
                        <P class="col">********</P>
                    </div>
                    <div class=" displayflex_md displayflex">
                        <div class="text_p displayflex_md jcsb col-4 p-0 displayflex">
                            <p class="">連絡電話</p>
                            <p class="">|</p>
                        </div>
                        <P class="col"><?= htmlentities($_SESSION['user']['mobile']) ?></P>
                    </div>
                    <div class=" displayflex_md displayflex">
                        <div class="text_p displayflex_md jcsb col-4 p-0 displayflex">
                            <p class="">電子信箱</p>
                            <p class="">|</p>
                        </div>
                        <P class="col"><?= htmlentities($_SESSION['user']['email']) ?></P>
                    </div>
                    <div class=" displayflex_md displayflex">
                        <div class="text_p displayflex_md jcsb col-4 p-0 displayflex">
                            <p class="">地址</p>
                            <p class="">|</p>
                        </div>
                        <P class="col"><?= htmlentities($_SESSION['user']['address']) ?></P>
                    </div>
                </div>
            </div>
        </div>

        <!-- 手機用 底部照片+個人資料 -->
        <div class="_set displayno">
            <div class=" displayflex jucse aic maxwidth ">
                <!-- 手機用 底部照片頭像 -->
                <div class=" col-lg-5 col-10 marginauto">
                    <div class="member_img">
                        <img src="<?= WEB_ROOT ?>/upload/<?= htmlentities($_SESSION['user']['profilepic']) ?>">
                    </div>
                    <div class="member_upimg">
                        <img src="<?= WEB_ROOT ?>/img/uplaod.png">
                    </div>
                </div>
                <!-- 手機用  會員資料 -->
                <div class=" padtp10_md">
                    <div class="_set col-11 p-0 marginauto ">
                        <!-- 手機用  會員資料_標題 -->
                        <div class=" displayflex_md pad00150">
                            <h5 class="margin0">會員資料</h5>
                            <!-- 手機用 修改icon -->
                            <div type="button" class="revise_icon displayflex_md member_add popeditmy">
                                <img src="<?= WEB_ROOT ?>/img/member_pen_solid.svg">

                            </div>
                        </div>
                        <!-- 手機用  會員資料_內文集合 -->
                        <div class="set col-10 marginauto p-0">
                            <!-- 手機用  會員資料_內文組 -->
                            <div class=" displayflex_md">
                                <div class="text_p displayflex_md jcsb col-4 p-0">
                                    <p class="">姓名</p>
                                    <p class="">|</p>
                                </div>
                                <P class="col"><?= htmlentities($_SESSION['user']['name']) ?></P>
                            </div>


                            <div class=" displayflex_md">
                                <div class="text_p displayflex_md jcsb col-4 p-0">
                                    <p class="">生日</p>
                                    <p class="">|</p>
                                </div>
                                <P class="col"><?= htmlentities($_SESSION['user']['birth']) ?></P>
                            </div>
                            <div class=" displayflex_md">
                                <div class="text_p displayflex_md jcsb col-4 p-0">
                                    <p class="">性別</p>
                                    <p class="">|</p>
                                </div>
                                <P class="col"><?= htmlentities($_SESSION['user']['gender']) ?></P>
                            </div>
                            <div class=" displayflex_md">
                                <div class="text_p displayflex_md jcsb col-4 p-0">
                                    <p class="">密碼</p>
                                    <p class="">|</p>
                                </div>
                                <P class="col">********</P>
                            </div>
                            <div class=" displayflex_md">
                                <div class="text_p displayflex_md jcsb col-4 p-0">
                                    <p class="">連絡電話</p>
                                    <p class="">|</p>
                                </div>
                                <P class="col"><?= htmlentities($_SESSION['user']['mobile']) ?></P>
                            </div>
                            <div class=" displayflex_md">
                                <div class="text_p displayflex_md jcsb col-4 p-0">
                                    <p class="">電子信箱</p>
                                    <p class="">|</p>
                                </div>
                                <P class="col"><?= htmlentities($_SESSION['user']['email']) ?></P>
                            </div>
                            <div class=" displayflex_md">
                                <div class="text_p displayflex_md jcsb col-4 p-0">
                                    <p class="">地址</p>
                                    <p class="">|</p>
                                </div>
                                <P class="col"><?= htmlentities($_SESSION['user']['address']) ?></P>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--  親友資料 -->
        <div class="family displayno_md">
            <!--  親友資料標題 -->
            <div class="d-flex pad00150 aic col-12">
                <h3>親友資料</h3>
                <button class="butstyle d-flex aic popeditfriends ml-4">
                    <img class="revise_icon" src="<?= WEB_ROOT ?>/img/member_pen_solid.svg">
                    <p class="pl-2">修改</p>
                </button>
            </div>
            <!-- 親友資料表 -->
            <div class="displayno_md col-12">
                <div class="member_tablehead d-flex col-12 marginauto borderbtline">
                    <p class="col-2">姓名</p>
                    <p class="col-2">生日</p>
                    <p class="col-2">手機</p>
                    <p class="col">地址</p>

                </div>
                <?php foreach ($lit_rows as $k) : ?>
                <div class="member_tablehead d-flex col-12 marginauto">
                    <p class="col-2"><?= $k['name_'] ?></p>
                    <p class="col-2"><?= $k['birthday_'] ?></p>
                    <p class="col-2"><?= $k['mobile_'] ?></p>
                    <p class="col"><?= $k['address_'] ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- 手機用  親友資料 -->
        <div class=" maxwidth1400 marginauto padtp50 displayno col-11">
            <!-- 手機用  親友資料標題 -->
            <div class=" displayflex_md pad00150">
                <h5 class="margin0">親友資料</h5>
                <div type="button" class="revise_icon displayflex_md" data-toggle="modal"
                    data-target="#exampleModalCenter_2">
                    <img src="<?= WEB_ROOT ?>/img/member_pen_solid.svg">
                </div>

            </div>
            <!-- 手機用 親友資料表 -->
            <div class="marginauto">
                <div class="member_tablehead d-flex col-12 marginauto borderbtline mb-4">
                    <p class="col-4">姓名</p>
                    <p class="col-2">性別</p>
                    <p class="col displayno_md">生日(國曆)</p>
                    <p class="col">生日(農曆)</p>
                    <p class="col displayno_md">生辰</p>
                    <p class="col displayno_md">地址</p>
                </div>
                <?php foreach ($lit_rows as $k) : ?>
                <div class="member_tablehead d-flex col-12 marginauto">
                    <p class="col-4"><?= $k['name_'] ?></p>
                    <p class="col-2"><?= $k['birthday_'] ?></p>
                    <p class="col"><?= $k['mobile_'] ?></p>
                    <p class="col displayno_md"><?= $k['address_'] ?></p>
                </div>
                <?php endforeach; ?>                
            </div>
        </div>

    </div>
    <section class="fav container-fluid animate__animated animate__fadeInUp animate__faster d-none">
        <div class="fav_product col-lg-8">
            <div class="d-flex justify-content-between">
                <p>produc / 商品</p>
                <p class="fav_edit">編輯</p>
            </div>
            <div class='d-flex align-items-center col-lg-12'>
                <i class="fas fa-chevron-left control control_prod"></i>
                <div id="fav_product_container" class="prow">
                    <div class="fav_product_container col-xs-12">
                        <?php foreach ($pdc_rows as $p) : ?>
                        <div class="fav_product_card col-lg-3 p-0">
                        <a href="javascript:delete_fav_pdc(<?= $p['sid'] ?>)">
                            <i class="fas fa-times-circle delete d-none"></i></a>
                            <div class="prod_pic"><img src="<?= WEB_ROOT ?>/img/<?= $p['img'] ?>"></div>
                            <p><?= $p['name'] ?></p>
                            <p>NTD <?= $p['price'] ?></p>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <i class="control control_prod fas fa-chevron-right"></i>
            </div>
        </div>
        <div class="fav_plan col-lg-8">
            <div class="d-flex justify-content-between">
                <p>plan / 行程</p>
                <p class="fav_edit">編輯</p>
            </div>
            <div class='d-flex align-items-center col-lg-12'>
                <i class="fas fa-chevron-left control control_plan"></i>
                <div id="fav_plan_container" class="prow">
                    <div  class="fav_plan_container col-xs-12">
                        <?php foreach ($trip_rows as $t) : ?>
                        <div class="fav_plan_card col-lg-5 col-10 p-0">
                        <a href="javascript:delete_fav_trip(<?= $t['sid'] ?>,<?= $t['title2'] ?>)">
                            <i class="fas fa-times-circle delete d-none"></i></a>
                            <img src="<?= WEB_ROOT ?>/img/<?= $t['photo1'] ?>" class="col-6">
                            <div class="fav_plan_card_text col-6">
                                <h3><?= $t['title2'] ?></h3>
                                <p><i class="fas fa-map-marker-alt"></i><?= $t['position'] ?></p>
                                <p><i class="far fa-clock"></i><?= $t['days'] ?></p>
                                <P><i class="fas fa-quote-left"></i><?= $t['title3'] ?></P>
                                <span>NTD<?= $t['price'] ?>元起</span>
                                <button>查看詳情</button>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <i class="control control_plan fas fa-chevron-right"></i>
            </div>
        </div>
        <div class="fav_lucky col-lg-8">
            <div class="d-flex justify-content-between">
                <p>lucky / 籤詩</p>
                <p class="fav_edit">編輯</p>
            </div>
            <div class='d-flex align-items-center col-lg-12'>
                <i class="fas fa-chevron-left control control_luck"></i>
                <div id="fav_lucky_container" class="prow">
                    <div class="fav_lucky_container col-xs-12">
                        <?php foreach ($lucky_rows as $l) : ?>
                        <div class="fav_lucky_card">
                            <a href="javascript:delete_fav_lucky(<?= $l['sid'] ?>)">
                            <i class="fas fa-times-circle delete d-none"></i></a>
                            <img src="<?= WEB_ROOT ?>/img/<?= $l['img'] ?>">
                            <div class="more"><button data-toggle="modal" data-target="#lucky_Modal">點擊查看</button>
                            </div>
                            <p>求籤日期：<br><?= $l['getdate'] ?></p>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <i class="control control_luck fas fa-chevron-right"></i>
            </div>
        </div>
    </section>
    <section class="ordertable container-fluid animate__animated animate__faster animate__fadeInUp d-none">
        <table class="table table-borderless fixrow abstract col-lg-7">
            <thead>
                <tr>
                    <th>訂購日期</th>
                    <th>訂購編號</th>
                    <th>付款方式</th>
                    <th>處理進度</th>
                    <th>應付金額</th>
                    <th>訂單狀態</th>
                </tr>
            </thead>
        </table>
        <?php foreach ($sum_rows as $s) : ?>
        <table class="table table-borderless fixrow info col-lg-7">
            <thead>
                <tr>
                    <th><?= $s['orderdate'] ?></th>
                    <th><?= $s['sid'] ?></th>
                    <th><?= $s['payment'] ?></th>
                    <th><?= $s['process'] ?></th>
                    <th><?= $s['total'] ?></th>
                    <th><?= $s['status'] ?></th>
                </tr>
            </thead>
        </table>
        <div class="table detail table-light col-lg-7">
            <h3>訂購明細</h3>
            <table class="table table-light">
                <thead>
                    <tr>
                        <th scope="col" style="color: white;">商品圖</th>
                        <th scope="col">商品名稱</th>
                        <th scope="col">內容</th>
                        <th scope="col">數量</th>
                        <th scope="col">金額</th>
                        <th scope="col">備註</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($sum_trip_rows as $a)
                        if($s['sid']==$a['sum_id']): ?>
                    <tr>
                        <td>
                            <div class="thumbnail"><img src="<?= WEB_ROOT ?>/img/<?= $a['photo1'] ?>"></div>
                        </td>
                        <td><?= $a['title2'] ?></td>
                        <td><?= $a['member_sid'] ?></td>
                        <td><?= $a['trip_qty'] ?></td>
                        <td><?= $a['trip_price'] ?></td>
                        <td><a>寫下評論</a></td>
                    </tr>
                    <?php endif; ?>
                    <?php foreach ($sum_pdc_rows as $b)
                         if($s['sid']==$b['sum_id']): ?>
                    <tr>
                        <td>
                            <div class="thumbnail"><img src="<?= WEB_ROOT ?>/img/<?= $b['img'] ?>"></div>
                        </td>
                        <td><?= $b['name'] ?></td>
                        <td><?= $b['member_sid'] ?></td>
                        <td><?= $b['pdc_qty'] ?></td>
                        <td><?= $b['pdc_price'] ?></td>
                        <td><?= $a['trip_price'] ?></td>
                    </tr>
                    <?php endif; ?>
                    <tr>
                        <td colspan="5">
                            <i class="fas less fa-chevron-up"></i>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <?php endforeach; ?>

        <table class="table table-borderless fixrow info col-lg-7">
            <thead>
                <tr>
                    <th>2020/01/01</th>
                    <th>000154</th>
                    <th>線上刷卡</th>
                    <th>已出貨</th>
                    <th>4,115</th>
                    <th>已完成</th>
                </tr>
            </thead>
        </table>
        <div class="table detail table-light col-lg-7">
            <table class="table table-light">
                <thead>
                    <tr>
                        <th scope="col" style="color: white;">商品圖</th>
                        <th scope="col">商品名稱</th>
                        <th scope="col">內容</th>
                        <th scope="col">數量</th>
                        <th scope="col">金額</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="thumbnail"><img src="/img/hotTemple (1).jpg"></div>
                        </td>
                        <td>蒐集離島媽祖</td>
                        <td>Otto</td>
                        <td>1</td>
                        <td>Mark</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="thumbnail"><img src="/img/hotTemple (1).jpg"></div>
                        </td>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>1</td>
                        <td>Mark</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="thumbnail"><img src="/img/hotTemple (1).jpg"></div>
                        </td>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>1</td>
                        <td>Mark</td>
                    </tr>
                    <tr>
                        <td colspan="5">
                            <i class="fas fa-chevron-up less"></i>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="order_backdeco">
            <img src="<?= WEB_ROOT ?>/img/deco_Incense.png">
        </div>
    </section>
    <section class="order_mobile container-fluid animate__animated animate__faster animate__fadeInUp d-none">
        <table class="order_card col-12">
            <thead class="order_mobile_info">
                <tr>
                    <th colspan="3">
                        <div class="order_mobile_abstract">
                            <p>2020/01/01</p>
                            <p>已完成<i class="fas fa-check"></i></p>
                        </div>
                    </th>
                </tr>
                <tr>
                    <th colspan="3">
                        <div class="order_mobile_abstract">
                            <p>訂單編號 040345</p>
                            <p>總金額 4,345</p>
                        </div>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="order_mobile_thumbnail">
                        <div><img src="/img/sh_2701.jpg"></div>
                    </td>
                    <td colspan="2">
                        <div class="data">
                            <div class="detail">
                                <p>媽祖胸針</p>
                                <p>紅色</p>
                                <p>NTD 600</p>
                                <p>數量 3</p>
                                <p>小計 1,988</p>
                            </div>
                            <div class="detail_total">
                                <button>寫下評論</button>
                                <button>再買一次</button>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="order_mobile_thumbnail">
                        <div><img src="/img/sh_2701.jpg"></div>
                    </td>
                    <td colspan="2">
                        <div class="data">
                            <div class="detail">
                                <p>媽祖胸針</p>
                                <p>紅色</p>
                                <p>NTD 600</p>
                                <p>數量 3</p>
                                <p>小計 1,988</p>
                            </div>
                            <div class="detail_total">
                                <button>寫下評論</button>
                                <button>再買一次</button>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="order_card col-12">
            <thead class="order_mobile_info">
                <tr>
                    <th colspan="3">
                        <div class="order_mobile_abstract">
                            <p>2020/01/01</p>
                            <p>已完成<i class="fas fa-check"></i></p>
                        </div>
                    </th>
                </tr>
                <tr>
                    <th colspan="3">
                        <div class="order_mobile_abstract">
                            <p>訂單編號 040345</p>
                            <p>總金額 4,345</p>
                        </div>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="order_mobile_thumbnail">
                        <div><img src="/img/sh_2701.jpg"></div>
                    </td>
                    <td colspan="2">
                        <div class="data">
                            <div class="detail">
                                <p>媽祖胸針</p>
                                <p>紅色</p>
                                <p>NTD 600</p>
                                <p>數量 3</p>
                                <p>小計 1,988</p>
                            </div>
                            <div class="detail_total">
                                <button>寫下評論</button>
                                <button>再買一次</button>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="order_mobile_thumbnail">
                        <div><img src="/img/sh_2701.jpg"></div>
                    </td>
                    <td colspan="2">
                        <div class="data">
                            <div class="detail">
                                <p>媽祖胸針</p>
                                <p>紅色</p>
                                <p>NTD 600</p>
                                <p>數量 3</p>
                                <p>小計 1,988</p>
                            </div>
                            <div class="detail_total">
                                <button>寫下評論</button>
                                <button>再買一次</button>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="lucky_Modal" tabindex="-1" aria-labelledby="lucky_ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content lucky_pop">
                <div class="modal-header border-0">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <section class="lucky_p6 nextstep">
                        <div class="lucky_Poetry06">
                            <img src="<?= WEB_ROOT ?>/img/Sign poems-15.png" alt="">
                        </div>
                        <div class="lucky_content06">
                            <div class="lucky_result06">
                                <div class="lucky_title06_1">
                                    <h4>第 15 籤&emsp;丙辰籤</h4>
                                </div>
                                <div class="lucky_title06_2">
                                    <h5>上上籤</h5>
                                </div>
                            </div>
                            <div class="lucky_Commentary06">
                                <p>跟太公的遭遇一樣，請不
                                    必多問，還是勸你學學姜太公的作法，且等待
                                    那運氣亨通時。
                                    <br> <br>
                                    抽到此籤，表示目前做事，總不如意，但別灰
                                    心，這不是因你不努力，而是時機未到。目
                                    前，最重要的是充實你自己，只要真才實幹，
                                    必有重用你的時候，決不會被埋沒的！
                                    <br><br>
                                    問功名，不必急尋，你是屬於大器晚成型。問
                                    移居或職位變動，還不是時機，一動不如一
                                    靜。出外旅行，無利可圖。問訴訟，以和為
                                    貴。問婚姻，多屬晚婚，應下定決心，婚談可
                                    成。
                                </p>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php include __DIR__ . '/parts/ourscripts.php'; ?>

    <script>
        var detail = document.getElementsByClassName(".detail");
        function dynamicFooter(e) {
            let fixhead = document.querySelector('.member_head').offsetHeight
            let fixnav = document.querySelector('.nav_navbar_com_container').offsetHeight
            $('footer').css('top', e + fixhead + fixnav + 80 + 'px')
            $('body').css('height', e + 300 + 'px')
        }
        $(document).ready(function () {
            let el = document.querySelector('.member_profile')
            let elh = el.offsetHeight
            dynamicFooter(elh)
        });


        $(".info").click(function () {
            let absoluteBut = document.body.scrollHeight
            dynamicFooter(absoluteBut)
            $(this).next(detail).slideToggle();
        });
        $(".less").click(function () {
            $(this).parents('.detail').slideToggle();
        });
        $(".order_mobile_info").click(function () {
            $(this).siblings().slideToggle();
        });

        $('.profile').click(function () {
            $('#pointer').css('--myVar', '25%');
            $('#Ellipse_5').attr('fill', '#cc543a')
            $('#Path_18').attr('fill', 'silver')
            $('#gratipay-brands').attr('fill', 'silver')
            $('.member_profile').removeClass('d-none')
            $('.fav').addClass('d-none')
            $('.ordertable').addClass('d-none')
            $('.order_mobile').addClass('d-none')
            let el = document.querySelector('.member_profile')
            let elh = el.offsetHeight
            dynamicFooter(elh)
        })

        $('.favorite').click(function () {
            $('#pointer').css('--myVar', '50%');
            $('#gratipay-brands').attr('fill', '#cc543a')
            $('#Path_18').attr('fill', 'silver')
            $('#Ellipse_5').attr('fill', 'silver')
            $('.member_profile').addClass('d-none')
            $('.fav').removeClass('d-none')
            $('.ordertable').addClass('d-none')
            $('.order_mobile').addClass('d-none')
            control1()
            control2()
            control3()
            let el = document.querySelector('.fav')
            let elh = el.offsetHeight
            dynamicFooter(elh)
        })

        $('.order').click(function () {
            $('#pointer').css('--myVar', '75%');
            $('#gratipay-brands').attr('fill', 'silver')
            $('#Ellipse_5').attr('fill', 'silver')
            $('#Path_18').attr('fill', '#cc543a')
            $('.ordertable').removeClass('d-none')
            $('.order_mobile').removeClass('d-none')
            $('.fav').addClass('d-none')
            $('.member_profile').addClass('d-none')
            let el = document.querySelector('.ordertable')
            let elh = el.offsetHeight + 300
            console.log(elh)
            dynamicFooter(elh)
        })

        let move = $('.fav_product_card').width();
        console.log($('.fav_product_card').position().left - move)
        console.log('move', move)

        let containerLucky = document.querySelector('#fav_lucky_container')
        let containerPlan = document.querySelector('#fav_plan_container')
        let containerProduct = document.querySelector('#fav_product_container')
        let productCardW = document.querySelector('.fav_product_card').offsetWidth
        let planCardW = document.querySelector('.fav_plan_card').offsetWidth
        let luckyCardW = document.querySelector('.fav_lucky_card').offsetWidth

        $('.control').click(function () {
            let move = $('.fav_product_card').width();
            let containerProduct = document.querySelector('#fav_product_container')
            let containerPlan = document.querySelector('#fav_plan_container')
            let current = $(containerProduct).position().left
            if ($(this).hasClass("fa-chevron-left")) {
                current -= move * 2
                $(this).siblings('.prow').find('.fav_product_container').css('transform', 'translateX(' + current + 'px)')
                $(this).siblings('.prow').find('.fav_plan_container').css('transform', 'translateX(' + current + 'px)')
                $(this).siblings('.prow').find('.fav_lucky_container').css('transform', 'translateX(' + current + 'px)')
            }
            else {
                current += move * 2
                current = (current > 0) ? 0 : current;
                $(this).siblings('.prow').find('.fav_product_container').css('transform', 'translateX(' + current + 'px)')
                $(this).siblings('.prow').find('.fav_plan_container').css('transform', 'translateX(' + current + 'px)')
                $(this).siblings('.prow').find('.fav_lucky_container').css('transform', 'translateX(' + current + 'px)')
            }

        })


        function control1() {

            let containerProduct = document.querySelector('#fav_product_container')
            let productCardW = document.querySelector('.fav_product_card').offsetWidth
            if ((productCardW * $('.fav_product_card').length > containerProduct.offsetWidth) && (document.body.clientWidth > 1000)) {
                $('.control_prod').css('display', 'block')
            }
            else {
                $('.control_prod').css('display', 'none')
            }
            console.log('c1', productCardW, $('.fav_product_card').length, containerProduct.offsetWidth)
        }
        function control2() {
            let planCardW = document.querySelector('.fav_plan_card').offsetWidth
            let containerPlan = document.querySelector('#fav_plan_container')
            if ((planCardW * $('.fav_plan_card').length > containerPlan.offsetWidth) && (document.body.clientWidth > 1000)) {
                $('.control_plan').css('display', 'block')
            }
            else {
                $('.control_plan').css('display', 'none')
            }
        }
        function control3() {
            let containerLucky = document.querySelector('#fav_lucky_container')
            let luckyCardW = document.querySelector('.fav_lucky_card').offsetWidth
            if ((luckyCardW * $('.fav_lucky_card').length > containerLucky.offsetWidth) && (document.body.clientWidth > 1000)) {
                $('.control_luck').css('display', 'block')
            }
            else {
                $('.control_luck').css('display', 'none')
            }
            console.log('erfae', luckyCardW, $('.fav_lucky_card').length, containerLucky.offsetWidth)

        }
        control1()
        control2()
        control3()

        $(document).on('click', '.fav_edit', (function () {
            $(this).parent().siblings().find('.delete').toggleClass('d-block');
            ($(this).html() == '完成') ? $(this).html('編輯') : $(this).html('完成');
        }))
        $(document).on('click', '.delete', (function () {
            $(this).parents('.fav_lucky_card').toggleClass('selected')
            $(this).parents('.fav_product_card').toggleClass('selected')
            $(this).parents('.fav_plan_card').toggleClass('selected')
            control1()
            control2()
            control3()
            setTimeout(() => {
                if ($('.fav_lucky_card').hasClass('fav_lucky_card') == false) {
                    $(containerLucky).html('無收藏資料')
                }
                if ($('.fav_plan_card').hasClass('fav_plan_card') == false) {
                    $(containerPlan).html('無收藏資料')
                }
                if ($('.fav_product_card').hasClass('fav_product_card') == false) {
                    $(containerProduct).html('無收藏資料')
                }
            }, 100);
        }))

        console.log('has',$('.fav_lucky_card').hasClass('fav_lucky_card'))

        $(window).resize(function () {
        });


        $('button').click(function(){
            $('#cover').removeClass('d-none')
        })
        
    $('.popeditmy').click(function () {
        $('.popwindow').css('display', 'flex')
        $('.popwindow').css('transform', 'translate(-50%, -50%)')
        $('.cover').css('opacity', '1').css('display','block')
    })
    $('.popeditfriends').click(function () {
        $('.popwindow2').css('display', 'flex')
        $('.popwindow2').css('transform', 'translate(-50%, 10%)')
        $('.cover').css('opacity', '1').css('display','block')
    })
    $('.cover').click(function () {
        $('.cover').css('opacity', '0').css('display','none')
        $('.popwindow').css('transform', 'translate(-50%, -500%)')
        $('.popwindow2').css('transform', 'translate(-50%, -500%)')
        $('.old_password').toggleClass('d-none')
        $('.new_password').toggleClass('d-none')
        $('#changepw').html('修改密碼')
    })

    $('.back').click(function () {
        $('.cover').css('opacity', '0').css('display','none')
        $('.popwindow').css('transform', 'translate(-50%, -500%)')
        $('.old_password').toggleClass('d-none')
        $('.new_password').toggleClass('d-none')
        $('#changepw').html('修改密碼')
    })
    $('#changepw').click(function(){
        $('.old_password').toggleClass('d-none')
        $('.new_password').toggleClass('d-none')
        $('#changepw').html('')
    })
    // 親友修改 新增Buttom

    let addfriends = `<form class="editFriendsData">
                <div class="form-group">
                    <label for="member_name">姓名</label>
                    <p>|</p>
                    <input type="text" name="friends_name">
                </div>
                <div class="form-group">
                    <label for="member_password">生日(國曆)</label>
                    <p>|</p>
                    <input type="text" name="friends_birthday" placeholder="生日">
                </div>
                <div class="form-group">
                    <label for="member_mobile">連絡電話</label>
                    <p>|</p>
                    <input type="text" name="friends_mobile" placeholder="聯絡電話">
                </div>
                <div class="form-group">
                    <label for="member_address">地址</label>
                    <p>|</p>
                    <input type="text" name="friends_address" placeholder="地址">
                </div>
                <div class="unfriends" style="display: flex;">
                    <button class="graybut">刪除</button>
                </div>
                <hr>
            </form>`;
    $('.addfriends').click(function () {
        $(".scrollbox").append(addfriends);
    })

    // 親友修改 刪除Buttom


    $(document).on('click', '.unfriends', (function () {
        $(this).parent('.editFriendsData').remove();
    }))

    function checkEdit() {
        let isPass = true;
        if(isPass){
            $.post(
                'member_edit_api.php',
                $(document.editMyData).serialize(),
                function(data){
                    if(data.success){
                        alert('資料修改成功');
                        location.href = 'member_onepage.php';
                    } else {
                        alert(data.error);
                    }
                },
                'json'
            )
        }
    }
    
    function checkEditFamily() {
        let isPass = true;
        if(isPass){
            $.post(
                'member_family_edit_api.php',
                $("#editFriendsData").serialize(),
                function(data){
                    if(data.success){
                        alert('資料修改成功');
                        location.href = 'member_onepage.php';
                    } else {
                        alert(data.error);
                    }
                },
                'json'
            )
        }
    }


    function delete_fav_pdc(sid){
    if(confirm(`確定要刪除 ${name} 嗎?`)){
        $('.selected').remove();
          $.ajax({
          url: 'delete_fav_pdc.php?sid=' + sid,
          method: "DELETE",
          dataType: "json"
        });
    }}
    function delete_fav_trip(sid,name){
    if(confirm(`確定要刪除 ${name} 嗎?`)){
        $('.selected').remove();
          $.ajax({
          url: 'delete_fav_trip.php?sid=' + sid,
          method: "DELETE",
          dataType: "json"
        });
    }}
    function delete_fav_lucky(sid){
    if(confirm(`確定要刪除 ${name} 嗎?`)){
        $('.selected').remove();
          $.ajax({
          url: 'delete_fav_lucky.php?sid=' + sid,
          method: "DELETE",
          dataType: "json"
        });
    }}

    $(document).on('click', '.unfriends', (function () {
            $(this).parents('.friends_unit').toggleClass('delete_friends')
        }))

    function delete_friends(sid){
    if(confirm(`確定要刪除 ${sid} 嗎?`)){
        $('.delete_friends').remove();
          $.ajax({
          url: 'delete_friends.php?sid=' + sid,
          method: "DELETE",
          dataType: "json"
        });
    }}

    const avatar = document.querySelector('#avatar');

    avatar.addEventListener('change', function(){
        const fd = new FormData(document.form_upload);

        fetch('upload-api.php', {
            method: 'POST',
            body: fd
        })
        .then(r=>r.json())
        .then(obj=>{
            if(obj.success) {
                document.querySelector('#myimg').src = 'upload/' + obj.filename;
            }
        })
    });

    avatar.addEventListener('change', function(){
        $.post(
                'profile_edit_api.php',
                $(document.form_upload).serialize(),
                )
    });
    
    </script>
<?php include __DIR__. '/parts/html-foot.php'; ?>