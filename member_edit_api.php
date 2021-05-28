<?php include __DIR__. '/parts/config.php';

$output = [
    'success' => false,
    'code' => 0,
    'error' => '資料沒有修改'
];

if(isset($_POST['sid']) and isset($_POST['member_name'])) {
    $output['error'] = '資料沒有修修';

    $sql = "UPDATE `member` SET 
                        `mobile`=?,
                        `address`=?
            WHERE `sid`=? ";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        $_POST['member_mobile'],
        $_POST['member_address'],
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








