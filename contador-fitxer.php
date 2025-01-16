<?php
$contador = 0;

if ($fd = fopen('counter.txt', 'r')) {
    $contador = (int)fgets($fd);
    fclose($fd);
}

$fd2 = fopen('counter.txt', 'w');
$contador++;
fwrite($fd2, $contador);
fclose($fd2);

echo $contador;
?>
