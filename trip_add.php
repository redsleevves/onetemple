<?php
require __DIR__ . "/parts/config.php";

$trip = [
    'id' => $_POST['id'],
    'name' => $_POST['name'],
    'content' => $_POST['solution'],
    'qty' => $_POST['qty'],
    'price' => $_POST['price'],
    'note' => $_POST['date'],
];

$_SESSION['cart']['trip'][] = $trip; // append to $_SESSION['cart']['trip']

$result['success'] = true;
$result['code'] = 200;
$result['info'] = '資料新增完成';
echo json_encode($result, JSON_UNESCAPED_UNICODE);


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