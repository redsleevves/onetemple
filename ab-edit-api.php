<?php include __DIR__. '/parts/config.php';

$output = [
    'success' => false,
    'code' => 0,
    'error' => '資料沒有修改'
];

if(isset($_POST['sid'])) {
    // TODO: 欄位資料檢查

    $sql = "UPDATE `member` SET
    `profilepic`=?
    WHERE `sid`=? ";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
    $_POST['avatar'],
    $_POST['sid'],
    ]);

    if($stmt->rowCount()){
        $output['success'] = true;
        $output['error'] = '';
    } else {
        $output['error'] = '資料沒有修改';
    }
}


echo json_encode($output, JSON_UNESCAPED_UNICODE);








