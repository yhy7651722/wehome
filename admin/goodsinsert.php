<?php
require '../lib/db.php';
$meehod=$_SERVER['REQUEST_METHOD'];
if($meehod==="GET"){
    $sql='select * from category order  by id desc ';
    $res=$mysql->query($sql)->fetch_all(MYSQLI_ASSOC);
    require '../view/admin/goodsinsert.html';
}else{

    require'../lib/comment.php';
    $data=$_POST;

    date_default_timezone_set('PRC');
    $data['create_time']=date('Y-m-d h:i:s');
    $keys=joinKeys($data);
    $value=joinValues($data);
    $sql="insert into goods ($keys)values($value)";


    $mysql->query($sql);
    if($mysql->affected_rows>0){
        echo json_encode([
            'code'=>200,
            'msg'=>"添加成功"
        ]);
    }else{
        echo json_encode([
            'code'=>404,
            'msg'=>"添加失败"
        ]);
    }


}