<?php
//include_once("Loader\ClassLoader.php");
include_once(__DIR__."/Loader/ClassLoader.php");
//$temp = ___DIR__."/Loader/ClassLoader.php";
//echo $temp;exit;
\Loader\ClassLoader::getInstance()->init();
\Loader\Route::getInstance()->init();
?>