<?php
$title = "商品列表";
$pageName = "product-list";


require __DIR__ . "/parts/config.php";
$_gdata = [
    // 網頁名稱
    'title' => '灣廟 | 商品首頁',
    // 頁面私有 css
    'styles' => '
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/11.0.2/css/bootstrap-slider.min.css"
    integrity="sha512-3q8fi8M0VS+X/3n64Ndpp6Bit7oXSiyCnzmlx6IDBLGlY5euFySyJ46RUlqIVs0DPCGOypqP8IRk/EyPvU28mQ=="
    crossorigin="anonymous" />
    <link rel="stylesheet" href="' . WEB_ROOT . '/css/breadcrumb02.css">
    <link rel="stylesheet" href="' . WEB_ROOT . '/css/temple-shop_css-text.css">
    
    <link rel="stylesheet" href="' . WEB_ROOT . '/css/navbar2.css">',
    //頁面私有 scripts
    'scripts' => '
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/11.0.2/bootstrap-slider.min.js"
        integrity="sha512-f0VlzJbcEB6KiW8ZVtL+5HWPDyW1+nJEjguZ5IVnSQkvZbwBt2RfCBY0CBO1PsMAqxxrG4Di6TfsCPP3ZRwKpA=="
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>',
];

// $qs = [];
$searchString = "1 ";
$page = isset($_GET['page']) ? intval($_GET['page']) : 0;
if ($_GET != null) {
    unset($_GET['page']);
    foreach ($_GET as $key => $value) {
        if (
            strcmp($key, "key")    != 0 &&
            strcmp($key, "value")  != 0 &&
            strcmp($key, "sortBy") != 0 &&
            strcmp($key, "priceMax") != 0
        ) {
            $searchString .= ' and ' . $key . '= "' . $value . '"';
        }
    }
}

$priceMax = 5000;
if (isset($_GET['priceMax'])) {
    $priceMax = intval($_GET['priceMax']);
    $searchString .= ' and price <= ' . $priceMax;
}

if (isset($_GET["searchkey"]) && strcmp($_GET["searchkey"], "") != 0) {
    $searchString = " CommodityName_bigLabel like '%" . $_GET["searchkey"] . "%'";
}

// SELECT * FROM `shop` WHERE 1 ORDER BY Popularity_shop DESC LIMIT 12 OFFSET 2
$perPage = 12;
$c_sql = "SELECT * FROM shop WHERE " . $searchString . " ORDER BY Popularity_shop DESC LIMIT 12 OFFSET " . $page * $perPage;
$cate_rows = $pdo->query($c_sql)->fetchAll();

$cate = isset($_GET['cate']) ? intval($_GET['cate']) : 0;
$qs = [];
$where = ' WHERE 1 ';
if (!empty($cate)) {
    $where .= " AND category_sid=$cate ";
    $qs['cate'] = $cate;
}

// if ($page < 1) $page = 1; //如果$page小於1,也顯示預設值在第一頁
// if ($page > $totalPages) $page = $totalPages; //如果$page大於$totalPages,就會讓頁碼不會把所有的產品顯示出來

// $p_sql = sprintf("SELECT * FROM shop $searchString LIMIT %s, %s ", ($page - 1) * $page, $page);

// $rows = $pdo->query($c_sql)->fetchAll();

// $sql01 = "SELECT * FROM shop ORDER BY Popularity_shop ASC";小到大
$sql02 = "SELECT * FROM shop ORDER BY Popularity_shop DESC"; //大到小

if (isset($_GET["key"]) && strcmp($_GET["key"], "") != 0) {
    $searchString .= ' and ' . $_GET["key"] . '= "' . $_GET["value"] . '"';
}

$sortByyyyyy = "Popularity_shop";
if (isset($_GET["sortBy"])) {
    $sortByyyyyy = $_GET["sortBy"];
}
if (isset($_GET["searchkey"]) && strcmp($_GET["searchkey"], "") != 0) {
    $searchString = " CommodityName_bigLabel like '%" . $_GET["searchkey"] . "%'";
}
$order = "DESC";
if (strcmp($sortByyyyyy, "price") == 0) {
    $order = "ASC";
}

