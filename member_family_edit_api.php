<?php include __DIR__. '/parts/config.php';

$output = [
    'success' => false,
    'code' => 0,
    'error' => '資料沒有修改'
];

// echo json_encode($_POST);
// exit;
// foreach($_POST as $key => $value){    


if(isset($_POST['sid'])) {
    for($i=0;$i<count($_POST['sid']);$i++){
    $sql = "UPDATE `member_friend` SET
                        `birthday_`=?, 
                        `mobile_`=?,
                        `address_`=?
            WHERE `sid`=? ";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        $_POST['friends_birth'][$i],
        $_POST['friends_mobile'][$i],
        $_POST['friends_address'][$i],
        $_POST['sid'][$i],
    ]);
    $output['success'] = true;

}
}


echo json_encode($output, JSON_UNESCAPED_UNICODE);