<?php
$counter = 0;
for ($i = 0; $i < 1000000000; $i++) {
    $counter += $i;
}

echo "hello world{$counter}";
