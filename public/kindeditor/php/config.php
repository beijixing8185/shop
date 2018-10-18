<?php
/*******************************************************
 * 无缓存版
 *------------------------------------------------------
 * 版权所有：
 * 您可以自由使用该源码，但是在使用的过程中，请保留作者信息
 * 尊重\\他人劳动成果就是尊重自己
 *------------------------------------------------------
 * @Auther:Xuweiqiang
 * @Dtime:2014 8 1
********************************************************/
header ( "Content-type: text/html; charset=utf-8" );
//window
//文件保存目录路径
//$save_path = DIRECTORY_SEPARATOR.DIRECTORY_SEPARATOR.'192.168.0.116'.DIRECTORY_SEPARATOR.'images'.DIRECTORY_SEPARATOR;
$save_path = 'http://shop.com/upload';
//文件保存目录URL
//$save_url = 'http://192.168.0.116/';
$save_url = 'http://shop.com/upload/';

//文件保存目录URL
//$save_url = 'http://192.168.0.116/';




//linux
///data/webs/zhipin/public/upload
//$save_path = DIRECTORY_SEPARATOR.'apps'.DIRECTORY_SEPARATOR.'usr'.DIRECTORY_SEPARATOR.'files'.DIRECTORY_SEPARATOR;
//$save_path = DIRECTORY_SEPARATOR.'apps'.DIRECTORY_SEPARATOR.'usr'.DIRECTORY_SEPARATOR.'files'.DIRECTORY_SEPARATOR;
//$save_path = DIRECTORY_SEPARATOR.DIRECTORY_SEPARATOR.'47.93.100.240'.DIRECTORY_SEPARATOR.'data'.DIRECTORY_SEPARATOR.'webs'.DIRECTORY_SEPARATOR.'zhipin'.DIRECTORY_SEPARATOR.'public'.DIRECTORY_SEPARATOR.'upload'.DIRECTORY_SEPARATOR;
//文件保存目录URL
//$save_url = 'http://47.93.100.240/upload/';


//apps/usr/files/


//定义允许上传的文件扩展名
$ext_arr = array(
	'image' => array('gif', 'jpg', 'jpeg', 'png'),
	'flash' => array('swf', 'flv'),
	'media' => array('swf', 'flv', 'mp3', 'wav', 'wma', 'wmv', 'mid', 'avi', 'mpg', 'asf', 'rm', 'rmvb'),
	'file' => array('doc', 'docx', 'xls', 'xlsx', 'ppt', 'htm', 'html', 'txt', 'zip', 'rar', 'gz', 'bz2'),
);

//最大图片大小
$max_size = 300000;

//最大文件大小
$max_file = 5000000;
?>