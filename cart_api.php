<?php include __DIR__. '/parts/config.php';

if(! isset($_SESSION['cart'])){
    $_SESSION['cart'] = [];
}

//1.列表 2.加入 3.變更 4.刪除
$action = isset($_GET['action']) ? $_GET['action'] : 'list'; 
$plan_id = isset($_GET['plan']['id']) ? intval($_GET['plan']['id']) : 0; 
$plan_qty = isset($_GET['plan']['qty']) ? intval($_GET['plan']['qty']) : 0; 

switch($action){
    case 'update':
    case 'add':
        if(! empty($plan_id)){
            if($plan_qty > 0) {

                if(! empty($_SESSION['cart'][$plan_id])){
                    $_SESSION['cart'][$plan_id]['qty'] = $plan_qty;
                } else {

                    $sql = "SELECT * FROM trips WHERE sid=$plan_id ";
                    $row = $pdo->query($sql)->fetch();

                    if(! empty($row)){
                        $row['qty'] = $plan_qty;  
                        $_SESSION['cart'][$row['id']] = $row; 
                    }
                }


            } else {
                unset($_SESSION['cart'][$plan_id]); 
            }
        }
        break;
    case 'delete':
        if(! empty($plan_id)){
            unset($_SESSION['cart'][$plan_id]);
        }
        break;
    default:
    case 'list':
}

echo json_encode($_SESSION['cart'], JSON_UNESCAPED_UNICODE);








