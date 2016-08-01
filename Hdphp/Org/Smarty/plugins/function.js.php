<?php

function smarty_function_js($params, &$smarty){
    $str = <<<str
<script type="text/javascript" src="{$params['file']}"></script>
str;
    return $str;
}


?>
