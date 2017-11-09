<?php
/**
 * Created by PhpStorm.
 * User: 李雨健
 * Date: 2017/6/23
 * Time: 14:58
 */
//该文件为smarty的原理文件，没有引入整个项目中，跟它同一路径的smarty文件夹为官方的smarty文件，项目采用官方的smarty
class Smarty{
    public $compileDir='compile';
    public $templateDir='template';
    function setcompileDir($dir){
        $this->compileDir=$dir;
        if(!is_dir($this->compileDir)){
            mkdir($this->compileDir);
        }
    }
    function settemplateDir($dir){
        $this->templateDir=$dir;
        if(!is_dir($this->templateDir)){
            mkdir($this->templateDir);
        }
    }
    function assign($attr,$value){
        $this->arr[$attr]=$value;
    }
    function display($file){
        $url=$this->templateDir.'/'.$file;
        $con=file_get_contents($url);
        $str=preg_replace('/\{([\s\S]+)\}/','123',$con);
        $url1=$this->compileDir.'/'.'index.php';
        file_put_contents($url1,$str);
        include_once $url1;
    }
}