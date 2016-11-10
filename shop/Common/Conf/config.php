<?php
return array(
    //'配置项'=>'配置值'

    //在页面底部设置显示跟踪信息
    'SHOW_PAGE_TRACE' => true,

    //静态文件访问路由路径设置
    //前台
    'CSS_URL'=>'/Home/Public/style/',
    'JS_URL'=>'/Home/Public/js/',
    'IMG_URL'=>'/Home/Public/images/',

    //后台
    'BACK_CSS_URL' => '/Back/Public/css/',
    'BACK_JS_URL' => '/Back/Public/js/',
    'BACK_IMG_URL' => '/Back/Public/img/',

    //配置路径,方便第三方插件访问
    'PLUGIN_URL' =>'/Plugin/',

    //给shop/Common定义访问的路径
    'COMMON_URL' =>'/Common/',

    //定义网站域名地址,方便图片显示
    'SITE_URL' =>'http://web.tpshop.com/',

    /* 数据库设置 */
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'tpshop',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  'root',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  'php41_',    // 数据库表前缀
    'DB_PARAMS'          	=>  array(), // 数据库连接参数
    'DB_DEBUG'  			=>  TRUE, // 数据库调试模式 开启后可以记录SQL日志
    'DB_FIELDS_CACHE'       =>  true,        // 启用字段缓存
    'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8
);