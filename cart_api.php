<?php include __DIR__ . '/parts/config.php';

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

$type = isset($_GET['type']) ? $_GET['type'] : 0;  // 哪一台車
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;  // 商品

switch ($type) {
    case 'pdc':
        if (is_numeric($id)) {
            unset($_SESSION['cart']['product'][$id]);
            $_SESSION['cart']['product'] = array_values($_SESSION['cart']['product']);
        }
        break;
    case 'plan':
        if (is_numeric($id)) {
            unset($_SESSION['cart']['plan'][$id]);
            $_SESSION['cart']['plan'] = array_values($_SESSION['cart']['plan']);
        }
        break;
    case 'light':
        if (is_numeric($id)) {
            unset($_SESSION['cart']['light'][$id]);
            $_SESSION['cart']['light'] = array_values($_SESSION['cart']['light']);
        }
        break;
}

echo json_encode($_SESSION['cart'], JSON_UNESCAPED_UNICODE);
