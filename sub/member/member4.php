<? 
	$cate_tit = "조합원안내";
	$cate_txt = "한국출판협동조합의<br>조합원 명단 입니다.";
	include './sub/common/subVisual.php';
?>

<section class="boardSec memberList">
	<div class="inner">
		<h2 class="tit">
			<strong>조합원 명단</strong>
		</h2>
		<article>
			<div class="top">
				<!-- 검색박스 : 개발작업 필요 -->
				<form action=""class="searchBox">
					<select name="" id="">
						<option value="">매입처명</option>
						<option value="">주소</option>
						<option value="">대표자</option>
						<option value="">조합가입일</option>
					</select>
					<div>
						<span>검색 : </span>
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
								<th>매입처명</th>
								<th>주소</th>
								<th>대표자</th>
								<th>조합가입일</th>
							</tr>
						</thead>
						<tbody>
							<?php
								//데이터 베이스 연동 작업 필요
								for($i=0;$i<=14;$i++){
							?>
							<tr>
								<td class="chkBox"><input type="checkbox" name=""></td><!-- 어드민에서만 노출 -->
								<td>한성대학교출판부</td>
								<td>(02867)서울특별시 성북구 삼선교로14길102-39 2층(삼선동2가, 한성대학교)</td>
								<td>이창원</td>
								<td>2001-04-11</td>
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