<script src="<?= WEB_ROOT ?>/bs&jq/jquery-3.6.0.js"></script>
<script src="<?= WEB_ROOT ?>/bs&jq/bootstrap.bundle.js"></script>

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

        if ( $(this).find('.shopRadio').checked = true) {

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
    $("#arrivePayRadio").click(function(){
        $(".checkList_pay_choInfo input").val("");
    });
    //選擇超商取貨時，會自動清空已填的宅配資料
    $(".shopRadio").click(function(){
        $(".deliveryInfo input").val("");
    });


        //bs-查看詳情
        $(function () {
    $('[data-toggle="popover"]').popover();
    });


    //計算商品價格
    const dallorCommas = function(n){
            return n.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
    };

   $(document).ready(function(){
       
        let prod_total = 0;
        let trip_total = 0;
        let light_total = 0;
        $('.checkList_product').each(function(){
            const $price = $(this).find('.checkList_itemPrice');
            const price = $price.attr('data-price') * 1;
            $price.text('NTD. ' + dallorCommas(price));

            const qty = $(this).find('.checkList_itemNum').attr('data-qty') * 1;
            $(this).find('.checkList_itemNum').text(qty);

            $(this).find('.checkList_itemTotalP').text('NTD. ' + dallorCommas(price * qty));
            prod_total += price * qty;
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
        $('.totalPriceBox').text('NTD. ' + dallorCommas(prod_total + trip_total + light_total));

        //運費選擇
        $('.checkList_deliver_choName input').click(function(){
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
    const mobile_re = /^09\d{2}-?\d{3}-?\d{3}$/;

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
        fileds1.forEach(el1=>{
            el1.css('border','none');
            el1.css('border-bottom','1px solid #aaa');
            el1.parent().find('.form-text').text('');
        });
        fileds2.forEach(el2=>{
            el2.css('border','none');
            el2.css('border-bottom','1px solid #aaa');
            el2.next().text('');
        });
        fileds3.forEach(el3=>{
            el3.css('border','1px solid #aaa');
            el3.next().text('');
        });

        let isPass = true;

        let creditRadio = document.getElementById('creditRadio');
        let arrivePayRadio = document.getElementById('arrivePayRadio');
        let deliveryRadio = document.getElementById('deliveryRadio');
            

        if(arrivePayRadio.checked == true){

            // console.log('arrivePay', 'checked');  

                //判斷宅配選項是否有選
                if (deliveryRadio.checked == true) {


                    if (reciver.val() == ""){
                        isPass = false;
                        $(reciver).css('border','1px solid red');
                        $(reciver).next().text('請輸入收件人姓名')
                    }
                    if (! mobile_re.test(phone.val())){
                        isPass = false;
                        $(phone).css('border','1px solid red');
                        $(phone).next().text('請填入正確的手機格式')
                    }
                    if (address.val() == ""){
                        isPass = false;
                        $(address).css('border','1px solid red');
                        $(address).next().text('請輸入收件地址')
                    }
                    if (isPass){
                    $('#orderbtn').attr('data-toggle', 'modal')
                    }

                }
                if (isPass){
                    $('#orderbtn').attr('data-toggle', 'modal');
                }      
        };


        if (creditRadio.checked == true) {

            // console.log('cradio', 'checked');

            //判斷宅配選項是否有選
            if (deliveryRadio.checked == true) {

                    if (reciver.val() == ""){
                        isPass = false;
                        $(reciver).css('border','1px solid red');
                        $(reciver).next().text('請輸入收件人姓名')
                    }
                    if (! mobile_re.test(phone.val())){
                        isPass = false;
                        $(phone).css('border','1px solid red');
                        $(phone).next().text('請填入正確的手機格式')
                    }
                    if (address.val() == ""){
                        isPass = false;
                        $(address).css('border','1px solid red');
                        $(address).next().text('請輸入收件地址')
                    }

                };

                

            if (cardnumP1.val() == "" || cardnumP1.val().length < 4) {
                isPass = false;
                $(cardnumP1).css('border','1px solid red');
                $(cardnumP1).parent().find('.form-text').text('卡號格式錯誤')
            }

            if (cardnumP2.val() == "" || cardnumP2.val().length < 4) {
                isPass = false;
                $(cardnumP2).css('border','1px solid red');
                $(cardnumP2).parent().find('.form-text').text('卡號格式錯誤')
                // alert("卡號格式錯誤");
                // return false;
            }
            if (cardnumP3.val() == "" || cardnumP3.val().length < 4) {
                isPass = false;
                $(cardnumP3).css('border','1px solid red');
                $(cardnumP3).parent().find('.form-text').text('卡號格式錯誤')
                // alert("卡號格式錯誤");
                // return false;
            }
            if (cardnumP4.val() == "" || cardnumP4.val().length < 4) {
                isPass = false;
                $(cardnumP4).css('border','1px solid red');
                $(cardnumP4).parent().find('.form-text').text('卡號格式錯誤')

                // alert("卡號格式錯誤");
                // return false;
            }             

            if (creditName.val() == "") {
                isPass = false;
                $(creditName).css('border','1px solid red');
                $(creditName).next().text('請輸入持卡人姓名')
            }

            if (cardSafeNum.val() == "" || cardSafeNum.val().length < 3) {
                isPass = false;
                $(cardSafeNum).css('border','1px solid red');
                $(cardSafeNum).next().text('請輸入正確的安全碼')
            }

            if (cardDateMM.val() == "" || cardDateMM.val().length < 2) {
                isPass = false;
                $(cardDateMM).css('border','1px solid red');
                $(cardDateMM).parent().find('.form-text').text('請輸入正確的到期日')
            }
            if (cardDateYY.val() == "" || cardDateYY.val().length < 2) {
                isPass = false;
                $(cardDateYY).css('border','1px solid red');
                $(cardDateYY).parent().find('.form-text').text('請輸入正確的到期日')
            }


            if (isPass) {
                $('#orderbtn').attr('data-toggle', 'modal')
            }
        };

        if(isPass){
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
        $('#orderbtn').on('click', function() {

            $.ajax({
                url: "checkList-api.php",
                // dataType: "json",
                method: "POST",
                data:{
                    order_id: $("#orderID").html(),
                    // shipment_fee: $(".checkList_shipFee").html()
                },
                error:function(){
                    alert("失敗");
                    // console.log(order_id);
                },
                success:function(data){
                    // console.log(order_id);
                    console.log(data);
                    // $("#orderID").html(order_id);
                    // alert("成功");
                } 
            });
        })

    // Go-Top
    $(window).scroll(function (event) {
            let scrollTop = $(window).scrollTop();
            console.log(scrollTop);

            if (scrollTop >= 500) {

                $(".index_goTopImg").addClass('show');
            } else {
                $(".index_goTopImg").removeClass('show');
            }
        });

        $('.index_goTopImg').click(function () {
            $("html,body").animate({
                scrollTop: 0}, 700);
            });

    
</script>