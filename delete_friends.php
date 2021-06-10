<?php include __DIR__. '/parts/config.php';

$sid = intval($_GET['sid']);

// $come_from = $_SERVER['HTTP_REFERER'] ?? 'member_onepage.php';


if(! empty($sid)) {
    $lit_sql = "DELETE FROM `member_friend` WHERE `sid`=$sid ";
    $pdo->query($lit_sql);

}

// header('Location: '. $come_from);








