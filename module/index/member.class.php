<?php
/**
 * Created by PhpStorm.
 * User: 李雨健
 * Date: 2017/6/29
 * Time: 18:22
 */
class member extends indexMain{
    function init(){
        $this->smarty->assign('name',$this->session->get('mname'));
        $name=$this->session->get('mname');
        $mid=$this->session->get('mid');
        $db=new db('member');
        $res=$db->where("mname='{$name}'")->select();
        $this->smarty->assign('res',$res);
        //获取作者文章
        $db=new mysqli('localhost','root','','blog');
        $sql="select * from list inner JOIN category where list.cid=category.cid and list.mid=".$mid;
        $db->query("set names utf8");
        $result=$db->query($sql);
        $arr=array();
        while($row=$result->fetch_assoc()){
            $arr[]=$row;
        }
        $this->smarty->assign('arr',$arr);
        //关注我的人
        $sql1="select * from guanzhu inner JOIN member where guanzhu.mid1=member.mid and guanzhu.mid2=".$mid;
        $result1=$db->query($sql1);
        $arr1=array();
        while($row=$result1->fetch_assoc()){
            $arr1[]=$row;
        }
        $this->smarty->assign('arr1',$arr1);
        //我关注的人
        $sql2="select * from guanzhu inner JOIN member where guanzhu.mid2=member.mid and guanzhu.mid1=".$mid;
        $result2=$db->query($sql2);
        $arr2=array();
        while($row=$result2->fetch_assoc()){
            $arr2[]=$row;
        }
        $this->smarty->assign('arr2',$arr2);





        $this->smarty->display('member.html');
    }
    function comment(){
        $obj=new All();
        $db=new db('category');
        $obj->tree($db->db,'category',0,0);
        $res=$obj->str;
        $this->smarty->assign('res',$res);
        $this->smarty->assign('name',$this->session->get('mname'));
        //本次查询与上面查询出现冲突
        $db=new mysqli('localhost','root','','blog');
        $sql="select * from position";
        $db->query("set names utf8");
        $result=$db->query($sql);
        $arr=array();
        while($row=$result->fetch_assoc()){
            $arr[]=$row;
        }
        $this->smarty->assign('arr',$arr);
        $this->smarty->display('comment.html');
    }
    function upload(){
        $obj=new upload();
        $obj->move();
    }
    function submit(){
        $cid=$_POST['cid'];
        $stitle=$_POST['stitle'];
        $keyword=$_POST['keyword'];
        $son=$_POST['scon'];
        $mid=$this->session->get('mid');
        $posid=!empty($_POST['pid'])?implode(',',$_POST['pid']):'';
        $simage=$_POST['simage'];
        $db=new db('list');
        $sql="insert into list (cid,stitle,keyword,scon,simage,posid,mid) values ('{$cid}','{$stitle}','{$keyword}','{$son}','{$simage}','{$posid}','{$mid}')";
        $res=$db->db->query($sql);
        $db->db->query("set names utf8");
        if($res){
            echo "<script>alert('提交成功');location.href='index.php?d=index&f=member&m=comment'</script>";
        }
    }
    function update(){
        $mname=$_POST['mname'];
        $email=$_POST['email'];
        $sex=$_POST['sex'];
        $home=$_POST['home'];
        $QQ=$_POST['QQ'];
        $img=$_POST['img'];
        $speak=$_POST['speak'];
        $marry=$_POST['marry'];
        $mid=$this->session->get('mid');
        $db=new db('member');
        $sql1="update member set mname='$mname' ,email='$email',sex='$sex',home='$home',QQ='$QQ',img='$img',speak='$speak',marry='$marry'  WHERE mid=".$mid;
        $res1=$db->db->query($sql1);
        if($res1){
            echo('ok');
        }
    }
}