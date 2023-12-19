<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VieTravel</title>
    <link rel="stylesheet" href="../content/css/reset.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="../content/css/header-footer.css">
    <link rel="stylesheet" href="../content/css/style.css">
    <link rel="stylesheet" href="../content/css/font.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
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
                <!-- <ion-icon name="person-add-outline"></ion-icon> -->
                <li>
                    <div class="has-submenu">
                        <a href="./signup.php">Đăng Ký</a>
                    </div>
                </li>

                <li class="has-submenu">
                    <!-- <ion-icon name="person-outline"></ion-icon> -->
                    <a href="login.php">Đăng Nhập</a>
                    <ul class="submenu">
                        <li><a href="login.php">User</a></li>
                        <li><a href="../admin/index.php">Admin </a></li>
                    </ul>
                </li>

                <li><a href="#"><i class="fas fa-search"></i></a>Tìm Kiếm</li>
            </ul>
        </nav>
    </header>
    <div class="banner">
        <!-- <img src="../content/images/figma/banner-header.png" alt="" class="img"> -->
        <div class="banner-content">
            <h3 class="banner-conent_title">
                CÔNG TY DU LỊCH
            </h3>
            <h2 class="banner-content_heading"><span>VIE</span>TRAVELERS</h2>
            <p class="banner-content_desc">“Đích đến không phải là nơi bạn kết thúc chuyến đi mà đó là những rủi ro và
                những kỷ niệm bạn đã tạo ra trên suốt chặng đường.” – Penelope Riley</p>
            <a href="tour.php" class="button">Tour du lịch</a>
        </div>
    </div>
    <aside>
        <div class="intro">
            <div class="intro-content">
                <div class="img">
                    <img src="../content/images/figma/intro.png" alt="Ảnh Qủa Địa Cầu">
                </div>
                <div class="intro-child">
                    <h1 class="intro-child_heading">Giới Thiệu</h1>
                    <p class="intro-child_desc">Đầu tiên, chân thành cảm ơn quý khách đã ghé thăm Website: Vietravel.
                        Xin phép được giới thiệu: Vietravel là đơn vị tổ chức Du Lịch Trực Tuyến có trụ sở chính và làm
                        việc trực tiếp tại Việt Nam (không phải là chi nhánh của một công
                        ty nào nơi khác). Chúng tôi hoạt động và chịu trách nhiệm trực tiếp với công việc của mình.
                    </p>
                    <a href="introduce.php" class="button">
                        Tìm Hiểu Thêm
                    </a>
                </div>
            </div>
        </div>
    </aside>
    <div></div>
    <!-- sản phẩm -->
    <div class="product-row">
        <div class="product">
            <div class="product-content">
                <h2 class="product-content_heading">TOUR HẤP DẪN</h2>
                <p class="product-content_desc">
                    Tour này sẽ đưa bạn đến những địa điểm đẹp và độc đáo trên khắp thế giới, giúp bạn khám phá và trải
                    nghiệm những điều mới mẻ, thú vị và đầy kích thích.
                    Bạn sẽ được khởi hành từ thành phố lớn và sôi động nhất của đất nước, tận hưởng không khí
                    đô thị đầy năng động và sự phấn khích của những người dân địa phương.
                    Sau đó, chuyến đi sẽ dẫn bạn đến những khu vườn hoa rực rỡ và thung lũng hoang sơ tuyệt đẹp, nơi bạn
                    có thể thả mình trong cảnh quan tuyệt vời và hít thở không khí trong lành của thiên nhiên.
                  
                </p>
            </div>
            <div class="product-cards">
                <a href="tour.php" class="product-card">
                    <img class="product-img" src="../content/images/figma/product-1.png" alt="Product 1">
                    <div class="product-card_content">
                        <p class="product-card_price=">810.000 vnđ</p>
                        <h3>Hoa Lư tràng An và...</h3>
                        <p class="product-card_date"> Thời gian: 7 ngày 6 đêm</p>
                    </div>
                </a>
                <a href="tour.php" class="product-card">
                    <img class="product-img" src="../content/images/sp2.jpg" alt="Product 1">
                    <div class="product-card_content">
                        <p class="product-card_price">810.000 vnđ</p>
                        <h3>Venice - Ý</h3>
                        <p class="product-card_date"> Thời gian: 3 ngày 1 đêm</p>
                    </div>
                </a>
                <a href="tour.php" class="product-card">
                    <img class="product-img" src="../content/images/sp3.jpg" alt="Product 1">
                    <div class="product-card_content">
                        <p class="product-card_price">810.000 vnđ</p>
                        <h3>Singapore</h3>
                        <p class="product-card_date"> Thời gian: 2 ngày 1 đêm</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="service">
        <h2 class="service-heading">Dịch Vụ</h2>
        <div class="service-cards">
            <div class="service-card">
                <img src="../content/images/visa.png" alt="visa">
                <h3>Đăng Ký Visa</h3>
                <p>Chi tiết Ưu đãi đã nêu được dựa vào thông tin cung cấp bởi Bên bán hàng. Visa không đảm bảo rằng
                    những thông tin này là chính xác. </p>
            </div>
            <div class="service-card">
                <img src="../content/images/figma/icon/air.png" alt="visa">
                <h3>Vé Máy Bay</h3>
                <p>Vé máy bay giá rẻ, có nhiều ưu đãi luôn là mục tiêu ưu thích của tất cả mọi người. App đặt vé máy bay của Etrip4u có đầy đủ các tính năng săn vé, book vé máy bay giá rẻ cực hấp dẫn. </p>
            </div>
            <div class="service-card">
                <img src="../content/images/figma/icon/bus.png" alt="visa">
                <h3>Vận Chuyển - Đưa Đón</h3>
                <p>Các đơn vị kinh doanh dịch vụ vận tải hành khách theo hợp đồng và lái xe chỉ được đón, trả khách tại các địa điểm đã ghi trong hợp đồng và thu cước vận tải theo giá trị hợp đồng đã ký kết.</p>
            </div>
            <div class="service-card">
                <img src="../content/images/figma/icon/hotel.png" alt="visa">
                <h3>Khách Sạn - Lưu Trú</h3>
                <p>Có tất cả các loại hình dịch vụ lưu trú hiện nay tại Việt Nam như :Hotel,Tourist village,Villa ,Serviced apartment,Tourist camping,Tourist guest house,Homestay,Condotel,Hometel,Bungalow,Boutique hotel.</p>
            </div>
        </div>
    </div>
    <div class="hotel">
        <div class="hotel-content">

            <h3 class="hotel-content_heading">KHÁCH SẠN LIBERTY - LARA</h3>
            <p class="hotel-cotent_desc">Hãy để chuyến đi của quý khách có một khởi đầu tuyệt vời khi ở lại khách sạn này, nơi có Wi-Fi miễn phí trong tất cả các phòng. Nằm ở vị trí chiến lược tại Quận 1, cho phép quý khách lui tới và gần với các điểm thu hút và tham quan địa phương. Đừng rời đi trước khi ghé thăm Bảo tàng Chứng tích chiến tranh nổi tiếng. Chỗ nghỉ 4 sao này có nhà hàng giúp cho kỳ nghỉ của quý khách thêm thư thái và đáng nhớ.</p>
            <div class="checkbox">
                <input type="radio" name="" id="" class="checkbox-input">
                <input type="radio" name="" id="" class="checkbox-input">
                <input type="radio" name="" id="" class="checkbox-input">
            </div>
        </div>
    </div>
    <div class="blog">
        <h2 class="blog-heading">TIN TỨC DU LỊCH</h2>
        <div class="blog-content">
            <div class="blog-left">
                <div class="blog-left_image">
                    <img src="../content/images/figma/blog-left.png" alt="" class="blog-left_img">
                    <div class="blog-left_content">
                        <p>Khách Mỹ nườm nượp đi chơi dù ca nCoV tăng mạnh</p>
                        <span>Bị mắc kẹt do ảnh hưởng của đại dịch, nữ doanh nhân startup du lịch người Mỹ đã ghi lại trải nghiệm 17 tháng ở Việt Nam và chắt lọc những bức ảnh siêu đáng yêu đăng trên trang mạng nước ngoài hồi đầu năm nay.</span>
                    </div>
                </div>
            </div>
            <div class="blog-right">
                <div class="blog-right_cards">
                    <div class="blog-right_card">
                        <img src="../content/images/figma/blog-card.png" alt="" class="right-card_img">
                        <div class="right-card_content">
                            <h4 class="right-card_heading">Phải ngủ ngoài đường dù đã đặt phòng khách sạn</h4>
                            <p class="right-card_desc">Khách sạn hết sức chứa vì du lịch tăng mạnh.</p>
                        </div>
                    </div>
                    <div class="blog-right_card">
                        <img src="../content/images/figma/new1.png" alt="" class="right-card_img">
                        <div class="right-card_content">
                            <h4 class="right-card_heading">Nghỉ dưỡng trọn gói năm sao ở Selectum Noa</h4>
                            <p class="right-card_desc">Nghỉ dưỡng trọn gói với giá ưu đãi cho thành viên vàng</p>
                        </div>
                    </div>
                    <div class="blog-right_card">
                        <img src="../content/images/figma/new2.png" alt="" class="right-card_img">
                        <div class="right-card_content">
                            <h4 class="right-card_heading">48h ăn chơi Hội An chưa hết 2,5 triệu đồng</h4>
                            <p class="right-card_desc">Đi,ăn,chơi ở Hội An chỉ với 2,5 triệu đồng.</p>
                        </div>
                    </div>
                    <div class="blog-right_card">
                        <img src="../content/images/figma/new3.png" alt="" class="right-card_img">
                        <div class="right-card_content">
                            <h4 class="right-card_heading">Saigontourist Group mở thêm nhiều tour mới ở Nam Bộ</h4>
                            <p class="right-card_desc">Tập đoàn SG Group đầu tư mạnh vào các tỉnh ở Nam Bộ.</p>
                        </div>
                    </div>
                    <div class="blog-right_card">
                        <img src="../content/images/figma/new4.png" alt="" class="right-card_img">
                        <div class="right-card_content">
                            <h4 class="right-card_heading">Vẻ đẹp của hai nhà thờ trên đất cố đô</h4>
                            <p class="right-card_desc">Chiêm ngưỡng vẻ đẹp cổ kính tại cố đô Hoa Lư.</p>
                        </div>
                    </div>
                    <div class="blog-right_card">
                        <img src="../content/images/figma/new5.png" alt="" class="right-card_img">
                        <div class="right-card_content">
                            <h4 class="right-card_heading">Ngôi làng đẹp nhất thế giới phiên bản Trung Quốc</h4>
                            <p class="right-card_desc">Ngôi làng biển đẹp như trong phim Avatar 2.</p>
                        </div>
                    </div>
                </div>
                <a href="news.php" class="button">Xem thêm</a>
            </div>
        </div>
    </div>
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
                        <img src="../content/images/figma/Rectangle 11.png"alt="" class="img">
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