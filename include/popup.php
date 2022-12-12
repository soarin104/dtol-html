<? 
//팝업 시간 설정
$nowDay = date("Y-m-d H:i:s",time()); 
$startDay = "2022-12-10 08:00:00"; 
$endDay = "2023-12-25 23:59:59"; 
if($startDay <= $nowDay && $endDay >= $nowDay) { 
?>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
<style>
	.layerPopup {display:none;}
	.layerPopup:before {display: none; content:""; position:fixed; left:0; top:0; width:100%; height:100%; background:rgba(0,0,0,.5);opacity: 1}
	.layerPopup .layerBox {position:absolute; left:50%; top:130px; transform:translate(-50%, 0%); padding:0px; background:#444; border-radius:6px;z-index: 9;padding-bottom: 0px;overflow: hidden;box-shadow: 3px 3px 5px rgba(0,0,0,0.5); max-width:400px;}
	.layerPopup .layerBox .title {margin-bottom:10px; padding-bottom:10px; font-weight:600; border-bottom:1px solid #d9d9d9;}
	.layerPopup .layerBox .cont {margin-bottom:0px;}
	.layerPopup .layerBox p {line-height:0px; font-size:13px;}
	.layerPopup .layerBox p img{width: 100%}
	.layerPopup .layerBox .popclose_area{height: 35px;line-height: 35px;box-sizing: border-box;}
	.layerPopup .layerBox .popclose_area a{display: block;float: left;width: 50%;text-align: center;box-sizing: border-box;color:#fff; font-size:12px; text-decoration:none;}
	.layerPopup .layerBox .popclose_area a:hover{background: #333}
	.layerPopup .layerBox .popclose_area a:first-child{border-right: 1px solid #666}
	.layerPopup .layerBox .btnClose {}
	.layerPopup .layerBox .btnTodayHide {}

	@media screen and (max-width: 720px){
		.layerPopup .layerBox {width: 80%;left:50%; top:80px; transform:translate(-50%, 0%);}
	}
</style>
<script>
	$(document).ready(function(){
		/* Javascript */
		var $layerPopup = document.querySelector('.layerPopup');
		var $btnLayerPopupClose = document.querySelector('.layerPopup .btnClose');
		var $btnLayerPopupTodayHide = document.querySelector('.layerPopup .btnTodayHide');

		//최초 레이어팝업 노출
		layerPopupShow();

		//레이어팝업 닫기 버튼 클릭
		$btnLayerPopupClose.addEventListener('click', function(){
			layerPopupHide(0);
		});

		//레이어팝업 오늘 하루 보지 않기 버튼 클릭
		$btnLayerPopupTodayHide.addEventListener('click', function(){
			layerPopupHide(1);
		});

		//레이어팝업 노출
		function layerPopupShow(){
			$layerPopup.style.display = 'block'
		}
		//레이어팝업 비노출
		function layerPopupHide(state){
			//닫기버튼 오늘하루보지않기 버튼 무관하계 레이어팝업은 닫는다.
			$layerPopup.style.display = 'none'

			//오늘하루보지않기 버튼을 누른 경우
			if(state === 1){
				console.log("11");
				//'testCookie' 이름의 쿠키가 있는지 체크한다.
				if($.cookie('testCookie') == undefined){
					//쿠키가 없는 경우 testCookie 쿠키를 추가
					$.cookie('testCookie', 'pop1', { expires: 1, path: '/' });
					/**
						설명 :
						임의로 testCookie라는 이름에 pop1라는 값을 넣어주었고,
						expires값으로 1을 주어 1일 후 쿠키가 삭제되도록 하였다.
						path값을 '/'로 주면 해당사이트 모든페이지에서 유효한 쿠키를 생성한다.
						특정페이지에서만 작동하려면 페이지 경로를 작성하면 된다.
					**/
				}
			}
		}
		console.log($.cookie('testCookie'));
		if($.cookie('testCookie') == "pop1"){
			document.querySelector('.layerPopup').style.display = 'none';
		}
	})
</script>

<!-- layer popup content -->
<div class="layerPopup">
    <div class="layerBox">
        <div class="cont">
            <p>
				<img src="./include/img/popupTest.gif" alt="">
            </p>
        </div>
		<div class="popclose_area">
			<a href="#" class="btnTodayHide">오늘 하루 보지 않기</a>
			<a href="#" class="btnClose">닫기</a>
		</div>
    </div>
</div>
<?
	}
?>