<?php
/**
 * Created by PhpStorm.
 * User: 李雨健
 * Date: 2017/6/27
 * Time: 10:04
 */
class main{
    function __construct(){
        $smarty=new Smarty();
        $smarty->setCompileDir("compile");
        $smarty->setTemplateDir("template");
        $this->smarty=$smarty;
        $this->session=new session();
    }
    function jump($message,$url){
        echo "<script>alert('{$message}');location.href='{$url}'</script>";
    }
}