<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/config.php';

if (PHP_VERSION_ID < 70100) {
    require __DIR__ . '/php_compat_5.php';
} else {
    require __DIR__ . '/php_compat_7.php';
}
