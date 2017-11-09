<?php
/* Smarty version 3.1.30, created on 2017-07-09 03:52:51
  from "C:\wamp\www\PHP\MVC\template\admin\addcategory.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59618c736c8a20_47475975',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd19943fdf3cf54dd324094710b946c1bc04cc852' => 
    array (
      0 => 'C:\\wamp\\www\\PHP\\MVC\\template\\admin\\addcategory.html',
      1 => 1499565107,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59618c736c8a20_47475975 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <form action="<?php echo SELF_PATH;?>
?d=admin&f=category&m=add" method="post">
        <h3>上级导航栏</h3>
        <select name="fcid" >
            <option value="0">作为一级导航</option>
            <?php echo $_smarty_tpl->tpl_vars['res']->value;?>

        </select>
       <h3>添加栏目</h3>
        <input type="text" name="sonname">
        <input type="submit" value="确认提交">
    </form>
</body>
</html><?php }
}
