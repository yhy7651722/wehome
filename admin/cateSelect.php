<?php
require '../lib/db.php';
$sql='select * from category order  by id desc ';
$res=$mysql->query($sql)->fetch_all(MYSQLI_ASSOC);
require '../view/admin/cateSelect.html';
/**
 * Created by PhpStorm.
 * User: yhy
 * Date: 2019/9/27
 * Time: 10:39
 */