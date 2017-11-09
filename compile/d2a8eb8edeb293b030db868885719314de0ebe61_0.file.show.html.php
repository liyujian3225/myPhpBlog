<?php
/* Smarty version 3.1.30, created on 2017-08-01 08:49:36
  from "C:\wamp\www\PHP\MVC\template\index\show.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59802480aae198_08810697',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2a8eb8edeb293b030db868885719314de0ebe61' => 
    array (
      0 => 'C:\\wamp\\www\\PHP\\MVC\\template\\index\\show.html',
      1 => 1500513870,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_59802480aae198_08810697 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="<?php echo CSS_PATH;?>
show.css">
<main>
<h3 class="stitle" mid="<?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['mid'];?>
" me="<?php echo $_smarty_tpl->tpl_vars['mid']->value;?>
" sid="<?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['sid'];?>
"><?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['stitle'];?>
</h3>
    <ul>
        <li>
            <div>
                <img src="<?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['img'];?>
" alt="">
            </div>
            <div>
                <div>
                    <span><?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['mname'];?>
</span>
                    <?php if ($_smarty_tpl->tpl_vars['status']->value == "nologin") {?>
                    <span  class="btn btn-primary guanzhu">关注</span>
                    <span  class="btn btn-primary cancelguanzhu" style="display: none" >取消关注</span>
                    <?php } elseif ($_smarty_tpl->tpl_vars['status']->value == "self") {?>
                    <span  class="btn btn-primary guanzhu" style="display:none">关注</span>
                    <span  class="btn btn-primary cancelguanzhu" style="display: none" >取消关注</span>
                    <?php } elseif ($_smarty_tpl->tpl_vars['status']->value == "true") {?>
                    <span  class="btn btn-primary guanzhu" style="display:none">关注</span>
                    <span  class="btn btn-primary cancelguanzhu" >取消关注</span>
                    <?php } elseif ($_smarty_tpl->tpl_vars['status']->value == "false") {?>
                    <span  class="btn btn-primary guanzhu" >关注</span>
                    <span  class="btn btn-primary cancelguanzhu" style="display:none">取消关注</span>
                    <?php }?>
                </div>
                <div>
                    <span>字数</span><span class="num"></span>
                    <span>阅读</span><span class="hit" aa="<?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['sid'];?>
"><?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['hits']+1;?>
</span>
                    <span><?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['stime'];?>
</span>
                </div>
            </div>
        </li>
        <li class="article">
            <?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['scon'];?>

        </li>
        <li>
            <h3>评论区</h3>
            <div>
                <div>
                    <?php if ($_smarty_tpl->tpl_vars['arr1']->value == '') {?>
                    <img src="<?php echo IMG_PATH;?>
bb.png" alt="">
                    <?php } else { ?>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['arr1']->value[0]['img'];?>
" alt="">
                    <?php }?>
                </div>
                <div>
                    <textarea name=""  cols="20" rows="5" class="messageSubmitCon"></textarea>
                </div>
            </div>
            <div>
                <button class="btn btn-primary messageSubmitBtn">提交留言</button>
            </div>
        </li>
        <li class="container">
            <h3>全部评论(共有<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
条留言)</span> </h3>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
            <div class="message-box">
                <div class="liuyan" mid="<?php echo $_smarty_tpl->tpl_vars['v']->value['mid1'];?>
" pid="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
                    <div class="photo-box">
                        <div class="photo">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['img'];?>
" alt="">
                        </div>
                        <div class="name">
                            <?php echo $_smarty_tpl->tpl_vars['v']->value['mname'];?>

                        </div>
                    </div>
                    <div class="message-con">
                        <?php echo $_smarty_tpl->tpl_vars['v']->value["con"];?>

                    </div>
                    <div class="bar">
                        <button class="btn btn-xs replayBtn" type="submit">回复</button>
                    </div>
                </div>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['v']->value["son"], 'v1');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v1']->value) {
?>
                <div class="replay">
                    <div class="photo-box">
                        <div class="photo">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['v1']->value['img'];?>
" alt="">
                        </div>
                        <div class="name">
                            <?php echo $_smarty_tpl->tpl_vars['v1']->value['mname'];?>

                        </div>
                    </div>
                    <div class="message-con">
                        <?php echo $_smarty_tpl->tpl_vars['v1']->value["con"];?>

                    </div>
                    <div class="bar">
                        <button class="btn btn-xs replayBtn" type="submit">回复</button>
                    </div>
                </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


                <div class="replay-box" style="display:none">
                    <textarea class="form-control messageReplayCon" rows="3"></textarea>
                    <button class="btn btn-default messageReplayBtn" type="submit">回复</button>
                    <button class="btn btn-default" type="submit">取消</button>
                </div>
            </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </li>
    </ul>
</main>
<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
>
    //获取文章字数
    let num=0;
    $('.article>p').each(function(index,value){
        num+=$(value).html().length;
    })
    $('.num').html(num);
    //文章点击量
    let hit=$('.hit').html();
    let sid=$('.hit')[0].getAttribute('aa');
    $.ajax({
        url:'index.php?d=index&f=show&m=hit',
        data:{ 'hit':hit,'sid':sid},
        type:'post'
    })
    //处理关注事务
    //添加关注
    $(".guanzhu").click(function(){
        $.ajax({
            url:"index.php?d=index&f=guanzhu&m=add",
            type:"post",
            data:{ near:location.href,mid:$(".stitle").attr("mid")},
            success:function(e){
                if(e==="no"){
                    $(".load").css("display","block");
                }else if(e==="ok"){
                     $(".guanzhu").css("display","none");
                     $(".cancelguanzhu").css("display","block");
                }
            }
        })
    })
    //取消关注
    $(".cancelguanzhu").click(function(){
        $.ajax({
            url:"index.php?d=index&f=guanzhu&m=del",
            type:"post",
            data:{ mid:$(".stitle").attr("mid")},
            success:function(e){
                if(e==="ok"){
                    $(".guanzhu").css("display","block");
                    $(".cancelguanzhu").css("display","none");
                }
            }
        })
    })
    //添加留言
    $(".messageSubmitBtn").click(function () {
        let me=$(".stitle").attr("me");
        $.ajax({
            url:"index.php?d=index&f=message&m=add",
            type:"post",
            data:{ near:location.href,"mid":$(".stitle").attr("mid"),"sid":$(".stitle").attr("sid"),"con":$(".messageSubmitCon").val()},
            success:function(e){

                if(e=="no"){
                    $(".load").css("display","block");
                }else{
                    $(`<div class="message-box">
                    <div class="liuyan" mid="`+me+`" pid="`+e+`">
                        <div class="photo-box">
                            <div class="photo"><img src="" alt=""></div>
                            <div class="name">李雨健</div>
                        </div>
                        <div class="message-con">`+$(".messageSubmitCon").val()+`</div>
                        <div class="bar">
                            <button class="btn btn-xs replayBtn" type="submit">回复</button>
                        </div>
                    </div>
                    <div class="replay-box" style="display:none">
                        <textarea class="form-control messageReplayCon" rows="3"></textarea>
                        <button class="btn btn-default messageReplayBtn" type="submit">回复</button>
                        <button class="btn btn-default" type="submit">取消</button>
                    </div>
</div>`).appendTo(".container");
                }
            }
        })

    })

    //留言区的回复按钮
    $(".container").delegate(".replayBtn","click",function(){
        $(this).parents(".message-box").find(".replay-box").toggle();
    })

    //点击回复按钮
    $(".container").delegate(".messageReplayBtn","click",function(){
        //回复的内容框
        let messageReplayCon=$(this).parents(".message-box").find(".messageReplayCon");
        //留言区域
        let liuyan=$(this).parents(".message-box").find(".liuyan");
        //回复的盒子
        let replayBox=$(this).parents(".message-box").find(".replay-box");
        $.ajax({
            url:"index.php?d=index&f=message&m=replay",
            type:"post",
            data:{ near:location.href,mid:liuyan.attr("mid"),sid:$(".stitle").attr("sid"),"con":messageReplayCon.val(),"pid":liuyan.attr("pid")},
            success:function(e){
                if(e=="no"){
                    $(".load").css("display","block");
                }else{
                    $(`<div class="replay">
                            <div class="photo-box">
                                 <div class="photo"></div>
                                 <div class="name"></div>
                            </div>
                            <div class="message-con">`+messageReplayCon.val()+ `</div>
                            <div class="bar">
                                <button class="btn btn-xs replayBtn" type="submit">回复</button>
                            </div>
                    </div>`).insertBefore(replayBox);
                }
            }
        })
    })
<?php echo '</script'; ?>
><?php }
}
