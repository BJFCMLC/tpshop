<?php
/**
 * Created by PhpStorm.
 * User: wangchao
 * Date: 2016/10/3
 * Time: 20:18
 */

header("content-type:text/html;charset=utf-8");

//调试模式,生产模式
define('APP_DEBUG',true); //开启调试模式(所有文件都会加载,一共20多个)
//define('APP_DEBUG',false); //开启生产模式(有一部分文件会通过缓存文件开启,这样我们配置的文件有加载不进来)

//引入tp框架的接口文件
include("../ThinkPHP/ThinkPHP.php");