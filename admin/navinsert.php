<?php
$meehod=$_SERVER['REQUEST_METHOD'];
if($meehod==="GET"){
    require '../view/admin/navinsert.html';
}else{
    $data=$_POST;
    require'../lib/comment.php';
    $mysql=new mysqli("localhost","root","","huanfang",3306);
    if($mysql->connect_errno){
        echo "数据库连接失败，错误为".$mysql->connect_errno;
        exit();
    }

    $mysql->query('set names utf8');
    $keys=joinKeys($data);
    $value=joinValues($data);
    $sql="insert into nav ($keys)values($value)";

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