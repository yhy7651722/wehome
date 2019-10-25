<?php
require '../lib/db.php';
$sql='select goods.*,category.cname from goods left join category on goods.cid=category.id';
//$sql='select * from goods ';
$res=$mysql->query($sql)->fetch_all(MYSQLI_ASSOC);
require '../view/admin/goodsselect.html';