<?php
$counter = 0;
for ($i = 0; $i < 100000000; $i++) {
    $counter += $i;
}

echo "hello world{$counter}";
