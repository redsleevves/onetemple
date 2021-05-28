<?php include __DIR__. '/parts/config.php';

$output = [
    'success' => false,
    'code' => 0,
    'error' => '資料沒有新增'
];

if(isset($_POST['name'])) {
    // TODO: 欄位資料檢查

    // 檢查手機號碼格式
    $mobile_re = "/^09\d{2}-?\d{3}-?\d{3}$/";
    if(empty(preg_grep($mobile_re, [ $_POST['mobile']]))){
        $output['error'] = '手機號碼格式不符';
        echo json_encode($output, JSON_UNESCAPED_UNICODE);
        exit;  
        // 結束, 後面的程式不會執行, die()
    }

    $hash = sha1( $_POST['email']. uniqid() );

    $sql = "INSERT INTO `member`(
                           `name`, `email`,`mobile`, `password`
                           ) VALUES (
                                ?, ?, ?,?
                           )";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        $_POST['name'],
        $_POST['email'],
        $_POST['mobile'],
        password_hash($_POST['password'], PASSWORD_DEFAULT),
    ]);

    if($stmt->rowCount()){
        $output['success'] = true;
        $output['error'] = '';
    } else {
        $output['error'] = '新增資料發生錯誤';
    }
}

echo json_encode($output, JSON_UNESCAPED_UNICODE);








