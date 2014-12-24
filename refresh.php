ThinkPHP用jQuery局部刷新页面
$(function(){
var DURL="{:U('Home/Test/index')}"
setInterval(test,'5000');
function test(){
 $.post(DURL,{name:""},function(show){
$(".show").html(show)
 })
}

})
