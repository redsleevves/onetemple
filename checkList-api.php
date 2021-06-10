<?php include __DIR__ . '/parts/config.php'; 

// exit;

$output = [
    'success' => false,
    'code' => 0,
    'error' => '資料沒有新增'
];


if(isset($_POST['shipment_method']) ){

    print_r($_POST);

    //訂單編號
    $_POST['order_id'] = $_SESSION['order_id'];

    //商品總金額
    $pdc_total = 0;
    if(empty($_SESSION['cart']['product'])){
        $pdc_total = 0;
    }else{
        foreach($_SESSION['cart']['product'] as $i) {
            $pdc_total += $i['price'] * $i['qty'];
        }
    };
    
    $trip_total = 0;
    if(empty($_SESSION['cart']['plan'])){
        $trip_total = 0;
    }else{
        foreach($_SESSION['cart']['plan'] as $j) {
            $trip_total += $j['price'] * $j['qty'];
        }
    };

    $lit_total = 0;
    if(empty($_SESSION['cart']['light'])){
        $lit_total = 0;
    }else{
        foreach($_SESSION['cart']['light'] as $k) {
            $lit_total += $k['price'] * $k['qty'];
        }
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

    //member-sid
    $member_sid = isset($_SESSION['user']) ? $_SESSION['user']['sid'] : 0;

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

if(empty($_SESSION['cart']['product'])){
}else{
    foreach($_SESSION['cart']['product'] as $p) {
    $op_stmt->execute([

    $member_sid,
    $p['id'], 
    $p['qty'],
    $p['price'],
    $sum_id_p
    ]);
    };

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

if(empty($_SESSION['cart']['plan'])){
}else{
    foreach($_SESSION['cart']['plan'] as $t) {
    $ot_stmt->execute([

    $member_sid,
    $t['id'], 
    $t['qty'],
    $t['price'],
    $t['content'],
    $t['note'],
    $sum_id_p
    ]);
    };
};


//orders_light
$ol_sql = "INSERT INTO `orders_lit`(
            `member_sid`, `lit_cate`, 
            `lit_qty`, `lit_price`, `sum_id`
            ) VALUES (
            ?, ?,
            ?, ?, ?
        )";

$ol_stmt = $pdo->prepare($ol_sql);

if(empty($_SESSION['cart']['light'])){
}else{
    foreach($_SESSION['cart']['light'] as $l) {
    $ol_stmt->execute([

    $member_sid,
    $l['content'], 
    $l['qty'],
    $l['price'],
    $sum_id_p
    ]);
    };
};


//orders_light_detail
$oldt_sql = "INSERT INTO `order_lit_details`(
            `lit_cate`, `bless_name`, `bless_mobile`, 
            `bless_birth`, `bless_stime`, `bless_address`, 
            `bless_gender`, `sum_id`
            ) VALUES (
                ?, ?, ?,
                ?, ?, ?,
                ?, ?
            )";

$oldt_stmt = $pdo->prepare($oldt_sql);

if(empty($_SESSION['cart']['light'])){
}else{
    foreach($_SESSION['cart']['light'] as $l) {

    $oldt_stmt->execute([

    $l['content'],
    $l['name'], 
    $l['mobile'],
    $l['birthday'],
    $l['stime'],
    $l['address'], 
    $l['gender'],
    $sum_id_p
    ]);
    };

};

}

