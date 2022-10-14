<? 
	//서브페이지
	if(isset($_GET['page'])){
		//카테고리, 페이지 변수
		$cate = $_GET['cate'];
		$page = $_GET['page'];
		//HEADER
		include './include/header.php';
		//css 추가
		echo '<link rel="stylesheet" href="./include/css/sub.css">';
		echo '<link rel="stylesheet" href="./include/css/'.$cate.'.css">';
		//서브페이지 컨텐츠
		include './sub/'.$cate.'/'.$page.'.php';
		//FOOTER
		include './include/footer.php';
	}else{
		//HEADER
		include './include/header.php';
		//잘못된 경로
		echo '<script>alert("올바른 경로가 아닙니다.");location.replace("./");</script>';
		//FOOTER
		include './include/footer.php';
	}
?>
	