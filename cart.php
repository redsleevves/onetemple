<?php include __DIR__ . '/parts/config.php'; ?>
<?php
$_gdata = [
    // 網頁名稱
    'title' => '灣廟 | 購物車', 
    // 頁面私有 css
    'styles' => '<link rel="stylesheet" href="'.WEB_ROOT.'/css/navbar2.css">',
    //頁面私有 scripts
    '', 
];

?>
<?php include __DIR__ . '/parts/ourhead.php'; ?>

<style>
    body {
        font-family: 'Faustina', serif;
        background-image: url(<?= WEB_ROOT ?>/img/bcc.png);
        position: relative;
        min-height: 100vh;
        padding-bottom: 150px;
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

    button:focus {
        outline: 0;
        box-shadow: 0 0 0 1pt rgb(77, 77, 77);
    }

    i {
        padding: 0 8px;
    }

    .btns {
        margin: 300px;
    }

    footer {
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
    }

    .cart {
        display: flex;
        flex-direction: row-reverse;
        justify-content: space-evenly;
        position: relative;
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
        top:10%
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
            bottom: 0;
            right: 0;
            z-index: -1;
            opacity: 0.7;
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
            height: 150px;
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
            position: fixed;
            bottom: 0;
            z-index: 2;
            background-color: white;
            box-shadow: 0 -3px 3px 3px rgba(102, 102, 102, 0.562);
        }

        .mobile_bill p {
            margin: 0;
        }

        .mobile_discount,
        .mobile_bill div {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
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
            height: 150px;
            padding: 0 10px;
        }

        .mobile_thumbnail img {
            height: 100%;
        }

        .cart_card p {
            font-size: 16px;
            margin: 0;
        }
    }
</style>
<?php include __DIR__ . '/parts/navbar2.php'; ?>

