<?php

require __DIR__ . '/parts/__connect_db.php';

if (!isset($_SESSION)) {
    session_start();
}

header('Content-Type: application/json; charset=UTF-8'); //設定資料類型為 json，編碼 utf-8


$output = [
    'success' => false,
    'addOrDel' => '',
    'error' => 'login first!',
    'session' => $_SESSION
];

$shop_id = isset($_GET['shop_id']) ? intval($_GET['shop_id']) : 0;

if (isset($_SESSION['user'])) {
    if ($shop_id < 1) {
        $output['error'] = 'bad shop_id';
    } else {
        $member_id = intval($_SESSION['user']['sid']);
        $sql = "SELECT * FROM `like_shop` WHERE `member_id`=$member_id AND `shop_id`=$shop_id";
        $row = $pdo->query($sql)->fetch();
        if (empty($row)) {
            // add
            $output['addOrDel'] = 'add';
            $sql2 = "INSERT INTO `like_shop` (`member_id`, `shop_id`) VALUES ($member_id, $shop_id) ";
            $pdo->query($sql2);
            $output['success'] = 'add';
        } else {
            // remove
            $output['addOrDel'] = 'del';
            $sql3 = "DELETE FROM `like_shop` WHERE `member_id`=$member_id AND `shop_id`=$shop_id";
            $pdo->query($sql3);
            $output['success'] = 'remove';
        }
    }
}


echo json_encode($output, JSON_UNESCAPED_UNICODE);
