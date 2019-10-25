<?php

$id=$_POST['gid'];
require '../lib/db.php';
$arr="delete from goods where gid=".$id;
$mysql->query($arr);
//$data=$mysql->query($my);
if($mysql->affected_rows>0){
    echo json_encode([
        'code'=>200,
        'msg'=>"删除成功"
    ]);
}else{
    echo json_encode([
        'code'=>404,
        'msg'=>"删除失败"
    ]);

}