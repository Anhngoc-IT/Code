<!DOCTYPE html>
<html>
<head>
	<title>Website_shopping</title>
	<link href="style/main.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">	
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
	<meta charset="utf-8">
</head>
<body>
	<!-- header -->
	<header id="header">
		<div class="grid">
			<div class="header__top">
				<div class="header__top-quote">
					<h1 class="header__top-quote-text" 	>đồng hồ nam, đồng hồ thụy sỹ</h1>
				</div>
				<div class="header__top-search">
					<div class="header__top-search-form">
						<input class="header__top-search-input" placeholder="Nhập vào để tìm kiếm ... "></input>
						<button class="header__top-search-btn"> 
							<i class="fa fa-search" aria-hidden="true"></i>
						</button>
					</div>
				</div>
				<div class="header__top-nav">
					<ul class="header__top-nav-list">
						<li class="header__top-nav-item">
							<a class="header__top-nav-item-link"href="">Trang chủ</a>
						</li>
						<li class="header__top-nav-item">
							<a class="header__top-nav-item-link"href="news.php">Tin tức đồng hồ</a>
						</li>
						<li class="header__top-nav-item">
							<a class="header__top-nav-item-link"href="he-thong-cua-hang.php">Hệ thống cửa hàng</a>
						</li>
						<li class="header__top-nav-item">
							<a class="header__top-nav-item-link"href="">Liên hệ</a>
						</li>
					</ul>	
				</div>
			</div>
		</div>
		<div class="grid">
			<div class="header__bottom">
				<div class="header__bottom-logo">
					<img src="img/logo.png">
				</div>
				<div class="header__bottom-menu">
					<ul class="header__bottom-list">
						<li class="header__bottom-item">
							<a class="header__bottom-item-link" href="">ĐỒNG HỒ CHÍNH HÃNG</a>
						</li>
						<li class="header__bottom-item">
							<a class="header__bottom-item-link" href="">KÍNH MẮT THỜI TRANG</a>
						</li>
						<li class="header__bottom-item">
							<a class="header__bottom-item-link" href="">PHỤ KIỆN ĐỒNG HỒ</a>
						</li>
					</ul>
				</div>
				<div class="header__bottom-right">
					<a class="header__bottom-right-cart" href="#">
						<i class=" fa fa-2x fa-shopping-cart" aria-hidden="true"></i>
					</a>
					<a class="header__bottom-right-auth" href="authen_form.php">Đăng nhập</a>
					<a class="header__bottom-right-auth" href="authen_form.php">Đăng ký</a>
				</div>
			</div>
		</div>
	</header>
	<div class="banner">
		<img src="img/banner3.jpg"/>
	</div>
	<div class="container">
		<div class="item1">
			<h3 class="h3"style="margin-top: -13px"><a href="">Sản phẩm bán chạy</a></h3>
			<ul class="layout1_menu">
				<li><a href="#">Kính râm</a></li>
				<li><a href="#">Đồng hồ</a></li>
				<li><a href="#">Dây đồng hồ</a></li>
			</ul>
			<ul class="layout1_img">
				<li>
					<img src="img/slide1.jpg"style="width: 300px; height: 200px">
					<p class="name"><a class="name_" href="#">Name : Đồng hồ SSQ</a></p>
					<p class="Price">Price : 12$</p>
					<p class="Made">Made by Japan</p>
				</li>
				<li>
					<img src="img/dh_logo.jpg"style="width: 300px; height: 200px">
					<p class="name"><a class="name_" href="#">Name : đồng hồ SMQ</a></p>
					<p class="Price">Price : 8$</p>
					<p class="Made">Made by VietNam</p>
				</li>
				<li>
					<img src="img/kinhdam.jpg"style="width: 300px; height: 200px">
					<p class="name"><a class="name_" href="#">Name : Kính râm SS5</a></p>
					<p class="Price">Price : 10$</p>
					<p class="Made">Made by china</p>
				</li>
				<li>
					<img src="img/pic1.jpg"style="width: 300px; height: 200px">
					<p class="name"><a class="name_" href="#">Name : đồng hồ SD1</a></p>
					<p class="Price">Price : 9$</p>
					<p class="Made">Made by Korean</p>
				</li>
			</ul>
		</div>
		<div class="item2">
			<h3 class="h3" style="margin-top: -13px"><a href="">Đang sale </a></h3>
			<ul class="layout2_menu">
				<li><a href="#">Đồng hồ nữ </a></li>
				<li><a href="#">Đồng hồ nam </a></li>
				<li><a href="#">thiết bị phụ kiện </a></li>
			</ul>
			<ul class="layout2_img">
				<li>
					<img src="img/dh_nam1.png" style="width: 300px; height: 150px">
					<p class="name"><a class="name_" href="#">Name : đồng hồ nam-JJQ </a></p>
					<p class="Price">Price: 11$</p>
					<p class="Made">Made by korean</p>
				</li>
				<li>
					<img src="img/dh_nam.png" style="width: 300px; height: 150px">
					<p class="name"><a class="name_" href="#">Name : đồng hồ nam-HHD </a></p>
					<p class="Price">Price: 15$</p>
					<p class="Made">Made by Vietnam</p>
				</li>
				<li>
					<img src="img/dh_nu.jpg" style="width: 300px; height: 150px">
					<p class="name"><a class="name_" href="#">Name : đồng hồ nữ-DDE </a></p>
					<p class="Price">Price: 8$</p>
					<p class="Made">Made by Japan</p>
				</li>
				<li>
					<img src="img/pk_dh.jpg" style="width: 300px; height: 150px">
					<p class="name"><a class="name_" href="#">Name :Phụ kiện đồng hồ</a></p>
					<p class="Price">Price: 7$</p>
					<p class="Made">Made by korean</p>
				</li>
			</ul>
		</div>
		<div class="item3">
			<footer class="item3_footer">
				<p class="item3_p">coppyright by Pham Xuan Ngoc</p>
			</footer>	
	    </div>
</body>
</html>