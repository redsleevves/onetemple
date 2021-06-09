<?php
require __DIR__ . "/parts/config.php";

if (!isset($_SESSION['user']['sid'])) {
    $result['success'] = false;
    $result['code'] = 500;
    $result['info'] = '請先登入會員';
    echo json_encode($result, JSON_UNESCAPED_UNICODE);
    return;
}
if ($_POST['op'] == 'add_cart') {
    $trip = [
        'id' => $_POST['id'],
        'name' => $_POST['name'],
        'content' => $_POST['solution'],
        'qty' => $_POST['qty'],
        'price' => $_POST['price'],
        'note' => $_POST['date'],
    ];
    
    $_SESSION['cart']['plan'][] = $trip; // append to $_SESSION['cart']['plan']
    
    $result['success'] = true;
    $result['code'] = 200;
    $result['info'] = '資料新增完成';
    echo json_encode($result, JSON_UNESCAPED_UNICODE);
} else if ($_POST['op'] == 'toggle_fav') {
    $member_sid = $_SESSION['user']['sid'];
    $trip_id = intval($_POST['id']);

    if($member_sid && $trip_id) {
        $sql = "SELECT COUNT(0) FROM fav_trip WHERE trip_sid = ? AND member_sid = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            $trip_id,
            $member_sid
        ]);
        $cnt = $stmt->fetch(PDO::FETCH_NUM)[0];
        if($cnt) {
            $sql = "DELETE FROM fav_trip WHERE trip_sid = ? AND member_sid = ?";
            $stmt = $pdo->prepare($sql);
            $cnt = $stmt->execute([
                $trip_id,
                $member_sid
            ]);
        } else {
            $sql = "INSERT INTO fav_trip (trip_sid, member_sid) VALUES (?, ?)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                $trip_id,
                $member_sid
            ]);
        }
        
        $result['success'] = true;
        $result['code'] = 200;
        $result['info'] = '資料處理完成';
    } else {
        $result['success'] = false;
        $result['code'] = 500;
        $result['info'] = '未知的行程id';
    }
    echo json_encode($result, JSON_UNESCAPED_UNICODE);
}



// $sql = "INSERT INTO cart_plan (name, content, quantity, price, note) VALUES (?, ?, ?, ?, ?)";
// $stmt = $pdo->prepare($sql);
// $stmt->execute([
//     $id,
//     $solution,
//     $qty,
//     $price,
//     $date
// ]);

// if ($stmt->rowCount() == 1) {
//     $result['success'] = true;
//     $result['code'] = 200;
//     $result['info'] = '資料新增完成';
// } else {
//     $result['code'] = 410;
//     $result['info'] = '資料沒有新增';
// }