<?php
/**
 * Created by PhpStorm.
 * User: 李雨健
 * Date: 2017/6/28
 * Time: 18:25
 */
class category extends main{
    function  __construct()
    {
        parent::__construct();
        $this->db=new db('category');
        $this->obj=new All();
    }
    function init(){
        $this->obj->tree($this->db->db,'category',0,0);
        $res=$this->obj->str;
        $this->smarty->assign('res',$res);
        $this->smarty->display('admin/addcategory.html');
    }
    function add(){
        $pid=$_POST['fcid'];
        $sonname=$_POST['sonname'];
        if(!$sonname){
            echo "<script>alert('栏目名称不能为空');location.href='index.php?d=admin&f=category&m=init'</script>";
            exit;
        }
        $res=$this->db->insert("pid='{$pid}',cname='{$sonname}'");
        if($res){
            $this->jump('添加导航成功','index.php?d=admin&f=category&m=init');
        }
    }
    function manage(){
        $this->obj->table($this->db->db,'category',0,0);
        $res=$this->obj->str;
        $this->smarty->assign('res',$res);
        $this->smarty->display('admin/managecategory.html');
    }
    function del(){
        $cid=$_GET['id'];
        $res=$this->db->where("cid=$cid")->del();
        if($res){
            $this->jump('删除成功','index.php?d=admin&f=category&m=manage');
        }
    }
    function check(){
        $pid=$_GET['pid'];
        $cid=$_GET['id'];
        $this->obj->tree($this->db->db,'category',0,0,$pid);
        $res=$this->obj->str;
        $this->smarty->assign('res',$res);
        $res1=$this->db->where("cid={$cid}")->select();
        $this->smarty->assign('res1',$res1);
        $this->smarty->display('admin/check.html');
    }
    function update(){
        $cid=$_POST['cid'];
        $sonname=$_POST['sonname'];
        if(!$sonname){
            echo "<script>alert('栏目名称不能为空');location.href='index.php?d=admin&f=category&m=manage'</script>";
            exit;
        }
        $db=new mysqli('localhost','root','','blog');
        $res2=$db->query("update category set cname='{$sonname}' where cid=".$cid);
        if($res2){
            $this->jump('修改成功','index.php?d=admin&f=category&m=manage');
        }
    }
}