<?php include __DIR__. '/parts/config.php';

if(! isset($_SESSION['cart'])){
    $_SESSION['cart'] = [];
}

$type = isset($_GET['type']) ? intval($_GET['type']) : 0;  // 哪一台車
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;  // 商品

switch($type){
    case 'pdc':
        if(! empty($id)){
            unset($_SESSION['cart']['product'][$id]);
        }
        break;
    case 'plan':
        if(! empty($id)){
            unset($_SESSION['cart']['plan'][$id]);
        }
        break;
    case 'light':
        if(! empty($id)){
            unset($_SESSION['cart']['light'][$id]);
        }
        break;
}

echo json_encode($_SESSION['cart'], JSON_UNESCAPED_UNICODE);