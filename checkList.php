<?php include __DIR__ . '/parts/config.php'; ?>

<?php

$_gdata = [
    // 網頁名稱
    'title' => '灣廟 | 結帳確認',
    // 頁面私有 css
    'styles' => '<link rel="stylesheet" href="' . WEB_ROOT . '/css/breadcrumb.css">
    <link rel="stylesheet" href="' . WEB_ROOT . '/css/navbar2.css">',
    //頁面私有 scripts
    'scripts' => '',
];

// $title = '灣廟 | 結帳確認';
$pageName = 'check_list & payment method';
$member_sid = isset($_SESSION['user']) ? $_SESSION['user']['sid'] : 0;

if (!isset($_SESSION['user'])) {
    header('Location: index.php');
    exit;
}

$pdc_sql = "SELECT * FROM `shops`";
$pdc_rows = $pdo->query($pdc_sql)->fetchAll();

$plan_sql = "SELECT * FROM `trips`";
$plan_rows = $pdo->query($plan_sql)->fetchAll();

$_SESSION['order_id'] = date("YmdHis") . substr(microtime(), 2, 1);


// $order_id = (int)$_GET['order_id'];
// $sql = 'SELECT `order_id` FROM `order_sum`';
// $od = $pdo->query($sql)->fetchAll();

// print_r($od)

// $orderID_sql = "SELECT * FROM `order_sum` WHERE `order_id`";
// $orderID_rows = $pdo->query($orderID_sql)->fetchAll();

//測試用
// $_SESSION = [
//         'order_id' => date("YmdHis").substr(microtime(),2,4)
//      ];

?>

<!-- 整個頁面的頭 -->
<?php include __DIR__ . '/parts/ourhead.php'; ?>
<!-- 導航用代碼包含彈窗 -->
<?php include __DIR__ . '/parts/navbar2.php'; ?>
<style>
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

    .error {
        color: red;
    }


    /* footer */
    /* footer {
            width: 100%;
            height: 70px;
            background-color: #cc543a;
            color: white;
            letter-spacing: 3px;
            display: flex;
            justify-content: center;
            align-items: center;
        } */


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

    /* errorBox */
    .modal-header-error {
        display: flex;
        justify-content: center;
    }

    .error_imgBox {
        width: 100px;
    }

    .error_imgBox img {
        width: 100%;
    }

    .modal-title-error {
        font-size: 24px;
        font-weight: 700;
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

        .modal-footer-re{
            padding: 0;
            flex-wrap: nowrap;
        }
    }
</style>

<!-- 我是麵包屑-->
<div class="breadcrumb_style   backgroundimg_1">
    <div class="d-flex flex-wrap breadcrumb_style_1 ">
        <a href="" class="astlyep">首頁</a>
        <!-- 共用雲端找箭頭icon-->
        <img src="./img/nav_arrow_right.svg">
        <a href="<?= WEB_ROOT ?>/shop.php" class="astlyep">祈福商店</a>
        <img src="./img/nav_arrow_right.svg">
        <a href="<?= WEB_ROOT ?>/cart.php" class="astlyep">購物車</a>
        <img src="./img/nav_arrow_right.svg">
        <p class="astlyep">確認結帳</p>
    </div>
</div>


