<?php
//$psd=123456;
//$a = md5($psd);
//$b = crypt($psd,md5($psd));
//echo $b;
//1展示登陆的界面  2验证
//请求方式 GET  POST
$method=$_SERVER['REQUEST_METHOD'];
if($method==='GET'){
    require '../view/admin/login.html';
}else{
    $username=$_POST['username'];
    $password = crypt($_POST['password'], md5($_POST['password'])); //加密的密码
    $mysqli = new mysqli("localhost","root","","huanfang",'3306');
    $mysqli->query("set names utf8");

    if( $mysqli->connect_errno){
        echo "数据库链接失败".$mysqli->connect_error;
        exit();
    }
    $sql="select* from manage where username='$username'";
    $res=$mysqli->query($sql)->fetch_all(MYSQLI_ASSOC);

    $count=count($res);
    if($count){
        for($i=0;$i<$count;$i++){
            if ($res[$i]['password'] === $password){
                echo json_encode(['code'=>200,'msg'=>'登陆成功']);
                exit();
            }
            echo json_encode(['code'=>404,'msg'=>'用户名在和登陆密码不匹配']);
        }

    }
    else{
        echo json_encode(['code'=>404,'msg'=>'用户不存在']);
    }

}
