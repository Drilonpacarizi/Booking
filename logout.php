<?php
session_start();
$_SESSION['id'] = 0;
$_SESSION['expire'] = time() - 3600;
setcookie("is_login", false, time() - 3600);

header('Location: http://localhost/booking/main.php');