<div class="container cart col-lg-10 col-12">
    <section class="bill container-fluid col-3">
        <h3>訂單明細</h3>
        <hr>
        <div class="summary">
        <?php if(empty($_SESSION['cart']['product'])): ?>
                <div class="alert" role="alert">
                    您並未選購任何商品，請至祈福商店選購。
                </div>
            <?php else: ?>
            <?php foreach($_SESSION['cart']['product'] as $i) : ?>
            <ul>
                <li><?= $r['name'] ?></li>
                <li><?= $r['price'] ?></li>
            </ul>
            <?php endforeach; ?>
            <?php foreach($_SESSION['cart']['plan'] as $j) : ?>
            <ul>
                <li><?= $j['name'] ?></li>
                <li><?= $j['price'] ?></li>
            </ul>
            <?php endforeach; ?>
            <?php foreach($_SESSION['cart']['light'] as $k) : ?>
            <ul>
                <li><?= $k['name'] ?></li>
                <li><?= $k['price'] ?></li>
            </ul>
            <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <hr>
        <div class="summary">
            <ul>
                <li>
                    <h4>總計</h4>
                </li>
                <li class="totalSum">1235</li>
            </ul>
        </div>
        <button>確認結帳</button>
    </section>
    <section class="carttable container-fluid col-8">
        <h4>購物車</h4>
        <div class="each_table cart_product mt-5">
            <h4 class="cartName">商品</h4>
            <?php if(empty($_SESSION['cart']['product'])): ?>
                <div class="alert" role="alert">
                    您並未選購任何商品，請至祈福商店選購。
                </div>
            <?php else: ?>
            <table class="table table-light">
                <thead>
                    <tr>
                        <th scope="col">商品圖</th>
                        <th scope="col">商品名稱</th>
                        <th scope="col">內容</th>
                        <th scope="col">數量</th>
                        <th scope="col">金額</th>
                        <th scope="col">備註</th>
                        <th scope="col">刪除</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($_SESSION['cart']['product'] as $i): ?>
                        <tr>
                            <td>
                                <div class="thumbnail"><img src="<?= WEB_ROOT ?>/img/<?= $i['img'] ?>"></div>
                            </td>
                            <td><?= $i['name'] ?></td>
                            <td><?= $i['content'] ?></td>
                            <td>
                                <div class="input-group">
                                    <button class="down btn btn-default"><i class="fas fa-minus"></i></button>
                                    <input type="text" class="form-control input-number" value="<?= $i['qty'] ?>" />
                                    <button class="up btn btn-default"><i class="fas fa-plus"></i></button>
                                </div>
                            </td>
                            <td class="price"><?= $i['price'] ?></td>
                            <td><?= $i['note'] ?></td>
                            <td class="trash">
                                <a href="javascript:delete_it_pdc(<?= $i['sid'] ?>)">
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
        <div class="each_table cart_plan mt-5">
            <h4 class="cartName">行旅</h4>
            <?php if(empty($_SESSION['cart']['plan'])): ?>
                <div class="alert" role="alert">
                    您並未選購任何商品，請至聖地巡禮選購。
                </div>
            <?php else: ?>
            <table class="table table-light">
                <thead>
                    <tr>
                        <th scope="col">商品圖</th>
                        <th scope="col">商品名稱</th>
                        <th scope="col">內容</th>
                        <th scope="col">數量</th>
                        <th scope="col">金額</th>
                        <th scope="col">備註</th>
                        <th scope="col">刪除</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($_SESSION['cart']['plan'] as $j): ?>
                        <tr>
                            <td>
                                <div class="thumbnail"><img src="<?= WEB_ROOT ?>/img/<?= $j['img'] ?>"></div>
                            </td>
                            <td><?= $j['name'] ?></td>
                            <td><?= $j['content'] ?></td>
                            <td>
                                <div class="input-group">
                                    <button class="down btn btn-default"><i class="fas fa-minus"></i></button>
                                    <input type="text" class="form-control input-number" value="<?= $j['qty'] ?>" />
                                    <button class="up btn btn-default"><i class="fas fa-plus"></i></button>
                                </div>
                            </td>
                            <td class="price"><?= $j['price'] ?></td>
                            <td><?= $j['note'] ?></td>
                            <td class="trash">
                                <a href="javascript:delete_it_pdc(<?= $j['sid'] ?>)">
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
                            <p>1,200</p>
                        </td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <?php endif; ?>
        </div>
        <div class="each_table cart_light mt-5">
            <h4 class="cartName">點燈</h4>
            <?php if(empty($_SESSION['cart']['light'])): ?>
                <div class="alert" role="alert">
                    您並未選購任何商品，請至線上服務選購。
                </div>
            <?php else: ?>
            <table class="table table-light">
                <thead>
                    <tr>
                        <th scope="col">商品圖</th>
                        <th scope="col">商品名稱</th>
                        <th scope="col">內容</th>
                        <th scope="col">數量</th>
                        <th scope="col">金額</th>
                        <th scope="col">備註</th>
                        <th scope="col">刪除</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($_SESSION['cart']['light'] as $k): ?>
                        <tr>
                            <td>
                                <div class="thumbnail"><img src="<?= WEB_ROOT ?>/img/<?= $k['img'] ?>"></div>
                            </td>
                            <td><?= $k['name'] ?></td>
                            <td><?= $k['content'] ?></td>
                            <td>
                                <div class="input-group">
                                    <button class="down btn btn-default"><i class="fas fa-minus"></i></button>
                                    <input type="text" class="form-control input-number" value="<?= $k['qty'] ?>" />
                                    <button class="up btn btn-default"><i class="fas fa-plus"></i></button>
                                </div>
                            </td>
                            <td class="price"><?= $k['price'] ?></td>
                            <td><?= $k['note'] ?></td>
                            <td class="trash">
                                <a href="javascript:delete_it_pdc(<?= $k['sid'] ?>)">
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
            <tbody>
                <tr>
                <?php foreach($_SESSION['cart']['product'] as $i) : ?>
                    <td>
                        <div class="mobile_thumbnail"><img src="<?= WEB_ROOT ?>/img/<?= $i['img'] ?>"></div>
                    </td>
                    <td>
                        <div class="data">
                            <div class="detail">
                                <p><?= $i['name'] ?></p>
                                <p><?= $i['content'] ?></p>
                                <p>NTD<?= $i['price'] ?></p>
                            </div>
                            <div class="input-group">
                                <button class="down btn btn-default"><i class="fas fa-minus"></i></button>
                                <input type="text" class="form-control input-number" value="1" />
                                <button class="up btn btn-default"><i class="fas fa-plus"></i></button>
                            </div>
                        </div>
                    </td>
                    <td><a href="javascript:delete_it_pdc(<?= $i['sid'] ?>)">
                                <i class="fas fa-trash-alt"></i>
                                </a></td>
                    <?php endforeach; ?>
                </tr>
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
            <tbody>
                <tr>
                <?php foreach($_SESSION['cart']['plan'] as $j) : ?>
                    <td>
                        <div class="mobile_thumbnail"><img src="<?= WEB_ROOT ?>/img/<?= $j['img'] ?>"></div>
                    </td>
                    <td>
                        <div class="data">
                            <div class="detail">
                                <p><?= $j['name'] ?></p>
                                <p><?= $j['content'] ?></p>
                                <p>NTD<?= $j['price'] ?></p>
                            </div>
                            <div class="input-group">
                                <button class="down btn btn-default"><i class="fas fa-minus"></i></button>
                                <input type="text" class="form-control input-number" value="1" />
                                <button class="up btn btn-default"><i class="fas fa-plus"></i></button>
                            </div>
                        </div>
                    </td>
                    <td><a href="javascript:delete_it_pln(<?= $j['sid'] ?>)">
                                <i class="fas fa-trash-alt"></i>
                                </a></td>
                    <?php endforeach; ?>
                </tr>
            </tbody>
        </table>
    </section>
