<?php
//展示页面  获取数据
require '../lib/db.php';
$sql='select * from new order by id desc';
$res=$mysql->query($sql)->fetch_all(MYSQLI_ASSOC);
require '../view/admin/newselect.html';