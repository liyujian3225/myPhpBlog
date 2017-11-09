<?php
/**
 * Created by PhpStorm.
 * User: 李雨健
 * Date: 2017/6/22
 * Time: 14:41
 */
function e($params){
    if(is_string($params)){
        echo $params;
    }elseif(is_array($params)){
        echo "<pre>";
        var_dump($params);
        echo "</pre>";
    }
}
