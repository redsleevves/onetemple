
<?php
// require __DIR__ . '/product/__connect_db.php';
require __DIR__ . "/parts/config.php";

$_gdata = [
    // 網頁名稱
    'title' => '灣廟 | 商品分頁',
    // 頁面私有 css
    'styles' => '
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/11.0.2/css/bootstrap-slider.min.css"
    integrity="sha512-3q8fi8M0VS+X/3n64Ndpp6Bit7oXSiyCnzmlx6IDBLGlY5euFySyJ46RUlqIVs0DPCGOypqP8IRk/EyPvU28mQ=="
    crossorigin="anonymous" />
    <link rel="stylesheet" href="' . WEB_ROOT . '/css/breadcrumb.css">
    <link rel="stylesheet" href="' . WEB_ROOT . '/css/mybtn.css">   
    <link rel="stylesheet" href="' . WEB_ROOT . '/css/navbar2.css">',
    //頁面私有 scripts
    'scripts' => '
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/11.0.2/bootstrap-slider.min.js"
        integrity="sha512-f0VlzJbcEB6KiW8ZVtL+5HWPDyW1+nJEjguZ5IVnSQkvZbwBt2RfCBY0CBO1PsMAqxxrG4Di6TfsCPP3ZRwKpA=="
        crossorigin="anonymous"></script>
        
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>',
];

// --------------------------------------
$sid = isset($_GET['sid']) ? intval($_GET['sid']) : 0;

$sql = "SELECT * FROM shop WHERE sid = $sid";
$shops = $pdo->query($sql)->fetchAll();
$img1 = $shops[0]['img1'];
$img2 = $shops[0]['img2'];
$img3 = $shops[0]['img3'];
$img4 = $shops[0]['img4'];


$category = $shops[0]['Categories'];

// ----------------------------
// $single = $pdo->query($sql)->fetchAll();

// -----------------------------
$sql2 = "SELECT * FROM shop WHERE Categories ='$category' AND sid<>$sid ";

$relations = $pdo->query($sql2)->fetchAll();



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


<?php include __DIR__ . '/parts/ourhead.php'; ?>


<?php include __DIR__ . '/parts/navbar2.php'; ?>
<?php include __DIR__ . '/shop_page/shop_page_breadcrumb.php'; ?>
<style>
    a {
        color: #000;
    }

    a:hover {
        color: #000 !important;
        text-decoration: none;
        /* 去連結底線 */
    }
</style>

