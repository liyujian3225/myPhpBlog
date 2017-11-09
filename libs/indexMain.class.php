<?php
/**
 * Created by PhpStorm.
 * User: 李雨健
 * Date: 2017/6/28
 * Time: 18:45
 */
class indexMain{
    function  __construct()
    {
        $smarty=new Smarty();
        $smarty->setCompileDir("compile");
        $smarty->setTemplateDir("template/index");
        $this->smarty=$smarty;
        $this->session=new session();
    }
    function jump($message,$url){
        echo "<script>alert({$message});location.href={$url}</script>";
    }
}