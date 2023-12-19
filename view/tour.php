<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gói tour</title>
    <link rel="stylesheet" href="../content/css/font.css">
    <link rel="stylesheet" href="../content/css/reset.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="../content/css/header-footer.css">
    <link rel="stylesheet" href="../content/css/tour.css">
    <link rel="stylesheet" href="../content/css/news.css">
</head>

<body>
    <!-- header start -->
    <header class="header">
        <nav class="navbar">
            <div class="navbar-logo">
                <a href="index.php">
                    <img src="../content/images/VIETRAVEL - TRANQUILILY.png" alt="Logo">
                </a>
            </div>
            <ul class="navbar-menu">
                <li><a href="introduce.php">Giới Thiệu</a></li>
                <li class="has-submenu">
                    <a href="tour.php">Gói Tour</a>
                    <ul class="submenu">
                        <li><a href="#">Tour Châu Âu</a></li>
                        <li><a href="#">Tour Châu Á </a></li>
                        <li><a href="#">Tour Nam Mỹ</a></li>
                    </ul>
                </li>
                <li class="has-submenu">
                    <a href="service.php">Dịch Vụ</a>
                    <ul class="submenu">
                        <li><a href="#">Vé Máy Bay</a></li>
                        <li><a href="#">Vé Visa </a></li>
                        <li><a href="#">Vận chuyển - Đưa đón</a></li>
                        <li><a href="">Khách Sạn -Lưu Trú</a></li>
                    </ul>
                </li>

                <li class="has-submenu">
                    <a href="news.php">Tin Tức</a>
                    <ul class="submenu">
                        <li><a href="#">Tin Trong Nước</a></li>
                        <li><a href="#">Tin Quốc Tế </a></li>

                    </ul>
                </li>
                <li class="has-submenu">
                    <a href="libary.php">Thư Viện</a>
                    <ul class="submenu">
                        <li><a href="#">Hình Ảnh</a></li>
                        <li><a href="#">Video </a></li>

                    </ul>
                </li>
                <li><a href="contact.php">Liên Hệ</a></li>
                <li><a href="signup.php">Đăng Ký</a></li>
                <li class="has-submenu">
                    <a href="login.php">Đăng Nhập</a>
                    <ul class="submenu">
                        <li><a href="login.php">User</a></li>
                        <li><a href="../admin/index.php">Admin </a></li>
                    </ul>
                </li>

                <li><a href="#"><i class="fas fa-search"></i></a>Tìm Kiếm</li>
            </ul>
        </nav>
        <div class="header-banner">
            <div class="header-banner_content">
                <h2 class="header-banner_heading">Các gói tour</h2>
            </div>
        </div>
    </header>
    <!-- header end -->
    <main class="main">
        <!-- cards start -->
        <div class="main-cards">
        <form action="card.php" method="post">
            <a href="product.php" class="main-card">
                <div class="card-image">
                    <img src="../content/images/figma/tour-card1.png" alt="" class="card-img">
                    <span class="card-price">9.000.000vnđ </span>
                </div>     
           <div class="card-content">
                    <h3 class="card-heading">SINGAPORE</h3>
                    <div class="card-text">
                        <i class="far fa-clock card-icon"></i>
                        <p>4 ngày</p>
                    </div>
                    <div class="card-text">
                        <i class="far fa-calendar card-icon"></i>
                        <p>Khởi hành: 02/09/2022</p>
                    </div>
                    <div class="card-text">
                        <i class="far fa-map card-icon"></i>
                        <p>Địa điểm: Đà Nẵng</p>
                    </div>
                    <input type="submit" name="dathang" value="Đặt Ngay">
                </div>
           </form>
            </a>
            <form action="card.php" method="post">
            <a href="product.php" class="main-card">
                <div class="card-image">
                    <img src="../content/images/figma/tour-card2.png" alt="" class="card-img">
                    <span class="card-price">9.000.000vnđ </span>

                </div>
                <div class="card-content">
                    <h3 class="card-heading">SYDNEY,AUSTRALIA</h3>
                    <div class="card-text">
                        <i class="far fa-clock card-icon"></i>
                        <p>5 ngày</p>
                    </div>
                    <div class="card-text">
                        <i class="far fa-calendar card-icon"></i>
                        <p>Khởi hành: 02/07/2020</p>
                    </div>
                    <div class="card-text">
                        <i class="far fa-map card-icon"></i>
                        <p>Địa điểm: TP.HCM</p>
                    </div>
                    <input type="submit" name="dathang" value="Đặt Ngay">
                </div>
            </a>
            </form>
            <form action="card.php" method="post">
            <a href="product.php" class="main-card">
                <div class="card-image">
                    <img src="../content/images/figma/tour-card3.png" alt="" class="card-img">
                    <span class="card-price">9.000.000vnđ </span>

                </div>
                <div class="card-content">
                    <h3 class="card-heading">TOKYO,NHẬT BẢN</h3>
                    <div class="card-text">
                        <i class="far fa-clock card-icon"></i> 
                        <p>7 ngày</p>
                    </div>
                    <div class="card-text">
                        <i class="far fa-calendar card-icon"></i>
                        <p>Khởi hành: 12/05/20203</p>
                    </div>
                    <div class="card-text">
                        <i class="far fa-map card-icon"></i>
                        <p>Địa điểm: Hội An</p>
                    </div>
                    <input type="submit" name="dathang" value="Đặt Ngay">
                </div>
            </a>
            </form>
            <form action="card.php" method="post">
            <a href="product.php" class="main-card">
                <div class="card-image">
                    <img src="../content/images/figma/tour-card4.png" alt="" class="card-img">
                    <span class="card-price">10.000.000vnđ </span>

                </div>
                <div class="card-content">
                    <h3 class="card-heading">PARIS,PHÁP</h3>
                    <div class="card-text">
                        <i class="far fa-clock card-icon"></i>
                        <p>7 ngày 6 đêm</p>
                    </div>
                    <div class="card-text">
                        <i class="far fa-calendar card-icon"></i>
                        <p>Khởi hành: 02/09/2020</p>
                    </div>
                    <div class="card-text">
                        <i class="far fa-map card-icon"></i>
                        <p>Địa điểm: TP.Phan Thiết</p>
                    </div>
                    <input type="submit" name="dathang" value="Đặt Ngay">
                </div>
            </a>
            </form>
            <form action="card.php" method="post">
            <a href="product.php" class="main-card">
                <div class="card-image">
                    <img src="../content/images/figma/tour-card5.png" alt="" class="card-img">
                    <span class="card-price">7.000.000vnđ </span>

                </div>
                <div class="card-content">
                    <h3 class="card-heading">VENICE-Ý</h3>
                    <div class="card-text">
                        <i class="far fa-clock card-icon"></i>
                        <p>2 ngày 1 đêm</p>
                    </div>
                    <div class="card-text">
                        <i class="far fa-calendar card-icon"></i>
                        <p>Khởi hành: 02/10/2020</p>
                    </div>
                    <div class="card-text">
                        <i class="far fa-map card-icon"></i>
                        <p>Địa điểm: TP.Cần Thơ</p>
                    </div>
                    <input type="submit" name="dathang" value="Đặt Ngay">
                </div>
            </a>
            </form>
            
            <a href="product.php" class="main-card">
                <div class="card-image">
                    <img src="../content/images/figma/tour-card6.png" alt="" class="card-img">
                    <span class="card-price">4.000.000vnđ </span>

                </div>
                <div class="card-content">
                    <h3 class="card-heading">NEW YORK, MỸ</h3>
                    <div class="card-text">
                        <i class="far fa-clock card-icon"></i>
                        <p>5 ngày</p>
                    </div>
                    <div class="card-text">
                        <i class="far fa-calendar card-icon"></i>
                        <p>Khởi hành: 22/04/2023</p>
                    </div>
                    <div class="card-text">
                        <i class="far fa-map card-icon"></i>
                        <p>Địa điểm: Hà Giang</p>
                    </div>
                    <input type="submit" name="dathang" value="Đặt Ngay">
                </div>
            </a>
            <a href="product.php" class="main-card">
                <div class="card-image">
                    <img src="../content/images/figma/tour-card7.png" alt="" class="card-img">
                    <span class="card-price">13.000.000vnđ </span>

                </div>
                <div class="card-content">
                    <h3 class="card-heading">ẤN ĐỘ</h3>
                    <div class="card-text">
                        <i class="far fa-clock card-icon"></i>
                        <p>3 ngày</p>
                    </div>
                    <div class="card-text">
                        <i class="far fa-calendar card-icon"></i>
                        <p>Khởi hành: 07/09/2020</p>
                    </div>
                    <div class="card-text">
                        <i class="far fa-map card-icon"></i>
                        <p>Địa điểm: TP.HCM</p>
                    </div>
                    <input type="submit" name="dathang" value="Đặt Ngay">
                </div>
            </a>
            <a href="product.php" class="main-card">
                <div class="card-image">
                    <img src="../content/images/figma/tour-card8.png" alt="" class="card-img">
                    <span class="card-price">19.000.000vnđ </span>

                </div>
                <div class="card-content">
                    <h3 class="card-heading">BANGKOK,THÁI LAN</h3>
                    <div class="card-text">
                        <i class="far fa-clock card-icon"></i>
                        <p>2 ngày</p>
                    </div>
                    <div class="card-text">
                        <i class="far fa-calendar card-icon"></i>
                        <p>Khởi hành: 02/09/2020</p>
                    </div>
                    <div class="card-text">
                        <i class="far fa-map card-icon"></i>
                        <p>Địa điểm: Tây Ninh</p>
                    </div>
                    <input type="submit" name="dathang" value="Đặt Ngay">
                </div>
            </a>
            <a href="product.php" class="main-card">
                <div class="card-image">
                    <img src="../content/images/figma/tour-card9.png" alt="" class="card-img">
                    <span class="card-price">9.000.000vnđ </span>

                </div>
                <div class="card-content">
                    <h3 class="card-heading">BRAZIL</h3>
                    <div class="card-text">
                        <i class="far fa-clock card-icon"></i>
                        <p>5 ngày</p>
                    </div>
                    <div class="card-text">
                        <i class="far fa-calendar card-icon"></i>
                        <p>Khởi hành: 02/09/2020</p>
                    </div>
                    <div class="card-text">
                        <i class="far fa-map card-icon"></i>
                        <p>Địa điểm: Hà Nội</p>
                    </div>
                    <input type="submit" name="dathang" value="Đặt Ngay">
                </div>
            </a>
        </div>
        <!-- cards end -->
        <div class="pagination">
        <a href="#" class="prev">Previous</a>
        <a href="#" class="page">1</a>
        <a href="#" class="page">2</a>
        <a href="#" class="page active">3</a>
        <a href="#" class="page">4</a>
        <a href="#" class="page">5</a>
        <a href="#" class="next">Next</a>
    </div>
    </main>
    <!-- footer start -->
    <footer class="footer">
        <div class="footer-content">
            <div class="fst">
                <h4 class="fst-heading"><span>Vie</span>Travel</h4>
                <p>Công viên phần mêm Quang Trung, Q.12,<br>P.12, Q.10, TP.HCM, Việt Nam</p>
                <p>Điện Thoại:0373863708</p>
                <p>Email: vietravel@gmail.com</p>
                <div class="list-icon">
                    <a href="#" class="icon-link"><i class="fab fa-pinterest"></i></a>
                    <a href="#" class="icon-link"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="icon-link"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="icon-link"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="icon-link"><i class="fab fa-youtube"></i></a>
                    <a href="#" class="icon-link"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="fst">
                <h4 class="fst-head">TOUR DU LỊCH</h4>
                <p>Tour châu Âu</p>
                <p>Tour châu Á</p>
                <p>Tour châu Mỹ</p>
                <p>Tour châu Úc</p>
            </div>
            <div class="fst">
                <h4 class="fst-head">DỊCH VỤ</h4>
                <p>Đăng ký Visa</p>
                <p>Đăng ký vé máy bay</p>
                <p>Vận chuyển - Đưa đón</p>
                <p>Khách sạn - Lưu trú</p>
            </div>
            <div class="fst">
                <h4 class="fst-head">Hình Ảnh</h4>
                <div class="images">
                    <a href="#">
                        <img src="../content/images/figma/footer-1.png" alt="" class="img">
                    </a>
                    <a href="#">
                        <img src="../content/images/figma/Rectangle 7.png" alt="" class="img">
                    </a>
                    <a href="#">
                        <img src="../content/images/figma/Rectangle 8.png" alt="" class="img">
                    </a>
                    <a href="#">
                        <img src="../content/images/figma/Rectangle 9.png" alt="" class="img">
                    </a>
                    <a href="#">
                        <img src="../content/images/figma/Rectangle 10.png" alt="" class="img">
                    </a>
                    <a href="#">
                        <img src="../content/images/figma/Rectangle 11.png" alt="" class="img">
                    </a>
                </div>
            </div>
        </div>
    </footer>
    <div class="footer-sub">
        <div class="footer-sub_content">
            <div class="footer-sub_left">Được thực hiện bởi nhóm <span>Tranquil</span></div>
            <div class="footer-sub_right">vietravel@gmail.com</div>
        </div>
    </div>
</body>

</html>