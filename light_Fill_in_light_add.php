<?php 
error_reporting(E_ALL & ~E_NOTICE);  # 設定輸出錯誤類型
include __DIR__ . '/parts/config.php';
$blessers = json_decode($_POST['json'], true);
foreach($blessers as $blesser) {
    $_SESSION['cart']['light'][] = $blesser;
}

$result['success'] = true;
$result['code'] = 200;
$result['info'] = '資料新增完成';
echo json_encode($result, JSON_UNESCAPED_UNICODE);