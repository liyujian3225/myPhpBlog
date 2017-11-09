<?php
/* Smarty version 3.1.30, created on 2017-07-08 08:30:51
  from "C:\wamp\www\PHP\MVC\template\admin\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59607c1bcd8301_38715733',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f925a0fd9f4aeaae4bfde691be3994bee751ba9' => 
    array (
      0 => 'C:\\wamp\\www\\PHP\\MVC\\template\\admin\\login.html',
      1 => 1499495448,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59607c1bcd8301_38715733 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>后台登录</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
reset.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
login.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.validate.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
login.js"><?php echo '</script'; ?>
>
</head>
<body style="background-image:url('<?php echo IMG_PATH;?>
1.jpg')">
    <form  id="signupForm" >
        <div class="form-group">
            <h3>欢迎登录后台系统</h3>
        </div>
        <div class="error form-group"></div>
        <div class="form-group">
            <input type="text" class="form-control"  placeholder="请输入账号" name="zhanghao">
        </div>
        <div class="form-group">
            <input type="password" class="form-control"  placeholder="请输入密码" name="password">
        </div>
        <div class="checkbox">
            <input type="text" name="checkcode" class="form-control" placeholder="输入验证码">
            <img src="<?php echo SELF_PATH;?>
?d=admin&f=login&m=code" alt="" onclick="this.src+='&Math.random(0,999)'">
        </div>
        <div class="form-group message">
            <h5></h5>
            <button type="button" class="btn btn-primary btn-block" >登录</button>
        </div>
    </form>
</body>
</html>
<?php }
}
