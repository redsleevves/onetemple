<?php
require __DIR__ . '/parts/__connect_db.php';

if (!empty($_SESSION['user'])) {
    $mid = intval($_SESSION['user']['sid']);
    $where .= "AND lk.`member_id`=$mid";
    //f代表favorites的縮寫

    $f_sql = sprintf("SELECT lk.shop_id FROM shop p 
    LEFT JOIN like_shop lk ON lk.shop_id=p.sid
    $where");
    $like_shop = $pdo->query($f_sql)->fetchAll();
}


echo json_encode([
    'favorites' => $like_shop ?? '',

], JSON_UNESCAPED_UNICODE);
