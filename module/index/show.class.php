<?php
/**
 * Created by PhpStorm.
 * User: 李雨健
 * Date: 2017/7/3
 * Time: 18:44
 */
class show extends indexMain{
    function init(){
        $db=new mysqli('localhost','root','','blog');
        $db->query("set names utf8");
        $this->smarty->assign('name',$this->session->get('mname'));
        $name=$this->session->get('mname');
        $mid=$this->session->get('mid');
        $this->smarty->assign('mid',$mid);
        //如果登录则获取评论头像
        if($mid){
            $sql1="select img from member where mid=".$mid;
            $result1=$db->query($sql1);
            $arr1=array();
            while($row=$result1->fetch_assoc()){
                $arr1[]=$row;
            }
        }else{
            $arr1='';
        }
        $this->smarty->assign('arr1',$arr1);
        //三表查询
        $sid=$_REQUEST['sid'];
        $sql="select * from list inner JOIN category on list.cid=category.cid inner JOIN member on list.mid=member.mid where list.sid=".$sid;
        $result=$db->query($sql);
        $arr=array();
        while($row=$result->fetch_assoc()){
            $arr[]=$row;
        }
        $this->smarty->assign('arr',$arr);
        //获取文章的作者
        $status = $this->guanzhu($arr[0]['mid']);
        $this->smarty->assign("status", $status);
        //获取留言信息
        $sql="select * from messages inner JOIN member WHERE messages.mid1=member.mid and messages.sid=".$sid;
        $res = $db->query($sql);
        $result=array();
        while($row=$res->fetch_assoc()){
            $result[]=$row;
        }
        $array = array();
        foreach ($result as $v) {
            if ($v["pid"] == 0) {
                $array[] = $v;
            }
        }
        foreach ($array as $k => $v) {
            foreach ($result as $v1) {
                if(!isset($array[$k]["son"])){
                    $array[$k]["son"]=array();
                }
                if ($v1["pid"] != 0) {
                    if ($v1["pid"] == $v["id"]) {
                        echo "2222";
                        $array[$k]["son"][] = $v1;
                    }
                }
            }
        }
        $this->smarty->assign("total", count($array));
        $this->smarty->assign("messages",$array);
        $this->smarty->display('show.html');
    }
    function guanzhu($mid){
        //1.  没登录 关注         nologin
        //3.  登陆了  不是自己  没关注  true
        //4.  登陆了  不是自己  关注    false
        if (!$this->session->get("mid")) {
            $status = "nologin";
        } else {
            //2.  登陆了  自己  不出现  self
            if ($mid == $this->session->get("mid")) {
                $status = "self";
            } else {
                $mid1 = $this->session->get("mid");
                $mid2 = $mid;
                $db=new mysqli('localhost','root','','blog');
                $db->query("set names utf8");
                $sql = "select * from guanzhu where mid1={$mid1} and mid2={$mid2}";
                $result = $db->query($sql);
                $array=array();
                while($row=$result->fetch_assoc()){
                    $array[]=$row;
                }
                if (count($array)) {
                    $status = "true";
                } else {
                    $status = "false";
                }
            }
        }
        return $status;
    }
    function hit(){
        $hits=$_POST['hit'];
        $sid=$_POST['sid'];
        $db=new db('list');
        $res=$db->where("sid=$sid")->update("hits=$hits");
        if($res){
            echo ('ok');
        }
    }
}