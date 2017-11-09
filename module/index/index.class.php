<?php
/**
 * Created by PhpStorm.
 * User: 李雨健
 * Date: 2017/6/28
 * Time: 18:45
 */
class index extends indexMain {
    function init(){
        $this->smarty->assign('name',$this->session->get('mname'));
        $mid=$this->session->get('mid');
        //分页查询list页面中信息，每次限制5条信息
        $db=new mysqli('localhost','root','','blog');
        $sql="select * from list inner JOIN category on list.cid=category.cid inner JOIN member on list.mid=member.mid limit 0,5";
        $db->query("set names utf8");
        $result=$db->query($sql);
        $arr=array();
        while($row=$result->fetch_assoc()){
            $arr[]=$row;
        }
        $this->smarty->assign('arr',$arr);
        //查询点击量最多的信息
        $sql1="select * from list ORDER BY hits DESC limit 0,5";
        $result1=$db->query($sql1);
        $arr1=array();
        while($row=$result1->fetch_assoc()){
            $arr1[]=$row;
        }
        $this->smarty->assign('arr1',$arr1);
        //查询评论最多的文章
        $sql3="select messages.sid from messages  GROUP BY sid ORDER BY count(sid) DESC limit 0,5";
        $result2=$db->query($sql3);
        $arr2=array();
        while($row=$result2->fetch_assoc()){
            $arr2[]=$row;
        }
        $arr3=array();
        foreach ($arr2 as $v){
            $sql4="select stitle,sid from list WHERE sid=".$v['sid'];
            $result4=$db->query($sql4);
            $row=$result4->fetch_assoc();
            $arr3[]=$row;
        }
        $this->smarty->assign('arr3',$arr3);

        $sql4="select messages.sid,count(sid) from messages  GROUP BY sid ORDER BY count(sid)";
        $result3=$db->query($sql4);
        $arr4=array();
        while($row=$result3->fetch_assoc()){
            $arr4[]=$row;
        }
        $this->smarty->assign('arr4',$arr4);


        $this->smarty->display('index.html');
    }
    function more(){
        $num=$_POST['num'];
        $db=new mysqli('localhost','root','','blog');
        $sql="select * from list inner JOIN category on list.cid=category.cid inner JOIN member on list.mid=member.mid limit ".$num.",5";
        $db->query("set names utf8");
        $result=$db->query($sql);
        $arr=array();
        while($row=$result->fetch_assoc()){
            $arr[]=$row;
        }
        echo json_encode($arr);
    }
    function code(){
        $checkcode=new code();
        $checkcode->createView();
        $this->session->set('code',$checkcode->strcode);
    }
    function check(){
        $code=strtolower($_POST['checkcode']);
        $zhanghao=$_POST['zhanghao'];
        $password=$_POST['password'];
        if($code==$this->session->get('code')){
            $this->db=new db('member');
            $res=$this->db->where("mname='$zhanghao'")->select();
            if(!empty($res)){
                if($res[0]['mpass']==md5($password)){
                    $this->session->set('mname',$zhanghao);
                    $this->session->set('mid',$res[0]['mid']);
                    e('ok,即将跳转....');
                }else{
                    e('密码输入错误');
                }
            }else{
                e('账号不存在');
            }
        }else{
            e('验证码输入错误');
        }
    }
    function logout(){
        $this->session->clear();
        header('location:'.SELF_PATH);
    }
    function getMessage(){
        //短信验证码API
        require_once('libs/lib/Ucpaas.class.php');
        //初始化必填
        $options['accountsid']='0d84e0d39d1fbd69c14c2a6f1f9856ca';
        $options['token']='c627cf710101999544c1bce6f29c808f';
        //初始化 $options必填
        $ucpass = new Ucpaas($options);
        $appId = "f590685d4dff409c83894c0a45ffebe1";
        $to = $_POST['telephone'];
        $templateId = "84896";
        $param=mt_rand(0000,9999);
        $this->session->set('messagecode',$param);
        $ucpass->templateSMS($appId,$to,$templateId,$param);
        echo $param;
    }
    function reg(){
        if($_POST["checkcode"]!==(string)$this->session->get('messagecode')){
            echo "验证码错误";
            exit;
        }
        $mname=$_POST["zhanghao"];
        if(empty($mname)){
            echo "用户不能为空";
            exit;
        }
        $db=new db("member");
        $result=$db->where("mname='{$mname}'")->select();
        if(count($result)>0){
            echo "用户名存在";
            exit;
        }
        $mpass=$_POST["password"];
        if(empty($mpass)){
            echo "密码不能为空";
            exit;
        }
        $mpass1=$_POST["eqpassword"];
        if(empty($mpass1)){
            echo "确认密码不能为空";
            exit;
        }
        if($mpass!=$mpass1){
            echo "两次密码不一致";
            exit;
        }
        $mpass=md5($mpass);
        if($db->insert("mname='{$mname}',mpass='{$mpass}'")){
            echo "注册成功，请登录";
            exit;
        }
    }

}