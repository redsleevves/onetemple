<?php
session_start();
require __DIR__ . "/parts/config.php";
$_gdata = [
    // 網頁名稱
    'title' => '灣廟 | 祈福商店', 
    // 頁面私有 css
    'styles' => '
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/11.0.2/css/bootstrap-slider.min.css"
    integrity="sha512-3q8fi8M0VS+X/3n64Ndpp6Bit7oXSiyCnzmlx6IDBLGlY5euFySyJ46RUlqIVs0DPCGOypqP8IRk/EyPvU28mQ=="
    crossorigin="anonymous" />
    <link rel="stylesheet" href="' . WEB_ROOT . '/css/breadcrumb.css">
    <link rel="stylesheet" href="' . WEB_ROOT . '/css/mybtn.css">
    <link rel="stylesheet" href="' . WEB_ROOT . '/css/navbar2.css">',
    // 頁面私有 scripts
    'scripts' => '
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/11.0.2/bootstrap-slider.min.js"
        integrity="sha512-f0VlzJbcEB6KiW8ZVtL+5HWPDyW1+nJEjguZ5IVnSQkvZbwBt2RfCBY0CBO1PsMAqxxrG4Di6TfsCPP3ZRwKpA=="
        crossorigin="anonymous"></script>
    <!-- +-數字鍵 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-touchspin/4.3.0/jquery.bootstrap-touchspin.min.js"
        integrity="sha512-0hFHNPMD0WpvGGNbOaTXP0pTO9NkUeVSqW5uFG2f5F9nKyDuHE3T4xnfKhAhnAZWZIO/gBLacwVvxxq0HuZNqw=="
        crossorigin="anonymous"></script>', 
];

// SELECT * FROM shop WHERE id = ''
$member_sid = isset($_SESSION['user'])?$_SESSION['user']['sid']:0;
$sql = "SELECT *, IFNULL(f.sid, 0) as fav 
FROM shops as s 
LEFT JOIN fav_pdc as f ON s.id = f.pdc_sid and f.member_sid = ? 
WHERE id = ?"; //組合SQL指令
$stmt = $pdo->prepare($sql); //預處理SQL
$stmt->execute([$member_sid, $_GET['id']]); //執行SQL
$shop = $stmt->fetch(PDO::FETCH_ASSOC); //取資料


$sql = "SELECT * FROM shops WHERE cat2 = '聯名合作' LIMIT 0, 12";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$hot_shops = $stmt->fetchAll(PDO::FETCH_ASSOC); // 手機熱門行程陣列

$pc_hot_shops = []; // PC熱門行程陣列
$j = 0; // 目前是第幾組
for($i=0;$i<count($hot_shops);$i++) {
    $pc_hot_shops[$j][] = $hot_shops[$i];
    if( ($i+1) % 4 == 0) {
        $j++;
    }
}


