<?php

require __DIR__ . "/parts/config.php";
$_gdata = [
    // 網頁名稱
    'title' => '灣廟 | 祈福商店', 
    // 頁面私有 css
    'styles' => '
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/11.0.2/css/bootstrap-slider.min.css"
    integrity="sha512-3q8fi8M0VS+X/3n64Ndpp6Bit7oXSiyCnzmlx6IDBLGlY5euFySyJ46RUlqIVs0DPCGOypqP8IRk/EyPvU28mQ=="
    crossorigin="anonymous" />
    <link rel="stylesheet" href="' . WEB_ROOT . '/css/breadcrumb.css">
    <link rel="stylesheet" href="' . WEB_ROOT . '/css/navbar2.css">',
    //頁面私有 scripts
    'scripts' => '
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/11.0.2/bootstrap-slider.min.js"
        integrity="sha512-f0VlzJbcEB6KiW8ZVtL+5HWPDyW1+nJEjguZ5IVnSQkvZbwBt2RfCBY0CBO1PsMAqxxrG4Di6TfsCPP3ZRwKpA=="
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>', 
];

$default_price = 2800;
$default_cat2 = '熱門商品';

$shop_order = isset($_GET['o'])?$_GET['o']:"";
$cat1 = isset($_GET['cat1'])?$_GET['cat1']:"";
$keyword = isset($_GET['keyword'])?$_GET['keyword']:"";
if(!$cat1 && !$keyword) {
    $cat2 = isset($_GET['cat2'])?$_GET['cat2']:$default_cat2;
} else {
    $cat2 = "";
}
$price = isset($_GET['price'])?$_GET['price']:$default_price;
$wheres = [];
if(!$cat1 && !$keyword) {
    if (isset($_GET['cat2']) && $_GET['cat2']) {
        $wheres[] = "cat2 = '".$_GET['cat2']."'";
    } else {
        $wheres[] = "cat2 = '".$default_cat2."'";
    }
} 
if (isset($_GET['price']) && $_GET['price']) {
    $wheres[] = "price <= '".$_GET['price']."'";
} else {
    $wheres[] = "price <= '".$default_price."'";
}

if (isset($_GET['cat1']) && $_GET['cat1']) {
    $wheres[] = "cat1 = '".$_GET['cat1']."'";
}
if (isset($_GET['keyword']) && $_GET['keyword']) {
    $wheres[] = "title2 like '%".$_GET['keyword']."%'";
}
$where = " WHERE ". join(" AND ", $wheres);

$orderby = "ORDER BY hot DESC, id ASC";

if (isset($_GET['o']) && $_GET['o'] == 'price') {
    $orderby = "ORDER BY ".$_GET['o']." ASC";
} else if (isset($_GET['o']) && $_GET['o']) {
    $orderby = "ORDER BY ".$_GET['o']." DESC";
}



//分頁算法
$page = (isset($_GET['page']) && $_GET['page'])?$_GET['page']:1;

//當前頁數
$per_page = 6; //一頁幾筆
$sql = "SELECT COUNT(0) FROM shops {$where} ";
$total = $pdo->query($sql)->fetch(PDO::FETCH_NUM)[0]; //總筆數
$total_pages = ceil($total / $per_page); //總頁數


//如果筆數非大於0則頁數為1
if($total_pages > 0) {
    $page = ($page > $total_pages)?$total_pages:$page;
} else {
    $page = 1;
}
$limit = sprintf("LIMIT %s, %s", ($page - 1)*$per_page, $per_page);
$member_sid = isset($_SESSION['user'])?$_SESSION['user']['sid']:0;
//組合SQL(查詢)
//SELECT * FROM shops ORDER BY hot DESC LIMIT 0, 6
//SELECT * FROM shops ORDER BY hot DESC LIMIT 6, 6
//SELECT * FROM shops ORDER BY hot DESC LIMIT 12, 6
$sql = "SELECT *, IFNULL(f.sid, 0) as fav 
FROM shops as s
LEFT JOIN fav_pdc as f ON s.id = f.pdc_sid and f.member_sid = ?
 {$where} {$orderby} {$limit}"; //組合SQL指令
