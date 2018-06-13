<?php
/**
 * Created by PhpStorm.
 * User: yuriy
 * Date: 11.06.18
 * Time: 20:10
 */
require __DIR__. "/vendor/autoload.php";

$str = new \Str\Str("This is test string");

$isContains = $str->contains("test");
var_dump($isContains);

$isContains = $str->contains("not exists");
var_dump($isContains);

//просто коментарий
//echo "Initial commit";
