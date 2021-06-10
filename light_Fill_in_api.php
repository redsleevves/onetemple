<?php
include __DIR__ . '/parts/config.php';
$member_sid = isset($_SESSION['user'])?$_SESSION['user']['sid']:0;
$sql = "SELECT * FROM member o
JOIN member_friend d ON o.sid= d.f_sid
WHERE o.sid=? and d.sid=? ";

$stmt= $pdo->prepare($sql);
$stmt->execute([$member_sid, $_POST['sid']]);
$rows = $stmt->fetch();

echo json_encode($rows, JSON_UNESCAPED_UNICODE);

?>