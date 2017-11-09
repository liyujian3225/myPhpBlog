<?php
/* Smarty version 3.1.30, created on 2017-07-20 05:17:30
  from "C:\wamp\www\PHP\MVC\template\index\member.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_597020ca37a096_90039309',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a3217a341b911330d864ecb7f63356c78f72a07' => 
    array (
      0 => 'C:\\wamp\\www\\PHP\\MVC\\template\\index\\member.html',
      1 => 1500520648,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_597020ca37a096_90039309 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!--把相应的变量引入到这个页面-->
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
member.css">
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
member.js"><?php echo '</script'; ?>
>
<form class="updatemessage">
    <div class="del">+</div>
    <ul>
        <li>
            <div class="form-group">
                <label>姓名</label>
                <input class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" name="mname">
            </div>
            <div class="form-group">
                <label>邮箱</label>
                <input class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['res']->value[0]['email'];?>
" name="email">
            </div>
            <div class="form-group">
                <label>性别</label>
                <input class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['res']->value[0]['sex'];?>
" name="sex">
            </div>
            <div class="form-group">
                <label>家庭住址</label>
                <input class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['res']->value[0]['home'];?>
" name="home">
            </div>
        </li>
        <li>
            <div class="form-group">
                <label>QQ号码</label>
                <input class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['res']->value[0]['QQ'];?>
" name="QQ">
            </div>
            <div class="form-group">
                <label>婚否</label>
                <input class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['res']->value[0]['marry'];?>
" name="marry">
            </div>
            <div class="form-group">
                <label>自我介绍</label>
                <input class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['res']->value[0]['speak'];?>
" name="speak">
            </div>
            <div class="form-group">
                <label>修改头像</label>
                <input id='imgurl' type="hidden" name="img">
                <br>
                <div id="change">
                    <input type="file">
                </div>
            </div>
        </li>
    </ul>
    <button type="button" class="btn btn-primary btn-sm btn-block upmessage">点击修改信息</button>
</form>
<section>
    <main>
        <h3>欢迎你，<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</h3>
        <div class="home">
            <ul>
                <li>
                    <?php if ($_smarty_tpl->tpl_vars['res']->value[0]['img']) {?>
                    <img id='img' src="<?php echo $_smarty_tpl->tpl_vars['res']->value[0]['img'];?>
" alt="">
                    <?php } else { ?>
                    <img id='img' src="<?php echo IMG_PATH;?>
bb.png" alt="">
                    <?php }?>

                    <!--<img id='img' src="<?php echo $_smarty_tpl->tpl_vars['res']->value[0]['img'];?>
" alt="">-->
                    <div id="progress"></div>
                </li>
            </ul>
            <ul>
                <li><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
的个人信息</li>
                <li><span>姓名:</span><span><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</span></li>
                <li><span>性别:</span><span><?php echo $_smarty_tpl->tpl_vars['res']->value[0]['sex'];?>
</span></li>
                <li><span>家乡:</span><span><?php echo $_smarty_tpl->tpl_vars['res']->value[0]['home'];?>
</span></li>
                <li><span>婚姻:</span><span><?php echo $_smarty_tpl->tpl_vars['res']->value[0]['marry'];?>
</span></li>
                <li><span>自我介绍:</span><span><?php echo $_smarty_tpl->tpl_vars['res']->value[0]['speak'];?>
</span></li>
                <li><span>电话号码:</span><span><?php echo $_smarty_tpl->tpl_vars['res']->value[0]['tele'];?>
</span></li>
                <li><span>QQ号码:</span><span><?php echo $_smarty_tpl->tpl_vars['res']->value[0]['QQ'];?>
</span></li>
                <li><span>邮箱:</span><span><?php echo $_smarty_tpl->tpl_vars['res']->value[0]['email'];?>
</span></li>
                <li><a class='submitmessage' href="">点击完善个人信息</a></li>
            </ul>
        </div>
        <aside class="guanzhu">
            <div>
                <h3>关注我的人</h3>
                <ul>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr1']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                    <li>
                        <div>
                            <?php if ($_smarty_tpl->tpl_vars['v']->value['img']) {?>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['img'];?>
" alt="">
                            <?php } else { ?>
                            <img src="<?php echo IMG_PATH;?>
bb.png" alt="">
                            <?php }?>
                        </div>
                        <div><?php echo $_smarty_tpl->tpl_vars['v']->value['mname'];?>
</div>
                    </li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </ul>
            </div>
            <div>
                <h3>我关注的人</h3>
                <ul>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr2']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                    <li>
                        <div>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['img'];?>
" alt="">
                        </div>
                        <div><?php echo $_smarty_tpl->tpl_vars['v']->value['mname'];?>
</div>
                    </li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </ul>
            </div>
        </aside>
    </main>
    <h3><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
的最新动态</h3>
    <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
        <li>
            <div>来自话题:<?php echo $_smarty_tpl->tpl_vars['v']->value['cname'];?>
</div>
            <div>
                <div>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['res']->value[0]['img'];?>
" alt="">
                </div>
                <div><?php echo $_smarty_tpl->tpl_vars['res']->value[0]['mname'];?>
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
                <a href="">19条评论</a><span>点击量<?php echo $_smarty_tpl->tpl_vars['v']->value['hits'];?>
</span><span><?php echo $_smarty_tpl->tpl_vars['v']->value['stime'];?>
</span>
            </div>
        </li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


    </ul>
</section>

<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
