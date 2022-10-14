<? 
	$cate_tit = "조합소개";
	$cate_txt = "한국출판협동조합의<br>오시는 길을 안내해드립니다.";
	include './sub/common/subVisual.php';
?>

<section class="mapBox">
	<div class="inner">
		<h2 class="tit">
			<strong>본사</strong>
		</h2>
		<div class="top">
			<p>
				<img src="./include/img/info/mapPoint.png" alt="">
				<span>서울특별시 마포구 토정로 222 한국출판콘텐츠센터 5층 | 04091</span>
			</p>
			<a href="#" class="copy pc" data-add="서울특별시 마포구 토정로 222 한국출판콘텐츠센터 5층" onclick="copy(this);return false;">
				주소 복사하기
			</a>
		</div>
		<div class="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3163.4548326637573!2d126.93284121563309!3d37.544346533155576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357c98b79c6b128d%3A0xa79d08ea2e086e67!2z7ZWc6rWt7Lac7YyQ7ZiR64-Z7KGw7ZWp!5e0!3m2!1sko!2skr!4v1662719440795!5m2!1sko!2skr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>
		<div class="tel">
			<p>
				<img src="./include/img/info/iconTel.png" alt="">
				<span>대표전화</span>
				<a href="tel:02-716-5616">02-716-5616</a>
			</p>
		</div>
	</div>
</section>

<section class="mapBox">
	<div class="inner">
		<h2 class="tit">
			<strong>물류센터</strong>
		</h2>
		<div class="top">
			<p>
				<img src="./include/img/info/mapPoint.png" alt="">
				<span>경기도 파주시 적성면 적성산단3로 10 한국출판협동조합 적성물류센터 관리동 | 10802</span>
			</p>
			<a href="#" class="copy pc" data-add="경기도 파주시 적성면 적성산단3로 10 한국출판협동조합 적성물류센터 관리동" onclick="copy(this);return false;">
				주소 복사하기
			</a>
		</div>
		<div class="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3163.4548326637573!2d126.93284121563309!3d37.544346533155576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357c98b79c6b128d%3A0xa79d08ea2e086e67!2z7ZWc6rWt7Lac7YyQ7ZiR64-Z7KGw7ZWp!5e0!3m2!1sko!2skr!4v1662719440795!5m2!1sko!2skr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>
		<div class="tel">
			<p>
				<img src="./include/img/info/iconTel.png" alt="">
				<span>대표전화</span>
				<a href="tel:070-7119-1744">070-7119-1744</a>
			</p>
		</div>
	</div>
</section>

<script>
	//복사하기 스크립트
	function copyToClipboard(val) {
		const t = document.createElement("textarea");
		document.body.appendChild(t);
		t.value = val;
		t.select();
		document.execCommand('copy');
		document.body.removeChild(t);
	}
	function copy(e) {
		var copyTxt = e.dataset.add;
		copyToClipboard(copyTxt);
		alert(copyTxt+"\n클립보드에 복사되었습니다.");
	}
</script>