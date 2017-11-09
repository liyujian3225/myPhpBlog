<?php
/* Smarty version 3.1.30, created on 2017-07-17 16:20:31
  from "C:\wamp\www\PHP\MVC\template\index\header.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596cc7af1a1db0_26499131',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '303c71ad487664623a8c69875a3435b5a0986990' => 
    array (
      0 => 'C:\\wamp\\www\\PHP\\MVC\\template\\index\\header.html',
      1 => 1500301229,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596cc7af1a1db0_26499131 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>博客家园</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
reset.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
header.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
header.js"><?php echo '</script'; ?>
>
</head>
<body>
    <div id="top">
        top
    </div>
    <form class="resign">
        <span class="del">×</span>
        <div class="form-group">
            <label >账号</label>
            <input type="email" class="form-control"  placeholder="请输入您的账号" name="zhanghao">
        </div>
        <div class="form-group">
            <label >密码</label>
            <input type="password" class="form-control"  placeholder="请输入您的密码" name="password">
        </div>
        <div class="form-group">
            <label >再次输入密码</label>
            <input type="password" class="form-control"  placeholder="请输入您的密码" name="eqpassword">
        </div>
        <div class="form-group check">
            <input type="text" class="form-control" placeholder="请输入手机号码" name="telephone">
            <input type="text" class="form-control" placeholder="请输入验证码" name="checkcode">
            <button class="btn btn-default messagebtn" type="button">获取验证码</button>
        </div>
        <button type="button" class="btn btn-primary btn-block indexresign">注册</button>
        <a href="" class="aload">已有账号？点击登录</a>
    </form>
    <form class="load">
        <span class="del">×</span>
        <div class="form-group">
            <label >账号</label>
            <input type="text" class="form-control"  placeholder="请输入您的账号" name="zhanghao">
        </div>
        <div class="form-group">
            <label >密码</label>
            <input type="password" class="form-control"  placeholder="请输入您的密码" name="password">
        </div>
        <div class="form-group check">
            <input type="text" class="form-control" placeholder="请输入验证码" name="checkcode">
            <img src="<?php echo SELF_PATH;?>
?d=index&f=index&m=code" alt="" onclick="this.src+='&Math.random(0,999)'">
        </div>
        <button type="button" class="btn btn-primary btn-block indexload" >登录</button>
        <a href="" class="aresign">没有账号？点击注册</a>
    </form>
    <div class="errormessage">

    </div>
    <header>
        <div>
            <div>
                <h3>
                    <a href="index.php">
                        <img src="<?php echo IMG_PATH;?>
102.png" alt="">
                    </a>
                </h3>
            </div>
            <div>
                <?php if ($_smarty_tpl->tpl_vars['name']->value) {?>
                <span href="javascript:;">欢迎<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
登录</span>
                <a href="index.php?d=index&f=member&m=init">
                    个人中心
                </a>
                <a href="index.php?d=index&f=member&m=comment" class="logout">
                    发表内容
                </a>
                <a href="index.php?d=index&f=index&m=logout" class="logout">
                    退出登陆
                </a>
                <?php } else { ?>
                <a href="javascript:;" class="loadbtn">登录</a>
                <a href="javascript:;" class="resignbtn">注册</a>
                <a href="" class="loadbtn">发表内容</a>
                <?php }?>
            </div>
        </div>
    </header>
<?php }
}