//$sortBy = "Popularity_shop";
$perPage = 12;
$c_sql2 = "SELECT * FROM shop WHERE " . $searchString . " ORDER BY " . $sortByyyyyy . " " . $order . " LIMIT 12 OFFSET " . $page * $perPage;
$product = $pdo->query($c_sql2)->fetchAll();

$t_sql = "SELECT COUNT(1) FROM shop WHERE " . $searchString;
$totalRows = $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0]; //把產品數量抓出來
// PDO::FETCH_NUM 返回以數字作為索引鍵(key)的陣列(array)，由0開始編號
$totalPages = ceil($totalRows / $perPage);

$key = "";
$val = "";

if (
    isset($_GET["Categories"]) ||
    (isset($_GET["key"]) && strcmp($_GET["key"], "Categories") == 0)
) {
    $key = "Categories";
    $val = isset($_GET["Categories"]) ?  $_GET["Categories"] : $_GET["value"];
} else if (
    isset($_GET["Joint_Popular"]) ||
    (isset($_GET["key"]) && strcmp($_GET["key"], "Joint_Popular") == 0)
) {
    $key = "Joint_Popular";
    $val = isset($_GET["Joint_Popular"]) ? $_GET["Joint_Popular"] : $_GET["value"];
} else {
    $key = "";
    $val = "";
}

// $product = $pdo->query($sql02)->fetchAll();
// SELECT * FROM shop ORDER BY Popularity_shop DESC

// $data = mysql_query("SELECT * FROM DBNAME ORDER BY name ASC")
// $data = mysql_query("SELECT * FROM DBNAME ORDER BY Popularity_shop");
// $result = $pdo->query($sql)->fetchAll();
// ORDER BY "?Popularity_shop=" [DESC];

// --------手機版下拉式選單資料連動----------
// $user_select = $_GET['shop_phone_btn'];
// $user_select = mysql_real_escape_string($user_select);
// $sql_statment = "SELECT * FROM shop where shop_phone_btn='$user_select'";
// $result = mysql_query($sql_statment);
// $product_num = mysql_num_rows($result);
$Categories = isset($_GET['Categories']) ? $_GET['Categories'] : "";
$Joint_Popular = isset($_GET['Joint_Popular']) ? $_GET['Joint_Popular'] : "";

$shopdow_sql = "SELECT * FROM shop_downs WHERE downs_sid =0 ";
$cate_rows = $pdo->query($shopdow_sql)->fetchAll();

$cate = isset($_GET['cate']) ? intval($_GET['cate']) : 0;
$qs = [];

$where = ' WHERE 1 ';
if (!empty($cate)) {
    $where .= " AND shop.shopdown_sid=$cate ";
    // shop.
    $qs['cate'] = $cate;
}
?>
<?php include __DIR__ . '/parts/ourhead.php'; ?>


<?php include __DIR__ . '/parts/navbar2.php'; ?>
<style>
    .collapsing {
        transition: none;
    }

    .btn-primary:not(:disabled):not(.disabled):active {
        background-color: #cc543a;
        border-color: #cc543a;
    }

    a {
        color: #000 !important;
    }

    a:hover {
        color: #000 !important;
        text-decoration: none;
        /* 去連結底線 */
    }

    /* .shop_phone_btn  */
    select {
        border-radius: 30px;
        width: 92px;
    }

    .page-item.active .page-link {
        background-color: #FFF;
        border-color: #fff;
    }