?>
<!-- 整個頁面的頭 -->
<?php include __DIR__ . '/parts/ourhead.php'; ?>
<!-- 導航用代碼包含彈窗 -->
<?php include __DIR__ . '/parts/navbar2.php'; ?>




    
    <style>
        body {
            font-family: 'Faustina', serif;
            background-image: url(./img/bcc.png);
            font-size: 16px;
        }

        h3 {
            font-size: 26px;
            font-weight: bold;
            color: #707070;
        }

        .shop-breadcrumb .breadcrumb-item+.breadcrumb-item::before {
            content: "\f054";
            font-family: "Font Awesome 5 Pro";
            font-weight: 900;
            color: #707070;
            font-size: 12px;
        }

        .shop_title_img img {
            border-radius: 5px;
        }

        .shop_title_img .shop_imghover img:hover {
            transform: scale(1.1, 1.1);

        }

        .shop_like_mobile {
            width: 32px;
            height: 32px;
            border: 2px solid #cc543a;
            border-radius: 50%;
            top: 15px;
            right: 15px;
            font-size: 18px;
            color: #cc543a;
            background-color: #fff;
        }

        .shop_like_mobile .fas {
            font-size: 18px;
            color: #FFF;
        }

        .shop_like_mobile.active {
            background-color: #cc543a;
        }


        .shop_like_mobile.active i {
            font-weight: 900;
            font-size: 16px;
            color: #FFF;
        }

        .shop_like_mobile.active {
            background-color: #cc543a;
        }


        .shop_like_mobile.active i {
            font-weight: 900;
            font-size: 16px;
            color: #FFF;
        }

        .breadcrumb-item {
            font-size: 18px;

        }

        .breadcrumb-item a {
            color: #707070;
        }

        .shop_btn {
            color: #cc543a;
            border: 1px solid #cc543a;
            font-weight: bold;
            border-radius: 50px;
            font-size: 18px;
            padding: 5px 15px;

        }

        .shop_btn.active,
        .shop_btn:hover {
            background-color: #cc543a;
            color: #fff;

        }



        .shop_text {
            color: #707070;
            font-size: 18px;
            line-height: 2;
        }

        .shop_text1 {
            font-size: 20px;
            color: #cc543a;
            font-weight: bold;
            text-decoration: underline;

        }

        .shop_text2 {
            font-size: 22px;
            font-weight: bold;
            color: #cc543a;
        }

        .shop_text3 {
            color: #707070;
            font-size: 18px;
            font-weight: bold;

        }

        .shop_title {
            font-size: 26px;
            font-weight: bold;
            color: #707070;


        }

        .shop_title li {
            font-size: 20px;
            font-weight: bold;
            line-height: 2;
        }

        .shop_title div {
            font-size: 18px;
            font-weight: normal;
            line-height: 1.8;
        }


        .shop_input_qty {
            width: 140px;
            font-size: 26px;
        }


        .shop_input_qty .form-control {
            background: transparent;
            text-align: center;
            border: none;
            font-weight: bold;
            font-size: 18px;
            color: #707070;
        }

        .shop_input_qty .input-group {
            background-color: #fff;
            border: 1px solid #C1C1C1;
            border-radius: 5px;
        }

        .shop_re_text {
            font-size: 20px;
        }

        .shop_re_img {
            position: relative;
            border-radius: 5px;
            overflow: hidden;
        }

        .shop_fixed_bottom {
            background-color: #CC543A;
            color: #fff;
            text-align: center;
            font-size: 18px;
            font-weight: bold;

        }


        .shop_fixed_bottom1 {
            width: 50%;

        }

        .shop_fixed_bottom1 span {
            display: none;
}

        .shop_fixed_bottom1.active span {
            display: inline;
}

        .shop_fixed_bottom_line {
            width: 1px;
            background-color: #fff;

        }

        .shop_re_more {
            display: none;
        }

        .shop_re_img:hover .shop_re_more {
            display: flex;
            justify-content: center;
            position: absolute;
            top: 0;
            left: 0;
            background-color: rgb(0, 0, 0, 0.5);
            width: 100%;
            height: 100%;
        }

        .shop_re_more div {
            color: #fff;
            border-bottom: 1px solid #AFAFAF;
            width: 60%;
            text-align: center;
        }

        .shop_scrolling_wrapper .shop_re_img:hover img {
            transform: scale(1.1, 1.1);
        }

        #carouselHotControls i {
            font-size: 20px;
            color: #707070;
        }

        .carousel-control-prev {
            left: -110px;
        }

        .carousel-control-next {
            right: -110px;
        }

        #carouselExampleIndicators li {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            /* background-color: #c0c0c0; */

        }

        @media (min-width: 992px) {
            .shop_container {
                width: 1400px;
            }
        }

        @media (max-width: 991px) {
            h3 {
                font-size: 24px;
            }


            .shop_title li {
                font-size: 18px;
                line-height: 2;
            }

            .shop_title div {
                font-size: 16px;
                line-height: 2;
            }

            .shop_re_text {
                font-size: 14px;
            }

            .shop_scrolling_wrapper {
                overflow-x: auto;
            }

            footer {
                display: none;
            }

        }
    </style>


    <input type="hidden" name="shop_price" id="shop_price" value="<?=$shop['price']?>">
    <input type="hidden" name="shop_id" id="shop_id" value="<?=$shop['id']?>">
    <input type="hidden" name="shop_name" id="shop_name" value="<?=$shop['title1']?>">
    <input type="hidden" name="shop_name1" id="shop_name1" value="<?=$shop['title2']?>">
    <input type="hidden" name="shop_image" id="shop_image" value="<?=$shop['img1']?>">


    <div class="breadcrumb_style backgroundimg_1">
        <div class="d-flex flex-wrap breadcrumb_style_1 ">
            <a href="index.php" class="astlyep">首頁</a>
            <!-- 共用雲端找箭頭icon-->
            <img src="./img/nav_arrow_right.svg">
            <a href="shop.php" class="astlyep">祈福商店</a>
            <img src="./img/nav_arrow_right.svg">
            <P class="astlyep mt-3"><?=$shop['title1']?></P>

        </div>
    </div>
    
    <div class="shop_container container-fluid px-lg-5 ">
        <div class="row">
            <div id="carouselExampleIndicators" class="carousel slide d-lg-none" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="img/<?=$shop['img2']?>" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/<?=$shop['img3']?>" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/<?=$shop['img4']?>" alt="Third slide">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-7 shop_title_img  d-lg-flex pl-0 d-none">
                <div class="col-3 shop_imghover row justify-content-between no-gutters">
                    <div class="col-12"><img src="img/<?=$shop['img2']?>" width="100%"></div>
                    <div class="col-12 d-flex align-items-center"><img src="img/<?=$shop['img3']?>" width="100%"></div>
                    <div class="col-12 d-flex align-items-end"><img src="img/<?=$shop['img4']?>" width="100%"></div>
                </div>
                <div class="col-9 pl-2 ">
                    <div><img id="shop_imgclick" src="img/<?=$shop['img2']?>" width="100%"></div>
                </div>
            </div>
            <div class="col-lg-5">
                <div
                    class="shop_like_mobile position-absolute d-flex justify-content-center align-items-center d-lg-none <?=($shop['fav']!=0)?"active":""?>" data-id="<?=$shop['id']?>">
                    <i class="far fa-heart"></i>
                </div>
                <h3 class="shop_titletext mt-lg-0 mt-4"><?=$shop['title1']?></h3>
                <h3 class="shop_titletext pt-2"><?=$shop['title2']?></h3>
                <div class="shop_text1 py-4"></div>
                <div class=" shop_text pb-5"><?=$shop['summary']?>
                </div>
                <div class="d-flex d-lg-block justify-content-between">
                    <div class="shop_text2  py-lg-2">NTD <?=number_format($shop['price'],0,".",",")?>元 </div>
                    <div class=" d-flex justify-content-start align-items-center">
                        <div class="shop_text3 px-3 py-lg-4 px-lg-0">數量</div>
                        <div class="shop_input_qty pb-2 pb-lg-2 pl-lg-4">
                            <input style="background-color: #fff;" id="shop_qty" type="text" value="" name="demo3">
                        </div>
                    </div>
                </div>
                <div class="shop_fixed_bottom w-100 d-flex justify-content-between p-2 fixed-bottom d-lg-none ">
                    <div class="shop_fixed_bottom1 py-2 add_cart_mobile"><i class="fas fa-shopping-cart px-2"
                            style="color: #fff;"></i><span>已</span>加入購物車
                    </div>
                    <div class="shop_fixed_bottom_line"></div>
                    <div class="shop_fixed_bottom1 py-2"onclick="location.href='cart.php';">前往結帳</div>
                </div>
                <div class="d-none d-lg-flex justify-content-end pt-3 ">
                    <div class="mybtn_like mr-3 <?=($shop['fav']!=0)?"active":""?>" data-id="<?=$shop['id']?>" data-toggle="mybtn"></div>
                    <div class="mybtn_cart_add" data-toggle="mybtn"></div>
                </div>
            </div>
        </div>
        <div class="row pt-lg-5 pt-2 px-lg-0">
            <div class="shop_title col-lg-7 col-12 pt-5 pt-lg-3 ">Features / 商品特色
                <div class="pt-4"><?=$shop['feature']?>
                </div>
            </div>
            <ul class="shop_title col-lg-5  col-12 pt-5 pt-lg-3 pl-lg-5">Description / 商品描述
                <li class="pt-4">內容物 |</li>
                <div class="pb-2"><?=$shop['contents']?></div>
                <li>尺寸 |</li>
                <div class="pb-2"><?=$shop['size']?></div>
                <li>材質 |</li>
                <div class="pb-2">
                    <?=$shop['material']?>
                </div>
                <li>產地 |</li>
                <div><?=$shop['origin']?></div>
            </ul>

        </div>
        <div class="row">
            <div class="shop_title pt-5 col-lg-12 mx-lg-0 ">Related Product / 相關商品</div>
        </div>
        <div class="row pt-5 pb-5 shop_scrolling_wrapper flex-nowrap flex-row d-flex-block d-lg-none">
