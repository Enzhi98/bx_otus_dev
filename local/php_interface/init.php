<?php
// composer
if (file_exists(__DIR__ . '/../../vendor/autoload.php')) {
    require_once(__DIR__ . '/../../vendor/autoload.php');
} else {
echo "No find composer";
}

// App
if (file_exists(__DIR__ . '/../App/autoload.php')) {
    require_once(__DIR__ . '/../App/autoload.php');
}else {
$autoloadPath = __DIR__ . '/../App/autoload.php';
var_dump($autoloadPath);
}
