<?php include __DIR__ . '/parts/config.php'; 

// exit;

$output = [
    'success' => false,
    'code' => 0,
    'error' => '資料沒有新增'
];


if(isset($_POST['shipment_method']) ){

    //訂單編號
    $_POST['order_id'] = $_SESSION['cart']['order_id'];

    //商品總金額
    $pdc_total = 0;
    foreach($_SESSION['cart']['products'] as $i) {
        $pdc_total += $i['price'] * $i['qty'];
    }
    $trip_total = 0;
    foreach($_SESSION['cart']['trip'] as $j) {
        $trip_total += $j['price'] * $j['qty'];
    }
    $lit_total = 0;
    foreach($_SESSION['cart']['light'] as $k) {
        $lit_total += $k['price'] * $k['qty'];
    }
    
    $product_totalPrice = $pdc_total + $trip_total + $lit_total;

    //運費計算
    $shipment_fee = 0;
    if ($_POST['shipment_method'] == 'delivery' ){
        $shipment_fee = 100;
    }
    else{
        $shipment_fee = 60;
    }

    //訂單總金額
    $order_totalPrice = $product_totalPrice + $shipment_fee;

    //測試用
    $member_sid = 'abc111';

//order_sum
$o_sql = "INSERT INTO `order_sum`(
    `order_id`, `member_sid`, `shipment_method`, `shipment_shipName`,
    `shipment_address`, `shipment_reciver`, `shipment_reciver_phone`, 
    `payment_method`, `product_totalPrice`, `shipment_fee`, 
    `order_totalPrice`, `order_time`
) VALUES (
    ?, ?, ?, ?,
    ?, ?, ?,
    ?, ?, ?,
    ?, NOW()
)";

$o_stmt = $pdo->prepare($o_sql);
$o_stmt->execute([

$_POST['order_id'], //order_id
$member_sid,
$_POST['shipment_method'],
$_POST['shipment_shipName'],
$_POST['shipment_address'],
$_POST['shipment_reciver'],
$_POST['shipment_reciver_phone'],
$_POST['payment_method'],
$product_totalPrice,
$shipment_fee,
$order_totalPrice
]);

if($o_stmt->rowCount()){
    $output['success'] = true;
    $output['error'] = '';
} else {
    $output['error'] = '新增資料發生錯誤';
}

echo json_encode($output, JSON_UNESCAPED_UNICODE);



//orders_pdc
$sum_id_p = $pdo->lastInsertId();

$op_sql = "INSERT INTO `orders_pdc`(
    `member_sid`, `pdc_sid`, 
    `pdc_qty`, `pdc_price`, `sum_id`
) VALUES (
        ?, ?,
        ?, ?, ?
)";

$op_stmt = $pdo->prepare($op_sql);

foreach($_SESSION['cart']['products'] as $p) {
$op_stmt->execute([

$member_sid,
$p['sid'], 
$p['qty'],
$p['price'],
$sum_id_p
]);
};


//orders_trip
$ot_sql = "INSERT INTO `orders_trip`(
                `member_sid`, `trip_sid`, 
                `trip_qty`, `trip_price`, `trip_plan`, 
                `trip_date`, `sum_id`
                ) VALUES(
                ?, ?,
                ?, ?, ?,
                ?, ?
        )";

$ot_stmt = $pdo->prepare($ot_sql);

foreach($_SESSION['cart']['trip'] as $t) {
$ot_stmt->execute([

$member_sid,
$t['sid'], 
$t['qty'],
$t['price'],
$t['attr'],
$t['date'],
$sum_id_p
]);
};


//orders_light
$ol_sql = "INSERT INTO `orders_lit`(
            `member_sid`, `lit_sid`, 
            `lit_qty`, `lit_price`, `sum_id`
            ) VALUES (
            ?, ?,
            ?, ?, ?
        )";

$ol_stmt = $pdo->prepare($ol_sql);

foreach($_SESSION['cart']['light'] as $l) {
$ol_stmt->execute([

$member_sid,
$l['sid'], 
$l['qty'],
$l['price'],
$sum_id_p
]);
};

//orders_light_detail
// $oldt_sid = $pdo->lastInsertId();

$oldt_sql = "INSERT INTO `order_lit_details`(
                    `lit_sid`, `bless_name`, 
                    `bless_gender`, `bless_birth`, `bless_address`, 
                    `sum_id`
                    ) VALUES (
                ?, ?,
                ?, ?, ?,
                ?
            )";

$oldt_stmt = $pdo->prepare($oldt_sql);

foreach($_SESSION['cart']['light'] as $l) {
$oldt_stmt->execute([

$l['sid'],
$l['note']['name'], 
$l['note']['gender'],
$l['note']['birth'],
$l['note']['address'],
$sum_id_p
]);
};



}

