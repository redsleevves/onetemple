<?php
// header('Content-Type: application/json; charset=UTF-8'); //設定資料類型為 json，編碼 utf-8
// if ($_SERVER['REQUEST_METHOD'] == "POST") { //如果是 POST 請求
//     $CardContent = $_POST["shop_card-text_body"]; //取得 nickname POST 值
//     $CadTitle = $_POST["shop_cad_title"]; //取得 gender POST 值
//     if ($CardContent != null && $CadTitle != null) { //如果 nickname 和 gender 都有填寫
//         //回傳 nickname 和 gender json 資料
//         echo json_encode(array(
//             'shop_card_text_body' => $CardContent,
//             'shop_cad_title' => $CadTitle
//         ));
//     } else {
//         //回傳 errorMsg json 資料
//         echo json_encode(array(
//             'errorMsg' => '資料未輸入完全！'
//         ));
//     }
// } else {
//     //回傳 errorMsg json 資料
//     echo json_encode(array(
//         'errorMsg' => '請求無效，只允許 POST 方式訪問！'
//     ));
// }
