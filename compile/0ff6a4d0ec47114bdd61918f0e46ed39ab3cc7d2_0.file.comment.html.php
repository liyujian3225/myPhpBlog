<?php
/* Smarty version 3.1.30, created on 2017-07-18 10:32:35
  from "C:\wamp\www\PHP\MVC\template\index\comment.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596dc7a383aa81_71904556',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ff6a4d0ec47114bdd61918f0e46ed39ab3cc7d2' => 
    array (
      0 => 'C:\\wamp\\www\\PHP\\MVC\\template\\index\\comment.html',
      1 => 1500366754,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_596dc7a383aa81_71904556 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
;
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
comment.css">
<?php echo '<script'; ?>
 type="text/javascript"  src="<?php echo JS_PATH;?>
/upload.js"><?php echo '</script'; ?>
>
<main>
    <h3>发表内容</h3>
    <div class="left">
        <h5>
            <a href="">
                我发表过的内容
            </a>
        </h5>
    </div>
    <div class="right">
        <form method="post" action="index.php?d=index&f=member&m=submit">
            <div class="form-group">
                <label>所属话题</label>
                <select class="form-control" name="cid">
                    <?php echo $_smarty_tpl->tpl_vars['res']->value;?>

                </select>
            </div>
            <div class="form-group">
                <label>文章标题</label>
                <input type="text" class="form-control"  placeholder="文章标题" name="stitle">
            </div>
            <div class="form-group">
                <label>文章关键字</label>
                <input type="text" class="form-control"  placeholder="关键字" name="keyword">
            </div>
            <div class="form-group">
                <label>文章内容</label>
                <div class="baidu_editor">
                    <!-- 加载编辑器的容器 -->
                    <?php echo '<script'; ?>
 id="container" name="scon" type="text/plain">请输入您想发表的内容！<?php echo '</script'; ?>
>
                    <!-- 配置文件 -->
                    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo LIBS_PATH;?>
utf8-php/ueditor.config.js"><?php echo '</script'; ?>
>
                    <!-- 编辑器源码文件 -->
                    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo LIBS_PATH;?>
utf8-php/ueditor.all.js"><?php echo '</script'; ?>
>
                    <!-- 实例化编辑器 -->
                    <?php echo '<script'; ?>
 type="text/javascript">
                        let ue = UE.getEditor('container');
                    <?php echo '</script'; ?>
>
                </div>
            </div>
            <div class="form-group">
                <label>推荐位置</label>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                <div class="checkbox" style="margin-left:20px;">
                    <input type="checkbox" name="pid[]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['pid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value["pname"];?>

                </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </div>
            <div class="form-group">
                <label>上传图片</label>
                <div class="parent">

                    <input type="hidden" name="simage">
                </div>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
</main>
<?php echo '<script'; ?>
>
    let obj = new upload();
    obj.size = 1024 * 1024 * 8.6;
    obj.selectBtnStyle.background = "#BD4932";
    obj.createView({
        parent: document.querySelector(".parent")
    });
    obj.up("index.php?d=index&f=member&m=upload",function(data){
        document.querySelector("input[name='simage']").value=data;
    });
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