</div>
<div class="mobile_bill">
    <div class="mobile_discount">
        <div class="d-flex">
            <i class="fas fa-tags"></i>
            <p>折扣碼</p>
        </div>
        <input type="text" placeholder="輸入折價券或折扣碼">
    </div>
    <div class="mobile_sum">
        <p>XXX</p>
        <button type="submit">去買單</button>
    </div>
</div>
<div class="cart_backdeco">
    <img src="<?= WEB_ROOT ?>/img/cart_Incense.png">
</div>

<footer>
    <p>Copyright© TempleTrip.tw</p>
</footer>

<?php include __DIR__ . '/parts/ourscripts.php'; ?>


<script>
    $('.up').click(function() {
        $(this).prev().val(+$(this).prev().val() + 1);
    });
    $('.down').click(function() {
        if ($(this).next().val() > 1) $(this).next().val(+$(this).next().val() - 1);
    });
    // let discountV = document.getElementsByName('discount')
    // console.log(discountV)
    // $('#entered').html(discountV.val())

    function getSubSum(element) {
        var sum = 0;
        $(element).each(function() {
            sum += parseFloat(this.innerHTML); 
        });
        return sum
    }
    
    $(document).ready(function() {
        console.log('price')
        var sum = 0;
        $('.cart_product .price').each(function() {
            sum += parseFloat(this.innerHTML);
        });
        $('.cart_product .subsum').html('<p>' + sum + '</p>')
        var sum = 0;
        $('.cart_plan .price').each(function() {
            sum += parseFloat(this.innerHTML);
        });
        $('.cart_plan .subsum').html('<p>' + sum + '</p>')
        var sum = 0;
        $('.cart_light .price').each(function() {
            sum += parseFloat(this.innerHTML);
        });
        $('.cart_light .subsum').html('<p>' + sum + '</p>')
    });


    $(document).on('click', '.fa-trash-alt', function() {
        var sum = 0;
        $('.cart_product .price').each(function() {
            sum += parseFloat(this.innerHTML); 
        });
        $('.cart_product .subsum').html('<p>' + sum + '</p>')
        $('.cart_plan .price').each(function() {
            sum += parseFloat(this.innerHTML); 
        });
        $('.cart_plan .subsum').html('<p>' + sum + '</p>')
        $('.cart_light .price').each(function() {
            sum += parseFloat(this.innerHTML); 
        });
        $('.cart_light .subsum').html('<p>' + sum + '</p>')
    })

    // $(document).on('click', '.fa-trash-alt', function() {
    //     var elem = $('.cart_product .price')
    //     $(this).parentsUntil('tbody').remove()
    //     $('.cart_product .price').each(function() {
    //         sum += parseFloat(this.innerHTML); // Or this.innerHTML, this.innerText
    //     });
    //     $('.cart_product .subsum').html('<p>' + sum + '</p>')
    // })
    function delete_it_pdc(sid){
    if(confirm(`確定要刪除 ${name} 嗎?`)){
        location.href = 'delete_product.php?sid=' + sid;
    }}
    function delete_it_pln(sid){
    if(confirm(`確定要刪除 ${name} 嗎?`)){
        location.href = 'delete_plan.php?sid=' + sid;
    }}
    function delete_it_lit(sid){
    if(confirm(`確定要刪除 ${name} 嗎?`)){
        location.href = 'delete_light.php?sid=' + sid;
    }}
    
</script>
<?php include __DIR__ . '/parts/html-foot.php'; ?>