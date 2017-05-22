<?php
/**
 * 入口
 *
 *
 *
 * by 33hao 好商城V3  www.haoid.cn 开发
 */
//favicon.ico
//strtolower 都变成小写 |strtoupper 大写
//substr
//strrpos strpos
//echo  $_SERVER['HTTP_HOST']; localhost
//echo $_SERVER['PHP_SELF'];  index.php
$site_url = strtolower('http://'.$_SERVER['HTTP_HOST'].substr($_SERVER['PHP_SELF'], 0, strrpos($_SERVER['PHP_SELF'], '/index.php')).'/shop/index.php');
//@header('Location: '.$site_url);
include('shop/index.php');
//include 'shop/index.php';
//include ('');
//echo exit同样

