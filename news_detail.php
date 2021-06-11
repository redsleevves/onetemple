<?php include __DIR__ . '/parts/config.php'; ?>
<?php 

$_gdata = [
    // 網頁名稱
    'title' => '灣廟 | NEWS', 
    // 頁面私有 css
    'styles' => '<link rel="stylesheet" href="' . WEB_ROOT . '/css/breadcrumb.css">
    <link rel="stylesheet" href="' . WEB_ROOT . '/css/navbar2.css">',
    //頁面私有 scripts
    'scripts' => '', 
];

// $title = '';
$pageName = 'news_detail';

$sid = (int)$_GET['sid'];

$sql = 'SELECT * FROM news_detail where sid = "'.$sid.'" ';
$v = $pdo->query($sql)->fetchAll();

// echo json_encode([
//     // 'totalRows' => $totalRows,
//     'v' => $v,
// ],JSON_UNESCAPED_UNICODE);

// exit;

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
        p{
            margin: 0;
        }

    /* 麵包屑 */
        .breadcrumb_style_1 {
            padding: 10px 0;
            align-items: center;
            margin: auto;
        }

        .astlyep {
            font-size: 14px;
            letter-spacing: 2px;
            color: #707070;
            list-style-type: none;
            text-decoration: none;

        }

        .breadcrumb_style_1 img {
            height: 10px;
            width: 10px;
            margin: 0 10px;
        }

        /* 桌機用 */
        @media (min-width:1400px) {
            .breadcrumb_style {
                /* navbar多厚 就推多少paddding */
                /* 玳禎navbar桌機版 無填滿 這邊請填滿105px */
                /* padding-top: 105px; */
            }
            .breadcrumb_style_1 {
                width: 80%;
            }
        }

        /* 手機用 */
        @media (max-width:1399px) {
            .breadcrumb_style_1 {
                /* 手機板寬 自行設定 */
                width: 90%;
            }
        }



    /* news-detail */
        .newsDetail_container{
            display: flex;
            width: 80%;
            margin: 40px auto 0 auto;
        }

        .newsDetail_pageTitle {
            width: 25%;
            color: #cc543a;
            font-size: 30px;
            font-weight: 700;
            letter-spacing: 0.2rem;

            /* 為了讓文字與圖片切齊 */
            line-height: 0;
            padding: 10px 0 0 0;
        }

        .newsDetail_area{
            width: 45%;
            margin-left: 30px;
            position: relative;
        }

        @keyframes slide{
            from{
                bottom:-80px;
                opacity: 0;
            }
            to{
                bottom: 0;
                opacity: 1;
            }
        }

        .newsDetail_imgBox{
            max-width: 700px;
            max-height: 700px;
            overflow: hidden;
        }

        .newsDetail_imgBox img{
            width: 100%;
        }

        .newsDetail_date {
            font-size: 20px;
            font-weight: 600;
            letter-spacing: 0.1rem;
        }

        .newsDetail_title {
            font-size: 26px;
            font-family: 'Noto Serif TC', serif;
            font-weight: 600;
            letter-spacing: 0.1rem;
        }

        .newsDetail_content{
            margin: 40px 0 60px 0;
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

    /* footer */
        footer {
            width: 100%;
            height: 70px;
            background-color: #cc543a;
            color: white;
            letter-spacing: 3px;
            display: flex;
            justify-content: center;
            align-items: center;
        }


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
        .newsDetail_container{
            width: 90%;
            flex-direction: column;
            align-items: center;
            /* margin-top: 30px; */
        }
        .newsDetail_pageTitle {
            margin-bottom: 30px;
            line-height: 1.5;
            padding: 0;
        }
        .newsDetail_area{
            width: 100%;
            margin-left: 0px;
        }

        }
</style>


    <!-- 我是麵包屑-->
    <?php foreach($v as $vBC ): ?>
        <div class="breadcrumb_style   backgroundimg_1">
            <div class="d-flex flex-wrap breadcrumb_style_1 ">
                <a href="<?= WEB_ROOT?>/index.php" class="astlyep">首頁</a>
                <!-- 共用雲端找箭頭icon-->
                <img src="./img/nav_arrow_right.svg">
                <a href="<?= WEB_ROOT ?>/news_main.php" class="astlyep">最新消息</a>
                <img src="./img/nav_arrow_right.svg">
                <p class="astlyep"><?= $vBC['main_title'] ?></p>
            </div>
        </div>
    <?php endforeach; ?>
   


    <div class="newsDetail_container">
        <div class="newsDetail_pageTitle">NEWS</div>

        <?php foreach($v as $v ): ?>
            <div class="newsDetail_area">
                <div class="newsDetail_imgBox">
                    <img src="<?= WEB_ROOT ?>/img/<?= $v['img'] ?>.jpg" alt="">
                </div>

                <div class="newsDetail_wordBox">
                    <div class="newsDetail_date mt-3"><?= $v['date'] ?></div>
                    <div class="newsDetail_title"><?= $v['main_title'] ?></div>
                    <p class="newsDetail_content">
                        <?= $v['article_content'] ?>
                    </p>
                </div>
            </div>
        <?php endforeach; ?>

    </div>


    <?php include __DIR__ . '/parts/go-top.php' ?>

    <!-- 導航用代碼包含彈窗 -->
    <?php include __DIR__ . '/parts/ourscripts.php'; ?>
    <script>

        //一開始進入畫面就滑上來
        $(document).ready(function(){
            $('.newsDetail_area').css('animation','slide 1.3s ease-in')
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
                scrollTop: 0}, 700);
        });

    </script>

    <?php include __DIR__ . '/parts/html-foot.php' ?>