<div class="checkListContainer">
    <div class="checkList_title">結帳</div>

    <div class="checkList_prod_cate">
        <div class="checkList_prod_cateBox">
            <p></p>
            <p>商品名稱</p>
            <p>選項</p>
            <p>單價</p>
            <p>數量</p>
            <p>總價</p>
            <p>備註</p>
        </div>
    </div>

    <div class="checkList_itemContainer">

        <!-- product -->
        <!-- PHP變數待調整 -->
        <?php if (empty($_SESSION['cart']['product'])) : ?>
        <?php else : ?>
            <?php foreach ($_SESSION['cart']['product'] as $i) : ?>
                <?php foreach ($pdc_rows as $a) if ($i['id'] == $a['id']) : ?>
                    <div class="checkList_item checkList_product">
                        <div class="checkList_itemImgBox ">
                            <img src="<?= WEB_ROOT ?>/img/<?= $a['img2'] ?>" alt="">
                        </div>
                        <div class="checkList_itemWordBox">
                            <p class="checkList_itemName"><?= $i['name'] ?></p>
                            <p class="checkList_itemAttr"><?= $i['content'] ?></p>
                            <p class="checkList_itemPrice" data-price="<?= $i['price'] ?>"></p>
                            <p class="checkList_itemNum" data-qty="<?= $i['qty'] ?>"></p>
                            <p class="checkList_itemTotalP"></p>
                            <p class="checkList_itemNote"></p>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        <?php endif; ?>

        <!-- Trip -->
        <!-- PHP變數待調整 -->
        <?php if (empty($_SESSION['cart']['plan'])) : ?>
        <?php else : ?>
            <?php foreach ($_SESSION['cart']['plan'] as $j) : ?>
                <?php foreach ($plan_rows as $b) if ($j['id'] == $b['id']) : ?>
                    <div class="checkList_item checkList_trip" data-sid="<?= $j['id'] ?>">
                        <div class="checkList_itemImgBox">
                            <img src="<?= WEB_ROOT ?>/img/<?= $b['photo1'] ?>" alt="">
                        </div>
                        <div class="checkList_itemWordBox">
                            <p class="checkList_itemName"><?= $j['name'] ?></p>
                            <p class="checkList_itemAttr"><?= $j['content'] ?></p>
                            <p class="checkList_itemPrice" data-price="<?= $j['price'] ?>"></p>
                            <p class="checkList_itemNum" data-qty="<?= $j['qty'] ?>"></p>
                            <p class="checkList_itemTotalP"></p>
                            <p class="checkList_itemNote"><?= $j['note'] ?></p>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        <?php endif; ?>

        <!-- light -->
        <!-- PHP變數待調整 -->
        <?php if (empty($_SESSION['cart']['light'])) : ?>
        <?php else : ?>
            <?php foreach ($_SESSION['cart']['light'] as $k) : ?>
                <div class="checkList_item checkList_light">
                    <div class="checkList_itemImgBox">
                        <img src="<?= WEB_ROOT ?>/img/light.jpg" alt="">
                    </div>
                    <div class="checkList_itemWordBox">
                        <p class="checkList_itemName"><?= $k['name'] ?></p>
                        <p class="checkList_itemAttr"><?= $k['content'] ?></p>
                        <p class="checkList_itemPrice" data-price="<?= $k['price'] ?>"></p>
                        <p class="checkList_itemNum" data-qty="<?= $k['qty'] ?>"></p>
                        <p class="checkList_itemTotalP"></p>
                        <p class="checkList_itemNote">

                            <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="right" data-content="
                        
                        手機: <?= $k['mobile'] ?><br>
                        生辰: <?= $k['birthday'] ?><br>
                        出生時間: <?= $k['stime'] ?><br>
                        地址: <?= $k['address'] ?>

                        " data-html='true'>查看詳情</button>

                        </p>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>

    </div>


    <form name="form1" method="post" novalidate onsubmit="checkForm(); return false;">
        <div class="checkList_deliverBox">
            <div class="checkList_subTitle">寄送方式</div>
            <div class="checkList_info">
                <p>選擇寄送方式</p>
                <small class="form-text error shipMethod_red"></small>
            </div>

            <div class="checkList_deliverContent">
                <div class="checkList_deliver_cho">
                    <div class="checkList_deliver_choName">

                        <label class="checkList_shopChoName">
                            <input type="radio" name="shipment_method" value="7-11" class="shopRadio" id="711Radio"> 711
                        </label>

                        <p data-price="60">+ NT. 60</p>
                    </div>

                    <div class="checkList_dliver_choInfo checkList_choInfo">
                        <div class="checkList_dliver_choInfoDetail">
                            <label class="shopName">
                                <input type="radio" name="shipment_shipName" value="大安門市" class="shopAddress_radio"> 大安門市
                            </label>
                            <div class="checkList_dliver_shopAddress">
                                <p>106台北市大安區復興南路二段203號</p>
                                <div class="checkList_dliver_shopReceiver">
                                    <span>簡峰峰</span>
                                    <span>(+886)987654321</span>
                                </div>
                            </div>
                        </div>
                        <button class="checkList_btn"><a href="">選擇門市</a></button>
                    </div>
                </div>

                <div class="checkList_deliver_cho">
                    <div class="checkList_deliver_choName">
                        <label class="checkList_shopChoName">
                            <input type="radio" name="shipment_method" value="familyMart" class="shopRadio" id="famRadio"> 全家
                        </label>
                        <p data-price="60">+ NT. 60</p>
                    </div>

                    <div class="checkList_dliver_choInfo checkList_choInfo">
                        <div class="checkList_dliver_choInfoDetail">
                            <label class="shopName">
                                <input type="radio" name="shipment_shipName" value="西華門市" class="shopAddress_radio"> 西華門市
                            </label>
                            <div class="checkList_dliver_shopAddress">
                                <p>106台北市大安區復興南路二段203號</p>
                                <div class="checkList_dliver_shopReceiver">
                                    <span>簡峰峰</span>
                                    <span>(+886)987654321</span>
                                </div>
                            </div>
                        </div>
                        <button class="checkList_btn"><a href="">選擇門市</a></button>
                    </div>
                </div>

                <div class="checkList_deliver_cho">
                    <div class="checkList_deliver_choName">
                        <label class="checkList_shopChoName">
                            <input type="radio" name="shipment_method" value="hiLife" class="shopRadio" id="hiRadio"> 萊爾富
                        </label>
                        <p data-price="60">+ NT. 60</p>
                    </div>

                    <div class="checkList_dliver_choInfo checkList_choInfo">
                        <div class="checkList_dliver_choInfoDetail">
                            <label class="shopName">
                                <input type="radio" name="shipment_shipName" value="德欣門市" class="shopAddress_radio"> 德欣門市
                            </label>
                            <div class="checkList_dliver_shopAddress">
                                <p>106台北市大安區復興南路二段203號</p>
                                <div class="checkList_dliver_shopReceiver">
                                    <span>簡峰峰</span>
                                    <span>(+886)987654321</span>
                                </div>
                            </div>
                        </div>
                        <button class="checkList_btn"><a href="">選擇門市</a></button>
                    </div>
                </div>

                <div class="checkList_deliver_cho">
                    <div class="checkList_deliver_choName">
                        <label class="checkList_shopChoName">
                            <input type="radio" name="shipment_method" value="delivery" id="deliveryRadio"> 宅配
                        </label>
                        <p data-price="100">+ NT. 100</p>
                    </div>

                    <div class="checkList_dliver_choInfo checkList_choInfo">
                        <div class="checkList_dliver_choInfoDetail">
                            <label class="shopName">
                                <input type="radio" name="shipment_shipName" value="宅配" class="shopAddress_radio"> 收件地址

                                <p class="checkList_importment fastinput_3">*以下皆為必填資訊</p>

                                <div class="deliveryInfo">
                                    <input type="text" name="shipment_reciver" placeholder="收件人" class="fastinput_3_name">
                                    <small class="form-text error"></small>
                                    <input type="text" name="shipment_reciver_phone" placeholder="聯絡電話" class="fastinput_3_mobile">
                                    <small class="form-text error"></small>
                                    <input type="text" name="shipment_address" placeholder="地址" size="30" id="deli_address" class="fastinput_3_address">
                                    <small class="form-text error"></small>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="checkList_payBox">
            <div class="checkList_subTitle">付款方式</div>
            <div class="checkList_info">選擇付款方式</div>

            <div class="checkList_payContent">
                <div class="checkList_pay_cho">
                    <label class="checkList_payMethod">
                        <input type="radio" name="payment_method" value="貨到付款" id="arrivePayRadio" checked>貨到付款
                    </label>
                </div>

                <div class="checkList_pay_cho">
                    <label class="checkList_payMethod">
                        <input type="radio" name="payment_method" value="信用卡付款" id="creditRadio"> 信用卡 / 金融卡
                    </label>

                    <div class="checkList_pay_choInfo checkList_choInfo">
                        <p class="checkList_importment fastinput_4">*為必填</p>

                        <label>*請輸入卡號:
                            <input class="cardNum" type="text" name="cardnum-p1" maxlength="4" size="4" oninput="value=value.replace(/[^\d{4}]/g,'')">-
                            <input class="cardNum" type="text" name="cardnum-p2" maxlength="4" size="4" oninput="value=value.replace(/[^\d{4}]/g,'')">-
                            <input class="cardNum" type="text" name="cardnum-p3" maxlength="4" size="4" oninput="value=value.replace(/[^\d{4}]/g,'')">-
                            <input class="cardNum" type="text" name="cardnum-p4" maxlength="4" size="4" oninput="value=value.replace(/[^\d{4}]/g,'')">
                            <small class="form-text error"></small>
                        </label>
                        <br />
                        <label>*持卡人姓名:
                            <input class="cardName fastinput_4_name" type="text" name="cardName" >
                            <small class="form-text error"></small>
                        </label>
                        <br />
                        <label>*安全碼:
                            <input class="cardSafeNum fastinput_4_safe" type="text" name="cardSafeNum" maxlength="4" size="4" oninput="value=value.replace(/[^\d]/g,'')" placeholder="CSC">
                            <small class="form-text error"></small>
                        </label>
                        <br />
                        <label>*到期日:
                            <input class="cardDate fastinput_4_month" type="text" name="cardDateMM" maxlength="2" size="2" oninput="value=value.replace(/[^\d]/g,'')" placeholder="MM"> /
                            <input class="cardDate fastinput_4_year" type="text" name="cardDateYY" maxlength="2" size="2" oninput="value=value.replace(/[^\d]/g,'')" placeholder="YY">
                            <small class="form-text error"></small>
                        </label>

                    </div>
                </div>
            </div>

        </div>

        <div class="checkList_totalPriceContainer">
            <div class="checkList_subTitle">訂單金額</div>
            <div class="checkList_totalPricInfo">
                <div class="checkList_totalPricInfoBox">
                    <p>商品金額</p>
                    <p class="totalPriceBox"></p>
                </div>

                <div class="checkList_totalPricInfoBox">
                    <p>運費金額</p>
                    <p name="shipment_fee" class="checkList_shipFee">未選擇配送方式</p>
                </div>

                <div class="checkList_totalPricInfoBox">
                    <p>訂單總金額</p>
                    <p class="checkList_orderPrice">計算中</p>
                </div>
            </div>
        </div>


        <div class="checkList_finBtn">
            <button type="submit" class="checkList_btn" id="orderbtn" onclick="checkForm(); return false;">確認下訂</button>
        </div>
    </form>
