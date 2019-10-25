<?php
$meehod=$_SERVER['REQUEST_METHOD'];
require '../lib/db.php';
if($meehod=="GET"){
    $gid=$_GET['gid'];
    $sql="SELECT goods.gid,goods.gname,goods.thumb,goods.mprice,goods.sale,goods.stock,goods.banner,goods.detail,goods.create_time,goods.cid,category.cname FROM goods LEFT join category on goods.cid=category.id where goods.gid=$gid";
    $res=$mysql->query($sql)->fetch_assoc();
    require '../view/admin/goodsup.html';

}else {
    $data=$_POST;

    $gid=$data['gid'];
    unset($data['gid']);

    require '../lib/comment.php';
    $str=joinKeysValuses($data);

    $sql="update goods set $str where  gid=$gid";


    $mysql->query($sql);
    $mask = $mysql->affected_rows;

    if($mask>0){
        echo json_encode(['code'=>200,'msg'=>'修改成功']);
    } else{
        echo json_encode(['code'=>404,'msg'=>'修改失败']);
    }
}