</style>
<div class=" container-fluid shop_body_outer p-0">
    <div class="shop_top100 shop_container container-fluid">
        <nav aria-label="breadcrumb ">
            <div class="breadcrumb_style   backgroundimg_1">
                <div class="breadcrumb_style_1 ">
                    <a href="" class="astlyep">SHOP / 商店</a>
                    <!-- 共用雲端找箭頭icon-->
                    <img src="./img/nav_arrow_right.svg">
                    配件飾品
                    </a>

                </div>
            </div>
        </nav>
        <div class="shop_phone_button">
            <select class="shop_phone_btn" <?= ($Categories || $Joint_Popular) ? 'active' : '' ?>>
                <!-- onchange="change(event)" -->
                <option class="shop_phone_effect " value="none" selected="selected">商品分類</option>
                <option class="shop_phone_effect" value="線香" <?= ($Categories == '線香') ? 'selected' : '' ?>>線香</option>
                <option class="shop_phone_effect" value="飾品" <?= ($Categories == '飾品') ? 'selected' : '' ?>>飾品</option>
                <option class="shop_phone_effect" value="擺飾" <?= ($Categories == '擺飾') ? 'selected' : '' ?>>擺飾</option>
                <option class="shop_phone_effect" value="平安符" <?= ($Categories == '平安符') ? 'selected' : '' ?>>平安符</option>
                <option class="shop_phone_effect" value="聯名合作" <?= ($Joint_Popular == '聯名合作') ? 'selected' : '' ?>>聯名合作</option>
                <option class="shop_phone_effect" value="熱門商品" <?= ($Joint_Popular == '熱門商品') ? 'selected' : '' ?>>熱門商品</option>

            </select>
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                價錢範圍
            </button>
        </div>

        <div class="collapse" id="collapseExample">
            <div class="card card-body">
                <div>
                    <input id="ex8" data-slider-id='trip_price_range8' type="text" data-slider-min="0" data-slider-max="5000" data-slider-step="100" data-slider-value="<?= $priceMax ?> " data-key="<?= $key ?>" data-val="<?= $val ?>" data-sort="<?= $sortByyyyyy ?>" />
                </div>
            </div>
        </div>
        <div class="d-flex shop_pbtom">
            <div class="shop_General p-0">
                <div class="shop_magnifier">
                    <div class="shop_search01 position-relative mb-5 ">
                        <input type="text" class=" form-control border-0 bg-transparent px-1" id="formGroupExampleInput" placeholder="找商品...">
                        <i class="fa fa-search fa-lg"></i>
                    </div>
                    <div class="d-none ">
                        <div class="rounded-circle"><i class="far fa-heart rounded-circle p-2" style="background-color: #FFF; color:red;"></i></div>
                    </div>
                    <div class="trip_category ">
                        <h3 class="py-2">商品分類 |</h3>
                        <ul>
                            <li class="py-1 shop_effect" data-p="Categories=線香">線香</li>
                            <li class="py-1 shop_effect" data-p="Categories=飾品">飾品</li>
                            <li class="py-1 shop_effect" data-p="Categories=擺飾">擺飾</li>
                            <li class="py-1 shop_effect" data-p="Categories=平安符">平安符</li>
                            <li class="py-1 shop_effect" data-p="Joint_Popular=聯名合作">聯名合作</li>
                            <li class="py-1 shop_effect" data-p="Joint_Popular=熱門商品">熱門商品</li>
                        </ul>
                        <ul>
                            <li class="py-1 ">
                                <!-- mt-5 -->
                                <h3 class='mb-2'>價錢範圍 |</h3>
                                <div>
                                    <input id="ex9" data-slider-id='trip_price_range8' type="text" data-slider-min="0" data-slider-max="5000" data-slider-step="100" data-slider-value="<?= $priceMax ?>" data-key="<?= $key ?>" data-val="<?= $val ?>" data-sort="<?= $sortByyyyyy ?>" />
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="shop_body01 col-lg-8 p-0">

                <div class="row shop_Separate ">

                    <div class="shop_Displacement d-flex mb-5 display_none  col p-0">
                        <div class="shop_h3 display_none">
                            <h4></h4>
                        </div>
                        <div class="form-inline display_none">
                            <label class="pr-3" for="exampleFormControlSelect1">排序方式</label>
                            <select class="form-control bg-transparent" id="exampleFormControlSelect1" onchange="onSelect(this)">
                                <option>請選擇</option>
                                <option <?= $_GET['sortBy'] == 'Popularity_shop' ? 'selected' : '' ?> value="?key=<?= $key ?>&value=<?= $val ?>&priceMax=<?= $priceMax ?>&sortBy=Popularity_shop">人氣推薦</option>
                                <!-- <option value="{'key':'<?= $key ?>','value':'<?= $val ?>'}">人氣推薦</option> -->
                                <option <?= $_GET['sortBy'] == 'Evaluation_shop' ? 'selected' : '' ?> value="?key=<?= $key ?>&value=<?= $val ?>&priceMax=<?= $priceMax ?>&sortBy=Evaluation_shop">評價最高</option>
                                <option <?= $_GET['sortBy'] == 'price' ? 'selected' : '' ?> value="?key=<?= $key ?>&value=<?= $val ?>&priceMax=<?= $priceMax ?>&sortBy=price">價格(從低到高)</option>
                            </select>
                        </div>
                    </div>
                    <div class="container-flow ">
                        <div class="row col shop_body">
                            <?php if (count($product) > 0) { ?>
                                <?php foreach ($product as $value) : ?>

                                    <div class=" shop_card_body p-0" data-sid="<?= $value['sid'] ?>">

                                        <div class="shop_fff">
                                            <div class="shop_card_img ">
                                                <div class="shop_icon shop_icon<?= $value['sid'] ?>"><i class="far fa-heart "></i></div>
                                                <img class="shop_Scaling" src="./img/shop/shop_new/shop_1~25_new/<?= $value['img1'] ?>" alt="">
                                            </div>
                                            <a href="./shop_page.php?sid=<?= $value['sid'] ?>">
                                                <div class="shop_card-text_body" id="shop_card_text_body">
                                                    <h5 class="shop_card-title" id="shop_cad_title"><?= $value['CommodityName_bigLabel'] ?></h5>
                                                    <div class="shop_card-text">
                                                        <p class="m-0 shop_txt"><?= $value['Commodity_name_smallLabel'] ?></p>
                                                        <p class="shop_m0">NTD <?= $value['price'] ?></p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                    </div>

                                <?php endforeach; ?>
                                <!-- <div class="shop_card_body"></div> -->
                            <?php } else { ?>
                                <div class=" shop_card_body p-0">
                                    不好意思,我們沒有找到相關的商品
                                </div>
                            <?php } ?>
                            <!-- <div class=" shop_card_body p-0">
                                    <div class="shop_fff">
                                        <div class="  shop_card_img  ">
                                            <div class="shop_icon"><i class="far fa-heart"></i></div>
                                            <img class="shop_Scaling" src="./img/shop/shop_new/shop_1~25_new/sh_0101.png" alt="">
                                        </div>
                                        <div class="shop_card-text_body">
                                            <h5 class="shop_card-title">大甲鎮瀾宮 錢龜</h5>
                                            <div class="shop_card-text">
                                                <p class="m-0 shop_txt">『2021牛年-大甲鎮瀾宫－守財錢龜』</p>
                                                <p class="shop_m0">NTD 399</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" shop_card_body p-0">
                                    <div class="shop_fff">
                                        <div class="  shop_card_img  ">
                                            <div class="shop_icon"><i class="far fa-heart"></i></div>
                                            <img class="shop_Scaling" src="./img/shop/shop_new/shop_1~25_new/sh_0201.png" alt="">
                                        </div>
                                        <div class="shop_card-text_body">
                                            <h5 class="shop_card-title">大甲鎮瀾宮 錢龜</h5>
                                            <div class="shop_card-text">
                                                <p class="m-0 shop_txt">『2021牛年-大甲鎮瀾宫－守財錢龜』</p>
                                                <p class="shop_m0">NTD 399</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" shop_card_body p-0">
                                    <div class="shop_fff">
                                        <div class="  shop_card_img  ">
                                            <div class="shop_icon"><i class="far fa-heart"></i></div>
                                            <img class="shop_Scaling" src="./img/shop/shop_new/shop_1~25_new/sh_0301.png" alt="">
                                        </div>
                                        <div class="shop_card-text_body">
                                            <h5 class="shop_card-title">牛轉錢坤</h5>
                                            <div class="shop_card-text">
                                                <p class="m-0 shop_txt">大甲鎮瀾宮牛轉錢坤平安符 (烈炎紅)</p>
                                                <p class="shop_m0">NTD 399</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- ----------------------------------------- -/->
                                <div class=" shop_card_body p-0">
                                    <div class="shop_fff">
                                        <div class="  shop_card_img  ">
                                            <div class="shop_icon"><i class="far fa-heart"></i></div>
                                            <img class="shop_Scaling" src="./img/shop/shop_new/shop_1~25_new/sh_0401.png" alt="">
                                        </div>
                                        <div class="shop_card-text_body">
                                            <h5 class="shop_card-title">大甲鎮瀾宮 錢龜</h5>
                                            <div class="shop_card-text">
                                                <p class="m-0 shop_txt">『2021牛年-大甲鎮瀾宫－守財錢龜』</p>
                                                <p class="shop_m0">NTD 399</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class=" shop_card_body p-0">
                                    <div class="shop_fff">
                                        <div class="  shop_card_img  ">
                                            <div class="shop_icon"><i class="far fa-heart"></i></div>
                                            <img class="shop_Scaling" src="./img/shop/shop_new/shop_1~25_new/sh_0501.png" alt="">
                                        </div>
                                        <div class="shop_card-text_body">
                                            <h5 class="shop_card-title">福壽安康</h5>
                                            <div class="shop_card-text">
                                                <p class="m-0 shop_txt">大甲鎮瀾宮福壽安康平安符 (岩灰)</p>
                                                <p class="shop_m0">NTD 399</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class=" shop_card_body p-0">
                                    <div class="shop_fff">
                                        <div class="  shop_card_img  ">
                                            <div class="shop_icon"><i class="far fa-heart"></i></div>
                                            <img class="shop_Scaling" src="./img/shop/shop_new/shop_1~25_new/sh_0601.png" alt="">
                                        </div>
                                        <div class="shop_card-text_body">
                                            <h5 class="shop_card-title">百子圖開</h5>
                                            <div class="shop_card-text">
                                                <p class="m-0 shop_txt">大甲鎮瀾宮百子圖開平安符 (百合綠)</p>
                                                <p class="shop_m0">NTD 399</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- ----------------------------------------- -/->
                                <div class="shop_card_body p-0">
                                    <div class="shop_fff">
                                        <div class="  shop_card_img  ">
                                            <div class="shop_icon"><i class="far fa-heart"></i></div>
                                            <img class="shop_Scaling" src="./img/shop/shop_new/shop_1~25_new/sh_0701.png" alt="">
                                        </div>
                                        <div class="shop_card-text_body">
                                            <h5 class="shop_card-title">鴻圖大展</h5>
                                            <div class="shop_card-text">
                                                <p class="m-0 shop_txt">大甲鎮瀾宮鴻圖大展平安符 (南瓜橘)</p>
                                                <p class="shop_m0">NTD 399</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" shop_card_body p-0">
                                    <div class="shop_fff">
                                        <div class="  shop_card_img  ">
                                            <div class="shop_icon"><i class="far fa-heart"></i></div>
                                            <img class="shop_Scaling" src="./img/shop/shop_new/shop_1~25_new/sh_0801.png" alt="">
                                        </div>
                                        <div class="shop_card-text_body">
                                            <h5 class="shop_card-title">桃紅柳綠</h5>
                                            <div class="shop_card-text">
                                                <p class="m-0 shop_txt">大甲鎮瀾宮桃紅柳綠平安符 (大象灰)</p>
                                                <p class="shop_m0">NTD 399</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" shop_card_body p-0">
                                    <div class="shop_fff">
                                        <div class="  shop_card_img  ">
                                            <div class="shop_icon"><i class="far fa-heart"></i></div>
                                            <img class="shop_Scaling" src="./img/shop/shop_new/shop_1~25_new/sh_0901.png" alt="">
                                        </div>
                                        <div class="shop_card-text_body">
                                            <h5 class="shop_card-title">路隨福行</h5>
                                            <div class="shop_card-text">
                                                <p class="m-0 shop_txt">大甲鎮瀾宮路隨福行平安符 (黑藍)</p>
                                                <p class="shop_m0">NTD 399</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ------------------------------ -/->
                                <div class=" shop_card_body p-0">
                                    <div class="shop_fff">
                                        <div class="  shop_card_img  ">
                                            <div class="shop_icon"><i class="far fa-heart"></i></div>
                                            <img class="shop_Scaling" src="./img/shop/shop_new/shop_1~25_new/sh_1001.png" alt="">
                                        </div>
                                        <div class="shop_card-text_body">
                                            <h5 class="shop_card-title">奎星高照</h5>
                                            <div class="shop_card-text">
                                                <p class="m-0 shop_txt">大甲鎮瀾宮奎星高照平安符 (竹青綠)</p>
                                                <p class="shop_m0">NTD 399</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" shop_card_body p-0">
                                    <div class="shop_fff">
                                        <div class="  shop_card_img  ">
                                            <div class="shop_icon"><i class="far fa-heart"></i></div>
                                            <img class="shop_Scaling" src="./img/shop/shop_new/shop_1~25_new/sh_1101.png" alt="">
                                        </div>
                                        <div class="shop_card-text_body">
                                            <h5 class="shop_card-title">開運祈福</h5>
                                            <div class="shop_card-text">
                                                <p class="m-0 shop_txt">開運祈福貔貅系列_彩色碧璽手鍊</p>
                                                <p class="shop_m0">NTD 1280</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" shop_card_body p-0">
                                    <div class="shop_fff">
                                        <div class="  shop_card_img  ">
                                            <div class="shop_icon"><i class="far fa-heart"></i></div>
                                            <img class="shop_Scaling" src="./img/shop/shop_new/shop_1~25_new/sh_1201.png" alt="">
                                        </div>
                                        <div class="shop_card-text_body">
                                            <h5 class="shop_card-title">開運祈福</h5>
                                            <div class="shop_card-text">
                                                <p class="m-0 shop_txt">開運祈福貔貅系列_黑曜石手鍊</p>
                                                <p class="shop_m0">NTD 1380</p>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->






                        </div>

                    </div>
                    <nav class="shop_page " aria-label="Page navigation example">
                        <ul class="pagination">
                            <?php for ($i = 0; $i < $totalPages; $i++) :
                                $qs['page'] = $i;
                                $qs['key'] = $key;
                                $qs['value'] = $val;
                                $qs['sortBy'] = $sortByyyyyy;
                                $qs['priceMax'] = $priceMax;
                            ?>
                                <li class="page-item <?= $i == $page ? 'active' : '' ?>">
                                    <a class="page-link" href="?<?= http_build_query($qs) ?>"><?= $i + 1 ?></a>
                                </li>
                            <?php endfor; ?>
                        </ul>
                        <!-- <ul class="pagination">
                                <li class="page-item"><a class="page-link shop_page-item" value="1">1</a></li>
                                <li class="page-item"><a class="page-link shop_page-item" value="2">2</a></li>
                                <li class="page-item"><a class="page-link shop_page-item" value="3">3</a></li>
                                <li class="page-item"><a class="page-link shop_page-item" value="4">4</a></li>
                                <li class="page-item"><a class="page-link shop_page-item" value="5">5</a></li>
                            </ul> -->
                    </nav>
                </div>


            </div>
        </div>
    </div>
    <!-- <div class="r0 ">
            <a href="javascript:top0();"><img class="top0" src="./img/arrow-top01.svg" alt=""></a>
        </div> -->
    <div class="Pressed_flower">
        <img src="./img/nav_left_g_shop.png" alt="">
    </div>
</div>

<?php include __DIR__ . '/parts/ourscripts.php'; ?>
<?php include __DIR__ . '/product/script.php'; ?>

<?php include __DIR__ . '/parts/html-foot.php'; ?>