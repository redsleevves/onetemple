<?php

require __DIR__ . "/parts/config.php"; 

$_gdata = [
    // 網頁名稱
    'title' => '灣廟-線上點燈服務說明', 
    // 頁面私有 css
    'styles' => '
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/11.0.2/css/bootstrap-slider.min.css"
    integrity="sha512-3q8fi8M0VS+X/3n64Ndpp6Bit7oXSiyCnzmlx6IDBLGlY5euFySyJ46RUlqIVs0DPCGOypqP8IRk/EyPvU28mQ=="
    crossorigin="anonymous" />
    <link rel="stylesheet" href="' . WEB_ROOT . '/css/breadcrumb.css">
    <link rel="stylesheet" href="' . WEB_ROOT . '/css/navbar2.css">'
    ,
    //頁面私有 scripts
    'scripts' => '
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/11.0.2/bootstrap-slider.min.js"
        integrity="sha512-f0VlzJbcEB6KiW8ZVtL+5HWPDyW1+nJEjguZ5IVnSQkvZbwBt2RfCBY0CBO1PsMAqxxrG4Di6TfsCPP3ZRwKpA=="
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>', 
];

?>


<!-- 整個頁面的頭 -->
<?php include __DIR__ . '/parts/ourhead.php'; ?>
<!-- 導航用代碼包含彈窗 -->
<?php include __DIR__ . '/parts/ournav.php'; ?>

<style>
    /* page_1~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */
/* 基本設定 */
body {
    font-family: 'Faustina', serif !important;
    /* font-family: 'Sitka Display', NSimSun, 'sans-serif'; */
    /* font-family: 'Noto Sans TC', serif !important; */
   background-image: url(./img/nav_bcc.png);
}

h2 {
    font-size: 35px;
    font-weight: bold;
}

h3 {
    font-size: 32px;
    font-weight: normal;
}

h4 {
    font-size: 24px;
    font-weight: normal;
    
}
h5{
    /* 追加 */
    letter-spacing:3px
}
p {
    /* 字級可自訂 */
    /* font-size: 20px; */
    font-size: 16px;
    font-weight: normal;
    /* 追加 */
    margin: 0;
    letter-spacing:2px;
    /* font-family: 'Faustina', serif; */
    /* font-family: 'Noto Sans TC', serif !important; */
    /* 追加修正 */
    text-align: justify;
}



/* 按鈕 */

.btns {
    margin: 300px;
}

button {
    padding: 12px 18px;
    background-color: #cc543a;
    color: white;
    border-radius: 30px;
    border: none;

    /* font-family: 'Sitka Display', NSimSun, 'sans-serif'; */

}

button:focus {
    outline: 0;
    box-shadow: 0 0 0 1pt rgb(77, 77, 77);
}

.btnss {
    padding: 12px 18px;
    background-color: #cc543a;
    color: white;
    border-radius: 30px;
    border: none;
    
    /* font-family: 'Sitka Display', NSimSun, 'sans-serif'; */
    cursor: pointer; 
}

i {
    padding: 0 8px;
}
a:hover{
    text-decoration: none;
    color:#cc543a;
}



