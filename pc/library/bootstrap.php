<?php
// 初始化常量
defined('FRAME_PATH') or define('FRAME_PATH', __DIR__. DS );
defined('APP_PATH') or define('APP_PATH', dirname($_SERVER['SCRIPT_FILENAME']).DS);
defined('APP_DEBUG') or define('APP_DEBUG', false);
defined('CONFIG_PATH') or define('CONFIG_PATH', APP_PATH.'config'.DS);
defined('RUNTIME_PATH') or define('RUNTIME_PATH', APP_PATH.'tmp'.DS);

// 包含配置文件
require_once (APP_PATH  . 'config' . DS . 'config.php');
// 包含核心框架类
require_once (FRAME_PATH . 'Core.php');

// 实例化核心类
$fast = new Core;
$fast->run();