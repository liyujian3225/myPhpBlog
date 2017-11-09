<?php
/* Smarty version 3.1.30, created on 2017-07-09 05:24:17
  from "C:\wamp\www\PHP\MVC\template\admin\check.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5961a1e1a7ee30_39430057',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a760cec860c65e7aa43f0f0b6c550be4ec706dc3' => 
    array (
      0 => 'C:\\wamp\\www\\PHP\\MVC\\template\\admin\\check.html',
      1 => 1499570550,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5961a1e1a7ee30_39430057 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <form action="<?php echo SELF_PATH;?>
?d=admin&f=category&m=update" method="post">
        <h3>所属栏目</h3>
        <select name="fcid" >
            <option value="0">作为一级导航</option>
            <?php echo $_smarty_tpl->tpl_vars['res']->value;?>

        </select>
        <h3>修改当前栏目</h3>
        <input type="text" name="sonname" value='<?php echo $_smarty_tpl->tpl_vars['res1']->value[0]["cname"];?>
'>
        <input type="hidden" value='<?php echo $_smarty_tpl->tpl_vars['res1']->value[0]["cid"];?>
' name="cid">
        <input type="submit" value="确认提交">
    </form>
</body>
</html><?php }
}
