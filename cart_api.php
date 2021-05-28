<?php include __DIR__. '/parts/config.php';

if(! isset($_SESSION['cart'])){
    $_SESSION['cart'] = [];
}

//1.列表 2.加入 3.變更 4.刪除
$action = isset($_GET['action']) ? $_GET['action'] : 'list'; 
$pdc_sid = isset($_GET['pdc_sid']) ? intval($_GET['pdc_sid']) : 0; 
$pdc_qty = isset($_GET['pdc_pdc_qty']) ? intval($_GET['pdc_pdc_qty']) : 0; 

switch($action){
    case 'update':
    case 'add':
        if(! empty($pdc_sid)){
            if($pdc_qty > 0) {

                if(! empty($_SESSION['cart'][$pdc_sid])){
                    $_SESSION['cart'][$pdc_sid]['quantity'] = $pdc_qty;
                } else {

                    $sql = "SELECT * FROM products WHERE sid=$pdc_sid ";
                    $row = $pdo->query($sql)->fetch();

                    if(! empty($row)){
                        $row['quantity'] = $pdc_qty;  
                        $_SESSION['cart'][$row['sid']] = $row; 
                    }
                }


            } else {
                unset($_SESSION['cart'][$pdc_sid]); 
            }
        }
        break;
    case 'delete':
        if(! empty($pdc_sid)){
            unset($_SESSION['cart'][$pdc_sid]);
        }
        break;
    default:
    case 'list':
}

echo json_encode($_SESSION['cart'], JSON_UNESCAPED_UNICODE);








