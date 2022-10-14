<? 
	$cate_tit = "조합소개";
	$cate_txt = "1958년부터 시작된 한국출판조합의 도전과 성취,<br>그 여정을 소개합니다.";
	include './sub/common/subVisual.php';
?>

<script src="./include/js/history.js"></script>

<aside class="hisTab">
	<a href="./sub.php?cate=info&page=history" class="on">
		1950년~1999년
	</a>
	<a href="./sub.php?cate=info&page=history2">
		2000년~2021년
	</a>
</aside>

<section class="hisSec">
	<div class="inner">
		<h2 class="tit">
			<strong>연혁</strong>
			<!-- 관리자만 노출 -->
			<a href="./sub.php?cate=info&page=history_list" class="setting">
				<img src="./include/img/setting.png" alt="">
			</a>
			<!-- //관리자만 노출 -->
		</h2>
		<p class="conTxt">
			한국출판협동조합의 1958년부터의 도전과 성취의 여정을 소개합니다.
		</p>
		<h3>
			1958년
		</h3>
		<article>
			<div class="txtCon">
				<dl>
					<dt>1958</dt>
					<dd>
						창립 (조합원 46사, 사단법인/종로구 인사동 소재) <br>
						출판물 공동판매 사업개시
					</dd>
					<dt>1962</dt>
					<dd>
						<p class="dot">사옥이전 (서울시 종로구 신문로)</p>
						<p class="dot">문교부로부터 중소기업협동조합 인가를 받음</p>
					</dd>
					<dt>1966</dt>
					<dd>
						'출판물협동공급윤리강령' 채택
					</dd>
					<dt>1967</dt>
					<dd>
						사옥 개축 (서울시 종로구 신문로)
					</dd>
					<dt>1970</dt>
					<dd>
						우량아동도서목록 발간
					</dd>
					<dt>1975</dt>
					<dd>
						중소기업협동조합중앙회 총회 우수조합 표창 수상
					</dd>
					<dt>1977</dt>
					<dd>
						'상공의 날'기념식에서 국무총리 표창 수상
					</dd>
					<dt>1980</dt>
					<dd>
						사옥이전 (서울시 마포구 신수동)
					</dd>
					<dt>1981</dt>
					<dd>
						일본 서적계 연구 시찰
					</dd>
					<dt>1982</dt>
					<dd>
						미국 출판계 연구 시찰
					</dd>
					<dt>1983</dt>
					<dd>
						‘83 전국도서시장’ kbs와 2년간 공동개최
					</dd>
					<dt>1985</dt>
					<dd>
						중소기업협동조합중앙회 총회 상공부장관 우수단체 표창
					</dd>
					<dt>1989</dt>
					<dd>
						우리민족 서로돕기운동 본부와 <br>
						‘북한 책 보내기 운동’ 개최
					</dd>
					<dt>1991</dt>
					<dd>
						<p class="dot">뉴욕 ABA 도서전시회(American booksellers 
						   Association Convention & Trade Exhibit) 
						   참관</p>
						<p class="dot">뉴욕 댈튼 서점 견학</p>
						<p class="dot">샌프란시스코 탐슨 출판사 견학</p>
						<p class="dot">프랑스 프낙(Fnac) 서점 견학</p>
						<p class="dot">아쉐트(Hachette) 출판유통사 도서창고 견학</p>
						<p class="dot">독일 프랑크프루트 국제도서전(Frankfurt Book 
						   Fair) 참관</p>
						<p class="dot">일원화 공급제도 도입·시행</p>
					</dd>
					<dt>1992</dt>
					<dd>
						<p class="dot"> 출판공로 대통령 표창 수상</p>
						<p class="dot"> 사옥 창고 정비 (서울시 마포구 신수동)</p>
					</dd>
					<dt>1993</dt>
					<dd>
						네덜란드 센트럴북하우스 초청간담회 개최
					</dd>
					<dt>1994</dt>
					<dd>
						<p class="dot"> '서점학교' 개설</p>
						<p class="dot"> 유럽 도서 도매 유통업체 KNV(Koch, Neff & 
							Volckmar GmbH) 유통센터 견학</p>
					</dd>
					<dt>1998</dt>
					<dd>
						<p class="dot"> KBS와 ‘알뜰도서전’ 공동개최</p>
						<p class="dot">우리민족 서로돕기운동 본부와 '북한 책 보내기 
						   운동' 공동개최</p>
					</dd>
					<dt>1999</dt>
					<dd>
						서울국제도서전 참여
					</dd>
				</dl>
			</div>

			<div class="imgCon">
				<ul>
					<? for($i=0;$i<=99;$i++){ ?>
					<li>
						<a href="#">
							<img src="./include/img/info/history_img.png" alt="">
						</a>
					</li>
					<? } ?>
				</ul>
			</div>
		</article>
	</div>
</section>

<? 
	include './sub/info/historyModal.php';
?>