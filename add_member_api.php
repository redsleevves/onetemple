<?php include __DIR__. '/parts/config.php';

$output = [
    'success' => false,
    'code' => 0,
    'error' => '資料沒有新增'
];

if(isset($_POST['email'])) {
    // TODO: 欄位資料檢查

    $b_sql = "SELECT `email` FROM `member` WHERE `email`=?";
    $b_stmt = $pdo->prepare($b_sql);
    $b_stmt->execute([ $_POST['email'] ]);

    if($b_stmt->rowCount()) {
        $output['error'] = '此 email 已經註冊過';
        echo json_encode($output, JSON_UNESCAPED_UNICODE);
        exit;  // 程式結束
    }

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

    $a_sql = "SELECT * FROM `member` WHERE `email`=?";
    $a_stmt = $pdo->prepare($a_sql);
    $a_stmt->execute([ $_POST['email'] ]);
    $row = $a_stmt->fetch();

    if($stmt->rowCount()){
        unset($row['password']);
        unset($row['repassword']);
        $_SESSION['user'] = $row;
        $output['success'] = true;
        $output['error'] = '';
    } else {
        $output['error'] = '新增資料發生錯誤';
    }
}

echo json_encode($output, JSON_UNESCAPED_UNICODE);








