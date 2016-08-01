<?php
/**
 * [smarty_block_user description]
 * @param  [type] $params  [user标签里面的参数 rows]
 * @param  [type] $content [user标签包裹的内容]
 * @param  [type] &$smarty [smarty对象，不用管它]
 * @return [string]        [反出组合好的字符串]
 */
function smarty_block_user($params, $content, &$smarty){
    //rows 是代表用户要取得几条，如果用户没有传递，那么就取得所有的数据
    $rows = isset($params['rows']) ? $params['rows'] : NULL;
    //连接数据库
    $mysqli = @new Mysqli('127.0.0.1','root','','c51');
    $mysqli->query("SET NAMES UTF8");
    if($rows){
        $sql = "SELECT * FROM user LIMIT {$rows}";
    }else{
        $sql = "SELECT * FROM user";
    }
    $result = $mysqli->query($sql);
    $rows = array();
    while ($row = $result->fetch_assoc()) {
        $rows[] = $row;
    }

    $str = '';
    foreach ($rows as $v) {
        // Array $v
        // (
        //     [uid] => 1
        //     [username] => admin
        //     [password] => 21232f297a57a5a743894a0e4a801fc3
        // )
        $c = $content;
        foreach ($v as $field => $value) {
            //搜索$content内容里面的$f.uid和$f.username,替换成相对应的值
           $c = str_replace("<\$f.{$field}>", $value, $c);
        }
       $str .= $c;
    }
    return $str;


          







}

/* vim: set expandtab: */

?>
