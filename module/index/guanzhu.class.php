<?php
/**
 * Created by PhpStorm.
 * User: 李雨健
 * Date: 2017/7/3
 * Time: 17:43
 */
class guanzhu extends indexMain{
    function add(){
        //非登录状态
        if(!$this->session->get("mid")){
            $near=$_POST["near"];
            $this->session->set("near",$near);
            echo "no";
        }else{
            $mid2=$_POST["mid"];
            $mid1=$this->session->get("mid");
            $db=new db("guanzhu");
            if($db->insert("mid1={$mid1},mid2={$mid2}")){
                echo "ok";
            }
        }
    }
    function del(){
        $mid2=$_POST["mid"];
        $mid1=$this->session->get("mid");
        $db=new db("guanzhu");
        if($db->where("mid1={$mid1} and mid2={$mid2}")->del()>0){
            echo "ok";
        }
    }
}