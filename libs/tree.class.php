<?php
/**
 * Created by PhpStorm.
 * User: 李雨健
 * Date: 2017/6/28
 * Time: 18:32
 */
//递归函数
class All{
    public function __construct(){
        $this->str='';
    }
    public function tree($db,$table,$parentid,$n,$curr=0){
        $sql="select * from $table WHERE pid=$parentid";
        $result=$db->query($sql);
        while($row=$result->fetch_assoc()){
            $string=str_repeat('-',$n);
            if($row['cid']==$curr){
                $this->str.="
            <option selected value={$row['cid']}>{$string}{$row['cname']}</option>
            ";
            }else{
                $this->str.="
            <option value={$row['cid']}>{$string}{$row['cname']}</option>
            ";
            }
            $this->tree($db,$table,$row['cid'],$n+2,$curr);
        }
    }
    //管理栏目
    public function table($db,$table,$parentid,$n){
        $sql="select * from $table WHERE pid=$parentid";
        $result=$db->query($sql);
        $this->str.="<ul>";
        while($row=$result->fetch_assoc()){
            $string=str_repeat('-',$n);
            $this->str.="
            <li value='{$row['cid']}' class='par'>
                <span>{$string}{$row['cname']}</span>
                <a href='index.php?d=admin&f=category&m=del&id={$row['cid']}'>删除</a>
                <a href='index.php?d=admin&f=category&m=check&id={$row['cid']}&pid={$row['pid']}'>编辑</a>
            ";
            $this->table($db,$table,$row['cid'],$n+3);
        }
        $this->str.="</li></ul>";
    }
}