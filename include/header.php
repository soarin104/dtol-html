<!doctype html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone=no" />
	<title>한국출판협동조합</title>

	<!-- favicon -->
	<link rel="shortcut icon" href="./include/img/favicon.ico" type="image/x-icon">
	<link rel="icon" href="./include/img/favicon.ico" type="image/x-icon">

	<!-- reset/jQuery -->
	<link rel="stylesheet" href="./include/css/reset.css">
	<script src="./include/js/jquery-1.12.4.min.js"></script>

	<!-- fullpage -->
	<link rel="stylesheet" href="./include/plug/fullpage/fullpage.css">
	<script src="./include/plug/fullpage/fullpage.js"></script>

	<!-- slick -->
	<link rel="stylesheet" href="./include/plug/slickSlider/slick.css">
	<link rel="stylesheet" href="./include/plug/slickSlider/slick-theme.css">
	<script src="./include/plug/slickSlider/slick.min.js"></script>

	<!-- chart.js -->
	<script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"></script>

	<!-- css -->
	<link rel="stylesheet" href="./include/css/animation.css">
	<link rel="stylesheet" href="./include/css/common.css">
	<? if($page == "index"){ ?>
	<link rel="stylesheet" href="./include/css/main.css">
	<? }else{ ?>
	<link rel="stylesheet" href="./include/css/sub.css">
	<? } ?>
	<!-- js -->
	<script src="./include/js/animation.js"></script>
	<script src="./include/js/common.js"></script>
	<? if($page == "index"){ ?>
	<script src="./include/js/main.js"></script>
	<? }else{ ?>
	<script src="./include/js/sub.js"></script>
	<? } ?>
</head>
<body>
	<div class="wrap <?=$page?>">
		<!-- header -->
		<header class="header">
			<div class="inner">
				<a href="./index.php" class="logo">
					<img src="./include/img/logo.png" alt="한국출판협동조합">
				</a>
				<? include './nav.php' ?>
				<span class="mb allMenuBtn">
					<span></span>
					<span></span>
					<span></span>
				</span>
			</div>
		</header>
		<!-- //header -->

		<!-- allMenu -->
		<aside class="allMenu mb">
			<? include './nav.php' ?>
		</aside>

		<!-- scrollBar -->
		<aside class="scrollBar pc">
			<span class="point">
				<!-- <img src="./include/img/scrollPoint.png" alt=""> -->
			</span>
			<span class="bar"></span>
		</aside>
		<!-- //scrollBar -->

		<!-- content -->
		<div class="content" id="content">