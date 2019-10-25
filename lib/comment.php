<?php
//链接数组的属性
function joinKeys($arr){
    $str='';
    foreach ($arr as $key=>$value){
        $str.=$key.',';
    }
    $str=substr($str,0,-1);
    return $str;

}

//链接数组的元素
function joinValues($arr){
    $str='';
    foreach ($arr as $key=>$value){
        $str.="'$value',";
    }
    $str=substr($str,0,-1);
    return $str;

}
//拼接一个
function joinKeysValuses($arr){
    $str='';
    foreach ($arr as $key=>$value){
       $str.= "$key='$value',";
    }
    $str=substr($str,0,-1);
    return $str;
}
