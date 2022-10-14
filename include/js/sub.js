$(function(){

//게시판 리스트 형식 클릭
$(".boardSec .top .showHow li").on("click",function(){
	$(this).addClass("on");
	$(this).siblings().removeClass("on");
})

$(".boardSec .top .showHow li.showThumb").on("click",function(){
	$(".boardSec .listBox").removeClass("doList");
	$(".boardSec .listBox").addClass("doThumb");
})

$(".boardSec .top .showHow li.showList").on("click",function(){
	$(".boardSec .listBox").removeClass("doThumb");
	$(".boardSec .listBox").addClass("doList");
})

})