<div class="shop_container container-fluid px-lg-5 ">

    <div class="row">
        <div id="carouselExampleIndicators" class="carousel slide d-lg-none" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <?php foreach ($shops as $sh) : ?>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="./img/shop/shop_new/shop_1~25_new/<?= $sh['img2'] ?> " alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="./img/shop/shop_new/shop_1~25_new/<?= $sh['img3'] ?> " alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="./img/shop/shop_new/shop_1~25_new/<?= $sh['img4'] ?> " alt="Third slide">
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <?php foreach ($shops as $sh) : ?>
        <div class="row shop_page_body" data-sid="<?= $sh['sid'] ?>">

            <div class="col-lg-7 shop_title_img  d-lg-flex pl-0 d-none">
                <div class="col-3  shop_imghover row justify-content-between no-gutters">
                    <div class="col-12 shop_small_img"><img src="./img/shop/shop_new/shop_1~25_new/<?= $sh['img2'] ?> " width="100%"></div>
                    <div class="col-12 shop_small_img d-flex align-items-center"><img src="./img/shop/shop_new/shop_1~25_new/<?= $sh['img3'] ?>" width="100%"></div>
                    <div class="col-12 shop_small_img d-flex align-items-end"><img src="./img/shop/shop_new/shop_1~25_new/<?= $sh['img4'] ?>" width="100%"></div>
                </div>
                <div class="col-9 pl-2 shop_page_big">
                    <img id="shop_imgclick" src="./img/shop/shop_new/shop_1~25_new/<?= $sh['img2'] ?>" width="100%">
                </div>
            </div>

            <div class="col-lg-5 shop_Checkout">
                <div class="shop_like_mobile position-absolute d-flex justify-content-center align-items-center d-lg-none">
                    <i class="far fa-heart"></i>
                </div>
                <div class="shop_h3">
                    <h3 class="shop_titletext mt-lg-0 mt-4"><?= $sh['CommodityName_bigLabel'] ?></h3>
                    <h3 class="shop_titletext pt-2"><?= $sh['Commodity_name_smallLabel'] ?></h3>
                </div>
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
                    <div class="mybtn_cart_add" data-toggle="mybtn" data-sid="<?= $sh['sid'] ?>"></div>
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
                <a href="./shop_page.php?sid=<?= $rel['sid'] ?>">
                    <div class="shop_re_img mb-2">
                        <img src="./img/shop/shop_new/shop_1~25_new/<?= $rel['img1'] ?>" width="100%" />

                        <div class="shop_re_more">
                        </div>
                    </div>
                    <div class="shop_re_text"><?= $rel['Commodity_name_smallLabel'] ?></div>
                </a>
            </div>

        <?php endforeach; ?>
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
    <div class="mb-5 mt-5 shop_scrolling_wrapper flex-nowrap flex-row d-none d-lg-block">
        <div id="carouselHotControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner container-fluid px-0 ">
                <div class="carousel-item active">
                    <div class="row">
                        <?php for ($i = 0; $i < 4; $i++) :
                            if (!empty($relations[$i])) :
                                $r = $relations[$i];
                        ?>
                                <div class="col-lg-3">
                                    <a href="./shop_page.php?sid=<?= $r['sid'] ?>">
                                        <div class="shop_re_img mb-2">
                                            <img src="./img/shop/shop_new/shop_1~25_new/<?= $r['img1'] ?>" width="100%" />

                                            <div class="shop_re_more">
                                            </div>
                                        </div>
                                        <div class="shop_re_text pt-1"><?= $r['CommodityName_bigLabel'] ?></div>
                                    </a>
                                </div>

                        <?php endif;
                        endfor; ?>
                    </div>
                </div>
                <?php if (count($relations) > 4) : ?>
                    <div class="carousel-item">
                        <div class="row">
                            <?php for ($i = 4; $i < 8; $i++) :
                                if (!empty($relations[$i])) :
                                    $r = $relations[$i];
                            ?>

                                    <div class="col-lg-3">
                                        <a href="./shop_page.php?sid=<?= $r['sid'] ?>">
                                            <div class="shop_re_img mb-2">
                                                <img src="./img/shop/shop_new/shop_1~25_new/<?= $r['img1'] ?>" width="100%" />

                                                <div class="shop_re_more">
                                                </div>
                                            </div>
                                            <div class="shop_re_text pt-1"><?= $r['CommodityName_bigLabel'] ?></div>
                                        </a>
                                    </div>

                            <?php endif;
                            endfor; ?>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if (count($relations) > 8) : ?>
                    <div class="carousel-item">
                        <div class="row">
                            <?php for ($i = 8; $i < 12; $i++) :
                                if (!empty($relations[$i])) :
                                    $r = $relations[$i];
                            ?>

                                    <div class="col-lg-3">
                                        <a href="./shop_page.php?sid=<?= $r['sid'] ?>">
                                            <div class="shop_re_img mb-2">
                                                <img src="./img/shop/shop_new/shop_1~25_new/<?= $r['img1'] ?>" width="100%" />

                                                <div class="shop_re_more">
                                                </div>
                                            </div>
                                            <div class="shop_re_text pt-1"><?= $r['CommodityName_bigLabel'] ?></div>
                                        </a>
                                    </div>

                            <?php endif;
                            endfor; ?>
                        </div>
                    </div>
                <?php endif; ?>
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
<?php include __DIR__ . '/parts/ourscripts.php'; ?>
<?php include __DIR__ . '/shop_page/shop_page_script.php'; ?>

<?php include __DIR__ . '/parts/html-foot.php'; ?>
<!-- </body> -->