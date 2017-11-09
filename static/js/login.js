/**
 * Created by 李雨健 on 2017/6/28.
 */
window.onload=function(){
    $('button[type=button]').click(function(){
        let zhanghao=$("input[type='text']").val();
        let password=$("input[type='password']").val();
        let checkcode=$("input[name='checkcode']").val();

        $(document).ajaxStart(function(){
            $("button[type='button']").text('登录中···');
        });
        $.ajax({
            url:'index.php?d=admin&f=login&m=check',
            data:{checkcode:checkcode,zhanghao:zhanghao,password:password},
            type:'post',
            success:function(value){
                if(value=='ok'){
                    location.href='index.php?d=admin&f=login&m=main';
                }else{
                    $('.message>h5').html('').html(`${value}`);
                }
            },
            error:function(){
                console.log(error);
            }

        })
    });
    $("#signupForm").validate({
        rules: {
            zhanghao: "required",
            password: {
                required: true,
                minlength: 5
            },
            checkcode: {
                required: true
            }
        },
        messages: {
            zhanghao: {
                required: "账号不能为空"
            },
            password: {
                required: "密码不能为空",
                minlength:"密码不能小于6个字符",
            },
            checkcode: {
                required: "验证码不能为空"
            }
        },
        errorPlacement: function(error, element) {
            $('#signupForm').prepend(error);
        },
        errorContainer: "div.error",
        errorLabelContainer: $("#signupForm div.error"),
        wrapper: "span",
        errorElement:"em",
        onsubmit:false
    })
}