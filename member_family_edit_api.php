<?php include __DIR__. '/parts/config.php';

$output = [
    'success' => false,
    'code' => 0,
    'error' => '資料沒有修改'
];

print_r($_POST) ;
// foreach($_POST as $value){
//     echo $value.'<br/>';
// }
exit;

if(isset($_POST['sid'])) {
    $output['error'] = '資料沒有修';
    // foreach($_POST as $key => $value){    
    $sql = "UPDATE `member_friend` SET
                        `birthday_`=?, 
                        `mobile_`=?,
                        `address_`=?
            WHERE `sid`=? ";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        $_POST['friends_birth'],
        $_POST['friends_mobile'],
        $_POST['friends_address'],
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