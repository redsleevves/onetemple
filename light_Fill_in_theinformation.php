<?php
error_reporting(E_ALL & ~E_NOTICE);  # 設定輸出錯誤類型
include __DIR__ . '/parts/config.php';
var_dump($_SESSION); # 印出變數在銀幕上



$_gdata = [
    // 網頁名稱
    'title' => '灣廟 | 聖地行旅',
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


$sql = "SELECT * FROM member o  
JOIN member_friend d ON o.sid= d.f_sid
WHERE o.sid=15";

$stmt = $pdo->prepare($sql);
$stmt->execute();
$f_test = $stmt->fetch(PDO::FETCH_ASSOC);

$rows = $pdo->query($sql)->fetchAll();

?>
<!-- 整個頁面的頭 -->
<?php include __DIR__ . '/parts/ourhead.php'; ?>
<!-- 導航用代碼包含彈窗 -->
<?php include __DIR__ . '/parts/navbar2.php'; ?>
<style>
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

    h5 {
        /* 追加 */
        letter-spacing: 3px
    }

    p {
        /* 字級可自訂 */
        /* font-size: 20px; */
        font-size: 16px;
        font-weight: normal;
        /* 追加 */
        margin: 0;
        letter-spacing: 2px;
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

    a:hover {
        text-decoration: none;
        color: #cc543a;
    }



    /* 麵包屑 */
    .breadcrumb_style {
        background-image: url(./img/nav_background_1.png);
        /* navbar多厚 就推多少paddding */

    }

    .breadcrumb_style_1 {
        padding: 20px 0;
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












    .graycolor:hover {

        box-shadow: 1px 1px 1px 1px rgba(0, 0, 0, .15);
        transition: .5s;
    }

    .graycolor {
        background-color: #c0c0c0;
    }



    .butstyle_1 {
        padding: 15px 15px;
    }

    .radius0 {
        border-radius: 0;
    }

    .maxwidth992 {

        width: 85%;
    }

    .dflex {
        display: flex;
    }

    .flexwrap {
        flex-wrap: wrap;
    }

    .aic {
        align-items: center;
    }



    .padding20 {
        padding: 0 20px;
    }

    .p22 {
        font-size: 20px;
        color: #cc543a;
    }

    .redcolorh5 {
        color: #cc543a;
    }

    .pad00010 {
        padding: 0 0 0 10px;

    }

    .opac {
        opacity: 0;
    }

    .juscsb {
        justify-content: space-between;
    }

    .marginauto {
        margin: auto;
    }



    .padddingtop40 {
        padding-top: 40px;
    }

    .borderbottom {
        border-bottom: 1px solid #707070;
    }

    .padddingbottom150 {
        padding-bottom: 150px;
    }

    .padright0 {
        padding-right: 0px;
    }

    .padright40 {
        padding-right: 40px;

    }

    .pad0 {
        padding: 0;
    }

    .vishidden {
        visibility: hidden;
    }

    .butomcolor {
        background-color: #d1d1d1;
    }



    .light_Fill_in_theinformation_ {
        background-image: url(./img/nav_background_1.png);

    }

    .postre {
        position: relative;

    }

    .postab {
        position: absolute;
    }

    .padbut {
        padding: 6px 12px;
        top: 5px;
    }

    .padleft10 {
        padding-left: 10px;
    }

    .butflexmargin {
        display: flex;
        margin: auto;
        justify-content: space-evenly;
        max-width: 400px;
    }

    .butmaxwid {
        max-width: 600px;
        justify-content: center;
    }

    .light_Fill_in_theinformation_card_icon {
        width: 40px;
    }

    .light_Fill_in_theinformation_card_icon img {
        width: 100%;
    }

    .marginauto0auto {
        margin: auto 0 auto auto;

    }

    .visy {
        visibility: hidden;
    }

    .dipay {
        display: none;
    }

    .pad20 {
        padding: 20px 0;
    }

    .lightcard {
        border: 1px solid #707070;
        border-radius: 5px;
        padding: 15px 10px 0 0;
        margin-bottom: 10px;
    }

    .boxlineno {
        border: 0;
    }

    .radius20 {
        border-radius: 20px;
    }

    .backgroundimg_2 {
        background-image: url(./img/nav_background_2.png);
    }

    .modal-body_box {
        overflow-y: scroll;
        overflow-x: hidden;
        height: 500px;
    }

    .displaybor {
        display: block;
    }

    .tac {
        text-align: center;
    }

    .marginauto {
        margin: auto;
    }

    .jucse {
        justify-content: space-evenly;
    }



    .borderline {
        border-top: 1px solid #c0c0c0;
    }

    .borderline_1 {
        padding-bottom: 5%;
        border-bottom: 1px solid #c0c0c0;

    }

    .fwb {
        font-weight: bold;
    }

    form .error,
    ::placeholder {
        color: red;
    }

    input::placeholder {
        color: red;

        font-style: italic;
    }

    .fake_year::before {
        content: "年";

    }

    .fake_month::before {
        content: "月";
    }

    .fake_day::before {
        content: "日";
    }

    .boxsize {
        width: 80px;
    }

    .boxsize_2 {
        width: 85px;
    }

    .boxset {
        padding-right: 1%;
    }

    .fake_width {
        width: 1rem;
    }



    /* 手機在這邊~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */
    /* min-width 桌面板 */
    @media (min-width:1400px) {
        .displayno {
            display: none;
        }

        .displayflex {
            display: flex;
        }

        .paddingbottom40 {
            padding-bottom: 35px;
        }

        .paddingbottom30 {
            padding-bottom: 40px;
        }

        .padtop100 {
            padding-top: 100px;
        }

        .padbut {
            left: 55%;
        }

        .tac {
            text-align: center;
        }

        .paddingbottom35 {
            padding-bottom: 35px;
        }

        .padding5 {
            padding: 5%;
        }

        .maxwidth40 {
            max-width: 40%;
        }

        .breadcrumb_style_1 {
            width: 80%;
        }

        .paddingtop2 {
            padding-top: 2%;
        }

    }





    /* max-width 手機板 */
    @media (max-width:1399px) {
        .breadcrumb_style_1 {
            /* contanier架構專用 padding 0 15px  */
            padding: 20px 15px;
            width: 100%;
        }


        .displayno_md {
            display: none;
        }

        .paddingbottom40 {
            padding: 0 0 15px 0;
        }

        .paddingbottom30 {
            padding: 0 0 40px 0;
        }


        .padbot40 {
            padding-bottom: 40px;
        }

        .padtop100 {
            padding-top: 5%;
        }

        .padbut {
            left: 80%;
        }

        .maxwidth40 {
            max-width: 100%;
        }

        .padddingbottom150 {
            padding-bottom: 10%;
        }

        .paddingtop2 {
            padding-top: 2%;
            padding-left: 0;
            padding-right: 0;
        }


        .breadcrumb_style_1 {

            width: 85%;
        }

    }
</style>





<!-- 我是麵包屑-->
<div class="breadcrumb_style   backgroundimg_1">
    <div class="d-flex flex-wrap breadcrumb_style_1 ">
        <a href="./index.php" class="astlyep">首頁</a>
        <!-- 共用雲端找箭頭icon-->
        <img src="./img/nav_arrow_right.svg">
        <a href="./light_Introduction.php" class="astlyep">燈種介紹</a>
        <img src="./img/nav_arrow_right.svg">
        <a href="./light_Description.php" class="astlyep">服務說明</a>
        <img src="./img/nav_arrow_right.svg">
        <a href="./light_Fill_in_theinformation.php" class="astlyep">點燈填寫</a>
    </div>
</div>


<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
<div class="light_Fill_in_theinformation_ padtop100">

    <!--  _燈種介紹 區塊-->
    <div class="light_Fill_in_theinformation_text_1 borderbottom container">
        <!--  _標題 -->
        <div class="light_Fill_in_theinformation_title paddingbottom40 tac">
            <h3>燈種說明</h3>
        </div>
        <!--   光明燈全卡   收縮svg在這邊!!!!!-->
        <div class="light_Fill_in_theinformation_cardset d-flex juscsb marginauto col-lg-9 flexwrap pad0">
            <!--   光明燈套卡3 -->
            <div class="light_Fill_in_theinformation_card_3">
                <!--   光明燈 圖 燈 說明 單卡-->
                <div class="light_Fill_in_theinformation_card d-flex aic paddingbottom40">
                    <!-- 小燈icon svg -->

                    <div class="light_Fill_in_theinformation_card_icon">
                        <img src="./img/light_diwalilamp_1.svg">
                    </div>

                    <div class="light_Fill_in_theinformation_card_p  padding20">
                        <p class="p22">光明燈</p>
                    </div>
                    <div class="light_Fill_in_theinformation_card_p">
                        <p>祈福安康，前途光明</p>
                    </div>
                </div>
                <!--   文昌燈 圖 燈 說明 單卡-->
                <div class="light_Fill_in_theinformation_card d-flex aic paddingbottom40">
                    <!-- 小燈icon svg -->

                    <div class="light_Fill_in_theinformation_card_icon">
                        <img src="./img/light_diwalilamp_1.svg">
                    </div>


                    <div class="light_Fill_in_theinformation_card_p  padding20">
                        <p class="p22">文昌燈</p>
                    </div>
                    <div class="light_Fill_in_theinformation_card_p">
                        <p>祈求金榜題名、工作升遷</p>
                    </div>
                </div>
                <!--   安太歲 圖 燈 說明 單卡-->
                <div class="light_Fill_in_theinformation_card d-flex aic paddingbottom40">
                    <!-- 小燈icon svg -->
                    <div class="light_Fill_in_theinformation_card_icon">
                        <img src="./img/light_diwalilamp_1.svg">
                    </div>

                    <div class="light_Fill_in_theinformation_card_p  padding20">
                        <p class="p22">安太歲</p>
                    </div>
                    <div class="light_Fill_in_theinformation_card_p">
                        <p>祈求流年平安、諸事順遂</p>
                    </div>
                </div>

            </div>
            <!--   藥師燈套卡3 -->
            <div class="light_Fill_in_theinformation_card_3">
                <!--   藥師燈 圖 燈 說明 單卡-->
                <div class="light_Fill_in_theinformation_card d-flex aic paddingbottom40">
                    <!-- 小燈icon svg -->
                    <div class="light_Fill_in_theinformation_card_icon">
                        <img src="./img/light_diwalilamp_1.svg">
                    </div>

                    <div class="light_Fill_in_theinformation_card_p  padding20">
                        <p class="p22">藥師燈</p>
                    </div>
                    <div class="light_Fill_in_theinformation_card_p">
                        <p>祈求身體健康平安</p>
                    </div>
                </div>
                <!--   發財燈 圖 燈 說明 單卡-->
                <div class="light_Fill_in_theinformation_card d-flex aic paddingbottom40">
                    <!-- 小燈icon svg -->
                    <div class="light_Fill_in_theinformation_card_icon">
                        <img src="./img/light_diwalilamp_1.svg">
                    </div>

                    <div class="light_Fill_in_theinformation_card_p  padding20">
                        <p class="p22">發財燈</p>
                    </div>
                    <div class="light_Fill_in_theinformation_card_p">
                        <p>祈求趨吉避凶、投資倍利</p>
                    </div>
                </div>
                <!--   姻緣燈 圖 燈 說明 單卡-->
                <div class="light_Fill_in_theinformation_card d-flex aic paddingbottom40">
                    <!-- 小燈icon svg -->
                    <div class="light_Fill_in_theinformation_card_icon">
                        <img src="./img/light_diwalilamp_1.svg">
                    </div>

                    <div class="light_Fill_in_theinformation_card_p  padding20">
                        <p class="p22">姻緣燈</p>
                    </div>
                    <div class="light_Fill_in_theinformation_card_p">
                        <p>祈求姻緣順利、婚姻美滿</p>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <!-- 桌機板 max-width 992px -->
    <div class="light_Fill_in_theinformation_set   marginauto displayno_md">

        <!--  根目錄 -->
        <div class="light_Fill_in_theinformation_directory">
            <form name="form1" method="post">
                <!--   -->
                <div class="light_Fill_in_theinformation_text container removeset">




                    <!-- 匯入點 -->

                    <!--  預設祈福者 ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

                    <div class="light_Fill_in_theinformation_text_3 padddingtop40 displayno_md">
                        <!--  預設祈福者  小提示 -->
                        <div class="light_Fill_in_theinformation_text_star d-flex juscsb paddingbottom40">
                            <!--  預設祈福者  小提示 必填資料 -->
                            <div class="light_Fill_in_theinformation_text_star_left">
                                <!-- *的 ICON -->
                                <!-- <img src=""> -->
                                <p class="redcolorh5">*為必填資料</p>
                            </div>
                            <!--  預設祈福者  小提示 同會員資料 -->
                            <div class="light_Fill_in_theinformation_text_star_right    aic d-flex">
                                <input type="checkbox" id="exampleCheck2" class="radius0">
                                <label class="form-check-label padleft10" for="exampleCheck2" type="submit">
                                    <p>同會員資料</p>
                                </label>
                            </div>
                        </div>
                        <!--  預設祈福者 _標題 -->
                        <div class="light_Fill_in_theinformation_title tac paddingbottom40 postre">
                            <h3 class="postre">祈福者
                                <!--  預設祈福者 _標題_刪除按鈕 -->
                                <button class="graycolor postab padbut dipay">
                                    <p>刪除</p>
                                </button>
                            </h3>

                        </div>


                        <!--  預設祈福者 input集合 桌機用-->
                        <div class="light_Fill_in_theinformation_inputset borderbottom displayno_md">
                            <!--  input_1_姓名-->
                            <div class="paddingbottom40">
                                <div class="light_Fill_in_theinformation_input_1 d-flex aic col-lg-8 marginauto ">
                                    <!-- *姓名 -->
                                    <div class="light_Fill_in_theinformation_input_text col d-flex">
                                        <p class="redcolorh5">*</p>
                                        <p>姓名</p>
                                    </div>
                                    <!-- boostarp input -->
                                    <div class="col-8 p-0">
                                        <input type="text" class="form-control  radius0 exampleInputName_1 name text_name_2 " placeholder="請輸入姓名" name="text_name_2">

                                    </div>
                                </div>
                                <!-- 空值警告用 地址-->
                                <div class="light_Fill_in_theinformation_input_1 d-flex aic col-lg-8 marginauto ">
                                    <div class="light_Fill_in_theinformation_input_text col d-flex">
                                    </div>
                                    <div class="col-8 p-0">
                                        <div class="name vishidden"></div>
                                        <small class="form-text error"></small>
                                    </div>
                                </div>
                            </div>
                            <!--  預設祈福者input_1_生日-->
                            <div class="paddingbottom40">
                                <div class="light_Fill_in_theinformation_input_1 d-flex aic col-lg-8 marginauto ">
                                    <!--預設祈福者 *出生日期 -->
                                    <div class="light_Fill_in_theinformation_input_text col-4 padright0 d-flex aic">
                                        <p class="redcolorh5">*</p>
                                        <p>出生日期</p>
                                    </div>
                                    <!--預設祈福者 boostarp 下拉選單 -->
                                    <div class="col-lg-11 displayflex aic p-0">
                                        <div class="boxset d-flex aic">
                                            <div class="boxsize_2 d-flex aic p-0 ">
                                                <select class="form-control col radius0 year" id="exampleInputTime_2">
                                                    <option selected value="">選擇</option>
                                                    <option value="2021">2021</option>
                                                    <option value="2020">2020</option>
                                                    <option value="2019">2019</option>
                                                    <option value="2018">2018</option>
                                                    <option value="2017">2017</option>
                                                    <option value="2016">2016</option>
                                                    <option value="2015">2015</option>
                                                    <option value="2014">2014</option>
                                                    <option value="2013">2013</option>
                                                    <option value="2012">2012</option>
                                                    <option value="2011">2011</option>
                                                    <option value="2010">2010</option>
                                                    <option value="2009">2009</option>
                                                    <option value="2008">2008</option>
                                                    <option value="2007">2007</option>
                                                    <option value="2006">2006</option>
                                                    <option value="2005">2005</option>
                                                    <option value="2004">2004</option>
                                                    <option value="2003">2003</option>
                                                    <option value="2002">2002</option>
                                                    <option value="2001">2001</option>
                                                    <option value="2000">2000</option>
                                                    <option value="1999">1999</option>
                                                    <option value="1998">1998</option>
                                                    <option value="1997">1997</option>
                                                    <option value="1996">1996</option>
                                                    <option value="1995">1995</option>
                                                    <option value="1994">1994</option>
                                                    <option value="1993">1993</option>
                                                    <option value="1992">1992</option>
                                                    <option value="1991">1991</option>
                                                    <option value="1990">1990</option>
                                                    <option value="1989">1989</option>
                                                    <option value="1988">1988</option>
                                                    <option value="1987">1987</option>
                                                    <option value="1986">1986</option>
                                                    <option value="1985">1985</option>
                                                    <option value="1984">1984</option>
                                                    <option value="1983">1983</option>
                                                    <option value="1982">1982</option>
                                                    <option value="1981">1981</option>
                                                    <option value="1980">1980</option>
                                                    <option value="1979">1979</option>
                                                    <option value="1978">1978</option>
                                                    <option value="1977">1977</option>
                                                    <option value="1976">1976</option>
                                                    <option value="1975">1975</option>
                                                    <option value="1974">1974</option>
                                                    <option value="1973">1973</option>
                                                    <option value="1972">1972</option>
                                                    <option value="1971">1971</option>
                                                    <option value="1970">1970</option>
                                                    <option value="1969">1969</option>
                                                    <option value="1968">1968</option>
                                                    <option value="1967">1967</option>
                                                    <option value="1966">1966</option>
                                                    <option value="1965">1965</option>
                                                    <option value="1964">1964</option>
                                                    <option value="1963">1963</option>
                                                    <option value="1962">1962</option>
                                                    <option value="1961">1961</option>
                                                    <option value="1960">1960</option>
                                                    <option value="1959">1959</option>
                                                    <option value="1958">1958</option>
                                                    <option value="1957">1957</option>
                                                    <option value="1956">1956</option>
                                                    <option value="1955">1955</option>
                                                    <option value="1954">1954</option>
                                                    <option value="1953">1953</option>
                                                    <option value="1952">1952</option>
                                                    <option value="1951">1951</option>
                                                    <option value="1950">1950</option>
                                                    <option value="1949">1949</option>
                                                    <option value="1948">1948</option>
                                                    <option value="1947">1947</option>
                                                    <option value="1946">1946</option>
                                                    <option value="1945">1945</option>
                                                    <option value="1944">1944</option>
                                                    <option value="1943">1943</option>
                                                    <option value="1942">1942</option>
                                                    <option value="1941">1941</option>
                                                    <option value="1940">1940</option>
                                                    <option value="1939">1939</option>
                                                    <option value="1938">1938</option>
                                                    <option value="1937">1937</option>
                                                    <option value="1936">1936</option>
                                                    <option value="1935">1935</option>
                                                    <option value="1934">1934</option>
                                                    <option value="1933">1933</option>
                                                    <option value="1932">1932</option>
                                                    <option value="1931">1931</option>
                                                    <option value="1930">1930</option>
                                                    <option value="1929">1929</option>
                                                    <option value="1928">1928</option>
                                                    <option value="1927">1927</option>
                                                    <option value="1926">1926</option>
                                                    <option value="1925">1925</option>
                                                    <option value="1924">1924</option>
                                                    <option value="1923">1923</option>
                                                    <option value="1922">1922</option>
                                                    <option value="1921">1921</option>
                                                    <option value="1920">1920</option>
                                                </select>

                                            </div>
                                            <div class="fake_year"></div>
                                        </div>
                                        <div class="boxset d-flex aic">
                                            <div class="boxsize d-flex aic p-0">
                                                <select class="form-control col radius0 month" id="exampleInputTime_3">
                                                    <option selected value="">選擇</option>
                                                    <option value="01">1</option>
                                                    <option value="02">2</option>
                                                    <option value="03">3</option>
                                                    <option value="04">4</option>
                                                    <option value="05">5</option>
                                                    <option value="06">6</option>
                                                    <option value="07">7</option>
                                                    <option value="08">8</option>
                                                    <option value="09">9</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                </select>

                                            </div>
                                            <div class="fake_month"></div>
                                        </div>
                                        <div class="boxset d-flex aic">
                                            <div class="boxsize d-flex aic p-0 ">
                                                <select class="form-control col radius0 day" id="exampleInputTime_4">
                                                    <option selected value="">選擇</option>
                                                    <option value="01">1</option>
                                                    <option value="02">2</option>
                                                    <option value="03">3</option>
                                                    <option value="04">4</option>
                                                    <option value="05">5</option>
                                                    <option value="06">6</option>
                                                    <option value="07">7</option>
                                                    <option value="08">8</option>
                                                    <option value="09">9</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                    <option value="13">13</option>
                                                    <option value="14">14</option>
                                                    <option value="15">15</option>
                                                    <option value="16">16</option>
                                                    <option value="17">17</option>
                                                    <option value="18">18</option>
                                                    <option value="19">19</option>
                                                    <option value="20">20</option>
                                                    <option value="21">21</option>
                                                    <option value="22">22</option>
                                                    <option value="23">23</option>
                                                    <option value="24">24</option>
                                                    <option value="25">25</option>
                                                    <option value="26">26</option>
                                                    <option value="27">27</option>
                                                    <option value="28">28</option>
                                                    <option value="29">29</option>
                                                    <option value="30">30</option>
                                                    <option value="31">31</option>
                                                </select>
                                            </div>
                                            <div class="fake_day"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- 空值警告用 年月日-->
                                <div class="light_Fill_in_theinformation_input_1 d-flex aic col-lg-8 marginauto ">
                                    <div class="light_Fill_in_theinformation_input_text col-4 padright0 d-flex aic">
                                    </div>
                                    <div class="col-lg-11 displayflex aic p-0">
                                        <div class="boxset d-flex aic">
                                            <div class="boxsize_2 d-flex aic p-0 ">
                                                <div class="year vishidden"></div>
                                                <small class="form-text error"></small>

                                            </div>
                                            <div class="fake_width vishidden"></div>
                                        </div>
                                        <div class="boxset d-flex aic">
                                            <div class="boxsize d-flex aic p-0">
                                                <div class="month vishidden"></div>
                                                <small class="form-text error"></small>

                                            </div>
                                            <div class="fake_width vishidden"></div>
                                        </div>
                                        <div class="boxset d-flex aic">
                                            <div class="boxsize d-flex aic p-0 ">
                                                <div class="day vishidden"></div>
                                                <small class="form-text error"></small>
                                            </div>
                                            <div class="fake_width vishidden"></div>
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <!--  預設祈福者input_1_時辰-->
                            <div class="light_Fill_in_theinformation_input_1 d-flex aic col-lg-8 marginauto paddingbottom40">
                                <!-- 預設祈福者*時辰 -->
                                <div class="light_Fill_in_theinformation_input_text col-4 padright0 d-flex aic">
                                    <p class="redcolorh5 opac">*</p>
                                    <p>出生時辰</p>
                                </div>
                                <!--預設祈福者 boostarp 下拉選單 -->
                                <div class="col-11 d-flex aic p-0">
                                    <div class="col-3 p-0">
                                        <select class="form-control col-10 radius0 text_time_2">
                                            <option selected>吉時</option>
                                            <option value="子時 23~0">子時 23~01</option>
                                            <option value="丑時 01~03">丑時 01~03</option>
                                            <option value="寅時 03~05">寅時 03~05</option>
                                            <option value="卯時 05~07">卯時 05~07</option>
                                            <option value="辰時 07~09">辰時 07~09</option>
                                            <option value="巳時 09~11">巳時 09~11</option>
                                            <option value="午時 11~13">午時 11~13</option>
                                            <option value="未時 13~15">未時 13~15</option>
                                            <option value="申時 15~17">申時 15~17</option>
                                            <option value="酉時 17~19">酉時 17~19</option>
                                            <option value="戌時 19~21">戌時 19~21</option>
                                            <option value="亥時 21~23">亥時 21~23</option>

                                        </select>
                                    </div>
                                </div>
                            </div>


                            <!--  預設祈福者input_1_性別-->
                            <div class="light_Fill_in_theinformation_input_1 d-flex aic col-lg-8 marginauto paddingbottom40">

                                <div class="light_Fill_in_theinformation_input_text col-4 d-flex">
                                    <p class="redcolorh5 vishidden">*</p>
                                    <p>性別</p>
                                </div>

                                <div class="col-11 d-flex aic p-0">
                                    <div class="col-2 p-0">
                                        <select class="form-control col-7 radius0 text_xxxx_2">
                                            <option value="男">男</option>
                                            <option value="女">女</option>
                                        </select>
                                    </div>
                                </div>
                            </div>




                            <!-- 預設祈福者input_1_電話-->
                            <div class="light_Fill_in_theinformation_input_1 d-flex aic col-lg-8 marginauto paddingbottom40">
                                <!--預設祈福者 *連絡電話 -->
                                <div class="light_Fill_in_theinformation_input_text col d-flex">
                                    <p class="redcolorh5 opac">*</p>
                                    <p>連絡電話</p>
                                </div>
                                <!--預設祈福者 boostarp input -->
                                <input type="text" class="form-control col-8 radius0  exampleInputPhoneNumber_1 text_mobile_2 mobile" placeholder="請輸入連絡電話" id="exampleInputPhoneNumber" pattern="09\d{2}-?\d{3}-?\d{3}">
                            </div>

                            <!--  預設祈福者input_1_地址  測試版本新增空值警告-->
                            <div class="all paddingbottom40">
                                <div class="light_Fill_in_theinformation_input_1 d-flex aic col-lg-8 marginauto ">
                                    <!--預設祈福者 *地址 -->
                                    <div class="light_Fill_in_theinformation_input_text col d-flex">
                                        <p class="redcolorh5">*</p>
                                        <p>地址</p>
                                    </div>
                                    <!-- 預設祈福者boostarp input -->
                                    <div class="col-8 p-0">
                                        <input type="text" class="form-control  radius0 exampleInputaddress_1 address text_address_2" placeholder="請輸入地址" cols="30" rows="3" name="address" id="address">

                                    </div>
                                </div>
                                <!-- 空值警告用 地址-->
                                <div class="light_Fill_in_theinformation_input_1 d-flex aic col-lg-8 marginauto ">
                                    <div class="light_Fill_in_theinformation_input_text col d-flex">
                                    </div>
                                    <div class="col-8 p-0">
                                        <div class="address vishidden"></div>
                                        <small class="form-text error"></small>
                                    </div>
                                </div>
                            </div>



                            <!--預設祈福者 改 -->
                            <div class="light_add_set lightadd_this " id="lightadd_this">
                                <div class="paddingbottom40 myselector_group">
                                    <!-- 三層篩選 救救我QQ~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                                    <div class="light_Fill_in_theinformation_input_set d-flex col-8  marginauto chained-selects" data-selector="myselector">
                                        <!--  input_1_選擇燈種 -->
                                        <div class="light_Fill_in_theinformation_input_1 d-flex aic col-7 marginauto p-0 ">
                                            <!-- *燈種 -->
                                            <div class="light_Fill_in_theinformation_input_text col-7 padright0 d-flex aic">
                                                <p class="redcolorh5">*</p>
                                                <p>選擇燈種</p>
                                            </div>
                                            <!-- boostarp 下拉選單 -->
                                            <div class="col-4 d-flex aic p-0">
                                                <div class="col p-0">
                                                    <select name="light_type" class="form-control col-11 radius0 lightarray light_type" id="select-1" required>
                                                        <option selected value="">選擇燈種</option>
                                                        <option>光明燈</option>
                                                        <option>文昌燈</option>
                                                        <option>安太歲</option>
                                                        <option>藥師燈</option>
                                                        <option>發財燈</option>
                                                        <option>姻緣燈</option>
                                                    </select>

                                                    <!-- <small class="form-text error"></small> -->
                                                </div>
                                            </div>
                                        </div>

                                        <!-- 預設祈福者input_1_ 選擇廟宇-->
                                        <div class="light_Fill_in_theinformation_input_1 d-flex aic col-lg-8 marginauto p-0 flex-wrap">
                                            <!-- 預設祈福者 *廟宇 -->
                                            <div class="light_Fill_in_theinformation_input_text col-4 padright0 d-flex aic">
                                                <p class="redcolorh5">*</p>
                                                <p>選擇廟宇</p>
                                            </div>
                                            <!--預設祈福者 boostarp 下拉選單 -->
                                            <div class="col-3 d-flex aic p-0">
                                                <div class="col p-0">
                                                    <select name="light_area" class="form-control col-11 radius0 areaarray light_area" id="select-2" disabled>
                                                        <option selected value="">選擇地區</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-5 d-flex aic p-0">
                                                <div class="col p-0">
                                                    <select name="light_temple" class="form-control col-11 radius0 light_temple " id="select-3" disabled>
                                                        <option selected value="">選擇廟宇</option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>

                                    </div>


                                    <!-- 空值警告用  -->
                                    <div class="light_Fill_in_theinformation_input_set d-flex col-8  marginauto chained-selects">
                                        <!-- 空值警告用  選燈種-->
                                        <div class="light_Fill_in_theinformation_input_1 d-flex aic col-7 marginauto p-0 ">
                                            <div class="light_Fill_in_theinformation_input_text col-7 padright0 d-flex aic">
                                            </div>
                                            <div class="col-4 d-flex aic p-0">
                                                <div class="col p-0">
                                                    <div class="light_type vishidden"></div>
                                                    <small class="form-text error"></small>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- 空值警告用  選地區 廟宇-->
                                        <div class="light_Fill_in_theinformation_input_1 d-flex aic col-lg-8 marginauto p-0 flex-wrap">
                                            <div class="light_Fill_in_theinformation_input_text col-4 padright0 d-flex aic">
                                            </div>
                                            <div class="col-3 d-flex aic p-0">
                                                <div class="col p-0">
                                                    <div class="light_area vishidden"></div>
                                                    <small class="form-text error"></small>
                                                </div>
                                            </div>
                                            <div class="col-5 d-flex aic p-0">
                                                <div class="col p-0">
                                                    <div class="light_temple vishidden"></div>
                                                    <small class="form-text error"></small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--  預設祈福者_按鈕_新增廟宇 -->
                            <div class="button_add_set d-flex juscsb  marginauto paddingbottom40 col-8">
                                <div class="button_add ">
                                    <div class="btnss graycolor butomcolor light_add">
                                        <p>+ 新增燈種與廟宇</p>
                                    </div>
                                </div>
                                <!-- <div class="button_add vishidden ">
                                    <button class="graycolor">
                                        <p>+ 新增燈種與廟宇</p>
                                    </button>
                                </div> -->
                            </div>
                        </div>



                    </div>











                    <div class="memberadd  " id="memberadd">
                        <div class="light_Fill_in_theinformation_text_3 padddingtop40">
                            <!--  祈福者卡(none)  小提示 -->
                            <div class="light_Fill_in_theinformation_text_star d-flex juscsb paddingbottom40">
                                <!--  祈福者卡(none)  小提示 必填資料 -->
                                <div class="light_Fill_in_theinformation_text_star_left">
                                    <!-- *的 ICON -->
                                    <!-- <img src=""> -->
                                    <p class="redcolorh5">*為必填資料</p>
                                </div>

                                <!-- 祈福者卡(none) boostarp 下拉選單 -->
                                <div class=" d-flex aic p-0">
                                    <div class="col p-0">
                                        <select class="form-control radius0 exampleInputfriend" id="exampleInputfriend">

                                            <option value="">同親友資料</option>
                                            <?php foreach ($rows as $p) : ?>
                                                <option value="<?= $p['sid'] ?>" data-sid="<?= $p['sid'] ?>" data-address="<?= $p['address_'] ?>" data-mobile="<?= $p['mobile_'] ?>" data-year="<?= $p['year'] ?>" data-month="<?= $p['month'] ?>" data-day="<?= $p['day'] ?>" data-birthday="<?= $p['birthday_'] ?>">


                                                    <?= $p['name_'] ?>
                                                </option>

                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!--  祈福者卡(none) _標題 -->
                            <div class="light_Fill_in_theinformation_title tac paddingbottom40 postre">
                                <h3 class="postre">祈福者
                                    <!--  祈福者卡(none) _標題_刪除按鈕 -->
                                    <button class="graycolor postab padbut removebut">
                                        <p>刪除</p>
                                    </button>
                                </h3>

                            </div>


                            <!--  祈福者卡(none) input集合 桌機用-->
                            <div class="light_Fill_in_theinformation_inputset borderbottom displayno_md">
                                <!--  祈福者卡(none) input_1_姓名-->
                                <div class="paddingbottom40">
                                    <div class="light_Fill_in_theinformation_input_1 d-flex aic col-lg-8 marginauto ">
                                        <!-- 祈福者卡(none) *姓名 -->
                                        <div class="light_Fill_in_theinformation_input_text col d-flex">
                                            <p class="redcolorh5">*</p>
                                            <p>姓名</p>
                                        </div>
                                        <!-- 祈福者卡(none) boostarp input -->
                                        <div class="col-8 p-0">
                                            <input type="text" class="form-control  radius0 exampleInputName name" placeholder="請輸入姓名" id="name" name="name">

                                        </div>
                                    </div>
                                    <!-- 空值警告用 地址-->
                                    <div class="light_Fill_in_theinformation_input_1 d-flex aic col-lg-8 marginauto ">
                                        <div class="light_Fill_in_theinformation_input_text col d-flex">
                                        </div>
                                        <div class="col-8 p-0">
                                            <div class="name vishidden"></div>
                                            <small class="form-text error"></small>
                                        </div>
                                    </div>
                                </div>
                                <!--  祈福者卡(none) input_1_生日-->
                                <div class="paddingbottom40">
                                    <div class="light_Fill_in_theinformation_input_1 d-flex aic col-lg-8 marginauto ">
                                        <!--祈福者卡(none) *出生日期 -->
                                        <div class="light_Fill_in_theinformation_input_text col-4 padright0 d-flex aic">
                                            <p class="redcolorh5">*</p>
                                            <p>出生日期</p>
                                        </div>
                                        <!--祈福者卡(none) boostarp 下拉選單 -->
                                        <div class="col-lg-11 displayflex aic p-0">
                                            <div class="boxset d-flex aic">
                                                <div class="boxsize_2 d-flex aic p-0 ">
                                                    <select class="form-control col radius0 exampleInputYear year" id="exampleInputTime_2">
                                                        <option selected value="">選擇</option>
                                                        <option value="2021">2021</option>
                                                        <option value="2020">2020</option>
                                                        <option value="2019">2019</option>
                                                        <option value="2018">2018</option>
                                                        <option value="2017">2017</option>
                                                        <option value="2016">2016</option>
                                                        <option value="2015">2015</option>
                                                        <option value="2014">2014</option>
                                                        <option value="2013">2013</option>
                                                        <option value="2012">2012</option>
                                                        <option value="2011">2011</option>
                                                        <option value="2010">2010</option>
                                                        <option value="2009">2009</option>
                                                        <option value="2008">2008</option>
                                                        <option value="2007">2007</option>
                                                        <option value="2006">2006</option>
                                                        <option value="2005">2005</option>
                                                        <option value="2004">2004</option>
                                                        <option value="2003">2003</option>
                                                        <option value="2002">2002</option>
                                                        <option value="2001">2001</option>
                                                        <option value="2000">2000</option>
                                                        <option value="1999">1999</option>
                                                        <option value="1998">1998</option>
                                                        <option value="1997">1997</option>
                                                        <option value="1996">1996</option>
                                                        <option value="1995">1995</option>
                                                        <option value="1994">1994</option>
                                                        <option value="1993">1993</option>
                                                        <option value="1992">1992</option>
                                                        <option value="1991">1991</option>
                                                        <option value="1990">1990</option>
                                                        <option value="1989">1989</option>
                                                        <option value="1988">1988</option>
                                                        <option value="1987">1987</option>
                                                        <option value="1986">1986</option>
                                                        <option value="1985">1985</option>
                                                        <option value="1984">1984</option>
                                                        <option value="1983">1983</option>
                                                        <option value="1982">1982</option>
                                                        <option value="1981">1981</option>
                                                        <option value="1980">1980</option>
                                                        <option value="1979">1979</option>
                                                        <option value="1978">1978</option>
                                                        <option value="1977">1977</option>
                                                        <option value="1976">1976</option>
                                                        <option value="1975">1975</option>
                                                        <option value="1974">1974</option>
                                                        <option value="1973">1973</option>
                                                        <option value="1972">1972</option>
                                                        <option value="1971">1971</option>
                                                        <option value="1970">1970</option>
                                                        <option value="1969">1969</option>
                                                        <option value="1968">1968</option>
                                                        <option value="1967">1967</option>
                                                        <option value="1966">1966</option>
                                                        <option value="1965">1965</option>
                                                        <option value="1964">1964</option>
                                                        <option value="1963">1963</option>
                                                        <option value="1962">1962</option>
                                                        <option value="1961">1961</option>
                                                        <option value="1960">1960</option>
                                                        <option value="1959">1959</option>
                                                        <option value="1958">1958</option>
                                                        <option value="1957">1957</option>
                                                        <option value="1956">1956</option>
                                                        <option value="1955">1955</option>
                                                        <option value="1954">1954</option>
                                                        <option value="1953">1953</option>
                                                        <option value="1952">1952</option>
                                                        <option value="1951">1951</option>
                                                        <option value="1950">1950</option>
                                                        <option value="1949">1949</option>
                                                        <option value="1948">1948</option>
                                                        <option value="1947">1947</option>
                                                        <option value="1946">1946</option>
                                                        <option value="1945">1945</option>
                                                        <option value="1944">1944</option>
                                                        <option value="1943">1943</option>
                                                        <option value="1942">1942</option>
                                                        <option value="1941">1941</option>
                                                        <option value="1940">1940</option>
                                                        <option value="1939">1939</option>
                                                        <option value="1938">1938</option>
                                                        <option value="1937">1937</option>
                                                        <option value="1936">1936</option>
                                                        <option value="1935">1935</option>
                                                        <option value="1934">1934</option>
                                                        <option value="1933">1933</option>
                                                        <option value="1932">1932</option>
                                                        <option value="1931">1931</option>
                                                        <option value="1930">1930</option>
                                                        <option value="1929">1929</option>
                                                        <option value="1928">1928</option>
                                                        <option value="1927">1927</option>
                                                        <option value="1926">1926</option>
                                                        <option value="1925">1925</option>
                                                        <option value="1924">1924</option>
                                                        <option value="1923">1923</option>
                                                        <option value="1922">1922</option>
                                                        <option value="1921">1921</option>
                                                        <option value="1920">1920</option>
                                                    </select>

                                                </div>
                                                <div class="fake_year"></div>
                                            </div>
                                            <div class="boxset d-flex aic">
                                                <div class="boxsize d-flex aic p-0">
                                                    <select class="form-control col radius0 exampleInputMonth month" id="exampleInputTime_3">
                                                        <option selected value="">選擇</option>
                                                        <option value="01">1</option>
                                                        <option value="02">2</option>
                                                        <option value="03">3</option>
                                                        <option value="04">4</option>
                                                        <option value="05">5</option>
                                                        <option value="06">6</option>
                                                        <option value="07">7</option>
                                                        <option value="08">8</option>
                                                        <option value="09">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                    </select>

                                                </div>
                                                <div class="fake_month"></div>
                                            </div>
                                            <div class="boxset d-flex aic">
                                                <div class="boxsize d-flex aic p-0 ">
                                                    <select class="form-control col radius0 exampleInputDay day " id="exampleInputTime_4">
                                                        <option selected value="">選擇</option>
                                                        <option value="01">1</option>
                                                        <option value="02">2</option>
                                                        <option value="03">3</option>
                                                        <option value="04">4</option>
                                                        <option value="05">5</option>
                                                        <option value="06">6</option>
                                                        <option value="07">7</option>
                                                        <option value="08">8</option>
                                                        <option value="09">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                        <option value="13">13</option>
                                                        <option value="14">14</option>
                                                        <option value="15">15</option>
                                                        <option value="16">16</option>
                                                        <option value="17">17</option>
                                                        <option value="18">18</option>
                                                        <option value="19">19</option>
                                                        <option value="20">20</option>
                                                        <option value="21">21</option>
                                                        <option value="22">22</option>
                                                        <option value="23">23</option>
                                                        <option value="24">24</option>
                                                        <option value="25">25</option>
                                                        <option value="26">26</option>
                                                        <option value="27">27</option>
                                                        <option value="28">28</option>
                                                        <option value="29">29</option>
                                                        <option value="30">30</option>
                                                        <option value="31">31</option>
                                                    </select>
                                                </div>
                                                <div class="fake_day"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 空值警告用 年月日-->
                                    <div class="light_Fill_in_theinformation_input_1 d-flex aic col-lg-8 marginauto ">
                                        <div class="light_Fill_in_theinformation_input_text col-4 padright0 d-flex aic">
                                        </div>
                                        <div class="col-lg-11 displayflex aic p-0">
                                            <div class="boxset d-flex aic">
                                                <div class="boxsize_2 d-flex aic p-0 ">
                                                    <div class="year vishidden"></div>
                                                    <small class="form-text error"></small>

                                                </div>
                                                <div class="fake_year vishidden"></div>
                                            </div>
                                            <div class="boxset d-flex aic">
                                                <div class="boxsize d-flex aic p-0">
                                                    <div class="month vishidden"></div>
                                                    <small class="form-text error"></small>

                                                </div>
                                                <div class="fake_month vishidden"></div>
                                            </div>
                                            <div class="boxset d-flex aic">
                                                <div class="boxsize d-flex aic p-0 ">
                                                    <div class="day vishidden"></div>
                                                    <small class="form-text error"></small>
                                                </div>
                                                <div class="fake_day vishidden"></div>
                                            </div>
                                        </div>
                                    </div>

                                </div>


                                <!--  祈福者卡(none) input_1_時辰-->
                                <div class="light_Fill_in_theinformation_input_1 d-flex aic col-lg-8 marginauto paddingbottom40">
                                    <!-- 祈福者卡(none)*時辰 -->
                                    <div class="light_Fill_in_theinformation_input_text col-4 padright0 d-flex aic">
                                        <p class="redcolorh5 opac">*</p>
                                        <p>出生時辰</p>
                                    </div>
                                    <!--祈福者卡(none) boostarp 下拉選單 -->
                                    <div class="col-11 d-flex aic p-0">
                                        <div class="col-3 p-0">
                                            <select class="form-control col-10 radius0 text_time_2">
                                                <option selected>吉時</option>
                                                <option value="子時 23~0">子時 23~01</option>
                                                <option value="丑時 01~03">丑時 01~03</option>
                                                <option value="寅時 03~05">寅時 03~05</option>
                                                <option value="卯時 05~07">卯時 05~07</option>
                                                <option value="辰時 07~09">辰時 07~09</option>
                                                <option value="巳時 09~11">巳時 09~11</option>
                                                <option value="午時 11~13">午時 11~13</option>
                                                <option value="未時 13~15">未時 13~15</option>
                                                <option value="申時 15~17">申時 15~17</option>
                                                <option value="酉時 17~19">酉時 17~19</option>
                                                <option value="戌時 19~21">戌時 19~21</option>
                                                <option value="亥時 21~23">亥時 21~23</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>


                                <!--  祈福者卡(none) input_1_性別-->

                                <div class="light_Fill_in_theinformation_input_1 d-flex aic col-lg-8 marginauto paddingbottom40">

                                    <div class="light_Fill_in_theinformation_input_text col-4 d-flex">
                                        <p class="redcolorh5 opac">*</p>
                                        <p>性別</p>
                                    </div>

                                    <div class="col-11 d-flex aic p-0">
                                        <div class="col-2 p-0">
                                            <select class="form-control col-7 radius0 text_xxxx_2">
                                                <option value="男">男</option>
                                                <option value="女">女</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>




                                <!--  祈福者卡(none) input_1_電話-->
                                <div class="light_Fill_in_theinformation_input_1 d-flex aic col-lg-8 marginauto paddingbottom40">
                                    <!--祈福者卡(none) *連絡電話 -->
                                    <div class="light_Fill_in_theinformation_input_text col d-flex">
                                        <p class="redcolorh5 opac">*</p>
                                        <p>連絡電話</p>
                                    </div>
                                    <!--祈福者卡(none) boostarp input -->
                                    <input type="text" class="form-control col-8 radius0  exampleInputPhoneNumber text_mobile_2 mobile" placeholder="請輸入連絡電話" id="exampleInputPhoneNumber" pattern="09\d{2}-?\d{3}-?\d{3}">
                                </div>

                                <!--  祈福者卡(none)input_1_地址  測試版本新增空值警告-->
                                <div class="all paddingbottom40">
                                    <div class="light_Fill_in_theinformation_input_1 d-flex aic col-lg-8 marginauto ">
                                        <!--祈福者卡(none) *地址 -->
                                        <div class="light_Fill_in_theinformation_input_text col d-flex">
                                            <p class="redcolorh5">*</p>
                                            <p>地址</p>
                                        </div>
                                        <!-- 祈福者卡(none)boostarp input -->
                                        <div class="col-8 p-0">
                                            <input type="text" class="form-control  radius0 exampleInputaddress address text_address_2" placeholder="請輸入地址" cols="30" rows="3" name="address" id="address">

                                        </div>
                                    </div>
                                    <!-- 空值警告用 地址-->
                                    <div class="light_Fill_in_theinformation_input_1 d-flex aic col-lg-8 marginauto ">
                                        <div class="light_Fill_in_theinformation_input_text col d-flex">
                                        </div>
                                        <div class="col-8 p-0">
                                            <div class="address vishidden"></div>
                                            <small class="form-text error"></small>
                                        </div>
                                    </div>
                                </div>


                                <!-- 祈福者卡(none) 改 -->
                                <div class="light_add_set lightadd_this ">
                                    <div class="paddingbottom40 myselector_group">
                                        <!-- 三層篩選 救救我QQ~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                                        <div class="light_Fill_in_theinformation_input_set d-flex col-8  marginauto chained-selects" data-selector="myselector">
                                            <!--  input_1_選擇燈種 -->
                                            <div class="light_Fill_in_theinformation_input_1 d-flex aic col-7 marginauto p-0 ">
                                                <!-- *燈種 -->
                                                <div class="light_Fill_in_theinformation_input_text col-7 padright0 d-flex aic">
                                                    <p class="redcolorh5">*</p>
                                                    <p>選擇燈種</p>
                                                </div>
                                                <!-- boostarp 下拉選單 -->
                                                <div class="col-4 d-flex aic p-0">
                                                    <div class="col p-0">
                                                        <select name="light_type" class="form-control col-11 radius0 lightarray light_type" id="select-1" required>
                                                            <option selected value="">選擇燈種</option>
                                                            <option>光明燈</option>
                                                            <option>文昌燈</option>
                                                            <option>安太歲</option>
                                                            <option>藥師燈</option>
                                                            <option>發財燈</option>
                                                            <option>姻緣燈</option>
                                                        </select>

                                                        <!-- <small class="form-text error"></small> -->
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- 祈福者卡(none)input_1_ 選擇廟宇-->
                                            <div class="light_Fill_in_theinformation_input_1 d-flex aic col-lg-8 marginauto p-0 flex-wrap">
                                                <!-- 祈福者卡(none) *廟宇 -->
                                                <div class="light_Fill_in_theinformation_input_text col-4 padright0 d-flex aic">
                                                    <p class="redcolorh5">*</p>
                                                    <p>選擇廟宇</p>
                                                </div>
                                                <!--祈福者卡(none) boostarp 下拉選單 -->
                                                <div class="col-3 d-flex aic p-0">
                                                    <div class="col p-0">
                                                        <select name="light_area" class="form-control col-11 radius0 areaarray light_area" id="select-2" disabled>
                                                            <option selected value="">選擇地區</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-5 d-flex aic p-0">
                                                    <div class="col p-0">
                                                        <select name="light_temple" class="form-control col-11 radius0 light_temple " id="select-3" disabled>
                                                            <option selected value="">選擇廟宇</option>
                                                        </select>
                                                    </div>
                                                </div>

                                            </div>


                                        </div>
                                        <!-- 空值警告用  -->
                                        <div class="light_Fill_in_theinformation_input_set d-flex col-8  marginauto chained-selects">
                                            <!-- 空值警告用  選燈種-->
                                            <div class="light_Fill_in_theinformation_input_1 d-flex aic col-7 marginauto p-0 ">
                                                <div class="light_Fill_in_theinformation_input_text col-7 padright0 d-flex aic">
                                                </div>
                                                <div class="col-4 d-flex aic p-0">
                                                    <div class="col p-0">
                                                        <div class="light_type vishidden"></div>
                                                        <small class="form-text error"></small>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- 空值警告用  選地區 廟宇-->
                                            <div class="light_Fill_in_theinformation_input_1 d-flex aic col-lg-8 marginauto p-0 flex-wrap">
                                                <div class="light_Fill_in_theinformation_input_text col-4 padright0 d-flex aic">
                                                </div>
                                                <div class="col-3 d-flex aic p-0">
                                                    <div class="col p-0">
                                                        <div class="light_area vishidden"></div>
                                                        <small class="form-text error"></small>
                                                    </div>
                                                </div>
                                                <div class="col-5 d-flex aic p-0">
                                                    <div class="col p-0">
                                                        <div class="light_temple vishidden"></div>
                                                        <small class="form-text error"></small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--  預設祈福者_按鈕_新增廟宇 -->
                                <div class="button_add_set d-flex juscsb  marginauto paddingbottom40 col-8">
                                    <div class="button_add ">
                                        <div class="btnss graycolor butomcolor light_add">
                                            <p>+ 新增燈種與廟宇</p>
                                        </div>
                                    </div>
                                    <!-- <div class="button_add vishidden ">
                                        <button class="graycolor">
                                            <p>+ 新增燈種與廟宇</p>
                                        </button>
                                    </div> -->
                                </div>
                            </div>

                        </div>
                    </div>





                </div>



                <!-- 桌機用 底部_按鈕 -->
                <div class="light_Fill_in_theinformation_button buttonstyle padddingtop40 padddingbottom150 butflexmargin  displayno_md">
                    <div class="btntest">
                        <div class="butstyle_1 member_add btnss">
                            <p>新增祈福者</p>
                        </div>
                    </div>
                    <button type="button" class="butstyle_1 addbtn" id="popt" onclick="checkForm_input(); return false;">
                        <p>加入購物車</p>
                    </button>

                </div>

            </form>


        </div>



    </div>






    <!-- 手機板 -->
    <div class="light_Fill_in_theinformation_set   marginauto container displayno">

        <!--  根目錄 -->
        <div class="light_Fill_in_theinformation_directory">
            <form name="form1" method="post">
                <!--   -->
                <div class="light_Fill_in_theinformation_text  removeset">


                    <!-- 手機用 預設祈福者 text_3-->
                    <div class="light_Fill_in_theinformation_text_4 padddingtop40">
                        <!--  預設祈福者  小提示 -->
                        <div class="light_Fill_in_theinformation_text_star d-flex juscsb paddingbottom40">
                            <!--  預設祈福者  小提示 必填資料 -->
                            <div class="light_Fill_in_theinformation_text_star_left">
                                <!-- *的 ICON -->
                                <!-- <img src=""> -->
                                <p class="redcolorh5">*為必填資料</p>
                            </div>
                            <!--  預設祈福者  小提示 同會員資料 -->
                            <div class="light_Fill_in_theinformation_text_star_right    aic d-flex">
                                <input type="checkbox" id="exampleCheck1" class="radius0">
                                <label class="form-check-label padleft10" for="exampleCheck2" type="submit">
                                    <p>同會員資料</p>
                                </label>
                            </div>
                        </div>
                        <!--  預設祈福者 _標題 -->
                        <div class="light_Fill_in_theinformation_title paddingbottom40 postre">
                            <h3 class="postre">祈福者
                                <!--  預設祈福者 _標題_刪除按鈕 -->
                                <button class="graycolor postab padbut dipay">
                                    <p>刪除</p>
                                </button>
                            </h3>

                        </div>


                        <!--  手機用 預設祈福者 input集合 -->
                        <div class="light_Fill_in_theinformation_inputset borderbottom  displayno">
                            <!--  手機用 預設祈福者 input_1_姓名-->
                            <div class="light_Fill_in_theinformation_input_1 d-flex aic col-lg-8 marginauto paddingbottom40">
                                <!--手機用 *姓名 -->
                                <div class="light_Fill_in_theinformation_input_text col d-flex">
                                    <p class="redcolorh5">*</p>
                                    <p>姓名</p>
                                </div>
                                <!--手機用 boostarp input -->
                                <div class="col-7 p-0">
                                    <input type="text" class="form-control  radius0 exampleInputName_1 name text_name_2" placeholder="請輸入姓名" name="text_name_2">
                                    <small class="form-text error"></small>
                                </div>
                            </div>

                            <!--  手機用 預設祈福者 input_1_生日-->
                            <div class="paddingbottom40">
                                <div class="light_Fill_in_theinformation_input_1 d-flex aic  marginauto ">
                                    <!--預設祈福者 *出生日期 -->
                                    <div class="light_Fill_in_theinformation_input_text col  d-flex aic">
                                        <p class="redcolorh5">*</p>
                                        <p>出生日期</p>
                                    </div>
                                    <!--預設祈福者 boostarp 下拉選單 -->
                                    <div class="col-7 displayflex aic p-0">
                                        <div class="boxset d-flex aic">
                                            <div class="boxsize_2 d-flex aic p-0 ">
                                                <select class="form-control col radius0 year" id="exampleInputTime_2">
                                                    <option selected value="">選擇</option>
                                                    <option value="2021">2021</option>
                                                    <option value="2020">2020</option>
                                                    <option value="2019">2019</option>
                                                    <option value="2018">2018</option>
                                                    <option value="2017">2017</option>
                                                    <option value="2016">2016</option>
                                                    <option value="2015">2015</option>
                                                    <option value="2014">2014</option>
                                                    <option value="2013">2013</option>
                                                    <option value="2012">2012</option>
                                                    <option value="2011">2011</option>
                                                    <option value="2010">2010</option>
                                                    <option value="2009">2009</option>
                                                    <option value="2008">2008</option>
                                                    <option value="2007">2007</option>
                                                    <option value="2006">2006</option>
                                                    <option value="2005">2005</option>
                                                    <option value="2004">2004</option>
                                                    <option value="2003">2003</option>
                                                    <option value="2002">2002</option>
                                                    <option value="2001">2001</option>
                                                    <option value="2000">2000</option>
                                                    <option value="1999">1999</option>
                                                    <option value="1998">1998</option>
                                                    <option value="1997">1997</option>
                                                    <option value="1996">1996</option>
                                                    <option value="1995">1995</option>
                                                    <option value="1994">1994</option>
                                                    <option value="1993">1993</option>
                                                    <option value="1992">1992</option>
                                                    <option value="1991">1991</option>
                                                    <option value="1990">1990</option>
                                                    <option value="1989">1989</option>
                                                    <option value="1988">1988</option>
                                                    <option value="1987">1987</option>
                                                    <option value="1986">1986</option>
                                                    <option value="1985">1985</option>
                                                    <option value="1984">1984</option>
                                                    <option value="1983">1983</option>
                                                    <option value="1982">1982</option>
                                                    <option value="1981">1981</option>
                                                    <option value="1980">1980</option>
                                                    <option value="1979">1979</option>
                                                    <option value="1978">1978</option>
                                                    <option value="1977">1977</option>
                                                    <option value="1976">1976</option>
                                                    <option value="1975">1975</option>
                                                    <option value="1974">1974</option>
                                                    <option value="1973">1973</option>
                                                    <option value="1972">1972</option>
                                                    <option value="1971">1971</option>
                                                    <option value="1970">1970</option>
                                                    <option value="1969">1969</option>
                                                    <option value="1968">1968</option>
                                                    <option value="1967">1967</option>
                                                    <option value="1966">1966</option>
                                                    <option value="1965">1965</option>
                                                    <option value="1964">1964</option>
                                                    <option value="1963">1963</option>
                                                    <option value="1962">1962</option>
                                                    <option value="1961">1961</option>
                                                    <option value="1960">1960</option>
                                                    <option value="1959">1959</option>
                                                    <option value="1958">1958</option>
                                                    <option value="1957">1957</option>
                                                    <option value="1956">1956</option>
                                                    <option value="1955">1955</option>
                                                    <option value="1954">1954</option>
                                                    <option value="1953">1953</option>
                                                    <option value="1952">1952</option>
                                                    <option value="1951">1951</option>
                                                    <option value="1950">1950</option>
                                                    <option value="1949">1949</option>
                                                    <option value="1948">1948</option>
                                                    <option value="1947">1947</option>
                                                    <option value="1946">1946</option>
                                                    <option value="1945">1945</option>
                                                    <option value="1944">1944</option>
                                                    <option value="1943">1943</option>
                                                    <option value="1942">1942</option>
                                                    <option value="1941">1941</option>
                                                    <option value="1940">1940</option>
                                                    <option value="1939">1939</option>
                                                    <option value="1938">1938</option>
                                                    <option value="1937">1937</option>
                                                    <option value="1936">1936</option>
                                                    <option value="1935">1935</option>
                                                    <option value="1934">1934</option>
                                                    <option value="1933">1933</option>
                                                    <option value="1932">1932</option>
                                                    <option value="1931">1931</option>
                                                    <option value="1930">1930</option>
                                                    <option value="1929">1929</option>
                                                    <option value="1928">1928</option>
                                                    <option value="1927">1927</option>
                                                    <option value="1926">1926</option>
                                                    <option value="1925">1925</option>
                                                    <option value="1924">1924</option>
                                                    <option value="1923">1923</option>
                                                    <option value="1922">1922</option>
                                                    <option value="1921">1921</option>
                                                    <option value="1920">1920</option>
                                                </select>

                                            </div>
                                            <div class="fake_year"></div>
                                        </div>

                                    </div>
                                </div>


                                <!-- 空值警告用 年-->
                                <div class="light_Fill_in_theinformation_input_1 d-flex aic col-lg-8 marginauto ">
                                    <div class="light_Fill_in_theinformation_input_text col padright0 d-flex aic">
                                    </div>
                                    <div class="col-7 displayflex aic p-0">
                                        <div class="boxset d-flex aic">
                                            <div class="boxsize_2 d-flex aic p-0 ">
                                                <div class="year vishidden"></div>
                                                <small class="form-text error"></small>

                                            </div>
                                            <div class="fake_width vishidden"></div>
                                        </div>

                                    </div>
                                </div>

                            </div>

                            <div class="paddingbottom40">
                                <div class="light_Fill_in_theinformation_input_1 d-flex aic  marginauto ">
                                    <!--預設祈福者 *出生日期 -->
                                    <div class="light_Fill_in_theinformation_input_text col  d-flex aic">
                                        <p class="redcolorh5 vishidden">*</p>
                                        <p class="vishidden">出生日期</p>
                                    </div>
                                    <!--預設祈福者 boostarp 下拉選單 -->
                                    <div class="col-7 d-flex aic p-0">


                                        <div class="boxset d-flex aic">
                                            <div class="boxsize_2 d-flex aic p-0">
                                                <select class="form-control col radius0 month" id="exampleInputTime_3">
                                                    <option selected value="">選擇</option>
                                                    <option value="01">1</option>
                                                    <option value="02">2</option>
                                                    <option value="03">3</option>
                                                    <option value="04">4</option>
                                                    <option value="05">5</option>
                                                    <option value="06">6</option>
                                                    <option value="07">7</option>
                                                    <option value="08">8</option>
                                                    <option value="09">9</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                </select>

                                            </div>
                                            <div class="fake_month"></div>
                                        </div>
                                        <div class="boxset d-flex aic">
                                            <div class="boxsize_2 d-flex aic p-0 ">
                                                <select class="form-control col radius0 day" id="exampleInputTime_4">
                                                    <option selected value="">選擇</option>
                                                    <option value="01">1</option>
                                                    <option value="02">2</option>
                                                    <option value="03">3</option>
                                                    <option value="04">4</option>
                                                    <option value="05">5</option>
                                                    <option value="06">6</option>
                                                    <option value="07">7</option>
                                                    <option value="08">8</option>
                                                    <option value="09">9</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                    <option value="13">13</option>
                                                    <option value="14">14</option>
                                                    <option value="15">15</option>
                                                    <option value="16">16</option>
                                                    <option value="17">17</option>
                                                    <option value="18">18</option>
                                                    <option value="19">19</option>
                                                    <option value="20">20</option>
                                                    <option value="21">21</option>
                                                    <option value="22">22</option>
                                                    <option value="23">23</option>
                                                    <option value="24">24</option>
                                                    <option value="25">25</option>
                                                    <option value="26">26</option>
                                                    <option value="27">27</option>
                                                    <option value="28">28</option>
                                                    <option value="29">29</option>
                                                    <option value="30">30</option>
                                                    <option value="31">31</option>
                                                </select>
                                            </div>
                                            <div class="fake_day"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- 空值警告用 月日-->
                                <div class="light_Fill_in_theinformation_input_1 d-flex aic col-lg-8 marginauto ">
                                    <div class="light_Fill_in_theinformation_input_text col padright0 d-flex aic">
                                    </div>
                                    <div class="col-7 d-flex aic p-0">

                                        <div class="boxset d-flex aic">
                                            <div class="boxsize d-flex aic p-0">
                                                <div class="month vishidden"></div>
                                                <small class="form-text error"></small>

                                            </div>
                                            <div class="fake_width vishidden"></div>
                                        </div>
                                        <div class="boxset d-flex aic">
                                            <div class="boxsize d-flex aic p-0 ">
                                                <div class="day vishidden"></div>
                                                <small class="form-text error"></small>
                                            </div>
                                            <div class="fake_width vishidden"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>




                            <!--  手機用 預設祈福者 input_1_時辰-->
                            <div class="light_Fill_in_theinformation_input_1 d-flex aic col-lg-8 marginauto paddingbottom40">
                                <!--手機用 *時辰 -->
                                <div class="light_Fill_in_theinformation_input_text col padright0 d-flex aic">
                                    <p class="redcolorh5 opac">*</p>
                                    <p>出生時辰</p>
                                </div>
                                <!--手機用 預設祈福者 boostarp 下拉選單 -->
                                <div class="col-7 d-flex aic p-0">
                                    <div class="col p-0">
                                        <select class="form-control col radius0 text_time_2">
                                            <option selected>吉時</option>
                                            <option value="子時 23~0">子時 23~01</option>
                                            <option value="丑時 01~03">丑時 01~03</option>
                                            <option value="寅時 03~05">寅時 03~05</option>
                                            <option value="卯時 05~07">卯時 05~07</option>
                                            <option value="辰時 07~09">辰時 07~09</option>
                                            <option value="巳時 09~11">巳時 09~11</option>
                                            <option value="午時 11~13">午時 11~13</option>
                                            <option value="未時 13~15">未時 13~15</option>
                                            <option value="申時 15~17">申時 15~17</option>
                                            <option value="酉時 17~19">酉時 17~19</option>
                                            <option value="戌時 19~21">戌時 19~21</option>
                                            <option value="亥時 21~23">亥時 21~23</option>

                                        </select>
                                    </div>
                                </div>
                            </div>


                            <!--  預設祈福者input_1_性別-->
                            <div class="light_Fill_in_theinformation_input_1 d-flex aic col-lg-8 marginauto paddingbottom40">

                                <div class="light_Fill_in_theinformation_input_text col d-flex">
                                    <p class="redcolorh5 vishidden">*</p>
                                    <p>性別</p>
                                </div>

                                <div class="col-7 d-flex aic p-0">
                                    <div class="col p-0">
                                        <select class="form-control col radius0 text_xxxx_2">
                                            <option value="男">男</option>
                                            <option value="女">女</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!--  手機用 預設祈福者 input_1_電話-->
                            <div class="light_Fill_in_theinformation_input_1 d-flex aic  marginauto paddingbottom40">
                                <!--預設祈福者 *連絡電話 -->
                                <div class="light_Fill_in_theinformation_input_text col d-flex">
                                    <p class="redcolorh5 opac">*</p>
                                    <p>連絡電話</p>
                                </div>
                                <!--預設祈福者 boostarp input -->
                                <input type="text" class="form-control col-7 radius0  exampleInputPhoneNumber_1 text_mobile_2 mobile" placeholder="請輸入連絡電話" id="exampleInputPhoneNumber" pattern="09\d{2}-?\d{3}-?\d{3}">
                            </div>

                            <!--  手機用 預設祈福者 input_1_地址-->
                            <div class="all paddingbottom40">
                                <div class="light_Fill_in_theinformation_input_1 d-flex aic  marginauto ">
                                    <!--預設祈福者 *地址 -->
                                    <div class="light_Fill_in_theinformation_input_text col d-flex">
                                        <p class="redcolorh5">*</p>
                                        <p>地址</p>
                                    </div>
                                    <!-- 預設祈福者boostarp input -->
                                    <div class="col-7 p-0">
                                        <input type="text" class="form-control  radius0 exampleInputaddress_1 address text_address_2" placeholder="請輸入地址" cols="30" rows="3" name="address" id="address">

                                    </div>
                                </div>
                                <!-- 空值警告用 地址-->
                                <div class="light_Fill_in_theinformation_input_1 d-flex aic  marginauto ">
                                    <div class="light_Fill_in_theinformation_input_text col d-flex">
                                    </div>
                                    <div class="col-7 p-0">
                                        <div class="address vishidden"></div>
                                        <small class="form-text error"></small>
                                    </div>
                                </div>
                            </div>

                            <!-- 改 手機用 燈種+廟宇套裝-->
                            <div class="light_add_set_md lightadd_this_md">
                                <div class="paddingbottom40 myselector_group">
                                    <div class="light_Fill_in_theinformation_input_set  col marginauto lightcard" data-selector="myselector">
                                        <!--  手機用 預設祈福者 input_1_選擇燈種 -->
                                        <div class="paddingbottom40">
                                            <div class="light_Fill_in_theinformation_input_1 d-flex aic  marginauto  ">
                                                <!-- 手機用 *燈種 -->
                                                <div class="light_Fill_in_theinformation_input_text col  d-flex aic">
                                                    <p class="redcolorh5">*</p>
                                                    <p>選擇燈種</p>
                                                </div>
                                                <!--手機用 預設祈福者 boostarp 下拉選單 -->
                                                <div class="col-7 d-flex aic p-0">
                                                    <div class="col p-0">
                                                        <select name="light_type" class="form-control col-11 radius0 lightarray light_type" id="select-1" required>
                                                            <option selected value="">選擇燈種</option>
                                                            <option>光明燈</option>
                                                            <option>文昌燈</option>
                                                            <option>安太歲</option>
                                                            <option>藥師燈</option>
                                                            <option>發財燈</option>
                                                            <option>姻緣燈</option>
                                                        </select>
                                                    </div>
                                                    <!-- <i class="far fa-trash-alt marginauto removebut_far_md"></i> -->
                                                </div>
                                            </div>
                                            <!-- 空值警告用 地址-->
                                            <div class="light_Fill_in_theinformation_input_1 d-flex aic  marginauto ">
                                                <div class="light_Fill_in_theinformation_input_text col d-flex">
                                                </div>
                                                <div class="col-7 p-0">
                                                    <div class="light_type vishidden"></div>
                                                    <small class="form-text error"></small>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="paddingbottom40">
                                            <!--  手機用 預設祈福者 input_1_ 選擇廟宇-->
                                            <div class="light_Fill_in_theinformation_input_1 d-flex aic  marginauto ">
                                                <!--手機用 *廟宇_地區 -->
                                                <div class="light_Fill_in_theinformation_input_text col  d-flex aic">
                                                    <p class="redcolorh5">*</p>
                                                    <p>選擇廟宇</p>
                                                </div>
                                                <!-- 手機用 預設祈福者 boostarp 下拉選單 廟宇_地區 資料匯入-->
                                                <div class="col-7 d-flex aic p-0">
                                                    <div class="col p-0">
                                                        <select name="light_area" class="form-control col-11 radius0 areaarray light_area" id="select-2" disabled>
                                                            <option selected value="">選擇地區</option>
                                                        </select>
                                                    </div>
                                                </div>

                                            </div>
                                            <!-- 空值警告用 地址-->
                                            <div class="light_Fill_in_theinformation_input_1 d-flex aic  marginauto ">
                                                <div class="light_Fill_in_theinformation_input_text col d-flex">
                                                </div>
                                                <div class="col-7 p-0">
                                                    <div class="light_area vishidden"></div>
                                                    <small class="form-text error"></small>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="paddingbottom40">
                                            <div class="light_Fill_in_theinformation_input_1 d-flex aic  marginauto ">
                                                <!--手機用 *廟宇 -->
                                                <div class="light_Fill_in_theinformation_input_text col  d-flex aic visy">
                                                    <p class="redcolorh5">*</p>
                                                    <p>選擇廟宇</p>
                                                </div>
                                                <!-- 手機用 預設祈福者 boostarp 下拉選單 廟宇_宮廟 資料匯入-->
                                                <div class="col-7 d-flex aic p-0">
                                                    <div class="col p-0">
                                                        <select name="light_temple" class="form-control col-11 radius0 light_temple " id="select-3" disabled>
                                                            <option selected value="">選擇廟宇</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- 空值警告用 地址-->
                                            <div class="light_Fill_in_theinformation_input_1 d-flex aic  marginauto ">
                                                <div class="light_Fill_in_theinformation_input_text col d-flex">
                                                </div>
                                                <div class="col-7 p-0">
                                                    <div class="light_temple vishidden"></div>
                                                    <small class="form-text error"></small>
                                                </div>
                                            </div>
                                        </div>



                                    </div>
                                </div>
                            </div>
                            <!--  手機用 預設祈福者 _按鈕_新增廟宇 -->
                            <div class="button_add_set_md d-flex juscsb  marginauto paddingbottom35 butmaxwid pad20">
                                <div class="button_add ">
                                    <button class="graycolor butomcolor light_add_md">
                                        <p>+ 新增燈種與廟宇</p>
                                    </button>
                                </div>

                            </div>
                        </div>


                    </div>



                    <div class="memberadd  " id="memberadd">
                        <!-- 手機用 祈福者卡(none) text_3-->
                        <div class="light_Fill_in_theinformation_text_4 padddingtop40">
                            <!-- 手機用 祈福者卡(none)  小提示 -->
                            <div class="light_Fill_in_theinformation_text_star d-flex juscsb paddingbottom40">
                                <!-- 手機用 祈福者卡(none)  小提示 必填資料 -->
                                <div class="light_Fill_in_theinformation_text_star_left">
                                    <!-- *的 ICON -->
                                    <!-- <img src=""> -->
                                    <p class="redcolorh5">*為必填資料</p>
                                </div>

                                <!-- 祈福者卡(none) boostarp 下拉選單 -->
                                <div class=" d-flex aic p-0">
                                    <div class="col p-0">
                                        <select class="form-control radius0 exampleInputfriend" id="exampleInputfriend">

                                            <option value="">同親友資料</option>
                                            <?php foreach ($rows as $p) : ?>
                                                <option value="<?= $p['sid'] ?>" data-sid="<?= $p['sid'] ?>" data-address="<?= $p['address_'] ?>" data-mobile="<?= $p['mobile_'] ?>" data-year="<?= $p['year'] ?>" data-month="<?= $p['month'] ?>" data-day="<?= $p['day'] ?>" data-birthday="<?= $p['birthday_'] ?>">


                                                    <?= $p['name_'] ?>
                                                </option>

                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!--  手機用 祈福者卡(none) _標題 -->
                            <div class="light_Fill_in_theinformation_title paddingbottom40 postre">
                                <h3 class="postre">祈福者
                                    <!--  手機用 祈福者卡(none) _標題_刪除按鈕 -->
                                    <button class="graycolor postab padbut dipay">
                                        <p>刪除</p>
                                    </button>
                                </h3>

                            </div>


                            <!--  手機用 祈福者卡(none) input集合 -->
                            <div class="light_Fill_in_theinformation_inputset borderbottom  displayno">
                                <!--  手機用 祈福者卡(none) input_1_姓名-->
                                <div class="light_Fill_in_theinformation_input_1 d-flex aic col-lg-8 marginauto paddingbottom40">
                                    <!--手機用 祈福者卡(none) *姓名 -->
                                    <div class="light_Fill_in_theinformation_input_text col d-flex">
                                        <p class="redcolorh5">*</p>
                                        <p>姓名</p>
                                    </div>
                                    <!--手機用 祈福者卡(none) boostarp input -->
                                    <div class="col-7 p-0">
                                        <input type="text" class="form-control  radius0 exampleInputName name" placeholder="請輸入姓名" id="name" name="name">
                                        <small class="form-text error"></small>
                                    </div>
                                </div>

                                <!-- 手機用 祈福者卡(none) 預設祈福者 input_1_生日-->
                                <div class="paddingbottom40">
                                    <div class="light_Fill_in_theinformation_input_1 d-flex aic  marginauto ">
                                        <!--手機用 祈福者卡(none) *出生日期 -->
                                        <div class="light_Fill_in_theinformation_input_text col  d-flex aic">
                                            <p class="redcolorh5">*</p>
                                            <p>出生日期</p>
                                        </div>
                                        <!--手機用 祈福者卡(none) boostarp 下拉選單 -->
                                        <div class="col-7 displayflex aic p-0">
                                            <div class="boxset d-flex aic">
                                                <div class="boxsize_2 d-flex aic p-0 ">
                                                    <select class="form-control col radius0 exampleInputYear year" id="exampleInputTime_2">
                                                        <option selected value="">選擇</option>
                                                        <option value="2021">2021</option>
                                                        <option value="2020">2020</option>
                                                        <option value="2019">2019</option>
                                                        <option value="2018">2018</option>
                                                        <option value="2017">2017</option>
                                                        <option value="2016">2016</option>
                                                        <option value="2015">2015</option>
                                                        <option value="2014">2014</option>
                                                        <option value="2013">2013</option>
                                                        <option value="2012">2012</option>
                                                        <option value="2011">2011</option>
                                                        <option value="2010">2010</option>
                                                        <option value="2009">2009</option>
                                                        <option value="2008">2008</option>
                                                        <option value="2007">2007</option>
                                                        <option value="2006">2006</option>
                                                        <option value="2005">2005</option>
                                                        <option value="2004">2004</option>
                                                        <option value="2003">2003</option>
                                                        <option value="2002">2002</option>
                                                        <option value="2001">2001</option>
                                                        <option value="2000">2000</option>
                                                        <option value="1999">1999</option>
                                                        <option value="1998">1998</option>
                                                        <option value="1997">1997</option>
                                                        <option value="1996">1996</option>
                                                        <option value="1995">1995</option>
                                                        <option value="1994">1994</option>
                                                        <option value="1993">1993</option>
                                                        <option value="1992">1992</option>
                                                        <option value="1991">1991</option>
                                                        <option value="1990">1990</option>
                                                        <option value="1989">1989</option>
                                                        <option value="1988">1988</option>
                                                        <option value="1987">1987</option>
                                                        <option value="1986">1986</option>
                                                        <option value="1985">1985</option>
                                                        <option value="1984">1984</option>
                                                        <option value="1983">1983</option>
                                                        <option value="1982">1982</option>
                                                        <option value="1981">1981</option>
                                                        <option value="1980">1980</option>
                                                        <option value="1979">1979</option>
                                                        <option value="1978">1978</option>
                                                        <option value="1977">1977</option>
                                                        <option value="1976">1976</option>
                                                        <option value="1975">1975</option>
                                                        <option value="1974">1974</option>
                                                        <option value="1973">1973</option>
                                                        <option value="1972">1972</option>
                                                        <option value="1971">1971</option>
                                                        <option value="1970">1970</option>
                                                        <option value="1969">1969</option>
                                                        <option value="1968">1968</option>
                                                        <option value="1967">1967</option>
                                                        <option value="1966">1966</option>
                                                        <option value="1965">1965</option>
                                                        <option value="1964">1964</option>
                                                        <option value="1963">1963</option>
                                                        <option value="1962">1962</option>
                                                        <option value="1961">1961</option>
                                                        <option value="1960">1960</option>
                                                        <option value="1959">1959</option>
                                                        <option value="1958">1958</option>
                                                        <option value="1957">1957</option>
                                                        <option value="1956">1956</option>
                                                        <option value="1955">1955</option>
                                                        <option value="1954">1954</option>
                                                        <option value="1953">1953</option>
                                                        <option value="1952">1952</option>
                                                        <option value="1951">1951</option>
                                                        <option value="1950">1950</option>
                                                        <option value="1949">1949</option>
                                                        <option value="1948">1948</option>
                                                        <option value="1947">1947</option>
                                                        <option value="1946">1946</option>
                                                        <option value="1945">1945</option>
                                                        <option value="1944">1944</option>
                                                        <option value="1943">1943</option>
                                                        <option value="1942">1942</option>
                                                        <option value="1941">1941</option>
                                                        <option value="1940">1940</option>
                                                        <option value="1939">1939</option>
                                                        <option value="1938">1938</option>
                                                        <option value="1937">1937</option>
                                                        <option value="1936">1936</option>
                                                        <option value="1935">1935</option>
                                                        <option value="1934">1934</option>
                                                        <option value="1933">1933</option>
                                                        <option value="1932">1932</option>
                                                        <option value="1931">1931</option>
                                                        <option value="1930">1930</option>
                                                        <option value="1929">1929</option>
                                                        <option value="1928">1928</option>
                                                        <option value="1927">1927</option>
                                                        <option value="1926">1926</option>
                                                        <option value="1925">1925</option>
                                                        <option value="1924">1924</option>
                                                        <option value="1923">1923</option>
                                                        <option value="1922">1922</option>
                                                        <option value="1921">1921</option>
                                                        <option value="1920">1920</option>
                                                    </select>

                                                </div>
                                                <div class="fake_year"></div>
                                            </div>

                                        </div>
                                    </div>


                                    <!--手機用 祈福者卡(none) 空值警告用 年-->
                                    <div class="light_Fill_in_theinformation_input_1 d-flex aic col-lg-8 marginauto ">
                                        <div class="light_Fill_in_theinformation_input_text col padright0 d-flex aic">
                                        </div>
                                        <div class="col-7  aic p-0">
                                            <div class="boxset d-flex aic">
                                                <div class="boxsize_2 d-flex aic p-0 ">
                                                    <div class="year vishidden"></div>
                                                    <small class="form-text error"></small>

                                                </div>
                                                <div class="fake_width vishidden"></div>
                                            </div>

                                        </div>
                                    </div>

                                </div>

                                <div class="paddingbottom40">
                                    <div class="light_Fill_in_theinformation_input_1 d-flex aic  marginauto ">
                                        <!--手機用 祈福者卡(none) *出生日期 -->
                                        <div class="light_Fill_in_theinformation_input_text col  d-flex aic">
                                            <p class="redcolorh5 vishidden">*</p>
                                            <p class="vishidden">出生日期</p>
                                        </div>
                                        <!--手機用 祈福者卡(none) boostarp 下拉選單 -->
                                        <div class="col-7 d-flex aic p-0">


                                            <div class="boxset d-flex aic">
                                                <div class="boxsize_2 d-flex aic p-0">
                                                    <select class="form-control col radius0 exampleInputMonth month" id="exampleInputTime_3">
                                                        <option selected value="">選擇</option>
                                                        <option value="01">1</option>
                                                        <option value="02">2</option>
                                                        <option value="03">3</option>
                                                        <option value="04">4</option>
                                                        <option value="05">5</option>
                                                        <option value="06">6</option>
                                                        <option value="07">7</option>
                                                        <option value="08">8</option>
                                                        <option value="09">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                    </select>

                                                </div>
                                                <div class="fake_month"></div>
                                            </div>
                                            <div class="boxset d-flex aic">
                                                <div class="boxsize_2 d-flex aic p-0 ">
                                                    <select class="form-control col radius0 exampleInputDay day " id="exampleInputTime_4">
                                                        <option selected value="">選擇</option>
                                                        <option value="01">1</option>
                                                        <option value="02">2</option>
                                                        <option value="03">3</option>
                                                        <option value="04">4</option>
                                                        <option value="05">5</option>
                                                        <option value="06">6</option>
                                                        <option value="07">7</option>
                                                        <option value="08">8</option>
                                                        <option value="09">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                        <option value="13">13</option>
                                                        <option value="14">14</option>
                                                        <option value="15">15</option>
                                                        <option value="16">16</option>
                                                        <option value="17">17</option>
                                                        <option value="18">18</option>
                                                        <option value="19">19</option>
                                                        <option value="20">20</option>
                                                        <option value="21">21</option>
                                                        <option value="22">22</option>
                                                        <option value="23">23</option>
                                                        <option value="24">24</option>
                                                        <option value="25">25</option>
                                                        <option value="26">26</option>
                                                        <option value="27">27</option>
                                                        <option value="28">28</option>
                                                        <option value="29">29</option>
                                                        <option value="30">30</option>
                                                        <option value="31">31</option>
                                                    </select>
                                                </div>
                                                <div class="fake_day"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--手機用 祈福者卡(none) 空值警告用 月日-->
                                    <div class="light_Fill_in_theinformation_input_1 d-flex aic col-lg-8 marginauto ">
                                        <div class="light_Fill_in_theinformation_input_text col padright0 d-flex aic">
                                        </div>
                                        <div class="col-7 d-flex aic p-0">

                                            <div class="boxset d-flex aic">
                                                <div class="boxsize d-flex aic p-0">
                                                    <div class="month vishidden"></div>
                                                    <small class="form-text error"></small>

                                                </div>
                                                <div class="fake_width vishidden"></div>
                                            </div>
                                            <div class="boxset d-flex aic">
                                                <div class="boxsize d-flex aic p-0 ">
                                                    <div class="day vishidden"></div>
                                                    <small class="form-text error"></small>
                                                </div>
                                                <div class="fake_width vishidden"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>




                                <!--  手機用 祈福者卡(none) input_1_時辰-->
                                <div class="light_Fill_in_theinformation_input_1 d-flex aic col-lg-8 marginauto paddingbottom40">
                                    <!--手機用 祈福者卡(none) *時辰 -->
                                    <div class="light_Fill_in_theinformation_input_text col padright0 d-flex aic">
                                        <p class="redcolorh5 opac">*</p>
                                        <p>出生時辰</p>
                                    </div>
                                    <!--手機用 祈福者卡(none) 預設祈福者 boostarp 下拉選單 -->
                                    <div class="col-7 d-flex aic p-0">
                                        <div class="col p-0">
                                            <select class="form-control col radius0 text_time_2">
                                                <option selected>吉時</option>
                                                <option value="子時 23~0">子時 23~01</option>
                                                <option value="丑時 01~03">丑時 01~03</option>
                                                <option value="寅時 03~05">寅時 03~05</option>
                                                <option value="卯時 05~07">卯時 05~07</option>
                                                <option value="辰時 07~09">辰時 07~09</option>
                                                <option value="巳時 09~11">巳時 09~11</option>
                                                <option value="午時 11~13">午時 11~13</option>
                                                <option value="未時 13~15">未時 13~15</option>
                                                <option value="申時 15~17">申時 15~17</option>
                                                <option value="酉時 17~19">酉時 17~19</option>
                                                <option value="戌時 19~21">戌時 19~21</option>
                                                <option value="亥時 21~23">亥時 21~23</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>


                                <!--  手機用 祈福者卡(none) input_1_性別-->
                                <div class="light_Fill_in_theinformation_input_1 d-flex aic col-lg-8 marginauto paddingbottom40">

                                    <div class="light_Fill_in_theinformation_input_text col d-flex">
                                        <p class="redcolorh5 vishidden">*</p>
                                        <p>性別</p>
                                    </div>

                                    <div class="col-7 d-flex aic p-0">
                                        <div class="col p-0">
                                            <select class="form-control col radius0 text_xxxx_2">
                                                <option value="男">男</option>
                                                <option value="女">女</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <!--  手機用 祈福者卡(none) input_1_電話-->
                                <div class="light_Fill_in_theinformation_input_1 d-flex aic  marginauto paddingbottom40">
                                    <!--預設祈福者 *連絡電話 -->
                                    <div class="light_Fill_in_theinformation_input_text col d-flex">
                                        <p class="redcolorh5 opac">*</p>
                                        <p>連絡電話</p>
                                    </div>
                                    <!--手機用 祈福者卡(none) boostarp input -->
                                    <input type="text" class="form-control col-7 radius0  exampleInputPhoneNumber text_mobile_2 mobile" placeholder="請輸入連絡電話" id="exampleInputPhoneNumber" pattern="09\d{2}-?\d{3}-?\d{3}">
                                </div>

                                <!-- 手機用 祈福者卡(none) input_1_地址-->
                                <div class="all paddingbottom40">
                                    <div class="light_Fill_in_theinformation_input_1 d-flex aic  marginauto ">
                                        <!--手機用 祈福者卡(none) *地址 -->
                                        <div class="light_Fill_in_theinformation_input_text col d-flex">
                                            <p class="redcolorh5">*</p>
                                            <p>地址</p>
                                        </div>
                                        <!-- 手機用 祈福者卡(none) boostarp input -->
                                        <div class="col-7 p-0">
                                            <input type="text" class="form-control  radius0 exampleInputaddress address text_address_2" placeholder="請輸入地址" cols="30" rows="3" name="address" id="address">

                                        </div>
                                    </div>
                                    <!--手機用 祈福者卡(none) 空值警告用 地址-->
                                    <div class="light_Fill_in_theinformation_input_1 d-flex aic  marginauto ">
                                        <div class="light_Fill_in_theinformation_input_text col d-flex">
                                        </div>
                                        <div class="col-7 p-0">
                                            <div class="address vishidden"></div>
                                            <small class="form-text error"></small>
                                        </div>
                                    </div>
                                </div>

                                <!-- 改 手機用 祈福者卡(none) 燈種+廟宇套裝-->
                                <div class="light_add_set_md lightadd_this_md">
                                    <div class="paddingbottom40 myselector_group">
                                        <div class="light_Fill_in_theinformation_input_set  col marginauto lightcard" data-selector="myselector">
                                            <!--  手機用 祈福者卡(none) input_1_選擇燈種 -->
                                            <div class="paddingbottom40">
                                                <div class="light_Fill_in_theinformation_input_1 d-flex aic  marginauto  ">
                                                    <!-- 手機用 祈福者卡(none) *燈種 -->
                                                    <div class="light_Fill_in_theinformation_input_text col  d-flex aic">
                                                        <p class="redcolorh5">*</p>
                                                        <p>選擇燈種</p>
                                                    </div>
                                                    <!--手機用 祈福者卡(none) boostarp 下拉選單 -->
                                                    <div class="col-7 d-flex aic p-0">
                                                        <div class="col p-0">
                                                            <select name="light_type" class="form-control col-11 radius0 lightarray light_type" id="select-1" required>
                                                                <option selected value="">選擇燈種</option>
                                                                <option>光明燈</option>
                                                                <option>文昌燈</option>
                                                                <option>安太歲</option>
                                                                <option>藥師燈</option>
                                                                <option>發財燈</option>
                                                                <option>姻緣燈</option>
                                                            </select>
                                                        </div>
                                                        <!-- <i class="far fa-trash-alt marginauto removebut_far_md"></i> -->
                                                    </div>
                                                </div>
                                                <!--手機用 祈福者卡(none) 空值警告用 地址-->
                                                <div class="light_Fill_in_theinformation_input_1 d-flex aic  marginauto ">
                                                    <div class="light_Fill_in_theinformation_input_text col d-flex">
                                                    </div>
                                                    <div class="col-7 p-0">
                                                        <div class="light_type vishidden"></div>
                                                        <small class="form-text error"></small>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="paddingbottom40">
                                                <!--  手機用 祈福者卡(none) input_1_ 選擇廟宇-->
                                                <div class="light_Fill_in_theinformation_input_1 d-flex aic  marginauto ">
                                                    <!--手機用 *廟宇_地區 -->
                                                    <div class="light_Fill_in_theinformation_input_text col  d-flex aic">
                                                        <p class="redcolorh5">*</p>
                                                        <p>選擇廟宇</p>
                                                    </div>
                                                    <!-- 手機用 祈福者卡(none) boostarp 下拉選單 廟宇_地區 資料匯入-->
                                                    <div class="col-7 d-flex aic p-0">
                                                        <div class="col p-0">
                                                            <select name="light_area" class="form-control col-11 radius0 areaarray light_area" id="select-2" disabled>
                                                                <option selected value="">選擇地區</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!--手機用 祈福者卡(none) 空值警告用 地址-->
                                                <div class="light_Fill_in_theinformation_input_1 d-flex aic  marginauto ">
                                                    <div class="light_Fill_in_theinformation_input_text col d-flex">
                                                    </div>
                                                    <div class="col-7 p-0">
                                                        <div class="light_area vishidden"></div>
                                                        <small class="form-text error"></small>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="paddingbottom40">
                                                <div class="light_Fill_in_theinformation_input_1 d-flex aic  marginauto ">
                                                    <!--手機用 祈福者卡(none) *廟宇 -->
                                                    <div class="light_Fill_in_theinformation_input_text col  d-flex aic visy">
                                                        <p class="redcolorh5">*</p>
                                                        <p>選擇廟宇</p>
                                                    </div>
                                                    <!-- 手機用 祈福者卡(none) boostarp 下拉選單 廟宇_宮廟 資料匯入-->
                                                    <div class="col-7 d-flex aic p-0">
                                                        <div class="col p-0">
                                                            <select name="light_temple" class="form-control col-11 radius0 light_temple " id="select-3" disabled>
                                                                <option selected value="">選擇廟宇</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- 手機用 祈福者卡(none)空值警告用 地址-->
                                                <div class="light_Fill_in_theinformation_input_1 d-flex aic  marginauto ">
                                                    <div class="light_Fill_in_theinformation_input_text col d-flex">
                                                    </div>
                                                    <div class="col-7 p-0">
                                                        <div class="light_temple vishidden"></div>
                                                        <small class="form-text error"></small>
                                                    </div>
                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                </div>
                                <!-- 手機用 祈福者卡(none) _按鈕_新增廟宇 -->
                                <div class="button_add_set_md d-flex juscsb  marginauto paddingbottom35 butmaxwid pad20">
                                    <div class="button_add ">
                                        <button class="graycolor butomcolor light_add_md">
                                            <p>+ 新增燈種與廟宇</p>
                                        </button>
                                    </div>

                                </div>
                            </div>


                        </div>
                    </div>

                </div>

                <!-- 手機用 底部_按鈕 -->
                <div class="light_Fill_in_theinformation_button buttonstyle padddingtop40 padddingbottom150 butflexmargin  displayno ">
                    <div class="btntest">
                        <div class="butstyle_1 member_add_md btnss">
                            <p>新增祈福者</p>
                        </div>
                    </div>
                    <button type="button" class="butstyle_1 addbtn" id="popt" onclick="checkForm_input_1(); return false;">
                        <p>加入購物車</p>
                    </button>

                </div>
            </form>

        </div>

        <!-- 彈跳 點燈確認清單 -->


    </div>



    <!-- 彈跳 點燈確認清單 -->
    <div class="modal fade checkjump" id="checkjump" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered maxwidth40" role="document">
            <div class="modal-content boxlineno radius20 backgroundimg_2 padding5">
                <div class="modal-header boxlineno displaybor tac">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h5 class="modal-title">點燈確認清單</h5>
                </div>

                <!-- 彈跳 整體 -->
                <div class="modal-body pad0_md ">
                    <div class="modal-body_box borderline">
                        <!-- 彈跳 點燈清單 單人input集合-->
                        <!--彈跳 預設祈福者 -->
                        <div class="blesser-template ">
                            <div class="addjumpLight_new ">
                                <div class=" d-flex aic col-lg-10 marginauto paddingtop2">
                                    <div class=" col d-flex">
                                        <p class="redcolorh5"></p>
                                        <p class="fwb">祈福者</p>
                                    </div>
                                </div>
                                <div class=" d-flex aic col-lg-10 marginauto paddingtop2">
                                    <div class=" col d-flex">
                                        <p class="redcolorh5"></p>
                                        <p class="">姓名</p>
                                    </div>
                                    <!-- val值 -->
                                    <div class=" col-8 padlock">
                                        <p class="name_2" name="name_2"></p>
                                    </div>
                                </div>
                                <div class=" d-flex aic col-lg-10 marginauto paddingtop2">
                                    <div class=" col d-flex">
                                        <p class="redcolorh5"></p>
                                        <p>出生日期</p>
                                    </div>
                                    <!-- val值 -->
                                    <div class=" col-8 padlock d-flex">
                                        <!-- 國曆農曆 -->
                                        <p class="calendar_2"></p>
                                        <!-- 西元年月日 轉合併 -->
                                        <p class="pad00010 date_2"></p>
                                    </div>
                                </div>
                                <div class=" d-flex aic col-lg-10 marginauto paddingtop2">
                                    <div class=" col d-flex">
                                        <p class="redcolorh5"></p>
                                        <p class="">出生時辰</p>
                                    </div>
                                    <!-- val值 -->
                                    <div class=" col-8 padlock">
                                        <p class="time_2"></p>
                                    </div>
                                </div>
                                <div class=" d-flex aic col-lg-10 marginauto paddingtop2">
                                    <div class=" col d-flex">
                                        <p class="redcolorh5"></p>
                                        <p class="">性別</p>
                                    </div>
                                    <div class=" col-8 padlock">
                                        <p>男</p>
                                    </div>
                                </div>
                                <div class=" d-flex aic col-lg-10 marginauto paddingtop2">
                                    <div class=" col d-flex">
                                        <p class="redcolorh5"></p>
                                        <p class="">連絡電話</p>
                                    </div>
                                    <!-- val值 -->
                                    <div class=" col-8 padlock">
                                        <p class="mobile_2" name="mobile_2"></p>
                                    </div>
                                </div>
                                <div class=" d-flex aic col-lg-10 marginauto paddingtop2">
                                    <div class=" col d-flex">
                                        <p class="redcolorh5"></p>
                                        <p>地址</p>
                                    </div>
                                    <!-- val值 -->
                                    <div class=" col-8 padlock">
                                        <p class="address_2" name="address_2"></p>
                                    </div>
                                </div>
                                <div class=" d-flex aic col-lg-10 marginauto paddingtop2">
                                    <div class=" col d-flex">
                                        <p class="redcolorh5"></p>
                                        <p class="">選擇燈種</p>
                                    </div>
                                    <!-- val值 -->
                                    <div class=" col-8 padlock d-flex">
                                        <p class="light_text_2"></p>
                                    </div>
                                </div>
                            </div>


                            <!-- 我是分隔底線 -->
                            <div class=" aic col-lg-10 marginauto borderline_1 ">
                            </div>
                        </div>
                    </div>
                    <!-- 親友修改 返回 儲存按鈕 -->
                    <div class="modal-footer boxlineno marginauto col-9 jucse">
                        <div type="" class="aic btnss graycolor " data-dismiss="modal" aria-label="Close">返回</div>
                        <button type="submit" id="member_save" class="aic">送出</button>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <!-- 導航用代碼包含彈窗 -->
    <?php include __DIR__ . '/parts/ourscripts.php'; ?>


    <script>
        // 測試 同會員資料匯入輸入
        $(document).on('click', '.form-check-label', (function() {
            console.log('click')

            // 宣告k 為 資料庫當中 birth欄位 值為XXXX-XX-XX
            let k = ("<?= $f_test['birth'] ?>")

            console.log(k);
            // 從取得的值 例如2021-04-16 抽出 2021
            console.log(k.substr(0, 4));
            console.log(k.substr(5, 2));
            console.log(k.substr(8, 2));

            $(this).parents('.light_Fill_in_theinformation_text_star').next().next().find('.exampleInputName_1').val("<?= $f_test['name'] ?>");

            $(this).parents('.light_Fill_in_theinformation_text_star').next().next().find('.exampleInputPhoneNumber_1').val("<?= $f_test['mobile'] ?>");

            $(this).parents('.light_Fill_in_theinformation_text_star').next().next().find('.exampleInputaddress_1').val("<?= $f_test['address'] ?>");

            $(this).parents('.light_Fill_in_theinformation_text_star').next().next().find('.exampleInputemail_1').val("<?= $f_test['email'] ?>");

            // 將取得值 匯入 年 的欄位
            $(this).parents('.light_Fill_in_theinformation_text_star').next().next().find('.year').val(k.substr(0, 4));

            $(this).parents('.light_Fill_in_theinformation_text_star').next().next().find('.month').val(k.substr(5, 2));

            $(this).parents('.light_Fill_in_theinformation_text_star').next().next().find('.day').val(k.substr(8, 2));


        }))


        // 親友資料匯入

        $(document).on('change', ".exampleInputfriend", (function() {

            const sid = $(this).val();
            let p = $(this).parents('.light_Fill_in_theinformation_text_3')
            let po = $(this).parents('.light_Fill_in_theinformation_text_4')


            $.post(
                'light_Fill_in_api.php', {
                    sid
                },
                function(data) {
                    // $(".light_Fill_in_theinformation_text_3").get().forEach(p => {


                    // 宣告k 為 資料庫當中 birth欄位 值為XXXX-XX-XX
                    let ko = data.birthday_

                    console.log(ko);
                    // 從取得的值 例如2021-04-16 抽出 2021
                    console.log(ko.substr(0, 4));
                    console.log(ko.substr(5, 2));
                    console.log(ko.substr(8, 2));

                    $(p).find('.exampleInputName').val(data.name_)
                    $(p).find('.exampleInputaddress').val(data.address_)
                    $(p).find('.exampleInputPhoneNumber').val(data.mobile_)
                    $(p).find('.exampleInputYear').val(ko.substr(0, 4))
                    $(p).find('.exampleInputMonth').val(ko.substr(5, 2))
                    $(p).find('.exampleInputDay').val(ko.substr(8, 2))

                    $(po).find('.exampleInputName').val(data.name_)
                    $(po).find('.exampleInputaddress').val(data.address_)
                    $(po).find('.exampleInputPhoneNumber').val(data.mobile_)
                    $(po).find('.exampleInputYear').val(ko.substr(0, 4))
                    $(po).find('.exampleInputMonth').val(ko.substr(5, 2))
                    $(po).find('.exampleInputDay').val(ko.substr(8, 2))



                    // })
                },
                'json'
            )
        }))





        // 宣告submit_data為空陣列
        let submit_data = {};

        // 點擊#member_save
        $('#member_save').click(function() {
            // 用post方式傳送 格式為json
            $.post(
                'light_Fill_in_light_add.php',
                submit_data,
                function(data) {
                    if (data.success) {
                        location.reload();
                    } else {
                        alert('error');
                    }
                },
                'json'
            )
        });


        // 檢查email 正規表達式   !!!! 不能重複宣告   /parts/ourscripts.php 當中已宣告
        // const email_re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
        // const mobile_re = /^09\d{2}-?\d{3}-?\d{3}$/;

        // const smalls = [$name.next(), $email.next(), $mobile.next()];

        function checkForm_input() {
            let isPass = true;
            // 從light_Fill_in_theinformation_text_3 取得值 並forEach執行每一個 該動作宣告為info
            $(".light_Fill_in_theinformation_set").find(".light_Fill_in_theinformation_text_3").get().forEach(info => {

                // 宣告 $name 是從這個function  light_Fill_in_theinformation_text_3是整組祈福者卡 宣告為info 
                // 宣告每個$XXXX = 由每個info找到該.XXXX
                let $name = $(info).find('.name'),
                    $email = $(info).find('.email'),
                    $mobile = $(info).find('.mobile'),
                    $address = $(info).find('.address'),
                    $light = $(info).find('.light'),
                    $year = $(info).find('.year'),
                    $month = $(info).find('.month'),
                    $day = $(info).find('.day'),
                    $light_type = $(info).find('.light_type'),
                    $light_area = $(info).find('.light_area'),
                    $light_temple = $(info).find('.light_temple');


                // 宣告fileds
                let fileds = [$name, $email, $mobile, $address, $year, $month, $day, $light_type, $light_area, $light_temple];

                fileds.forEach(el => {
                    el.css('border', '1px solid #CCCCCC');
                    el.next().text('');
                });

                // 錯誤輸出 出現紅框
                // 姓名長度<2
                if ($name.val().length < 2) {
                    isPass = false;
                    $name.css('border', '1px solid red');
                    $name.next().text('請輸入正確的姓名');
                }
                // 地址長度<1
                if ($address.val().length < 1) {
                    isPass = false;
                    $address.css('border', '1px solid red');
                    $address.next().text('請輸入正確的地址');
                }


                // 由info 找到data-selector=myselector 往上選取至myselector_group 取得值 forEach執行每一個 
                // 宣告該動作為Selector function
                $(info).find('[data-selector=myselector]').parents('.myselector_group').get().forEach(selector => {
                    // 用let宣告區域內 $燈種、地區、廟宇 = 由Selector找到 該class
                    let $light_type = $(selector).find('.light_type'),
                        $light_area = $(selector).find('.light_area'),
                        $light_temple = $(selector).find('.light_temple');

                    // 燈種為空值
                    if ($light_type.val() == "") {
                        isPass = false;
                        $light_type.css('border', '1px solid red');
                        $light_type.next().text('請選擇燈種');
                    }
                    // 地區為空值
                    if ($light_area.val() == "") {
                        isPass = false;
                        $light_area.css('border', '1px solid red');
                        $light_area.next().text('請選擇地區');
                    }
                    // 廟宇為空值
                    if ($light_temple.val() == "") {
                        isPass = false;
                        $light_temple.css('border', '1px solid red');
                        $light_temple.next().text('請選擇廟宇');
                    }
                });

                // 西元年為空值
                if ($year.val() == "") {
                    isPass = false;
                    $year.css('border', '1px solid red');
                    $year.next().text('請選擇');
                }
                // 月份為空值
                if ($month.val() == "") {
                    isPass = false;
                    $month.css('border', '1px solid red');
                    $month.next().text('請選擇');
                }
                // 日為空值
                if ($day.val() == "") {
                    isPass = false;
                    $day.css('border', '1px solid red');
                    $day.next().text('請選擇');
                }

            });
            if (isPass == false)
                alert("請填入正確資訊");

            if (isPass) {
                $('#checkjump').modal();
                // >緊靠著 >第一層    .blesser-template以外的remove
                $('#checkjump .modal-body_box > :not(.blesser-template)').remove();
                // .blesser-template隱藏
                $('.blesser-template').hide();
                // blessers 陣列為空
                blessers = [];


                // 從.light_Fill_in_theinformation_text_3 取的值 forEach執行 涵式內每一個一次 
                // 該動作宣告為info
                $(".light_Fill_in_theinformation_set").find(".light_Fill_in_theinformation_text_3").get().forEach(info => {

                    // 宣告 由info找到.name的val值
                    let name = $(info).find('.name').val(),
                        mobile = $(info).find('.mobile').val(),
                        address = $(info).find('.address').val(),
                        stime = $(info).find('.text_time_2').val(),
                        year = $(info).find('.year').val(),
                        month = $(info).find('.month').val(),
                        day = $(info).find('.day').val();
                    console.log("name", name);
                    // birthday = 年val + 字串 + 月val + 字串 + 日val
                    birthday = year + '-' + month + '-' + day;

                    // 宣告 light 陣列為空
                    let light = [];
                    // 由info 找到data-selector=myselector 往上找到 .myselector_group 取的值 涵式內每一個一次
                    // 該動作宣告為selector
                    $(info).find('[data-selector=myselector]').parents('.myselector_group').get().forEach(selector => {
                        // 宣告 light_type = 由selector找到 .light_type燈種val值
                        let light_type = $(selector).find('.light_type').val(),
                            light_area = $(selector).find('.light_area').val(),
                            light_temple = $(selector).find('.light_temple').val();
                        // light.push加入[light_type, light_area, light_temple]陣列 透過join 三個字串合併為一個字串 " "
                        light.push([light_type, light_area, light_temple].join(" "));
                    });
                    console.log("light", light);
                    // blessers.push將以下加入陣列當中
                    blessers.push({
                        // [name,content,qty,price,note]
                        // key:val
                        name: name,
                        content: light.join(","),
                        qty: light.length,
                        price: 600,
                        // note : 合併mobile address stime birthday  join成 一個字串+ "," 
                        note: [mobile, address, stime, birthday].join(",")

                    });



                    // 宣告$blesser 為複製.blesser-template內容全部 並移除.blesser-template該class外皮
                    let $blesser = $('.blesser-template').clone().removeClass('blesser-template').show();
                    $blesser.find('.name_2').text(name);
                    $blesser.find('.mobile_2').text(mobile);
                    $blesser.find(".address_2").text(address);
                    $blesser.find(".time_2").text(stime);
                    $blesser.find(".calendar_2").text(birthday);
                    $blesser.find(".light_text_2").html(light.join("<br />"));

                    // 彈跳表單 加入 $blesser
                    $('#checkjump .modal-body_box').append($blesser);

                });
                console.log("blessers", blessers);
                submit_data = {
                    'json': JSON.stringify(blessers)
                }
            }

        }


        function checkForm_input_1() {
            let isPass = true;
            // 從light_Fill_in_theinformation_text_3 取得值 並forEach執行每一個 該動作宣告為info
            $(".light_Fill_in_theinformation_set").find(".light_Fill_in_theinformation_text_4").get().forEach(info => {

                // 宣告 $name 是從這個function  light_Fill_in_theinformation_text_3是整組祈福者卡 宣告為info 
                // 宣告每個$XXXX = 由每個info找到該.XXXX
                let $name = $(info).find('.name'),
                    $email = $(info).find('.email'),
                    $mobile = $(info).find('.mobile'),
                    $address = $(info).find('.address'),
                    $light = $(info).find('.light'),
                    $year = $(info).find('.year'),
                    $month = $(info).find('.month'),
                    $day = $(info).find('.day'),
                    $light_type = $(info).find('.light_type'),
                    $light_area = $(info).find('.light_area'),
                    $light_temple = $(info).find('.light_temple');


                // 宣告fileds
                let fileds = [$name, $email, $mobile, $address, $year, $month, $day, $light_type, $light_area, $light_temple];

                fileds.forEach(el => {
                    el.css('border', '1px solid #CCCCCC');
                    el.next().text('');
                });

                // 錯誤輸出 出現紅框
                // 姓名長度<2
                if ($name.val().length < 2) {
                    isPass = false;
                    $name.css('border', '1px solid red');
                    $name.next().text('請輸入正確的姓名');
                }
                // 地址長度<1
                if ($address.val().length < 1) {
                    isPass = false;
                    $address.css('border', '1px solid red');
                    $address.next().text('請輸入正確的地址');
                }


                // 由info 找到data-selector=myselector 往上選取至myselector_group 取得值 forEach執行每一個 
                // 宣告該動作為Selector function
                $(info).find('[data-selector=myselector]').parents('.myselector_group').get().forEach(selector => {
                    // 用let宣告區域內 $燈種、地區、廟宇 = 由Selector找到 該class
                    let $light_type = $(selector).find('.light_type'),
                        $light_area = $(selector).find('.light_area'),
                        $light_temple = $(selector).find('.light_temple');

                    // 燈種為空值
                    if ($light_type.val() == "") {
                        isPass = false;
                        $light_type.css('border', '1px solid red');
                        $light_type.next().text('請選擇燈種');
                    }
                    // 地區為空值
                    if ($light_area.val() == "") {
                        isPass = false;
                        $light_area.css('border', '1px solid red');
                        $light_area.next().text('請選擇地區');
                    }
                    // 廟宇為空值
                    if ($light_temple.val() == "") {
                        isPass = false;
                        $light_temple.css('border', '1px solid red');
                        $light_temple.next().text('請選擇廟宇');
                    }
                });

                // 西元年為空值
                if ($year.val() == "") {
                    isPass = false;
                    $year.css('border', '1px solid red');
                    $year.next().text('請選擇');
                }
                // 月份為空值
                if ($month.val() == "") {
                    isPass = false;
                    $month.css('border', '1px solid red');
                    $month.next().text('請選擇');
                }
                // 日為空值
                if ($day.val() == "") {
                    isPass = false;
                    $day.css('border', '1px solid red');
                    $day.next().text('請選擇');
                }
            });
            if (isPass == false)
                alert("請填入正確資訊");

            if (isPass) {
                $('#checkjump').modal();
                // >緊靠著 >第一層    .blesser-template以外的remove
                $('#checkjump .modal-body_box > :not(.blesser-template)').remove();
                // .blesser-template隱藏
                $('.blesser-template').hide();
                // blessers 陣列為空
                blessers = [];


                // 從.light_Fill_in_theinformation_text_3 取的值 forEach執行 涵式內每一個一次 
                // 該動作宣告為info
                $(".light_Fill_in_theinformation_set").find(".light_Fill_in_theinformation_text_4").get().forEach(info => {

                    // 宣告 由info找到.name的val值
                    let name = $(info).find('.name').val(),
                        mobile = $(info).find('.mobile').val(),
                        address = $(info).find('.address').val(),
                        stime = $(info).find('.text_time_2').val(),
                        year = $(info).find('.year').val(),
                        month = $(info).find('.month').val(),
                        day = $(info).find('.day').val();
                    console.log("name", name);
                    // birthday = 年val + 字串 + 月val + 字串 + 日val
                    birthday = year + '-' + month + '-' + day;

                    // 宣告 light 陣列為空
                    let light = [];
                    // 由info 找到data-selector=myselector 往上找到 .myselector_group 取的值 涵式內每一個一次
                    // 該動作宣告為selector
                    $(info).find('[data-selector=myselector]').parents('.myselector_group').get().forEach(selector => {
                        // 宣告 light_type = 由selector找到 .light_type燈種val值
                        let light_type = $(selector).find('.light_type').val(),
                            light_area = $(selector).find('.light_area').val(),
                            light_temple = $(selector).find('.light_temple').val();
                        // light.push加入[light_type, light_area, light_temple]陣列 透過join 三個字串合併為一個字串 " "
                        light.push([light_type, light_area, light_temple].join(" "));
                    });
                    console.log("light", light);
                    // blessers.push將以下加入陣列當中
                    blessers.push({
                        // [name,content,qty,price,note]
                        // key:val
                        name: name,
                        content: light.join(","),
                        qty: light.length,
                        price: 600,
                        // note : 合併mobile address stime birthday  join成 一個字串+ "," 
                        note: [mobile, address, stime, birthday].join(",")

                    });



                    // 宣告$blesser 為複製.blesser-template內容全部 並移除.blesser-template該class外皮
                    let $blesser = $('.blesser-template').clone().removeClass('blesser-template').show();
                    $blesser.find('.name_2').text(name);
                    $blesser.find('.mobile_2').text(mobile);
                    $blesser.find(".address_2").text(address);
                    $blesser.find(".time_2").text(stime);
                    $blesser.find(".calendar_2").text(birthday);
                    $blesser.find(".light_text_2").html(light.join("<br />"));

                    // 彈跳表單 加入 $blesser
                    $('#checkjump .modal-body_box').append($blesser);

                });
                console.log("blessers", blessers);
                submit_data = {
                    'json': JSON.stringify(blessers)
                }
            }

        }









        // 通用 刪除祈福者 on版本
        $(document).on('click', '.removebut', (function() {
            console.log('click')
            $(this).parentsUntil('.removeset').remove();
        }))

        // 桌機 刪除燈種垃圾桶 on版本
        $(document).on('click', '.removebut_far', (function() {
            console.log('click')
            $(this).parentsUntil('.light_add_set').remove();
        }))

        // 手機 刪除燈種垃圾桶 on版本
        $(document).on('click', '.removebut_far_md', (function() {
            console.log('click')
            $(this).parentsUntil('.light_add_set_md').remove();
        }))


        // 桌機 祈福者增加
        // let addFamily = document.querySelector(".memberadd").innerHTML;
        // $('.member_add').click(function () {
        // console.log('click', addFamily)
        // $('.removeset').append(addFamily);
        // })









        // 桌機 祈福者增加on版本

        let nowcard = 1;
        $(document).on('click', '.member_add', function() {
            // let newLiiii = '<div id="newdata_' + nowcard + '">' + addCard_new + '</div>';

            // nowcard = nowcard + 1;
            // console.log('click', newLiiii)
            $('.removeset').append(addCard_new);

        })

        let addCard_new = `<div class="light_Fill_in_theinformation_text_3 padddingtop40 ">
                                <!--  祈福者卡(none)  小提示 -->
                                <div class="light_Fill_in_theinformation_text_star d-flex juscsb paddingbottom40">
                                    <!--  祈福者卡(none)  小提示 必填資料 -->
                                    <div class="light_Fill_in_theinformation_text_star_left">
                                        <!-- *的 ICON -->
                                        <!-- <img src=""> -->
                                        <p class="redcolorh5">*為必填資料</p>
                                    </div>

                                    <!-- 祈福者卡(none) boostarp 下拉選單 -->
                                    <div class=" d-flex aic p-0">
                                        <div class="col p-0">
                                            <select class="form-control radius0 exampleInputfriend" id="exampleInputfriend">

                                                <option value="">同親友資料</option>
                                                <?php foreach ($rows as $p) : ?>
                                                    <option value="<?= $p['sid'] ?>" data-sid="<?= $p['sid'] ?>" data-address="<?= $p['address_'] ?>" data-mobile="<?= $p['mobile_'] ?>" data-year="<?= $p['year'] ?>" data-month="<?= $p['month'] ?>" data-day="<?= $p['day'] ?>">

                                                        <?= $p['name_'] ?>
                                                    </option>

                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <!--  祈福者卡(none) _標題 -->
                                <div class="light_Fill_in_theinformation_title tac paddingbottom40 postre">
                                    <h3 class="postre">祈福者
                                        <!--  祈福者卡(none) _標題_刪除按鈕 -->
                                        <button class="graycolor postab padbut removebut">
                                            <p>刪除</p>
                                        </button>
                                    </h3>

                                </div>


                                <!--  祈福者卡(none) input集合 桌機用-->
                                <div class="light_Fill_in_theinformation_inputset borderbottom displayno_md">
                                    <!--  祈福者卡(none) input_1_姓名-->
                                    <div class="paddingbottom40">
                                        <div class="light_Fill_in_theinformation_input_1 d-flex aic col-lg-8 marginauto ">
                                            <!-- 祈福者卡(none) *姓名 -->
                                            <div class="light_Fill_in_theinformation_input_text col d-flex">
                                                <p class="redcolorh5">*</p>
                                                <p>姓名</p>
                                            </div>
                                            <!-- 祈福者卡(none) boostarp input -->
                                            <div class="col-8 p-0">
                                                <input type="text" class="form-control  radius0 exampleInputName name" placeholder="請輸入姓名" id="name" name="name">

                                            </div>
                                        </div>
                                        <!-- 空值警告用 地址-->
                                        <div class="light_Fill_in_theinformation_input_1 d-flex aic col-lg-8 marginauto ">
                                            <div class="light_Fill_in_theinformation_input_text col d-flex">
                                            </div>
                                            <div class="col-8 p-0">
                                                <div class="name vishidden"></div>
                                                <small class="form-text error"></small>
                                            </div>
                                        </div>
                                    </div>

                                    <!--  祈福者卡(none) input_1_生日-->
                                    <div class="paddingbottom40">
                                        <div class="light_Fill_in_theinformation_input_1 d-flex aic col-lg-8 marginauto ">
                                            <!--祈福者卡(none) *出生日期 -->
                                            <div class="light_Fill_in_theinformation_input_text col-4 padright0 d-flex aic">
                                                <p class="redcolorh5">*</p>
                                                <p>出生日期</p>
                                            </div>
                                            <!--祈福者卡(none) boostarp 下拉選單 -->
                                            <div class="col-lg-11 displayflex aic p-0">
                                                <div class="boxset d-flex aic">
                                                    <div class="boxsize_2 d-flex aic p-0 ">
                                                        <select class="form-control col radius0 exampleInputYear year" id="exampleInputTime_2">
                                                            <option selected value="">選擇</option>
                                                            <option value="2021">2021</option>
                                                            <option value="2020">2020</option>
                                                            <option value="2019">2019</option>
                                                            <option value="2018">2018</option>
                                                            <option value="2017">2017</option>
                                                            <option value="2016">2016</option>
                                                            <option value="2015">2015</option>
                                                            <option value="2014">2014</option>
                                                            <option value="2013">2013</option>
                                                            <option value="2012">2012</option>
                                                            <option value="2011">2011</option>
                                                            <option value="2010">2010</option>
                                                            <option value="2009">2009</option>
                                                            <option value="2008">2008</option>
                                                            <option value="2007">2007</option>
                                                            <option value="2006">2006</option>
                                                            <option value="2005">2005</option>
                                                            <option value="2004">2004</option>
                                                            <option value="2003">2003</option>
                                                            <option value="2002">2002</option>
                                                            <option value="2001">2001</option>
                                                            <option value="2000">2000</option>
                                                            <option value="1999">1999</option>
                                                            <option value="1998">1998</option>
                                                            <option value="1997">1997</option>
                                                            <option value="1996">1996</option>
                                                            <option value="1995">1995</option>
                                                            <option value="1994">1994</option>
                                                            <option value="1993">1993</option>
                                                            <option value="1992">1992</option>
                                                            <option value="1991">1991</option>
                                                            <option value="1990">1990</option>
                                                            <option value="1989">1989</option>
                                                            <option value="1988">1988</option>
                                                            <option value="1987">1987</option>
                                                            <option value="1986">1986</option>
                                                            <option value="1985">1985</option>
                                                            <option value="1984">1984</option>
                                                            <option value="1983">1983</option>
                                                            <option value="1982">1982</option>
                                                            <option value="1981">1981</option>
                                                            <option value="1980">1980</option>
                                                            <option value="1979">1979</option>
                                                            <option value="1978">1978</option>
                                                            <option value="1977">1977</option>
                                                            <option value="1976">1976</option>
                                                            <option value="1975">1975</option>
                                                            <option value="1974">1974</option>
                                                            <option value="1973">1973</option>
                                                            <option value="1972">1972</option>
                                                            <option value="1971">1971</option>
                                                            <option value="1970">1970</option>
                                                            <option value="1969">1969</option>
                                                            <option value="1968">1968</option>
                                                            <option value="1967">1967</option>
                                                            <option value="1966">1966</option>
                                                            <option value="1965">1965</option>
                                                            <option value="1964">1964</option>
                                                            <option value="1963">1963</option>
                                                            <option value="1962">1962</option>
                                                            <option value="1961">1961</option>
                                                            <option value="1960">1960</option>
                                                            <option value="1959">1959</option>
                                                            <option value="1958">1958</option>
                                                            <option value="1957">1957</option>
                                                            <option value="1956">1956</option>
                                                            <option value="1955">1955</option>
                                                            <option value="1954">1954</option>
                                                            <option value="1953">1953</option>
                                                            <option value="1952">1952</option>
                                                            <option value="1951">1951</option>
                                                            <option value="1950">1950</option>
                                                            <option value="1949">1949</option>
                                                            <option value="1948">1948</option>
                                                            <option value="1947">1947</option>
                                                            <option value="1946">1946</option>
                                                            <option value="1945">1945</option>
                                                            <option value="1944">1944</option>
                                                            <option value="1943">1943</option>
                                                            <option value="1942">1942</option>
                                                            <option value="1941">1941</option>
                                                            <option value="1940">1940</option>
                                                            <option value="1939">1939</option>
                                                            <option value="1938">1938</option>
                                                            <option value="1937">1937</option>
                                                            <option value="1936">1936</option>
                                                            <option value="1935">1935</option>
                                                            <option value="1934">1934</option>
                                                            <option value="1933">1933</option>
                                                            <option value="1932">1932</option>
                                                            <option value="1931">1931</option>
                                                            <option value="1930">1930</option>
                                                            <option value="1929">1929</option>
                                                            <option value="1928">1928</option>
                                                            <option value="1927">1927</option>
                                                            <option value="1926">1926</option>
                                                            <option value="1925">1925</option>
                                                            <option value="1924">1924</option>
                                                            <option value="1923">1923</option>
                                                            <option value="1922">1922</option>
                                                            <option value="1921">1921</option>
                                                            <option value="1920">1920</option>
                                                        </select>

                                                    </div>
                                                    <div class="fake_year"></div>
                                                </div>
                                                <div class="boxset d-flex aic">
                                                    <div class="boxsize d-flex aic p-0">
                                                        <select class="form-control col radius0 exampleInputMonth month" id="exampleInputTime_3">
                                                            <option selected value="">選擇</option>
                                                            <option value="01">1</option>
                                                            <option value="02">2</option>
                                                            <option value="03">3</option>
                                                            <option value="04">4</option>
                                                            <option value="05">5</option>
                                                            <option value="06">6</option>
                                                            <option value="07">7</option>
                                                            <option value="08">8</option>
                                                            <option value="09">9</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                        </select>

                                                    </div>
                                                    <div class="fake_month"></div>
                                                </div>
                                                <div class="boxset d-flex aic">
                                                    <div class="boxsize d-flex aic p-0 ">
                                                        <select class="form-control col radius0 exampleInputDay day" id="exampleInputTime_4">
                                                            <option selected value="">選擇</option>
                                                            <option value="01">1</option>
                                                            <option value="02">2</option>
                                                            <option value="03">3</option>
                                                            <option value="04">4</option>
                                                            <option value="05">5</option>
                                                            <option value="06">6</option>
                                                            <option value="07">7</option>
                                                            <option value="08">8</option>
                                                            <option value="09">9</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                            <option value="13">13</option>
                                                            <option value="14">14</option>
                                                            <option value="15">15</option>
                                                            <option value="16">16</option>
                                                            <option value="17">17</option>
                                                            <option value="18">18</option>
                                                            <option value="19">19</option>
                                                            <option value="20">20</option>
                                                            <option value="21">21</option>
                                                            <option value="22">22</option>
                                                            <option value="23">23</option>
                                                            <option value="24">24</option>
                                                            <option value="25">25</option>
                                                            <option value="26">26</option>
                                                            <option value="27">27</option>
                                                            <option value="28">28</option>
                                                            <option value="29">29</option>
                                                            <option value="30">30</option>
                                                            <option value="31">31</option>
                                                        </select>
                                                    </div>
                                                    <div class="fake_day"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- 空值警告用 年月日-->
                                        <div class="light_Fill_in_theinformation_input_1 d-flex aic col-lg-8 marginauto ">
                                            <div class="light_Fill_in_theinformation_input_text col-4 padright0 d-flex aic">
                                            </div>
                                            <div class="col-lg-11 displayflex aic p-0">
                                                <div class="boxset d-flex aic">
                                                    <div class="boxsize_2 d-flex aic p-0 ">
                                                        <div class="year vishidden"></div>
                                                        <small class="form-text error"></small>

                                                    </div>
                                                    <div class="fake_year vishidden"></div>
                                                </div>
                                                <div class="boxset d-flex aic">
                                                    <div class="boxsize d-flex aic p-0">
                                                        <div class="month vishidden"></div>
                                                        <small class="form-text error"></small>

                                                    </div>
                                                    <div class="fake_month vishidden"></div>
                                                </div>
                                                <div class="boxset d-flex aic">
                                                    <div class="boxsize d-flex aic p-0 ">
                                                        <div class="day vishidden"></div>
                                                        <small class="form-text error"></small>
                                                    </div>
                                                    <div class="fake_day vishidden"></div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>


                                    <!--  祈福者卡(none) input_1_時辰-->
                                    <div class="light_Fill_in_theinformation_input_1 d-flex aic col-lg-8 marginauto paddingbottom40">
                                        <!-- 祈福者卡(none)*時辰 -->
                                        <div class="light_Fill_in_theinformation_input_text col-4 padright0 d-flex aic">
                                            <p class="redcolorh5 opac">*</p>
                                            <p>出生時辰</p>
                                        </div>
                                        <!--祈福者卡(none) boostarp 下拉選單 -->
                                        <div class="col-11 d-flex aic p-0">
                                            <div class="col-3 p-0">
                                                <select class="form-control col-10 radius0 text_time_2" id="">
                                                    <option selected>吉時</option>
                                                    <option value="子時 23~0">子時 23~01</option>
                                                    <option value="丑時 01~03">丑時 01~03</option>
                                                    <option value="寅時 03~05">寅時 03~05</option>
                                                    <option value="卯時 05~07">卯時 05~07</option>
                                                    <option value="辰時 07~09">辰時 07~09</option>
                                                    <option value="巳時 09~11">巳時 09~11</option>
                                                    <option value="午時 11~13">午時 11~13</option>
                                                    <option value="未時 13~15">未時 13~15</option>
                                                    <option value="申時 15~17">申時 15~17</option>
                                                    <option value="酉時 17~19">酉時 17~19</option>
                                                    <option value="戌時 19~21">戌時 19~21</option>
                                                    <option value="亥時 21~23">亥時 21~23</option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>


                                    <!--  祈福者卡(none) input_1_性別-->

                                    <div class="light_Fill_in_theinformation_input_1 d-flex aic col-lg-8 marginauto paddingbottom40">

                                        <div class="light_Fill_in_theinformation_input_text col-4 d-flex">
                                            <p class="redcolorh5 opac">*</p>
                                            <p>性別</p>
                                        </div>

                                        <div class="col-11 d-flex aic p-0">
                                            <div class="col-2 p-0">
                                                <select class="form-control col-7 radius0 text_xxxx_2">
                                                    <option value="男">男</option>
                                                    <option value="女">女</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>




                                    <!--  祈福者卡(none) input_1_電話-->
                                    <div class="light_Fill_in_theinformation_input_1 d-flex aic col-lg-8 marginauto paddingbottom40">
                                        <!--祈福者卡(none) *連絡電話 -->
                                        <div class="light_Fill_in_theinformation_input_text col d-flex">
                                            <p class="redcolorh5 opac">*</p>
                                            <p>連絡電話</p>
                                        </div>
                                        <!--祈福者卡(none) boostarp input -->
                                        <input type="text" class="form-control col-8 radius0  exampleInputPhoneNumber text_mobile_2 mobile" placeholder="請輸入連絡電話" id="exampleInputPhoneNumber" pattern="09\d{2}-?\d{3}-?\d{3}">
                                    </div>

                                    <!--  祈福者卡(none)input_1_地址  測試版本新增空值警告-->
                                    <div class="all paddingbottom40">
                                        <div class="light_Fill_in_theinformation_input_1 d-flex aic col-lg-8 marginauto ">
                                            <!--祈福者卡(none) *地址 -->
                                            <div class="light_Fill_in_theinformation_input_text col d-flex">
                                                <p class="redcolorh5">*</p>
                                                <p>地址</p>
                                            </div>
                                            <!-- 祈福者卡(none)boostarp input -->
                                            <div class="col-8 p-0">
                                                <input type="text" class="form-control  radius0 exampleInputaddress address text_address_2" placeholder="請輸入地址" cols="30" rows="3" name="address" id="address">

                                            </div>
                                        </div>
                                        <!-- 空值警告用 地址-->
                                        <div class="light_Fill_in_theinformation_input_1 d-flex aic col-lg-8 marginauto ">
                                            <div class="light_Fill_in_theinformation_input_text col d-flex">
                                            </div>
                                            <div class="col-8 p-0">
                                                <div class="address vishidden"></div>
                                                <small class="form-text error"></small>
                                            </div>
                                        </div>
                                    </div>


                                    <!-- 祈福者卡(none) 改 -->
                                    <div class="light_add_set lightadd_this ">
                                        <div class="paddingbottom40 myselector_group">
                                            <!-- 三層篩選 救救我QQ~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                                            <div class="light_Fill_in_theinformation_input_set d-flex col-8  marginauto chained-selects" data-selector="myselector">
                                                <!--  input_1_選擇燈種 -->
                                                <div class="light_Fill_in_theinformation_input_1 d-flex aic col-7 marginauto p-0 ">
                                                    <!-- *燈種 -->
                                                    <div class="light_Fill_in_theinformation_input_text col-7 padright0 d-flex aic">
                                                        <p class="redcolorh5">*</p>
                                                        <p>選擇燈種</p>
                                                    </div>
                                                    <!-- boostarp 下拉選單 -->
                                                    <div class="col-4 d-flex aic p-0">
                                                        <div class="col p-0">
                                                            <select name="light_type" class="form-control col-11 radius0 lightarray light_type" id="select-1" required>
                                                                <option selected value="">選擇燈種</option>
                                                                <option>光明燈</option>
                                                                <option>文昌燈</option>
                                                                <option>安太歲</option>
                                                                <option>藥師燈</option>
                                                                <option>發財燈</option>
                                                                <option>姻緣燈</option>
                                                            </select>

                                                            <!-- <small class="form-text error"></small> -->
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- 祈福者卡(none)input_1_ 選擇廟宇-->
                                                <div class="light_Fill_in_theinformation_input_1 d-flex aic col-lg-8 marginauto p-0 flex-wrap">
                                                    <!-- 祈福者卡(none) *廟宇 -->
                                                    <div class="light_Fill_in_theinformation_input_text col-4 padright0 d-flex aic">
                                                        <p class="redcolorh5">*</p>
                                                        <p>選擇廟宇</p>
                                                    </div>
                                                    <!--祈福者卡(none) boostarp 下拉選單 -->
                                                    <div class="col-3 d-flex aic p-0">
                                                        <div class="col p-0">
                                                            <select name="light_area" class="form-control col-11 radius0 areaarray light_area" id="select-2" disabled>
                                                                <option selected value="">選擇地區</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-5 d-flex aic p-0">
                                                        <div class="col p-0">
                                                            <select name="light_temple" class="form-control col-11 radius0 light_temple " id="select-3" disabled>
                                                                <option selected value="">選擇廟宇</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                </div>


                                            </div>
                                            <!-- 空值警告用  -->
                                            <div class="light_Fill_in_theinformation_input_set d-flex col-8  marginauto chained-selects">
                                                <!-- 空值警告用  選燈種-->
                                                <div class="light_Fill_in_theinformation_input_1 d-flex aic col-7 marginauto p-0 ">
                                                    <div class="light_Fill_in_theinformation_input_text col-7 padright0 d-flex aic">
                                                    </div>
                                                    <div class="col-4 d-flex aic p-0">
                                                        <div class="col p-0">
                                                            <div class="light_type vishidden"></div>
                                                            <small class="form-text error"></small>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- 空值警告用  選地區 廟宇-->
                                                <div class="light_Fill_in_theinformation_input_1 d-flex aic col-lg-8 marginauto p-0 flex-wrap">
                                                    <div class="light_Fill_in_theinformation_input_text col-4 padright0 d-flex aic">
                                                    </div>
                                                    <div class="col-3 d-flex aic p-0">
                                                        <div class="col p-0">
                                                            <div class="light_area vishidden"></div>
                                                            <small class="form-text error"></small>
                                                        </div>
                                                    </div>
                                                    <div class="col-5 d-flex aic p-0">
                                                        <div class="col p-0">
                                                            <div class="light_temple vishidden"></div>
                                                            <small class="form-text error"></small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--  預設祈福者_按鈕_新增廟宇 -->
                                    <div class="button_add_set d-flex juscsb  marginauto paddingbottom40 col-8">
                                        <div class="button_add ">
                                            <div class="btnss graycolor butomcolor light_add">
                                                <p>+ 新增燈種與廟宇</p>
                                            </div>
                                        </div>
                                        <!-- <div class="button_add vishidden ">
                                        <button class="graycolor">
                                            <p>+ 新增燈種與廟宇</p>
                                        </button>
                                    </div> -->
                                    </div>
                                </div>

                            </div>`



        // 桌機 燈種增加 新增Buttom on版本
        // let addLight = document.querySelector(".lightadd_this").innerHTML;
        // $(document).on('click', '.light_add', function () {
        // console.log('click', addLight_new)
        // $(this).parentsUntil(".lightadd_this").append(addLight);
        // $('.lightadd_this').append(addLight_new);
        // })

        // 宣告nowItem為
        let nowItem = 1;

        // 構想 外加id自動增幅
        // $('.light_add').click(function () {
        // let newLi = 'light_add_' + nowItem;
        // nowItem = nowItem + 1;
        // console.log(newLi);
        // })

        $(document).on('click', '.light_add', function() {
            // let newLi = '<div id="newlighcard_' + nowItem + '">' + addLight_new + '</div>';

            // nowItem = nowItem + 1;
            // console.log(newLi);

            $(this).parents('.button_add_set').prevAll('.lightadd_this').append(addLight_new);

            // 彈跳視窗 新增用
            $(this).parents('.light_Fill_in_theinformation_set').find('.addjumpLight_new').append(addjumpLight_new);
            bindMySelector(options);
        })

        let addLight_new = `<div class="paddingbottom40 myselector_group">
                                <!-- 三層篩選 救救我QQ~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                                <div class="light_Fill_in_theinformation_input_set d-flex col-8  marginauto chained-selects" data-selector="myselector">
                                    <!--  input_1_選擇燈種 -->
                                    <div class="light_Fill_in_theinformation_input_1 d-flex aic col-7 marginauto p-0 ">
                                        <!-- *燈種 -->
                                        <div class="light_Fill_in_theinformation_input_text col-7 padright0 d-flex aic">
                                            <p class="redcolorh5">*</p>
                                            <p>選擇燈種</p>
                                        </div>
                                        <!-- boostarp 下拉選單 -->
                                        <div class="col-4 d-flex aic p-0">
                                            <div class="col p-0">
                                                <select name="light_type" class="form-control col-11 radius0 lightarray light_type" id="select-1" required>
                                                    <option selected value="">選擇燈種</option>
                                                    <option>光明燈</option>
                                                    <option>文昌燈</option>
                                                    <option>安太歲</option>
                                                    <option>藥師燈</option>
                                                    <option>發財燈</option>
                                                    <option>姻緣燈</option>
                                                </select>

                                                <!-- <small class="form-text error"></small> -->
                                            </div>
                                        </div>
                                    </div>

                                    <!-- 預設祈福者input_1_ 選擇廟宇-->
                                    <div class="light_Fill_in_theinformation_input_1 d-flex aic col-lg-8 marginauto p-0 flex-wrap">
                                        <!-- 預設祈福者 *廟宇 -->
                                        <div class="light_Fill_in_theinformation_input_text col-4 padright0 d-flex aic">
                                            <p class="redcolorh5">*</p>
                                            <p>選擇廟宇</p>
                                        </div>
                                        <!--預設祈福者 boostarp 下拉選單 -->
                                        <div class="col-3 d-flex aic p-0">
                                            <div class="col p-0">
                                                <select name="light_area" class="form-control col-11 radius0 areaarray light_area" id="select-2" disabled>
                                                    <option selected value="">選擇地區</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-5 d-flex aic p-0">
                                            <div class="col p-0">
                                                <select name="light_temple" class="form-control col-11 radius0 light_temple " id="select-3" disabled>
                                                    <option selected value="">選擇廟宇</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                    

                                </div>
                                <!-- 空值警告用  -->
                                <div class="light_Fill_in_theinformation_input_set d-flex col-8  marginauto chained-selects">
                                    <!-- 空值警告用  選燈種-->
                                    <div class="light_Fill_in_theinformation_input_1 d-flex aic col-7 marginauto p-0 ">
                                        <div class="light_Fill_in_theinformation_input_text col-7 padright0 d-flex aic">
                                        </div>
                                        <div class="col-4 d-flex aic p-0">
                                            <div class="col p-0">
                                                <div class="light_type vishidden"></div>
                                                <small class="form-text error"></small>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- 空值警告用  選地區 廟宇-->
                                    <div class="light_Fill_in_theinformation_input_1 d-flex aic col-lg-8 marginauto p-0 flex-wrap">
                                        <div class="light_Fill_in_theinformation_input_text col-4 padright0 d-flex aic">
                                        </div>
                                        <div class="col-3 d-flex aic p-0">
                                            <div class="col p-0">
                                                <div class="light_area vishidden"></div>
                                                <small class="form-text error"></small>
                                            </div>
                                        </div>
                                        <div class="col-5 d-flex aic p-0">
                                            <div class="col p-0">
                                                <div class="light_temple vishidden"></div>
                                                <small class="form-text error"></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>`;


        // 想提問QQ  這邊是與上面一起聯動 新增燈種Btn按下去的時候   在彈跳視窗當中 欄位也會一起新增燈種  這邊的class 我都是一樣的 好像會造成 選好的選項都會一樣的值? 

        let addjumpLight_new = `<div class="">
                                    

                                    <div class=" d-flex aic col-lg-10 marginauto paddingtop2">

                                        <div class=" col d-flex">
                                            <p class="redcolorh5"></p>
                                            <p class=""></p>
                                        </div>
                                        <!-- val值 -->
                                        <div class=" col-8 padlock d-flex">
                                            <p class="light_type_2"></p>
                                            <p class="pad00010 light_area_2"></p>
                                            <p class="pad00010 light_temple_2"></p>
                                        </div>

                                    </div>

                                </div>`;









        // 手機 祈福者增加
        // let addFamily_md = document.querySelector(".memberadd_md").innerHTML;
        // $('.member_add_md').click(function () {
        //     console.log('click', addFamily_md)
        //     $('.removeset').append(addFamily_md);
        // })

        let nowcard_md = 1;
        $(document).on('click', '.member_add_md', function() {
            // let newLiiii_md = '<div id="newdata_' + nowcard_md + '">' + addCard_new_md + '</div>';

            // nowcard_md = nowcard_md + 1;
            // console.log(newLiiii_md);
            $('.removeset').append(addCard_new_md);

        })
        let addCard_new_md = `  
            <div class="light_Fill_in_theinformation_text_4 padddingtop40">
                                <!-- 手機用 祈福者卡(none)  小提示 -->
                                <div class="light_Fill_in_theinformation_text_star d-flex juscsb paddingbottom40">
                                    <!-- 手機用 祈福者卡(none)  小提示 必填資料 -->
                                    <div class="light_Fill_in_theinformation_text_star_left">
                                        <!-- *的 ICON -->
                                        <!-- <img src=""> -->
                                        <p class="redcolorh5">*為必填資料</p>
                                    </div>

                                    <!-- 祈福者卡(none) boostarp 下拉選單 -->
                                    <div class=" d-flex aic p-0">
                                        <div class="col p-0">
                                            <select class="form-control radius0 exampleInputfriend" id="exampleInputfriend">

                                                <option value="">同親友資料</option>
                                                <?php foreach ($rows as $p) : ?>
                                                    <option value="<?= $p['sid'] ?>" data-sid="<?= $p['sid'] ?>" data-address="<?= $p['address_'] ?>" data-mobile="<?= $p['mobile_'] ?>" data-year="<?= $p['year'] ?>" data-month="<?= $p['month'] ?>" data-day="<?= $p['day'] ?>" data-birthday="<?= $p['birthday_'] ?>">


                                                        <?= $p['name_'] ?>
                                                    </option>

                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <!--  手機用 祈福者卡(none) _標題 -->
                                <div class="light_Fill_in_theinformation_title paddingbottom40 postre">
                                    <h3 class="postre">祈福者
                                        <!--  手機用 祈福者卡(none) _標題_刪除按鈕 -->
                                        <button class="graycolor postab padbut dipay">
                                            <p>刪除</p>
                                        </button>
                                    </h3>

                                </div>


                                <!--  手機用 祈福者卡(none) input集合 -->
                                <div class="light_Fill_in_theinformation_inputset borderbottom  displayno">
                                    <!--  手機用 祈福者卡(none) input_1_姓名-->
                                    <div class="light_Fill_in_theinformation_input_1 d-flex aic col-lg-8 marginauto paddingbottom40">
                                        <!--手機用 祈福者卡(none) *姓名 -->
                                        <div class="light_Fill_in_theinformation_input_text col d-flex">
                                            <p class="redcolorh5">*</p>
                                            <p>姓名</p>
                                        </div>
                                        <!--手機用 祈福者卡(none) boostarp input -->
                                        <div class="col-7 p-0">
                                            <input type="text" class="form-control  radius0 exampleInputName name" placeholder="請輸入姓名" id="name" name="name">
                                            <small class="form-text error"></small>
                                        </div>
                                    </div>

                                    <!-- 手機用 祈福者卡(none) 預設祈福者 input_1_生日-->
                                    <div class="paddingbottom40">
                                        <div class="light_Fill_in_theinformation_input_1 d-flex aic  marginauto ">
                                            <!--手機用 祈福者卡(none) *出生日期 -->
                                            <div class="light_Fill_in_theinformation_input_text col  d-flex aic">
                                                <p class="redcolorh5">*</p>
                                                <p>出生日期</p>
                                            </div>
                                            <!--手機用 祈福者卡(none) boostarp 下拉選單 -->
                                            <div class="col-7 displayflex aic p-0">
                                                <div class="boxset d-flex aic">
                                                    <div class="boxsize_2 d-flex aic p-0 ">
                                                        <select class="form-control col radius0 exampleInputYear year" id="exampleInputTime_2">
                                                            <option selected value="">選擇</option>
                                                            <option value="2021">2021</option>
                                                            <option value="2020">2020</option>
                                                            <option value="2019">2019</option>
                                                            <option value="2018">2018</option>
                                                            <option value="2017">2017</option>
                                                            <option value="2016">2016</option>
                                                            <option value="2015">2015</option>
                                                            <option value="2014">2014</option>
                                                            <option value="2013">2013</option>
                                                            <option value="2012">2012</option>
                                                            <option value="2011">2011</option>
                                                            <option value="2010">2010</option>
                                                            <option value="2009">2009</option>
                                                            <option value="2008">2008</option>
                                                            <option value="2007">2007</option>
                                                            <option value="2006">2006</option>
                                                            <option value="2005">2005</option>
                                                            <option value="2004">2004</option>
                                                            <option value="2003">2003</option>
                                                            <option value="2002">2002</option>
                                                            <option value="2001">2001</option>
                                                            <option value="2000">2000</option>
                                                            <option value="1999">1999</option>
                                                            <option value="1998">1998</option>
                                                            <option value="1997">1997</option>
                                                            <option value="1996">1996</option>
                                                            <option value="1995">1995</option>
                                                            <option value="1994">1994</option>
                                                            <option value="1993">1993</option>
                                                            <option value="1992">1992</option>
                                                            <option value="1991">1991</option>
                                                            <option value="1990">1990</option>
                                                            <option value="1989">1989</option>
                                                            <option value="1988">1988</option>
                                                            <option value="1987">1987</option>
                                                            <option value="1986">1986</option>
                                                            <option value="1985">1985</option>
                                                            <option value="1984">1984</option>
                                                            <option value="1983">1983</option>
                                                            <option value="1982">1982</option>
                                                            <option value="1981">1981</option>
                                                            <option value="1980">1980</option>
                                                            <option value="1979">1979</option>
                                                            <option value="1978">1978</option>
                                                            <option value="1977">1977</option>
                                                            <option value="1976">1976</option>
                                                            <option value="1975">1975</option>
                                                            <option value="1974">1974</option>
                                                            <option value="1973">1973</option>
                                                            <option value="1972">1972</option>
                                                            <option value="1971">1971</option>
                                                            <option value="1970">1970</option>
                                                            <option value="1969">1969</option>
                                                            <option value="1968">1968</option>
                                                            <option value="1967">1967</option>
                                                            <option value="1966">1966</option>
                                                            <option value="1965">1965</option>
                                                            <option value="1964">1964</option>
                                                            <option value="1963">1963</option>
                                                            <option value="1962">1962</option>
                                                            <option value="1961">1961</option>
                                                            <option value="1960">1960</option>
                                                            <option value="1959">1959</option>
                                                            <option value="1958">1958</option>
                                                            <option value="1957">1957</option>
                                                            <option value="1956">1956</option>
                                                            <option value="1955">1955</option>
                                                            <option value="1954">1954</option>
                                                            <option value="1953">1953</option>
                                                            <option value="1952">1952</option>
                                                            <option value="1951">1951</option>
                                                            <option value="1950">1950</option>
                                                            <option value="1949">1949</option>
                                                            <option value="1948">1948</option>
                                                            <option value="1947">1947</option>
                                                            <option value="1946">1946</option>
                                                            <option value="1945">1945</option>
                                                            <option value="1944">1944</option>
                                                            <option value="1943">1943</option>
                                                            <option value="1942">1942</option>
                                                            <option value="1941">1941</option>
                                                            <option value="1940">1940</option>
                                                            <option value="1939">1939</option>
                                                            <option value="1938">1938</option>
                                                            <option value="1937">1937</option>
                                                            <option value="1936">1936</option>
                                                            <option value="1935">1935</option>
                                                            <option value="1934">1934</option>
                                                            <option value="1933">1933</option>
                                                            <option value="1932">1932</option>
                                                            <option value="1931">1931</option>
                                                            <option value="1930">1930</option>
                                                            <option value="1929">1929</option>
                                                            <option value="1928">1928</option>
                                                            <option value="1927">1927</option>
                                                            <option value="1926">1926</option>
                                                            <option value="1925">1925</option>
                                                            <option value="1924">1924</option>
                                                            <option value="1923">1923</option>
                                                            <option value="1922">1922</option>
                                                            <option value="1921">1921</option>
                                                            <option value="1920">1920</option>
                                                        </select>

                                                    </div>
                                                    <div class="fake_year"></div>
                                                </div>

                                            </div>
                                        </div>


                                        <!--手機用 祈福者卡(none) 空值警告用 年-->
                                        <div class="light_Fill_in_theinformation_input_1 d-flex aic col-lg-8 marginauto ">
                                            <div class="light_Fill_in_theinformation_input_text col padright0 d-flex aic">
                                            </div>
                                            <div class="col-7  aic p-0">
                                                <div class="boxset d-flex aic">
                                                    <div class="boxsize_2 d-flex aic p-0 ">
                                                        <div class="year vishidden"></div>
                                                        <small class="form-text error"></small>

                                                    </div>
                                                    <div class="fake_width vishidden"></div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>

                                    <div class="paddingbottom40">
                                        <div class="light_Fill_in_theinformation_input_1 d-flex aic  marginauto ">
                                            <!--手機用 祈福者卡(none) *出生日期 -->
                                            <div class="light_Fill_in_theinformation_input_text col  d-flex aic">
                                                <p class="redcolorh5 vishidden">*</p>
                                                <p class="vishidden">出生日期</p>
                                            </div>
                                            <!--手機用 祈福者卡(none) boostarp 下拉選單 -->
                                            <div class="col-7 d-flex aic p-0">


                                                <div class="boxset d-flex aic">
                                                    <div class="boxsize_2 d-flex aic p-0">
                                                        <select class="form-control col radius0 exampleInputMonth month" id="exampleInputTime_3">
                                                            <option selected value="">選擇</option>
                                                            <option value="01">1</option>
                                                            <option value="02">2</option>
                                                            <option value="03">3</option>
                                                            <option value="04">4</option>
                                                            <option value="05">5</option>
                                                            <option value="06">6</option>
                                                            <option value="07">7</option>
                                                            <option value="08">8</option>
                                                            <option value="09">9</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                        </select>

                                                    </div>
                                                    <div class="fake_month"></div>
                                                </div>
                                                <div class="boxset d-flex aic">
                                                    <div class="boxsize_2 d-flex aic p-0 ">
                                                        <select class="form-control col radius0 exampleInputDay day " id="exampleInputTime_4">
                                                            <option selected value="">選擇</option>
                                                            <option value="01">1</option>
                                                            <option value="02">2</option>
                                                            <option value="03">3</option>
                                                            <option value="04">4</option>
                                                            <option value="05">5</option>
                                                            <option value="06">6</option>
                                                            <option value="07">7</option>
                                                            <option value="08">8</option>
                                                            <option value="09">9</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                            <option value="13">13</option>
                                                            <option value="14">14</option>
                                                            <option value="15">15</option>
                                                            <option value="16">16</option>
                                                            <option value="17">17</option>
                                                            <option value="18">18</option>
                                                            <option value="19">19</option>
                                                            <option value="20">20</option>
                                                            <option value="21">21</option>
                                                            <option value="22">22</option>
                                                            <option value="23">23</option>
                                                            <option value="24">24</option>
                                                            <option value="25">25</option>
                                                            <option value="26">26</option>
                                                            <option value="27">27</option>
                                                            <option value="28">28</option>
                                                            <option value="29">29</option>
                                                            <option value="30">30</option>
                                                            <option value="31">31</option>
                                                        </select>
                                                    </div>
                                                    <div class="fake_day"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--手機用 祈福者卡(none) 空值警告用 月日-->
                                        <div class="light_Fill_in_theinformation_input_1 d-flex aic col-lg-8 marginauto ">
                                            <div class="light_Fill_in_theinformation_input_text col padright0 d-flex aic">
                                            </div>
                                            <div class="col-7 d-flex aic p-0">

                                                <div class="boxset d-flex aic">
                                                    <div class="boxsize d-flex aic p-0">
                                                        <div class="month vishidden"></div>
                                                        <small class="form-text error"></small>

                                                    </div>
                                                    <div class="fake_width vishidden"></div>
                                                </div>
                                                <div class="boxset d-flex aic">
                                                    <div class="boxsize d-flex aic p-0 ">
                                                        <div class="day vishidden"></div>
                                                        <small class="form-text error"></small>
                                                    </div>
                                                    <div class="fake_width vishidden"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>




                                    <!--  手機用 祈福者卡(none) input_1_時辰-->
                                    <div class="light_Fill_in_theinformation_input_1 d-flex aic col-lg-8 marginauto paddingbottom40">
                                        <!--手機用 祈福者卡(none) *時辰 -->
                                        <div class="light_Fill_in_theinformation_input_text col padright0 d-flex aic">
                                            <p class="redcolorh5 opac">*</p>
                                            <p>出生時辰</p>
                                        </div>
                                        <!--手機用 祈福者卡(none) 預設祈福者 boostarp 下拉選單 -->
                                        <div class="col-7 d-flex aic p-0">
                                            <div class="col p-0">
                                                <select class="form-control col radius0 text_time_2">
                                                    <option selected>吉時</option>
                                                    <option value="子時 23~0">子時 23~01</option>
                                                    <option value="丑時 01~03">丑時 01~03</option>
                                                    <option value="寅時 03~05">寅時 03~05</option>
                                                    <option value="卯時 05~07">卯時 05~07</option>
                                                    <option value="辰時 07~09">辰時 07~09</option>
                                                    <option value="巳時 09~11">巳時 09~11</option>
                                                    <option value="午時 11~13">午時 11~13</option>
                                                    <option value="未時 13~15">未時 13~15</option>
                                                    <option value="申時 15~17">申時 15~17</option>
                                                    <option value="酉時 17~19">酉時 17~19</option>
                                                    <option value="戌時 19~21">戌時 19~21</option>
                                                    <option value="亥時 21~23">亥時 21~23</option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>


                                    <!--  手機用 祈福者卡(none) input_1_性別-->
                                    <div class="light_Fill_in_theinformation_input_1 d-flex aic col-lg-8 marginauto paddingbottom40">

                                        <div class="light_Fill_in_theinformation_input_text col d-flex">
                                            <p class="redcolorh5 vishidden">*</p>
                                            <p>性別</p>
                                        </div>

                                        <div class="col-7 d-flex aic p-0">
                                            <div class="col p-0">
                                                <select class="form-control col radius0 text_xxxx_2">
                                                    <option value="男">男</option>
                                                    <option value="女">女</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <!--  手機用 祈福者卡(none) input_1_電話-->
                                    <div class="light_Fill_in_theinformation_input_1 d-flex aic  marginauto paddingbottom40">
                                        <!--預設祈福者 *連絡電話 -->
                                        <div class="light_Fill_in_theinformation_input_text col d-flex">
                                            <p class="redcolorh5 opac">*</p>
                                            <p>連絡電話</p>
                                        </div>
                                        <!--手機用 祈福者卡(none) boostarp input -->
                                        <input type="text" class="form-control col-7 radius0  exampleInputPhoneNumber text_mobile_2 mobile" placeholder="請輸入連絡電話" id="exampleInputPhoneNumber" pattern="09\d{2}-?\d{3}-?\d{3}">
                                    </div>

                                    <!-- 手機用 祈福者卡(none) input_1_地址-->
                                    <div class="all paddingbottom40">
                                        <div class="light_Fill_in_theinformation_input_1 d-flex aic  marginauto ">
                                            <!--手機用 祈福者卡(none) *地址 -->
                                            <div class="light_Fill_in_theinformation_input_text col d-flex">
                                                <p class="redcolorh5">*</p>
                                                <p>地址</p>
                                            </div>
                                            <!-- 手機用 祈福者卡(none) boostarp input -->
                                            <div class="col-7 p-0">
                                                <input type="text" class="form-control  radius0 exampleInputaddress address text_address_2" placeholder="請輸入地址" cols="30" rows="3" name="address" id="address">

                                            </div>
                                        </div>
                                        <!--手機用 祈福者卡(none) 空值警告用 地址-->
                                        <div class="light_Fill_in_theinformation_input_1 d-flex aic  marginauto ">
                                            <div class="light_Fill_in_theinformation_input_text col d-flex">
                                            </div>
                                            <div class="col-7 p-0">
                                                <div class="address vishidden"></div>
                                                <small class="form-text error"></small>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- 改 手機用 祈福者卡(none) 燈種+廟宇套裝-->
                                    <div class="light_add_set_md lightadd_this_md">
                                        <div class="paddingbottom40 myselector_group">
                                            <div class="light_Fill_in_theinformation_input_set  col marginauto lightcard" data-selector="myselector">
                                                <!--  手機用 祈福者卡(none) input_1_選擇燈種 -->
                                                <div class="paddingbottom40">
                                                    <div class="light_Fill_in_theinformation_input_1 d-flex aic  marginauto  ">
                                                        <!-- 手機用 祈福者卡(none) *燈種 -->
                                                        <div class="light_Fill_in_theinformation_input_text col  d-flex aic">
                                                            <p class="redcolorh5">*</p>
                                                            <p>選擇燈種</p>
                                                        </div>
                                                        <!--手機用 祈福者卡(none) boostarp 下拉選單 -->
                                                        <div class="col-7 d-flex aic p-0">
                                                            <div class="col p-0">
                                                                <select name="light_type" class="form-control col-11 radius0 lightarray light_type" id="select-1" required>
                                                                    <option selected value="">選擇燈種</option>
                                                                    <option>光明燈</option>
                                                                    <option>文昌燈</option>
                                                                    <option>安太歲</option>
                                                                    <option>藥師燈</option>
                                                                    <option>發財燈</option>
                                                                    <option>姻緣燈</option>
                                                                </select>
                                                            </div>
                                                            <!-- <i class="far fa-trash-alt marginauto removebut_far_md"></i> -->
                                                        </div>
                                                    </div>
                                                    <!--手機用 祈福者卡(none) 空值警告用 地址-->
                                                    <div class="light_Fill_in_theinformation_input_1 d-flex aic  marginauto ">
                                                        <div class="light_Fill_in_theinformation_input_text col d-flex">
                                                        </div>
                                                        <div class="col-7 p-0">
                                                            <div class="light_type vishidden"></div>
                                                            <small class="form-text error"></small>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="paddingbottom40">
                                                    <!--  手機用 祈福者卡(none) input_1_ 選擇廟宇-->
                                                    <div class="light_Fill_in_theinformation_input_1 d-flex aic  marginauto ">
                                                        <!--手機用 *廟宇_地區 -->
                                                        <div class="light_Fill_in_theinformation_input_text col  d-flex aic">
                                                            <p class="redcolorh5">*</p>
                                                            <p>選擇廟宇</p>
                                                        </div>
                                                        <!-- 手機用 祈福者卡(none) boostarp 下拉選單 廟宇_地區 資料匯入-->
                                                        <div class="col-7 d-flex aic p-0">
                                                            <div class="col p-0">
                                                                <select name="light_area" class="form-control col-11 radius0 areaarray light_area" id="select-2" disabled>
                                                                    <option selected value="">選擇地區</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <!--手機用 祈福者卡(none) 空值警告用 地址-->
                                                    <div class="light_Fill_in_theinformation_input_1 d-flex aic  marginauto ">
                                                        <div class="light_Fill_in_theinformation_input_text col d-flex">
                                                        </div>
                                                        <div class="col-7 p-0">
                                                            <div class="light_area vishidden"></div>
                                                            <small class="form-text error"></small>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="paddingbottom40">
                                                    <div class="light_Fill_in_theinformation_input_1 d-flex aic  marginauto ">
                                                        <!--手機用 祈福者卡(none) *廟宇 -->
                                                        <div class="light_Fill_in_theinformation_input_text col  d-flex aic visy">
                                                            <p class="redcolorh5">*</p>
                                                            <p>選擇廟宇</p>
                                                        </div>
                                                        <!-- 手機用 祈福者卡(none) boostarp 下拉選單 廟宇_宮廟 資料匯入-->
                                                        <div class="col-7 d-flex aic p-0">
                                                            <div class="col p-0">
                                                                <select name="light_temple" class="form-control col-11 radius0 light_temple " id="select-3" disabled>
                                                                    <option selected value="">選擇廟宇</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- 手機用 祈福者卡(none)空值警告用 地址-->
                                                    <div class="light_Fill_in_theinformation_input_1 d-flex aic  marginauto ">
                                                        <div class="light_Fill_in_theinformation_input_text col d-flex">
                                                        </div>
                                                        <div class="col-7 p-0">
                                                            <div class="light_temple vishidden"></div>
                                                            <small class="form-text error"></small>
                                                        </div>
                                                    </div>
                                                </div>



                                            </div>
                                        </div>
                                    </div>
                                    <!-- 手機用 祈福者卡(none) _按鈕_新增廟宇 -->
                                    <div class="button_add_set_md d-flex juscsb  marginauto paddingbottom35 butmaxwid pad20">
                                        <div class="button_add ">
                                            <button class="graycolor butomcolor light_add_md">
                                                <p>+ 新增燈種與廟宇</p>
                                            </button>
                                        </div>

                                    </div>
                                </div>


                            </div>`;








        // 手機 燈種增加 新增Buttom on版本
        // let addLight_md = document.querySelector(".lightadd_this_md").innerHTML;
        let nowItem_md = 1;
        $(document).on('click', '.light_add_md', function() {
            // let newLi_md = '<div id="newlighcard_' + nowItem_md + '">' + addLight_new_md + '</div>';

            // nowItem_md = nowItem + 1;
            // console.log(newLi_md);


            $(this).parents('.button_add_set_md').prev('.lightadd_this_md').append(addLight_new_md);
            bindMySelector(options);
        })



        let addLight_new_md = `<div class="light_Fill_in_theinformation_input_set  col marginauto lightcard" data-selector="myselector">
                                    <!--  手機用 祈福者卡(none) input_1_選擇燈種 -->
                                    <div class="paddingbottom40">
                                        <div class="light_Fill_in_theinformation_input_1 d-flex aic  marginauto  ">
                                            <!-- 手機用 祈福者卡(none) *燈種 -->
                                            <div class="light_Fill_in_theinformation_input_text col  d-flex aic">
                                                <p class="redcolorh5">*</p>
                                                <p>選擇燈種</p>
                                            </div>
                                            <!--手機用 祈福者卡(none) boostarp 下拉選單 -->
                                            <div class="col-7 d-flex aic p-0">
                                                <div class="col p-0">
                                                    <select name="light_type" class="form-control col-11 radius0 lightarray light_type" id="select-1" required>
                                                        <option selected value="">選擇燈種</option>
                                                        <option>光明燈</option>
                                                        <option>文昌燈</option>
                                                        <option>安太歲</option>
                                                        <option>藥師燈</option>
                                                        <option>發財燈</option>
                                                        <option>姻緣燈</option>
                                                    </select>
                                                </div>
                                                <i class="far fa-trash-alt marginauto removebut_far_md"></i>
                                            </div>
                                        </div>
                                        <!--手機用 祈福者卡(none) 空值警告用 地址-->
                                        <div class="light_Fill_in_theinformation_input_1 d-flex aic  marginauto ">
                                            <div class="light_Fill_in_theinformation_input_text col d-flex">
                                            </div>
                                            <div class="col-7 p-0">
                                                <div class="light_type vishidden"></div>
                                                <small class="form-text error"></small>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="paddingbottom40">
                                        <!--  手機用 祈福者卡(none) input_1_ 選擇廟宇-->
                                        <div class="light_Fill_in_theinformation_input_1 d-flex aic  marginauto ">
                                            <!--手機用 *廟宇_地區 -->
                                            <div class="light_Fill_in_theinformation_input_text col  d-flex aic">
                                                <p class="redcolorh5">*</p>
                                                <p>選擇廟宇</p>
                                            </div>
                                            <!-- 手機用 祈福者卡(none) boostarp 下拉選單 廟宇_地區 資料匯入-->
                                            <div class="col-7 d-flex aic p-0">
                                                <div class="col p-0">
                                                    <select name="light_area" class="form-control col-11 radius0 areaarray light_area" id="select-2" disabled>
                                                        <option selected value="">選擇地區</option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                        <!--手機用 祈福者卡(none) 空值警告用 地址-->
                                        <div class="light_Fill_in_theinformation_input_1 d-flex aic  marginauto ">
                                            <div class="light_Fill_in_theinformation_input_text col d-flex">
                                            </div>
                                            <div class="col-7 p-0">
                                                <div class="light_area vishidden"></div>
                                                <small class="form-text error"></small>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="paddingbottom40">
                                        <div class="light_Fill_in_theinformation_input_1 d-flex aic  marginauto ">
                                            <!--手機用 祈福者卡(none) *廟宇 -->
                                            <div class="light_Fill_in_theinformation_input_text col  d-flex aic visy">
                                                <p class="redcolorh5">*</p>
                                                <p>選擇廟宇</p>
                                            </div>
                                            <!-- 手機用 祈福者卡(none) boostarp 下拉選單 廟宇_宮廟 資料匯入-->
                                            <div class="col-7 d-flex aic p-0">
                                                <div class="col p-0">
                                                    <select name="light_temple" class="form-control col-11 radius0 light_temple " id="select-3" disabled>
                                                        <option selected value="">選擇廟宇</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- 手機用 祈福者卡(none)空值警告用 地址-->
                                        <div class="light_Fill_in_theinformation_input_1 d-flex aic  marginauto ">
                                            <div class="light_Fill_in_theinformation_input_text col d-flex">
                                            </div>
                                            <div class="col-7 p-0">
                                                <div class="light_temple vishidden"></div>
                                                <small class="form-text error"></small>
                                            </div>
                                        </div>
                                    </div>



                                </div> `;



































        // 三層篩選 救救我QQ 維修中~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

        var options = generateOptions();

        function bindMySelector(options) {
            $("[data-selector=myselector] [name=light_type]:not([data-myselector='1'])").attr("data-myselector", "1").change(function() {
                console.log("aaa");
                var light_type = $(this).find("option:selected").text();
                // 重新this第一選項時 找到第二選項 找到之前option值 並移除
                $(this).parents('[data-selector=myselector]').find('[name=light_area] option+').remove();

                // 重新this第一選項時 找到第三選項 找到之前option值 並移除
                $(this).parents('[data-selector=myselector]').find('[name=light_temple] option+').remove();

                // 重新this第一選項時 殘廢 第三選項
                $(this).parents('[data-selector=myselector]').find('[name=light_temple]').attr("disabled", true);

                // Object.keys(撈取options陣列當中的[選取值])
                var areas = Object.keys(options[light_type]);

                // areas的陣列數長度.length    for 運作+1 ~~至 該陣列長度
                for (var i = 0; i < areas.length; i++) {
                    // 該this 透過.removeAttr移除該屬性("disabled")殘障  加入 字串 與for出來的 areas[i]陣列值
                    $(this).parents('[data-selector=myselector]').find('[name=light_area]').removeAttr("disabled").append("<option>" + areas[i] + "</option>");
                }
            });

            $("[data-selector=myselector] [name=light_area]:not([data-myselector=1])").attr("data-myselector", "1").change(function() {
                // 宣告 this 找到name當中的'option:eslected'
                var light_type = $(this).parents('[data-selector=myselector]').find('[name=light_type] option:selected').text();

                // 宣告this 找到 並改寫內文
                var light_area = $(this).find("option:selected").text();

                $(this).parents('[data-selector=myselector]').find('[name=light_temple] option+').remove();

                var temples = Object.keys(options[light_type][light_area]);

                for (var i = 0; i < temples.length; i++) {
                    $(this).parents('[data-selector=myselector]').find('[name=light_temple]').removeAttr("disabled").append("<option>" + temples[i] + "</option>");
                }
            });
        }
        bindMySelector(options);





        function generateOptions() {
            return {
                '光明燈': {
                    '北部': {
                        '艋舺龍山寺': null,
                        '松山奉天宮': null,
                        '台北市關渡宮': null,
                        '北投慈后宮': null,
                        '大龍峒保安宮': null,
                    },
                    '中部': {
                        '慈德慈惠堂': null,
                        '台中天后宮': null,
                        '台中市水安宮': null,
                        '豐原慈濟宮': null,
                    },
                    '南部': {
                        '嘉義市城隍廟': null,
                        '嘉義市大天宮': null,
                        '九華山地藏庵': null,
                    },
                    '東部': {
                        '花蓮聖地慈惠堂': null,
                        '鎮東宮媽祖廟': null,
                    },
                    '離島': {
                        '媽祖天后宮': null,
                        '澎湖天后宮': null,
                    },

                },

                '文昌燈': {
                    '北部': {
                        '艋舺龍山寺': null,
                        '指南宮': null,
                        '台北市關渡宮': null,
                        '北投慈后宮': null,
                        '台北市景福宮': null,
                    },
                    '中部': {
                        '大甲鎮瀾宮': null,
                        '苗栗頭份義民廟': null,
                        '慈德慈惠堂': null,
                        '台中天后宮': null,
                        '台中市水安宮': null,
                        '豐原慈濟宮': null,
                        '台中市文昌公廟': null,
                    },
                    '南部': {
                        '嘉義市城隍廟': null,
                        '嘉義市大天宮': null,
                        '九華山地藏庵': null,
                        '南鯤鯓代天府': null,
                        '鹿耳門天后宮': null,
                        '開臺天后宮': null,
                        '崁頭山孚佑宮': null,
                    },
                    '東部': {
                        '花蓮勝安宮': null,

                    },
                    '離島': {
                        '澎湖天后宮': null,
                    },
                },

                '安太歲': {
                    '北部': {
                        '艋舺龍山寺': null,
                        '指南宮': null,
                        '松山奉天宮': null,
                        '台北市關渡宮': null,
                        '大龍峒保安宮': null,
                        '台北市景福宮': null,
                        '臺灣省城隍廟': null,
                        '竹林山觀音寺': null,
                        '大龍峒保安宮': null,
                        '板橋慈惠宮': null,
                        '五股北極殿': null,

                    },
                    '中部': {
                        '大甲鎮瀾宮': null,
                        '慈德慈惠堂': null,
                        '台中天后宮': null,
                        '台中市水安宮': null,
                        '台中市文昌公廟': null,
                        '清水紫雲巖': null,
                        '鹿港龍山寺': null,
                        '八卦山大佛寺': null,
                        '鹿港天后宮': null,
                        '崙尾福崙宮': null,
                        '日月潭文武廟': null,
                    },
                    '南部': {
                        '嘉義市城隍廟': null,
                        '嘉義市大天宮': null,
                        '九華山地藏庵': null,
                        '南鯤鯓代天府': null,
                        '麻豆代天府': null,
                        '開臺天后宮': null,
                    },
                    '東部': {
                        '花蓮聖地慈惠堂': null,
                        '鎮東宮媽祖廟': null,
                    },
                    '離島': {
                        '媽祖天后宮': null,
                        '澎湖天后宮': null,
                    },
                },

                '藥師燈': {
                    '北部': {
                        '艋舺龍山寺': null,
                        '台北市關渡宮': null,
                        '大龍峒保安宮': null,
                        '台北市景福宮': null,
                        '臺灣省城隍廟': null,
                    },
                    '中部': {
                        '日月潭文武廟': null,

                    },
                    '南部': {
                        '九華山地藏庵': null,
                        '五甲協善心德堂': null,

                    },
                    '東部': {
                        '花蓮勝安宮': null,

                    },

                },

                '發財燈': {
                    '北部': {
                        '台北霞海城隍廟': null,
                        '艋舺龍山寺': null,
                        '指南宮': null,
                        '松山奉天宮': null,
                        '台北市關渡宮': null,
                        '北投慈后宮': null,
                        '草嶺慶雲宮': null,
                        '九龍山白鵝湖玉清宮': null,
                        '九龍山白鵝湖玉清宮': null,
                    },
                    '中部': {
                        '苗栗頭份義民廟': null,
                        '慈德慈惠堂': null,
                        '台中市水安宮': null,
                        '斗六南聖宮': null,
                    },
                    '南部': {
                        '嘉義市城隍廟': null,
                        '嘉義市大天宮': null,
                        '南鯤鯓代天府': null,
                        '鹿耳門天后宮': null,
                        '高雄市文武聖殿': null,
                        '高雄港口慈濟宮': null,

                    },

                },

                '姻緣燈': {
                    '北部': {
                        '台北霞海城隍廟': null,
                        '松山奉天宮': null,
                        '台北市關渡宮': null,
                        '板橋慈惠宮': null,
                        '中壢仁海宮': null,
                        '烘爐地南山福德宮': null,
                        '鹿港天后宮': null,
                    },
                    '中部': {
                        '慈德慈惠堂': null,
                        '日月潭文武廟': null,

                    },
                    '南部': {
                        '嘉義市城隍廟': null,
                        '九華山地藏庵': null,
                        '鹿耳門天后宮': null,
                    },

                },
            };
        }
    </script>

    <?php include __DIR__ . '/parts/html-foot.php'; ?>