<?php
if (isset($_COOKIE['count'])) {
    $count = $_COOKIE['count'] + 1;
} else {
    $count = 0;
}

setcookie('count', $count, time() + 3600);
echo "Count: " . $count;
?>