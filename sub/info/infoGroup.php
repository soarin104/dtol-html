<? 
	$cate_tit = "조합소개";
	$cate_txt = "한국출판협동조합의<br>조합소개 입니다.";
	include './sub/common/subVisual.php';
?>

<section class="infoGroupBox">
	<div class="inner">
		<h2 class="tit">
			<strong>조합소개</strong>
		</h2>
		<ul>
			<li>
				<div class="txtBox">
					<h5>설립목적</h5>
					<p>
						한국출판협동조합의 설립 목적
					</p>
				</div>
				<a href="#" class="more">
					<strong>자세히보기</strong>
					<span>+</span>
				</a>
			</li>
			<li>
				<div class="txtBox">
					<h5>미션</h5>
					<p>
						출판 유통의 올바른 미래 선도
					</p>
				</div>
				<a href="#" class="more">
					<strong>자세히보기</strong>
					<span>+</span>
				</a>
			</li>
			<li>
				<div class="txtBox">
					<h5>비전</h5>
					<p>
						출판사와 서점이 주인인 <br class="pc">
						출판 유통 회사
					</p>
				</div>
				<a href="#" class="more">
					<strong>자세히보기</strong>
					<span>+</span>
				</a>
			</li>
			<li>
				<div class="txtBox">
					<h5>핵심가치</h5>
					<p>
						상생발전·선순환·가치창출
					</p>
				</div>
				<a href="#" class="more">
					<strong>자세히보기</strong>
					<span>+</span>
				</a>
			</li>
		</ul>
	</div>
</section>

<aside class="infoPop">
	<article>
		<div class="box">
			<ul>
				<li>
					<h5>
						설립목적
					</h5>
					<span>
						한국출판협동조합의 설립 목적
					</span>
					<dl>
						<dt>
							출판산업의 건전한 발전과 조합원 상호간의 복리증진을 도모하며 협동사업을 수향하여 
							조합원의 자주적 경제활동을 조장하고  경제적 지위향상을 기하여 출판문화의 진흥과 
							국민경제의균형있는 발전을 도모 
						</dt>
					</dl>
				</li>
				<li>
					<h5>
						미션
					</h5>
					<span>
						출판 유통의 올바른 미래 선도
					</span>
					<dl>
						<dt>
							창의적이고 다양한 출판콘텐츠의 유동
						</dt>
						<dd>
							문화산업의 원천콘텐츠인 창의적이고 다양한 출판콘텐츠가 시장에서 소비되는 유통 체계 구축
						</dd>
						<dt>
							출판사와 서점의 동반성장
						</dt>
						<dd>
							책의 발견성을 높이고 책이 지역서점에서 독자에게신속하고 정확하게 전달할 수 있는 체계를 구축하여 출판사와 서점의 경쟁력을 제고 
						</dd>
					</dl>
				</li>
				<li>
					<h5>
						비전
					</h5>
					<span>
						출판사와 서점이 주인인 출판 유통 회사
					</span>
					<dl>
						<dt>
							출판사와 서점이 주인
						</dt>
						<dd>
							출판 유통의 주요한 구성원인 출판사와 서점이 주도하는 출판 공급망 구축
						</dd>
						<dt>
							출판 유통 회사
						</dt>
						<dd>
							독자가 원하는 도서를 신속하고 정확하게 지역서점을 통하여 공급하는 출판 유통 회사 
						</dd>
					</dl>
				</li>
				<li>
					<h5>
						핵심가치
					</h5>
					<span>
						상생발전·선순환·가치창출
					</span>
					<dl>
						<dt>
							상생발전
						</dt>
						<dd>
							출판사와 서점이 상호 존중하며 발전하는 체계 구축에 노력한다.
						</dd>
						<dt>
							선순환
						</dt>
						<dd>
							안정적인 책 판매망을 확보하여 다양하고 창의적인 콘텐츠가 판매되고 판매 수익이 발전된 콘텐츠가 재생산되는 선순환 구조를 만든다. 
						</dd>
						<dt>
							가치창출
						</dt>
						<dd>
							한국출판협동조합과 책의 가치를 높이기 위하여 노력한다.
						</dd>
					</dl>
				</li>
			</ul>
		</div>
		<a href="#" class="closePop"></a>
	</article>
</aside>

<script>
	$(function(){
	
		//조합소개 팝업
		$(".infoGroupBox ul li").on("click",function(){
			let infoIdx = $(this).index();
			$(".infoPop").attr('data-bg',infoIdx);
			$(".infoPop").fadeIn("fast");
			$(".infoPop article .box ul li").eq(infoIdx).show();
			$(".infoPop article .box ul li").eq(infoIdx).siblings().hide();

			return false;
		})

		$(".infoPop article .closePop").on("click",function(){
			$(".infoPop").fadeOut("fast");
			return false;
		})

	})
</script>