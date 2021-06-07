<?php include __DIR__ . '/shop_page/shop_page_hend.php'; ?>
<?php
require __DIR__ . '/product/__connect_db.php';
$sid = isset($_GET['sid']) ? intval($_GET['sid']) : 0;

$sql = "SELECT * FROM shop WHERE sid = $sid";
$shops = $pdo->query($sql)->fetchAll();
$img1 = $shops[0]['img1'];
$img2 = $shops[0]['img2'];
$img3 = $shops[0]['img3'];
$img4 = $shops[0]['img4'];

// sprint_r($shops[0]['Categories']);
$category = $shops[0]['Categories'];
$sql2 = "SELECT * FROM shop WHERE Categories ='$category'";
$relations = $pdo->query($sql2)->fetchAll();
$count = count($relations);
echo "count: " . $count;

$remainder = $count % 4;
$group = intval($count / 4) + ($remainder > 0 ? 1 : 0);
echo "group: " . $group;
echo "remainder: " . $remainder;
for ($i = 0; $i < $group; $i++) {
    // 0, 1, 2, ..., group -1
    // 4 次 if i = 0 ~ group -2
    // remainder次 if i = group - 1
}
// print_r($relations);



$searchString = "1 ";
$page = isset($_GET['page']) ? intval($_GET['page']) - 1 : 0;
if ($_GET != null) {
    unset($_GET['page']);
    foreach ($_GET as $key => $value) {
        $searchString .= ' and ' . $key . '= "' . $value . '"';
    }
}
$sql2 = "SELECT * FROM shop WHERE " . $searchString . " ORDER BY Popularity_shop DESC LIMIT 4 OFFSET " . $page * 4;
?>


