<?php
$id=$_GET['gid'];

require '../lib/db.php';
$sql="select * from goods where gid=$id";
$goods=$mysql->query($sql)->fetch_assoc();

$prevsql="select gid,gname from goods where gid<$id order by gid desc limit 0,1";
$prevgoods=$mysql->query($prevsql)->fetch_assoc();
$prevstr='';
if($prevgoods){
    $prevstr="<a href='goodsxq.php?gid={$prevgoods['gid']}'>{$prevgoods['gname']} </a>";
}else{
    $prevstr="<a>没有了</a>";
}
$prevsqll="select gid,gname from goods where gid>$id order by gid asc limit 0,1";
$prevgoodsl=$mysql->query($prevsqll)->fetch_assoc();
$prevstrl='';
if($prevgoodsl){
    $prevstrl="<a href='goodsxq.php?gid={$prevgoodsl['gid']}'>{$prevgoodsl['gname']} </a>";
}else{
    $prevstrl="<a>没有了</a>>";
}

require 'header.php';
require '../view/index/goodsxq.html';
require 'footer.php';

