<?php

function smarty_modifier_truncate_d($string,$len=20,$etc='...')
{
	$newStr = mb_substr($string, 0,$len,'utf-8');
	//如果截取的长度大于字符串长度
	if($len>=mb_strlen($string)){
		return $newStr;
	}else{
		return $newStr . $etc;
	}
   
}

?>
