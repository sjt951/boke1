<?php 
namespace Hdphp\Tool;
//创建网站验证码类，不要在老师的基础上面打，重新打

class Code{
	//验证码宽高
	private $width;
	private $height;
	//图像资源
	private $img;
	//背景色
	private $bgColor;
	//字体大小
	private $size;
	//验证码数量
	private $codeLen;
	//验证码种子
	private $seed = 'zxcvbnmasdfghjklqwertuiop1234567890';
	/**
	 * 构造函数
	 */
	public function __construct($codeLen=NULL,$width=NULL,$height=NULL,$bgColor=NULL,$size=NULL,$fontfile = NULL){
		//验证码宽高
		$this->width = is_null($width) ? 120 : $width;
		$this->height = is_null($height) ? 40 : $height;
		//背景颜色
		$this->bgColor = is_null($bgColor) ? '#ffffff' : $bgColor;
		//字体大小
		$this->size = is_null($size) ? C('CODE_SIZE') : $size;
		//字体长度
		$this->codeLen = is_null($codeLen) ? C('CODE_LEN') : $codeLen;
		//字体文件
		$this->fontfile = is_null($fontfile) ? 'Hdphp/Tool/font.ttf' : $fontfile;
	}
	/**
	 * 显示验证码
	 */
	public function show(){
		//1.发送头部
		header('Content-type:image/png');
		//2.创建画布，配色填充
		$this->_createBg();
		//3.写字
		$this->_write();
		//4.干扰
		$this->_makeTrouble();
		//5.显示，并且销毁
		imagepng($this->img);
		imagedestroy($this->img);
		
	}
	private function _makeTrouble(){
		for ($i=0; $i < 100; $i++) {
			//颜色
			$color = imagecolorallocate($this->img, mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255)); 
			imagesetpixel($this->img, mt_rand(0, $this->width), mt_rand(0, $this->height), $color);
		}
		
		for ($i=0; $i < 5; $i++) { 
			//颜色
			$color = imagecolorallocate($this->img, mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255)); 
			imageline($this->img, mt_rand(0, $this->width), mt_rand(0, $this->height), mt_rand(0, $this->width), mt_rand(0, $this->height), $color);
		}
		
		
		
	}
	private function _write(){
		$code = '';
		for ($i=0; $i < $this->codeLen; $i++) { 
			//每一个字的x坐标
			$x = $this->width / $this->codeLen * $i + 10;
			//每一个字的y坐标
			$y = ($this->size + $this->height) / 2;
			//颜色
			$color = imagecolorallocate($this->img, mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255));
			//具体写入的字
			$text = $this->seed[mt_rand(0, strlen($this->seed)-1)];
			$code .= $text;
			imagettftext($this->img, $this->size, mt_rand(-45, 45), $x, $y, $color, $this->fontfile, $text);
		}
		//存入session,为了后面可以比对
		//转大写存入是为了提交验证码不区分大小写
		$_SESSION['code'] = strtoupper($code);
		
		
	}
	/**
	 * 创建背景
	 */
	private function _createBg(){
		$img = imagecreatetruecolor($this->width, $this->height);
		//把16进制颜色转换为10进制颜色
		//因为imagefill 就是需要10进制颜色
		$bgColor = hexdec($this->bgColor);
		imagefill($img, 0, 0, $bgColor);
		
		//保存到属性中，为了其他方法可以调用
		$this->img = $img;
	}
	
}






 ?>