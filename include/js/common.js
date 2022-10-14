$(function(){

	//scroll
	/*
	$(window).scroll(function(){
		let scrVal = $(window).scrollTop();
		console.log(scrVal);
	})
	*/

	//pc 메뉴 Hover
	$(".header .nav .navUl .navLi").on("mouseenter",function(){
		$(this).find("ul").stop().slideDown("fast");
		$(this).siblings().find("ul").stop().slideUp("fast");
	})
	$(".header .nav .navUl .navLi").on("mouseleave",function(){
		$(this).find("ul").stop().slideUp("fast");
	})

	//모바일 전체 메뉴
	$(".allMenuBtn").on("click",function(){
		$(".allMenu").toggleClass("on");
	})
	
	//모바일 전체메뉴 토글
	$(".allMenu .navUl .navLi > a").on("click",function(){
		let depLen = $(this).siblings().length;
		if(depLen > 0){
			$(this).siblings("ul").stop().slideToggle("fast");
			$(this).parents(".navLi").siblings().find("ul").stop().slideUp("fast");

			return false;
		}
	})

	//footer 네비게이션 토글
	if($(window).width() <= 1000){
		$(".footer .nav .navUl .navLi > a").on("click",function(){
			let depLen = $(this).siblings().length;
			if(depLen > 0){
				$(this).siblings("ul").stop().slideToggle("fast");
				$(this).parents(".navLi").siblings().find("ul").stop().slideUp("fast");

				return false;
			}
		})
	}

})