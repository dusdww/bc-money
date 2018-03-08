<?php

define('DS', DIRECTORY_SEPARATOR);

// 应用目录为当前目录
define('APP_PATH', dirname(__FILE__).DS);
// 开启调试模式
define('APP_DEBUG', false);
// 网站根URL
define('APP_URL', 'http://1.duoshowba.com');

define('APP_CARD_URL', 'https://rover.ebay.com/rover/1/711-217589-60653-1/4?kw=BC_CHANNEL_CODE&ff11=GBH_45&PARM3_ID=GBH_45&mpre=');
define('APP_CHANNEL_CODE', 'BC_CHANNEL_CODE');

// 加载框架
require_once (APP_PATH  . 'library' . DS . 'bootstrap.php');
