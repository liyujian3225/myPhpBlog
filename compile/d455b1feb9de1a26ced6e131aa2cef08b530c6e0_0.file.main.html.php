<?php
/* Smarty version 3.1.30, created on 2017-07-18 04:31:49
  from "C:\wamp\www\PHP\MVC\template\admin\main.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596d73157ec745_74692912',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd455b1feb9de1a26ced6e131aa2cef08b530c6e0' => 
    array (
      0 => 'C:\\wamp\\www\\PHP\\MVC\\template\\admin\\main.html',
      1 => 1500345108,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596d73157ec745_74692912 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>后台主页</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
reset.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
main.css">
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
main.js"><?php echo '</script'; ?>
>
</head>
<body>
<nav>
    <div>
        <h1>博客后台管理系统</h1>
    </div>
    <div>
        <div class="tim">

        </div>
        <div class="welcome">
            <span>欢迎</span>
            <span><?php echo $_smarty_tpl->tpl_vars['user']->value;?>
</span>
            <span>登录本系统</span>
        </div>
        <div class="loadout">
            <a href="<?php echo SELF_PATH;?>
?d=index&f=index&m=init">跳转主页</a>
            <a href="<?php echo SELF_PATH;?>
?d=admin&f=login&m=logout">点击注销</a>
        </div>
    </div>
</nav>
<main>
    <div>
        <ul>
            <?php if ($_smarty_tpl->tpl_vars['role']->value == 1) {?>
            <li>
                <h6>
                    用户管理
                </h6>
                <ul>
                    <li>
                        <a href="<?php echo SELF_PATH;?>
?d=admin&f=user&m=display" target="display">
                            编辑用户
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <h6>角色管理</h6>
                <ul>
                    <li>
                        <a href="<?php echo SELF_PATH;?>
?d=admin&f=role&m=display" target="display">
                            编辑角色
                        </a>
                    </li>
                </ul>
            </li>
            <?php }?>
            <li>
                <h6>前台会员管理</h6>
                <ul>
                    <li>
                        <a href="javascript:;" target="display">
                            添加内容
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" target="display">
                            管理内容
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <h6>分类管理</h6>
                <ul>
                    <li>
                        <a href="<?php echo SELF_PATH;?>
?d=admin&f=category&m=init" target="display">
                            添加分类
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo SELF_PATH;?>
?d=admin&f=category&m=manage" target="display">
                            编辑分类
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <h6>内容管理</h6>
                <ul>
                    <li>
                        <a href="<?php echo SELF_PATH;?>
?d=admin&f=lists&m=add" target="display">
                            审核内容
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <h6>推荐位管理</h6>
                <ul>
                    <li>
                        <a href="javascript:;" target="display">
                            栏目暂无
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" target="display">
                            栏目暂无
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <div>
        <iframe src="<?php echo SELF_PATH;?>
?d=admin&f=login&m=welcome"  frameborder="0" name="display">

        </iframe>
    </div>
</main>
</body>
</html><?php }
}
