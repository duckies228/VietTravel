<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tour Chi Tiết</title>
    <link rel="stylesheet" href="../content/css/reset.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="../content/css/header-footer.css">
    <link rel="stylesheet" href="../content/css/product1.css">
    <link rel="stylesheet" href="../content/css/font.css">
</head>

<body>
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
                <h2 class="header-banner_heading">Hoa Lư, Tràng An và Hang Múa</h2>
            </div>
        </div>
    </header>
    <main class="main">
        <div class="main-info">
            <div class="main-info_left">
                <img src="../content/images/figma/info1.png" alt="" class="info-img">
                <div class="info-content">
                    <p class="info-content_text">
                        Khám phá vẻ đẹp và lịch sử phong phú của làng quê Việt Nam trong chuyến phiêu lưu đáng nhớ từ Hà Nội
                    </p>
                    <p class="info-content_text">
                        Khám phá cố đô lịch sử Hoa Lư và thăm ngôi đền cổ của vua Đinh Bộ Lĩnh nổi tiếng
                    </p>
                </div>
            </div>
            <div class="main-info_right">
                <div class="info-right_images">
                    <img src="../content/images/figma/info2.png" alt="" class="info-right_img">
                    <img src="../content/images/figma/info2.png" alt="" class="info-right_img">
                    <a href="libary.php" class="button">Thư viện ảnh</a>
                </div>
                <div class="info-right-price">
                    <div class="price-number">810,000 VND</div>
                    <a href="service.php" class="button">Chọn các gói dịch vụ</a>
                </div>
            </div>
        </div>
        <div class="main-service">
            <h2 class="main-heading">CÁC GÓI DỊCH VỤ</h2>
            <div class="service">
                <div class="left">
                    <div class="service-order">
                        <h3 class="order-heading">Vui lòng chọn ngày & gói dịch vụ</h3>
                        <div class="order-times">
                            <h4>Xin chọn ngày đi tour </h4>
                            <div class="dates">
                                <input type="date" name="" id="" class="order-date">
                                <!-- <i class="fa fa-date dates-icon"></i> -->
                            </div>
                        </div>
                        <div class="order-type">
                            <h4>Loại gói dịch vụ</h4>
                            <div class="button">Tour Ghép - Xe Bus</div>
                        </div>
                        <div class="order-quantity">
                            <h4 class="order-quantity_heading">Số lượng</h4>
                            <section class="order-quantity_section">
                                <div class="quantity-text">
                                    <div class="quantity-desc">Người lớn</div>
                                    <p>Mua ít nhất là 1</p>
                                </div>
                                <div class="quantity-price">810,000 VND</div>
                                <div class="counter">
                                    <span class="minus">
                                        <i class="fa fa-minus icon"></i>
                                    </span>
                                    <span class="num">1</span>
                                    <span class="plus">
                                        <i class="fa fa-plus icon"></i>
                                    </span>
                                </div>
                            </section>
                            <section class="order-quantity_section">
                                <div class="quantity-text">
                                    <div class="quantity-desc">Trẻ em (cao từ 100cm-139cm)</div>
                                </div>
                                <div class="quantity-price">610,000 VND</div>
                                <div class="counter">
                                    <span class="minus">
                                        <i class="fa fa-minus icon"></i>
                                    </span>
                                    <span class="num">0</span>
                                    <span class="plus">
                                        <i class="fa fa-plus icon"></i>
                                    </span>
                                </div>
                            </section>
                            <div class="total">
                                <div class="total-content">
                                    <h4 class="total-heading">Tổng chi phí</h4>
                                    <p class="total-num">810,000 VND</p>
                                </div>
                             <a href="card.php" class="button">Đặt Ngay</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <div class="right-content">
                        <div class="right-head">
                            <h3 class="right-heading">Chi tiết gói dịch vụ
                            </h3>
                            <div class="right-text">
                                <span>Hoàn huỷ miễn phí trong 24h
                                </span>
                            </div>
                            <div class="right-text">
                                <span>Xác nhận tức thời
                                </span>
                            </div>
                        </div>
                        <div class="righ-container">
                            <div class="container-content">
                                <h3 class="container-content-heading">Lịch trình</h3>
                                <div class="warning">
                                    <i class="fas fa-exclamation-triangle warning-icon"></i>
                                    <p>Hãy chọn 1 điểm tập trung và vui lòng đến đúng giờ</p>
                                </div>
                                <div class="container-card">
                                    <div class="container-card_head">
                                        <i class="fas fa-map-marker-alt location-icon"></i>
                                        <h4 class="container-card_heading">
                                            <p>07:30</p> <span>Khởi hành</span></h4>
                                    </div>
                                    <div class="container-infor">
                                        <span class="box">Điểm đón</span>
                                        <p>Vui lòng đến điểm xuất phát trước giờ khởi hành 10 phút Phương tiện trung chuyển chung có thể đón sớm hơn hoặc muộn hơn Nhập tên và địa chỉ khách sạn của bạn ở trang thanh toán</p>
                                    </div>
                                </div>
                                <div class="container-card">
                                    <div class="container-card_head">
                                        <i class="fas fa-map-marker-alt location-icon"></i>
                                        <h4 class="container-card_heading">
                                            <p>08:00</p> <span>Khởi hành</span></h4>
                                    </div>
                                    <div class="container-infor">
                                        <span class="box">Điểm tập trung</span>
                                        <p>" Hanoi Opera House " vui lòng đến điểm xuất phát trước giờ khởi hành 10 phút Không hoàn tiền cho khách đến trễ hoặc vắng mặt</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="main-note">
                <h2 class="main-heading">Các điều cần lưu ý</h2>
                <ul class="list-text">
                    <h4>Nên mang theo gì: </h4>
                    <li class="item-text">Nón/mũ</li>
                    <li class="item-text">Kem chống nắng</li>
                    <li class="item-text">Kính mát</li>
                    <li class="item-text">Giày đi bộ và quần dài thoải mái để đạp xe và leo núi</li>
                </ul>
            </div>
            <div class="main-evaluate">
                <h2 class="main-heading">Các đánh giá gần đây</h2>
                <div class="evaluate-rating">
                    <div class="rating-num">5</div>
                    <div class="stars">
                        <i class="fa fa-star star-icon"></i>
                        <i class="fa fa-star star-icon"></i>
                        <i class="fa fa-star star-icon"></i>
                        <i class="fa fa-star star-icon"></i>
                        <i class="fa fa-star star-icon"></i>
                    </div>
                    <span>542 Đánh giá</span>
                </div>
            </div>
            <div class="main-feedback">
                <div class="feedback-card">
                    <div class="card-author">
                        <img src="../content/images/figma/author-avatar1.png" alt="" class="author-img">
                        <p class="author-name">Ánh Dương Ly</p>
                    </div>
                    <p class="card-comment">Very good. Xe đón đúng giờ, HDV nhiệt tình, cảnh đẹp</p>
                    <div class="card-images">
                        <img src="../content/images/figma/card-img.png" alt="" class="card-img">
                        <img src="../content/images/figma/card-img.png" alt="" class="card-img">
                        <img src="../content/images/figma/card-img.png" alt="" class="card-img">
                    </div>
                </div>
                <div class="feedback-card">
                    <div class="card-author">
                        <img src="../content/images/figma/author-avatar1.png" alt="" class="author-img">
                        <p class="author-name">Ánh Dương Ly</p>
                    </div>
                    <p class="card-comment">Very good. Xe đón đúng giờ, HDV nhiệt tình, cảnh đẹp</p>
                    <div class="card-images">
                        <img src="../content/images/figma/card-img.png" alt="" class="card-img">
                        <img src="../content/images/figma/card-img.png" alt="" class="card-img">
                        <img src="../content/images/figma/card-img.png" alt="" class="card-img">
                    </div>
                </div>
            </div>
    </main>
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
    <script src="../content/style.js"></script>
</body>

</html>