/* 麵包屑 */
.breadcrumb_style {
    background-image: url(./img/nav_background_1.png);
    /* navbar多厚 就推多少paddding */
  
}

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

    /* p 特別設定 */
    p {
        line-height: 2rem;
    }

    .light_Description_page_1 {

        background-image: url(./img/nav_background_1.png);
    }

    .textalign_center {
        text-align: center;
    }

    .light_Description_page_1_title_p p {
        text-align: center;
    }



    .light_Description_page_1_p p {
        text-align: center;
    }

    .light_Description_page_1_p_border {
        border-bottom: 1px solid #d0d0d0;
        margin: auto;
    }



    .buttonstyle {
        display: flex;
        justify-content: space-evenly;
        flex: 0 0 20%;
        max-width: 285px;
        margin: auto;
    }



    .light_Description_page_1_backgroundimg {
        opacity: 0.35;
        z-index: 1;
    }

    .position_relative {
        position: relative;
    }

    .backgroundimg_god {
        position: absolute;
        right: 0;
        bottom: 0;
        width: 50%;
    }

    .backgroundimg_god img {
        width: 100%;
    }



    .redcolor {
        color: #cc543a;
    }

    .overflowhid {
        overflow: hidden;
    }

    .backgroundimg_amulet img {
        width: 100%;

    }

    .backgroundimg_lantern img {
        width: 100%;
    }


    .light_Description_page_1_boxset {
        overflow-y: scroll;
        overflow-x: hidden;
        height: 400px;

    }

    .graycolor {
        background-color: #c0c0c0;
    }

    .whitecolor {
        color: white;
    }

    .btnhovw:hover {
        color: #fff;
    }

    /* 手機在這邊~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */
    /* min-width 桌面板 */
    @media (min-width:1400px) {
        .displayno {
            display: none;
        }

        .backgroundimg_amulet {
            width: 25%;
            position: absolute;
            bottom: 20%;
            opacity: 0.2;
        }

        .backgroundimg_lantern {
            width: 50%;
            position: absolute;
            top: -4%;
            right: 0;
            opacity: 0.2;
        }

        .padtop150 {
            padding-top: 100px;
        }

        .padding_bottom_rem {
            padding-bottom: 3rem;
        }

        .padding_bottom_rem2 {
            padding-top: 2rem;
        }

        .padding_bottom150 {
            padding-bottom: 150px;
        }
        .breadcrumb_style_1 {
        width: 80%;
    }
    }

    /* 中間版 */
    @media (min-width:741px) and (max-width:1399px) {
        .displayno {
            display: none;
        }

        .backgroundimg_amulet {
            width: 25%;
            position: absolute;
            bottom: 20%;
            opacity: 0.2;
        }

        .backgroundimg_lantern {
            width: 50%;
            position: absolute;
            top: 0;
            right: 0;
            opacity: 0.2;
        }

        .padding_bottom_rem {
            padding-bottom: 3rem;
        }

        .padding_bottom_rem2 {
            padding-top: 2rem;
        }

        .padding_bottom150 {
            padding-bottom: 150px;
        }
        .breadcrumb_style_1 {
       
       width: 85%;
}
    }



    /* max-width 手機板 */
    @media (max-width:740px) {
        .breadcrumb_style_1 {
            /* contanier架構專用 padding 0 15px  */
            padding: 20px 15px;
            width: 100%;
        }

        .backgroundimg_lantern {
            width: 100%;
            position: absolute;
            top: -9%;
            right: 0;
            opacity: 0.2;
        }

        .backgroundimg_amulet {
            width: 70%;
            position: absolute;
            bottom: 13%;
            opacity: 0.2;
        }

        .displayno_md {
            display: none;
        }

        .padding_bottom_rem {
            padding-bottom: 1rem;
        }

        .padding_bottom_rem2 {
            padding-top: 1rem;
        }

        .fontp_md {
            font-size: 12px;
        }

        .padding_bottom150 {
            padding-bottom: 1rem;
        }

        .padtp13 {
            padding-top: 2%;
        }
        .breadcrumb_style_1 {
       
       width: 85%;
}
    }
