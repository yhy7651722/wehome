<?php


$value=$_POST["value"];
$type=$_POST["type"];
$id=$_POST["id"];
//连接数据库
require "../lib/db.php";
$sql = "update sub set $type='$value' where id=$id";
$mysql->query($sql);
$mask = $mysql->affected_rows;

if($mask>0){
    echo json_encode(['code'=>200,'msg'=>'修改成功']);
} else{
    echo json_encode(['code'=>404,'msg'=>'修改失败']);
}
