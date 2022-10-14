<? 
	$cate_tit = "조합원안내";
	$cate_txt = "한국출판협동조합의<br>일원화회원사 입니다.";
	include './sub/common/subVisual.php';
?>

<section class="boardSec">
	<div class="inner">
		<h2 class="tit">
			<strong>일원화회원사</strong>
		</h2>
		<article>
			<div class="top">
				<!-- 검색박스 : 개발작업 필요 -->
				<form action=""class="searchBox">
					<select name="" id="">
						<option value="">구분</option>
						<option value="">거래처명</option>
						<option value="">상호</option>
						<option value="">대표자명</option>
					</select>
					<div>
						<input type="text" name="">
					</div>
					<a href="#" class="searchBtn">
						<img src="./include/img/boardSearch.png" alt="">
					</a>
				</form>
				<span>총 000개사</span>
			</div>
			<div class="listBox">
				<!-- 리스트 -->
				<form action="">
					<table>
						<thead>
							<tr>
								<th class="chkBox">선택</th><!-- 어드민에서만 노출 -->
								<th>구분</th>
								<th>거래처명</th>
								<th>상호</th>
								<th>대표자명</th>
							</tr>
						</thead>
						<tbody>
							<?php
								//데이터 베이스 연동 작업 필요
								for($i=0;$i<=14;$i++){
							?>
							<tr>
								<td class="chkBox"><input type="checkbox" name=""></td><!-- 어드민에서만 노출 -->
								<td>정회원</td>
								<td>구당</td>
								<td>구당</td>
								<td>김현성</td>
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