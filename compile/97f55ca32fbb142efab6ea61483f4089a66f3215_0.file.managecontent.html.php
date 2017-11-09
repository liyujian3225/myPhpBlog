<?php
/* Smarty version 3.1.30, created on 2017-07-18 09:13:00
  from "C:\wamp\www\PHP\MVC\template\admin\managecontent.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596db4fc1419d8_63549113',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97f55ca32fbb142efab6ea61483f4089a66f3215' => 
    array (
      0 => 'C:\\wamp\\www\\PHP\\MVC\\template\\admin\\managecontent.html',
      1 => 1500361977,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596db4fc1419d8_63549113 (Smarty_Internal_Template $_smarty_tpl) {
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
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
bootstrap.min.js"><?php echo '</script'; ?>
>
</head>
<style>
    td,th{
        text-align:center;

    }
    table{
        cursor:pointer;
        height:250px;
    }
</style>
<body>
    <h4>前台留言管理</h4>
    <form action="">
        <table class="table table-striped table-hover">
            <tr>
                <th>文章sid</th>
                <th>文章title</th>
                <th>文章作者</th>
                <th>文章分类</th>
                <th>上传时间</th>
                <th>文章状态</th>
                <th>编辑文章</th>
            </tr>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['stitle'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['mname'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['cname'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['stime'];?>
</td>
                <td>
                    <?php if ($_smarty_tpl->tpl_vars['v']->value["status"] == 0) {?>
                    未审核
                    <?php } elseif ($_smarty_tpl->tpl_vars['v']->value["status"] == 1) {?>
                    审核中
                    <?php } elseif ($_smarty_tpl->tpl_vars['v']->value["status"] == 2) {?>
                    通过
                    <?php } elseif ($_smarty_tpl->tpl_vars['v']->value["status"] == 3) {?>
                    精华
                    <?php } elseif ($_smarty_tpl->tpl_vars['v']->value["status"] == 4) {?>
                    违规
                    <?php }?>
                </td>
                <td>
                    <a href="index.php?d=admin&f=lists&m=del&sid=<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
">删除</a>
                    <a href="index.php?d=admin&f=lists&m=edit&sid=<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
&mid=<?php echo $_smarty_tpl->tpl_vars['v']->value['mid'];?>
">编辑</a>
                </td>
            </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </table>
        <p style="position:relative;margin-bottom:20px;">
            <?php echo $_smarty_tpl->tpl_vars['pages']->value;?>

            <h4>审核状态查看说明</h4>
            <span>未审核:0</span>
            <span>审核中:1</span>
            <span>通过:2</span>
            <span>精华:3</span>
            <span>违规:4</span>
        </p>
    </form>


</body>
</html><?php }
}