<?php
    foreach($hot_shops as $shop_item) {
?>
            <div class="col-lg-3 col-5 mb-5">
                <div class="shop_re_img mb-2">
                    <img src="img/<?=$shop_item['img1']?>" width="100%" />
                    <a href="shop_page.php?id=<?=$shop_item['id']?>"><div class="shop_re_more">
                    </div></a>
                </div>
                <div class="shop_re_text"><?=$shop_item['title2']?></div>
            </div>
            <?php
}
?>
            <!-- <div class="col-lg-3 col-5 mb-5">
                <div class="shop_re_img mb-2">
                    <img src="img/013.png" width="100%" />
                    <div class="shop_re_more">
                    </div>
                </div>
                <div class="shop_re_text">藝術廟宇戒指</div>
            </div>
            <div class="col-lg-3 col-5 mb-5">
                <div class="shop_re_img mb-2">
                    <img src="img/011.png" width="100%" />
                    <div class="shop_re_more">
                    </div>
                </div>
                <div class="shop_re_text">媽祖胸針 by </div>
            </div>
            <div class="col-lg-3 col-5 mb-5">
                <div class="shop_re_img mb-2">
                    <img src="img/013.png" width="100%" />
                    <div class="shop_re_more">
                    </div>
                </div>
                <div class="shop_re_text">藝術廟宇戒指</div>
            </div> -->
        </div>
        <div class="my-5 shop_scrolling_wrapper flex-nowrap flex-row d-none d-lg-block">
            <div id="carouselHotControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner container-fluid px-0 ">
