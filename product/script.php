<!-- <script src="../js/jquery-3.5.1.min.js"></script> -->
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/11.0.2/bootstrap-slider.min.js" integrity="sha512-f0VlzJbcEB6KiW8ZVtL+5HWPDyW1+nJEjguZ5IVnSQkvZbwBt2RfCBY0CBO1PsMAqxxrG4Di6TfsCPP3ZRwKpA==" crossorigin="anonymous"></script>

<script>
    // With JQuery
    $("#ex8").slider({
        tooltip: 'always',
        tooltip_position: 'bottom'
    }).on('slideStop', function(e) {
        var key = $(this).attr('data-key');
        var val = $(this).attr('data-val');
        var sortBy = $(this).attr('data-sort');
        if (key != "") {
            location.href = "product.php?priceMax=" + e.value + "&key=" + key + "&value=" + val + "&sortBy=" + sortBy;
        } else {
            location.href = "product.php?priceMax=" + e.value + "&sortBy=" + sortBy;
        }
    });
    $("#ex9").slider({
        tooltip: 'always',
        tooltip_position: 'bottom'
    }).on('slideStop', function(e) {
        var key = $(this).attr('data-key');
        var val = $(this).attr('data-val');
        var sortBy = $(this).attr('data-sort');
        if (key != "") {
            location.href = "product.php?priceMax=" + e.value + "&key=" + key + "&value=" + val + "&sortBy=" + sortBy;
        } else {
            location.href = "product.php?priceMax=" + e.value + "&sortBy=" + sortBy;
        }
    });

    // 火箭推
    // function top0() {
    //     window.scrollTo({
    //         top: 0,
    //         behavior: "smooth"
    //     })
    // }
    //導覽列特效
    $(document).ready(function() {
        $('.shop_nav_li').hover(function() {
            $(this).css('transform', 'scale(1.1)')
        });
        $('.shop_nav_li').click(function() {
            $(this).css('color', '#cc543a')
        });
    });
    $('.shop_nav_li').mouseleave(function() {
        $('.shop_effect').css('transform', 'scale(1)');
        $('.shop_effect').css('color', '#000');
    });
    //商品分類欄位特效
    $(document).ready(function() {
        $('.shop_effect').hover(function() {
            // $(this).css('transform', 'scale(1.1)');

        });
        $('.shop_effect').click(function() {
            $(this).css('color', '#cc543a');

        });
    });
    $('.shop_effect').mouseleave(function() {
        $('.shop_effect').css('transform', 'scale(1)');
        $('.shop_effect').css('color', '#000');
    });
    //換頁按鈕特效
    // $('.page-item').hover(function () {
    //     $(this).css('color', '#fff');
    //     $(this).css('background-color', '#cc543a');
    // })
    //手機按鈕
    // .toggleClass
    // $('.shop_phone_btn option').hover(function() {
    //     // console.log($('.shop_phone_btn option:selected'));

    //     $(this).css('color', '#fff');
    //     $(this).css('background-color', '#cc543a');
    //     $(this).css('border', 'transparent');
    // })
    // $('.shop_phone_btn').mouseleave(function() {
    //     $(this).css('color', '#a2a2a2');
    //     $(this).css('background-color', '#fff');
    // })
    //加入我的最愛按鈕
    $(".shop_icon").click(function() {
        // console.log('hi');
        $(this).toggleClass('active');
    });
    // -----------------
    $(".py-1.shop_effect").click(function() {
        //location.href = "?Categories=" + $(this).html();
        location.href = "?" + $(this).attr('data-p');

    });
    $(".shop_phone_effect").click(function() {
        console.log($(".shop_phone_effect"));
        location.href = "?" + $(this).attr('data-p');

    });

    // $(".py-1.shop_effect").click(function() {
    //     location.href = "?Joint AND_Popular=" + $(this).html();
    // });
    $(".page-link.shop_page-item").click(function() {
        searchkey = location.search.split('&');
        searchkey.forEach(function(item) {
            if (item.includes("page="))
                searchkey.splice(searchkey.indexOf(item), 1)
        });

        if (location.search == "") {
            location.href = "?page=" + $(this).attr('value');
        } else
        if (searchkey.length == 0) {
            location.href = "?page=" + $(this).attr('value');
        } else {
            location.href = location.pathname + searchkey.join('&') + "&page=" + $(this).attr('value');
        }
    });
    //收尋按鈕
    $(".fa.fa-search.fa-lg").click(function() {
        location.href = "?searchkey=" + $('#formGroupExampleInput').val();
    });
    // $("#exampleFormControlSelect1").change(function() {
    //    location.href = "?Sort_by=" + $(this).find("option:selected").html();
    // });
    function onSelect(selectObject) {
        console.log(selectObject.value);
        location.href = selectObject.value;
        $('#exampleFormControlSelect1 option:first-child').text(selectObject.text);

    }
    // ------------------------------
    $(document).ready(function() {
        $(".shop_card_body .shop_icon").click(function() {
            const card_id = $(this).closest('.shop_card_body').attr('data-sid');

            console.log({
                card_id
            });



        })
    });


    // ----------收藏愛心--------------
    const collectHeartBtn = $('.shop_icon'); //換成愛心

    collectHeartBtn.click(function() {
        if (!mData) {
            alert('請先登入會員')
            return;
        }

        const card = $(this).closest('.shop_card_body'); //產品卡片父層
        const shopId = card.attr('data-sid'); //pid改成shop_id


        // console.log({pid, qty}, card.find('.card-title').text());

        $.get('like_shop_api.php', { //改成判斷式php
            shop_id: shopId, //$shop_id

        }, function(data) { //data代表json的$output
            console.log(data);
            pData = data;
            // showCartCount(data); // 更新選單上數量的提示 //計算購物車的商品數量
            //愛心停留
            // if (pData.like_shop && pData.like_shop.length) {
            //     pData.like_shop.forEach(o => {
            //         $('.shop_icon' + o.shop_id).addClass('iconFill iconzfillWith')
            //     });
            // }

        }, 'json');

    })


    //點擊愛心收藏產品
    const onLove1Click = function(e) {
        //如果沒有登入，就會顯示要先登入才能進行收藏
        if (!mData) {
            alert('請先登入會員')
            return;
        }
        const shop_icon = $(e.currentTarget); //愛心icon 父層名稱
        const card = shop_icon.closest('.product_content'); //產品卡片父層
        // closest抓取自己祖先的父層
        const pid = card.attr('data-sid');
        console.log('pid:', pid);
        const type = 2;
        $.get('favorites-api.php', {
            action: 'add',
            pid,
            type
        }, function(data) {
            // console.log(data);
            if (data.addOrDel === 'add') {
                love1.addClass('fill');
            } else {
                love1.removeClass('fill');
            }

        }, 'json');
    };





    // -------------下拉式選單-----------------
    // function mobilePhoneEffect(event) {
    //     console.log(event.target.value);
    //     const prices = event.target.value.splice(',');
    //     // target出發事件按鈕
    //     // splice字府切割
    //     PhoneEffect(prices[0], prices[1]);
    // }
    // var cate_rows = <?= json_encode($cate_rows, JSON_UNESCAPED_UNICODE) ?>;

    // function change(event) {
    //     console.log(event.target.value);
    //     // changeCate('商品分類', event.target.value);
    //     location.href = "?searchkey=" + $('#formGroupExampleInput').val();
    // }



    $(".shop_phone_btn").change(function() {
        if ($(this).val() > 0) {
            $(this).addClass('active');
        } else {
            $(this).removeClass('active');
        }
        if ($(this).val() == "線香" || $(this).val() == "飾品" || $(this).val() == "擺飾" || $(this).val() == "平安符") {
            location.href = "product.php?Categories=" + $(this).val()
        }

        if ($(this).val() == "聯名合作" || $(this).val() == "熱門商品") {
            location.href = "product.php?Joint_Popular=" + $(this).val()
        }
    })
    // ---------------手機版下拉式選單資料連動---------------
    // function change() {
    //     var form = document.forms[0];
    //     var sel = form.elements['select[]'];
    //     sel.options[sel.selectedIndex].selected = true; //設定選中項
    //     var selectedOptions = getSelectedOptions(sel);
    //     var message = "";
    //     for (var i = 0, len = selectedOptions.length; i < len; i++) { //出現選中項的索引、文字、和值
    //         message += "selected index:" + selectedOptions[i].index + "\nselected text:" + selectedOptions[i].text + "\nselected value:" + selectedOptions[i].value + "\n\n";
    //     }

    //     var p = document.getElementById('p1');
    //     p.innerHTML = message;
    // }

    // function getSelectedOptions(selectbox) { //用for迴圈來選取被點中設定了selected的項，再壓縮到陣列中再返回
    //     var result = new Array();
    //     var option = null;
    //     for (var i = 0, len = selectbox.options.length; i < len; i++) {
    //         option = selectbox.options[i];
    //         if (option.selected) {
    //             result.push(option);
    //         }
    //     }
    //     return result;
    // }
</script>