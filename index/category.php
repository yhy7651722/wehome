<?php
//1对多


require '../lib/db.php';
$id=$_GET['id'];
require '../index/header.php';
$sql=$sql="select * from nav where id=$id";
$nav=$mysql->query($sql)->fetch_assoc();

$tpl=$nav['ntpl'];

$is=file_exists('../view/index/'.$tpl.'.html');
if($is){


    require '../view/index/'.$tpl.'.html';
    require '../index/footer.php';
}else{

}
