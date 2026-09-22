<?php
session_start();
session_destroy();

$tujuan = $_SERVER['HTTP_REFERER'] ?? 'index.php';
header("Location: $tujuan");
exit;