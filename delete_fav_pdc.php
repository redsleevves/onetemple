<?php include __DIR__. '/parts/config.php';

$sid = intval($_GET['sid']);

$come_from = $_SERVER['HTTP_REFERER'] ?? 'member_onepage.php';


if(! empty($sid)) {
    $pdc_sql = "DELETE FROM `fav_pdc` WHERE `sid`=$sid ";
    $pdo->query($pdc_sql);
}

header('Location: '. $come_from);