$stmt = $pdo->prepare($sql);
$stmt->execute([$member_sid]);
$shops = $stmt->fetchAll(PDO::FETCH_ASSOC);
// 取分頁連結
function getPageLink($page) {
    parse_str($_SERVER['QUERY_STRING'], $data); 
    $data['page'] = $page;
    return "shop.php?" . http_build_query($data);
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
            color: #707070;
            font-size: 16px;
        }

        h3 {
            font-size: 24px;
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


        .shop_search {
            border-bottom: 2px solid #c0c0c0;
            font-size: 24px;
        }

        .shop_search input {
            font-size: 20px;
            color: #707070;
        }

        .shop_search i {
            font-size: 24px;
            color: #c0c0c0;
            position: absolute;
            right: 0px;
            top: 15px;
        }

        .shop_category a{
            color: #707070;
        }

        .shop_category ul li a{
            font-size: 20px;
        }

        .shop_category ul li ul li a{
            font-weight: normal;
        }

        .shop_category ul li a:hover,
        .shop_category ul li a.active{
            font-weight: bold;
            text-decoration:none;
        }

        #shop_price_range .slider-selection {
            background: #cc543a;
        }

        #shop_price_range .slider-handle {
            border: 5px solid #cc543a;
            background: #FFF;
        }

        #shop_price_range .arrow {
            display: none;
        }

        #shop_price_range .tooltip-inner {
            font-family: 'Sitka Display', NSimSun, 'sans-serif';
            font-size: 20px;
            padding: 0;
            color: #000;
            background-color: transparent;
        }

        .shop_sort {
            font-size: 20px;
            color: #707070;
        }

        .shop_sort select {
            font-size: 20px;
            border-radius: 5px;
            color: #707070;
        }

        .shop_like {
            width: 42px;
            height: 42px;
            border: 2px solid #cc543a;
            background-color: #FFF;
            border-radius: 50%;
            top: 0;
            right: 10px;
        }

        .shop_like i {
            font-size: 26px;
            color: #cc543a;
        }

        .shop_like .fas {
            font-size: 20px;
            color: #FFF;
        }

        .shop_like.active {
            background-color: #cc543a;
        }

        .shop_like.active i {
            font-weight: 900;
            font-size: 20px;
            color: #FFF;
        }

        .shop_re_img {
            position: relative;
            width: 100%;
            overflow: hidden;
            border-radius: 5px 5px 0px 0px;
        }

        .shop_re_card {
            background-color: #fff;
            border-radius: 0px 0px 5px 5px;
            overflow: hidden;
        }

        .shop_re_img_card {
            border-radius: 5px;

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

        .shop_re_card {
            background-color: #fff;
        }

        .shop_re_text {
            font-weight: bold;
            font-size: 22px;
        }

        .shop_re_text1 {
            font-size: 16px;

        }

        .shop_re_price {
            font-size: 22px;
        }

        .shop_page_item {
            color: #707070;
            font-size: 24px;
            background-color: transparent;
            padding: .5rem 1rem;
            border: 1px solid #cdcdcd;
        }

        .shop_page_item:hover,
        .shop_page_item.active {
            background-color: #c0c0c0;
            color: #FFF;
            font-weight: bold;
        }


        .shop_page_item1 {
            color: #707070;
            font-size: 24px;
            background-color: transparent;
        }

        .shop_page_item1:focus {
            background-color: #c0c0c0;
            color: #FFF;
            font-weight: bold;
        }


        .shop_re_more {
            display: none;
        }



        .shop_scrolling_wrapper .shop_re_img:hover img {
            transform: scale(1.1, 1.1);
        }

        select.shop_item_body_more {
            align-items: right;
            text-align: center;
            text-align-last: center;
        }

        .shop_item_body_more {
            border: none;
            border-radius: 50px;
            font-size: 18px;
            color: #707070;
            font-weight: bold;
            padding: 8px 20px;

        }

        .shop_price_txt {
            font-size: 24px;
            font-weight: bold;
        }

        .shop_price_txt_mobile {
            font-size: 20px;
            font-weight: bold;

        }
        .shop_price_mobile{
            margin: auto;
        }

        .shop_price_mobile .card {
            border-radius: 20px;
            background-color: #fff;
        }

        .shop_price_mobile .slider {
            width: 270px;
        }

        #shop_price_range .slider-selection {
            background: #cc543a;
        }

        #shop_price_range .slider-handle {
            border: 5px solid #cc543a;
            background: #FFF;
        }

        #shop_price_range .arrow {
            display: none;
        }

        #shop_price_range .tooltip-inner {
            font-family: 'Sitka Display', NSimSun, 'sans-serif';
            font-size: 20px;
            padding: 0;
            color: #000;
            background-color: transparent;
        }
        
        .shop_scrolling_wrapper{
            font-weight: bold;
        }

        .shop_result {
            font-size: 18px;
            font-weight: bold;
        }

        @media (min-width: 992px) {
            .shop_container {
                width: 1400px;
            }

            .shop_like:hover i {
                font-weight: 900;
                font-size: 25px;
                color: #cc543a;
            }

            .shop_like.active i {
                color: #fff;
                font-size: 25px;
            }

            .shop_body_bg {
                position: relative;
                margin-top: 30px;
            }

            .shop_body_bg:before {
                content: '';
                display: block;
                width: 208px;
                height: 386px;
                position: absolute;
                bottom: 300px;
                left: 300px;
                background-size: cover;
                background-image: url(img/nav_shop.png);
                opacity: 0.39;
            }

            .shop_scrolling_wrapper{
                min-height: 600px;
            }
        }

        .slider .tooltip {
            z-index: 8;
        }


        @media (max-width: 991px) {
            .shop_like {
                width: 30px;
                height: 30px;
                font-size: 18px;
                color: #cc543a;
            }

            .shop_like i {
                font-size: 18px;
            }

            .shop_like .fas {
                font-size: 18px;
            }

            .shop_like.active {
                background-color: #cc543a;
            }

            .shop_like.active i {
                font-size: 16px;
            }

            .shop_scrolling_wrapper {
                overflow-x: auto;
            }

            .shop_re_text {
                font-size: 18px;
            }

            .shop_re_text1 {
                font-size: 16px;
            }

            .shop_re_price {
                font-size: 18px;
            }    

        }

    </style>

    <div class="breadcrumb_style backgroundimg_1">
        <div class="d-flex flex-wrap breadcrumb_style_1 ">
            <a href="index.php" class="astlyep">首頁</a>
            <!-- 共用雲端找箭頭icon-->
            <img src="./img/nav_arrow_right.svg">
            <p class="astlyep mt-3">祈福商店</a>
        </div>
    </div>
    
    <div class="container-fluid shop_body_bg">
        <div class="shop_container container-fluid px-lg-5 px-3 px-0">
            <div class="d-flex justify-content-between mb-2 d-lg-none">
                <select class="shop_item_body_more shadow bg-white text-center <?=($cat2||$cat1)?'active':''?>" id="exampleFormControlSelect1">
                    <option>商品分類</option>
                    <option value="飾品" <?=($cat1=='飾品')?'selected':''?>>飾品</option>
                    <option value="擺飾" <?=($cat1=='擺飾')?'selected':''?>>擺飾</option>
                    <option value="平安符"<?=($cat1=='平安符')?'selected':''?>>平安符</option>
                    <option value="聯名合作"<?=($cat2=='聯名合作')?'selected':''?>>聯名合作</option>
                    <option value="熱門商品"<?=($cat2=='熱門商品')?'selected':''?>>熱門商品</option>
                </select>
                <div class="shop_item_body_more shadow bg-white d-flex align-items-center justify-content-center"
                    data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false"
                    aria-controls="collapseExample">
                    價錢範圍
                </div>
            </div>
            <div class="row d-block d-lg-none">
                <div class="collapse shop_price_mobile" id="collapseExample">
                    <div class="card card-body">
                        <ul>
                            <li class="py-1">
                                <div class="shop_price_txt_mobile">價錢範圍</div>
                                <div><input class="shop_price_range_mobile" id="ex8" data-slider-id='shop_price_range'
                                        type="text" data-slider-min="200" data-slider-max="5000" data-slider-step="200"
                                        data-slider-value="<?=$price?>" /></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-3 d-none d-lg-block">
                    <div style="max-width:210px;">
                        <div class="shop_search position-relative mb-5">
                            <input type="text" class="form-control border-0 bg-transparent px-1"
                                id="keyword" placeholder="找商品..">
                            <i class="fa fa-search fa-lg"></i>
                        </div>
                        <div class="d-none">
                            <div class="rounded-circle"><i class="far fa-heart rounded-circle p-2"
                                    style="background-color: #FFF; color:red;"></i></div>
                        </div>
                        <div class="shop_category">
                            <h3 class="py-2">商品分類 |</h3>
                            <ul>
                                <li class="py-1"><a <?=(isset($_GET['cat1']) && $_GET['cat1'] == '飾品')?'class="active"':''?>href="shop.php?cat1=飾品">飾品</a></li>
                                <li class="py-1"><a <?=(isset($_GET['cat1']) && $_GET['cat1'] == '擺飾')?'class="active"':''?>href="shop.php?cat1=擺飾">擺飾</a></li>
                                <li class="py-1"><a <?=(isset($_GET['cat1']) && $_GET['cat1'] == '平安符')?'class="active"':''?>href="shop.php?cat1=平安符">平安符</a></li>
                                <li class="py-1"><a <?=($cat2 == '聯名合作')?'class="active"':''?>href="shop.php?cat2=聯名合作">聯名合作</a></li>
                                <li class="py-1"><a <?=($cat2 == '熱門商品')?'class="active"':''?>href="shop.php?cat2=熱門商品">熱門商品</a></li>
                            </ul>
                            <ul>
                                <li class="py-1">
                                    <h3 class="shop_price_txt">價錢範圍 |</h3>
                                    <div><input class="shop_price_range" id="ex8" data-slider-id='shop_price_range'
                                            type="text" data-slider-min="200" data-slider-max="5000"
                                            data-slider-step="200" data-slider-value="<?=$price?>" /></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="d-lg-flex justify-content-end d-none d-lg-block">
                        <div class="shop_sort d-flex justify-content-end mb-5 ">
                            <div class="form-inline">
                                <label class="pr-3" for="exampleFormControlSelect1">排序方式</label>
                                <select class="form-control bg-transparent" id="shop_order">
                                    <option value="hot" <?=($shop_order=='hot')?'selected':''?>>熱門商品</option>
                                    <option value="created_at" <?=($shop_order=='created_at')?'selected':''?>>最新商品</option>
                                    <option value="price" <?=($shop_order=='price')?'selected':''?>>價格(從低到高)</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row shop_scrolling_wrapper">
                    <?php

