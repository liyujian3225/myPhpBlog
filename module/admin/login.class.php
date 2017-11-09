<?php
/**
 * Created by PhpStorm.
 * User: 李雨健
 * Date: 2017/6/27
 * Time: 10:01
 */
class login extends main{
    function init(){
        $this->smarty->display('admin/login.html');
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
            $this->db=new db('user');
            $res=$this->db->where("uname='$zhanghao'")->select();
            if(!empty($res)){
                if($res[0]['upass']==md5($password)){
                    $this->session->set('user',$zhanghao);
                    $this->session->set('id',$res[0]['uid']);
                    $this->session->set('role',$res[0]['role']);
                    e('ok');
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
    function main(){
        $this->smarty->assign('user',$this->session->get('user'));
        $this->smarty->assign('role',$this->session->get('role'));
        $this->smarty->display('admin/main.html');
    }
    function logout(){
        $this->session->clear();
        header('location:'.SELF_PATH.'?d=admin&f=login&m=init');
    }
    function welcome(){
        $this->smarty->display('admin/welcome.html');
    }
}