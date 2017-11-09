<?php
/**
 * Created by PhpStorm.
 * User: 李雨健
 * Date: 2017/6/22
 * Time: 15:13
 */
class route{
    private static $d;
    private static $f;
    private static $m;
    public function info(){
        $this->getInfo();
    }
    private static function getInfo(){
        self::$d=isset($_REQUEST['d'])&&!empty($_REQUEST['d'])?$_REQUEST['d']:'index';
        self::$f=isset($_REQUEST['f'])&&!empty($_REQUEST['f'])?$_REQUEST['f']:'index';
        self::$m=isset($_REQUEST['m'])&&!empty($_REQUEST['m'])?$_REQUEST['m']:'init';
        $fullpath=MODULE_PATH.self::$d.'/';
        if(is_dir($fullpath)){
            $file=$fullpath.self::$f.'.class.php';
            if(is_file($file)){
                include $file;
                if(class_exists(self::$f)){
                    $Obj=new self::$f();
                    if(method_exists(self::$f,self::$m)){
                        $method=self::$m;
                        $Obj->$method();
                    }else{
                        e('方法不存在');
                    }
                }
                else{
                    e('类不存在');
                }
            }else{
                e('文件不存在');
            }
        }else{
            e('该路径不存在');
        }
    }
}