</style>




    <!-- 我是麵包屑-->
    <div class="breadcrumb_style   backgroundimg_1">
        <div class="d-flex flex-wrap breadcrumb_style_1 ">
            <a href="./index" class="astlyep">灣廟</a>
            <!-- 共用雲端找箭頭icon-->
            <img src="./img/nav_arrow_right.svg">
            <a href="./light_Introduction.php" class="astlyep">燈種介紹</a>
            <img src="./img/nav_arrow_right.svg">
            <a href="./light_Description.php" class="astlyep">服務說明</a>
        </div>
    </div>


    <!-- page_1~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

    <div class="light_Description_page_1 position_relative padtop150 ">

        <!-- 我是 燈籠圖 -->
        <div class="light_Description_page_1_backgroundimg  backgroundimg_lantern">
            <img src="./img/light_lantern_01.png">
        </div>

        <!-- page_1 桌機 內容集合 -->
        <div class="light_Description_page_1_set container  displayno_md">


            <!-- page_1文字集合 -->
            <div class="light_Description_page_1_textset">
                <!-- page_1上面大標題+敘述 -->
                <div class="light_Description_page_1_title padding_bottom_rem ">
                    <div class="light_Description_page_1_title_h textalign_center padding_bottom_rem">
                        <h3>線上點燈-服務說明</h3>
                    </div>
                    <div class="light_Description_page_1_title_p textalign_center">
                        <p>本服務同現場點燈，皆遵循傳統習俗，於各廳堂廟宇內舉行正式儀式，為信眾完成安奉作業，以免除信眾舟車勞頓之苦。
                        </p>
                    </div>
                </div>

            </div>





            <!-- page_1內文 祈福燈種 -->
            <div class="light_Description_page_1_h5p padding_bottom_rem ">
                <h5 class="redcolor">祈福燈種:</h5>
                <br>
                <p>祈福燈種包括 (1)安太歲、(2)光明燈、(3)文昌燈、(4)發財燈、(5)姻緣燈、(6)平安燈。</p>
            </div>
            <!-- page_1內文 安奉費用 -->
            <div class="light_Description_page_1_h5p padding_bottom_rem ">
                <h5 class="redcolor">安奉費用:</h5>
                <br>
                <p>安太歲為每盞800元，其餘燈種每盞燈安奉費用為600元，各項服務特色請參考本網站相關說明。</p>
            </div>
            <!-- page_1內文 付費方式 -->
            <div class="light_Description_page_1_h5p padding_bottom_rem ">
                <h5 class="redcolor">付費方式:</h5>
                <br>
                <p>(1) 線上刷卡(VISA信用卡、銀聯卡、美國運通卡)
                    <br>(2) 7-ELEVEN門市 ibon代碼繳費
                    <br>(3) 中國信託紅利兌換
                    <br>(4) 新光銀行線上轉帳
                    <br>(5) 全家 FamiPort代碼繳費
                </p>
                <p> ※ 依活動內容不同可選用付費方式將有變動。</p>
            </div>
            <!-- page_1內文 申請流程 -->
            <div class="light_Description_page_1_h5p padding_bottom_rem ">
                <h5 class="redcolor">申請流程:</h5>
                <br>
                <p>(1)依步驟填寫相關資料以供廟方進行資料確認及安奉作業。
                    <br>
                    (2)完成申請作業後，系統即提供一組訂單編號，供信眾查詢用。
                    <br>
                    (3)廟方將於收到申請資料後15天內完成安奉作業並以平信寄送通知函與贈品予民眾。
                    <br>
                    (4)欲寄送國外者請填寫英文地址，並將依寄送區域酌收寄送郵資。
                </p>

            </div>

            <!-- 我是 護身符圖 -->
            <div class="light_Description_page_1_backgroundimg  backgroundimg_amulet ">
                <img src="./img/light_amulet_01.png">
            </div>


            <!-- page_1內文 其他須知 -->
            <div class="light_Description_page_1_h5p padding_bottom_rem ">
                <h5 class="redcolor">其他須知:</h5>
                <br>
                <p>(1)填寫國曆生辰者將由廟方轉為農曆生辰進行安奉。
                    <br>
                    (2)本年度線上點燈之贈品為平安符，感謝狀及贈品將依申請人所填寫之寄送地址寄送。
                    <br>
                    (3)若因申請人未提供正確寄送地址而無法送達物品，廟方將不負責查詢地址、重新寄發或其他相關事務。
                    <br>
                    (4)農曆年前之訂單，需至該年度農曆正月15日前，由廟方擇良辰吉日完成該年度第一次安奉作業。
                    <br>
                    (5)本年度申請之各燈種請將統一於農曆12月24日送神後拆除。
                    <br>
                    (6)透過線上點燈之民眾不得要求將本年度之贈品折換現金、兌換券或其他物品。
                    <br>
                    (7)本服務說明與贈品得由天后宮於各年度視情況而調整。
                </p>
            </div>
            <!-- page_1內文 底部 -->
            <!-- page_1內文 底部線 -->
            <div class="light_Description_page_1_p_border col-8 padding_bottom_rem"></div>
            <!-- page_1內文 底部P -->
            <div class="light_Description_page_1_p padding_bottom_rem textalign_center padding_bottom_rem2">

                <p>當您點選下方「同意」按鈕時，則表示您已閱讀並同意「隱私權政策」聲明。</p>


            </div>


            <div class="light_Description_page_1_button buttonstyle padding_bottom150 ">

                <a href="./light_Introduction.html" class="whitecolor btnhovw">
                    <button class="graycolor ">
                        <p>不同意</p>
                    </button>
                </a>




                <a href="./light_Fill_in_theinformation.html" class="whitecolor btnhovw">
                    <button>
                        <p>同意</p>
                    </button>
                </a>



            </div>

        </div>


        <!-- page_1 手機用 內容集合 -->
        <div class="light_Description_page_1_set container  displayno padtp13">



            <!-- page_1 手機用 上面大標題 -->

            <div class="light_Description_page_1_title_h textalign_center padding_bottom_rem">
                <h3>線上點燈-服務說明</h3>
            </div>


            <!-- page_1 手機用 內文集合 -->

            <div class="light_Description_page_1_boxset ">
                <div class="light_Description_page_1_title_p textalign_center padding_bottom_rem">
                    <p>本服務同現場點燈，皆遵循傳統習俗，於各廳堂廟宇內舉行正式儀式，為信眾完成安奉作業，以免除信眾舟車勞頓之苦。
                    </p>


                </div>





                <!-- page_1 手機用 內文 祈福燈種 -->
                <div class="light_Description_page_1_h5p padding_bottom_rem ">
                    <h5 class="redcolor">祈福燈種:</h5>
                    <br>
                    <p>祈福燈種包括 (1)安太歲、(2)光明燈、(3)文昌燈、(4)發財燈、(5)姻緣燈、(6)平安燈。</p>
                </div>
                <!-- page_1 手機用 內文 安奉費用 -->
                <div class="light_Description_page_1_h5p padding_bottom_rem ">
                    <h5 class="redcolor">安奉費用:</h5>
                    <br>
                    <p>安太歲為每盞800元，其餘燈種每盞燈安奉費用為600元，各項服務特色請參考本網站相關說明。</p>
                </div>
                <!-- page_1手機用 內文 付費方式 -->
                <div class="light_Description_page_1_h5p padding_bottom_rem ">
                    <h5 class="redcolor">付費方式:</h5>
                    <br>
                    <p>(1) 線上刷卡(VISA信用卡、銀聯卡、美國運通卡)
                        <br>(2) 7-ELEVEN門市 ibon代碼繳費
                        <br>(3) 中國信託紅利兌換
                        <br>(4) 新光銀行線上轉帳
                        <br>(5) 全家 FamiPort代碼繳費
                    </p>
                    <p> ※ 依活動內容不同可選用付費方式將有變動。</p>
                </div>
                <!-- page_1 手機用 內文 申請流程 -->
                <div class="light_Description_page_1_h5p padding_bottom_rem ">
                    <h5 class="redcolor">申請流程:</h5>
                    <br>
                    <p>(1)依步驟填寫相關資料以供廟方進行資料確認及安奉作業。
                        <br>
                        (2)完成申請作業後，系統即提供一組訂單編號，供信眾查詢用。
                        <br>
                        (3)廟方將於收到申請資料後15天內完成安奉作業並以平信寄送通知函與贈品予民眾。
                        <br>
                        (4)欲寄送國外者請填寫英文地址，並將依寄送區域酌收寄送郵資。
                    </p>

                </div>

                <!-- 我是 手機用 護身符圖 -->
                <!-- <div class="light_Description_page_1_backgroundimg  backgroundimg_amulet ">
                    <img src="./img/deco/amulet_01.png">
                </div> -->


                <!-- page_1內文 手機用 其他須知 -->
                <div class="light_Description_page_1_h5p padding_bottom_rem ">
                    <h5 class="redcolor">其他須知:</h5>
                    <br>
                    <p>(1)填寫國曆生辰者將由廟方轉為農曆生辰進行安奉。
                        <br>
                        (2)本年度線上點燈之贈品為平安符，感謝狀及贈品將依申請人所填寫之寄送地址寄送。
                        <br>
                        (3)若因申請人未提供正確寄送地址而無法送達物品，廟方將不負責查詢地址、重新寄發或其他相關事務。
                        <br>
                        (4)農曆年前之訂單，需至該年度農曆正月15日前，由廟方擇良辰吉日完成該年度第一次安奉作業。
                        <br>
                        (5)本年度申請之各燈種請將統一於農曆12月24日送神後拆除。
                        <br>
                        (6)透過線上點燈之民眾不得要求將本年度之贈品折換現金、兌換券或其他物品。
                        <br>
                        (7)本服務說明與贈品得由天后宮於各年度視情況而調整。
                    </p>
                </div>
            </div>



            <!-- page_1 手機用 內文 底部線 -->
            <div class="light_Description_page_1_p_border col-lg-8 padding_bottom_rem"></div>
            <!-- page_1 手機用 內文 底部P -->
            <div class="light_Description_page_1_p padding_bottom_rem textalign_center padding_bottom_rem2">

                <!-- <p class="fontp_md">已詳細閱讀上述說明並同意「隱私權政策」</p> -->
                <div class="form-check ">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        已詳細閱讀上述說明並同意「隱私權政策」
                    </label>
                </div>

            </div>


            <div class="light_Description_page_1_button buttonstyle padding_bottom150 ">

                <a href="./light_Introduction.html" class="whitecolor btnhovw">
                    <button class="graycolor ">
                        <p>不同意</p>
                    </button>
                </a>




                <a href="./light_Fill_in_theinformation.html" class="whitecolor btnhovw">
                    <button>
                        <p>同意</p>
                    </button>
                </a>


            </div>

        </div>



    </div>









    <!-- Js  相關設定~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <!-- jquery -->
    <?php include __DIR__ . '/parts/ourscripts.php'; ?>

    <!-- js jq 開始 -->

    <script>
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

        //overlay sub-menu
        $(document).ready(function() {
            $('.nav_ser_mobile').click(function() {

                $('.nav_dropDownMenu_mobile').toggle('slow');

            })
        });
    </script>


<?php include __DIR__. '/parts/html-foot.php'; ?>