if(count($shops) > 0) {
    foreach($shops as $shop){
?>
                       <div class="shop_card col-lg-4 col-6 mt-4 mt-lg-0 px-lg-3 px-2">
                            <div class="shop_re_img_card shadow ">
                                <div class="shop_re_img">
                                    <img src="img/<?=$shop['img1']?>" width="100%" />
                                    <a href="shop_page.php?id=<?=$shop['id']?>"><div class="shop_re_more"></div></a>
                                </div>
                                <div class="shop_re_card mb-lg-5 mb-0">
                                    <div class="shop_re_text pt-lg-2 pl-lg-3 p-2"><?=$shop['title1']?>
                                    </div>
                                    <div class="shop_re_text1 pl-lg-3 px-2"><?=$shop['title2']?></div>
                                    <div class="shop_re_price pl-lg-3 pb-lg-2 pb-2 px-2"><span>NTD <?=number_format($shop['price'],0,".",",")?></span>元</div>
                                </div>
                            </div>
                            <div
                                class="shop_like position-absolute d-flex justify-content-center align-items-center mt-lg-2 mr-lg-3 mr-1 mt-1 <?=($shop['fav']!=0)?"active":""?>" data-id="<?=$shop['id']?>">
                                <i class="far fa-heart"></i>
                            </div>
                        </div>
<?php
    }
} else { 
?>
<div class="shop_result text-center w-100"data-aos="fade-up" data-aos-duration="2000">不好意思，我們沒有找到相關的商品。</div>
                       
<?php
}
?>
                     

                        
              </div>
                        <!-- <div class="col-lg-4 col-6 mt-4 mt-lg-0">
                            <div class="shop_re_img_card shadow">
                                <div class="shop_re_img">
                                    <img src="/img/011.png" width="100%" />
                                    <div class="shop_re_more">
                                    </div>
                                </div>
                                <div class="shop_re_card mb-4">
                                    <div class="shop_re_text pt-2 pl-3">媽祖胸針
                                    </div>
                                    <div class="shop_re_text1 pl-3">Charlene 創作 </div>
                                    <div class="pb-3 shop_re_price pl-3"><span>NTD 250</span>元</div>
                                </div>
                            </div>
                            <div
                                class="shop_like position-absolute d-flex justify-content-center align-items-center mr-lg-4 mt-lg-2 mr-3 mt-1">
                                <i class="far fa-heart"></i>
                            </div>
                        </div>
                        <div class="col-lg-4 col-6 mt-4 mt-lg-0">
                            <div class="shop_re_img_card shadow ">
                                <div class="shop_re_img">
                                    <img src="/img/013.png" width="100%" />
                                    <div class="shop_re_more">
                                    </div>
                                </div>
                                <div class="shop_re_card mb-4 ">
                                    <div class="shop_re_text pt-2 pl-3">藝術廟宇戒指
                                    </div>
                                    <div class="shop_re_text1 pl-3">TIMBEE 限量版 </div>
                                    <div class="pb-3 shop_re_price pl-3"><span>NTD 1,109</span>元</div>
                                </div>
                            </div>
                            <div
                                class="shop_like position-absolute d-flex justify-content-center align-items-center mr-lg-4 mt-lg-2 mr-3 mt-1">
                                <i class="far fa-heart"></i>
                            </div>
                        </div>
                        <div class="col-lg-4 col-6 mt-4 mt-lg-0">
                            <div class="shop_re_img_card shadow">
                                <div class="shop_re_img">
                                    <img src="/img/011.png" width="100%" />
                                    <div class="shop_re_more">
                                    </div>
                                </div>
                                <div class="shop_re_card mb-4">
                                    <div class="shop_re_text pt-2 pl-3">媽祖胸針
                                    </div>
                                    <div class="shop_re_text1 pl-3">Charlene 創作 </div>
                                    <div class="pb-3 shop_re_price pl-3"><span>NTD 250</span>元</div>
                                </div>
                            </div>
                            <div
                                class="shop_like position-absolute d-flex justify-content-center align-items-center mr-lg-4 mt-lg-2 mr-3 mt-1">
                                <i class="far fa-heart"></i>
                            </div>
                        </div>
                        <div class="col-lg-4 col-6 mt-4 mt-lg-0">
                            <div class="shop_re_img_card shadow ">
                                <div class="shop_re_img">
                                    <img src="/img/013.png" width="100%" />
                                    <div class="shop_re_more">
                                    </div>
                                </div>
                                <div class="shop_re_card mb-4 ">
                                    <div class="shop_re_text pt-2 pl-3">藝術廟宇戒指
                                    </div>
                                    <div class="shop_re_text1 pl-3">TIMBEE 限量版 </div>
                                    <div class="pb-3 shop_re_price pl-3"><span>NTD 1,109</span>元</div>
                                </div>
                            </div>
                            <div
                                class="shop_like position-absolute d-flex justify-content-center align-items-center mr-lg-4 mt-lg-2 mr-3 mt-1">
                                <i class="far fa-heart"></i>
                            </div>
                        </div>
                        <div class="col-lg-4 col-6 mt-4 mt-lg-0">
                            <div class="shop_re_img_card shadow">
                                <div class="shop_re_img">
                                    <img src="/img/011.png" width="100%" />
                                    <div class="shop_re_more">
                                    </div>
                                </div>
                                <div class="shop_re_card mb-4">
                                    <div class="shop_re_text pt-2 pl-3">媽祖胸針
                                    </div>
                                    <div class="shop_re_text1 pl-3">Charlene 創作 </div>
                                    <div class="pb-3 shop_re_price pl-3"><span>NTD 250</span>元</div>
                                </div>
                            </div>
                            <div
                                class="shop_like position-absolute d-flex justify-content-center align-items-center mr-lg-4 mt-lg-2 mr-3 mt-1">
                                <i class="far fa-heart"></i>
                            </div>
                        </div>
                        <div class="col-lg-4 col-6 mt-4 mt-lg-0">
                            <div class="shop_re_img_card shadow ">
                                <div class="shop_re_img">
                                    <img src="/img/013.png" width="100%" />
                                    <div class="shop_re_more">
                                    </div>
                                </div>
                                <div class="shop_re_card mb-4 ">
                                    <div class="shop_re_text pt-2 pl-3">藝術廟宇戒指
                                    </div>
                                    <div class="shop_re_text1 pl-3">TIMBEE 限量版 </div>
                                    <div class="pb-3 shop_re_price pl-3"><span>NTD 1,109</span>元</div>
                                </div>
                            </div>
                            <div
                                class="shop_like position-absolute d-flex justify-content-center align-items-center mr-lg-4 mt-lg-2 mr-3 mt-1">
                                <i class="far fa-heart"></i>
                            </div>
                        </div>
                        <div class="col-lg-4 col-6 mt-4 mt-lg-0">
                            <div class="shop_re_img_card shadow">
                                <div class="shop_re_img">
                                    <img src="/img/011.png" width="100%" />
                                    <div class="shop_re_more">
                                    </div>
                                </div>
                                <div class="shop_re_card mb-4">
                                    <div class="shop_re_text pt-2 pl-3">媽祖胸針
                                    </div>
                                    <div class="shop_re_text1 pl-3">Charlene 創作 </div>
                                    <div class="pb-3 shop_re_price pl-3"><span>NTD 250</span>元</div>
                                </div>
                            </div>
                            <div
                                class="shop_like position-absolute d-flex justify-content-center align-items-center mr-lg-4 mt-lg-2 mr-3 mt-1">
                                <i class="far fa-heart"></i>
                            </div>
                        </div>
                        <div class="col-lg-4 col-6 mt-4 mt-lg-0">
                            <div class="shop_re_img_card shadow ">
                                <div class="shop_re_img">
                                    <img src="/img/013.png" width="100%" />
                                    <div class="shop_re_more">
                                    </div>
                                </div>
                                <div class="shop_re_card mb-4 ">
                                    <div class="shop_re_text pt-2 pl-3">藝術廟宇戒指
                                    </div>
                                    <div class="shop_re_text1 pl-3">TIMBEE 限量版 </div>
                                    <div class="pb-3 shop_re_price pl-3"><span>NTD 1,109</span>元</div>
                                </div>
                            </div>
                            <div
                                class="shop_like position-absolute d-flex justify-content-center align-items-center mr-lg-4 mt-lg-2 mr-3 mt-1">
                                <i class="far fa-heart"></i>
                            </div>
                        </div>
                        <div class="col-lg-4 col-6 mt-4 mt-lg-0">
                            <div class="shop_re_img_card shadow">
                                <div class="shop_re_img">
                                    <img src="/img/011.png" width="100%" />
                                    <div class="shop_re_more">
                                    </div>
                                </div>
                                <div class="shop_re_card mb-4">
                                    <div class="shop_re_text pt-2 pl-3">媽祖胸針
                                    </div>
                                    <div class="shop_re_text1 pl-3">Charlene 創作 </div>
                                    <div class="pb-3 shop_re_price pl-3"><span>NTD 250</span>元</div>
                                </div>
                            </div>
                            <div
                                class="shop_like position-absolute d-flex justify-content-center align-items-center mr-lg-4 mt-lg-2 mr-3 mt-1">
                                <i class="far fa-heart"></i>
                            </div>
                        </div>
                        <div class="col-lg-4 col-6 mt-4 mt-lg-0">
                            <div class="shop_re_img_card shadow ">
                                <div class="shop_re_img">
                                    <img src="/img/013.png" width="100%" />
                                    <div class="shop_re_more">
                                    </div>
                                </div>
                                <div class="shop_re_card mb-4 ">
                                    <div class="shop_re_text pt-2 pl-3">藝術廟宇戒指
                                    </div>
                                    <div class="shop_re_text1 pl-3">TIMBEE 限量版 </div>
                                    <div class="pb-3 shop_re_price pl-3"><span>NTD 1,109</span>元</div>
                                </div>
                            </div>
                            <div
                                class="shop_like position-absolute d-flex justify-content-center align-items-center mr-lg-4 mt-lg-2 mr-3 mt-1">
                                <i class="far fa-heart"></i>
                            </div>
                        </div>
                        <div class="col-lg-4 col-6 mt-4 mt-lg-0">
                            <div class="shop_re_img_card shadow">
                                <div class="shop_re_img">
                                    <img src="/img/011.png" width="100%" />
                                    <div class="shop_re_more">
                                    </div>
                                </div>
                                <div class="shop_re_card mb-4">
                                    <div class="shop_re_text pt-2 pl-3">媽祖胸針
                                    </div>
                                    <div class="shop_re_text1 pl-3">Charlene 創作 </div>
                                    <div class="pb-3 shop_re_price pl-3"><span>NTD 250</span>元</div>
                                </div>
                            </div>
                            <div
                                class="shop_like position-absolute d-flex justify-content-center align-items-center mr-lg-4 mt-lg-2 mr-3 mt-1">
                                <i class="far fa-heart"></i>
                            </div>
                        </div> -->

                    


                </div>


            </div>
            <nav class="shop_page position-relative d-flex justify-content-end" aria-label="Page navigation example">
                <ul class="pagination mb-5 mt-3">
                <?php
                for($i=1;$i<=$total_pages;$i++) {
                ?> 
                   <li class="page-item"><a class="page-link shop_page_item <?=($page==$i)?'active':''?>"href="<?=getPageLink($i)?>"><?=$i?></a></li>
                <?php
                }
                ?>
                
                    <!-- <li class="page-item"><a class="page-link shop_page_item active" href="#">1</a></li>
                    <li class="page-item"><a class="page-link shop_page_item" href="#">2</a></li>
                    <li class="page-item"><a class="page-link shop_page_item" href="#">3</a></li>
                    <li class="page-item"><a class="page-link shop_page_item" href="#">4</a></li>
                    <li class="page-item"><a class="page-link shop_page_item" href="#">></a></li> -->
                </ul>
            </nav>
        </div>
    </div>
