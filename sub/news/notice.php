<? 
	$cate_tit = "소식";
	$cate_txt = "한국출판협동조합의<br>공지사항을 알려드립니다.";
	include './sub/common/subVisual.php';
?>

<section class="boardSec">
	<div class="inner">
		<h2 class="tit">
			<strong>공지사항</strong>
		</h2>
		<article>
			<div class="top">
				<!-- 검색박스 : 개발작업 필요 -->
				<form action=""class="searchBox">
					<select name="" id="">
						<option value="">제목</option>
					</select>
					<div>
						<input type="text" name="">
					</div>
					<a href="#" class="searchBtn">
						<img src="./include/img/boardSearch.png" alt="">
					</a>
				</form>

				<!-- 리스트형식 -->
				<ul class="showHow">
					<li class="showThumb on">
						<span class="icon">
							<span></span>
							<span></span>
							<span></span>
							<span></span>
						</span>
						<p>썸네일</p>
					</li>
					<li class="showList">
						<span class="icon">
							<span></span>
							<span></span>
							<span></span>
						</span>
						<p>리스트</p>
					</li>
				</ul>
			</div>
			<div class="listBox doThumb">
				<!-- 리스트 -->
				<form action="">
					<ul class="boardUl">
						<? for($i=1; $i<=9;$i++){ ?>
						<li>
							<a href="./sub.php?cate=news&page=notice_view">
								<div class="chkBox">
									<input type="checkbox" name="">
								</div>
								<div class="imgBox">
									<img src="./include/img/news/newsThumb.png" alt="">
								</div>
								<div class="txtBox">
									<h5>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit, culpa.
									</h5>
									<p>
										<span>2022-00-00</span>
										<span>조회 : 00</span>
									</p>
								</div>
							</a>
						</li>
						<? } ?>
					</ul>
				</form>
			</div>
			<? 
				//페이지 하단 버튼 (넘김 버튼, 제어 버튼)
				include './sub/common/pageBtn.php'; 
			?>
		</article>
	</div>
</section>