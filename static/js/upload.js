/**
 * Created by 李雨健 on 2017/7/9.
 */
class upload {
    constructor() {
        this.type = "image/jpeg,image/png,image/gif";
        this.size = 1024;
        this.containerStyle = {width: 300, border: "1px solid #ccc"};
        this.selectBtnStyle = {width: 150, height: 40, background: "orange", text: "选择图片"};
        this.uploadBtnStyle = {width: 150, height: 40, background: "#6A5094", text: "上传图片"};

        this.Pstyle = {width: 300, border: "1px solid #ccc", " border-radius:": 5}
        this.listStyle = {width: 100, height: 100, border: "1px solid #ccc", margin: 5}
        //  放的是具有数据的列表视图
        this.lists = [];

    }

    createView(params = {}) {
        //1.创建上传的大容器
        this.createContainer(params.container, params.parent, () => {

            //2. 创建选择按钮
            this.createSelectBtn(params.selectBtn);
            //3. 创建上传按钮
            this.createUploadBtn(params.uploadBtn)

            //4.  创建预览的区间
            this.createP(params.P);
            //5.  创建列表  let obj=this.createList(params.list);

            // 6.  注册change事件

            this.change();
        });


        //4. 创建预览

    }


    change() {
        let that = this;
        this.selectBtn.onchange = function () {
            that.data = Array.prototype.slice.call(this.files);

            that.check();
        }
    }

    up(url,callback) {
        let that = this;
        this.uploadBtn.onclick = function () {
            if (!url) {
                console.error("必须要传入地址");
                return;
            }
            for (let i = 0; i < that.data.length; i++) {
                let form = new FormData();
                form.append("file", that.data[i]);
                let ajax = new XMLHttpRequest();
                ajax.onload = function () {
                    callback(ajax.response);
                    console.log(ajax.response)
                }
                !function(i) {
                    ajax.upload.onprogress = function (e) {
                        let total = e.total;
                        let loaded = e.loaded;
                        let bili = loaded / total * 100 + "%";
                        let back = that.lists[i].back;
                        back.style.width = bili;
                    }
                }(i)
                ajax.open("post", url);
                ajax.send(form);
            }

            //1个ajax  5

        }

    }

    //检查
    check() {
        let that=this;
        // 无论是不是符合条件，视图要呈现，但是如果不符合条件，数据要删除
        let temp = [];
        for (let i = 0; i < this.data.length; i++) {
            temp[i] = this.data[i];
        }
        //视图->全部  数据->删
        for (let i = 0; i < temp.length; i++) {
            let obj = this.createList();
            let read = new FileReader();
            read.readAsDataURL(temp[i]);
            (function (obj, read) {
                read.onload = function (e) {
                    obj.img.src = e.target.result;
                }
            })(obj, read)

            console.log(this.data);


            if (!(temp[i].size < this.size && this.type.indexOf(temp[i].type) > -1)) {
                obj.message.style.display = "block";
                obj.message.innerHTML = "不符合条件";


                for (let j = 0; j < temp.length; j++) {
                    if (this.data[i] === temp[j]) {
                        this.data.splice(i, 1);
                    }
                }

                obj.delBtn.onclick=function(){
                    this.parentNode.parentNode.removeChild(this.parentNode);
                }

            } else {
                this.lists.push(obj);
            }

        }


        for(let i=0;i<this.lists.length;i++){
            this.lists[i].delBtn.index=i;
            this.lists[i].delBtn.onclick=function(){
                this.parentNode.parentNode.removeChild(this.parentNode);
                that.data.splice(this.index,1);

            }
        }
    }

    createContainer(container, parent, callback) {
        if (container) {
            this.container = container;
            return;
        }
        if (!parent) {
            console.error("父容器未设置");
            return;
        }
        this.parent = parent;
        this.container = document.createElement("div");
        this.container.style.cssText = "position:relative;border-radius:5px;border:" + this.containerStyle.border + ";width:" + this.containerStyle.width + "px";
        this.parent.appendChild(this.container);
        callback();


    }