<!-- 導航用代碼包含彈窗 -->
<?php include __DIR__ . '/parts/ourscripts.php'; ?> 
  
    <script>
        AOS.init();
        var urlParams = new URLSearchParams(window.location.search);
        function slider_change() {
            let q = "?";
            if(urlParams.get('cat1')) {
                q += "cat1=" + urlParams.get('cat1');
            }
            else if(urlParams.get('cat2')) {
                q += "cat2=" + urlParams.get('cat2');
            }
            location.href="shop.php" + q +"&price=" + $(this).val();
        }


        $(".shop_price_range").slider({
            tooltip: 'always',
            tooltip_position: 'bottom',
        }).slider('setValue', urlParams.get('price')?urlParams.get('price'):2800).on('slideStop', slider_change);

        $(".shop_price_range_mobile").slider({
            tooltip: 'always',
            tooltip_position: 'bottom',
        }).slider('setValue', urlParams.get('price')?urlParams.get('price'):2800).on('slideStop', slider_change);

        $(".shop_like").click(function(){
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
                        console.log(data.info);
                    }
                },
                dataType: 'json'
            });
        });
        
        $(".shop_item_body_more").change(function () {
            if ($(this).val() > 0) {
                $(this).addClass('active');
            } else {
                $(this).removeClass('active');
            }
            if ($(this).val() == "飾品" || $(this).val() == "擺飾" || $(this).val() == "平安符") {
                location.href="shop.php?cat1=" + $(this).val()
            }

            if ($(this).val() == "聯名合作" || $(this).val()=="熱門商品") {
                  location.href="shop.php?cat2=" + $(this).val()
            }
        })

        $(".shop_search i").click(function(){
            location.href="shop.php?keyword=" + $('#keyword').val();
        })

        $('#keyword').val(urlParams.get('keyword'));

        $('#shop_order').change(function(){
            urlParams.delete("page");
            urlParams.set("o", $(this).val());
            location.href="shop.php?" + urlParams.toString();
        });

    </script>
<?php include __DIR__. '/parts/html-foot.php'; ?>