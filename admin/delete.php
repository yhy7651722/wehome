<?php
$student=$_POST;
$id=$student['id'];
$mysql=new mysqli("localhost","root","","huanfang",3306);
if($mysql->connect_errno){
    echo "数据库连接失败".$mysql->connect_errno;
    exit();
}
$mysql->query("set names utf8");
$arr="delete from nav where id=".$id;
$mysql->query($arr);

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
