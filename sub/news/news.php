<? 
	$cate_tit = "소식";
	$cate_txt = "한국출판협동조합의<br>조합원 소식을 알려드립니다.";
	include './sub/common/subVisual.php';
?>

<section class="boardSec">
	<div class="inner">
		<h2 class="tit">
			<strong>조합원 소식</strong>
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
			</div>
			<div class="listBox">
				<!-- 리스트 -->
				<form action="">
					<table>
						<thead>
							<tr>
								<th class="chkBox">선택</th><!-- 어드민에서만 노출 -->
								<th>번호</th>
								<th class="tableTit">제목</th>
								<th class="pc">날짜</th>
								<th class="pc">조회</th>
							</tr>
						</thead>
						<tbody>
							<?php
								//데이터 베이스 연동 작업 필요
								for($i=1;$i<=15;$i++){
									$no = 16 - $i;
							?>
							<tr>
								<td class="chkBox"><input type="checkbox" name=""></td><!-- 어드민에서만 노출 -->
								<td><?=$no?></td>
								<td class="tableTit"><a href="./sub.php?cate=news&page=news_view">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, odio?
								</a></td>
								<td class="pc">2022-00-00</td>
								<td class="pc">0</td>
							</tr>
							<? } ?>
						</tbody>
					</table>
				</form>
			</div>
			<? 
				//페이지 하단 버튼 (넘김 버튼, 제어 버튼)
				include './sub/common/pageBtn.php'; 
			?>
		</article>
	</div>
</section>