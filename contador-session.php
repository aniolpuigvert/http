<?php
session_start();

if (isset($_SESSION['num'])) {
    $num = $_SESSION['num'] + 1;
} else {
    $num = 0;
}

$_SESSION['num'] = $num;
echo "Num: " . $num;
?>
