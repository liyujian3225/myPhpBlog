<?php
/* Smarty version 3.1.30, created on 2017-07-01 12:19:11
  from "C:\wamp\www\PHP\MVC\template\admin\addrole.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5957771f7f5ef6_11449602',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cbff070ba53ed9749cb5166af7858cee232cb0a5' => 
    array (
      0 => 'C:\\wamp\\www\\PHP\\MVC\\template\\admin\\addrole.html',
      1 => 1498904348,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5957771f7f5ef6_11449602 (Smarty_Internal_Template $_smarty_tpl) {
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
addrole.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
bootstrap.min.js"><?php echo '</script'; ?>
>
</head>
<body>
<div id='box'>
    <h2>角色管理</h2>
    <table class="table table-striped table-bordered table-hover table-condensed">
        <tr>
            <th>角色名</th>
            <th>角色rnum</th>
            <th>操作</th>
        </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
        <tr id=<?php echo $_smarty_tpl->tpl_vars['v']->value['rid'];?>
>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['rname'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['rnum'];?>
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
    </p>
</div>
</body>
<?php echo '<script'; ?>
>
    $('.del').click(function(){
        let rid=$(this).parent('tr').attr('id');
        alert(rid);
    })
<?php echo '</script'; ?>
><?php }
}
