<?php
/**
 * Created by PhpStorm.
 * User: 李雨健
 * Date: 2017/7/3
 * Time: 17:42
 */
class message extends indexMain{
    function add(){
        if(!$this->session->get("mid")){
            $near=$_POST["near"];
            $this->session->set("near",$near);
            echo "no";
        }else{
            //1.  留言者  2. 被留言的  3. 哪个文章  //4.  留言的内容  5. 留言  回复
            //1.  放到数据库
            //2.  放到页面当中
            $mid2=$_POST["mid"];
            $mid1=$this->session->get("mid");
            $sid=$_POST["sid"];
            $con=$_POST["con"];
            $pid=0;
            $db=new db("messages");
            if($db->insert("mid1={$mid1},mid2={$mid2},sid={$sid},con='{$con}',pid={$pid}")) {
                echo $db->db->insert_id;
            }
        }
    }
    function  replay(){
        if(!$this->session->get("mid")){
            $near=$_POST["near"];
            $this->session->set("near",$near);
            echo "no";
        }else{
            //1.  留言者  2. 被留言的  3. 哪个文章  //4.  留言的内容  5. 留言  回复
            $mid1=$this->session->get("mid");
            $mid2=$_POST["mid"];
            $sid=$_POST["sid"];
            $con=$_POST["con"];
            $pid=$_POST["pid"];
            $db=new db("messages");
            if($db->insert("mid1={$mid1},mid2={$mid2},sid={$sid},con='{$con}',pid={$pid}")) {
                echo "ok";
            }
        }
    }
}