<?php include __DIR__ . '/parts/config.php'; ?>

<?php

$title = '灣廟 | 結帳確認';
$pageName = 'check_list & payment method';

//訂單編號：前8位為日期，剩下取time()結果的後五位
$order_id = date("YmdHis").substr(microtime(),2,4);


?>


<?php include __DIR__ . '/parts/checkList/checkList_htmlHead.php' ?>
<?php include __DIR__ . '/parts/navbar2.php' ?>



<div class="checkListContainer">
    <div class="checkList_title">結帳</div>

    <div class="checkList_prod_cate">
        <div class="checkList_prod_cateBox">
            <p>商品名稱</p>
            <p>選項</p>
            <p>單價</p>
            <p>數量</p>
            <p>總價</p>
        </div>
    </div>

    <div class="checkList_itemContainer">

        <!-- product -->
        <!-- PHP變數待調整 -->
        
            <div class="checkList_item checkList_product">
                <div class="checkList_itemImgBox">
                    <img src="./img/indexproduct(2).jpg" alt="">
                </div>
                <div class="checkList_itemWordBox">
                    <p class="checkList_itemName">111</p>
                    <p class="checkList_itemAttr">13123156123</p>
                    <p class="checkList_itemPrice" data-price="100"></p>
                    <p class="checkList_itemNum" data-qty="1"></p>
                    <p class="checkList_itemTotalP"></p>
                </div>
            </div>
        

        <!-- Trip -->
        <!-- PHP變數待調整 -->
        
            <div class="checkList_item checkList_trip">
                <div class="checkList_itemImgBox">
                    <img src="./img/indexproduct(2).jpg" alt="">
                </div>
                <div class="checkList_itemWordBox">
                    <p class="checkList_itemName">111</p>
                    <p class="checkList_itemAttr">13123156123</p>
                    <p class="checkList_itemPrice" data-price="60"></p>
                    <p class="checkList_itemNum" data-qty="2"></p>
                    <p class="checkList_itemTotalP"></p>
                </div>
            </div>
        

        <!-- light -->
        <!-- PHP變數待調整 -->
        
            <div class="checkList_item checkList_light">
                <div class="checkList_itemImgBox">
                    <img src="./img/indexproduct(2).jpg" alt="">
                </div>
                <div class="checkList_itemWordBox">
                    <p class="checkList_itemName">111</p>
                    <p class="checkList_itemAttr">13123156123</p>
                    <p class="checkList_itemPrice" data-price="680"></p>
                    <p class="checkList_itemNum" data-qty="1"></p>
                    <p class="checkList_itemTotalP"></p>
                </div>
            </div>
        

    </div>


<form name="form1" method="post" novalidate onsubmit="checkForm(); return false;">
    <div class="checkList_deliverBox">
        <div class="checkList_subTitle">寄送方式</div>
        <div class="checkList_info">選擇寄送方式</div>

        <div class="checkList_deliverContent">
            
                <div class="checkList_deliver_cho">
                    <div class="checkList_deliver_choName">
                        <label class="checkList_shopChoName">
                            
                                <input type="radio" name="shipment_method" value="7-11" checked> 711

                        </label>
                        <p data-price="60">+ NT. 60</p>
                    </div>

                    <div class="checkList_dliver_choInfo checkList_choInfo">
                        <div class="checkList_dliver_choInfoDetail">
                            <label class="shopName">

                                <input type="radio" name="shipment_address" value="大安門市" class="shopAddress_radio"> 大安門市

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
                            
                        <input type="radio" name="shipment_method" value="familyMart"> 全家
                            
                        </label>
                        <p data-price="60">+ NT. 60</p>
                    </div>

                    <div class="checkList_dliver_choInfo checkList_choInfo">
                        <div class="checkList_dliver_choInfoDetail">
                            <label class="shopName">
                                
                            <input type="radio" name="shipment_address" value="西華門市" class="shopAddress_radio"> 西華門市
                                
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

                            <input type="radio" name="shipment_method" value="hiLife"> 萊爾富
                            
                        </label>
                        <p data-price="60">+ NT. 60</p>
                    </div>

                    <div class="checkList_dliver_choInfo checkList_choInfo">
                        <div class="checkList_dliver_choInfoDetail">
                            <label class="shopName">
                                
                                <input type="radio" name="shipment_address" value="德欣門市" class="shopAddress_radio"> 德欣門市
                                
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
                        
                            <input type="text" name="shipment_address" placeholder="地址" size="30" id="deli_address">
                            <br>
                            <input type="text" name="shipment_reciver" placeholder="收件人">
                            <input type="text" name="shipment_reciver_phone" placeholder="聯絡電話">
                        
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
                        
                        <input type="radio" name="payment_method" value="貨到付款" id="arrivePayRadio" checked>
                        貨到付款

                    </label>
                </div>

                <div class="checkList_pay_cho">
                    <label class="checkList_payMethod"><input type="radio" name="payment_method" value="信用卡付款" id="creditRadio"> 信用卡 / 金融卡</label>

                    <div class="checkList_pay_choInfo checkList_choInfo">
                        <p class="checkList_importment">*為必填</p>
                            <label>*請輸入卡號:
                                <input class="cardNum" type="text" name="cardnum-p1" maxlength="4" size="4" oninput="value=value.replace(/[^\d{4}]/g,'')">-
                                <input class="cardNum" type="text" name="cardnum-p2" maxlength="4" size="4" oninput="value=value.replace(/[^\d{4}]/g,'')">-
                                <input class="cardNum" type="text" name="cardnum-p3" maxlength="4" size="4" oninput="value=value.replace(/[^\d{4}]/g,'')">-
                                <input class="cardNum" type="text" name="cardnum-p4" maxlength="4" size="4" oninput="value=value.replace(/[^\d{4}]/g,'')">
                            </label>
                            <br />
                            <label>*持卡人姓名:
                                <input class="cardName" type="text" name="cardName">
                            </label>
                            <br />
                            <label>*安全碼:
                                <input class="cardSafeNum" type="text" name="cardSafeNum" maxlength="3" size="3" oninput="value=value.replace(/[^\d]/g,'')">
                            </label>
                            <br />
                            <label>*到期日:
                                <input class="cardDate" type="text" name="cardDate" maxlength="2" size="2" oninput="value=value.replace(/[^\d]/g,'')"> /
                                <input class="cardDate" type="text" name="cardDate" maxlength="2" size="2" oninput="value=value.replace(/[^\d]/g,'')">
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
                <p class="checkList_shipFee">未選擇配送方式</p>
            </div>

            <div class="checkList_totalPricInfoBox">
                <p>訂單總金額</p>
                <p class="checkList_orderPrice">計算中</p>
            </div>
        </div>
    </div>
    
    
    <div class="checkList_finBtn">
        <button type="submit" class="checkList_btn" data-target="#finishOrder" id="orderbtn" onclick="requireData()">確認下訂</button>
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
                    <span name="order_id"><?= $order_id ?></span>
                </div>
            </div>
            <div class="modal-footer modal-footer-re">
                <button type="button" class="btn-primary-re"><a href="index.html">回到首頁</a></button>
                <button type="button" class="btn-primary-re"><a href="">查看訂單</a></button>
            </div>
        </div>
    </div>
