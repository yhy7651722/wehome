<?php
$mysql=new mysqli("localhost","root","","huanfang",3306);
if($mysql->connect_errno){
    echo "数据库连接失败，错误为".$mysql->connect_errno;
    exit();
}

$mysql->query('set names utf8');