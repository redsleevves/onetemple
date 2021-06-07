<?php

session_start();

$_SESSION['user'] = [
    'id' => 1,
    'name' => 'bill'

];

echo json_encode($_SESSION, JSON_UNESCAPED_UNICODE);
