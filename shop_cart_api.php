
<?php

require __DIR__ . '/parts/__connect_db.php';
session_start();
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// 1.列表, 2.加入, 3.變更數量, 4.移除項目
// 1.list, 2.add, 3.update, 4.delete

$action = isset($_GET['action']) ? $_GET['action'] : 'list'; // 操作的動作
$pid = isset($_GET['pid']) ? intval($_GET['pid']) : 0; // 商品 id
$qty = isset($_GET['qty']) ? intval($_GET['qty']) : 0;  // 數量
$userId = isset($_SESSION['user']['id']) ?: 0;

switch ($action) {
    case 'update':
    case 'add':
        if (!empty($pid)) {
            if ($qty > 0) {
                $sql = "SELECT price FROM shop WHERE sid=$pid";
                $price = $pdo->query($sql)->fetch();
                $total_pri = (int)$price['price'] * $qty;
                $sql = "INSERT INTO shop_cart (`member_id`, `Quantity`, `price`, `created_at`, `card_id`) VALUES ('$userId', '$qty', '$total_pri', now(), '$pid')";
                $row = $pdo->query($sql)->fetch();
            }
        }
        break;
    case 'delete':
    default:
    case 'list';
}

// header('Content-Type: application/json');
//echo json_encode($_SESSION['cart'], JSON_UNESCAPED_UNICODE);
