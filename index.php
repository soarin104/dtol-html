<? 
	$page = "index";
	include './include/header.php' 
?>

<section class="visual">
	<article class="visualCon on">
		<div class="txtBox">
			<h2>
				<span>Korea Publishers Cooperative</span>
				조합소개
			</h2>
			<p>
				지속성장을 추구하는 기업<br>
				고객 여러분과 문화를 만들어 갑니다.
			</p>
			<a href="./sub.php?cate=info&page=infoMain">
				<span>자세히보기</span>
				<img src="./include/img/visualMore.png" alt="">
			</a>
		</div>
		<div class="cover">
			<p>
				1961
			</p>
		</div>
	</article>

	<article class="visualCon">
		<div class="txtBox">
			<h2>
				<span>Korea Publishers Cooperative</span>
				조합소개
			</h2>
			<p>
				지속성장을 추구하는 기업<br>
				고객 여러분과 문화를 만들어 갑니다.
			</p>
			<a href="./sub.php?cate=info&page=infoMain">
				<span>자세히보기</span>
				<img src="./include/img/visualMore.png" alt="">
			</a>
		</div>
		<div class="cover">
			<p>
				1961
			</p>
		</div>
	</article>

	<article class="visualCon">
		<div class="txtBox">
			<h2>
				<span>Korea Publishers Cooperative</span>
				조합소개
			</h2>
			<p>
				지속성장을 추구하는 기업<br>
				고객 여러분과 문화를 만들어 갑니다.
			</p>
			<a href="./sub.php?cate=info&page=infoMain">
				<span>자세히보기</span>
				<img src="./include/img/visualMore.png" alt="">
			</a>
		</div>
		<div class="cover">
			<p>
				1967
			</p>
		</div>
	</article>

	<article class="visualCon">
		<div class="txtBox">
			<h2>
				<span>Korea Publishers Cooperative</span>
				조합소개
			</h2>
			<p>
				지속성장을 추구하는 기업<br>
				고객 여러분과 문화를 만들어 갑니다.
			</p>
			<a href="./sub.php?cate=info&page=infoMain">
				<span>자세히보기</span>
				<img src="./include/img/visualMore.png" alt="">
			</a>
		</div>
		<div class="cover">
			<p>
				1980
			</p>
		</div>
	</article>

	<article class="visualCon">
		<div class="txtBox">
			<h2>
				<span>Korea Publishers Cooperative</span>
				조합소개
			</h2>
			<p>
				지속성장을 추구하는 기업<br>
				고객 여러분과 문화를 만들어 갑니다.
			</p>
			<a href="./sub.php?cate=info&page=infoMain">
				<span>자세히보기</span>
				<img src="./include/img/visualMore.png" alt="">
			</a>
		</div>
		<div class="cover">
			<p>
				2022
			</p>
		</div>
	</article>
</section>

<section class="info">
	<div class="inner">
		<article class="txtBox">
			<h2 class="tit">
				한국출판협동조합 이사장
			</h2>
			<p class="conTxt">
				출판관계자 <strong>모두가 만족할 수 있는<br>
				출판유통환경</strong>을 향해 나아갑니다.
			</p>
			<a href="./sub.php?cate=info&page=ceo" class="more">
				<span>자세히보기</span>
				<img src="./include/img/visualMore2.png" alt="">
			</a>
		</article>
		<article class="imgBox">
			<img src="./include/img/infoPic.png" alt="">
		</article>
	</div>
	<!-- <div class="infoModal">
		<div class="box">
			<img src="./include/img/ceoInfo.png" alt="">
			<span class="closeModal">
				<span></span>
				<span></span>
			</span>
		</div>
	</div> -->
</section>

<section class="board">
	<div class="inner">
		<h2 class="tit">
			한국출판협동조합 소식
		</h2>
		<article class="notice">
			<div class="top">
				<h2>
					공지사항
				</h2>
				<a href="./sub.php?cate=news&page=notice" class="more">
					<span>MORE</span>
					<img src="./include/img/boardMore.png" alt="">
				</a>
			</div>
			<ul class="list">
				<? for($i=0;$i<=3;$i++){ ?>
				<li>
					<a href="./sub.php?cate=news&page=notice_view">
						<h5>
							홈페이지 공지사항입니다.
						</h5>
						<span>22.00.00</span>
					</a>
				</li>
				<? } ?>
			</ul>
		</article>

		<article class="news">
			<div class="top">
				<h2>
					조합원 소식
				</h2>
				<a href="./sub.php?cate=news&page=news" class="more">
					<span>MORE</span>
					<img src="./include/img/boardMore.png" alt="">
				</a>
			</div>
			<ul class="list">
				<? for($i=0;$i<=3;$i++){ ?>
				<li>
					<a href="./sub.php?cate=news&page=news_view">
						<h5>
							조합원 소식입니다.
						</h5>
						<span>22.00.00</span>
					</a>
				</li>
				<? } ?>
			</ul>
		</article>
	</div>
</section>

<section class="bro">
	<div class="inner">
		<h2 class="tit">
			홍보 브로슈어
		</h2>
		<article class="left">
			<div class="imgBox">
				<img src="./include/img/bro.png" alt="">
			</div>
			<div class="down">
				<div>
					<span>한국어</span>
					<a href="#">
						<img src="./include/img/pdfDown.png" alt="">
					</a>
				</div>
				<p>
					PDF파일을 보시려면 Acrobat Reader 프로그램을 설치하세요.
				</p>
			</div>
		</article>
		<article class="right">
			<a href="#" class="more">
				<span>책광장 "모두" 바로가기</span>
				<img src="./include/img/visualMore2.png" alt="">
			</a>
			<p class="conTxt">
				한국출판협동조합은 서점과 출판사, 그리고 독자 등
				<strong>출판관계자들이 만족할 만한 출판 환경을 
				만드는 것을 목표로 하고 있습니다.</strong>
			</p>
			<div class="link">
				<a href="#">출판사 SCM 바로가기</a>
				<a href="#">서점 SCM 바로가기</a>
			</div>
		</article>
	</div>
</section>
			
<? include './include/footer.php' ?>
	