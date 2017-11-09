<?php
/* Smarty version 3.1.30, created on 2017-07-20 03:21:22
  from "C:\wamp\www\PHP\MVC\template\index\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59700592a01913_62341718',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c09b152475fc765e7d4e075df719a5a6848aaabd' => 
    array (
      0 => 'C:\\wamp\\www\\PHP\\MVC\\template\\index\\index.html',
      1 => 1500483119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_59700592a01913_62341718 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="<?php echo CSS_PATH;?>
index.css">
<ul class="art">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    <li class="con">
        <div>来自话题:<?php echo $_smarty_tpl->tpl_vars['v']->value['cname'];?>
</div>
        <div>
            <div>
                <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['img'];?>
" alt="">
            </div>
            <div><?php echo $_smarty_tpl->tpl_vars['v']->value['mname'];?>
</div>
        </div>
        <a href="index.php?d=index&f=show&m=init&sid=<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['stitle'];?>
</a>
        <div>
            <div><?php echo $_smarty_tpl->tpl_vars['v']->value['scon'];?>
</div>
            <div>
                <?php if ($_smarty_tpl->tpl_vars['v']->value['simage']) {?>
                <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['simage'];?>
" alt="">
                <?php } else { ?>
                <img src="<?php echo IMG_PATH;?>
aa.jpg" alt="">
                <?php }?>
            </div>
        </div>
        <div>
            <span>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr4']->value, 'm');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['m']->value) {
?>
                <?php if ($_smarty_tpl->tpl_vars['m']->value['sid'] == $_smarty_tpl->tpl_vars['v']->value['sid']) {?>
                <?php echo $_smarty_tpl->tpl_vars['m']->value['count(sid)'];?>
条评论
                <?php }?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>




            </span><span>点击量<?php echo $_smarty_tpl->tpl_vars['v']->value['hits'];?>
</span><span><?php echo $_smarty_tpl->tpl_vars['v']->value['stime'];?>
</span>
        </div>
    </li>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


    <li class="asi">
        <div>
            <h4>热点内容</h4>
            <ul>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr1']->value, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value) {
?>
                <li><a href="index.php?d=index&f=show&m=init&sid=<?php echo $_smarty_tpl->tpl_vars['k']->value['sid'];?>
"><?php echo $_smarty_tpl->tpl_vars['k']->value['stitle'];?>
</a></li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </ul>
        </div>
        <div>
            <h4>评论最多</h4>
            <ul>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr3']->value, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value) {
?>
                <li><a href="index.php?d=index&f=show&m=init&sid=<?php echo $_smarty_tpl->tpl_vars['k']->value['sid'];?>
"><?php echo $_smarty_tpl->tpl_vars['k']->value['stitle'];?>
</a></li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </ul>
        </div>
    </li>
</ul>
<div class="mor">
    <h3 class="more">点击查看更多</h3>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
>
    let num=5;
    $('.more').click(function(){
        $.ajax({
            url:'index.php?d=index&f=index&m=more',
            data:{ 'num':num},
            dataType:'json',
            type:'post',
            beforeSend:function(){
                $('.more').html('拼命加载中···')
            },
            success:function(e){
                $('.more').html('点击查看更多')
                num+=5;
                if(e.length==0){
                    $('.more').html('我是有底线的')
                }
                e.forEach(function(value){
                    $('<li class="con">').html(`
        <div>来自话题:${ value.cname}</div>
        <div>
            <div>
                <img src="${ value.img}" alt="">
            </div>
            <div>${ value.mname}</div>
        </div>
        <a href="index.php?d=index&f=show&m=init&sid=${ value.sid}">${ value.stitle}</a>
        <div>
            <div>${ value.scon}</div>
            <div>
                <img src="${ (value.simage)?value.simage:"<?php echo IMG_PATH;?>
aa.jpg"}" alt="">
            </div>
        </div>
        <div>
            <a href="">19条评论</a><span>点击量${ value.hits}</span><span>${ value.stime}</span>
        </div>
                    `).insertBefore($('.asi'))
                })
            }
        })
    })
<?php echo '</script'; ?>
><?php }
}