</div>

<!-- finishOrder -->
<div class="modal fade" id="finishOrder" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modal-content-re">
            <div class="modal-header modal-header-re">
                <div class="modal_header_imgBox">
                    <img src="./img/finishOrder.svg" alt="">
                    <h5 class="modal-title" id="exampleModalCenterTitle">已完成訂單</h5>
                </div>
            </div>
            <div class="modal-body modal-body-re">
                <div class="modal-infoContainer">
                    <img src="./img/checkList_smileFace.svg" alt="">
                    <p>感謝您的支持</p>
                </div>
                <div class="modal-orderNum">
                    <span>訂單編號:</span>
                    <span name="order_id" id="orderID"><?= $_SESSION['order_id'] ?></span>
                </div>
            </div>
            <div class="modal-footer modal-footer-re">
                <button type="button" class="btn-primary-re"><a href="<?= WEB_ROOT ?>/index.php">回到首頁</a></button>
                <button type="button" class="btn-primary-re"><a href="<?= WEB_ROOT ?>/member_onepage.php">查看訂單</a></button>
            </div>
        </div>
    </div>
</div>



<div class="checkList_bccImg">
    <img src="./img/checkList_bccImg.png" alt="">
</div>


<?php include __DIR__ . '/parts/go-top.php' ?>

