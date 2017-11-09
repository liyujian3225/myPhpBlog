<?php
/**
 * Created by PhpStorm.
 * User: 李雨健
 * Date: 2017/6/28
 * Time: 16:11
 */
class role extends main{
    function __construct()
    {
        parent::__construct();
        $this->db=new db('role');
    }
    function display(){
        $arr=$this->db->select();
        $this->smarty->assign('arr',$arr);
        $this->smarty->display('admin/addrole.html');
    }
    function del(){
        $rid=$_POST['rid'];
        $this->db->where("rid={$rid}")->del('');

    }
}