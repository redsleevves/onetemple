<?php include __DIR__ . '/parts/config.php'; ?>
<?php
$_gdata = [
    // 網頁名稱
    'title' => '灣廟 | 購物車',
    // 頁面私有 css
    'styles' => '<link rel="stylesheet" href="' . WEB_ROOT . '/css/navbar2.css">
    <link rel="stylesheet" href="' . WEB_ROOT . '/css/breadcrumb.css">',
    //頁面私有 scripts
    'scripts' => '',
];
$pdc_sql = "SELECT * FROM `shops`";
$pdc_rows = $pdo->query($pdc_sql)->fetchAll();

$plan_sql = "SELECT * FROM `trips`";
$plan_rows = $pdo->query($plan_sql)->fetchAll();
?>
<?php include __DIR__ . '/parts/ourhead.php'; ?>

<style>
    body {
        font-family: 'Faustina', serif;
        background-image: url(<?= WEB_ROOT ?>/img/bcc.png);
        position: relative;
        min-height: 100vh;
        /* padding-bottom: 150px; */
    }

    h2 {
        font-size: 35px;
        font-weight: bold;
    }

    h3 {
        font-size: 32px;
        font-weight: normal;
        margin: 0
    }

    h4 {
        font-size: 24px;
        font-weight: normal;
    }

    p {
        /* 字級可自訂 */
        font-size: 20px;
        font-weight: normal;
    }

    button {
        padding: 8px 18px;
        background-color: #cc543a;
        color: white;
        border-radius: 30px;
        border: none;
    }

    button:hover {
        background-color: #DD745E;
    }

    button:focus {
        outline: 0;
        box-shadow: 0 0 0 1pt rgb(77, 77, 77);
    }

    button a {
        color: #fff;
    }

    button a:hover {
        color: #fff;
        text-decoration: none;
    }

    i {
        padding: 0 8px;
    }

    .btns {
        margin: 300px;
    }

    /* footer {
        width: 100%;
        height: 100px;
        background-color: #cc543a;
        color: white;
        letter-spacing: 3px;
        display: flex;
        justify-content: center;
        align-items: center;
        position: absolute;
        bottom: 0;
    } */

    .cart_title {
        font-size: 26px;
        font-weight: 700;
    }

    .cart {
        display: flex;
        flex-direction: row-reverse;
        justify-content: space-evenly;
        position: relative;
        /* margin-top: 70px; */
        margin-bottom: 162px;
    }

    .carttable {
        margin-top: 70px;
    }

    .bill {
        background-color: white;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: fit-content;
        padding: 40px 15px;
        border: 1px solid rgb(168, 168, 168);
        position: sticky;
        top: 30%
    }

    .bill hr {
        height: 1px;
        width: 90%;
        background-color: rgb(196, 196, 196);
        margin: 10px;
    }

    .summary {
        width: 80%;
    }

    .summary ul {
        line-height: 2;
        display: flex;
        justify-content: space-between;
        align-content: center;
    }

    .sale {
        width: 50%;
    }

    .sale li {
        text-align: end;
    }

    .summary input {
        width: 100px;
        height: 30px;
        vertical-align: middle;
    }

    .summary button {
        width: 70px;
        height: 30px;
        padding: 0;
        margin: 0;
        vertical-align: middle;
    }

    .subsum p::before {
        content: "小計";
        margin-right: 20px;
    }

    .thumbnail {
        width: 150px;
        margin: 0 auto;
    }

    .thumbnail img {
        width: 100%;
    }

    .input-group {
        width: 120px;
        background-color: white;
        border: 1px solid gray;
        border-radius: 5px;
        margin: 0 auto;
    }

    .input-group button,
    .input-group input {
        padding: 0;
        border: none;
        text-align: center;
    }

    .cart_mobile a,
    .carttable a {
        text-decoration: none;
        font-weight: bold;
        color: black;
    }

    .cart_mobile a:hover,
    .carttable a:hover {
        color: #cc543a;
    }


    @media screen and (min-width: 1000px) {

        .cartName {
            font-size: 20px;
            font-weight: bold;
        }

        .carttable {
            display: flex;
            flex-direction: column;
        }

        .each_table table {
            text-align: center;
            box-shadow: 0 0 0 1pt rgb(77, 77, 77);
        }

        .each_table thead {
            height: fit-content;
            border: 20px solid #D1D2D5;
        }

        .each_table tbody {
            border: 20px solid #ffffff;
            border-bottom: 0;
        }


        .carttable thead {
            background-color: #D1D2D5;
        }

        .carttable th {
            font-weight: bold;
            height: 80px;
            vertical-align: middle !important;
        }

        .carttable td {
            vertical-align: middle !important;
        }

        .subsum {
            text-align: right;
        }

        .cart_mobile,
        .mobile_bill {
            display: none;
        }

        .cart_backdeco {
            position: absolute;
            bottom: 0px;
            right: 0;
            z-index: -1;
            opacity: 0.5;
            transform: scale(0.7);
            transform-origin: right bottom;
        }
    }

    @media screen and (max-width: 1000px) {

        .carttable,
        .bill {
            display: none;
        }

        .cart_card .data {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: inherit;
            padding-left: 10px;
        }

        .cart_card .detail {
            display: flex;
            flex-direction: column;
        }

        td {
            vertical-align: top;
            /* height: 150px; */
        }

        th {
            vertical-align: middle;
        }

        .input-group {
            margin: 0;
        }

        .cart_card {
            background-color: white;
            border: 3px solid rgb(192, 192, 192);
            margin-right: 0;
            border-collapse: separate;
            border-spacing: 0 12px;
            padding: 0 5px;
        }

        thead {
            position: relative;
        }

        thead::after {
            content: "";
            display: block;
            position: absolute;
            width: 300px;
            height: 2px;
            background-color: rgb(182, 182, 182);
        }

        .input-number {
            height: 30px;
        }

        .mobile_bill {
            width: 100%;
            height: 59px;
            position: fixed;
            display: flex;
            justify-content: space-between;
            bottom: 0;
            z-index: 2;
            background-color: white;
            /* box-shadow: 0 -3px 3px 3px rgba(102, 102, 102, 0.562); */
        }

        .mobile_bill p {
            margin: 0;
            width: 70%;
            margin: auto;

        }

        .mobile_sum {
            width: 100%;
            justify-content: end;
        }

        .mobile_sum p::before {
            content: "總計：NTD ";
        }

        .mobile_discount {
            border-bottom: 1px solid black;
            padding: 10px 0;
        }

        .mobile_bill button {
            border-radius: 0;
        }

        .cart_backdeco {
            display: none;
        }

        .mobile_thumbnail {
            height: 120px;
            padding: 0 10px;
        }

        .mobile_thumbnail img {
            height: 100%;
        }

        .cart_card p {
            font-size: 16px;
            margin: 0;
        }

        footer {
            display: none;
        }

        .fwb {
            font-weight: bold;
        }
    }
