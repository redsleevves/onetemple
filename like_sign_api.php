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
    'session' => $_SESSION['user']
];

$lucky_sid = isset($_GET['lucky_sid']) ? intval($_GET['lucky_sid']) : 0;

if (isset($_SESSION['user'])) {
    if ($lucky_sid < 1) {
        $output['error'] = 'bad lucky_sid';
    }

    $member_sid = intval($_SESSION['user']['sid']);
    $output['addOrDel'] = 'add';
    $sql2 = "INSERT INTO `fav_lucky`(`member_sid`, `lucky_sid`) VALUES ($member_sid, $lucky_sid) ";
    $pdo->query($sql2);
    $output['success'] = true;
    /*
    else {
        $member_sid = intval($_SESSION['user']['sid']);
        $sql = "SELECT * FROM `fav_lucky` WHERE `member_sid`=$member_sid AND `lucky_sid`=$lucky_sid";
        $row = $pdo->query($sql)->fetch();
        if (empty($row)) {
            // add
            $output['addOrDel'] = 'add';
            $sql2 = "INSERT INTO `fav_lucky`(`member_sid`, `lucky_sid`) VALUES ($member_sid, $lucky_sid) ";
            $pdo->query($sql2);
            $output['success'] = true;
        }
    }*/
}
// $sign_id = isset($_GET['sign_id']) ? intval($_GET['sign_id']) : 0;

// if (isset($_SESSION['user'])) {
//     if ($sign_id < 1) {
//         $output['error'] = 'bad sign_id';
//     } else {
//         $member_id = intval($_SESSION['user']['id']);
//         $sql = "SELECT * FROM `like_sign` WHERE `member_id`=$member_id AND `sign_id`=$sign_id";
//         $row = $pdo->query($sql)->fetch();
//         if (empty($row)) {
//             // add
//             $output['addOrDel'] = 'add';
//             $sql2 = "INSERT INTO `like_sign`(`member_id`, `sign_id`) VALUES ($member_id, $sign_id) ";
//             $pdo->query($sql2);
//             $output['success'] = true;
//         }
//     }
// }


echo json_encode($output, JSON_UNESCAPED_UNICODE);
