<?php
/**
 * Created by PhpStorm.
 * User: 李雨健
 * Date: 2017/6/27
 * Time: 10:35
 */
class code{
    function  __construct()
    {
        header('content-type:image/png,charset=utf8');
        $this->strcode='';
        $this->re=imagecreatetruecolor(150,50);
        $this->seed="qwertyuipasdfghjkzxcvbnm23456789";
    }
    private function lightColor(){
        $lightcolor=imagecolorallocate($this->re,mt_rand(0,128),mt_rand(0,128),mt_rand(0,128));
        return $lightcolor;
    }
    private function weightColor(){
        $weightcolor=imagecolorallocate($this->re,mt_rand(128,255),mt_rand(128,255),mt_rand(128,255));
        return $weightcolor;
    }
    public function createView(){
        imagefill($this->re,0,0,$this->lightColor());
        $_SESSION['code']=$this->strcode;
        $this->createline();
        $this->craetepiex();
        $this->weightColor();
        $this->createword();
        imagepng($this->re);
        imagedestroy($this->re);
    }
    //画干扰线
    private function createline(){
        for($i=0;$i<10;$i++){
            imageline($this->re,mt_rand(0,150),mt_rand(0,50),mt_rand(100,150),mt_rand(30,50),$this->weightColor());
        }
    }
    //画干扰点
    private function craetepiex(){
        for($i=0;$i<300;$i++){
            imagesetpixel($this->re,mt_rand(0,150),mt_rand(0,50),$this->weightColor());
        }
    }
    //随机字母
    private function createword(){
        for($i=0;$i<4;$i++){
            $str=substr($this->seed,mt_rand(0,strlen($this->seed)-1),1);
            $this->strcode.=strtolower($str);
            imagettftext($this->re,mt_rand(30,40),mt_rand(-20,20),mt_rand(25,30)*($i+1),mt_rand(30,35),$this->weightColor(),'static/img/ARCENA.ttf',$str);
        }
    }
}