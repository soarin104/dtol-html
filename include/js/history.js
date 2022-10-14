	$(function(){
		
		//모달
		$(".hisSec .imgCon ul li a").on("click",function(){
			$(".hisModal").fadeIn("fast");
			return false;
		})

		$(".hisModal .box .modalClose").on("click",function(){
			$(".hisModal").fadeOut("fast");
		})
		
		//스크롤 조정
		let lastScroll = 0;
		let dlTop = $(".hisSec .txtCon dl").offset().top; //dl top위치
		$(window).on("scroll",function(e){
			
			return false;
			
			let scrollTop = $(this).scrollTop(); //스크롤 값
			let dlHeight = $(".hisSec .txtCon dl").outerHeight(); //dl 높이
			let imgconH = $(".hisSec .imgCon").outerHeight(); //이미지 영역 높이
			let hH = $(".header").outerHeight(); //헤더높이
			let winH = $(window).height(); //화면 높이
			let dlVal = dlTop + dlHeight - winH; //화면 고정 기준1
			let dlVal2 = dlTop + imgconH - winH; //화면 고정 기준2
			let dlVal3 = dlTop + imgconH - dlHeight - hH; //화면 원복 기준1
			let dlVal4 = dlTop - hH; //화면 원복 기준2
			//console.log(scrollTop+"/"+dlVal+'/'+dlVal2+'/'+dlVal3+'/'+dlVal4);
			if(scrollTop > lastScroll){
				//마우스 스크롤 다운
				if(scrollTop >= dlVal && scrollTop < dlVal2){
					if($(".hisSec article").hasClass("isAbsol")){
						
					}else{
						$(".hisSec article").removeClass();
						$(".hisSec article").addClass("isFix");
					}
					
				}
			}else if(scrollTop <= lastScroll){
				//마우스 스크롤 업
				if(scrollTop >= dlVal && scrollTop < dlVal2){
					if($(".hisSec article").hasClass("isFix")){
						$(".hisSec article").removeClass();
						$(".hisSec article").addClass("isAbsol");
					}
				}
				
			}

			
			if(scrollTop >= dlVal2){
				if($(".hisSec article").hasClass("isFix")){
					$(".hisSec article").removeClass();
					$(".hisSec article").addClass("isAbsol");
				}
			}
			if(scrollTop <= dlVal3 && scrollTop > dlVal){
				if($(".hisSec article").hasClass("isAbsol")){
					$(".hisSec article").removeClass();
					$(".hisSec article").addClass("isFixTop");
				}
			}
			if(scrollTop < dlVal4){
				if($(".hisSec article").hasClass("isFixTop")){
					$(".hisSec article").removeClass();
				}
				$(".hisSec article").removeClass();
			}

			lastScroll = scrollTop;
		})
	})
