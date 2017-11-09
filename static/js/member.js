/**
 * Created by 李雨健 on 2017/7/14.
 */
$(function(){
    $('.submitmessage').click(function(e){
        e.preventDefault();
        $('.updatemessage').css('display','block');
    })
    //上传头像
    class Upload{
        constructor(url,fileobj,imgobj,progressobj,success){
            this.url=url;
            this.fileobj=fileobj;
            this.imgobj=imgobj;
            this.progress=progressobj;
            this.size=20*1024*1024;
            this.imgarr=['jpg','jpeg','png','jif'];
            this.success=success;
        }
        change(){
            let that=this;
            //侦测内容的改变
            this.fileobj.onchange=function(){
                //上传图片的信息会保存在files中
                that.file=this.files[0];
                //在浏览器显示开启filereader
                let fileread=new FileReader();
                //将图片读成地址信息数据
                fileread.readAsDataURL(that.file);
                //检测图片是否合适
                that.check();
                //图片加载完毕
                fileread.onload=function(e){
                    if(that.flag){
                        that.imgobj.src=e.target.result;//浏览器读成的格式
                    }
                };
                if(that.check()){
                    that.uploadimg();//上传函数
                }
            }
        }
        uploadimg(){
            let that=this;
            let ajax=new XMLHttpRequest();
            //表单对象作为参数,表单的信息就会放入formdata里面了
            let formdata=new FormData();
            // console.log(formdata.get('zhanghao'));
            //方式1输出键值对代替submit的组合方式
            //方式2formdata.append（name，‘键值对’）
            formdata.append('file',this.file);
            console.log(this.file);

            //formdata.get('img');
            //处理上传文件的事件
            // ajax.UploadFile.onloadstart=function() {
            //     //这里可以禁用上传按钮
            // };
            //处理上传过程中的事件，检测进度
            ajax.upload.onprogress=function(e){
                let per=e.loaded/e.total*100;
                that.progress.style.width=per+'%';//progresss宽度设置为100%
            };
            //侦测ajax过程完成后的事件
            ajax.onload=function(){
                that.success(ajax.responseText);
            };
            ajax.open('post',that.url,true);//得不到进度条
            ajax.send(formdata);
        }
        check(){
            if(this.file.size>this.size){
                alert('图片尺寸过大');
                this.flag=false;
                return;
            }
            let type=this.file.name.split('.')[1].toLowerCase();
            this.flag=this.imgarr.includes(type);
            if(!this.flag){
                alert ('图片格式错误');
            }
            return true;
        }
    }
    let fileobj=document.querySelector('input[type=file]');
    let imgobj=document.querySelector('#img');
    let progress=document.querySelector('#progress');
    let imgurl=document.querySelector('#imgurl');
    let newobj=new Upload('index.php?d=index&f=member&m=upload',fileobj,imgobj,progress,function(text){
        imgurl.value=text;
        console.log(text)
    });
    newobj.change();
    //提交表单信息
    $('.upmessage').click(function(){
        let formData=$('.updatemessage').serialize();
        formData = decodeURIComponent(formData,true);
        $.ajax({
            url:'index.php?d=index&f=member&m=update',
            data:formData,
            type:'post',
            success:function(e){
                if(e=='ok'){
                    alert('恭喜您，信息更新成功')
                    $('.upmessage').parent('form').css('display','none');
                }

            }
        })
    })
});

