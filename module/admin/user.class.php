<?php
/**
 * Created by PhpStorm.
 * User: 李雨健
 * Date: 2017/6/28
 * Time: 15:58
 */
class user extends main{
    function  __construct()
    {
        parent::__construct();
        $this->db=new db('user');
    }
    function display(){
        $arr=$this->db->select();
        $this->smarty->assign('result',$arr);
        $this->smarty->display('admin/adduser.html');
    }
    function add(){
        $row=$this->db->setFiled('')->setval('')->insert();
        echo($row);
    }
    function del(){
        $uid=$_POST['id'];
        $row=$this->db->where("uid={$uid}")->del('');
        echo($row);
    }
    function update(){
        $uid=$_POST['id'];
        $type=$_POST['type'];
        $value=$_POST['value'];
        $row=$this->db->setFiled("{$type}='{$value}'")->where("uid={$uid}")->update('');
        echo $row;
    }
}