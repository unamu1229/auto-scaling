<?php
$counter = time();
for ($i = 0; $i < 100000000; $i++) {
    $counter += $i;
}

$hash = md5($counter);

echo "hello world {$hash}";
