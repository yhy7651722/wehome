<?php
$password='12345678';
$passwords=md5(crypt($password,md5('wehome')));
echo $passwords;



/**
 * Created by PhpStorm.
 * User: yhy
 * Date: 2019/9/25
 * Time: 11:18
 */