<!-- 導航用代碼包含彈窗 -->
<?php include __DIR__ . '/parts/ourscripts.php'; ?>
<script>
    // overlayNav進場
    $('.nav_burgurBar_img').click(function() {

        let navPosition = {
            transform: 'translateY(0)'
        }

        $(".nav_overlayNav").css(navPosition);
    })

    // overlayNav退場
    $('.nav_closeBtn').click(function() {

        let navPosition = {
            transform: 'translateY(-2500px)',
            transition: '.7s'
        }

        $(".nav_overlayNav").css(navPosition);
    })


    //Login hide
    $('#registerbtn').click(function() {
        $('#loginCenter').modal('hide');
    })

    $('#passwordbtn').click(function() {
        $('#loginCenter').modal('hide');
    })

    //overlay sub-menu
    $(document).ready(function() {
        $('.nav_ser_mobile').click(function() {

            $('.nav_dropDownMenu_mobile').toggle('slow');

        })
    });

    //選擇商店，滑動動畫
    $('.checkList_shopChoName').click(function() {
        $(this).parent().siblings().slideDown('slow');
        $(this).parent().parent().siblings().find('.checkList_dliver_choInfo').slideUp('slow');
    });

    //選擇付款，滑動動畫
    $('.checkList_payMethod').click(function() {
        $(this).siblings().slideDown('slow');
        $(this).parent().siblings().find('.checkList_pay_choInfo').slideUp('slow');
    });

    //選擇該radio，則會連動內部的radio也checked
    $('.checkList_shopChoName').click(function() {

        if ($(this).find('.shopRadio').checked = true) {

            $(this).parent().siblings().find('.shopAddress_radio').prop('checked', true);
        }
    });


    // 卡號自動換行
    $("input.cardNum").on("keydown", function(e) {
        if ((e.which >= 48 && e.which <= 57) || e.which == 8) {

            //console.log(e.target.value.length);
            if (e.target.value.length == 0 && e.which == 8) {
                $(this).prev().focus();
            }
        } else {
            e.preventDefault();
        }
    });

    $("input.cardNum").on("keyup", function(e) {

        // \D 代表非數字字元，g 代表全域尋找
        let str = (e.target.value).replace(/\D/g, "");

        $(this).val(str);
        //console.log(str.length);
        if (str.length == 4) {
            $(this).next().focus();
        }
    });

    //選擇貨到付款時，會自動清空已填的信用卡資料
    $("#arrivePayRadio").click(function() {
        $(".checkList_pay_choInfo input").val("");
    });
    //選擇超商取貨時，會自動清空已填的宅配資料
    $(".shopRadio").click(function() {
        $(".deliveryInfo input").val("");
    });


    //bs-查看詳情
    $(function() {
        $('[data-toggle="popover"]').popover();
    });


    //計算商品價格
    const dallorCommas = function(n) {
        return n.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
    };

    $(document).ready(function() {

        let prod_total = 0;
        let trip_total = 0;
        let light_total = 0;
        $('.checkList_product').each(function() {
            const $price = $(this).find('.checkList_itemPrice');
            const price = $price.attr('data-price') * 1;
            $price.text('NTD. ' + dallorCommas(price));

            const qty = $(this).find('.checkList_itemNum').attr('data-qty') * 1;
            $(this).find('.checkList_itemNum').text(qty);

            $(this).find('.checkList_itemTotalP').text('NTD. ' + dallorCommas(price * qty));
            prod_total += price * qty;
        });

        $('.checkList_trip').each(function() {
            const $price = $(this).find('.checkList_itemPrice');
            const price = $price.attr('data-price') * 1;
            $price.text('NTD. ' + dallorCommas(price));

            const qty = $(this).find('.checkList_itemNum').attr('data-qty') * 1;
            $(this).find('.checkList_itemNum').text(qty);

            $(this).find('.checkList_itemTotalP').text('NTD. ' + dallorCommas(price * qty));
            trip_total += price * qty;
        });

        $('.checkList_light').each(function() {
            const $price = $(this).find('.checkList_itemPrice');
            const price = $price.attr('data-price') * 1;
            $price.text('NTD. ' + dallorCommas(price));

            const qty = $(this).find('.checkList_itemNum').attr('data-qty') * 1;
            $(this).find('.checkList_itemNum').text(qty);

            $(this).find('.checkList_itemTotalP').text('NTD. ' + dallorCommas(price * qty));
            light_total += price * qty;
        });

        //最後的商品總金額
        $('.totalPriceBox').text('NTD. ' + dallorCommas(prod_total + trip_total + light_total));

        //運費選擇
        $('.checkList_deliver_choName input').click(function() {
            const shipFee = $(this).parent().siblings().attr('data-price') * 1;

            $('.checkList_shipFee').text('NTD. ' + shipFee);

            //訂單總金額
            const orderPrice = prod_total + trip_total + light_total + shipFee;
            $('.checkList_orderPrice').text('NTD. ' + orderPrice);

        })

    });



    //-----------------------------------------------------------------

    // 判斷卡號是否格式正確(所設定的變數)
    const cardnumP1 = $("input[name='cardnum-p1']"),
        cardnumP2 = $("input[name='cardnum-p2']"),
        cardnumP3 = $("input[name='cardnum-p3']"),
        cardnumP4 = $("input[name='cardnum-p4']");

    // 判斷持卡人是否填寫
    const creditName = $("input[name='cardName']");

    // 判斷安全碼是否填寫 & 正確
    const cardSafeNum = $("input[name='cardSafeNum']");

    // 判斷日期是否填寫 & 正確
    const cardDateMM = $("input[name='cardDateMM']"),
        cardDateYY = $("input[name='cardDateYY']");


    // 判斷電話號碼格式(所設定的變數)
    // const mobile_re = /^09\d{2}-?\d{3}-?\d{3}$/;

    // 判斷宅配所填內容(所設定的變數)
    const reciver = $("input[name='shipment_reciver']"),
        phone = $("input[name='shipment_reciver_phone']"),
        address = $("#deli_address");

    const fileds1 = [
        cardnumP1, cardnumP2, cardnumP3, cardnumP4,
        cardDateMM, cardDateYY
    ];
    const fileds2 = [
        creditName, cardSafeNum
    ];
    const fileds3 = [
        reciver, phone, address
    ];



    //判斷input內容是否正確
    function checkForm() {

        //如有錯誤部分已被修正，則恢復原來狀態
        fileds1.forEach(el1 => {
            el1.css('border', 'none');
            el1.css('border-bottom', '1px solid #aaa');
            el1.parent().find('.form-text').text('');
        });
        fileds2.forEach(el2 => {
            el2.css('border', 'none');
            el2.css('border-bottom', '1px solid #aaa');
            el2.next().text('');
        });
        fileds3.forEach(el3 => {
            el3.css('border', '1px solid #aaa');
            el3.next().text('');
        });

        let isPass = true;

        let creditRadio = document.getElementById('creditRadio');
        let arrivePayRadio = document.getElementById('arrivePayRadio');
        let deliveryRadio = document.getElementById('deliveryRadio');

        let shipM_711 = document.getElementById('711Radio');
        let shipM_fam = document.getElementById('famRadio');
        let shipM_hi = document.getElementById('hiRadio');
        // let shipM_deli = document.getElementsByClassName('deliRadio');


        if (arrivePayRadio.checked == true || creditRadio.checked == true) {



        };

        //判斷貨到付款是否勾選
        if (arrivePayRadio.checked == true) {
            // console.log('arrivePay', 'checked');

            if (shipM_711.checked == true) {
                $('#finishOrder').modal();
            } else {

                if (shipM_fam.checked == true) {
                    $('#finishOrder').modal();
                } else {

                    if (shipM_hi.checked == true) {
                        $('#finishOrder').modal();
                    } else {

                        if (deliveryRadio.checked == true) {

                            if (reciver.val() == "") {
                                isPass = false;
                                $(reciver).css('border', '1px solid red');
                                $(reciver).next().text('請輸入收件人姓名')
                            }
                            if (!mobile_re.test(phone.val())) {
                                isPass = false;
                                $(phone).css('border', '1px solid red');
                                $(phone).next().text('請填入正確的手機格式')
                            }
                            if (address.val() == "") {
                                isPass = false;
                                $(address).css('border', '1px solid red');
                                $(address).next().text('請輸入收件地址')
                            }
                            if (isPass) {
                                $('#finishOrder').modal();
                            }
                        } else {

                            isPass = false;

                            $('.shipMethod_red').css('color', 'red').text('請選擇寄送方式');
                        }
                    }
                }
            }


            if (isPass) {
                $('#finishOrder').modal();
            }
        };


        if (creditRadio.checked == true) {

            if (shipM_711.checked == true) {} else {

                if (shipM_fam.checked == true) {} else {
                    if (shipM_hi.checked == true) {} else {

                        //判斷宅配選項是否有選
                        if (deliveryRadio.checked == true) {

                            if (reciver.val() == "") {
                                isPass = false;
                                $(reciver).css('border', '1px solid red');
                                $(reciver).next().text('請輸入收件人姓名')
                            }
                            if (!mobile_re.test(phone.val())) {
                                isPass = false;
                                $(phone).css('border', '1px solid red');
                                $(phone).next().text('請填入正確的手機格式')
                            }
                            if (address.val() == "") {
                                isPass = false;
                                $(address).css('border', '1px solid red');
                                $(address).next().text('請輸入收件地址')
                            }

                        } else {

                            isPass = false;

                            $('.shipMethod_red').css('color', 'red').text('請選擇寄送方式');
                        }

                    }
                }
            };





            if (cardnumP1.val() == "" || cardnumP1.val().length < 4) {
                isPass = false;
                $(cardnumP1).css('border', '1px solid red');
                $(cardnumP1).parent().find('.form-text').text('卡號格式錯誤')
            }

            if (cardnumP2.val() == "" || cardnumP2.val().length < 4) {
                isPass = false;
                $(cardnumP2).css('border', '1px solid red');
                $(cardnumP2).parent().find('.form-text').text('卡號格式錯誤')
                // alert("卡號格式錯誤");
                // return false;
            }
            if (cardnumP3.val() == "" || cardnumP3.val().length < 4) {
                isPass = false;
                $(cardnumP3).css('border', '1px solid red');
                $(cardnumP3).parent().find('.form-text').text('卡號格式錯誤')
                // alert("卡號格式錯誤");
                // return false;
            }
            if (cardnumP4.val() == "" || cardnumP4.val().length < 4) {
                isPass = false;
                $(cardnumP4).css('border', '1px solid red');
                $(cardnumP4).parent().find('.form-text').text('卡號格式錯誤')

                // alert("卡號格式錯誤");
                // return false;
            }

            if (creditName.val() == "") {
                isPass = false;
                $(creditName).css('border', '1px solid red');
                $(creditName).next().text('請輸入持卡人姓名')
            }

            if (cardSafeNum.val() == "" || cardSafeNum.val().length < 3) {
                isPass = false;
                $(cardSafeNum).css('border', '1px solid red');
                $(cardSafeNum).next().text('請輸入正確的安全碼')
            }

            if (cardDateMM.val() == "" || cardDateMM.val().length < 2) {
                isPass = false;
                $(cardDateMM).css('border', '1px solid red');
                $(cardDateMM).parent().find('.form-text').text('請輸入正確的到期日')
            }
            if (cardDateYY.val() == "" || cardDateYY.val().length < 2) {
                isPass = false;
                $(cardDateYY).css('border', '1px solid red');
                $(cardDateYY).parent().find('.form-text').text('請輸入正確的到期日')
            }


            if (isPass) {
                $('#finishOrder').modal()
            }
        };

        if (isPass) {
            $.post(
                'checkList-api.php',
                $(document.form1).serialize(),
                // function(data){
                //     if(data.success){
                //         alert('訂單已送出');
                //     } else {
                //         alert(data.error);
                //     }
                // },
                'json'
            )
        }
    };

    //ajex 傳送訂單編號
    // let orderID = [$("#orderID").html();

    // $('#orderbtn').click(function() {
    //     // 用post方式傳送 格式為json
    //     $.post(
    //         'checkList-api.php',
    //         orderID,
    //         function(data) {
    //             if (data.success) {
    //                 alert('succ');
    //                 // 原畫面刷新
    //                 // location.reload();

    //                 // 成功送出 轉跳至index首頁
    //                 // window.location.replace("./cart.php");

    //             } else {
    //                 alert('error');
    //             }
    //         },
    //         'json'
    //     )

    // });

    // $('#orderbtn').on('click', function() {

    //     $.ajax({
    //         url: "checkList-api.php",
    //         // dataType: "json",
    //         method: "POST",
    //         data:{
    //             order_id: $("#orderID").html(),
    //         },
    //         error:function(){
    //             alert("失敗");
    //             // console.log(order_id);
    //         },
    //         success:function(data){
    //             // console.log(order_id);
    //             console.log(data);
    //             // $("#orderID").html(order_id);
    //             // alert("成功");
    //         } 
    //     });
    // })

    // Go-Top
    $(window).scroll(function(event) {
        let scrollTop = $(window).scrollTop();
        console.log(scrollTop);

        if (scrollTop >= 500) {

            $(".index_goTopImg").addClass('show');
        } else {
            $(".index_goTopImg").removeClass('show');
        }
    });

    $('.index_goTopImg').click(function() {
        $("html,body").animate({
            scrollTop: 0
        }, 700);
    });


    // 快速宅配 test
    $('.fastinput_3').click(function(event) {
        event.preventDefault();

        $('.fastinput_3_name').val('虎爺');
        $('.fastinput_3_mobile').val('0912345678');
        $('.fastinput_3_address').val('台北市大安區復興南路一段390號2樓');
    });

// 快速信用卡 test
    $('.fastinput_4').click(function(event) {
        event.preventDefault();

        $('.fastinput_4_name').val('HU YEH');
        $('.fastinput_4_safe').val('606');
        $('.fastinput_4_month').val('06');
        $('.fastinput_4_year').val('23');
    });
</script>

<?php include __DIR__ . '/parts/html-foot.php' ?>