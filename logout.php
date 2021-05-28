<?php

session_start();

unset($_SESSION['user']);

if (!empty($_SERVER['HTTP_REFERER']))
    header("Location: ".$_SERVER['HTTP_REFERER']);
else
    header("Location: trip.php");