<?php
foreach($pc_hot_shops as $key => $group) {
?>   
                 <div class="carousel-item <?=($key==0)?'active':''?>">
                        <div class="row">
<?php
    foreach($group as $shop_item) {
?>                  
                            <div class="col-lg-3">
                                <div class="shop_re_img mb-2">
                                    <img src="img/<?=$shop_item['img1']?>" width="100%" />
                                    <a href="shop_page.php?id=<?=$shop_item['id']?>"><div class="shop_re_more"></div></a>
                                </div>
                                <div class="shop_re_text pt-1 text-center"><?=$shop_item['title2']?></div>
                            </div>
<?php
    }
?>
                       </div>
                  </div>
<?php
}
?>

                            <!-- <div class="col-lg-3">
                                <div class="shop_re_img mb-2">
                                    <img src="img/013.png" width="100%" />
                                    <div class="shop_re_more">
                                    </div>
                                </div>
                                <div class="shop_re_text pt-1">藝術廟宇戒指</div>
                            </div>
                            <div class="col-lg-3">
                                <div class="shop_re_img mb-2">
                                    <img src="img/011.png" width="100%" />
                                    <div class="shop_re_more">
                                    </div>
                                </div>
                                <div class="shop_re_text pt-1">媽祖胸針 </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="shop_re_img mb-2">
                                    <img src="img/013.png" width="100%" />
                                    <div class="shop_re_more">
                                    </div>
                                </div>
                                <div class="shop_re_text pt-1">藝術廟宇戒指</div>
                            </div> -->
                    <!-- <div class="carousel-item">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="shop_re_img mb-2">
                                    <img src="img/011.png" width="100%" />
                                    <div class="shop_re_more">
                                    </div>
                                </div>
                                <div class="shop_re_text pt-1">媽祖胸針</div>
                            </div>
                            <div class="col-lg-3">
                                <div class="shop_re_img mb-2">
                                    <img src="img/013.png" width="100%" />
                                    <div class="shop_re_more">
                                    </div>
                                </div>
                                <div class="shop_re_text pt-1">藝術廟宇戒指</div>
                            </div>
                            <div class="col-lg-3">
                                <div class="shop_re_img mb-2">
                                    <img src="img/011.png" width="100%" />
                                    <div class="shop_re_more">
                                    </div>
                                </div>
                                <div class="shop_re_text pt-1">媽祖胸針 </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="shop_re_img mb-2">
                                    <img src="img/013.png" width="100%" />
                                    <div class="shop_re_more">
                                    </div>
                                </div>
                                <div class="shop_re_text pt-1">藝術廟宇戒指</div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row ">
                            <div class="col-lg-3">
                                <div class="shop_re_img mb-2">
                                    <img src="img/011.png" width="100%" />
                                    <div class="shop_re_more">
                                    </div>
                                </div>
                                <div class="shop_re_text pt-1">媽祖胸針 </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="shop_re_img mb-2">
                                    <img src="img/013.png" width="100%" />
                                    <div class="shop_re_more">
                                    </div>
                                </div>
                                <div class="shop_re_text pt-1">藝術廟宇戒指</div>
                            </div>
                            <div class="col-lg-3">
                                <div class="shop_re_img mb-2">
                                    <img src="img/011.png" width="100%" />
                                    <div class="shop_re_more">
                                    </div>
                                </div>
                                <div class="shop_re_text pt-1">媽祖胸針 </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="shop_re_img mb-2">
                                    <img src="img/013.png" width="100%" />
                                    <div class="shop_re_more">
                                    </div>
                                </div>
                                <div class="shop_re_text pt-1">藝術廟宇戒指</div>
                            </div>

                        </div>
                    </div> -->
                </div>
                <a class="carousel-control-prev" href="#carouselHotControls" role="button" data-slide="prev">
                    <i class="fas fa-chevron-left"></i>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselHotControls" role="button" data-slide="next">
                    <i class="fas fa-chevron-right"></i>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

    </div>

