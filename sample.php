<?php

echo "Progress:        ";
for($i = 0; $i < 100000; $i++) {
    echo "\033[5D";
    echo str_pad($i, 5, ' ', STR_PAD_LEFT);
}
