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
    $shop = [
        'id' => $_POST['id'],
        'name' => $_POST['name'],
        'content' => $_POST['name1'],
        'qty' => $_POST['qty'],
        'price' => $_POST['price'],
        'image' => $_POST['image'],
    ];
    
    $_SESSION['cart']['product'][] = $shop; // append to $_SESSION['cart']['shop']
    
    $result['success'] = true;
    $result['code'] = 200;
    $result['info'] = '資料新增完成';
    echo json_encode($result, JSON_UNESCAPED_UNICODE);
} else if ($_POST['op'] == 'toggle_fav') {
    $member_sid = $_SESSION['user']['sid'];
    $shop_id = intval($_POST['id']);

    if($member_sid && $shop_id) {
        $sql = "SELECT COUNT(0) FROM fav_pdc WHERE pdc_sid = ? AND member_sid = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            $shop_id,
            $member_sid
        ]);
        $cnt = $stmt->fetch(PDO::FETCH_NUM)[0];
        if($cnt) {
            $sql = "DELETE FROM fav_pdc WHERE pdc_sid = ? AND member_sid = ?";
            $stmt = $pdo->prepare($sql);
            $cnt = $stmt->execute([
                $shop_id,
                $member_sid
            ]);
        } else {
            $sql = "INSERT INTO fav_pdc (pdc_sid, member_sid) VALUES (?, ?)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                $shop_id,
                $member_sid
            ]);
        }
        
        $result['success'] = true;
        $result['code'] = 200;
        $result['info'] = '資料處理完成';
    } else {
        $result['success'] = false;
        $result['code'] = 500;
        $result['info'] = '未知的商品id';
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