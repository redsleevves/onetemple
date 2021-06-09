
<?php

require __DIR__ . '/parts/__connect_db.php';
$sql = "SELECT * FROM `poetry` ORDER BY RAND() LIMIT 1";
$row = $pdo->query($sql)->fetch();


echo json_encode($row, JSON_UNESCAPED_UNICODE);
