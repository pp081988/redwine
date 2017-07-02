<?php
define("SP_PATH",dirname(__FILE__)."/SpeedPHP");
define("APP_PATH",dirname(__FILE__));
//ini_set("display_errors", 0);
$spConfig = array(
    'db' => array( // 数据库设置
        'driver' => 'mysqli',
        'host'     => 'localhost',  // 数据库地址，一般都可以是localhost
        'login'    => 'root', // 数据库用户名
        'password' => 'dglt#?19', // 数据库密码
        'database' => 'redwine', // 数据库的库名称
    ),

    'view' => array(
        'enabled' => TRUE, // 开启Smarty
        'config' =>array(
            'template_dir' => APP_PATH.'/tpl', // 模板存放的目录
            'compile_dir' => APP_PATH.'/tmp', // 编译的临时目录
            'cache_dir' => APP_PATH.'/tmp', // 缓存的临时目录
            'left_delimiter' => '<{',  // smarty左限定符
            'right_delimiter' => '}>', // smarty右限定符
            //'allow_php_tag' => TRUE, //开启{php},可在模板中定php代码
        ),
    ),
    'lang' => array( //   多语言设置
        'en' => APP_PATH.'/language/en.php',  // en的语言是通过字典文件翻译，这里是字典文件的路径。
        'tw' => 'default', //
    ),
    'debugging' => TRUE,
    'mode' => 'debug',
);
require(SP_PATH."/SpeedPHP.php");
spRun();