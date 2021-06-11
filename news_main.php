<?php 

require __DIR__ . '/parts/config.php'; 

$_gdata = [
    // 網頁名稱
    'title' => '灣廟 | NEWS', 
    // 頁面私有 css
    'styles' => '<link rel="stylesheet" href="' . WEB_ROOT . '/css/breadcrumb.css">
    <link rel="stylesheet" href="' . WEB_ROOT . '/css/navbar2.css">',
    //頁面私有 scripts
    'scripts' => '', 
];


?>

<?php
// $title = '灣廟 | NEWS';
$pageName = 'news_main';

// 取得總筆數、總頁數、該頁的商品資料

$perPage = 5; //一頁有幾個商品
$page = isset($_GET['page']) ? intval($_GET['page']) : 1; //使用者在看第幾頁

$t_sql = "SELECT COUNT(1) FROM news_main";
$totalRows = $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0]; //總共有多少商品
$totalPages = ceil($totalRows/$perPage);

$p_sql = sprintf("SELECT * FROM news_main LIMIT %s, %s", ($page-1)*$perPage, $perPage);

$rows = $pdo->query($p_sql)->fetchAll();


?>

<!-- 整個頁面的頭 -->
<?php include __DIR__ . '/parts/ourhead.php'; ?>
<!-- 導航用代碼包含彈窗 -->
<?php include __DIR__ . '/parts/navbar2.php'; ?>
<style>
        body {
            font-family: 'Faustina', serif;
            background-image: url(./img/nav_bcc.png);
        }

        p {
            margin: 0;
        }


        /* news */
        .news_content {
            display: flex;
            width: 80%;
            margin: 20px auto 0 auto;


            /* border: 1px solid red; */
        }

        .news_pageTitle {
            width: 25%;
            color: #cc543a;
            font-size: 30px;
            font-weight: 700;
            letter-spacing: 0.2rem;

            /* 為了讓文字與圖片切齊 */
            line-height: 0;
            padding: 10px 0 0 0;
        }

        .news_box {
            display: flex;
            width: 85%;
            justify-content: space-between;
            margin: 0 0 50px 0;

            position: relative;
        }

        @keyframes slide {
            from {
                bottom: -100px;
                opacity: 0;
            }

            to {
                bottom: 0;
                opacity: 1;
            }
        }

        .hideme {
            opacity: 0;
        }


        .news_mainImg {
            width: 350px;
            height: 350px;
            overflow: hidden;
        }

        .news_mainImg img {
            width: 100%;
            height: 100%;
            object-fit: cover;

            
        }

        .news_mainWordBox {
            width: 65%;
            padding: 0 0 0 18px;

            /* border: 1px solid red; */
        }

        .news_date {
            font-size: 20px;
            font-weight: 600;
            letter-spacing: 0.1rem;
        }

        .news_title {
            font-size: 26px;
            font-family: 'Noto Serif TC', serif;
            font-weight: 600;
            letter-spacing: 0.1rem;
        }

        .news_subContent {
            width: 50%;
            margin: 30px 0 0 0;
            /* border: 1px solid red; */
        }

        .news_moreLink {
            margin: 20px 0 0 0;
            color: #cc543a;
        }

        .news_moreLink a {
            color: #cc543a;
            font-weight: 600;
        }

        /* Page */
        .news_slidePage {
            margin: 80px 0 40px 0;
        }

        .trip_page_item {
            background-color: transparent;
            padding: .5rem 1rem;
            border: 1px solid #cdcdcd;
            color: #707070;
            font-size: 24px;
        }

        .trip_page_item:hover {
            background-color: #c0c0c0;
            color: #FFF;
            font-size: 24px;
            font-weight: bold;
        }
        .page-item.active .page-link{
            background-color: #c0c0c0;
            border-color:#c0c0c0;
        }

        .itemDisplayNone{
            display: none;
        }


        /* goTop */
        .index_goTopImg {
            width: 50px;
            position: fixed;
            bottom: -100px;
            right: 20px;
            transition: .5s;
            z-index: 9;
        }

        .index_goTopImg svg {
            width: 100%;
        }

        .index_goTopImg.show {
            bottom: 20px;
        }

        /* footer {
            width: 100%;
            height: 70px;
            background-color: #cc543a;
            color: white;
            letter-spacing: 3px;
            display: flex;
            justify-content: center;
            align-items: center;
        } */


        @media (max-width: 770px) {

            /* nav */
            .nav_burgurBar {
                display: flex;
                align-items: center;
                justify-content: space-between;
            }

            .nav_navbar_com {
                display: none;
            }

            .nav_overlayNav {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
            }

            /* news */
            .news_content {
                flex-direction: column;
                align-items: center;
                /* margin-top: 30px; */
            }

            .news_pageTitle {
                margin-bottom: 30px;
                
                line-height: 1.5;
                padding: 0;
            }

            .news_box {
                width: 100%;
                flex-direction: column;
            }

            .news_mainWordBox {
                width: 100%;
                padding: 0;
            }

            .news_subContent{
                display: none;
            }
            .news_moreLink{
                margin: 10px 0 0 0;
            }
        }