<body>
    <!-- -----------導覽列------------ -->
    <div class="nav_burgurBar">
        <div class="nav_burgurBar_img">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="20" viewBox="0 0 25 20">
                <g id="Group_135" data-name="Group 135" transform="translate(-341.5 -1313.5)">
                    <line id="Line_50" data-name="Line 50" x2="23" transform="translate(342.5 1314.5)" fill="none" stroke="#707070" stroke-linecap="round" stroke-width="2" />
                    <line id="Line_51" data-name="Line 51" x2="23" transform="translate(342.5 1323.5)" fill="none" stroke="#707070" stroke-linecap="round" stroke-width="2" />
                    <line id="Line_52" data-name="Line 52" x2="23" transform="translate(342.5 1332.5)" fill="none" stroke="#707070" stroke-linecap="round" stroke-width="2" />
                </g>
            </svg>
        </div>

        <div class="nav_logo_mobile">
            <img src="./img/nav_logo_mobile.svg" alt="">
        </div>

    </div>

    <div class="nav_overlayNav">
        <div class="nav_closeBtn mb-4">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 20 20">
                <title>close</title>
                <path fill='#fff' d="M10 8.586l-7.071-7.071-1.414 1.414 7.071 7.071-7.071 7.071 1.414 1.414 7.071-7.071 7.071 7.071 1.414-1.414-7.071-7.071 7.071-7.071-1.414-1.414-7.071 7.071z">
                </path>
            </svg>
        </div>
        <div class="nav_overlayNavBox">
            <ul>
                <a href="">
                    <li>最新消息</li>
                </a>
                <a href="">
                    <li>探索灣廟</li>
                </a>
                <li class="nav_ser_mobile">
                    線上服務
                    <i class="fas fa-angle-down"></i>
                </li>
                <ul class="nav_dropDownMenu_mobile">
                    <a class="dropdown-item nav_ser_item_mob" href="#">祈福點燈</a>
                    <a class="dropdown-item nav_ser_item_mob" href="#">求神問卜</a>
                </ul>
                <a href="">
                    <li>聖地行旅</li>
                </a>
                <a href="">
                    <li>祈福商店</li>
                </a>
                <a href="">
                    <li>購物車</li>
                </a>
                <a href="" data-toggle="modal" data-target="#loginCenter">
                    <li>登入 | 註冊</li>
                </a>
            </ul>
        </div>
    </div>

    <!-- 電腦螢幕大小的navbar -->
    <nav class="nav_navbar_com">
        <div class="nav_navbar_com_container">
            <!-- 請依檔案位置修改logo路徑 -->
            <img src='./img/nav_logo.svg'>

            <div class="nav_navbar">
                <div class="nav_navbarBox">
                    <div class="nav_nav_left">
                        <a href="" class="nav_navbar_item">
                            <div class="nav_hide_ch">最新消息</div>
                            <div class="nav_hide_en">NEWS</div>
                        </a>
                        <a href="" class="nav_navbar_item">
                            <div class="nav_hide_ch">探索灣廟</div>
                            <div class="nav_hide_en">EXPLORE</div>
                        </a>
                        <a href="#" class="nav_navbar_item nav_ser">
                            <div class="nav_hide_ch">線上服務</div>
                            <div class="nav_hide_en">SERVICE</div>

                            <ul class="nav_dropDownMenu">
                                <a class="dropdown-item nav_ser_item" href="#">祈福點燈</a>
                                <a class="dropdown-item nav_ser_item" href="#">求神問卜</a>
                            </ul>
                        </a>

                        <a href="" class="nav_navbar_item">
                            <div class="nav_hide_ch">聖地行旅</div>
                            <div class="nav_hide_en">TRIP</div>
                        </a>
                        <a href="" class="nav_navbar_item">
                            <div class="nav_hide_ch">祈福商店</div>
                            <div class="nav_hide_en">SHOP</div>
                        </a>
                        <a href="" class="nav_navbar_item">
                            <div class="nav_hide_ch">購物車</div>
                            <div class="nav_hide_en">CART</div>
                        </a>
                    </div>
                    <div class="nav_nav_right">
                        <a href="" data-toggle="modal" data-target="#loginCenter" class="nav_navbar_item">
                            <div>登入</div>
                        </a>
                        <span class="nav_navbar_item">|</span>
                        <a href="" data-toggle="modal" data-target="#registerCenter" class="nav_navbar_item">
                            <div>註冊</div>
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <hr class="nav_navline">
    </nav>

    <!-- login -->
    <div class="modal fade" id="loginCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-content-re">
                <div class="modal-header modal-header-re">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h5 class="modal-title" id="exampleModalCenterTitle">登入 | LOGIN</h5>
                </div>
                <div class="modal-body">
                    <form class="mt-3">
                        <div class="form-group mb-3">
                            <input type="text" class="form-control form-control-re" id="account-name" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input class="form-control form-control-re" id="password-text" placeholder="Password">
                        </div>
                        <input type="checkbox"> 記住帳號
                    </form>
                </div>
                <div class="modal-footer modal-footer-re">
                    <button type="button" class="btn btn-primary btn-primary-re">登入</button>
                </div>
                <div class="modal-footer2-re mt-3">
                    <a class="mr-5" data-toggle="modal" data-target="#lostPassword" id="passwordbtn">忘記密碼</a>
                    <a data-toggle="modal" data-target="#registerCenter" id="registerbtn">註冊帳號</a>
                </div>
            </div>
        </div>
    </div>

    <!-- lost password -->
    <div class="modal fade" id="lostPassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-content-re">
                <div class="modal-header modal-header-re">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h5 class="modal-title" id="exampleModalCenterTitle">找回密碼</h5>
                </div>
                <div class="modal-body">
                    <form class="mt-3">
                        <div class="form-group mb-3">
                            <p>請輸入您註冊的電子郵件，您將會在電子郵件信箱中收到重設密碼的連結。</p>
                            <input type="text" class="form-control form-control-re" id="account-name" placeholder="Email">
                        </div>
                    </form>
                </div>
                <div class="modal-footer modal-footer-re">
                    <button type="button" class="btn btn-primary btn-primary-re">送出</button>
                </div>
            </div>
        </div>
    </div>

    <!-- register -->
    <div class="modal fade" id="registerCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-content-re">
                <div class="modal-header modal-header-re">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h5 class="modal-title" id="exampleModalCenterTitle">註冊 | REGISTER</h5>
                </div>
                <div class="modal-body">
                    <form class="mt-3">
                        <div class="form-group mb-3">
                            <input type="text" class="form-control form-control-re" id="account-name" placeholder="User Name">
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" class="form-control form-control-re" id="account-name" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input class="form-control form-control-re" id="password-text" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <input class="form-control form-control-re" id="password-text" placeholder="Repeat Password">
                        </div>
                    </form>
                </div>
                <div class="modal-footer modal-footer-re">
                    <button type="button" class="btn btn-primary btn-primary-re">註冊</button>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcrumb_style   backgroundimg_1">
        <div class="d-flex flex-wrap breadcrumb_style_1 ">
            <a href="" class="astlyep">Home</a>
            <!-- 共用雲端找箭頭icon-->
            <img src="./img/nav_arrow_right.svg">
            祈福商店
            <img src="./img/nav_arrow_right.svg">
            <a href="" class="astlyep">聯名合作</a>

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
                        <img class="d-block w-100" src="img/028.png" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/292.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/293.jpg" alt="Third slide">
                    </div>
                </div>
            </div>
        </div>
        <?php foreach ($shops as $sh) : ?>
            <div class="row">

                <div class="col-lg-7 shop_title_img  d-lg-flex pl-0 d-none">
                    <div class="col-3  shop_imghover row justify-content-between no-gutters">
                        <div class="col-12 shop_page_img"><img src="./img/shop/shop_new/shop_1~25_new/<?= $sh['img2'] ?> " width="100%"></div>
                        <div class="col-12 shop_page_img d-flex align-items-center"><img src="./img/shop/shop_new/shop_1~25_new/<?= $sh['img3'] ?>" width="100%"></div>
                        <div class="col-12 shop_page_img d-flex align-items-end"><img src="./img/shop/shop_new/shop_1~25_new/<?= $sh['img4'] ?>" width="100%"></div>
                    </div>
                    <div class="col-9 pl-2 shop_page_big">
                        <img id="shop_imgclick" src="./img/shop/shop_new/shop_1~25_new/<?= $sh['img2'] ?>" width="100%">
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="shop_like_mobile position-absolute d-flex justify-content-center align-items-center d-lg-none">
                        <i class="far fa-heart"></i>
                    </div>
                    <h3 class="shop_titletext mt-lg-0 mt-4"><?= $sh['CommodityName_bigLabel'] ?></h3>
                    <h3 class="shop_titletext pt-2"><?= $sh['Commodity_name_smallLabel'] ?></h3>
                    <!-- <div class="shop_text1 py-4">2021年限定 Fulux x 大甲鎮瀾宮聯名款 </div> -->
                    <div class=" shop_text pb-5"><?= $sh['Tansuke'] ?></div>
                    <div class="d-flex d-lg-block justify-content-between">
                        <div class="shop_text2  py-lg-2">NTD <?= $sh['price'] ?>元 </div>
                        <div class=" d-flex justify-content-start align-items-center">
                            <div class="shop_text3 px-3 py-lg-4 px-lg-0">數量</div>
                            <div class="shop_input_qty pb-2 pb-lg-2 pl-lg-4">
                                <input style="background-color: #fff;" id="demo3" type="text" value="" name="demo3">
                            </div>
                        </div>
                    </div>
                    <div class="shop_fixed_bottom w-100 d-flex justify-content-between py-2 px-2 fixed-bottom d-lg-none ">
                        <div class="shop_fixed_bottom1 py-2"><i class="fas fa-shopping-cart px-2" style="color: #fff;"></i>加入購物車
                        </div>
                        <div class="shop_fixed_bottom_line"></div>
                        <div class="shop_fixed_bottom1 py-2">前往結帳</div>
                    </div>
                    <div class="d-none d-lg-flex justify-content-end pt-3 ">
                        <div class="mybtn_like mr-3" data-toggle="mybtn"></div>
                        <div class="mybtn_cart_add" data-toggle="mybtn"></div>
                    </div>
                </div>
            </div>
            <div class="row pt-lg-5 pt-2 px-lg-0">
                <div class="shop_title col-lg-7 col-12 pt-5 pt-lg-0 ">Features / 商品特色
                    <div class="pt-4"> <?= $sh['product_features'] ?></div>
                </div>
                <ul class="shop_title col-lg-5  col-12 pt-5 pt-lg-0">Description / 商品描述
                    <li class="pt-4">內容物 |</li>
                    <div class="pb-2"><?= $sh['Contents'] ?></div>
                    <li>尺寸 |</li>
                    <div class="pb-2"><?= $sh['size'] ?></div>
                    <li>材質 |</li>
                    <div class="pb-2">
                        <?= $sh['Material'] ?>
                    </div>
                    <li>產地 |</li>
                    <div><?= $sh['Origin'] ?></div>
                </ul>

            </div>
        <?php endforeach; ?>
        <div class="row">
            <div class="shop_title pt-5 col-lg-12 mx-lg-0 ">Related Product / 相關商品</div>
        </div>
        <div class="row pt-5 pb-5 shop_scrolling_wrapper flex-nowrap flex-row d-flex-block d-lg-none">
            <?php foreach ($relations as $rel) : ?>
                <div class="col-lg-3 col-5 mb-5">
                    <div class="shop_re_img mb-2">
                        <img src="./img/shop/shop_new/shop_1~25_new/<?= $rel['img1'] ?>" width="100%" />
                        <div class="shop_re_more">
                        </div>
                    </div>
                    <div class="shop_re_text"><?= $rel['Commodity_name_smallLabel'] ?></div>
                </div>
            <?php endforeach; ?>
            <div class="col-lg-3 col-5 mb-5">
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
            </div>
        </div>
        <div class="mb-5 mt-5 shop_scrolling_wrapper flex-nowrap flex-row d-none d-lg-block">
            <div id="carouselHotControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner container-fluid px-0 ">
                    <div class="carousel-item active">
                        <div class="row">
                            <?php foreach ($relations as $rel) : ?>
                                <div class="col-lg-3">
                                    <div class="shop_re_img mb-2">
                                        <img src="./img/shop/shop_new/shop_1~25_new/<?= $rel['img1'] ?>" width="100%" />
                                        <div class="shop_re_more">
                                        </div>
                                    </div>
                                    <div class="shop_re_text pt-1"><?= $rel['Commodity_name_smallLabel'] ?> </div>
                                </div>
                            <?php endforeach; ?>
                            <!-- <?php for ($i = 0; $i < $group; $i++) : ?>
                                <div class="carousel-item">
                                    <div class="row">
                                        <?php if ($i == ($group - 1)) : ?>
                                            <?php for ($j = 0; $j < $remainder; $j++) : ?>
                                                <div class="col-lg-3">
                                                    <div class="shop_re_img mb-2">
                                                        <img src="./img/shop/shop_new/shop_1~25_new/<?= $relations[$i * 4 + $j]['img1'] ?>" width="100%" />
                                                        <div class="shop_re_more">
                                                        </div>
                                                    </div>
                                                    <div class="shop_re_text pt-1"><?= $relations[$i * 4 + $j]['Commodity_name_smallLabel'] ?> </div>
                                                </div>
                                            <?php endfor; ?>
                                        <?php else : ?>
                                            <?php for ($j = 0; $j < 4; $j++) : ?>
                                                <div class="col-lg-3">
                                                    <div class="shop_re_img mb-2">
                                                        <img src="./img/shop/shop_new/shop_1~25_new/<?= $relations[$i * 4 + $j]['img1'] ?>" width="100%" />
                                                        <div class="shop_re_more">
                                                        </div>
                                                    </div>
                                                    <div class="shop_re_text pt-1"><?= $relations[$i * 4 + $j]['Commodity_name_smallLabel'] ?> </div>
                                                </div>
                                            <?php endfor; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endfor; ?> -->
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
                            </div>
                        </div> -->
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="shop_re_img mb-2">
                                        <img src="img/011.png" width="100%" />
                                        <div class="shop_re_more">
                                        </div>
                                    </div>
                                    <div class="shop_re_text pt-1">媽祖胸針 by </div>
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
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="shop_re_img mb-2">
                                        <img src="img/011.png" width="100%" />
                                        <div class="shop_re_more">
                                        </div>
                                    </div>
                                    <div class="shop_re_text pt-1">媽祖胸針 by </div>
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

        <!-- login -->
        <div class="modal fade" id="loginCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content modal-content-re">
                    <div class="modal-header modal-header-re">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h5 class="modal-title" id="exampleModalCenterTitle">登入 | LOGIN</h5>
                    </div>
                    <div class="modal-body">
                        <form class="mt-3">
                            <div class="form-group mb-3">
                                <input type="text" class="form-control form-control-re" id="account-name" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input class="form-control form-control-re" id="password-text" placeholder="Password">
                            </div>
                            <input type="checkbox"> 記住帳號
                        </form>
                    </div>
                    <div class="modal-footer modal-footer-re">
                        <button type="button" class="btn btn-primary btn-primary-re">登入</button>
                    </div>
                    <div class="modal-footer2-re mt-3">
                        <a class="mr-5" data-toggle="modal" data-target="#lostPassword" id="passwordbtn">忘記密碼</a>
                        <a data-toggle="modal" data-target="#registerCenter" id="registerbtn">註冊帳號</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- lost password -->
        <div class="modal fade" id="lostPassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content modal-content-re">
                    <div class="modal-header modal-header-re">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h5 class="modal-title" id="exampleModalCenterTitle">找回密碼</h5>
                    </div>
                    <div class="modal-body">
                        <form class="mt-3">
                            <div class="form-group mb-3">
                                <p>請輸入您註冊的電子郵件，您將會在電子郵件信箱中收到重設密碼的連結。</p>
                                <input type="text" class="form-control form-control-re" id="account-name" placeholder="Email">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer modal-footer-re">
                        <button type="button" class="btn btn-primary btn-primary-re">送出</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- register -->
        <div class="modal fade" id="registerCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content modal-content-re">
                    <div class="modal-header modal-header-re">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h5 class="modal-title" id="exampleModalCenterTitle">註冊 | REGISTER</h5>
                    </div>
                    <div class="modal-body">
                        <form class="mt-3">
                            <div class="form-group mb-3">
                                <input type="text" class="form-control form-control-re" id="account-name" placeholder="User Name">
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" class="form-control form-control-re" id="account-name" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input class="form-control form-control-re" id="password-text" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <input class="form-control form-control-re" id="password-text" placeholder="Repeat Password">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer modal-footer-re">
                        <button type="button" class="btn btn-primary btn-primary-re">註冊</button>
                    </div>
                </div>
            </div>
        </div>
        <?php include __DIR__ . '/shop_page/shop_page_footer.php'; ?>
        <?php include __DIR__ . '/shop_page/shop_page_script.php'; ?>
</body>