/**
 * Created by 李雨健 on 2017/6/29.
 */
window.onload=function(){
    $('.loadbtn').click(function(e){
        e.preventDefault();
        $('form.resign').css('display','none');
        $('form.load').css('display','block');
    })
    $('.del').click(function(){
        $(this).parent('form').css('display','none');
    })
    $('.resignbtn').click(function(e){
        e.preventDefault();
        $('form.load').css('display','none');
        $('form.resign').css('display','block');
    })
    $('.aload').click(function(e){
        e.preventDefault();
        $('form.resign').css('display','none');
        $('form.load').css('display','block');
    })
    $('.aresign').click(function(e){
        e.preventDefault();
        $('form.load').css('display','none');
        $('form.resign').css('display','block');
    })
    //点击登录
    $('button.indexload').click(function(){
        let message=$('form.load').serialize();
        $.ajax({
            url:'index.php?d=index&f=index&m=check',
            data:message,
            type:'post',
            success:function(e){
                $('.errormessage').css('display','block').html('').html(e);
                $('.errormessage').get(0).addEventListener('animationend',function(){
                    $('.errormessage').css('display','none');
                });
                if(e=='ok,即将跳转....'){
                    $("button.indexload").text('登录中···');
                    setTimeout(function(){
                        location.href="index.php";
                    },1000)
                }

            },
            error:function(){
                console.log(error);
            }

        })
    });
    //点击注册
    $('button.indexresign').click(function(){
        let message=$('form.resign').serialize();
        $.ajax({
            url:'index.php?d=index&f=index&m=reg',
            data:message,
            type:'post',
            success:function(e){
                $('.errormessage').css('display','block').html('').html(e);
                $('.errormessage').get(0).addEventListener('animationend',function(){
                    $('.errormessage').css('display','none');
                });
                if(e=='注册成功，请登录'){
                    $("button.indexload").text('注册中···');
                    setTimeout(function(){
                        location.href="index.php";
                    },1000)
                }

            },
            error:function(){
                console.log(error);
            }

        })
    });
    //获取短信验证码
    $('button.messagebtn').click(function(){
        let telephone=$("input[name='telephone']").val();
        $.ajax({
            url:'index.php?d=index&f=index&m=getMessage',
            type:'post',
            data:{'telephone':telephone},
            success:function(e){
                console.log(e)
            }
        })
    })

    //跳转按钮
    let topBar=document.querySelector('#top');
    topBar.onclick=function(){
        $(document.body).animate({ scrollTop:0},200);
        $(document.document.Element).animate({ scrollTop:0},200);
    };
    window.onscroll=function(){
        let obj=document.body.scrollTop>document.documentElement.scrollTop ?
            document.body.scrollTop:document.documentElement.scrollTop;
        if(obj>400){
            topBar.style.display='block';
        }else{
            topBar.style.display='none';
        }

        $('.asi').css('top',obj+10)
        $('.guanzhu').css('top',obj+130)
    }


};
