/**
 * Created by 李雨健 on 2017/7/1.
 */
window.onload=function(){
    let tbody=$('tbody');
    //点击添加行，先处理数据库中的添加动作，添加成功再处理表面工作
    $('.plus').click(function(){
        $.get('index.php?d=admin&f=user&m=add').done(function(value){
            if(value==0){
                alert('创建失败');
            }else{
                $('<tr>').html(`
                <td type="uname"></td>
                <td type="upass">点击修改密码</td>
                <td type="urole"></td>
                <td>
                <div class="del">删除</div>
                </td>
                    `).appendTo(tbody);
            }
        })
    })
    //删除数据库
    tbody.delegate(".del","click",function(){
        let value=$(this).parents('tr').attr('id');
        $.post("index.php?d=admin&f=user&m=del",'id='+value).then((text)=>{
            if(text==1){
                $(this).parents('tr').remove();
            }else{
                alert("删除失败");
            }
        })
    });
    //修改内容
    tbody.delegate('td:not(:last)',"click",function(){
        //表格
        let it=$(this);
        //旧内容
        let oldval=$(this).html();
        //表格属性
        let typ=$(this).attr('type');
        //表格id对应于数据库里面的id号
        let val=$(this).parents('tr').attr('id');
        let nr;
        $(this).html('');
        $('<input>').val(oldval).appendTo($(this)).click(function(e){
            e.stopPropagation();
        }).focus().blur(function(){
            nr=$(this).val();
            if(nr==oldval){
                it.html(nr);
            }else{
                console.log(typ,nr,val);
                $.ajax({
                    url:"index.php?d=admin&f=user&m=update",
                    data:{  'type':typ,'id':val,'value':nr},
                    type:'post',
                    success:function(text){
                        if(text){
                            it.html(nr);
                            alert('修改成功！');
                        }else{
                            alert("修改失败");
                        }
                    },
                    error:function(){
                        alert('reeor');
                    }

                })
            }
        });
    })
};
