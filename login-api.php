<?php include __DIR__. '/parts/config.php';


$output = [
    'success' => false,
    'code' => 0,
    'error' => '帳號或密碼錯誤'
];

if(isset($_POST['email'])) {

    // TODO: 欄位資料檢查

    $a_sql = "SELECT * FROM `member` WHERE `email`=?";
    $a_stmt = $pdo->prepare($a_sql);
    $a_stmt->execute([ $_POST['email'] ]);
    $row = $a_stmt->fetch();

    if(empty($row)) {
        echo json_encode($output, JSON_UNESCAPED_UNICODE);
        exit;  // 程式結束
    }

    if(password_verify($_POST['password'], $row['password'])){
        unset($row['password']);
        $_SESSION['user'] = $row;
        $output['success'] = true;
        $output['error'] = '';
    }

}

echo json_encode($output, JSON_UNESCAPED_UNICODE);








