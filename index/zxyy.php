<?php
    require '../lib/db.php';
    $data=$_POST;

    require'../lib/comment.php';


    $mysql->query('set names utf8');
    $keys=joinKeys($data);

    $value=joinValues($data);
    $sql="insert into sub ($keys)values($value)";



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