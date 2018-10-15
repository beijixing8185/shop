<?php
/**
 * KindEditor PHP
 *
 * 本PHP程序是演示程序，建议不要直接在实际项目中使用。
 * 如果您确定直接使用本程序，使用之前请仔细确认相关安全设置。
 *
 */
require_once 'JSON.php';
require_once 'slt.php';
require_once 'config.php';

//PHP上传失败
if (!empty($_FILES['imgFile']['error'])) {
	switch($_FILES['imgFile']['error']){
		case '1':
			$error = '上传图片大小超过限制，当前限制为300KB。';
			break;
		case '2':
			$error = '超过表单允许的大小。';
			break;
		case '3':
			$error = '图片只有部分被上传。';
			break;
		case '4':
			$error = '请选择图片。';
			break;
		case '6':
			$error = '找不到临时目录。';
			break;
		case '7':
			$error = '写文件到硬盘出错。';
			break;
		case '8':
			$error = 'File upload stopped by extension。';
			break;
		case '999':
		default:
			$error = '未知错误。';
	}
	alert($error);
}

//有上传文件时
if (empty($_FILES) === false) {
	//原文件名
	$file_name = $_FILES['imgFile']['name'];
	//服务器上临时文件名
	$tmp_name = $_FILES['imgFile']['tmp_name'];
	//文件大小
	$file_size = $_FILES['imgFile']['size'];
	//检查目录名
	$dir_name = empty($_GET['dir']) ? 'image' : trim($_GET['dir']);
	//CreatMiniature($file_name,$tmp_name,'','');
	//检查文件名
	if (!$file_name) {
		alert("请选择文件。");
	}
	//检查目录   
	if (@is_dir($save_path) === false) {
		alert("上传目录不存在。");
	}
	//检查目录写权限
	if (@is_writable($save_path) === false) {
		alert("上传目录没有写权限。");
	}
	//检查是否已上传
	if (@is_uploaded_file($tmp_name) === false) {
		alert("上传失败。");
	}
	//检查图片大小
	if ($file_size > $max_size && $dir_name==='image') {
		alert("上传图片大小超过限制，当前限制为300KB。");
	}

	//检查文件大小
	if ($file_size > $max_file && $dir_name==='file') {
		alert("上传文件大小超过限制。");
	}

	//niuxueting add begin 2014.7.31
	//检查分类目录名
	$imageType_name = empty($_POST['imageType']) ? alert("图片类型不存在。") : trim($_POST['imageType']);

	//检查对象目录名
	//$objectCode_name = empty($_POST['objectCode']) ? 'image' : trim($_POST['objectCode']);

	//是否是有编辑器生成的图片
	$detail_name     = empty($_POST['upType']) ? 'list' : trim($_POST['upType']);

	//是否生成缩略图
	$is_thumbs = empty($_POST['isthumbs']) ? '0' : trim($_POST['isthumbs']);

	//生成缩略图宽
	$width = empty($_POST['width']) ? '800' : trim($_POST['width']);

	//生成缩略图高
	$height = empty($_POST['height']) ? '800' : trim($_POST['height']);

	//生成小缩略图宽
	$smallwidth = empty($_POST['smallwidth']) ? '100' : trim($_POST['smallwidth']);

	//生成小缩略图高
	$smallheight = empty($_POST['smallheight']) ? '100' : trim($_POST['smallheight']);

	//生成中缩略图宽
	$middlewidth = empty($_POST['middlewidth']) ? '380' : trim($_POST['middlewidth']);

	//生成中缩略图高
	$middleheight = empty($_POST['middleheight']) ? '380' : trim($_POST['middleheight']);

	//niuxueting add end

	/*if (empty($ext_arr[$dir_name])) {
		alert("目录名不正确。");
	}*/
	//获得文件扩展名
	$temp_arr = explode(".", $file_name);
	$file_ext = array_pop($temp_arr);
	$file_ext = trim($file_ext);
	$file_ext = strtolower($file_ext);
	//检查扩展名
	if (in_array($file_ext, $ext_arr[$dir_name]) === false) {
		alert("上传文件扩展名是不允许的扩展名。\n只允许" . implode(",", $ext_arr[$dir_name]) . "格式。");
	}
	//创建文件夹
	if ($dir_name !== '') {
		$save_path .= $dir_name . DIRECTORY_SEPARATOR;
		$save_url .= $dir_name . '/';
		if (!file_exists($save_path)) {
			mkdir($save_path);
		}
	}
	//niuxueting add begin 2014.7.31
	//创建分类文件夹
	if ($imageType_name !== '') {
		$save_path .= $imageType_name . DIRECTORY_SEPARATOR;
		$save_url .= $imageType_name .'/';
		if (!file_exists($save_path)) {
			mkdir($save_path);
		}
	}

	//创建对象文件夹
	/*if ($objectCode_name !== '') {
		$save_path .= $objectCode_name . DIRECTORY_SEPARATOR;
		$save_url .= $objectCode_name .'/';
		if (!file_exists($save_path)) {
			mkdir($save_path);
		}
	}*/
	//创建具体分类文件夹（编辑器还是直接上传）
	if ($detail_name !== '') {
		$save_path .= $detail_name . DIRECTORY_SEPARATOR;
		$save_url .= $detail_name .'/';
		if (!file_exists($save_path)) {
			mkdir($save_path);
		}
	}
	//niuxueting add end
	//新文件名
	$new_file_name = date("YmdHis") . '_' . rand(10000, 99999) . '.' . $file_ext;
	//alert($file_ext);
	//移动文件
	$file_path = $save_path . $new_file_name;
	if (move_uploaded_file($tmp_name, $file_path) === false) {
		alert("上传文件失败。");
	}
	//niuxueting add begin 2014.7.31

	//创建缩略图
	if($is_thumbs !=='0' && $_GET['dir']==='image')
	{
		$save_bigurl    = '';
		$save_middleurl = '';
		$save_smallurl  = '';
		//生成大缩略图文件夹
		$save_big     = $save_path."big";
		$save_bigurl .= $save_url."big";
		if (!file_exists($save_big)) {
				mkdir($save_big);
			}
		$news_img = $save_big.DIRECTORY_SEPARATOR."big_".$new_file_name;
		//生成中缩略图文件夹
		$save_middle     = $save_path."middle";
		$save_middleurl .= $save_url."middle";
		if (!file_exists($save_middle)) {
				mkdir($save_middle);
			}
		 $middle_img = $save_middle.DIRECTORY_SEPARATOR."middle_".$new_file_name;
		//生成小缩略图文件夹
		$save_small     = $save_path."small";
		$save_smallurl .= $save_url."small";
		if (!file_exists($save_small)) {
				mkdir($save_small);
			}
		 $small_img = $save_small.DIRECTORY_SEPARATOR."small_".$new_file_name;
		 //调整图像大小
		 if($file_ext==="jpg"||$file_ext==="jpeg"||$file_ext==="JPG"||$file_ext==="JPEG"){
			 $image = imagecreatefromjpeg($file_path);
			 $newim = PIPHP_ImageResize($image,$width ,$height);
			 imagejpeg($newim, $news_img);
			 $newimm = PIPHP_ImageResize($image,$middlewidth ,$middleheight);
			 imagejpeg($newimm, $middle_img);
			 $newims = PIPHP_ImageResize($image,$smallwidth ,$smallheight);
			 imagejpeg($newims, $small_img);
		 }else if($file_ext==="png" || $file_ext==="PNG"){
			 $image = imagecreatefrompng($file_path);
			 $newim = PIPHP_ImageResize($image,$width ,$height);
			 imagepng($newim, $news_img);
			 $newimm = PIPHP_ImageResize($image,$middlewidth ,$middleheight);
			 imagepng($newimm, $middle_img);
			 $newims = PIPHP_ImageResize($image,$smallwidth ,$smallheight);
			 imagepng($newims, $small_img);
		 }else if($file_ext==="gif" || $file_ext==="GIF"){
			 $image = imagecreatefromgif($file_path);
			 $newim = PIPHP_ImageResize($image,$width ,$height);
			 imagegif($newim, $news_img);
			 $newimm = PIPHP_ImageResize($image,$middlewidth ,$middleheight);
			 imagegif($newimm, $middle_img);
			 $newims = PIPHP_ImageResize($image,$smallwidth ,$smallheight);
			 imagegif($newims, $small_img);
		 }
	}
	//niuxueting add end
	@chmod($file_path, 0644);
	$file_url = $save_url . $new_file_name;

	header('Content-type: text/html; charset=UTF-8');
	$json = new Services_JSON();
	echo $json->encode(array('error' => 0, 'url' => $file_url));
	exit;
}

function alert($msg) {
	header('Content-type: text/html; charset=UTF-8');
	$json = new Services_JSON();
	echo $json->encode(array('error' => 1, 'message' => $msg));
	exit;
}