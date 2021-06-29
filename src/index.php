<?php
$counter = time();
for ($i = 0; $i < 100; $i++) {
    $counter += $i;
}

$hash = md5($counter);

echo "hello world sync {$hash}\n";

echo "step";

phpinfo();