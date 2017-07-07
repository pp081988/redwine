<?php
define("SP_PATH",dirname(__FILE__)."/SpeedPHP");
define("APP_PATH",dirname(__FILE__));
//ini_set("display_errors", 0);
$spConfig = array(
    'db' => array( // 数据库设置
        'driver' => 'mysqli',
        'host'     => 'sqld-gz.bcehost.com',  // 数据库地址，一般都可以是localhost
        'login'    => 'd8cc1e2311e04d0981c52e55069f3369', // 数据库用户名
        'password' => '2353a3ef0ef84e2a860d54568bc49ed6', // 数据库密码
        'database' => 'KIYRfNUbThSCxsCaYPzL', // 数据库的库名称
    ),
    // 'launch' => array( // 加入挂靠点，以便开始使用Url_ReWrite的功能
    //     'router_prefilter' => array( 
    //             array('spUrlRewrite', 'setReWrite'),  // 对路由进行挂靠，处理转向地址
    //         ),
    //     'function_url' => array(
    //             array("spUrlRewrite", "getReWrite"),  // 对spUrl进行挂靠，让spUrl可以进行Url_ReWrite地址的生成
    //         ),
    // ),
    //  'ext' => array(
    //     'spUrlRewrite' => array(
    //         'suffix' => '.html', 
    //         'sep' => '_', 
    //         'map' => array( 
    //             'search' => 'main@search',
    //              '@' => 'main@no'   
    //         ),
    //         'args' => array(
    //              'search' => array('q','page'), 
    //         ),
    //     ),
    // ),
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
import(APP_PATH."/model/filter.php");
import(APP_PATH."/model/random.php");
spRun();