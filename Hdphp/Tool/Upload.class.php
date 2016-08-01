<?php 
namespace Hdphp\Tool;
class Upload{
  //保存错误的信息
  public $error;
  //上传目录
  private $path;
  
  public function __construct($path=NULL){
    //如果用户没有传参，默认就是Upload目录
    $this->path = is_null($path) ? './Upload/' : $path;
  }
  
  /**
   * 上传
   */
  public function up(){
    //1.重组数据
    $arr = $this->_resetArr();
    //2.筛选判断(只要有一个不成立，就不让上传)
    foreach ($arr as $v) {
      if(!$this->_filter($v)){
        return false;
      }
    }
    $pathArr = array();
    //3.移动上传
    foreach ($arr as $v) {
      //会把move之后的完整路径压入到$pathArr
      $pathArr[] = $this->_move($v);
    }
    //返回上传完成之后的路径，因为这些路径将来要存入数据库
    return $pathArr;
  }
  /**
   * 移动上传
   */
  private function _move($v){
    $type = ltrim(strrchr($v['name'], '.'),'.');
    $fileName = time() . mt_rand(0, 9999) . '.' . $type;
    $path = $this->path;
    is_dir($path) || mkdir($path,0777,true);
    $fullPath = $path . $fileName;
    move_uploaded_file($v['tmp_name'], $fullPath);
    //返回上传之后完整的路径
    return $fullPath;
  }
  /**
   * 筛选判断
   */
  private function _filter($v){
    $type = ltrim(strrchr($v['name'], '.'),'.');
    switch (true) {
      //1.是否没有文件上传
      case $v['error'] == 4:
        $this->error = '没有文件被上传';
        return false;
      //2.是否是一个合法的上传文件
      case !is_uploaded_file($v['tmp_name']):
        $this->error = '不是一个合法的上传文件';
        return false;
      //3.类型是否允许
      case !in_array($type, array('jpg','png','gif')):
        $this->error = '类型不允许';
        return false;
      //4.大小是否允许
      
      //5.error的几种错误
      
      default:
        return true;
    }
    
    

  }
  /**
   * 重组数组
   */
  private function _resetArr(){
    //定义临时数组
    $temp = array();
    foreach ($_FILES as $v) {
      //如果是多文件上传，因为多文件上传$v['name']是一个数组
      if(is_array($v['name'])){
        foreach ($v['name'] as $key => $value) {
          $temp[] = array(
            'name' => $value,
            'type' => $v['type'][$key],
            'tmp_name'=> $v['tmp_name'][$key],
            'error'=> $v['error'][$key],
            'size'=> $v['size'][$key],
          );
        }
      }else{
        //否则就是单文件上传
        $temp[] = $v;
      }
      
    }
    return $temp;
  }
  
  
  
  
  
  
}