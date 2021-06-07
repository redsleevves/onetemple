<?php include __DIR__. '/parts/config.php';

$output = [
    'success' => false,
    'code' => 0,
    'error' => '資料沒有修改'
];

// echo json_encode($_POST);
// exit;

if(isset($_POST['sid'])) {
    $output['error'] = '資料沒有修';
    $sql = "UPDATE `order_lit_details` SET
                        `bless_birth`=?, 
                        `bless_mobile`=?,
                        `bless_address`=?
            WHERE `sid`=? ";

    $stmt = $pdo->prepare($sql);    
    $stmt->execute([
        $_POST['bless_mobile'],
        $_POST['bless_address'],
        $_POST['bless_birth'],
        $_POST['bless_id'],
    ]);

    if($stmt->rowCount()){
        $output['success'] = true;
        $output['error'] = '';
    } else {
        $output['error'] = '資料沒有修改';
    }
}


echo json_encode($output, JSON_UNESCAPED_UNICODE);








