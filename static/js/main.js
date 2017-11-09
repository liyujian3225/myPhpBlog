/**
 * Created by 李雨健 on 2017/6/26.
 */
$(document).ready(function(){
    move();
    setInterval(move,1000);
    function move(){
        let time=new Date();
        $('.tim').html(`
        ${time.getFullYear()}年
        <span>${time.getMonth()+1}</span>月
        <span>${time.getDate()}</span>日
        <span>${time.getHours()}</span>时
        <span>${time.getMinutes()}</span>分
        <span>${time.getSeconds()}</span>秒
        `)
    }
    $('h6').click(function(){
        $(this).next().stop().slideToggle();
    })
});