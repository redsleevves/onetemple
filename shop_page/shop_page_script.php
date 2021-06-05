<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/11.0.2/bootstrap-slider.min.js" integrity="sha512-f0VlzJbcEB6KiW8ZVtL+5HWPDyW1+nJEjguZ5IVnSQkvZbwBt2RfCBY0CBO1PsMAqxxrG4Di6TfsCPP3ZRwKpA==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-touchspin/4.3.0/jquery.bootstrap-touchspin.min.js" integrity="sha512-0hFHNPMD0WpvGGNbOaTXP0pTO9NkUeVSqW5uFG2f5F9nKyDuHE3T4xnfKhAhnAZWZIO/gBLacwVvxxq0HuZNqw==" crossorigin="anonymous"></script>
<script src="./js/mybtn.js"></script>

<script>
    $("input[name='demo3']").TouchSpin({
        initval: 1,
        min: 1,
        max: 99,
        step: 1,
        decimals: 0,
        buttondown_class: 'btn btn-default',
        buttonup_class: 'btn btn-default'
    });

    $(".shop_title_img .shop_imghover img").click(function() {
        $("#shop_imgclick").attr("src", $(this).attr("src"))


    });

    $(".shop_btn").click(function() {
        $(this).toggleClass("active");
    });

    $(".shop_like_mobile").click(function() {
        $(this).toggleClass("active");
    });




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
    // ----------分頁-收藏愛心--------------
    const addToCartBtn = $('.mybtn_like'); //換成愛心

    addToCartBtn.click(function() {
        const card = $(this).closest('.shop_page_body'); //產品卡片父層
        const shopId = card.attr('data-sid'); //pid改成shop_id


        // console.log({pid, qty}, card.find('.card-title').text());

        $.get('like_shop_api.php', { //改成判斷式php
            shop_id: shopId, //$shop_id

        }, function(data) { //data代表json的$output
            console.log(data);
            // showCartCount(data); // 更新選單上數量的提示 //計算購物車的商品數量
        }, 'json');

    })
    // --------------分頁商品-回傳購物內容------------------------------
    const addCartBtn = $('.mybtn_cart_add'); //購物車按鈕
    // console.log('addCartBtn-hi')
    addCartBtn.click(function() {
        const card = $(this).closest('.shop_page_body'); //卡片父層
        const cardId = card.attr('data-sid'); //購物車按鈕
        const qty = card.find('#demo3').val(); //購物車計數器

        $.get('shop_cart_api.php', {
            // shop_id: shopId,
            action: 'add',
            pid: cardId,
            qty:qty,
        }, function(data) {
            console.log(data);
            showCartCount(data); // 更新選單上數量的提示
        }, 'json');

    })


    // //PC版購物車按鈕的傳送資料
    // const addToCartPBtn = $('.add-to-cart');
    // addToCartPBtn.click(function() {
    //     // console.log('hi')
    //     const card = $(this).closest('.purchase_product');//卡片父層
    //     const pid = card.attr('data-sid');//購物車按鈕
    //     const qty = card.find('.num').val();//購物車計數器
    //     // console.log({
    //     //     pid,
    //     //     qty
    //     // }, card.find('.card-title').text());

    //     $.get('product-detail-api.php', {
    //         action: 'add',
    //         pid,
    //         qty
    //     }, function(data) {
    //         console.log(data);
    //         showCartCount(data); // 更新選單上數量的提示
    //     }, 'json');

    // })
</script>