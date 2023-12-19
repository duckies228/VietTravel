<!DOCTYPE html>
<html>

<head>
	<title>SURI STORE</title>
	<link rel="stylesheet" type="" href="../content/css/style.css">	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

</head>

<body>
	<header class="sticky-top">
		<div class="container">
			<div class="row">
				<div class="col-2 menu">
					<img src="../content/images/z4021704464061_571e8d1e5b03ba09fd8fac050e183dbc.jpg" height="200px" width="200px">
				</div>
				<div class="col-2">

				</div>
				<div class="col-8 menu">
					<ul>
						<li><a href="layout.php"><i class="fas fa-home"></i>Home</a></li>
						<li><a href="">Introduction</a></li>
						<li><a href="">Shop</a>
							<ul class="menu_child">
								<li><a href="">Hoa Khai Truong</a></li>
								<li><a href="">Hoa Valentine</a></li>
								<li><a href="">Lang Hoa</a></li>
							</ul>
						</li>
						<li><a href="">Contact</a></li>
						<li><a href="#"><i class="fas fa-search"></i></a></li>
						<li><a href=""><i class="fas fa-user"></i>Login</a>
							<ul class="menu_child">
								<li><a href="loginn.php">Login</a></li>
								<li><a href="register.php">Register</a></li>
								<li><a href="../admin/index.php">Admin</a></li>
						</li>
						
					</ul>
					<li><a href="viewcart.php"><i class="fas fa-shopping-cart"></i>Shopping</a></li>
				</div>
			</div>
		</div>
	</header>
	<div class="container slider-margin">
		<div class="row">
			<div class="col-12">
				<div class="slideshow-container">
					<div class="mySlides fade">
						<div class="numbertext">
							1/3
						</div>
						<img src="../content/images/slider-01.jpg" style="width: 100%;">
						<div class="text">suristore.online</div>
					</div>
					<div class="mySlides fade">
						<div class="numbertext">
							2/3
						</div>
						<img src="../content/images/slider-02.jpg" style="width: 100%;">
						<div class="text">suristore.online</div>
					</div>
					<div class="mySlides fade">
						<div class="numbertext">
							3/3
						</div>
						<img src="../content/images/slide3.jpg" style="width: 100%;">
						<div class="text">suristore.online</div>
					</div>
					<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
					<a class="next" onclick="plusSlides(1)">&#10095;</a>
				</div>
				<br>
				<div style="text-align: center;">
					<span class="dot" onclick="currentSlide(1)"></span>
					<span class="dot" onclick="currentSlide(2)"></span>
					<span class="dot" onclick="currentSlide(3)"></span>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12 title">
				<h3>New Products</h3>
			</div>
		</div>
		<div class="row">
			<form action="viewcart.php" method="post">
				<div class="col-2th">
					<div class="card">
						<div class="image">
							<img src="../content/images/Rectangle 20.png">
						</div>
						<div class="name">
							<p>Everlasting Love</p>
						</div>
						<div class="price">
							<p>500.000 VND</p>
						</div>
						<div class="add">
							<input type="submit" name="dathang" value="Mua Ngay">
						</div>
					</div>
				</div>
			</form>
			<form action="viewcart.php" method="post">
				<div class="col-2th">
					<div class="card">
						<div class="image">
							<img src="../content/images/Rectangle 15.png">
						</div>
						<div class="name">
							<p>Intense Passion</p>
						</div>
						<div class="price">
							<p>650.000 VND</p>
						</div>
						<div class="add">
							<input type="submit" name="dathang" value="Mua Ngay">
						</div>
					</div>
				</div>
			</form>
			<form action="viewcart.php" method="post">
				<div class="col-2th">
					<div class="card">
						<div class="image">
							<img src="../content/images/Rectangle 251.png">
						</div>
						<div class="name">
							<p>Faithful Love</p>
						</div>
						<div class="price">
							<p>750.000 VND</p>
						</div>
						<div class="add">
							<input type="submit" name="dathang" value="Mua Ngay">
						</div>
					</div>
				</div>
			</form>
			<form action="viewcart.php" method="post">
				<div class="col-2th">
					<div class="card">
						<div class="image">
							<img src="../content/images/Rectangle 13.png">
						</div>
						<div class="name">
							<p>Keep My Heart</p>
						</div>
						<div class="price">
							<p>800.000 VND</p>
						</div>
						<div class="add">
							<input type="submit" name="dathang" value="Mua Ngay">
						</div>
					</div>
				</div>
			</form>
			<form action="viewcart.php" method="post">
				<div class="col-2th">
					<div class="card">
						<div class="image">
							<img src="../content/images/Rectangle 9.png">
						</div>
						<div class="name">
							<p>Muse</p>
						</div>
						<div class="price">
							<p>350.000 VND</p>
						</div>
						<div class="add">
							<input type="submit" name="dathang" value="Mua Ngay">
						</div>
					</div>
				</div>
			</form>
			<form action="viewcart.php" method="post">
				<div class="col-2th">
					<div class="card">
						<div class="image">
							<img src="../content/images/Rectangle 7.png">
						</div>
						<div class="name">
							<p>Happy Day</p>
						</div>
						<div class="price">
							<p>900.000 VND</p>
						</div>
						<div class="add">
							<input type="submit" name="dathang" value="Mua Ngay">
						</div>
					</div>
				</div>
			</form>
			<form action="viewcart.php" method="post">
				<div class="col-2th">
					<div class="card">
						<div class="image">
							<img src="../content/images/Rectangle 23.png">
						</div>
						<div class="name">
							<p>Colorful New Day</p>
						</div>
						<div class="price">
							<p>1.000.000 VND</p>
						</div>
						<div class="add">
							<input type="submit" name="dathang" value="Mua Ngay">
						</div>
					</div>
				</div>
			</form>
			<form action="viewcart.php" method="post">
				<div class="col-2th">
					<div class="card">
						<div class="image">
							<img src="../content/images/Rectangle 24.png">
						</div>
						<div class="name">
							<p>First Moment of Love</p>
						</div>
						<div class="price">
							<p>600.000 VND</p>
						</div>
						<div class="add">
							<input type="submit" name="dathang" value="Mua Ngay">
						</div>
					</div>
				</div>
			</form>

			<form action="viewcart.php" method="post">

				<div class="col-2th">
					<div class="card">
						<div class="image">
							<img src="../content/images/Rectangle 25.png">
						</div>
						<div class="name">
							<p>Whispered Words</p>
						</div>
						<div class="price">
							<p>400.000 VND</p>
						</div>
						<div class="add">
							<input type="submit" name="dathang" value="Mua Ngay">
						</div>
					</div>
				</div>
			</form>

			<form action="viewcart.php" method="post">	
				<div class="col-2th">
					<div class="card">
						<div class="image">
							<img src="../content/images/Rectangle 26.png">
						</div>
						<div class="name">
							<p>Happy Day</p>
						</div>
						<div class="price">
							<p>600.000 VND</p>
						</div>
						<div class="add">
							<input type="submit" name="dathang" value="Mua Ngay">
						</div>
					</div>
				</div>
			</form>
			<form action="viewcart.php" method="post">	
				<div class="col-2th">
					<div class="card">
						<div class="image">
							<img src="../content/images/Rectangle 21.png">
						</div>
						<div class="name">
							<p>Tranquility</p>
						</div>
						<div class="price">
							<p>700.000 VND</p>
						</div>
						<div class="add">
							<input type="submit" name="dathang" value="Mua Ngay">
						</div>
					</div>
				</div>
			</form>

			<form action="viewcart.php" method="post">	
				<div class="col-2th">
					<div class="card">
						<div class="image">
							<img src="../content/images/Rectangle 20.png">
						</div>
						<div class="name">
							<p>First Love</p>
						</div>
						<div class="price">
							<p>690.000 VND</p>
						</div>
						<div class="add">
							<input type="submit" name="dathang" value="Mua Ngay">
						</div>
					</div>
				</div>
			</form>



		</div>
	</div>
	<div class="moreproduct">
		<h3>See More Products </h3>
		<br>
		<br>
	</div>
	<div class="subbanner">
		<img src="../content/images/slide3.jpg" alt="Banner">
		<br>
		<br>
	</div>
	<div class="bestseller">
		<h3>Best Products</h3>
		<br><br>
	</div>
	<div class="product">
		<div class="productchild">
			<div class="img"> <img src="../content/images/Rectangle 9.png" alt="">
				<div class="name">
					<p>First Love</p>
				</div>
				<div class="price">
					<p>550.000 VND</p>
				</div>
			</div>
		</div>
	</div>
	<div class="product">
		<div class="productchild">
			<div class="img"> <img src="../content/images/Rectangle 14.png" alt="">
				<div class="name">
					<p>Happy Day</p>
				</div>
				<div class="price">
					<p>600.000 VND</p>
				</div>
			</div>
		</div>
	</div>
	<div class="product">
		<div class="productchild">
			<div class="img"> <img src="../content/images/Rectangle 13.png" alt="">
				<div class="name">
					<p>Whispered Words</p>
				</div>
				<div class="price">
					<p>650.000 VND</p>
				</div>
			</div>
		</div>
	</div>
	<div class="product">
		<div class="productchild">
			<div class="img"> <img src="../content/images/Rectangle 19.png" alt="">
				<div class="name">
					<p>First Words of Love</p>
				</div>
				<div class="price">
					<p>450.000 VND</p>
				</div>
			</div> <br>
			<br>
		</div>
	</div>
	<br>
	<br>
	<footer>
		<div class="container">
			<div class="row footer">
				<div class="col-3">
					<h3>Contact</h3>
					<ul class="menu_footer">
						<li><a href="">Location : 32/9D Ba Diem Hoc Mon</a></li>
						<li><a href="">Phone : 0373863708</a></li>
						<li><a href="">Mail :huuduc22082k1@gmail.com</a></li>
					</ul>
				</div>
				<div class="col-3">
					<h3>Category</h3>
					<ul class="menu_footer">
						<li><a href="">Wedding Flowers</a></li>
						<li><a href="">Sale</a></li>
						<li><a href="">Mom's Flowers</a></li>
						<li><a href=""> Valentine Flowers</a></li>
						<li><a href="">Back To School Flowers</a></li>
					</ul>
				</div>
				<div class="col-3">
					<h3>Contents</h3>
					<ul class="menu_footer">
						<li><a href="">Home</a></li>
						<li><a href="">Introduction</a></li>
						<li><a href="">News</a></li>
						<li><a href="">Transaction</a></li>
						<li><a href="">Transport</a></li>
					</ul>
				</div>
				<div class="col-3">
					<h3>Link </h3>
					<ul class="menu_footer">
						<li><a href="">Account</a></li>
						<li><a href="">Shop's Location </a></li>
						<li><a href="">Instruct</a></li>
						<li><a href="">Contact</a></li>
						<li><a href="">Social Network</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12 copy_right">
				<a href="">No copyRight designer By huuduc22082k1@gmail.com </a>
			</div>
		</div>
	</footer>
</body>
<script>
	var slideIndex = 1;
	showSlides(slideIndex);

	function plusSlides(n) {
		showSlides(slideIndex += n);
	}

	function currentSlide(n) {
		showSlides(slideIndex = n);
	}

	function showSlides(n) {
		var i;
		var slides = document.getElementsByClassName("mySlides");
		var dots = document.getElementsByClassName("dot");
		if (n > slides.length) { slideIndex = 1 }
		if (n < 1) { slideIndex = slides.length }
		for (i = 0; i < slides.length; i++) {
			slides[i].style.display = "none";
		}
		for (i = 0; i < dots.length; i++) {
			dots[i].className = dots[i].className.replace(" active", "");
		}
		slides[slideIndex - 1].style.display = "block";
		dots[slideIndex - 1].className += "active";
		setTimeout(showSlides, 1000);
	}
</script>

</html>