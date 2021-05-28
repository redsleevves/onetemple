<?php include __DIR__. '/parts/config.php';

$sid = intval($_GET['sid']);

// $come_from = $_SERVER['HTTP_REFERER'] ?? 'member_onepage.php';


if(! empty($sid)) {
    $lucky_sql = "DELETE FROM `fav_lucky` WHERE `sid`=$sid ";
    $pdo->query($lucky_sql);

}

// header('Location: '. $come_from);








