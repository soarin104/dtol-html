$(function(){

//visual
$(".visualCon .cover").on("click",function(){
	$(this).parents(".visualCon").addClass("on");
	$(this).parents(".visualCon").siblings().removeClass("on");
})

//이사장 모달
$(".openInfo").on("click",function(){
	$(".infoModal").stop().fadeIn("fast");
	return false;
})

$(".infoModal .closeModal").on("click",function(){
	$(".infoModal").stop().fadeOut("fast");
})

})