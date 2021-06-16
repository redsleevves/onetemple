<?php

require __DIR__ . "/parts/config.php";


$_gdata = [
    // 網頁名稱
    'title' => '灣廟 | 聖地行旅', 
    // 頁面私有 css
    'styles' => '
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/11.0.2/css/bootstrap-slider.min.css"
    integrity="sha512-3q8fi8M0VS+X/3n64Ndpp6Bit7oXSiyCnzmlx6IDBLGlY5euFySyJ46RUlqIVs0DPCGOypqP8IRk/EyPvU28mQ=="
    crossorigin="anonymous" />
    <link rel="stylesheet" href="' . WEB_ROOT . '/css/breadcrumb.css">
    <link rel="stylesheet" href="' . WEB_ROOT . '/css/trip_page.css">
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

// SELECT * FROM trip WHERE id = ''
$member_sid = isset($_SESSION['user'])?$_SESSION['user']['sid']:0;
$sql = "SELECT t.*, IFNULL(f.sid, 0) as fav 
FROM trips as t 
LEFT JOIN fav_trip as f ON t.id = f.trip_sid and f.member_sid = ? 
WHERE id = ?"; //組合SQL指令
$stmt = $pdo->prepare($sql); //預處理SQL
$stmt->execute([$member_sid, $_GET['id']]); //執行SQL
$trip = $stmt->fetch(PDO::FETCH_ASSOC); //取資料


$sql = "SELECT * FROM trips WHERE cat = '熱門行程' LIMIT 0, 6";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$hot_trips = $stmt->fetchAll(PDO::FETCH_ASSOC); // 手機熱門行程陣列


$pc_hot_trips = []; // PC熱門行程陣列
$j = 0; // 目前是第幾組
for($i=0;$i<count($hot_trips);$i++) {
    $pc_hot_trips[$j][] = $hot_trips[$i];
    if( ($i+1) % 2 == 0) {
        $j++;
    }
}

?>
<!-- 整個頁面的頭 -->
<?php include __DIR__ . '/parts/ourhead.php'; ?>
<!-- 導航用代碼包含彈窗 -->
<?php include __DIR__ . '/parts/navbar2.php'; ?>

    <input type="hidden" name="price" id="trip_price" value="<?=$trip['price']?>">
    <input type="hidden" name="trip_id" id="trip_id" value="<?=$trip['id']?>">
    <input type="hidden" name="trip_name" id="trip_name" value="<?=$trip['title2']?>">
    <input type="hidden" name="trip_image" id="trip_image" value="<?=$trip['thumbnail']?>">
    
    <div class="breadcrumb_style   backgroundimg_1">
        <div class="d-flex flex-wrap breadcrumb_style_1 ">
            <a href="index.php" class="astlyep">首頁</a>
            <!-- 共用雲端找箭頭icon-->
            <img src="./img/nav_arrow_right.svg">
            <a href="trip.php" class="astlyep">聖地行旅</a>
            <img src="./img/nav_arrow_right.svg">
            <p class="astlyep mt-3"><?=$trip['title2']?></p>
        </div>
    </div>

    
    <div class="trip_container container-fluid px-lg-5">
        <div class="row">
            <div id="carouselExampleIndicators" class="carousel slide d-lg-none" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="img/<?=$trip['photo1']?>" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/<?=$trip['photo2']?>" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/<?=$trip['photo3']?>" alt="Third slide">
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="trip_title_img col-lg-7 d-lg-flex pl-0 d-none">
                <div class="col-lg-3 row trip_imghover justify-content-between no-gutters">
                    <div class="col-12"><img src="img/<?=$trip['photo1']?>" width="100%"></div>
                    <div class="col-12 d-flex align-items-center"><img src="img/<?=$trip['photo2']?>" width="100%">
                    </div>
                    <div class="col-12 d-flex align-items-end"><img src="img/<?=$trip['photo3']?>" width="100%"></div>
                </div>
                <div class="col-9 pl-2">
                    <div><img id="trip_imgclick" src="img/<?=$trip['photo1']?>" width="100%"></div>
                </div>
            </div>

            <div class="col-lg-5 col-12">
                <div
                    class="trip_like_mobile position-absolute d-flex justify-content-center align-items-center d-lg-none <?=($trip['fav']!=0)?"active":""?>" data-id="<?=$trip['id']?>">
                    <i class="far fa-heart"></i>
                </div>
                <h3 class="mt-4 mt-lg-3"><?=$trip['title2']?></h3>
                <div>
                    <h3 class="pb-2 trip_title_text"><?=$trip['title1']?></h3>
                    <!-- mobile -->
                    <div class="d-block d-lg-none">
                        <div class="mb-3">
                            <hr>
                            <div class="row  no-gutters pt-3">
                                <div class="col-6 trip_text1">查看可預訂日期</div>
                                <div class="col-6">
                                    <input class="trip_input_date w-100" type="date" id="date_today" min="2021-04-19">
                                    <div class="invalid-feedback">造訪日期未填喔!!</div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between py-4">
                                <div class="mb-0 trip_solution_choice ">方案選擇</div>
                                <div id="trip_solution_checkbox" class="d-flex trip_solution_checkbox">
                                    <div class="trip_btn_mobile mr-4 active" data-price="0">導覽</div>
                                    <div class="trip_btn_mobile mr-4" data-price="500">餐飲</div>
                                    <div class="trip_btn_mobile " data-price="1000">住宿</div>
                                </div>
                            </div>
                            <div class="row pb-4 pl-4">
                                <div class="col-3 text-right trip_text1">價格</div>
                                <div class="col-9 trip_text1">NTD <span id="trip_amount"><?=number_format($trip['price'],0,".",",")?></span>元起</div>
                            </div>
                            <div class="row pb-4 pl-4">
                                <div class="col-3 text-right trip_text1">人數</div>
                                <div class="col-9">
                                    <div class="trip_input_qty"><input id="trip_qty" type="text" value="" name="demo3">
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row pt-2 pb-4 pl-4">
                                <div class="col-3 trip_text1 text-right ">小計</div>
                                <div class="col-9 trip_text">NTD <span id="trip_calculate"><?=number_format($trip['price'],0,".",",")?></span>元</div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <div class="trip_price_detail d-flex align-items-center" data-toggle="modal"
                                    data-target=".trip-more-modal-lg">費用詳情<div class=""></div>
                                    <div class=""></div>
                                    <div class=""></div><i class="fas fa-chevron-down pl-1"
                                        style="font-size: 12px;"></i>
                                </div>
                            </div>

                            <hr>
                            <div class="col-12">
                                <h3 class="py-2">行程介紹 |</h3>
                                <div class="trip_list_text px-1 pb-5">
                                    <?=$trip['content']?>
                                </div>
                            </div>
                        </div>
                        <hr>

                    </div>
                </div>


                <!-- 網頁 -->
                <div class="d-none d-lg-block">
                    <div class="row">
                        <div class="trip_text pt-2 col-12">選擇方案及日期</div>
                    </div>
                    <div class="py-lg-3 d-none d-lg-flex row">
                        <div class="trip_text1 col-5">請選擇造訪日期</div>
                        <div class="col-7">
                            <input class="trip_input_date" type="date" id="date_today1" min="2021-04-19">
                            <div class="invalid-feedback">造訪日期未填喔!!</div>
                        </div>
                    </div>
                    <div class="py-lg-2 py-0 d-none d-lg-flex row">
                        <div class="trip_text1 col-5">人數</div>
                        <div class="col-7">
                            <div class="trip_input_qty"><input id="trip_qty1" type="text" value="" name="demo3">
                            </div>
                        </div>
                    </div>
                    <div class="py-lg-2 py-0 d-none d-lg-flex row">
                        <div class="trip_text1 col-5">價格</div>
                        <div class="col-7 trip_text1">NTD <span id="trip_amount1"><?=number_format($trip['price'],0,".",",")?></span> 元起</div>

                    </div>
                    <div class="py-lg-2 d-none d-lg-flex row">
                        <div class="trip_text1 col-lg-5 ">請選擇方案</div>
                        <div id="trip_solution_checkbox1" class="col-lg-7 d-flex">
                            <div class="trip_btn2 mr-2 active" data-price="0">導覽</div>
                            <div class="trip_btn2 mr-2" data-price="500">餐飲</div>
                            <div class="trip_btn2" data-price="1000">住宿</div>
                        </div>
                    </div>
                    <hr class="mt-2">
                    <div class="d-lg-flex justify-content-end pt-lg-1 d-none d-lg-block">
                        <div class="trip_price_detail pr-3 d-flex align-items-center" data-toggle="modal"
                            data-target=".trip-more-modal-lg">費用詳情<div class=""></div>
                            <div class=""></div>
                            <div class=""></div><i class="fas fa-chevron-down pl-1" style="font-size: 12px;"></i>
                        </div>
                        <div class="trip_text2">NTD <span id="trip_calculate1"><?=number_format($trip['price'],0,".",",")?></span>元</div>
                    </div>
                    <div class="d-none d-lg-flex justify-content-end pt-4">
                        <div class="mybtn_like mr-3 <?=($trip['fav']!=0)?"active":""?>" data-id="<?=$trip['id']?>" data-toggle="mybtn"></div>
                        <div class="mybtn_cart_add pr-3" data-toggle="mybtn"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-between pt-4">
            <div class="col-lg-7 pt-lg-5 d-none d-lg-block">
                <div class="row">
                    <div class="col-12">
                        <h3 class="pb-4">行程介紹 |</h3>
                        <div class="trip_list_text">
                            <?=$trip['content']?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 pt-lg-5 pt-0 d-none d-lg-block">
                <h3 class="pb-4">評價 |</h3>
                <div class="pb-5 d-flex justify-content-between">
                    <div class="d-flex justify-content-start">
                        <div class="trip_text mr-4">4.8</div>
                        <div class="d-flex justify-content-start pr-3 pt-2 pl-0">
                            <div><i class="fas fa-star" style="color: #cc543a;"></i></div>
                            <div><i class="fas fa-star" style="color: #cc543a;"></i></div>
                            <div><i class="fas fa-star" style="color: #cc543a;"></i></div>
                            <div><i class="fas fa-star" style="color: #cc543a;"></i></div>
                            <div><i class="fas fa-star" style="color: #cc543a;"></i></div>
                        </div>
                        <div class="pt-2 ">28則評價</div>
                    </div>
                    <div class="trip_sort ">
                        <div class="form-inline">
                            <label class="pr-3" for="exampleFormControlSelect1"></label>
                            <select class="form-control bg-transparent" id="exampleFormControlSelect1">
                                <option>最新</option>
                                <option>評分:從高至低</option>
                                <option>評分:從低至高</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="trip_item_scroll d-none d-lg-block">
                    <div class="row">
                        <div class="col-2">
                            <div class="trip_gb">W</div>
                        </div>
                        <div class="col-10">
                            <div>
                                <div class="py-2">You Jhen</div>
                                <div class="d-flex justify-content-start pb-4">
                                    <div class="d-flex justify-content-start pr-3">
                                        <div><i class="fas fa-star" style="color: #cc543a;"></i></div>
                                        <div><i class="fas fa-star" style="color: #cc543a;"></i></div>
                                        <div><i class="fas fa-star" style="color: #cc543a;"></i></div>
                                        <div><i class="fas fa-star" style="color: #cc543a;"></i></div>
                                        <div><i class="fas fa-star" style="color: #cc543a;"></i></div>
                                    </div>
                                    <div>超讚</div>
                                </div>
                            </div>
                            <div class="trip_gbtext pb-5">光彩奪目的外觀，夜晚搭配五顏六色的燈光真的是極美，讓人驚艷怎麼有那麼漂亮的玻璃廟，很好拍照，推推！建議安排一整天的活動漫遊，可以細細品味～</div>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2">
                            <div class="trip_gb">K</div>
                        </div>
                        <div class="col-10">
                            <div>
                                <div class="py-2">Kuo桑</div>
                                <div class="d-flex justify-content-start pb-4">
                                    <div class="d-flex justify-content-start pr-3">
                                        <div><i class="fas fa-star" style="color: #cc543a;"></i></div>
                                        <div><i class="fas fa-star" style="color: #cc543a;"></i></div>
                                        <div><i class="fas fa-star" style="color: #cc543a;"></i></div>
                                        <div><i class="fas fa-star" style="color: #cc543a;"></i></div>
                                        <div><i class="fas fa-star" style="color: #cc543a;"></i></div>
                                    </div>
                                    <div>超讚</div>
                                </div>
                            </div>
                            <div class="trip_gbtext pb-5">內部有水池，外圍有小水河，黃昏觀看搭配燈光爆炸美，適合全家大小或情侶，超級美 超值得到此一遊</div>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2">
                            <div class="trip_gb">M</div>
                        </div>
                        <div class="col-10">
                            <div>
                                <div class="py-2">Momo Lee</div>
                                <div class="d-flex justify-content-start pb-4">
                                    <div class="d-flex justify-content-start pr-3">
                                        <div><i class="fas fa-star" style="color: #cc543a;"></i></div>
                                        <div><i class="fas fa-star" style="color: #cc543a;"></i></div>
                                        <div><i class="fas fa-star" style="color: #cc543a;"></i></div>
                                        <div><i class="fas fa-star" style="color: #cc543a;"></i></div>
                                        <div><i class="fas fa-star" style="color: #cc543a;"></i></div>
                                    </div>
                                    <div>超讚</div>
                                </div>
                            </div>
                            <div class="trip_gbtext pb-5">《玻璃媽祖廟一台灣護聖宮》全台唯一媽祖，仁慈天后，是用琉璃彫塑金身！打上燈光，如同顯靈，晚上可以來欣賞！打上燈光的廟宇！閃閃發光！領了錢母發財金！一仠萬金！香爐也是琉璃制成！非常特別！</div>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2">
                            <div class="trip_gb">J</div>
                        </div>
                        <div class="col-10">
                            <div>
                                <div class="py-2">james chen</div>
                                <div class="d-flex justify-content-start pb-4">
                                    <div class="d-flex justify-content-start pr-3">
                                        <div><i class="fas fa-star" style="color: #cc543a;"></i></div>
                                        <div><i class="fas fa-star" style="color: #cc543a;"></i></div>
                                        <div><i class="fas fa-star" style="color: #cc543a;"></i></div>
                                        <div><i class="fas fa-star" style="color: #cc543a;"></i></div>
                                        <div><i class="fas fa-star" style="color: #cc543a;"></i></div>
                                    </div>
                                    <div>超讚</div>
                                </div>
                            </div>
                            <div class="trip_gbtext pb-5">第一次好奇這好多漂亮顏色的媽祖廟，今日到這ㄧ遊，真的好漂亮！廟裡還撥放放鬆的音樂，池裡中央還可以許願！我是比較愛拍照的😁就多照了幾張😍</div>
                            <hr>
                        </div>
                    </div>
                </div>

            </div>

            
        </div>
    <div class="row pt-5">
        <h3 class="pb-lg-4 pb-3 px-3 d-none d-lg-block">熱門推薦 |</h3>
    </div>
    <div class="mb-3">
        <div id="carouselHotControls" class="carousel slide d-none d-lg-block" data-ride="carousel">
            <div class="carousel-inner container">
<?php
foreach($pc_hot_trips as $key => $group) {
?>
                <div class="carousel-item <?=($key==0)?'active':''?>">
                    <div class="row">
<?php
    foreach($group as $trip_item) {
?>
        
                        <div class="col-lg-6 col-10 mt-lg-4 px-lg-4 pl-3">
                            <div class="trip_item_border">
                                <div class="row no-gutters">
                                    <div class="col-5 trip_item_image">
                                        <img src="img/<?=$trip_item['thumbnail']?>" width="100%" />
                                    </div>
                                    <div class="col-7 trip_item_body py-lg-1 pl-2 pr-1">
                                        <div class="trip_item_body_title my-lg-3 mx-lg-4 m-2"><?=$trip_item['title2']?></div>
                                        <div class="trip_item_body_body mx-lg-4">
                                            <div class="py-lg-1 pb-1"><i class="fas fa-map-marker-alt"></i><?=$trip_item['position']?>
                                            </div>
                                            <div class="py-lg-1 pb-1"><i class="far fa-clock"></i><?=$trip_item['days']?></div>
                                            <div class="py-1 d-none d-lg-block"><i
                                                    class="fas fa-quote-left"></i><?=$trip_item['title3']?>
                                            </div>
                                        </div>
                                        <div class="tripc_item_body_price mx-lg-4 py-lg-1 px-2"><span>NTD <?=number_format($trip_item['price'],0,".",",")?></span>
                                            元起
                                        </div>
                                        <div class="d-lg-flex justify-content-end">
                                            <div class="trip_btn1 mr-3"><a href="trip_page.php?id=<?=$trip_item['id']?>">查看詳情</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
<?php
    }
?>
                    </div>
                </div>
<?php
}
?>
            </div>
            <a class="trip_left carousel-control-prev" href="#carouselHotControls" role="button" data-slide="prev">
                <i class="fas fa-chevron-left"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="trip_right carousel-control-next" href="#carouselHotControls" role="button" data-slide="next">
                <i class="fas fa-chevron-right"></i>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="row d-lg-none d-block d-flex mt-4 mx-3">
        <div class="col-2 pl-1">
            <div class="trip_gb">W</div>
        </div>
        <div class="col-10">
            <div>
                <div class="py-2">WAN CHEN</div>
                <div class="d-flex justify-content-start pb-4">
                    <div class="d-flex justify-content-start pr-3">
                        <div><i class="fas fa-star" style="color: #cc543a;"></i></div>
                        <div><i class="fas fa-star" style="color: #cc543a;"></i></div>
                        <div><i class="fas fa-star" style="color: #cc543a;"></i></div>
                        <div><i class="fas fa-star" style="color: #cc543a;"></i></div>
                        <div><i class="fas fa-star" style="color: #cc543a;"></i></div>
                    </div>
                    <div>超讚</div>
                </div>
            </div>
            <div class="trip_gbtext pb-4">沒想到媽祖廟也可以這麼美，而且還越晚越浪漫，吸引了好多專業攝影師前來美拍，我們來訪當天還碰到了攝影團！距離鹿港老街不遠，可以安排順遊逛老街吃鹿港小吃！</div>
        </div>
    </div>

    <!-- Button trigger modal -->
    <div class="trip_day mb-4 py-2 d-lg-none d-block" data-toggle="modal" data-target="#tripModalCommentLong">查看全部評價<i
            class="fas fa-chevron-down pl-2"></i></a>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="tripModalCommentLong" tabindex="-1" role="dialog"
        aria-labelledby="tripModalCommentLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content trip_container1">
                <div class="modal-header">
                    <h5 class="modal-title" id="tripModalCommentLongTitle">全部評價</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-4">
                    <div class="row d-flex trip_modal border shadow mb-4 bg-white pt-3 d-lg-none d-block">
                        <div class="col-3 mt-3">
                            <div class="trip_gb ml-2">W</div>
                        </div>
                        <div class="col-9 pl-1">
                            <div class="pl-1">
                                <div class="py-2">You Jhen</div>
                                <div class="d-flex justify-content-start pb-2">
                                    <div class="d-flex justify-content-start pr-3">
                                        <div><i class="fas fa-star" style="color: #cc543a;"></i></div>
                                        <div><i class="fas fa-star" style="color: #cc543a;"></i></div>
                                        <div><i class="fas fa-star" style="color: #cc543a;"></i></div>
                                        <div><i class="fas fa-star" style="color: #cc543a;"></i></div>
                                        <div><i class="fas fa-star" style="color: #cc543a;"></i></div>
                                    </div>
                                    <div>超讚</div>
                                </div>
                            </div>
                            <div class="trip_gbtext pb-4">
                            光彩奪目的外觀，夜晚搭配五顏六色的燈光真的是極美，讓人驚艷怎麼有那麼漂亮的玻璃廟，很好拍照，推推！建議安排一整天的活動漫遊，可以細細品味～</div>
                        </div>
                    </div>
                    <div class="row d-flex trip_modal border shadow mb-4 bg-white pt-3 d-lg-none d-block">
                        <div class="col-3 mt-3">
                            <div class="trip_gb ml-2">W</div>
                        </div>
                        <div class="col-9 pl-1">
                            <div class="pl-1">
                                <div class="py-2">Wei Gao</div>
                                <div class="d-flex justify-content-start pb-2">
                                    <div class="d-flex justify-content-start pr-3">
                                        <div><i class="fas fa-star" style="color: #cc543a;"></i></div>
                                        <div><i class="fas fa-star" style="color: #cc543a;"></i></div>
                                        <div><i class="fas fa-star" style="color: #cc543a;"></i></div>
                                        <div><i class="fas fa-star" style="color: #cc543a;"></i></div>
                                        <div><i class="fas fa-star" style="color: #cc543a;"></i></div>
                                    </div>
                                    <div>超讚</div>
                                </div>
                            </div>
                            <div class="trip_gbtext pb-4">
                            我們當天雖然見到很多顏色的玻璃廟，但都是單一顏色的版本，會一直變換顏色唷，很美很浪漫!非常推薦這個一日遊。</div>
                        </div>
                    </div>
                    <div class="row d-flex trip_modal border shadow mb-4 bg-white pt-3 d-lg-none d-block">
                        <div class="col-3 mt-3">
                            <div class="trip_gb ml-2">W</div>
                        </div>
                        <div class="col-9 pl-1">
                            <div class="pl-1">
                                <div class="py-2">WAN CHEN</div>
                                <div class="d-flex justify-content-start pb-2">
                                    <div class="d-flex justify-content-start pr-3">
                                        <div><i class="fas fa-star" style="color: #cc543a;"></i></div>
                                        <div><i class="fas fa-star" style="color: #cc543a;"></i></div>
                                        <div><i class="fas fa-star" style="color: #cc543a;"></i></div>
                                        <div><i class="fas fa-star" style="color: #cc543a;"></i></div>
                                        <div><i class="fas fa-star" style="color: #cc543a;"></i></div>
                                    </div>
                                    <div>超讚</div>
                                </div>
                            </div>
                            <div class="trip_gbtext pb-4">
                            超級療癒的玻璃珠廣場，滿滿都是五顏六色小顆玻璃珠，撲滿著廟前廣場，大人小朋友都喜歡，蹲著或是坐在這裡邊撿邊玩，童年的心這時浮現，在這炎炎的夏季心境讓人溶化，溫暖整個心靈，洗滌內心的煩悶，</div>
                        </div>
                    </div>
                    <div class="row d-flex trip_modal border shadow mb-4 bg-white pt-3 d-lg-none d-block">
                        <div class="col-3 mt-3">
                            <div class="trip_gb ml-2">W</div>
                        </div>
                        <div class="col-9 pl-1">
                            <div class="pl-1">
                                <div class="py-2">Kuo桑</div>
                                <div class="d-flex justify-content-start pb-2">
                                    <div class="d-flex justify-content-start pr-3">
                                        <div><i class="fas fa-star" style="color: #cc543a;"></i></div>
                                        <div><i class="fas fa-star" style="color: #cc543a;"></i></div>
                                        <div><i class="fas fa-star" style="color: #cc543a;"></i></div>
                                        <div><i class="fas fa-star" style="color: #cc543a;"></i></div>
                                        <div><i class="fas fa-star" style="color: #cc543a;"></i></div>
                                    </div>
                                    <div>超讚</div>
                                </div>
                            </div>
                            <div class="trip_gbtext pb-4">
                            內部有水池，外圍有小水河，黃昏觀看搭配燈光爆炸美，適合全家大小或情侶，超級美 超值得到此一遊。</div>
                        </div>
                    </div>
                    <div class="row d-flex trip_modal border shadow mb-4 bg-white pt-3 d-lg-none d-block">
                        <div class="col-3 mt-3">
                            <div class="trip_gb ml-2">M</div>
                        </div>
                        <div class="col-9 pl-1">
                            <div class="pl-1">
                                <div class="py-2">Momo Lee</div>
                                <div class="d-flex justify-content-start pb-2">
                                    <div class="d-flex justify-content-start pr-3">
                                        <div><i class="fas fa-star" style="color: #cc543a;"></i></div>
                                        <div><i class="fas fa-star" style="color: #cc543a;"></i></div>
                                        <div><i class="fas fa-star" style="color: #cc543a;"></i></div>
                                        <div><i class="fas fa-star" style="color: #cc543a;"></i></div>
                                        <div><i class="fas fa-star" style="color: #cc543a;"></i></div>
                                    </div>
                                    <div>超讚</div>
                                </div>
                            </div>
                            <div class="trip_gbtext pb-4">
                            《玻璃媽祖廟一台灣護聖宮》全台唯一媽祖，仁慈天后，是用琉璃彫塑金身！打上燈光，如同顯靈，晚上可以來欣賞！打上燈光的廟宇！閃閃發光！領了錢母發財金！一仠萬金！香爐也是琉璃制成！非常特別！</div>
                        </div>
                    </div>
                    <div class="row d-flex trip_modal border shadow mb-4 bg-white pt-3 d-lg-none d-block">
                        <div class="col-3 mt-3">
                            <div class="trip_gb ml-2">J</div>
                        </div>
                        <div class="col-9 pl-1">
                            <div class="pl-1">
                                <div class="py-2">james chen</div>
                                <div class="d-flex justify-content-start pb-2">
                                    <div class="d-flex justify-content-start pr-3">
                                        <div><i class="fas fa-star" style="color: #cc543a;"></i></div>
                                        <div><i class="fas fa-star" style="color: #cc543a;"></i></div>
                                        <div><i class="fas fa-star" style="color: #cc543a;"></i></div>
                                        <div><i class="fas fa-star" style="color: #cc543a;"></i></div>
                                        <div><i class="fas fa-star" style="color: #cc543a;"></i></div>
                                    </div>
                                    <div>超讚</div>
                                </div>
                            </div>
                            <div class="trip_gbtext pb-4">
                            第一次好奇這好多漂亮顏色的媽祖廟，今日到這ㄧ遊，真的好漂亮！廟裡還撥放放鬆的音樂，池裡中央還可以許願！我是比較愛拍照的😁就多照了幾張😍</div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <!-- mobile -->
    <div class="container-fluid p-0 pb-5 mb-5 mb-lg-0">
        <h3 class="p-3 d-block d-lg-none">熱門推薦 |</h3>
        <div class="trip_scrolling_wrapper row flex-row flex-nowrap mb-lg-4 no-gutters d-flex d-lg-none">
<?php
    foreach($hot_trips as $trip_item) {
?>
            <div class="col-lg-6 col-10 mt-lg-4 px-lg-4 pl-3">
                <div class="trip_item_border">
                    <div class="row no-gutters">
                        <div class="col-5 trip_item_image">
                            <img src="img/<?=$trip_item['thumbnail']?>" width="100%" />
                        </div>
                        <div class="col-7 trip_item_body py-lg-1 pl-2 pr-1">
                            <div class="trip_item_body_title my-lg-3 mx-lg-4 mx-2 mt-2"><?=$trip_item['title2']?></div>
                            <div class="trip_item_body_body mx-lg-4">
                                <div class="py-lg-1"><i class="fas fa-map-marker-alt"></i><?=$trip_item['position']?></div>
                                <div class="py-lg-1 pb-1"><i class="far fa-clock"></i><?=$trip_item['days']?></div>
                            </div>
                            <div class="tripc_item_body_price mx-lg-4 py-lg-1 px-2"><span>NTD <?=number_format($trip_item['price'],0,".",",")?></span> 元起
                            </div>
                            <div class="d-flex justify-content-end pt-1">
                                <div class="trip_btn1 mr-1"><a href="trip_page.php?id=<?=$trip_item['id']?>">查看詳情</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php
}
?>
            
            <!-- <div class="col-lg-6 col-10 mt-lg-4 px-lg-4 pl-3">
                <div class="trip_item_border">
                    <div class="row no-gutters">
                        <div class="col-5 trip_item_image">
                            <img src="img/img01.png" width="100%" />
                        </div>
                        <div class="col-7 trip_item_body py-lg-1 pl-2 pr-1">
                            <div class="trip_item_body_title my-lg-3 mx-lg-4 m-2">蒐集離島媽祖</div>
                            <div class="trip_item_body_body mx-lg-4">
                                <div class="py-lg-1"><i class="fas fa-map-marker-alt"></i>澎湖-蘭嶼-綠島</div>
                                <div class="py-lg-1 pb-1"><i class="far fa-clock"></i>4天3夜</div>
                                <div class="py-1 d-none d-lg-block"><i class="fas fa-quote-left"></i>是媽祖叫我去的！</div>
                            </div>
                            <div class="tripc_item_body_price mx-lg-4 py-lg-1 px-2"><span>NTD 3,250</span> 元起
                            </div>
                            <div class="d-flex justify-content-end pt-1">
                                <div class="trip_btn1 mr-1">查看詳情</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-10 mt-lg-4 px-lg-4 pl-3">
                <div class="trip_item_border">
                    <div class="row no-gutters">
                        <div class="col-5 trip_item_image">
                            <img src="img/img01.png" width="100%" />
                        </div>
                        <div class="col-7 trip_item_body py-lg-1 pl-2 pr-1">
                            <div class="trip_item_body_title my-lg-3 mx-lg-4 m-2">蒐集離島媽祖</div>
                            <div class="trip_item_body_body mx-lg-4">
                                <div class="py-lg-1"><i class="fas fa-map-marker-alt"></i>澎湖-蘭嶼-綠島</div>
                                <div class="py-lg-1 pb-1"><i class="far fa-clock"></i>4天3夜</div>
                                <div class="py-1 d-none d-lg-block"><i class="fas fa-quote-left"></i>是媽祖叫我去的！</div>
                            </div>
                            <div class="tripc_item_body_price mx-lg-4 py-lg-1 px-2"><span>NTD 3,250</span> 元起
                            </div>
                            <div class="d-flex justify-content-end pt-1">
                                <div class="trip_btn1 mr-1">查看詳情</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-10 mt-lg-4 px-lg-4 pl-3">
                <div class="trip_item_border">
                    <div class="row no-gutters">
                        <div class="col-5 trip_item_image">
                            <img src="img/img01.png" width="100%" />
                        </div>
                        <div class="col-7 trip_item_body py-lg-1 pl-2 pr-1">
                            <div class="trip_item_body_title my-lg-3 mx-lg-4 m-2">蒐集離島媽祖</div>
                            <div class="trip_item_body_body mx-lg-4">
                                <div class="py-lg-1"><i class="fas fa-map-marker-alt"></i>澎湖-蘭嶼-綠島</div>
                                <div class="py-lg-1 pb-1"><i class="far fa-clock"></i>4天3夜</div>
                                <div class="py-1 d-none d-lg-block"><i class="fas fa-quote-left"></i>是媽祖叫我去的！</div>
                            </div>
                            <div class="tripc_item_body_price mx-lg-4 py-lg-1 px-2"><span>NTD 3,250</span> 元起
                            </div>
                            <div class="d-flex justify-content-end pt-1">
                                <div class="trip_btn1 mr-1">查看詳情</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>

    <div class="trip_fixed_bottom w-100 d-flex justify-content-between p-2 fixed-bottom d-lg-none ">
        <div class="trip_fixed_bottom1 py-2"><i class="fas fa-shopping-cart px-2" style="color: #fff;"></i><span>已</span>加入購物車
        </div>
        <div class="trip_fixed_bottom_line"></div>
        <div class="trip_fixed_bottom1 py-2" onclick="location.href='cart.php';">前往結帳</div>
    </div>
    </div>


    <div class="modal fade trip-more-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content trip_details">
                <div class="modal-header">
                    <h4 class="modal-title trip_details_text pl-3 pl-lg-5 pt-2 pt-lg-4" id="myLargeModalLabel">費用詳情</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span
                            aria-hidden="true">×</span> </button>
                </div>
                <div class="modal-body pt-lg-0 pt-0 px-lg-5">
                    <div class="container-fluid">
                        <div id="trip_detail" class="row">
                            <div class="col-6">選擇造訪日期</div>
                            <div class="col-6 ">2021-06-05</div>
                            <div class="col-6 ">方案類型</div>
                            <div class="col-6 ">導覽</div>
                            <div class="col-6 ">方案費用</div>
                            <div class="col-6 ">0元</div>
                            <div class="col-6 ">人數</div>
                            <div class="col-6 ">2人</div>
                            <div class="col-6 ">每人</div>
                            <div class="col-6 ">NTD 1,200元</div>
                            <div class="col-6 border-top">小計</div>
                            <div class="col-6 border-top">NTD 2,400元</div>
                        </div>
                    </div>
                </div>
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

        var today = new Date();
        var dd = today.getDate();
        var mm = today.getMonth() + 1;
        var yyyy = today.getFullYear();
        if (dd < 10) {
            dd = '0' + dd
        }
        if (mm < 10) {
            mm = '0' + mm
        }
        today = yyyy + '-' + mm + '-' + dd;
        $(".trip_input_date").attr("min", today);

        $(".trip_title_img .trip_imghover img").click(function () {
            $("#trip_imgclick").attr("src", $(this).attr("src"))
        });

        $("#trip_solution_checkbox .trip_btn_mobile+").click(function () {
            // 把單價取出來轉換成整數
            var price = parseInt($("#trip_price").val());
            // 對事件元素增加或取消active
            $(this).toggleClass("active");

            // 獲得有選取的方案,且逐一處理
            $("#trip_solution_checkbox .active").each(function () {
                // 把方案價格取出轉成整數並與前單價price加總
                price = price + parseInt($(this).data('price'));
            });
            // 加總後金額增加千位符號，放進元素
            $("#trip_amount").text(price.numberFormat(0, '.', ','));
            trip_summary();
            // $("#trip_solution_checkbox .active").each(function () {
            //     console.log($(this).text());
            // });
            //console.log($("#trip_price").val());
            //console.log($("#trip_qty").val());
            //console.log($("#date_today").val());
            //
        });
        // 計算總金額且產出新的費用詳情
        function trip_summary() {
            // 取出加總後金額
            var amount_text = $("#trip_amount").text();
            // 加總後金額拿掉千位數符號
            var amount = amount_text.replace(/,/g, "");
            // 加總後金額千位數拿掉後轉成整數
            amount = parseInt(amount);
            // 取出人數轉成整數
            var qty = parseInt($("#trip_qty").val());
            // 加總後金額*人數=總金額
            var sum = amount * qty;
            // 總金額加上千位符號
            var sum_text = sum.numberFormat(0, '.', ',');
            // ***總金額放進元素
            $("#trip_calculate").text(sum_text);
            var solution_text = "";
            var solution_price = 0;
            // 把選取的方案逐一處理
            $("#trip_solution_checkbox .active").each(function () {
                // 把方案名稱串成一個變數
                solution_text += $(this).text() + " ";
                // 把方案費用取出來轉成整數加總
                solution_price += parseInt($(this).data('price'));
            });
            // 把加總後的方案費用加上千位符號
            var solution_price_text = solution_price.numberFormat(0, '.', ',');
            // ***把費用詳情清空後放進新的費用詳情
            $("#trip_detail").empty().append('<div class="col-6">選擇造訪日期</div><div class="col-6 ">' + $("#date_today").val() + '</div><div class="col-6 ">方案類型</div><div class="col-6 ">' + solution_text + '</div><div class="col-6 ">方案費用</div><div class="col-6 ">' + solution_price_text + '元</div><div class="col-6 ">人數</div><div class="col-6 ">' + qty + '人</div><div class="col-6 ">每人</div><div class="col-6 ">NTD ' + amount_text + '元</div><div class="col-6 border-top">小計</div><div class="col-6 border-top">NTD ' + sum_text + '元</div>');

            // <div class="col-6">選擇造訪日期</div>
            //                 <div class="col-6 ">2021-06-05</div>
            //                 <div class="col-6 ">方案類型</div>
            //                 <div class="col-6 ">導覽</div>
            //                 <div class="col-6 ">方案費用</div>
            //                 <div class="col-6 ">0元</div>
            //                 <div class="col-6 ">人數</div>
            //                 <div class="col-6 ">2人</div>
            //                 <div class="col-6 ">每人</div>
            //                 <div class="col-6 ">NTD 1,200元</div>
            //                 <div class="col-6 border-top">小計</div>
            //                 <div class="col-6 border-top">NTD 2,400元</div>

        }
        // 人數有變化時進行處理
        $("#trip_qty").change(trip_summary);
        // 日期有變化時進行處理
        $('#date_today').change(trip_summary);

        trip_summary();

        // mobile加入購物車



        // 網頁費用清單

        $("#trip_solution_checkbox1 .trip_btn2+").click(function () {
            // 把單價取出來轉換成整數
            var price = parseInt($("#trip_price").val());
            // 對事件元素增加或取消active
            $(this).toggleClass("active");

            // 獲得有選取的方案,且逐一處理
            $("#trip_solution_checkbox1 .active").each(function () {
                // 把方案價格取出轉成整數並與前單價price加總
                price = price + parseInt($(this).data('price'));
            });
            // 加總後金額增加千位符號，放進元素
            $("#trip_amount1").text(price.numberFormat(0, '.', ','));
            trip_summary1();
            // $("#trip_solution_checkbox .active").each(function () {
            //     console.log($(this).text());
            // });
            //console.log($("#trip_price").val());
            //console.log($("#trip_qty").val());
            //console.log($("#date_today").val());
            //
        });
        // 計算總金額且產出新的費用詳情
        function trip_summary1() {

            // 取出加總後金額
            var amount_text = $("#trip_amount1").text();
            // 加總後金額拿掉千位數符號
            var amount = amount_text.replace(/,/g, "");
            // 加總後金額千位數拿掉後轉成整數
            amount = parseInt(amount);
            // 取出人數轉成整數
            var qty = parseInt($("#trip_qty1").val());
            // 加總後金額*人數=總金額
            var sum = amount * qty;
            // 總金額加上千位符號
            var sum_text = sum.numberFormat(0, '.', ',');
            // ***總金額放進元素
            $("#trip_calculate1").text(sum_text);
            var solution_text = "";
            var solution_price = 0;
            // 把選取的方案逐一處理
            $("#trip_solution_checkbox1 .active").each(function () {
                // 把方案名稱串成一個變數
                solution_text += $(this).text() + " ";
                // 把方案費用取出來轉成整數加總
                solution_price += parseInt($(this).data('price'));
            });
            // 把加總後的方案費用加上千位符號
            var solution_price_text = solution_price.numberFormat(0, '.', ',');
            // ***把費用詳情清空後放進新的費用詳情
            $("#trip_detail").empty().append('<div class="col-6">選擇造訪日期</div><div class="col-6 ">' + $("#date_today1").val() + '</div><div class="col-6 ">方案類型</div><div class="col-6 ">' + solution_text + '</div><div class="col-6 ">方案費用</div><div class="col-6 ">' + solution_price_text + '元</div><div class="col-6 ">人數</div><div class="col-6 ">' + qty + '人</div><div class="col-6 ">每人</div><div class="col-6 ">NTD ' + amount_text + '元</div><div class="col-6 border-top">小計</div><div class="col-6 border-top">NTD ' + sum_text + '元</div>');

        }
        // 人數有變化時進行處理
        $("#trip_qty1").change(trip_summary1);
        // 日期有變化時進行處理
        $('#date_today1').change(trip_summary1);
        trip_summary1();

        // 加入購物車
        $('.mybtn_cart_add').click(function(){
            if($(this).hasClass('active')) {
                return;
            }
            var btn = this;
            var date = $('#date_today1').val();
            var qty = $('#trip_qty1').val();
            var solution_text = "";
            // 把選取的方案逐一處理
            $("#trip_solution_checkbox1 .active").each(function () {
                // 把方案名稱串成一個變數
                solution_text += $(this).text() + " ";
            });
            // 取出加總後金額
            var amount_text = $("#trip_amount1").text();
            // 加總後金額拿掉千位數符號
            var amount = amount_text.replace(/,/g, "");
            // 加總後金額千位數拿掉後轉成整數
            amount = parseInt(amount);

            if(!date) {
                $('#date_today1').addClass('is-invalid');
            } else {
                $('#date_today1').removeClass('is-invalid');
                
                $.ajax({
                    type: "POST",
                    url: 'trip_api.php',
                    data: {
                        op: 'add_cart',
                        id: $('#trip_id').val(),
                        name: $('#trip_name').val(),
                        image: $('#trip_image').val(),
                        date: date,
                        qty: qty,
                        solution: solution_text,
                        price: amount,
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
                
            }
        });

        // 加入購物車
        $('.trip_fixed_bottom1').click(function(){
            if($(this).hasClass('active')) {
                return;
            }
            var btn = this;
            var date = $('#date_today').val();
            var qty = $('#trip_qty').val();
            var solution_text = "";
            // 把選取的方案逐一處理
            $("#trip_solution_checkbox .active").each(function () {
                // 把方案名稱串成一個變數
                solution_text += $(this).text() + " ";
            });
            // 取出加總後金額
            var amount_text = $("#trip_amount").text();
            // 加總後金額拿掉千位數符號
            var amount = amount_text.replace(/,/g, "");
            // 加總後金額千位數拿掉後轉成整數
            amount = parseInt(amount);

            if(!date) {
                $('#date_today').addClass('is-invalid');
                $('#date_today').focus();

            } else {
                $('#date_today').removeClass('is-invalid');
                
                $.ajax({
                    type: "POST",
                    url: 'trip_api.php',
                    data: {
                        op: "add_cart",
                        id: $('#trip_id').val(),
                        name: $('#trip_name').val(),
                        image: $('#trip_image').val(),
                        date: date,
                        qty: qty,
                        solution: solution_text,
                        price: amount,
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
                
            }
        });



        $(".trip_btn1").click(function () {
            $(this).toggleClass("active");
        });

        $(".trip_like_mobile, .mybtn_like").click(function () {
            let btn = this;
            $.ajax({
                type: "POST",
                url: 'trip_api.php',
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





    </script>

<?php include __DIR__. '/parts/html-foot.php'; ?>