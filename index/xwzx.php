<?php

$id=$_GET['id'];

require '../lib/db.php';
$sql="select * from new where id=$id";
$new3=$mysql->query($sql)->fetch_assoc();

$prevsql="select id,nname from new where id<$id order by id desc limit 0,1";
$prevgoods=$mysql->query($prevsql)->fetch_assoc();
$prevstr='';
if($prevgoods){
    $prevstr="<a href='xwzx.php?id={$prevgoods['id']}'>{$prevgoods['nname']} </a>";
}else{
    $prevstr="<a>没有了</a>";
}
$prevsqll="select id,nname from new where id>$id order by id asc limit 0,1";
$prevgoodsl=$mysql->query($prevsqll)->fetch_assoc();
$prevstrl='';
if($prevgoodsl){
    $prevstrl="<a href='xwzx.php?id={$prevgoodsl['id']}'>{$prevgoodsl['nname']} </a>";
}else{
    $prevstrl="<a>没有了</a>";
}

require 'header.php';
require '../view/index/news3.html';
require 'footer.php';
