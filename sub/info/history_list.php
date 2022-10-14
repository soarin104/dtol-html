<section class="boardSec">
	<div class="inner">
		<br><br>
		<article>
			<div class="top">
				<!-- 검색박스 : 개발작업 필요 -->
				<form action=""class="searchBox">
					<select name="" id="">
						<option value="">제목</option>
						<option value="">연도</option>
					</select>
					<div>
						<input type="text" name="">
					</div>
					<a href="#" class="searchBtn">
						<img src="./include/img/boardSearch.png" alt="">
					</a>
				</form>
			</div>
			<div class="listBox doList">
				<!-- 리스트 -->
				<form action="">
					<ul class="boardUl">
						<? for($i=0; $i<=9;$i++){ ?>
						<li>
							<a href="./sub.php?cate=info&page=history_view">
								<div class="chkBox">
									<input type="checkbox" name="">
								</div>
								<div class="imgBox">
									<img src="./include/img/info/history_img.png" alt="">
								</div>
								<div class="txtBox">
									<h5>
										1950년대 납세조합 결성취지서
									</h5>
									<p>
										<span>1958년</span>
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