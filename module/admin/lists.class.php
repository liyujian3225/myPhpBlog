<?php
/**
 * Created by PhpStorm.
 * User: 李雨健
 * Date: 2017/7/18
 * Time: 9:23
 */
class lists extends main{
    function add(){
        $db=new mysqli('localhost','root','','blog');
        $db->query('set names utf8');
        if(isset($_GET["status"])){
            $where="and lists.status=".$_GET["status"];
            $where1="where lists.status=".$_GET["status"];
        }else{
            $where="";
            $where1="";
        }
        $sql="select count(sid) as sid from list".$where1;
        $result=$db->query($sql);
        $num=$result->fetch_assoc();
        $page=new page();
        $page->pageNum=5;
        $page->total=$num["sid"];
//        $limit=$page->limit;
        $str=$page->show();
        $this->smarty->assign("pages",$str);
        $sql1="select list.* ,category.cname ,member.mname from list,category,member where list.cid=category.cid and list.mid=member.mid ".$where." order by list.stime desc ".$page->limit;
        $result1=$db->query($sql1);
        $arr=array();
        while($row=$result1->fetch_assoc()){
            $arr[]=$row;
        }
        $this->smarty->assign("arr",$arr);
        $this->smarty->display("admin/managecontent.html");
    }
    function edit(){
        $sid=$_GET["sid"];
        $mid=$_GET["mid"];
        $db=new db("list");
        $result=$db->setFiled("status")->where("sid={$sid}")->select();
        $this->smarty->assign("status",$result[0]["status"]);
        $this->smarty->assign("sid",$sid);
        $this->smarty->assign("mid",$mid);
        $this->smarty->display("admin/editLists.html");
    }
    function editStatus(){
        echo "很抱歉，功能处于开发中···";
        exit;
        $sid=$_POST["sid"];
        $mid=$_POST["mid"];
        $status=$_POST["status"];
        $db=new db("list");
        if($db->where("sid={$sid}")->update("status={$status}")>0){
            $db=new db("");
            //关闭数据库的自动提交
            $db->db->autocommit(false);
            //查看违规文章
            $result1=$db->db->query("select * from list where status=4 and mid={$mid}");
            $num=mysqli_num_rows($result1);
            //违规文章大于3
            if($num>3){
                $result2=$db->db->query("update member set mrole=1 where mid={$mid}");
                $result3=!null;
            }else{
                $result2=$db->db->query("update member set mrole=0 where mid={$mid}");
                $result1=$db->db->query("select * from list where status=3 and mid={$mid}");
                $num= mysqli_num_rows($result1);
                if($num>3){
                    $result3=$db->db->query("update member set mrole=2 where mid={$mid}");
                }
                $result3=!null;
            }
            if($result1&&$result2&&$result3){
                $db->db->commit();
                $db->db->autocommit(true);
                $this->jump("修改成功","index.php?d=admin&f=lists&m=add");
            }else{
                $this->jump("修改失败","index.php?d=admin&f=lists&m=add");
            }
            /*
             *   0 正常
             *   1 禁止
             *   2 免审核
             * */
        }
    }
    function del(){
        $sid=$_GET['sid'];
        $db=new db('list');
        $result=$db->where("sid=$sid")->del();
        if($result){
            $this->jump("删除成功","index.php?d=admin&f=lists&m=add");
        }
    }
}