    /*
     * 1.  不错
     * 2.  让程序更健壮，更有移植性，有感情的     抽象
     *
     *
     * */
    createSelectBtn(btnEle) {
        if (btnEle) {
            this.selectBtn = btnEle;
            return;
        }
        let div = document.createElement("div");
        div.style.cssText = "width:" + this.selectBtnStyle.width + "px;height:" + this.selectBtnStyle.height + "px;background: " + this.selectBtnStyle.background + ";text-align: center;line-height:" + this.selectBtnStyle.height + "px;position:relative";

        let span = document.createElement("span");
        span.innerHTML = this.selectBtnStyle.text;
        let input = this.selectBtn = document.createElement("input");
        input.type = "file";
        input.accept = this.type;
        input.multiple = "multiple";
        input.style.cssText = " position: absolute;width:100%;height:100%;left:0;top:0;opacity: 0;";

        div.appendChild(span);
        div.appendChild(input);

        this.container.appendChild(div);


    }

    createUploadBtn(btnEle) {
        if (btnEle) {
            this.uploadBtn = btnEle;
            return;
        }

        let div = document.createElement("div");
        div.style.cssText = "width:" + this.uploadBtnStyle.width + "px;height:" + this.uploadBtnStyle.height + "px;background: " + this.uploadBtnStyle.background + ";text-align: center;line-height:" + this.uploadBtnStyle.height + "px";

        let span = document.createElement("span");
        span.innerHTML = this.uploadBtnStyle.text;
        this.uploadBtn = div;
        div.appendChild(span);
        this.container.appendChild(div);


    }

    createP(ele) {
        if (ele) {
            this.P = ele;
            return;
        }
        let div = document.createElement("div");
        div.style.cssText = "width:" + this.Pstyle.width + "px;height:auto;overflow:hidden;border:" + this.Pstyle.border + ";border-radius:" + this.Pstyle["border-radius"] + "px";
        this.P = div;
        this.container.insertBefore(div, this.uploadBtn);

    }

    /*
     * createList 返回值
     * 以及 错误的信息 以及当前的进度
     *
     *   img   图片
     *   message 信息容器
     *   progress  进度条对象
     * */
    createList(ele) {
        if (ele) {
            this.list = ele;
            return;
        }

        //  1.  创建列表容器
        let div = document.createElement("div");
        div.style.cssText = "width:" + this.listStyle.width + "px;height:" + this.listStyle.height + "px;border:" + this.listStyle.border + ";float:left;margin:" + this.listStyle.margin + "px;position:relative";
        //  2. 放入图片
        let img = document.createElement("img");
        img.style.cssText = "width:100%;height:100%;";
        //  3.  进入条
        let progress = document.createElement("div");
        //  4. 创建进入条背景
        progress.style.cssText = "width:100%;height:20px;position:absolute;left:0;bottom:0;border-top:1px solid #ccc";
        let back = document.createElement("div");
        progress.appendChild(back);

        back.style.cssText = "width:0%;height:100%;background:red;position:absolute;left:0;top:0;opacity:.7";
        //  5.  提示信息
        let message = document.createElement("div");
        message.style.cssText = "width:70%;height:20px;background:#ccc;position:absolute;left:0;top:0;right:0;bottom:0;margin:auto;display:none";
        //  6.  创建删除按钮
        let delBtn = document.createElement("div");
        delBtn.style.cssText = "width:20px;height:20px;position:absolute;right:0;top:0;display:none";
        delBtn.innerHTML = "删除";
        div.appendChild(img);
        div.appendChild(progress);
        div.appendChild(message);
        div.appendChild(delBtn);
        this.P.appendChild(div);
        div.onmouseover = function () {
            delBtn.style.display = "block";
        }
        div.onmouseout = function () {
            delBtn.style.display = "none";
        }

        return {
            list: div,
            img: img,
            back: back,
            message: message,
            delBtn: delBtn
        }
    }
}
