<?php

session_start();

$_SESSION['name'] = "rami";
$_SESSION['id'] = 1005;


echo '<pre>';

print_r($_SESSION);

echo '</pre>';

echo '<a href="test.php">Test</a>';

