<?php
error_reporting(E_ALL & ~E_NOTICE); //關掉 notice 的訊息, 這類訊息都不重要

require __DIR__. '/__connect_db.php';

define('WEB_ROOT', '/onetemple');

session_start();

