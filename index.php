<?php
header("content-type:text/html;charset=utf8");
/**
 * Created by PhpStorm.
 * User: 李雨健
 * Date: 2017/6/22
 * Time: 11:53
 */
define('INDEX','index');
$server=$_SERVER;
//文件路径的设置
//本地文件的根目录
define("ROOT_PATH",$server['DOCUMENT_ROOT']);
//项目文件的根目录
define("APP_PATH",ROOT_PATH.'PHP'.'/MVC/');
//lib的根目录
define('LIB_PATH',APP_PATH.'libs/');
define('MODULE_PATH',APP_PATH.'module/');
define('TPL_PATH',APP_PATH.'template/');

//服务器路径的设置
//服务器路径 http动态获取
$proto=substr($server['SERVER_PROTOCOL'],0,strrpos($server['SERVER_PROTOCOL'],'/'));
define('HTTP_PATH',$proto."://".$server['HTTP_HOST'].substr($server['PHP_SELF'],0,strrpos($server['PHP_SELF'],'/')).'/');
//csspath
define('CSS_PATH',HTTP_PATH.'static/css/');
//imgpath
define('IMG_PATH',HTTP_PATH.'static/img/');
//jspath
define('JS_PATH',HTTP_PATH.'static/js/');
//selfpath当前的文件
define('SELF_PATH',$proto."://".$server['HTTP_HOST'].$server['PHP_SELF']);
//lib服务器路径
define('LIBS_PATH',HTTP_PATH.'libs/');

require_once LIB_PATH."functions.php";
require_once LIB_PATH."route.class.php";
require_once LIB_PATH."db.class.php";
require_once LIB_PATH.'smarty'.'/'."Smarty.class.php";
require_once LIB_PATH.'code.class.php';
require_once LIB_PATH.'main.class.php';
require_once LIB_PATH.'indexMain.class.php';
require_once LIB_PATH.'session.class.php';
require_once LIB_PATH.'tree.class.php';
require_once LIB_PATH.'upload.class.php';
require_once LIB_PATH.'page.class.php';


$routeObj=new route();
$routeObj->info();








