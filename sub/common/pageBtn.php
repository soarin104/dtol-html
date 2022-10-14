<article class="pageBtn">
	<!-- 이전페이지 -->
	<a href="#" class="prevBtn">
		<img src="./include/img/pagePrev.png" alt="">
	</a>
	<!-- 페이지 넘버 -->
	<ul>
		<li class="on"><a href="#">1</a></li>
		<li><a href="#">2</a></li>
		<li><a href="#">3</a></li>
		<li><a href="#">4</a></li>
		<li><a href="#">5</a></li>
	</ul>
	<!-- 다음페이지 -->
	<a href="#" class="nextBtn">
		<img src="./include/img/pageNext.png" alt="">
	</a>
</article>


<!-- 게시물 제어버튼 어드민에서만 노출 -->
<article class="ctrlBox">
	<a href="#" class="allChk">전체선택</a>
	<a href="#" class="del">선택삭제</a>
	<!-- <a href="./sub.php?cate=<?=$cate?>&page=<?=$page?>_form" class="fix">선택수정</a> --><!-- 1개만 선택했을때 해당 게시물 수정 (2개이상 선택불가) -->
	<a href="./sub.php?cate=<?=$cate?>&page=<?=$page?>_form" class="new">신규등록</a>
</article>

<script>
	$(function(){
		//전체선택
		$(".ctrlBox .allChk").on("click",function(){
			$(".boardSec .listBox .chkBox input").prop("checked", true);
			return false;
		})
	})
</script>