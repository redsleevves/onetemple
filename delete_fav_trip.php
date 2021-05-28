<?php include __DIR__. '/parts/config.php';

$sid = intval($_GET['sid']);

$come_from = $_SERVER['HTTP_REFERER'] ?? 'member_onepage.php';


if(! empty($sid)) {
    $trip_sql = "DELETE FROM `fav_trip` WHERE `sid`=$sid ";
    $pdo->query($trip_sql);

}

header('Location: '. $come_from);