</div>




<div class="checkList_bccImg">
    <img src="./img/checkList_bccImg.png" alt="">
</div>


<?php include __DIR__ . '/parts/go-top.php' ?>

<?php include __DIR__ . '/parts/checkList/checkList_scripts.php' ?>
<script>

const dallorCommas = function(n){
        return n.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
    };

   $(document).ready(function(){
        let proj_total = 0;
        let trip_total = 0;
        let light_total = 0;
        $('.checkList_product').each(function(){
            const $price = $(this).find('.checkList_itemPrice');
            const price = $price.attr('data-price') * 1;
            $price.text('NTD. ' + dallorCommas(price));

            const qty = $(this).find('.checkList_itemNum').attr('data-qty') * 1;
            $(this).find('.checkList_itemNum').text(qty);


            $(this).find('.checkList_itemTotalP').text('NTD. ' + dallorCommas(price * qty));
            proj_total += price * qty;
        });

        $('.checkList_trip').each(function(){
            const $price = $(this).find('.checkList_itemPrice');
            const price = $price.attr('data-price') * 1;
            $price.text('NTD. ' + dallorCommas(price));

            const qty = $(this).find('.checkList_itemNum').attr('data-qty') * 1;
            $(this).find('.checkList_itemNum').text(qty);


            $(this).find('.checkList_itemTotalP').text('NTD. ' + dallorCommas(price * qty));
            trip_total += price * qty;
        });

        $('.checkList_light').each(function(){
            const $price = $(this).find('.checkList_itemPrice');
            const price = $price.attr('data-price') * 1;
            $price.text('NTD. ' + dallorCommas(price));

            const qty = $(this).find('.checkList_itemNum').attr('data-qty') * 1;
            $(this).find('.checkList_itemNum').text(qty);


            $(this).find('.checkList_itemTotalP').text('NTD. ' + dallorCommas(price * qty));
            light_total += price * qty;
        });

        //最後的商品總金額
        $('.totalPriceBox').text('NTD. ' + dallorCommas(proj_total + trip_total + light_total));



        $('.checkList_deliver_choName input').click(function(){
            const shipFee = $(this).parent().siblings().attr('data-price') * 1;

            $('.checkList_shipFee').text('NTD. ' + shipFee);

            //訂單總金額
            const orderPrice = proj_total + trip_total + light_total + shipFee;
            $('.checkList_orderPrice').text('NTD. ' + orderPrice);
        
        });

        
   });


   function checkForm() {
        // 回復原來的狀態
        // fileds.forEach(el=>{
        //     el.css('border', '1px solid #CCCCCC');
        //     el.next().text('');
        // });

        let isPass = true;

        // if($name.val().length < 2){
        //     isPass = false;
        //     $name.css('border', '1px solid red');
        //     $name.next().text('請輸入正確的姓名');
        // }
        // if(! email_re.test($email.val())){
        //     isPass = false;
        //     $email.css('border', '1px solid red');
        //     $email.next().text('請輸入正確的 email');
        // }
        // if(! mobile_re.test($mobile.val())){
        //     isPass = false;
        //     $mobile.css('border', '1px solid red');
        //     $mobile.next().text('請輸入正確的手機號碼');
        // }

        if(isPass){
            $.post(
                'test-api.php',
                $(document.form1).serialize(),
                function(data){
                    if(data.success){
                        alert('訂單已送出');
                    } else {
                        console.log('資料沒有送出')
                        alert(data.error);
                    }
                },
                'json'
            )
        }

    }


</script>
<?php include __DIR__ . '/parts/html-foot.php' ?>