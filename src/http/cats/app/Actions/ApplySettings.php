<?php

require_once '../../boot/boot.php';

if (!isset($_POST['submit'])) {
    header('HTTP/1.0 404 Not Found');
    exit();
}

$_SESSION['offline'] = isset($_POST['offline']);
$_SESSION['logging'] = isset($_POST['logging']);
$_SESSION['cashing'] = isset($_POST['cashing']);

header('Location: Breeds.php');
exit();