<!-- 導航用代碼包含彈窗 -->
<?php include __DIR__ . '/parts/ourscripts.php'; ?>


    <script>
         // 增加千分位的函式
        Number.prototype.numberFormat = function (c, d, t) {
            var n = this,
                c = isNaN(c = Math.abs(c)) ? 2 : c,
                d = d == undefined ? "." : d,
                t = t == undefined ? "," : t,
                s = n < 0 ? "-" : "",
                i = String(parseInt(n = Math.abs(Number(n) || 0).toFixed(c))),
                j = (j = i.length) > 3 ? j % 3 : 0;
            return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
        };

        $("input[name='demo3']").TouchSpin({
            initval: 1,
            min: 1,
            max: 99,
            step: 1,
            decimals: 0,
            buttondown_class: 'btn btn-default',
            buttonup_class: 'btn btn-default'
        });

        $(".shop_title_img .shop_imghover img").click(function () {
            $("#shop_imgclick").attr("src", $(this).attr("src"))


        });

        $(".mybtn_like, .shop_like_mobile").click(function () {
            let btn = this;
            $.ajax({
                type: "POST",
                url: 'shop_api.php',
                data: {
                    op: 'toggle_fav',
                    id: $(btn).data('id')
                },
                success: function(data){
                    if(data.code == 200) {
                        $(btn).toggleClass("active");
                    } else {
                        alert(data.info);
                    }
                },
                dataType: 'json'
            });
        });

        // 加入購物車_PC
        $('.mybtn_cart_add').click(function(){
            if($(this).hasClass('active')) {
                return;
            }
            var btn = this;

            $.ajax({
                type: "POST",
                url: 'shop_api.php',
                data: {
                    op: "add_cart",
                    id: $('#shop_id').val(),
                    name: $('#shop_name').val(),
                    name1: $('#shop_name1').val(),
                    image: $('#shop_image').val(),
                    qty: $('#shop_qty').val(),
                    price: $('#shop_price').val(),
                },
                success: function(data){
                    if(data.code == 200) {
                        $(btn).toggleClass("active");
                    } else {
                        alert(data.info);
                    }
                },
                dataType: 'json'
            });
        });

        // 加入購物車_mobile
        $('.add_cart_mobile').click(function(){
            if($(this).hasClass('active')) {
                return;
            }
            var btn = this;


            $.ajax({
                type: "POST",
                url: 'shop_api.php',
                data: {
                    op: "add_cart",
                    id: $('#shop_id').val(),
                    name: $('#shop_name').val(),
                    name1: $('#shop_name1').val(),
                    image: $('#shop_image').val(),
                    qty: $('#shop_qty').val(),
                    price: $('#shop_price').val(),
                },
                success: function(data){
                    if(data.code == 200) {
                        $(btn).toggleClass("active");
                    } else {
                        alert(data.info);
                    }
                },
                dataType: 'json'
            });
        });
        
        
        


    </script>

<?php include __DIR__. '/parts/html-foot.php'; ?>
