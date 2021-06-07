<?php
require __DIR__ . '/product/__connect_db.php';

$sql = "SELECT * FROM `poetry` ORDER BY RAND() LIMIT 1";

$row = $pdo->query($sql)->fetch();

echo json_encode($row);
UPDATE `poetry` SET `grade`='上平' WHERE `sid` BETWEEN 55 AND 60