</style>
<?php include __DIR__ . '/parts/navbar2.php'; ?>

<!-- 我是麵包屑-->
<div class="breadcrumb_style   backgroundimg_1">
    <div class="d-flex flex-wrap breadcrumb_style_1 ">
        <a href="" class="astlyep">首頁</a>
        <!-- 共用雲端找箭頭icon-->
        <img src="./img/nav_arrow_right.svg">
        <a href="<?= WEB_ROOT ?>/cart.php" class="astlyep">購物車</a>
    </div>
</div>

<div class="container cart col-lg-10 col-12">
    <section class="bill container-fluid col-3">
        <h3>訂單明細</h3>
        <hr>
        <div class="summary">
            <?php if (empty($_SESSION['cart'])) : ?>
                <div class="alert" role="alert">
                    您並未選購任何商品。
                </div>
            <?php else : ?>
                <?php if (empty($_SESSION['cart']['product'])) : ?>
                <?php else : ?>
                    <?php foreach ($_SESSION['cart']['product'] as $i) : ?>
                        <ul>
                            <li><?= $i['name'] ?></li>
                            <li><?= $i['price'] * $i['qty'] ?></li>
                        </ul>
                    <?php endforeach; ?>
                <?php endif; ?>
                <?php if (empty($_SESSION['cart']['plan'])) : ?>
                <?php else : ?>
                    <?php foreach ($_SESSION['cart']['plan'] as $j) : ?>
                        <ul>
                            <li><?= $j['name'] ?></li>
                            <li><?= $j['price'] ?></li>
                        </ul>
                    <?php endforeach; ?>
                <?php endif; ?>
                <?php if (empty($_SESSION['cart']['light'])) : ?>
                <?php else : ?>
                    <?php foreach ($_SESSION['cart']['light'] as $k) : ?>
                        <ul>
                            <li><?= $k['name'] ?></li>
                            <li><?= $k['price'] * $k['qty'] ?></li>
                        </ul>
                    <?php endforeach; ?>
                <?php endif; ?>
            <?php endif; ?>
        </div>
        <hr>
        <div class="summary">
            <ul>
                <li>
                    <h4>總計</h4>
                </li>
                <li class="totalSum"></li>
            </ul>
        </div>
        <button><a href="<?= WEB_ROOT ?>/checkList.php">確認結帳</a></button>
    </section>
    <section class="carttable container-fluid col-7">
        <p class="cart_title">購物車</p>
        <div class="each_table cart_product mt-5">
            <h4 class="cartName">商品</h4>
            <?php if (empty($_SESSION['cart']['product'])) : ?>
                <div class="alert" role="alert">
                    您並未選購任何商品，請至<a href="<?= WEB_ROOT ?>/shop.php"> 祈福商店 </a>選購。
                </div>
            <?php else : ?>
                <table class="table table-light">
                    <thead>
                        <tr>
                            <th scope="col" class="col-1">商品圖</th>
                            <th scope="col" class="col-2">商品名稱</th>
                            <th scope="col" class="col-3">內容</th>
                            <th scope="col" class="col-2">數量</th>
                            <th scope="col" class="col-2">金額</th>
                            <th scope="col" class="col-2">備註</th>
                            <th scope="col" class="col-2">刪除</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($_SESSION['cart']['product'] as $i => $dataP) : ?>
                            <?php foreach ($pdc_rows as $a)
                                if ($dataP['id'] == $a['id']) : ?>
                                <tr data-id="<?= $i ?>" data-type="pdc">
                                    <td>
                                        <div class="thumbnail"><img src="<?= WEB_ROOT ?>/img/<?= $a['img2'] ?>"></div>
                                    </td>
                                    <td><?= $dataP['name'] ?></td>
                                    <td><?= $dataP['content'] ?></td>
                                    <td><?= $dataP['qty'] ?></td>
                                    <td class="price"><?= $dataP['price'] * $dataP['qty'] ?></td>
                                    <td><?= $dataP['note'] ?></td>
                                    <td class="trash">
                                        <a href="javascript:" onclick="deleteItem(event)">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php endif; ?>
                        <?php endforeach; ?>
                        <tr>
                            <td colspan="6">
                                <hr>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan="5" class="subsum">
                                <p></p>
                            </td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            <?php endif; ?>
        </div>

        <div class="each_table cart_plan mt-5">
            <h4 class="cartName">行旅</h4>
            <?php if (empty($_SESSION['cart']['plan'])) : ?>
                <div class="alert" role="alert">
                    您並未選購任何商品，請至<a href="<?= WEB_ROOT ?>/trip.php"> 聖地巡禮 </a>選購。
                </div>
            <?php else : ?>
                <table class="table table-light">
                    <thead>
                        <tr>
                            <th scope="col" class="col-1">商品圖</th>
                            <th scope="col" class="col-2">商品名稱</th>
                            <th scope="col" class="col-3">內容</th>
                            <th scope="col" class="col-2">數量</th>
                            <th scope="col" class="col-2">金額</th>
                            <th scope="col" class="col-2">備註</th>
                            <th scope="col" class="col-2">刪除</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($_SESSION['cart']['plan'] as $j => $dataT) : ?>
                            <?php foreach ($plan_rows as $b)
                                if ($dataT['id'] == $b['id']) : ?>
                                <tr data-id="<?= $j ?>" data-type="plan">
                                    <td>
                                        <div class="thumbnail"><img src="<?= WEB_ROOT ?>/img/<?= $b['photo1'] ?>"></div>
                                    </td>
                                    <td><?= $dataT['name'] ?></td>
                                    <td><?= $dataT['content'] ?></td>
                                    <td><?= $dataT['qty'] ?></td>
                                    <td class="price"><?= $dataT['price'] ?></td>
                                    <td><?= $dataT['note'] ?></td>
                                    <td class="trash">
                                        <a href="javascript:" onclick="deleteItem(event)">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php endif; ?>
                        <?php endforeach; ?>
                        <tr>
                            <td colspan="6">
                                <hr>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan="5" class="subsum">
                                <p></p>
                            </td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            <?php endif; ?>
        </div>
        <div class="each_table cart_light mt-5">
            <h4 class="cartName">點燈</h4>
            <?php if (empty($_SESSION['cart']['light'])) : ?>
                <div class="alert" role="alert">
                    您並未選購任何商品，請至<a href="<?= WEB_ROOT ?>/light_Introduction.php"> 祈福點燈 </a>選購。
                </div>
            <?php else : ?>
                <table class="table table-light">
                    <thead>
                        <tr>
                            <th scope="col" class="col-1">商品圖</th>
                            <th scope="col" class="col-2">商品名稱</th>
                            <th scope="col" class="col-3">內容</th>
                            <th scope="col" class="col-2">數量</th>
                            <th scope="col" class="col-2">金額</th>
                            <th scope="col" class="col-2">備註</th>
                            <th scope="col" class="col-2">刪除</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($_SESSION['cart']['light'] as $k => $dataL) : ?>
                            <tr data-id="<?= $k ?>" data-type="light">
                                <td>
                                    <div class="thumbnail"><img src="<?= WEB_ROOT ?>/img/light.jpg"></div>
                                </td>
                                <td><?= $dataL['name'] ?></td>
                                <td><?= $dataL['content'] ?></td>
                                <td><?= $dataL['qty'] ?></td>
                                <td class="price"><?= $dataL['price'] * $dataL['qty'] ?></td>
                                <td>

                                    <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="right" data-content="
                        
                        手機: <?= $dataL['mobile'] ?><br>
                        生辰: <?= $dataL['birthday'] ?><br>
                        出生時間: <?= $dataL['stime'] ?><br>
                        地址: <?= $dataL['address'] ?>

                        " data-html='true'>查看詳情</button>

                                </td>
                                <td class="trash">
                                    <a href="javascript:" onclick="deleteItem(event)">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        <tr>
                            <td colspan="6">
                                <hr>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan="5" class="subsum">
                                <p></p>
                            </td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            <?php endif; ?>
        </div>
    </section>
    <section class="cart_mobile container-fluid">
        <h4>購物車</h4>
        <table class="cart_card col-12 mb-5">
            <thead>
                <tr>
                    <th>商品</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <?php if (empty($_SESSION['cart']['product'])) : ?>
                <tbody>
                    <tr>
                        <td>您並未選購任何商品，請至<a href="<?= WEB_ROOT ?>/shop.php"> 祈福商店 </a>選購。
                        </td>
                    </tr>
                </tbody>
            <?php else : ?>
                <tbody>
                    <?php foreach ($_SESSION['cart']['product'] as $i => $dataP) : ?>
                        <?php foreach ($pdc_rows as $a)
                            if ($dataP['id'] == $a['id']) : ?>
                            <tr data-id="<?= $i ?>" data-type="product">
                                <td>
                                    <div class="mobile_thumbnail"><img src="<?= WEB_ROOT ?>/img/<?= $a['img2'] ?>"></div>
                                </td>
                                <td>
                                    <div class="data">
                                        <div class="detail">
                                            <p><?= $dataP['name'] ?></p>
                                            <p><?= $dataP['content'] ?></p>
                                            <p>NTD <?= $dataP['price'] ?></p>
                                            <p>數量 <?= $dataP['qty'] ?></p>
                                        </div>
                                        <!-- <div class="input-group">
                                        <button class="down btn btn-default"><i class="fas fa-minus"></i></button>
                                        <input type="text" class="form-control input-number" value="1" />
                                        <button class="up btn btn-default"><i class="fas fa-plus"></i></button>
                                    </div> -->
                                    </div>
                                </td>
                                <td><a href="javascript:" onclick="deleteItem(event)">
                                        <i class="fas fa-trash-alt"></i>
                                    </a></td>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endif; ?>
                </tbody>
        </table>
        <table class="cart_card col-12 mb-5">
            <thead>
                <tr>
                    <th>行旅</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <?php if (empty($_SESSION['cart']['plan'])) : ?>
                <tbody>
                    <tr>
                        <td>您並未選購任何商品，請至<a href="<?= WEB_ROOT ?>/trip.php"> 聖地巡禮 </a>選購。</td>
                    </tr>
                </tbody>
            <?php else : ?>
                <tbody>
                    <?php foreach ($_SESSION['cart']['plan'] as $j => $dataT) : ?>
                        <?php foreach ($plan_rows as $b)
                            if ($dataT['id'] == $b['id']) : ?>
                            <tr data-id="<?= $j ?>" data-type="plan">
                                <td>
                                    <div class="mobile_thumbnail"><img src="<?= WEB_ROOT ?>/img/<?= $b['photo1'] ?>"></div>
                                </td>
                                <td>
                                    <div class="data">
                                        <div class="detail">
                                            <p><?= $dataT['name'] ?></p>
                                            <p><?= $dataT['content'] ?></p>
                                            <p>NTD <?= $dataT['price'] ?></p>
                                            <p>數量 <?= $dataT['qty'] ?></p>
                                        </div>
                                        <!-- <div class="input-group">
                                        <button class="down btn btn-default"><i class="fas fa-minus"></i></button>
                                        <input type="text" class="form-control input-number" value="1" />
                                        <button class="up btn btn-default"><i class="fas fa-plus"></i></button>
                                    </div> -->
                                    </div>
                                </td>
                                <td><a href="javascript:" onclick="deleteItem(event)">
                                        <i class="fas fa-trash-alt"></i>
                                    </a></td>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endif; ?>
                </tbody>
        </table>
        <table class="cart_card col-12 mb-5">
            <thead>
                <tr>
                    <th>點燈</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <?php if (empty($_SESSION['cart']['light'])) : ?>
                <tbody>
                    <tr>
                        <td>您並未選購任何商品，請至<a href="<?= WEB_ROOT ?>/light_Introduction.php"> 祈福點燈 </a>選購。</td>
                    </tr>
                </tbody>
            <?php else : ?>
                <tbody>
                    <?php foreach ($_SESSION['cart']['light'] as $k => $dataL) : ?>
                        <tr data-id="<?= $k ?>" data-type="light">
                            <td>
                                <div class="mobile_thumbnail"><img src="<?= WEB_ROOT ?>/img/light.jpg"></div>
                            </td>
                            <td>
                                <div class="data">
                                    <div class="detail">
                                        <p><?= $dataL['name'] ?></p>
                                        <p><?= $dataL['content'] ?></p>
                                        <p>NTD <?= $dataL['price'] ?></p>
                                        <p>數量 <?= $dataL['qty'] ?></p>
                                    </div>
                                    <!-- <div class="input-group">
                                        <button class="down btn btn-default"><i class="fas fa-minus"></i></button>
                                        <input type="text" class="form-control input-number" value="1" />
                                        <button class="up btn btn-default"><i class="fas fa-plus"></i></button>
                                    </div> -->
                                </div>
                            </td>
                            <td><a href="javascript:" onclick="deleteItem(event)">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>

                </tbody>
        </table>
    </section>
