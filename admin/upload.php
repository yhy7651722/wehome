<?php
$file=$_FILES['file'];


//name=>''上传文件名字
//type=>''类型
//tmp_name=>''临时路进
//error=>状态码 0
//size=>12334  B
//
//tmp_name->uploads/20190927/xx.png

if(!is_dir('../uploads')){
    mkdir('../uploads');

}
$data=date('Ymd');
if(!is_dir('../uploads/'.$data)){
    mkdir('../uploads/'.$data);
}
$imgnage=time().mt_rand(0,1000);
//$ext=explode('/',$file['type']);
//$ext=array_pop($ext);
$ext= substr($file['type'],'6');
$imgnage.='.'.$ext;
$movepath='/wehome/uploads/'.$data.'/'.$imgnage;

$webpath='../uploads/'.$data.'/'.$imgnage;
$result=move_uploaded_file($file['tmp_name'],$webpath);
if($result){

    echo  json_encode([
        'code'=>200,
        'msg'=>"上传成功",
        'src'=>$movepath

    ]);

}else{
    echo  json_encode(
        [
            'code'=>404,
            'msg'=>"上传失败",

        ]
    );
}



