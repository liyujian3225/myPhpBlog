<?php
/**
 * Created by PhpStorm.
 * User: 李雨健
 * Date: 2017/6/27
 * Time: 17:31
 */
class session{
    function  __construct()
    {
        session_start();
    }
    function set($attr,$val){
        $_SESSION[$attr]=$val;
    }
    function get($attr){
        return isset($_SESSION[$attr])?$_SESSION[$attr]:null;
    }
    function del($attr){
        unset($_SESSION[$attr]);
    }
    function clear(){
        foreach($_SESSION as $a=>$v){
            unset($_SESSION[$a]);
            unset($_SESSION[$v]);
        }
    }

}