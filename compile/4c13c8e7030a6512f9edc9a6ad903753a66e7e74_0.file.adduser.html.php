<?php
/* Smarty version 3.1.30, created on 2017-07-01 08:35:08
  from "C:\wamp\www\PHP\MVC\template\admin\adduser.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5957429c300950_95008699',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c13c8e7030a6512f9edc9a6ad903753a66e7e74' => 
    array (
      0 => 'C:\\wamp\\www\\PHP\\MVC\\template\\admin\\adduser.html',
      1 => 1498890905,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5957429c300950_95008699 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
reset.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
adduser.css">
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
adduser.js"><?php echo '</script'; ?>
>
</head>
<body>
    <div id='box'>
        <h2>编辑后台用户</h2>
        <table class="table table-striped table-bordered table-hover table-condensed">
            <tr>
                <th>用户名</th>
                <th>密码</th>
                <th>权限</th>
                <th>操作</th>
            </tr>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
            <tr id=<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
>
                <td type="uname"><?php echo $_smarty_tpl->tpl_vars['v']->value['uname'];?>
</td>
                <td type="upass">点击修改密码</td>
                <td type="urole">
                    <?php if ($_smarty_tpl->tpl_vars['v']->value['role'] == 1) {?>
                    超级管理员
                    <?php } elseif ($_smarty_tpl->tpl_vars['v']->value['role'] == 2) {?>
                    会员
                    <?php }?>
                </td>
                <td class="del">删除</td>
            </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </table>
        <div class="plus">+</div>
        <p>
            使用注意事项
            <br>
            1.修改超级管理员请改为1,会员请改2
            <br>
            2.超级管理员可对后台用户进行编辑,普通会员仅可以查看后台用户，没有编辑权限！
            <br>
            3.删除用户时请先刷新界面
            <br>
            4.默认密码为123456，修改密码只能为6个数字！
        </p>
    </div>

</body>
</html><?php }
}
