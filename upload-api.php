<?php
$output = [
    'success' => false,
    'filename' => '',
    'error' => '沒有上傳檔案',
    'file' => '',
];

$exts = [
    'image/png' => '.png',
    'image/jpeg' => '.jpg',
];

if(isset($_FILES['avatar'])){
    if( empty($exts[$_FILES['avatar']['type']])){
        $output['error'] = '只接受 png, jpg';
    } else {
        $ext = $exts[$_FILES['avatar']['type']];  // 取得副檔名1
        $output['file'] = $_FILES['avatar'];
        $dir = __DIR__. '/imgs/';  // 存放的路徑
        $fname =  uniqid(). rand(100, 999). $ext;  // 儲存的檔名
        $output['filename'] = $fname;
        if( move_uploaded_file($_FILES['avatar']['tmp_name'], $dir. $fname) ){
            $output['success'] = true;
            $output['error'] = '';
        }
    }

}


header('Content-Type: application/json');
echo json_encode($output);
/*
 * 檔名會有重複的問題: 使用隨機的檔名
 * 檔案類型: 可以用 mimetype 去篩選
 *
 */