<?php

define('DS', DIRECTORY_SEPARATOR);

// 应用目录为当前目录
define('APP_PATH', dirname(__FILE__).DS);
// 开启调试模式
define('APP_DEBUG', true);
// 网站根URL
define('APP_URL', 'http://1.duoshowba.com');

// 加载框架
require_once (APP_PATH  . 'library' . DS . 'bootstrap.php');
