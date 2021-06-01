<?php
error_reporting(E_ALL & ~E_NOTICE); //關掉 notice 的訊息, 這類訊息都不重要

require __DIR__ . '/connect_sql.php';

define('WEB_ROOT', '/proj60');

session_start();