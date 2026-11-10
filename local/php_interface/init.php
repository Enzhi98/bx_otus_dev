<?php
$includes = [
    __DIR__ . '/../../vendor/autoload.php',
    __DIR__ . '/../App/autoload.php',
];


foreach ($includes as $file) {
    if (!file_exists($file)) {
        echo "Error: File {$file} not found!";
        continue;
    }

    require_once $file;
}