</div>
<div class="mobile_bill pl-2">
    <p class="totalSum"></p>
    <button type="submit" class="pr-2"><a href="<?= WEB_ROOT ?>/checkList.php">確認結帳</a></button>
</div>
<div class="cart_backdeco">
    <img src="<?= WEB_ROOT ?>/img/cart_Incense.png">
</div>



<?php include __DIR__ . '/parts/ourscripts.php'; ?>


<script>
    //bs-查看詳情按鈕
    $(function() {
        $('[data-toggle="popover"]').popover();
    });


    $('.up').click(function() {
        $(this).prev().val(+$(this).prev().val() + 1);
    });
    $('.down').click(function() {
        if ($(this).next().val() > 1) $(this).next().val(+$(this).next().val() - 1);
    });
    // let discountV = document.getElementsByName('discount')
    // console.log(discountV)
    // $('#entered').html(discountV.val())

    const dallorCommas = function(n) {
        return n.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
    };

    function getSubSum(element) {
        var sum = 0;
        $(element).each(function() {
            sum += parseFloat(this.innerHTML);
        });
        return sum
    }

    // let xxx = document.querySelectorAll('.price')
    // $(xxx).text($('.price').html().numberFormat(0, '.', ','))
    // // var sum_text = sum.numberFormat(0, '.', ',');



    var pdc_sum = 0;
    $('.cart_product .price').each(function() {
        pdc_sum += parseFloat(this.innerHTML);
    });
    $('.cart_product .subsum').html('<p>' + 'NTD. ' + dallorCommas(pdc_sum) + '</p>')

    var plan_sum = 0;
    $('.cart_plan .price').each(function() {
        plan_sum += parseFloat(this.innerHTML);
    });
    $('.cart_plan .subsum').html('<p>' + 'NTD. ' + dallorCommas(plan_sum) + '</p>')

    var lit_sum = 0;
    $('.cart_light .price').each(function() {
        lit_sum += parseFloat(this.innerHTML);
    });
    $('.cart_light .subsum').html('<p>' + 'NTD. ' + dallorCommas(lit_sum) + '</p>')

    //最後的商品總金額
    $('.totalSum').text('NTD. ' + dallorCommas(pdc_sum + plan_sum + lit_sum));



    $(document).on('click', '.fa-trash-alt', function() {
        var pdc_sum = 0;
        $('.cart_product .price').each(function() {
            pdc_sum += parseFloat(this.innerHTML);
        });
        $('.cart_product .subsum').html('<p>' + 'NTD. ' + dallorCommas(pdc_sum) + '</p>')

        var plan_sum = 0;
        $('.cart_plan .price').each(function() {
            plan_sum += parseFloat(this.innerHTML);
        });
        $('.cart_plan .subsum').html('<p>' + 'NTD. ' + dallorCommas(plan_sum) + '</p>')

        var lit_sum = 0;
        $('.cart_light .price').each(function() {
            lit_sum += parseFloat(this.innerHTML);
        });
        $('.cart_light .subsum').html('<p>' + 'NTD. ' + dallorCommas(lit_sum) + '</p>')
    })


    const deleteItem = function(event) {
        let me = $(event.currentTarget);
        let id = me.closest('tr').attr('data-id');
        let type = me.closest('tr').attr('data-type');

        if (confirm(`確定要刪除嗎?`)) {
            $.get('cart_api.php', {
                    type: type,
                    id: id
                },
                function(data) {
                    me.closest('tr').remove();

                }, 'json');
        }
        if ($('tbody>tr').length = 1) {
            location.reload();
        }
    };
</script>
<?php include __DIR__ . '/parts/html-foot.php'; ?>