</style>




    <!-- 我是麵包屑-->
    <div class="breadcrumb_style   backgroundimg_1">
            <div class="d-flex flex-wrap breadcrumb_style_1 ">
                <a href="<?= WEB_ROOT?>/index.php" class="astlyep">首頁</a>
                <!-- 共用雲端找箭頭icon-->
                <img src="./img/nav_arrow_right.svg">
                <p class="astlyep">最新消息</p>
            </div>
    </div>


    <div class="news_content">
        <div class="news_pageTitle">NEWS</div>
        <div class="news_area">
        <?php foreach($rows as $r): ?>
            <div class="news_box">
                <div class="news_mainImg">
                    <img src="<?= WEB_ROOT ?>/img/<?= $r['img'] ?>.jpg" alt="">
                </div>
                <div class="news_mainWordBox">
                    <div class="news_date"><?= $r['date'] ?></div>
                    <div class="news_title"><?= $r['main_title'] ?></div>
                    <div class="news_subContent"><?= $r['sub_title'] ?></div>
                    <div class="news_moreLink">
                        <a href="<?= WEB_ROOT ?>/news_detail.php?sid=<?= $r['sid'] ?>">Read More+</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

           

            <div class="news_slidePage">
                <nav class="trip_page position-relative d-flex justify-content-end"
                    aria-label="Page navigation example">
                    <ul class="pagination ">
                        <li class="arrow-page-left page-item">
                            <a class="page-link trip_page_item" href="?page= <?= $page-1 ?>">
                                <i class="fas fa-chevron-left"></i>
                            </a>
                        </li>

                        <?php for($i=1; $i<=$totalPages; $i++): ?>
                            <li class="page-item <?= $i == $page ? 'active' : '' ?>">
                                <a class="page-link trip_page_item" href="?page= <?= $i ?>"><?= $i ?></a>
                            </li>
                        <?php endfor; ?>
                        
                        <li class="arrow-page-right page-item <?= $page>=$totalPages ? 'disabled' : '' ?>">
                            <a class="page-link trip_page_item" href="?page= <?= $page+1 ?>">
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <?php include __DIR__ . '/parts/go-top.php' ?>

    <!-- 導航用代碼包含彈窗 -->
    <?php include __DIR__ . '/parts/ourscripts.php'; ?>
    <script>

        //滑動出現
        $(window).scroll(function () {
            // console.log('height',$(this).scrollTop());

            $('.hideme').each(function () {
                let bottom_of_object = $(this).offset().top + 150;
                let bottom_of_window = $(window).scrollTop() + $(window).height();

                if (bottom_of_window > bottom_of_object) {
                    $(this).animate({ 'opacity': '1' }, 1300);
                }
            });
        });

        //一開始就滑上來
        $(document).ready(function () {

            $('.news_box').css('animation', 'slide 1.3s ease-in');

        });

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
                scrollTop: 0,
            }, 700);
        });


        //判斷page第幾頁，箭頭是否消失
        if (<?=$page?> <= 1){
            $('.arrow-page-left').addClass('itemDisplayNone')
        }else{
            $('.arrow-page-left').removeClass('itemDisplayNone')
        }

        
        if (<?=$page?> >= <?= $totalPages?>){
            $('.arrow-page-right').addClass('itemDisplayNone')
        }else{
            $('.arrow-page-right').removeClass('itemDisplayNone')
        }

    </script>


    <?php include __DIR__. '/parts/html-foot.php'; ?>

    
